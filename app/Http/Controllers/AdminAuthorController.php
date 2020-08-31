<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class AdminAuthorController extends Controller
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


// author list page will be show with this function 
    public function index(Request $request){

        $ActiveStatus = $request->get('active_status');
        $AuthorDetails = DB::table('BA_AUTHOR')
                         ->leftjoin('BA_AUTHOR_TYPE','BA_AUTHOR_TYPE.AUTHOR_TYPE_ID','BA_AUTHOR.AUTHOR_TYPE_ID')
                         ->leftjoin('BG_COUNTRY','BG_COUNTRY.COUNTRY_ID','BA_AUTHOR.COUNTRY_BIRTH')
                         ->select('BA_AUTHOR.*','BA_AUTHOR_TYPE.TYPE_NAME','BG_COUNTRY.*')
                         ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                         ->where('BA_AUTHOR.ACTIVE_STATUS', $ActiveStatus)
                         ->orderby('BA_AUTHOR.AUTHOR_NAME')
                         ->paginate(1000)->appends(['author_name'=> $request->get('author_name'), 'active_status' => $request->get('active_status')]);


        return view('admin.poet_list')->with('AuthorDetails', $AuthorDetails)
                                      ->with('page','author'); // in order to get active class
    }


// showing the input form for author information insert
    public function create(){
        // getting the author type
        $AuthorTypes = DB::table('BA_AUTHOR_TYPE')
                       ->select('*')
                       ->get();
                       
        // getting the country list
        $CountryNames = DB::table('BG_COUNTRY')
                        ->select('*')
                        ->orderby('COUNTRY_NAME')
                        ->get();
        /*return $CountryNames;*/
        return view('admin.poet_upload')->with('AuthorTypes',$AuthorTypes)
                                        ->with('CountryNames',$CountryNames)
                                        ->with('page','author');
    }



// storing author information to database 

    public function store(Request $request){

        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'author_name'                => 'required',
            'author_email'               => 'email|nullable',
            'author_dod'                 => 'nullable|after_or_equal:author_dob',
            'short_code'                 => 'required|regex:/^[a-zA-Z]+$/u|max:15'           

        ]);




       // insert query 
        $insert = DB::table('BA_AUTHOR')->insert([

            'AUTHOR_ID'           => $this->PK('BA_AUTHOR'),
            'AUTHOR_NAME'         => $request->get('author_name'),
            'AUTHOR_TYPE_ID'      => $request->get('author_type'), // this value is hard coded it will be changed in near future
            'COUNTRY_BIRTH'       => $request->get('author_nationality'),
            'COUNTRY_LIVING'      => $request->get('author_citizenship'),
            'AUTHOR_DOB'          => $request->get('author_dob'),
            'AUTHOR_DEATH_DATE'   => $request->get('author_dod'),
            'AUTHOR_BIBLIOGRAPHY' => $request->get('author_biblography'),
            /*'AUTHOR_IMAGE'        => $request->file('author_image'),*/
            'LIVE_FLAG'           => $request->get('live_flag'),
            'PRESENT_ADDRESS'     => $request->get('present_address'),
            'PERMANENT_ADDRESS'   => $request->get('permanent_address'),
            'PRESENT_CITY'        => $request->get('present_city'),
            'PRESENT_DISTRICT'    => $request->get('present_district'),
            'PERMANENT_CITY'      => $request->get('permanent_city'),
            'PERMANENT_DISTRICT'  => $request->get('permanent_district'),
            'AUTHOR_EMAIL'        => $request->get('author_email'),
            'ACTIVE_STATUS'       => $request->get('active_status'),
            'SHORT_CODE'          => $request->get('short_code'),

        ]);

        Session::flash('error', "");
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');
        

        return redirect('/admin/author/create');

    }

