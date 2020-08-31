<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;
use Auth;

class AdminReciterController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
    }


// primary key generatorb . this function will be used to generate primary key 
    public function PK($table_name){
        $PK = DB::select('SELECT FNC_GETPK("'.$table_name.'");');
           foreach ($PK as $value) {
                $result = $value;
           }
           foreach ($result as  $id) {
               $result = $id; // primary key
           }

           return $id;
    }

// reciter list page will be show with this function 
    public function index(Request $request){

        $ActiveStatus = $request->get('active_status');
        $AuthorDetails = DB::table('BA_RECITER')
                         ->leftjoin('BG_COUNTRY','BG_COUNTRY.COUNTRY_ID','BA_RECITER.COUNTRY_BIRTH')
                         ->select('BA_RECITER.*','BG_COUNTRY.COUNTRY_NAME')
                         ->where('BA_RECITER.RECITER_NAME', 'like','%'.$request->get('reciter_name').'%')
                         ->where('BA_RECITER.ACTIVE_STATUS', $ActiveStatus)
                         ->orderby('BA_RECITER.RECITER_NAME')
                         ->paginate(1000)->appends(['reciter_name'=> $request->get('reciter_name'), 'active_status' => $request->get('active_status')]);

        return view('admin.reciter_list')->with('AuthorDetails', $AuthorDetails)
                                          ->with('page','reciter'); // in order to get active class;
    }


// showing the input form for reciter information insert
    public function create(){
  		
        // getting the country list
        $CountryNames = DB::table('BG_COUNTRY')
                        ->select('*')
                        ->orderby('COUNTRY_NAME')
                        ->get();
        return view('admin.reciter_upload')->with('CountryNames',$CountryNames)
                                           ->with('page','reciter'); // in order to get active class;;
    }

