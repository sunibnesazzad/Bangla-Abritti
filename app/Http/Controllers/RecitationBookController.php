<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class RecitationBookController extends Controller
{
    //index function
    public function index(Request $request){
        $books = DB::table('BA_BOOK')
                    ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_BOOK.AUTHOR_ID')
                    ->select('BA_BOOK.*', 'BA_AUTHOR.AUTHOR_NAME')
                    ->where('BA_BOOK.ACTIVE_STATUS', 1)
                    /*->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')*/
                    ->where('BA_BOOK.BOOK_NAME', 'like','%'.$request->get('book_name').'%')
                    ->paginate(12);
        /*return $books;*/

        return view('book.book',compact('books'))->with('page','book');
    }

    //index function
    public function show($id){
        $books = DB::table('BA_BOOK')
            ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_BOOK.AUTHOR_ID')
            ->select('BA_BOOK.*', 'BA_AUTHOR.AUTHOR_NAME')
            ->where('BA_BOOK.ACTIVE_STATUS', 1)
            ->where('BA_BOOK.BOOK_ID', $id)
            ->get();

        return view('book.book_single',compact('books'))->with('page','book');
    }


}
