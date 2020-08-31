<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Auth;

class CommentController extends Controller
{

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

    // in order to show comment page
    public function index(){
         
         $comments = DB::table('BA_COMMENT')
                         ->select('*')
                         ->where('ACTIVE_STATUS',1)
                         ->orderBy('ENTRY_TIMESTAMP','desc')
                         ->paginate(10);

        return view('comments.comments',compact('comments')); // in order to get active class;

    }

        // storing comment information in database 

    public function store(Request $request){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'com_user'             => 'required',
            'com_user_email'	   => 'required|email',
            'com_user_detail'      => 'required',
            
            ]);

        

       // insert query 
        $insert = DB::table('BA_COMMENT')->insert([

            'COMMENT_ID'          	 => $this->PK('BA_COMMENT'),
            'commented_by_name'      => $request->get('com_user'),
            'commented_by_email'	 => $request->get('com_user_email'),
            'COMMENT_DESC'	         => $request->get('com_user_detail'),
            'ACTIVE_STATUS'          => 0,
            'ENTRY_TIMESTAMP'        => Carbon::now(),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/comment');

    }


}
