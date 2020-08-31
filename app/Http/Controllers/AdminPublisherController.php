<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class AdminPublisherController extends Controller
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

        $PublisherDetails = DB::table('BA_PUBLISHER')
                             ->leftjoin('BG_COUNTRY','BG_COUNTRY.COUNTRY_ID','BA_PUBLISHER.PUBLISHER_COUNTRY')
                             ->select('BA_PUBLISHER.*','BG_COUNTRY.COUNTRY_NAME')
                             ->where('BA_PUBLISHER.PUBLISHER_NAME', 'like','%'.$request->get('publisher_name').'%')
                             ->where('BA_PUBLISHER.ACTIVE_STATUS', $ActiveStatus)
                             ->orderby('BA_PUBLISHER.PUBLISHER_NAME')
                             ->paginate(100)->appends(['publisher_name' => $request->get('publisher_name'),'active_status' => $request->get('active_status')]);


        return view('admin.publisher_list')->with('PublisherDetails', $PublisherDetails)
                                           ->with('page','publisher'); // in order to get active class;
    }


// showing the input form for publisher information insert
    public function create(){
  		
        // getting the country list
        $CountryNames = DB::table('BG_COUNTRY')
                        ->select('*')
                        ->orderby('COUNTRY_NAME')
                        ->get();
        return view('admin.publisher_upload')->with('CountryNames',$CountryNames)
                                             ->with('page','publisher'); // in order to get active class;;
    }

 // storing publisher information to database 

    public function store(Request $request){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'publisher_name'                => 'required',
                
        ]);



       // insert query 
        $insert = DB::table('BA_PUBLISHER')->insert([

            'PUBLISHER_ID'           => $this->PK('BA_PUBLISHER'),
            'PUBLISHER_NAME'         => $request->get('publisher_name'),
            'PUBLISHER_COUNTRY'		 => $request->get('publisher_nationality'),
            'PUBLISHER_ADDRESS'		 => $request->get('publisher_address'),
            'ACTIVE_STATUS'          => $request->get('active_status'),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/publisher/create');

    }



// showing single author page with publisher details
    public function show($id){


        $PublisherDetails = DB::table('BA_PUBLISHER')
	                         ->leftjoin('BG_COUNTRY','BG_COUNTRY.COUNTRY_ID','BA_PUBLISHER.PUBLISHER_COUNTRY')
	                         ->select('BA_PUBLISHER.*','BG_COUNTRY.COUNTRY_NAME')
	                         ->where('BA_PUBLISHER.PUBLISHER_ID', $id)
	                         ->get();

  

        return view('admin.publisher_single_view')->with('PublisherDetails',$PublisherDetails)
                                                  ->with('page','publisher'); // in order to get active class;
                                             
    }


// in order to load the publisher edit page
    public function edit($id){

        // getting the country list
        $CountryNames = DB::table('BG_COUNTRY')
                        ->select('*')
                        ->get();


        $PublisherDetails = DB::table('BA_PUBLISHER')
                         ->select('*')
                         ->where('PUBLISHER_ID',$id)
                         ->get();
        return view('admin.publisher_edit')->with('PublisherDetails',$PublisherDetails)
                                           ->with('CountryNames',$CountryNames)
                                           ->with('page','publisher'); // in order to get active class;
    }

// saving the changes in input form for edit input form

    public function update(Request $request, $id){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
    	// field validations 
        $this->validate($request,[

            'publisher_name'                => 'required',
         
        ]);



       // update query 
        $update = DB::table('BA_PUBLISHER')
        		  ->where('PUBLISHER_ID', $id)
        		  ->update([

			            'PUBLISHER_NAME'         => $request->get('publisher_name'),
			            'PUBLISHER_COUNTRY'		 => $request->get('publisher_nationality'),
			            'PUBLISHER_ADDRESS'		 => $request->get('publisher_address'),
                        'ACTIVE_STATUS'          => $request->get('active_status'),

			        ]);
     
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/publisher/'.$id.'/edit');

    }

    //delete function
    public function delete($id){

        DB::table('BA_PUBLISHER')
            ->where('PUBLISHER_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/publisher');
    }

}