// storing reciter information to database 

  public function store(Request $request){

    Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'author_name'                => 'required',
            'author_email'               => 'email|nullable',
            'author_image'               => 'sometimes|image',
            'short_code'                 => 'required|regex:/^[a-zA-Z]+$/u|max:15'  
                    

        ]);

        /* commenting tanvir vai code*/

        // image upload
        /*if($request->hasFile('author_image')){
            $filenameWithExt = $request->file('author_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('author_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('author_image')->storeAs('public/images/author', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg'; // if no image selected this will be the default image
       }*/

       /*commenting tanvir vai code end*/
      
       //for image
        if($request->hasFile('author_image')){
            $image = $request->file('author_image');
            $filename = time().$request->get('short_code').'.'.$image->getClientOriginalExtension();
            $location = public_path('bangla_abritti/uploaded_img/reciter_images/' .$filename);
            Image::make($image)->resize(300,300)->save($location);
            /*$post->image=$filename;*/
        }else{
            $filename = 'avatar.jpg';

        }


       // insert query 
        $insert = DB::table('BA_RECITER')->insert([

            'RECITER_ID'           => $this->PK('BA_RECITER'),
            'RECITER_NAME'         => $request->get('author_name'),
            'COUNTRY_BIRTH'        => $request->get('author_nationality'),
            'COUNTRY_LIVING'       => $request->get('author_citizenship'),
            'RECITER_DOB'          => $request->get('author_dob'),
            'RECITER_NID'		   => $request->get('nid'),
            'RECITER_BIBLIOGRAPHY' => $request->get('author_biblography'),
            'IMAGE_FILE_PATH'        => $filename,
            'PRESENT_ADDRESS'      => $request->get('present_address'),
            'PERMANENT_ADDRESS'    => $request->get('permanent_address'),
            'PRESENT_CITY'         => $request->get('present_city'),
            'PRESENT_DISTRICT'     => $request->get('present_district'),
            'PERMANENT_CITY'       => $request->get('permanent_address'),
            'PERMANENT_DISTRICT'   => $request->get('permanent_district'),
            'RECITER_EMAIL'        => $request->get('author_email'),
            'ACTIVE_STATUS'       => $request->get('active_status'),
            'SHORT_CODE'          => $request->get('short_code'),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/reciter/create');

    }


// showing single reciter page with author details
    public function show($id){


        $AuthorDetails = DB::table('BA_RECITER')
                         ->leftjoin('BG_COUNTRY','BG_COUNTRY.COUNTRY_ID','BA_RECITER.COUNTRY_BIRTH')
                         ->select('BA_RECITER.*','BG_COUNTRY.COUNTRY_NAME')
                         ->where('BA_RECITER.RECITER_ID', $id)
                         ->get();

        foreach($AuthorDetails as $AuthorDetail)
        {
            $AuthorCountry = $AuthorDetail->COUNTRY_LIVING;
        }

        $CountryLiving = DB::table('BG_COUNTRY')
                         ->select('*')
                         ->where('COUNTRY_ID', $AuthorCountry)
                         ->get();

        foreach($CountryLiving as $value)
        {
            $country = $value->COUNTRY_NAME;
        }      

        return view('admin.reciter_single_view')->with('AuthorDetails',$AuthorDetails)
                                                ->with('country',$country)
                                                ->with('page','reciter'); // in order to get active class;;
    }


// in order to load the reciter edit page
    public function edit($id){

        // getting the country list
        $CountryNames = DB::table('BG_COUNTRY')
                        ->select('*')
                        ->get();


        $AuthorDetails = DB::table('BA_RECITER')
                         ->select('*')
                         ->where('RECITER_ID',$id)
                         ->get();
        return view('admin.reciter_edit')->with('AuthorDetails',$AuthorDetails)
                                         ->with('CountryNames',$CountryNames)
                                         ->with('page','reciter'); // in order to get active class;;
    }


// saving the changes in input form for edit input form

    public function update(Request $request, $id){

         Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
          // field validations 
        $this->validate($request,[

            'author_name'                => 'required',
            'author_email'               => 'email|nullable',
            'author_image'               => 'sometimes|image',
            'short_code'                 => 'required|regex:/^[a-zA-Z]+$/u|max:15'   
                      

        ]);

        //for image

        if($request->hasFile('author_image')){
            $image = $request->file('author_image');
            $filename = time().$request->get('short_code').'.'.$image->getClientOriginalExtension();
            $location = public_path('bangla_abritti/uploaded_img/reciter_images/' .$filename);
            Image::make($image)->resize(300,300)->save($location);
            /*$post->image=$filename;*/
        }else{

            $file = DB::table('BA_RECITER')
                ->select('IMAGE_FILE_PATH')
                ->where('RECITER_ID', $id)
                ->first();

            $filename = $file->IMAGE_FILE_PATH;

        }

        // update query 
        $update = DB::table('BA_RECITER')
                 ->where('RECITER_ID', $id)
                 ->update([

           
            'RECITER_NAME'         => $request->get('author_name'),
            'COUNTRY_BIRTH'        => $request->get('author_nationality'),
            'COUNTRY_LIVING'       => $request->get('author_citizenship'),
            'RECITER_DOB'          => $request->get('author_dob'),
            'RECITER_NID'		   => $request->get('nid'),
            'RECITER_BIBLIOGRAPHY' => $request->get('author_biblography'),
            'RECITER_IMAGE'        => $request->file('author_image'),
             'IMAGE_FILE_PATH'        => $filename,
            'PRESENT_ADDRESS'      => $request->get('present_address'),
            'PERMANENT_ADDRESS'    => $request->get('permanent_address'),
            'PRESENT_CITY'         => $request->get('present_city'),
            'PRESENT_DISTRICT'     => $request->get('present_district'),
            'PERMANENT_CITY'       => $request->get('permanent_address'),
            'PERMANENT_DISTRICT'   => $request->get('permanent_district'),
            'RECITER_EMAIL'        => $request->get('author_email'),
            'ACTIVE_STATUS'       => $request->get('active_status'),
            'SHORT_CODE'          => $request->get('short_code'),

        ]);
         Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/reciter/'.$id.'/edit');

    }

    //delete function
    public function delete($id){

        DB::table('BA_RECITER')
            ->where('RECITER_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/reciter');
    }


}
