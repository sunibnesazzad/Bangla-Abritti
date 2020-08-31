<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;


class LearningController extends Controller
{
    //showing এসো আবৃত্তি শিখি index page
    public function index1(Request $request){

        $learnings = DB::table('BA_LEARNING')
            ->select('*')
            ->where('LEARNING_CATEGORY_ID', 1)
            ->where('ACTIVE_STATUS', 1)
            ->orderBy('LEARNING_TITLE')
            ->paginate(10);

        $head = 'এসো আবৃত্তি শিখি';
        /*return $learnings;*/

        return view('learning.learning',compact('learnings','head'))
                           ->with('page','learning'); // in order to get active class;;
    }

    //showing সংবাদ পাঠের খুটিনাটি index page
    public function index2(Request $request){

        $learnings = DB::table('BA_LEARNING')
            ->select('*')
            ->where('LEARNING_CATEGORY_ID', 2)
            ->where('ACTIVE_STATUS', 1)
            ->orderBy('LEARNING_TITLE')
            ->paginate(10);

        $head = 'সংবাদ পাঠের খুটিনাটি';
        /*return $learnings;*/

        return view('learning.learning',compact('learnings','head'))
            ->with('page','learning'); // in order to get active class;;
    }

    //showing উপস্থাপনার কলাকৌশল index page
    public function index3(Request $request){

        $learnings = DB::table('BA_LEARNING')
            ->select('*')
            ->where('LEARNING_CATEGORY_ID', 3)
            ->where('ACTIVE_STATUS', 1)
            ->orderBy('LEARNING_TITLE')
            ->paginate(10);

        $head = 'উপস্থাপনার কলাকৌশল';
        /*return $learnings;*/

        return view('learning.learning',compact('learnings','head'))
            ->with('page','learning'); // in order to get active class;;
    }

    //showing উপস্থাপনার কলাকৌশল index page
    public function show($id){

        $learnings = DB::table('BA_LEARNING')
            ->join('BA_LEARNING_CATEGORY','BA_LEARNING_CATEGORY.LEARNING_CATEGORY_ID','BA_LEARNING.LEARNING_CATEGORY_ID')
            ->select('BA_LEARNING.*', 'BA_LEARNING_CATEGORY.CATEGORY_NAME')
            ->where('BA_LEARNING.LEARNING_ID', $id)
            ->where('BA_LEARNING.ACTIVE_STATUS', 1)
            ->get();

        /*return $learnings;*/

        return view('learning.learning_single',compact('learnings'))
            ->with('page','learning'); // in order to get active class;;
    }


}
