<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;


class AdminRecitationController extends Controller
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

 // recitation list page will be show with this function 
    public function index(Request $request){

        $ActiveStatus = $request->get('active_status');
        $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
                             ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                             ->where('BA_RECITER.RECITER_NAME', 'like','%'.$request->get('reciter_name').'%')
                             ->where('BA_RECITATION.ACTIVE_STATUS', $ActiveStatus)
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME')
                             ->paginate(40000)->appends(['poem_name' => $request->get('poem_name'), 'author_name' => $request->get('author_name'), 'reciter_name' => $request->get('reciter_name')]);


        return view('admin.recitation_list')->with('RecitationDetails',$RecitationDetails)
                                            ->with('page','recitation'); // in order to get active class;
    }

// showing the input form for recitation information insert
    public function create(){
  		
  

  	    $reciters = DB::table('BA_RECITER')
	  				  ->select('RECITER_ID','RECITER_NAME')
	  				  ->orderby('RECITER_NAME')
	  				  ->get();

  	    $poems 		= DB::table('BA_POEM')
  	    			  ->select('*')
  	    			  ->orderby('POEM_NAME')
  	    			  ->get();

        return view('admin.recitation_upload')->with('poems',$poems)
        									  ->with('reciters',$reciters)
                            ->with('page','recitation'); // in order to get active class;
        									  
    }


