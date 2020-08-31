<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Response;
use Image;
use Auth;

class AdminBookController extends Controller
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
// book list page will be show with this function
    public function index(Request $request){

        $ActiveStatus = $request->get('active_status');

        $BookDetails = DB::table('BA_BOOK')
            ->leftjoin('BA_BOOK_CATEGORY','BA_BOOK_CATEGORY.BOOK_CATEGORY_ID','BA_BOOK.BOOK_CATEGORY_ID')
            ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_BOOK.AUTHOR_ID')
            ->leftjoin('BA_PUBLISHER','BA_PUBLISHER.PUBLISHER_ID','BA_BOOK.PUBLISHER_ID')
            ->select('BA_BOOK.*','BA_PUBLISHER.PUBLISHER_NAME','BA_AUTHOR.AUTHOR_NAME','BA_BOOK_CATEGORY.CATEGORY_NAME')
            // ->where('BA_PUBLISHER.PUBLISHER_NAME', 'like','%'.$request->get('publisher_name').'%')
             ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
            ->where('BA_BOOK.BOOK_NAME', 'like','%'.$request->get('book_name').'%')
            ->where('BA_BOOK.ACTIVE_STATUS', $ActiveStatus)
            ->orderby('BA_BOOK.BOOK_NAME')
            ->paginate(100)->appends(['publisher_name'=> $request->get('publisher_name'),'author_name'=> $request->get('author_name'),'book_name'=> $request->get('book_name'),'active_status' => $request->get('active_status')]);

        /*return $BookDetails;*/

        if( !empty($request->get('publisher_name')) && empty($request->get('author_name')) ){

            $BookDetails = DB::table('BA_BOOK')
                ->leftjoin('BA_BOOK_CATEGORY','BA_BOOK_CATEGORY.BOOK_CATEGORY_ID','BA_BOOK.BOOK_CATEGORY_ID')
                ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_BOOK.AUTHOR_ID')
                ->leftjoin('BA_PUBLISHER','BA_PUBLISHER.PUBLISHER_ID','BA_BOOK.PUBLISHER_ID')
                ->select('BA_BOOK.*','BA_PUBLISHER.PUBLISHER_NAME','BA_AUTHOR.AUTHOR_NAME','BA_BOOK_CATEGORY.CATEGORY_NAME')
                ->where('BA_PUBLISHER.PUBLISHER_NAME', 'like','%'.$request->get('publisher_name').'%')
                // ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                ->where('BA_BOOK.BOOK_NAME', 'like','%'.$request->get('book_name').'%')
                ->where('BA_BOOK.ACTIVE_STATUS', $ActiveStatus)
                ->orderby('BA_BOOK.BOOK_NAME')
                ->paginate(100)->appends(['publisher_name'=> $request->get('publisher_name'),'author_name'=> $request->get('author_name'),'book_name'=> $request->get('book_name'),'active_status' => $request->get('active_status')]);
        }

        if(empty($request->get('publisher_name')) && !empty($request->get('author_name'))){
            $BookDetails = DB::table('BA_BOOK')
                ->leftjoin('BA_BOOK_CATEGORY','BA_BOOK_CATEGORY.BOOK_CATEGORY_ID','BA_BOOK.BOOK_CATEGORY_ID')
                ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_BOOK.AUTHOR_ID')
                ->leftjoin('BA_PUBLISHER','BA_PUBLISHER.PUBLISHER_ID','BA_BOOK.PUBLISHER_ID')
                ->select('BA_BOOK.*','BA_PUBLISHER.PUBLISHER_NAME','BA_AUTHOR.AUTHOR_NAME','BA_BOOK_CATEGORY.CATEGORY_NAME')
                //->where('BA_PUBLISHER.PUBLISHER_NAME', 'like','%'.$request->get('publisher_name').'%')
                ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                ->where('BA_BOOK.BOOK_NAME', 'like','%'.$request->get('book_name').'%')
                ->where('BA_BOOK.ACTIVE_STATUS', $ActiveStatus)
                ->orderby('BA_BOOK.BOOK_NAME')
                ->paginate(1000)->appends(['publisher_name'=> $request->get('publisher_name'),'author_name'=> $request->get('author_name'),'book_name'=> $request->get('book_name'),'active_status' => $request->get('active_status')]);
        }elseif(empty($request->get('publisher_name')) && !empty($request->get('author_name'))){
            $BookDetails = DB::table('BA_BOOK')
                ->leftjoin('BA_BOOK_CATEGORY','BA_BOOK_CATEGORY.BOOK_CATEGORY_ID','BA_BOOK.BOOK_CATEGORY_ID')
                ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_BOOK.AUTHOR_ID')
                ->leftjoin('BA_PUBLISHER','BA_PUBLISHER.PUBLISHER_ID','BA_BOOK.PUBLISHER_ID')
                ->select('BA_BOOK.*','BA_PUBLISHER.PUBLISHER_NAME','BA_AUTHOR.AUTHOR_NAME','BA_BOOK_CATEGORY.CATEGORY_NAME')
                ->where('BA_PUBLISHER.PUBLISHER_NAME', 'like','%'.$request->get('publisher_name').'%')
                ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                ->where('BA_BOOK.BOOK_NAME', 'like','%'.$request->get('book_name').'%')
                ->where('BA_BOOK.ACTIVE_STATUS', $ActiveStatus)
                ->orderby('BA_BOOK.BOOK_NAME')
                ->paginate(1000)->appends(['publisher_name'=> $request->get('publisher_name'),'author_name'=> $request->get('author_name'),'book_name'=> $request->get('book_name'),'active_status' => $request->get('active_status')]);
        }




        return view('admin.book_list')->with('BookDetails', $BookDetails)
            ->with('page','book'); // in order to get active class
    }
