<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;

class CulturalNewsController extends Controller
{

	//Showing index page
      public function index(){

      	$culturalNews = DB::table('BA_CULTURAL_NEWS')
                         ->select('*')
                         ->where('ACTIVE_STATUS', 1)
                         ->orderby('CULTURAL_NEWS_ID','DESC')
                         ->paginate(12);
  
  	return view('culturalNews.culturalNews',compact('culturalNews'));
  }

  //Showing Single page
  public function show($id){

  	$culturalNews = DB::table('BA_CULTURAL_NEWS')
                         ->select('*')
                         ->where('CULTURAL_NEWS_ID', $id)
                         ->where('ACTIVE_STATUS', 1)
                         ->get();

      return view('culturalNews.single_culturalNews',compact('culturalNews'));                   
  }


}
