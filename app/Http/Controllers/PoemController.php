<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class PoemController extends Controller
{
    //index function
    public function index(Request $request){

        $poems = DB::table('BA_POEM')
            ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
            ->select('BA_POEM.*','BA_AUTHOR.AUTHOR_ID','BA_AUTHOR.AUTHOR_NAME')
            ->where('BA_POEM.ACTIVE_STATUS', 1)
            ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
            ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
            ->orderby('BA_POEM.POEM_NAME')
            ->orderBy('BA_AUTHOR.AUTHOR_NAME')
            ->paginate(10);

        $authors =   DB::table('BA_AUTHOR')
            ->select('AUTHOR_NAME')
            ->where('ACTIVE_STATUS', 1)
            ->orderBy('AUTHOR_NAME')
            ->get();

        $poemNum = DB::table('BA_POEM')
            ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
            ->select('BA_POEM.*','BA_AUTHOR.AUTHOR_ID','BA_AUTHOR.AUTHOR_NAME')
            ->where('BA_POEM.ACTIVE_STATUS', 1)
            ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
            ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
            ->count();

        /*return $poemNum;*/
        return view('poem.poem',compact('poems','authors', 'poemNum'))
                             ->with('page','poem'); // in order to get active class;;
    }
}