// showing the input form for book information insert
    public function create(){

        $authors = DB::table('BA_AUTHOR')
            ->select('AUTHOR_ID','AUTHOR_NAME')
            ->where('ACTIVE_STATUS', 1)
            ->orderby('AUTHOR_NAME')
            ->get();

        $publishers = DB::table('BA_PUBLISHER')
            ->select('PUBLISHER_ID','PUBLISHER_NAME')
            ->where('ACTIVE_STATUS', 1)
            ->orderby('PUBLISHER_NAME')
            ->get();

        $books = DB::table('BA_BOOK_CATEGORY')
            ->select('*')
            ->where('ACTIVE_STATUS', 1)
            ->orderby('CATEGORY_NAME')
            ->get();

        return view('admin.book_upload')->with('authors',$authors)
            ->with('publishers',$publishers)
            ->with('books',$books)
            ->with('page','book'); // in order to get active class
    }

    // storing book information to database

    public function store(Request $request){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations
        $this->validate($request,[

            'book_name'                => 'required',
            'book_image'               => 'sometimes|image',
            'book_description'         => 'required',
            'author_name'              => 'required',


        ]);

         //for image
        if($request->hasFile('book_image')){
            $image = $request->file('book_image');
            $filename = time().$request->get('book_image').'.'.$image->getClientOriginalExtension();
            $location = public_path('bangla_abritti/uploaded_img/book_images/' .$filename);
            Image::make($image)->resize(300,300)->save($location);
            /*$post->image=$filename;*/
        }else{
            $filename = 'book.jpg';

        }

        // insert query
        $insert = DB::table('BA_BOOK')->insert([

            'BOOK_ID'            => $this->PK('BA_BOOK'),
            'BOOK_NAME'          => $request->get('book_name'),
            'AUTHOR_ID'		     => $request->get('author_name'),
            'PUBLISHER_ID'		 => $request->get('publisher_name'),
            'BOOK_DESC'	         =>  $request->get('book_description'),
            'image_file_path'    =>  $filename,
            'BOOK_CATEGORY_ID' => $request->get('book_type'),
            'FIRST_PUBLICATION_DATE' => $request->get('publication_date'),
            'FIRST_PUBLICATION_DESC' => $request->get('publication_description'),
            'ACTIVE_STATUS'       => $request->get('active_status'),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/book/create');

    }
// showing single book page with book details
    public function show($id){


        $BookDetails = DB::table('BA_BOOK')
            ->leftjoin('BA_BOOK_CATEGORY','BA_BOOK_CATEGORY.BOOK_CATEGORY_ID','BA_BOOK.BOOK_CATEGORY_ID')
            ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_BOOK.AUTHOR_ID')
            ->leftjoin('BA_PUBLISHER','BA_PUBLISHER.PUBLISHER_ID','BA_BOOK.PUBLISHER_ID')
            ->select('BA_BOOK.*','BA_PUBLISHER.PUBLISHER_NAME','BA_AUTHOR.AUTHOR_NAME','BA_BOOK_CATEGORY.CATEGORY_NAME')
            ->where('BA_BOOK.BOOK_ID',$id)
            ->orderby('BA_BOOK.BOOK_NAME')
            ->get();




        return view('admin.book_single_view')->with('BookDetails',$BookDetails)
            ->with('page','book'); // in order to get active class

    }


// in order to load the book edit page
    public function edit($id){

        $authors = DB::table('BA_AUTHOR')
            ->select('AUTHOR_ID','AUTHOR_NAME')
            ->where('ACTIVE_STATUS', 1)
            ->orderby('AUTHOR_NAME')
            ->get();

        $publishers = DB::table('BA_PUBLISHER')
            ->select('PUBLISHER_ID','PUBLISHER_NAME')
            ->where('ACTIVE_STATUS', 1)
            ->orderby('PUBLISHER_NAME')
            ->get();

        $books = DB::table('BA_BOOK_CATEGORY')
            ->select('*')
            ->where('ACTIVE_STATUS', 1)
            ->orderby('CATEGORY_NAME')
            ->get();

        $BookDetails = DB::table('BA_BOOK')
            ->leftjoin('BA_BOOK_CATEGORY','BA_BOOK_CATEGORY.BOOK_CATEGORY_ID','BA_BOOK.BOOK_CATEGORY_ID')
            ->select('BA_BOOK.*')
            ->where('BOOK_ID',$id)
            ->get();

        return view('admin.book_edit')->with('BookDetails',$BookDetails)
            ->with('authors',$authors)
            ->with('publishers',$publishers)
            ->with('books',$books)
            ->with('page','book'); // in order to get active class

    }

    // saving the changes in input form for edit input form

    public function update(Request $request, $id){
        Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations
        $this->validate($request,[

            'book_name'                => 'required',
            'book_image'               => 'sometimes|image',
        ]);

        //for image
        if($request->hasFile('book_image')){
            $image = $request->file('book_image');
            $filename = time().$request->get('book_image').'.'.$image->getClientOriginalExtension();
            $location = public_path('bangla_abritti/uploaded_img/book_images/' .$filename);
            Image::make($image)->resize(300,300)->save($location);
            /*$post->image=$filename;*/
        }else{
            $file = DB::table('BA_BOOK')
                ->select('IMAGE_FILE_PATH')
                ->where('BOOK_ID', $id)
                ->first();

            $filename = $file->IMAGE_FILE_PATH;

        }



        // update query
        $update = DB::table('BA_BOOK')
            ->where('BOOK_ID', $id)
            ->update([


                'BOOK_NAME'         => $request->get('book_name'),
                'AUTHOR_ID'		 => $request->get('author_name'),
                'image_file_path'    =>  $filename,
                'PUBLISHER_ID'		 => $request->get('publisher_name'),
                'BOOK_DESC'	 =>  $request->get('book_description'),
                'BOOK_CATEGORY_ID' => $request->get('book_type'),
                'FIRST_PUBLICATION_DATE' => $request->get('publication_date'),
                'FIRST_PUBLICATION_DESC' => $request->get('publication_description'),
                'ACTIVE_STATUS'       => $request->get('active_status'),

            ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/book/'.$id.'/edit');

    }

    //delete function
    public function delete($id){

        DB::table('BA_BOOK')
            ->where('BOOK_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/book');
    }
}
