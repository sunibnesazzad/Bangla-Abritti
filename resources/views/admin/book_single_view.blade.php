@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>বইয়ের  বিস্তারিত বিবরন </span></div>
@endsection
@section('main-content') 
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                       <div class="content">
                          <div class="row">
           @foreach($BookDetails as $BookDetail)                   
                              <div class="col-md-2 ">
                                  <a href="/admin/book/{{ $BookDetail->BOOK_ID }}/edit" class="btn btn-danger" >তথ্য পরিবর্তন করুন</a>
                              </div>
                          </div>
                          <div class="header head_single">
                               <h2 class="poem_hd_color">{{ $BookDetail->BOOK_NAME }}</h2>
                           </div>
                           <div class="row">
                              <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>বইয়ের নামঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $BookDetail->BOOK_NAME }}</p></div>
                                   </div>
                                </div>
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>বইয়ের ধরনঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $BookDetail->CATEGORY_NAME }}</p></div>
                                   </div>
                                </div>
                              
                               <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>কবি/লেখকের নামঃ</h5></div>
                                       <div class="col-md-12"><p>{{ $BookDetail->AUTHOR_NAME }}</p></div>
                                   </div>
                                </div>
                                
                                <div class="col-md-2 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>প্রথম প্রকাশনাঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $BookDetail->FIRST_PUBLICATION_DATE }}</p></div>
                                   </div>
                                </div>
                                
                           </div>
                           
                           
                           
                          <div class="row">
                              <div class="col-md-4 poem_info">
                                  <div class="col-md-12"><h5>প্রকাশকঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $BookDetail->PUBLISHER_NAME }}</p></div>
                              </div>
                              <div class="col-md-7 poem_info">
                                  <div class="col-md-12"><h5>প্রকাশনার বিবরনঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $BookDetail->FIRST_PUBLICATION_DESC }}</p></div>
                              </div>
                          </div>
                           <div class="row">
                             
                              <div class="col-md-11 poem_info">
                                  <div class="col-md-12"><h5>বইয়ের বিবরনঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $BookDetail->BOOK_DESC}}</p></div>
                              </div>
                          </div>
                @endforeach           
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection