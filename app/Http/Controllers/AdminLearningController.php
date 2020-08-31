<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;
use Auth;

class AdminLearningController extends Controller
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

        return view('admin.learning.learning_upload')->with('page','learning'); // in order to get active class;
    }

    //Showing admin cultural_Lists

    public function index(Request $request){

        $learning_category = $request->get('learning_category');

        $learning_date = $request->get('learning_date');

        $ActiveStatus = $request->get('active_status');

        $learningLists = DB::table('BA_LEARNING')
            ->select('*')
            ->where('ACTIVE_STATUS',$ActiveStatus)
            ->where('LEARNING_CATEGORY_ID',$learning_category)
            ->where('LEARNING_TITLE', 'like','%'.$request->get('learning_title').'%')
            ->where('PUBLISH_START_DATE','like','%'.$learning_date.'%')
            ->paginate(1000);
            /*->appends(['news_name' => $request->get('news_name') , 'news_date' => $news_date ]);*/




        return view('admin.learning.learning_list',compact('learningLists'))->with('page','learning'); // in order to get active class;
    }

    // storing Learning information in database

    public function store(Request $request){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations
        $this->validate($request,[

            'learning_title'             => 'required',
            'learning_detail'			 =>'required',
            'learning_date'              => 'required',
            /*'learning_category'          =>'required',*/
        ]);


        // insert query
        $insert = DB::table('BA_LEARNING')->insert([

            'LEARNING_ID'          	 => $this->PK('BA_LEARNING'),
            'LEARNING_CATEGORY_ID'           => $request->get('learning_category'),
            'LEARNING_TITLE'		 	 => $request->get('learning_title'),
            'LEARNING_DESC'	 => $request->get('learning_detail'),
            'PUBLISH_START_DATE'		 => $request->get('learning_date'),
            'ACTIVE_STATUS'           => $request->get('active_status'),
            'ENTERED_BY'             => Auth::user()->USER_ID,
            'ENTRY_TIMESTAMP'        => Carbon::now(),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/learning/create');

    }

    // in order to load the learning edit page
    public function edit($id){

        $learningLists  = DB::table('BA_LEARNING')
            ->select('*')
            ->where('LEARNING_ID', $id)
            ->get();

        return view('admin.learning.learning_edit')->with('learningLists',$learningLists)
            ->with('page','learning'); // in order to get active class;

    }

    // in order to load the learning show page
    public function show($id){

        $learningLists  = DB::table('BA_LEARNING')
            ->select('*')
            ->where('LEARNING_ID', $id)
            ->get();

        return view('admin.learning.learning_show')->with('learningLists',$learningLists)
            ->with('page','learning'); // in order to get active class;

    }


    //Storing updating notice in database
    public function update(Request $request, $id){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations
        $this->validate($request,[

            'learning_title'             => 'required',
            'learning_detail'			 =>'required',
            'learning_date'              => 'required',
        ]);


        // update query
        $update = DB::table('BA_LEARNING')
            ->where('LEARNING_ID', $id)
            ->update([

                'LEARNING_CATEGORY_ID'       => $request->get('learning_category'),
                'LEARNING_TITLE'		 	 => $request->get('learning_title'),
                'LEARNING_DESC'	             => $request->get('learning_detail'),
                'PUBLISH_START_DATE'		 => $request->get('learning_date'),
                'ACTIVE_STATUS'              => $request->get('active_status'),
                'ENTERED_BY'             => Auth::user()->USER_ID,
                'ENTRY_TIMESTAMP'        => Carbon::now(),

            ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/learning/edit/'.$id);

    }


    //delete function
    public function delete($id){

        DB::table('BA_LEARNING')
            ->where('LEARNING_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/learning/index');
    }

}
