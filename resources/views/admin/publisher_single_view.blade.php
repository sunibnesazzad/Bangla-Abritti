@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>প্রকাশকের  বিস্তারিত বিবরন </span></div>
@endsection
@section('main-content')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                       <div class="content">
                          <div class="row">
     @foreach($PublisherDetails as $PublisherDetail)                         
                              <div class="col-md-2">
                                  <a href="/admin/publisher/{{ $PublisherDetail->PUBLISHER_ID }}/edit" class="btn btn-danger">তথ্য পরিবর্তন করুন</a>
                              </div>
                          </div>
                          <div class="header head_single" >
                             <div class="row">
                                <div class="col-md-3"></div>
                                 <div class="col-md-6 poet_img ">
                                     <h2 class="poem_hd_color">{{ $PublisherDetail->PUBLISHER_NAME }}</h2>
                                 </div>
                                 <div class="col-md-3"></div>
                             </div>
                              
                           </div>
                           <div class="row">
                            
                               
                                <div class="col-md-2 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>প্রকাশকের দেশঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $PublisherDetail->COUNTRY_NAME }}</p></div>
                                   </div>
                                </div>
                               
                                 <div class="col-md-9 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>ঠিকানাঃ</h5></div>
                                       <div class="col-md-12"><p>{{ $PublisherDetail->PUBLISHER_ADDRESS }}</p></div>
                                   </div>
                                </div>
                                
                           </div>
                     
                           
                       
                      
                @endforeach          
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>


 @endsection