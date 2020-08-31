<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;

class CulturalOrgController extends Controller
{
    //Showing index page
    public function index(){

        $culturalOrgs = DB::table('BA_CULTURAL_ORG')
            ->select('*')
            ->where('ACTIVE_STATUS', 1)
            ->orderby('CULTURAL_ORG_ID','DESC')
            ->paginate(12);

        return view('culturalOrg.culturalOrg',compact('culturalOrgs'));
    }

    //Showing Single page
    public function show($id){

        $culturalOrgs = DB::table('BA_CULTURAL_ORG')
            ->select('*')
            ->where('CULTURAL_ORG_ID', $id)
            ->where('ACTIVE_STATUS', 1)
            ->get();

        return view('culturalOrg.culturalOrg_single',compact('culturalOrgs'));
    }


}