// storing recitation information to database 

    public function store(Request $request){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'reciter_name'                => 'required',
            'poem_name'         	      => 'required',
            'audio'					      => 'nullable|mimes:mpga,wav,ogg,mp3|max:5000000',
        	
        ]);

        $reciter_id   = $request->get('reciter_name');
        $poem_id      = $request->get('poem_name');
        $audio_flag	  = 1;
        $video_flag	  = 1;	

         // file upload
        if($request->hasFile('audio')){

	// generating poet name and poet id for file name convention 
	        $poet_details = DB::table('BA_POEM')
	        				->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
	        				->select('BA_AUTHOR.AUTHOR_ID','BA_AUTHOR.SHORT_CODE')
	        				->where('BA_POEM.POEM_ID', $poem_id)
	        				->get();
	        foreach ($poet_details as  $value) {
	         	  	$poet_id  = $value->AUTHOR_ID;
	         	  	$poet_code     = $value->SHORT_CODE;
	         	  } 	 
	         $poet_folder = $poet_id.'_'.str_replace(" ","_", $poet_code);
	// generating poet name and poet id for file name convention 


	// generating reciter name for folder convention
	        $reciter_name = DB::table('BA_RECITER')
	        				->select('SHORT_CODE')
	        				->where('RECITER_ID', $reciter_id)
	        				->get();
	        foreach ($reciter_name as  $value) {
	        			$reciter_code = $value->SHORT_CODE;		
	        	}
	        $reciter_folder = $reciter_id.'_'.str_replace(" ","_", $reciter_code);
	// generating reciter name for folder convention
				      

    //file upload 
          //commenting tanvir vais code 11/11/2018

            /*$filenameWithExt = $request->file('audio')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('audio')->getClientOriginalExtension();
            $fileNameToStore = $poet_code.'_'.$filename.'_'.time().'.'.$extension;
            $path = $request->file('audio')->storeAs('public/bangla_abritti/audio/'.$reciter_folder.'/'.$poet_folder, $fileNameToStore);
            $real_path = str_replace("public","/storage", $path);*/

            //commenting tanvir vais code end  11/11/2018

            //sazzad's code 11/11/2018

            $addio_file = $request->file('audio');
            $filenameWithExt = $request->file('audio')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $extension = $request->file('audio')->getClientOriginalExtension();
            $fileNameToStore = $poet_code.'_'.$filename.'_'.time().'.'.$extension;
            $location = public_path('bangla_abritti/audio/'.$reciter_folder.'/'.$poet_folder, $fileNameToStore);
            $addio_file->move($location,$fileNameToStore);
            $location2 ='bangla_abritti/audio/'.$reciter_folder.'/'.$poet_folder.'/'.$fileNameToStore;
             

            //sazzad's code end 11/11/2018

        }else{
            $location2 = null; //$real_path if no image selected this will be the default image
            $audio_flag = 0;
       }

       if(empty($request->get('video'))){
       		$video_flag = 0;
       }
 
    

       // insert query 
        $insert = DB::table('BA_RECITATION')->insert([

            'RECITATION_ID'          		 => $this->PK('BA_RECITATION'),
            'RECITER_ID'					 => $reciter_id ,
            'POEM_ID'						 => $poem_id,
            'AUDIO_FLAG'				 	 => $audio_flag,
            'AUDIO_FILE_PATH'				 => $location2, //$real_path
            'VIDEO_FLAG'					 => $video_flag,
            'VIDEO_LINK'					 => $request->get('video'),
            'ACTIVE_STATUS'       => $request->get('active_status'),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/recitation/create');

    }



 // showing single recitation page with book details
    public function show($id){


       
      $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME')
                             ->where('BA_RECITATION.RECITATION_ID', $id)
                             ->get();


  

        return view('admin.recitation_single_view')->with('RecitationDetails',$RecitationDetails)
                                                   ->with('page','recitation'); // in order to get active class;
                                             
    }




// in order to load the recitation edit page
    public function edit($id){


        $reciters = DB::table('BA_RECITER')
              ->select('RECITER_ID','RECITER_NAME')
              ->orderby('RECITER_NAME')
              ->get();

        $poems    = DB::table('BA_POEM')
                    ->select('*')
                    ->orderby('POEM_NAME')
                    ->get();

        $RecitationDetails = DB::table('BA_RECITATION')
                             ->select('*')
                             ->where('RECITATION_ID',$id)
                             ->get();


        return view('admin.recitation_edit')->with('poems',$poems)
                                            ->with('reciters',$reciters)
                                            ->with('RecitationDetails',$RecitationDetails)
                                            ->with('page','recitation'); // in order to get active class;

    }

//updating recitation table
   public function update(Request $request, $id){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
       // field validations 
        $this->validate($request,[

            'reciter_name'                => 'required',
            'poem_name'                 => 'required',
            'audio'                => 'nullable|mimes:mpga,wav,ogg,mp3|max:5000000',
          
        ]);

        $reciter_id   = $request->get('reciter_name');
        $poem_id      = $request->get('poem_name');
        $video_flag   = 1;
        $audio_flag = 1;
        $audio_file_path =  $request->get('audio_file_path');



       // file upload
       if($request->hasFile('audio')){

           // generating poet name and poet id for file name convention
           $poet_details = DB::table('BA_POEM')
               ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
               ->select('BA_AUTHOR.AUTHOR_ID','BA_AUTHOR.SHORT_CODE')
               ->where('BA_POEM.POEM_ID', $poem_id)
               ->get();
           foreach ($poet_details as  $value) {
               $poet_id  = $value->AUTHOR_ID;
               $poet_code     = $value->SHORT_CODE;
           }
           $poet_folder = $poet_id.'_'.str_replace(" ","_", $poet_code);
           // generating poet name and poet id for file name convention


           // generating reciter name for folder convention
           $reciter_name = DB::table('BA_RECITER')
               ->select('SHORT_CODE')
               ->where('RECITER_ID', $reciter_id)
               ->get();
           foreach ($reciter_name as  $value) {
               $reciter_code = $value->SHORT_CODE;
           }
           $reciter_folder = $reciter_id.'_'.str_replace(" ","_", $reciter_code);
           // generating reciter name for folder convention


           //file upload
           //commenting tanvir vais code 11/11/2018

           /*$filenameWithExt = $request->file('audio')->getClientOriginalName();
           $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           $extension = $request->file('audio')->getClientOriginalExtension();
           $fileNameToStore = $poet_code.'_'.$filename.'_'.time().'.'.$extension;
           $path = $request->file('audio')->storeAs('public/bangla_abritti/audio/'.$reciter_folder.'/'.$poet_folder, $fileNameToStore);
           $real_path = str_replace("public","/storage", $path);*/

           //commenting tanvir vais code end  11/11/2018

           //sazzad's code 11/11/2018

           $addio_file = $request->file('audio');
           $filenameWithExt = $request->file('audio')->getClientOriginalName();
           $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           $extension = $request->file('audio')->getClientOriginalExtension();
           $fileNameToStore = $poet_code.'_'.$filename.'_'.time().'.'.$extension;
           $location = public_path('bangla_abritti/audio/'.$reciter_folder.'/'.$poet_folder, $fileNameToStore);
           $addio_file->move($location,$fileNameToStore);
           $location2 ='bangla_abritti/audio/'.$reciter_folder.'/'.$poet_folder.'/'.$fileNameToStore;
           $audio_flag = 1;

           //sazzad's code end 11/11/2018

       }else{
           $location2 = null; //$real_path if no image selected this will be the default image
           $audio_flag = 0;
       }

//checking for video flag 

       if(empty($request->get('video'))){
         $video_flag = 0;
       }

       // update query 
        $insert = DB::table('BA_RECITATION')
                  ->where('RECITATION_ID',$id)
                  ->update([

                      'RECITER_ID'           => $reciter_id ,
                      'POEM_ID'              => $poem_id,
                      'AUDIO_FLAG'           => $audio_flag,
                      'AUDIO_FILE_PATH'      => $location2,
                      'VIDEO_FLAG'           => $video_flag,
                      'VIDEO_LINK'           => $request->get('video'),
                      'ACTIVE_STATUS'       => $request->get('active_status'),

                  ]);

        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/recitation/'.$id.'/edit');

    }

    //delete function
    public function delete($id){

        DB::table('BA_RECITATION')
            ->where('RECITATION_ID',$id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/recitation');
    }

}
