<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Auth;

class AdminCommentController extends Controller
{
       //Showing notice index page 
    public function index(Request $request){

       $ActiveStatus = $request->get('active_status');
/*       return $ActiveStatus;*/

        if($ActiveStatus==NULL){
        	$comments = DB::table('BA_COMMENT')
                         ->select('*')
                         ->orderBy('COMMENT_ID','desc')
                         ->paginate(1000);

        }else{
        	   $comments = DB::table('BA_COMMENT')
                         ->select('*')
                         ->where('ACTIVE_STATUS',$ActiveStatus)
                         ->orderBy('COMMENT_ID','desc')
                         ->paginate(1000);

        }

        return view('admin.comments.comments_list',compact('comments'))->with('page','comment'); // in order to get active class;       
    }

//changing active status
    public function changeStatus($id){

        $ACTIVE_STATUS = DB::SELECT(" SELECT ACTIVE_STATUS FROM BA_COMMENT WHERE COMMENT_ID = '$id'");

        foreach ($ACTIVE_STATUS as $value) {
            
            $status = $value->ACTIVE_STATUS;

        }

        if ($status == 0) {
           $update =  DB::table('BA_COMMENT')
                              ->where('COMMENT_ID', $id)
                              ->update([
                                'ACTIVE_STATUS' => 1
                            ]);
        }else{
            $update =  DB::table('BA_COMMENT')
                              ->where('COMMENT_ID', $id)
                              ->update([
                                'ACTIVE_STATUS' => 0
                            ]);
        }

        $comments = DB::table('BA_COMMENT')
                         ->select('*')
                         ->where('COMMENT_ID',$id)
                         ->get();

        Session::flash('success','তথ্য সফল্ভাবে পরিবর্তিত হয়েছে');

         return view('admin.comments.comments_list',compact('comments'))->with('page','comment'); // in order to get active class;  
    }


    //delete function
    public function delete($id){

        DB::table('BA_COMMENT')
            ->where('COMMENT_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/comment');
    }

}
