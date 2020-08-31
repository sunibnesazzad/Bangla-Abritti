<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;
use Auth;

class AdminCulturalOrgController extends Controller
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

    // date format function

    public function dateFormat(){
        $today = Carbon::now();
        return $today->toDateString();
    }

    //Showing create page
    public function create(){

        return view('admin.culturalOrg.culturalOrg_upload')->with('page','culturalOrg'); // in order to get active class;
    }


    // storing Cultural News in database

    public function store(Request $request){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations
        $this->validate($request,[

            'org_name'             => 'required',
            'builder_name'		   =>'required',
            'org_palace'           => 'required',
            'est_date'             => 'required',
            'org_text'             => 'required',
            'org_image'          =>'sometimes|image',
        ]);

        //for image
        if($request->hasFile('org_image')){
            $image = $request->file('org_image');
            $or_name = $request->file('org_image')->getClientOriginalName();
            $filename = time().'_'.$or_name;
            /*return $filename;*/
            $location = public_path('bangla_abritti/uploaded_img/cultural_org_images/' .$filename);
            Image::make($image)->resize(400,250)->save($location);
            /*$post->image=$filename;*/
        }else{
            $filename = 'org.jpg';

        }



        // insert query
        $insert = DB::table('BA_CULTURAL_ORG')->insert([

            'CULTURAL_ORG_ID'        => $this->PK('BA_CULTURAL_ORG'),
            'ORG_NAME'               => $request->get('org_name'),
            'ORG_DESC'		 	     => $request->get('org_text'),
            'ESTABLISHED_DATE'	     => $request->get('est_date'),
            'ORG_FOUNDER'            => $request->get('builder_name'),
            'ORG_ADDRESS'		 	 => $request->get('org_palace'),
            'ORG_IMAGE_PATH'		 => $filename,
            'ACTIVE_STATUS'          => $request->get('active_status'),
            'ENTERED_BY'             => Auth::user()->USER_ID,
            'ENTRY_TIMESTAMP'        => Carbon::now(),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/culturalOrg/create');

    }

    /*Storing function end*/
    //Showing admin cultural_Lists

    public function index(Request $request){



        $ActiveStatus = $request->get('active_status');

        $culturalOrgs = DB::table('BA_CULTURAL_ORG')
            ->select('*')
            ->where('ACTIVE_STATUS',$ActiveStatus)
            ->where('ORG_NAME', 'like','%'.$request->get('org_name').'%')
            ->paginate(1000)
            ->appends(['org_name' => $request->get('org_name') ]);

        return view('admin.culturalOrg.culturalOrg_list',compact('culturalOrgs'))->with('page','culturalOrg'); // in order to get active class;

    }

    //Showing admin cultural_Lists end

    //Showing edit page
    public function edit($id){
        $culturalOrgs = DB::table('BA_CULTURAL_ORG')
            ->select('*')
            ->where('CULTURAL_ORG_ID', $id)
            ->get();

        return view('admin.culturalOrg.culturalOrg_edit',compact('culturalOrgs'))->with('page','culturalOrg'); // in order to get active class;
    }


    //Storing updating culturalOrg in database
    public function update(Request $request, $id){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations
        $this->validate($request,[

            'org_name'             => 'required',
            'builder_name'		   =>'required',
            'org_palace'           => 'required',
            'est_date'             => 'required',
            'org_text'             => 'required',
            'org_image'          =>'sometimes|image',
        ]);

        //for image
        if($request->hasFile('org_image')){
            $image = $request->file('org_image');
            $or_name = $request->file('org_image')->getClientOriginalName();
            $filename = time().'_'.$or_name;
            /*return $filename;*/
            $location = public_path('bangla_abritti/uploaded_img/cultural_org_images/' .$filename);
            Image::make($image)->resize(400,250)->save($location);
            /*$post->image=$filename;*/
        }else{
            $file = DB::table('BA_CULTURAL_ORG')
                                  ->select('ORG_IMAGE_PATH')
                                  ->where('CULTURAL_ORG_ID', $id)
                                  ->first();

            $filename = $file->ORG_IMAGE_PATH;
        }


        // update query
        $update = DB::table('BA_CULTURAL_ORG')
            ->where('CULTURAL_ORG_ID', $id)
            ->update([

                'ORG_NAME'               => $request->get('org_name'),
                'ORG_DESC'		 	     => $request->get('org_text'),
                'ESTABLISHED_DATE'	     => $request->get('est_date'),
                'ORG_FOUNDER'            => $request->get('builder_name'),
                'ORG_ADDRESS'		 	 => $request->get('org_palace'),
                'ORG_IMAGE_PATH'		 => $filename,
                'ACTIVE_STATUS'          => $request->get('active_status'),
                'ENTERED_BY'             => Auth::user()->USER_ID,
                'ENTRY_TIMESTAMP'        => Carbon::now(),

            ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/culturalOrg/edit/'.$id);

    }

    //Showing single view page
    public function show($id){
        $culturalOrgs = DB::table('BA_CULTURAL_ORG')
            ->select('*')
            ->where('CULTURAL_ORG_ID', $id)
            ->get();

        return view('admin.culturalOrg.culturalOrg_single',compact('culturalOrgs'))->with('page','culturalOrg'); // in order to get active class;
    }

    //delete function
    public function delete($id){

        DB::table('BA_CULTURAL_ORG')
            ->where('CULTURAL_ORG_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/culturalOrg/index');
    }

}