// showing single author page with author details
    public function show($id){


        $AuthorDetails = DB::table('BA_AUTHOR')
                         ->join('BA_AUTHOR_TYPE','BA_AUTHOR_TYPE.AUTHOR_TYPE_ID','BA_AUTHOR.AUTHOR_TYPE_ID')
                         ->leftjoin('BG_COUNTRY','BG_COUNTRY.COUNTRY_ID','BA_AUTHOR.COUNTRY_BIRTH')
                         ->select('BA_AUTHOR.*','BA_AUTHOR_TYPE.TYPE_NAME','BG_COUNTRY.COUNTRY_NAME')
                         ->where('BA_AUTHOR.AUTHOR_ID', $id)
                         ->get();

        foreach($AuthorDetails as $AuthorDetail)
        {
            $AuthorCountry = $AuthorDetail->COUNTRY_LIVING;
        }

        $CountryLiving = DB::table('BG_COUNTRY')
                         ->select('*')
                         ->where('COUNTRY_ID', $AuthorCountry)
                         ->get();

        $country = '';
        foreach($CountryLiving as $value)
        {
            $country = $value->COUNTRY_NAME;
        }      



        return view('admin.poet_single_view')->with('AuthorDetails',$AuthorDetails)
                                             ->with('country',$country)
                                             ->with('page','author');
    }

// in order to load the author edit page
    public function edit($id){

        // getting the author type
        $AuthorTypes = DB::table('BA_AUTHOR_TYPE')
                       ->select('*')
                       ->get();
                       
        // getting the country list
        $CountryNames = DB::table('BG_COUNTRY')
                        ->select('*')
                        ->orderby('COUNTRY_NAME')
                        ->get();


        $AuthorDetails = DB::table('BA_AUTHOR')
                         ->select('*')
                         ->where('AUTHOR_ID',$id)
                         ->get();
        return view('admin.poet_edit')->with('AuthorDetails',$AuthorDetails)
                                      ->with('AuthorTypes',$AuthorTypes)
                                      ->with('CountryNames',$CountryNames)
                                      ->with('page','author');
    }

// saving the changes in input form for edit input form

    public function update(Request $request, $id){

        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
          // field validations 
        $this->validate($request,[

            'author_name'                => 'required',
            'author_email'               => 'email|nullable',
            'author_dod'                 => 'nullable|after_or_equal:author_dob',
            'short_code'                 => 'required|regex:/^[a-zA-Z]+$/u|max:15'            

        ]);



        // update query 
        $update = DB::table('BA_AUTHOR')
                 ->where('AUTHOR_ID', $id)
                 ->update([

            'AUTHOR_NAME'         => $request->get('author_name'),
            'AUTHOR_TYPE_ID'      => $request->get('author_type'), // this value is hard coded it will be changed in near future
            'COUNTRY_BIRTH'       => $request->get('author_nationality'),
            'COUNTRY_LIVING'     => $request->get('author_citizenship'),
            'AUTHOR_DOB'          => $request->get('author_dob'),
            'AUTHOR_DEATH_DATE'   => $request->get('author_dod'),
            'AUTHOR_BIBLIOGRAPHY' => $request->get('author_biblography'),
            'PRESENT_ADDRESS'     => $request->get('present_address'),
            'PERMANENT_ADDRESS'   => $request->get('permanent_address'),
            'PRESENT_CITY'        => $request->get('present_city'),
            'PRESENT_DISTRICT'    => $request->get('present_district'),
            'PERMANENT_CITY'      => $request->get('permanent_city'),
            'PERMANENT_DISTRICT'  => $request->get('permanent_district'),
            'AUTHOR_EMAIL'        => $request->get('author_email'),
            'ACTIVE_STATUS'       => $request->get('active_status'),
            'SHORT_CODE'          => $request->get('short_code'),


        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/author/'.$id.'/edit');

    }

    //delete function
    public function delete($id){

        DB::table('BA_AUTHOR')->where('AUTHOR_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/author');
    }


}
