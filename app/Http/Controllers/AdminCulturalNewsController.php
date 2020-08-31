<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;
use Auth;

class AdminCulturalNewsController extends Controller
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
  		
        return view('admin.culturalNews.culturalNews_create')->with('page','culturalNews'); // in order to get active class;
    }


    // storing Cultural News in database 

    public function store(Request $request){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'news_name'             => 'required',
            'news_date'			    =>'required',
            'news_text'             => 'required',
            'news_image'          =>'sometimes|image',
            ]);

       //for image
        if($request->hasFile('news_image')){
            $image = $request->file('news_image');
            $or_name = $request->file('news_image')->getClientOriginalName();
            $filename = time().'_'.$or_name;
            /*return $filename;*/
            $location = public_path('bangla_abritti/uploaded_img/cultural_news_images/' .$filename);
            Image::make($image)->resize(400,250)->save($location);
            /*$post->image=$filename;*/
        }else{
            $filename = 'occ.jpg';

        }  
      
        

       // insert query 
        $insert = DB::table('BA_CULTURAL_NEWS')->insert([

            'CULTURAL_NEWS_ID'       => $this->PK('BA_CULTURAL_NEWS'),
            'NEWS_TITLE'             => $request->get('news_name'),
            'NEWS_DESC'		 	     => $request->get('news_text'),
            'EVENT_DATE'	         => $request->get('news_date'),
            'IMAGE_FILE_PATH'		 => $filename,
            'ACTIVE_STATUS'          => $request->get('active_status'),
            'ENTERED_BY'             => Auth::user()->USER_ID,
            'ENTRY_TIMESTAMP'        => Carbon::now(),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/culturalNews/create');

    }

    /*Storing function end*/

    //Showing admin cultural_Lists

    public function index(Request $request){

        $news_date = $request->get('news_date');

        $ActiveStatus = $request->get('active_status');

        $culturalNews = DB::table('BA_CULTURAL_NEWS')
                         ->select('*')
                         ->where('ACTIVE_STATUS',$ActiveStatus)
                         ->where('EVENT_DATE','like','%'.$news_date.'%')
                         ->where('NEWS_TITLE', 'like','%'.$request->get('news_name').'%')
                         ->paginate(1000)
                         ->appends(['news_name' => $request->get('news_name') , 'news_date' => $news_date ]);
        
        return view('admin.culturalNews.culturalNews_list',compact('culturalNews'))->with('page','culturalNews'); // in order to get active class;
    }    

    //Showing admin cultural_Lists end

// in order to load the News edit page
    public function edit($id){

        $culturalNews = DB::table('BA_CULTURAL_NEWS')
            ->select('*')
            ->where('CULTURAL_NEWS_ID', $id)
            ->get();

        return view('admin.culturalNews.culturalNews_edit')->with('culturalNews',$culturalNews)
            ->with('page','culturalNews'); // in order to get active class;

    }

    //Storing updating notice in database
    public function update(Request $request, $id){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations
        $this->validate($request,[

            'news_name'             => 'required',
            'news_date'			    =>'required',
            'news_text'             => 'required',
            'news_image'          =>'sometimes|image',
        ]);

        //for image
        if($request->hasFile('news_image')){
            $image = $request->file('news_image');
            $or_name = $request->file('news_image')->getClientOriginalName();
            $filename = time().'_'.$or_name;
            /*return $filename;*/
            $location = public_path('bangla_abritti/uploaded_img/cultural_news_images/' .$filename);
            Image::make($image)->resize(400,250)->save($location);
            /*$post->image=$filename;*/
        }else{
            $file = DB::table('BA_CULTURAL_NEWS')
                ->select('IMAGE_FILE_PATH')
                ->where('CULTURAL_NEWS_ID', $id)
                ->first();

            $filename = $file->IMAGE_FILE_PATH;
        }

        // update query
        $update = DB::table('BA_CULTURAL_NEWS')
            ->where('CULTURAL_NEWS_ID', $id)
            ->update([

                'NEWS_TITLE'             => $request->get('news_name'),
                'NEWS_DESC'		 	     => $request->get('news_text'),
                'EVENT_DATE'	         => $request->get('news_date'),
                'IMAGE_FILE_PATH'		 => $filename,
                'ACTIVE_STATUS'          => $request->get('active_status'),
                'ENTERED_BY'             => Auth::user()->USER_ID,
                'ENTRY_TIMESTAMP'        => Carbon::now(),

            ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/culturalNews/edit/'.$id);

    }

// in order to show the News single page
    public function show($id){

        $culturalNews = DB::table('BA_CULTURAL_NEWS')
            ->select('*')
            ->where('CULTURAL_NEWS_ID', $id)
            ->get();

        return view('admin.culturalNews.culturalNews_single')->with('culturalNews',$culturalNews)
            ->with('page','culturalNews'); // in order to get active class;

    }


    //delete function
    public function delete($id){

        DB::table('BA_CULTURAL_NEWS')
            ->where('CULTURAL_NEWS_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/culturalNews/index');
    }

}
