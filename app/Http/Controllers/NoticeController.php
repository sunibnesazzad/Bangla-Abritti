<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;

class NoticeController extends Controller
{

   // date format function

        public function dateFormat()
        {

        $today = Carbon::now();
        return $today->toDateString();

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



// if both dates are not empty where between clause is used
        if (!empty($start_date) && !empty($end_date)){

            $notices = DB::table('BA_NOTICE')
                ->select('*')
                ->where('ACTIVE_STATUS',1)
                ->where('NOTICE_TITLE', 'like','%'.$request->get('notice_name').'%')
                ->whereBetween('PUBLISH_START_DATE', [$start_date,$end_date])
                ->orderby('NOTICE_ID','DESC')
                ->paginate(10)->appends(['notice_name' => $request->get('notice_name') , 'start_date' => $start_date, 'end_date' => $end_date ]);

        }else{

            $notices = DB::table('BA_NOTICE')
                ->select('*')
                ->where('ACTIVE_STATUS',1)
                ->where('NOTICE_TITLE', 'like','%'.$request->get('notice_name').'%')
                ->orderby('NOTICE_ID','DESC')
                ->paginate(10)->appends(['notice_name' => $request->get('notice_name') ]);

        }



        /*return $notices;*/
        return view('notice.notice')->with('notices',$notices)
            ->with('page','notice'); // in order to get active class;
    }


    //showing full notice
    public function show($id){
  		
      $notices = DB::table('BA_NOTICE')
                         ->select('*')
                         ->where('NOTICE_ID', $id)
                         ->where('ACTIVE_STATUS', 1)
                         ->get();
                       
        
        return view('notice.show')->with('notices',$notices)
                                   ->with('page','notice'); // in order to get active class;;
    }





}
