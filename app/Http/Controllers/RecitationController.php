<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;

class RecitationController extends Controller
{
     // recitation list page will be show with this function 
    public function index(Request $request){

         
         $vedio =1;
         $audio =1;
         $poemName = NULL;
         $poetName = NULL;
         $reciterName = NULL;

         if($request->get('vedio_flag')){

            $vedio = $request->get('vedio_flag');
             $audio =0;
            
            $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
                             ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                             ->where('BA_RECITER.RECITER_NAME', 'like','%'.$request->get('reciter_name').'%')
                             ->where('BA_RECITATION.ACTIVE_STATUS', 1)
                             ->where('BA_RECITATION.VIDEO_FLAG', $vedio)
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT','BA_RECITER.IMAGE_FILE_PATH')
                             ->paginate(10)->appends(['poem_name' => $request->get('poem_name'), 'author_name' => $request->get('author_name'), 'reciter_name' => $request->get('reciter_name')]);

                             /*return $vedio;*/

         }elseif ($request->get('audio_flag')) {
          $audio = $request->get('audio_flag');
          $vedio =0;
               
            $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
                             ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                             ->where('BA_RECITER.RECITER_NAME', 'like','%'.$request->get('reciter_name').'%')
                             ->where('BA_RECITATION.ACTIVE_STATUS', 1)
                             ->where('BA_RECITATION.AUDIO_FLAG', $audio)
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT','BA_RECITER.IMAGE_FILE_PATH')
                             ->paginate(10)->appends(['poem_name' => $request->get('poem_name'), 'author_name' => $request->get('author_name'), 'reciter_name' => $request->get('reciter_name')]);

         }
         else{

              $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
                             ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                             ->where('BA_RECITER.RECITER_NAME', 'like','%'.$request->get('reciter_name').'%')
                             ->where('BA_RECITATION.ACTIVE_STATUS', 1)
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT','BA_RECITER.IMAGE_FILE_PATH')
                             ->orderBy('BA_RECITER.RECITER_NAME')
                             ->orderBy('BA_AUTHOR.AUTHOR_NAME')
                             ->orderBy('BA_POEM.POEM_NAME')
                             ->paginate(10)->appends(['poem_name' => $request->get('poem_name'), 'author_name' => $request->get('author_name'), 'reciter_name' => $request->get('reciter_name')]);
                             /*return $RecitationDetails;*/    

         }

                         

        $authors =   DB::table('BA_AUTHOR') 
                              ->select('AUTHOR_NAME')
                              ->where('ACTIVE_STATUS', 1)
                              ->orderBy('AUTHOR_NAME')
                              ->get();

         $reciters =   DB::table('BA_RECITER') 
                              ->select('RECITER_NAME','IMAGE_FILE_PATH')
                              ->where('ACTIVE_STATUS', 1)
                              ->orderBy('RECITER_NAME')
                              ->get();                
                              
         /*reciter photo*/
         $reciterpics = DB::table('BA_RECITER') 
                              ->select('IMAGE_FILE_PATH','RECITER_NAME','RECITER_ID')
                              ->where('ACTIVE_STATUS', 1)
                              ->orderBy('RECITER_NAME')
                              ->whereNotNull('IMAGE_FILE_PATH')
                              ->take(15)
                              ->get();

        $poemName = $request->get('poem_name');
        $poetName = $request->get('author_name');
        $reciterName = $request->get('reciter_name');
                              
               //recitation_new old page
    	 return view('recitation.recitation',compact('RecitationDetails','authors','reciters','reciterpics','audio','vedio','poemName','poetName','reciterName')) ->with('page','recitation'); // in order to get active class;
    }

 //reload page
  public function reload(){
  
  	return redirect('/recitation');
  }

  //reset button
   public function ajax(Request $request){
  
   $states = DB::table('BA_RECITER')->where('ACTIVE_STATUS', 1)->pluck('RECITER_NAME','RECITER_ID')->all();

         $data = view('recitation.option',compact('states'))->render();
            return response()->json(['options'=>$data]);
  }



