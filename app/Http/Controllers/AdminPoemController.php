<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;


class AdminPoemController extends Controller
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

 // poem list page will be show with this function 
    public function index(Request $request){



        $ActiveStatus = $request->get('active_status');
        $PoemDetails = DB::table('BA_POEM')
                         ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                         ->leftjoin('BA_PUBLISHER','BA_PUBLISHER.PUBLISHER_ID','BA_POEM.PUBLISHER_ID')
                         ->leftjoin('BA_BOOK','BA_BOOK.BOOK_ID','BA_POEM.BOOK_ID')
                         ->select('BA_POEM.*','BA_PUBLISHER.PUBLISHER_NAME','BA_AUTHOR.AUTHOR_NAME','BA_BOOK.BOOK_NAME')
                         // ->where('BA_PUBLISHER.PUBLISHER_NAME', 'like','%'.$request->get('publisher_name').'%')
                         // ->where('BA_BOOK.BOOK_NAME', 'like','%'.$request->get('book_name').'%')
                          ->where('BA_AUTHOR.AUTHOR_NAME', 'like','%'.$request->get('author_name').'%')
                          ->where('BA_POEM.POEM_NAME', 'like','%'.$request->get('poem_name').'%')
                         ->where('BA_POEM.ACTIVE_STATUS', $ActiveStatus)
                         ->orderby('BA_POEM.POEM_NAME')
                         ->paginate(10000)->appends(['publisher_name'=> $request->get('publisher_name'),'author_name'=> $request->get('author_name'),'poem_name'=> $request->get('poem_name')]);
      /*return $PoemDetails;*/

        return view('admin.poem_list')->with('PoemDetails', $PoemDetails)
                                      ->with('page','poem'); // in order to get active class;
    }

// showing the input form for publisher information insert
    public function create(){
  		
       $authors     = DB::table('BA_AUTHOR')
	  				  ->select('AUTHOR_ID','AUTHOR_NAME')
                      ->where('ACTIVE_STATUS', 1)
	  				  ->orderby('AUTHOR_NAME')
	  				  ->get();

  	    $publishers = DB::table('BA_PUBLISHER')
	  				  ->select('PUBLISHER_ID','PUBLISHER_NAME')
                      ->where('ACTIVE_STATUS', 1)
	  				  ->orderby('PUBLISHER_NAME')
	  				  ->get();

  	    $books 		= DB::table('BA_BOOK')
  	    			  ->select('*')
                      ->where('ACTIVE_STATUS', 1)
  	    			  ->orderby('BOOK_NAME')
  	    			  ->get();

        return view('admin.poem_upload')->with('authors',$authors)
        								->with('publishers',$publishers)
        								->with('books',$books)
                                        ->with('page','poem'); // in order to get active class;
    }
// storing poem information to database 

    public function store(Request $request){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
        // field validations 
        $this->validate($request,[

            'poem_name'                => 'required',
            /*'poem_text'					   =>'required',*/
          
        ]);


       // insert query 
        $insert = DB::table('BA_POEM')->insert([

            'POEM_ID'          		 => $this->PK('BA_POEM'),
            'POEM_NAME'        		 => $request->get('poem_name'),
            'AUTHOR_ID'		 	     => $request->get('author_name'),
            'PUBLISHER_ID'		   	 => $request->get('publisher_name'),
            'POEM_TEXT'				 => $request->get('poem_text'),
            'POEM_DESC'				 => $request->get('poem_description'),
            'BOOK_ID'	 			 => $request->get('book_name'),
            'FIRST_PUBLICATION_DATE' => $request->get('publication_date'),
            'FIRST_PUBLICATION_DESC' => $request->get('publication_description'),
            'ACTIVE_STATUS'       => $request->get('active_status'),

        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/poem/create');

    }
 // showing single poem page with book details
    public function show($id){


       
    	$PoemDetails = DB::table('BA_POEM')
                         ->leftjoin('BA_AUTHOR','BA_AUTHOR.AUTHOR_ID','BA_POEM.AUTHOR_ID')
                         ->leftjoin('BA_PUBLISHER','BA_PUBLISHER.PUBLISHER_ID','BA_POEM.PUBLISHER_ID')
                         ->leftjoin('BA_BOOK','BA_BOOK.BOOK_ID','BA_POEM.BOOK_ID')
                         ->select('BA_POEM.*','BA_PUBLISHER.PUBLISHER_NAME','BA_AUTHOR.AUTHOR_NAME','BA_BOOK.BOOK_NAME')
                         ->where('BA_POEM.POEM_ID',$id)
                         ->get();


  

        return view('admin.poem_single_view')->with('PoemDetails',$PoemDetails)
                                             ->with('page','poem'); // in order to get active class;
                                             
    }



// in order to load the poem edit page
    public function edit($id){


    	$authors     = DB::table('BA_AUTHOR')
	  				  ->select('AUTHOR_ID','AUTHOR_NAME')
                      ->where('ACTIVE_STATUS', 1)
	  				  ->orderby('AUTHOR_NAME')
	  				  ->get();

  	    $publishers = DB::table('BA_PUBLISHER')
	  				  ->select('PUBLISHER_ID','PUBLISHER_NAME')
                      ->where('ACTIVE_STATUS', 1)
	  				  ->orderby('PUBLISHER_NAME')
	  				  ->get();

  	    $books 		= DB::table('BA_BOOK')
  	    			  ->select('*')
                      ->where('ACTIVE_STATUS', 1)
  	    			  ->orderby('BOOK_NAME')
  	    			  ->get();


        $PoemDetails = DB::table('BA_POEM')
                         ->select('*')
                         ->where('BA_POEM.POEM_ID',$id)
                         ->get();

        return view('admin.poem_edit')->with('PoemDetails',$PoemDetails)
        							  ->with('authors',$authors)
        							  ->with('publishers',$publishers)
        							  ->with('books',$books)
                                      ->with('page','poem'); // in order to get active class;

    }


    public function update(Request $request, $id){
      Session::flash('error','তথ্য সফল্ভাবে সংরক্ষিত হয়নি');
    	 // field validations 
        $this->validate($request,[

            'poem_name'                => 'required',

            'poem'					   =>'required',
            
        

        ]);


       // update query 
        $update = DB::table('BA_POEM')
        		 ->where('POEM_ID', $id)
        		 ->update([

		            'POEM_NAME'        		 => $request->get('poem_name'),
		            'AUTHOR_ID'		 	     => $request->get('author_name'),
		            'PUBLISHER_ID'		   	 => $request->get('publisher_name'),
		            'POEM_TEXT'				 => $request->get('poem'),
		            'POEM_DESC'				 => $request->get('poem_description'),
		            'BOOK_ID'	 			 => $request->get('book_name'),
		            'FIRST_PUBLICATION_DATE' => $request->get('publication_date'),
		            'FIRST_PUBLICATION_DESC' => $request->get('publication_description'), 
                'ACTIVE_STATUS'       => $request->get('active_status'),

		        ]);
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে সংরক্ষিত হয়েছে');

        return redirect('/admin/poem/'.$id.'/edit');

    }

    //delete function
    public function delete($id){

        DB::table('BA_POEM')
            ->where('POEM_ID', $id)->delete();
        Session::flash('error','');
        Session::flash('success','তথ্য সফল্ভাবে ডিলিট হয়েছে');
        return redirect('/admin/poem');
    }


}
