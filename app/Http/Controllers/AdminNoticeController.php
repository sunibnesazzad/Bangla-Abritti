<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Auth;

class AdminNoticeController extends Controller
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

   //Showing notice index page 
    public function index(Request $request){

        $start_date = $request->get('start_date');
         $end_date   = $request->get('end_date');

         //when one date range is empty and another one is filled in search option a default value is added to the empty date . default date is current date
    if (empty($request->get('start_date')) && !empty($request->get('end_date'))) {
          
            $start_date = $this->dateFormat();
            $end_date   = $request->get('end_date');

           }
  if (!empty($request->get('start_date')) && empty($request->get('end_date'))) {
          
            $start_date = $request->get('start_date');
            $end_date   = $this->dateFormat();

           }

        $ActiveStatus = $request->get('active_status');

// if both dates are not empty where between clause is used 
               if (!empty($start_date) && !empty($end_date)){

                $notices = DB::table('BA_NOTICE')
                         ->select('*')
                         ->where('ACTIVE_STATUS',$ActiveStatus)
                         ->where('NOTICE_TITLE', 'like','%'.$request->get('notice_name').'%')
                         ->whereBetween('PUBLISH_START_DATE', [$start_date,$end_date])
                         ->paginate(2000)->appends(['notice_name' => $request->get('notice_name') , 'start_date' => $start_date, 'end_date' => $end_date ]);

               }else{

                $notices = DB::table('BA_NOTICE')
                         ->select('*')
                         ->where('ACTIVE_STATUS',$ActiveStatus)
                         ->where('NOTICE_TITLE', 'like','%'.$request->get('notice_name').'%')
                         ->paginate(2000)->appends(['notice_name' => $request->get('notice_name') ]);

               }
        
        

        /*return $notices;*/
        return view('admin.notice.notice_list')->with('notices',$notices)
                                               ->with('page','notice'); // in order to get active class;     
    }


    //Showing create page
    public function create(){
  		
      
        return view('admin.notice.notice_upload')->with('page','notice'); // in order to get active class;
    }

    // storing Notice information in database 

    public function store(Request $request){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'notice_title'             => 'required',
            'notice_detail'			   =>'required',
            'notice_start_date'        => 'required',
            'notice_end_date'          =>'required',
            ]);
        

            /*$notice =$this->PK('BA_NOTICE');
        return $notice;*/


       // insert query 
        $insert = DB::table('BA_NOTICE')->insert([

            'NOTICE_ID'          	 => $this->PK('BA_NOTICE'),
            'NOTICE_TITLE'           => $request->get('notice_title'),
            'NOTICE_DESC'		 	 => $request->get('notice_detail'),
            'PUBLISH_START_DATE'	 => $request->get('notice_start_date'),
            'PUBLISH_END_DATE'		 => $request->get('notice_end_date'),
            'ACTIVE_STATUS'           => $request->get('active_status'),
            'ENTERED_BY'             => Auth::user()->USER_ID,
            'ENTRY_TIMESTAMP'        => Carbon::now(),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/notice/create');

    }

    /*Storing function end*/

// in order to load the notice edit page
    public function edit($id){

        $notices = DB::table('BA_NOTICE')
                         ->select('*')
                         ->where('NOTICE_ID', $id)
                         ->get();

        return view('admin.notice.notice_edit')->with('notices',$notices)
                                               ->with('page','notice'); // in order to get active class;

    }

    //Storing updating notice in database
        public function update(Request $request, $id){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'notice_title'             => 'required',
            'notice_detail'            =>'required',
            'notice_start_date'        => 'required',
            'notice_end_date'          =>'required',
            ]);


       // update query 
        $update = DB::table('BA_NOTICE')
                 ->where('NOTICE_ID', $id)
                 ->update([

            'NOTICE_TITLE'           => $request->get('notice_title'),
            'NOTICE_DESC'            => $request->get('notice_detail'),
            'PUBLISH_START_DATE'     => $request->get('notice_start_date'),
            'PUBLISH_END_DATE'       => $request->get('notice_end_date'),
            'ACTIVE_STATUS'           => $request->get('active_status'),

                ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/notice/'.$id.'/edit');

    }





       //Showing notice index page 
    public function index1(Request $request){

        $start_date = $request->get('start_date');
         $end_date   = $request->get('end_date');

         //when one date range is empty and another one is filled in search option a default value is added to the empty date . default date is current date
    if (empty($request->get('start_date')) && !empty($request->get('end_date'))) {
          
            $start_date = $this->dateFormat();
            $end_date   = $request->get('end_date');

           }
  if (!empty($request->get('start_date')) && empty($request->get('end_date'))) {
          
            $start_date = $request->get('start_date');
            $end_date   = $this->dateFormat();

           }

        $ActiveStatus = $request->get('active_status');

// if both dates are not empty where between clause is used 
               if (!empty($start_date) && !empty($end_date)){

                $notices = DB::table('BA_NOTICE')
                         ->select('*')
                         ->where('ACTIVE_STATUS',$ActiveStatus)
                         ->where('NOTICE_TITLE', 'like','%'.$request->get('notice_name').'%')
                         ->whereBetween('PUBLISH_START_DATE', [$start_date,$end_date])
                         ->paginate(10)->appends(['notice_name' => $request->get('notice_name') , 'start_date' => $start_date, 'end_date' => $end_date ]);

               }else{

                $notices = DB::table('BA_NOTICE')
                         ->select('*')
                         ->where('ACTIVE_STATUS',$ActiveStatus)
                         ->where('NOTICE_TITLE', 'like','%'.$request->get('notice_name').'%')
                         ->paginate(10)->appends(['notice_name' => $request->get('notice_name') ]);

               }
        
        

        /*return $notices;*/
        return view('admin.notice.notice_list')->with('notices',$notices)
                                               ->with('page','notice'); // in order to get active class;       
    }



    // in order to load the notice single page
    public function show($id){

        $notices = DB::table('BA_NOTICE')
            ->select('*')
            ->where('NOTICE_ID', $id)
            ->get();

        return view('admin.notice.notice_single')->with('notices',$notices)
            ->with('page','notice'); // in order to get active class;

    }

    //delete function
    public function delete($id){

        DB::table('BA_NOTICE')
            ->where('NOTICE_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/notice');
    }

}