  public function ajaxRequestPost(Request $request)
    {

        
        $input = $request->name;
        $states = DB::table('BA_RECITER')->where('RECITER_NAME', 'like', $input.'%')->pluck('RECITER_NAME','RECITER_ID')->all();
         $data = view('recitation.option',compact('states'))->render();
            return response()->json(['options'=>$data]);
        
        /*return response()->json(['success'=>$states]);
*/
    }

     //poem page
  public function poem($id){
    $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->where('BA_RECITATION.RECITATION_ID', $id)
                             ->where('BA_RECITATION.ACTIVE_STATUS', 1)
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT', 'BA_RECITER.IMAGE_FILE_PATH')
                             ->get();
     
      return view('recitation.recitation_poem',compact('RecitationDetails'));
                            
  }

  //audio page
  public function audio($id){
    $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->where('BA_RECITATION.RECITATION_ID', $id)
                             ->where('BA_RECITATION.ACTIVE_STATUS', 1)
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT', 'BA_RECITER.IMAGE_FILE_PATH')
                             ->get();

                             /*return $RecitationDetails;*/

                             
     
      return view('recitation.recitation_audio',compact('RecitationDetails'));
                            
  }

    //vedio page
  public function vedio($id){
    $RecitationDetails = DB::table('BA_RECITATION')
                             ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
                             ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
                             ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                             ->where('BA_RECITATION.RECITATION_ID', $id)
                             ->where('BA_RECITATION.ACTIVE_STATUS', 1)
                             ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT', 'BA_RECITER.IMAGE_FILE_PATH')
                             ->get();
     
      return view('recitation.recitation_vedio',compact('RecitationDetails'));
                            
  }

    public function ajaxSearch1(Request $request){

        $RecitationDetails = DB::table('BA_RECITATION')
            ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
            ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
            ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
            ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
            ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
            ->where('BA_RECITER.RECITER_NAME', 'like','%'.$request->get('reciter_name').'%')
            ->where('BA_RECITATION.ACTIVE_STATUS', 1)
            ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT')
            ->orderBy('BA_RECITER.RECITER_NAME')
            ->orderBy('BA_AUTHOR.AUTHOR_NAME')
            ->orderBy('BA_POEM.POEM_NAME')
            ->get();

        /*$poem = $request->get('poem_name');
        $author = $request->get('author_name');
        $reciter = $request->get('reciter_name');
        $name = $poem.'_'.$author.'_'.$reciter;
        return response()->json(['options'=>$name]);*/

        return response()->json($RecitationDetails);

    }

    //Ajax Search button function

    public function ajaxSearch(Request $request){

        /*$poem = $request->get('poem_name');
        $author = $request->get('author_name');
        $reciter = $request->get('reciter_name');
        $audio = $request->get('audio_flag');
        $vedio = $request->get('vedio_flag');
        $name = $poem.'_'.$author.'_'.$reciter.'_vedio :'.$vedio.'_audio :'.$audio;
        return response()->json(['options'=>$name]);*/


        $RecitationDetails = DB::table('BA_RECITATION')
            ->join('BA_RECITER','BA_RECITER.RECITER_ID','BA_RECITATION.RECITER_ID')
            ->join('BA_POEM','BA_POEM.POEM_ID','BA_RECITATION.POEM_ID')
            ->join('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
            ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
            ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
            ->where('BA_RECITER.RECITER_NAME', 'like','%'.$request->get('reciter_name').'%')
            ->where('BA_RECITATION.ACTIVE_STATUS', 1)
            ->select('BA_RECITATION.*','BA_RECITER.RECITER_NAME','BA_POEM.POEM_NAME','BA_AUTHOR.AUTHOR_NAME','BA_POEM.POEM_TEXT','BA_RECITER.IMAGE_FILE_PATH')
            ->orderBy('BA_RECITER.RECITER_NAME')
            ->orderBy('BA_AUTHOR.AUTHOR_NAME')
            ->orderBy('BA_POEM.POEM_NAME')
            ->get();


        /*return response()->json($RecitationDetails);*/
        $vedio =1;
        $audio =1;

        $data = view('recitation.table',compact('RecitationDetails','audio','vedio'))->render();
        return response()->json(['options'=>$data]);
    }

    //Ajax Search button function End

}
