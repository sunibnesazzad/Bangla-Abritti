@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>আবৃত্তিকারের  বিস্তারিত বিবরন </span></div>
@endsection
@section('main-content') 


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                       <div class="content">
                          <div class="row">
     @foreach($AuthorDetails as $AuthorDetail)                         
                              <div class="col-md-2 ">
                                  <a href="/admin/reciter/{{ $AuthorDetail->RECITER_ID }}/edit" class="btn btn-danger">তথ্য পরিবর্তন করুন</a>
                              </div>
                          </div>
                          <div class="header head_single">
                             <div class="row">
                                 <div class="col-md-4"></div>
                                 <div class="col-md-4 poet_img">
                                     <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$AuthorDetail->IMAGE_FILE_PATH)}}">
                                     <h2 class="poem_hd_color">{{ $AuthorDetail->RECITER_NAME }}</h2>
                                 </div>
                                 <div class="col-md-4"></div>
                             </div>
                              
                           </div>
                           <div class="row">
                               
                               
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>জাতীয়তাঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->COUNTRY_NAME }}</p></div>
                                   </div>
                                </div>
                               <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>এন আই ডিঃ</h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->RECITER_NID }}</p></div>
                                   </div>
                                </div>
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>জন্ম তারিখঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->RECITER_DOB }}</p></div>
                                   </div>
                                </div>
                                
                                 <div class="col-md-2 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>জীবিত/মৃতঃ  </h5></div>
                                       <div class="col-md-12"><p>@if($AuthorDetail->LIVE_FLAG == 1) জীবিত  @else মৃত @endif</p></div>
                                   </div>
                                </div>
                                
                           </div>
                           <div class="row">
                               
                                <div class="col-md-8 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>আবৃত্তিকারের পরিচিতিঃ </h5></div>
                                       <div class="col-md-12">
                                           <p>
                                      {{ $AuthorDetail->RECITER_BIBLIOGRAPHY }}
                                   </p>
                                       </div>
                                   </div>
                                </div>
                                 <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>আবৃত্তিকারের ইমেইলঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->RECITER_EMAIL }}</p></div>
                                   </div>
                                </div>
                                
                           </div>
                           
                           <div class="row">
                              
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>বর্তমান ঠিকানাঃ </h5></div>
                                       <div class="col-md-12"><p>  {{ $AuthorDetail->PRESENT_ADDRESS }} </p></div>
                                   </div>
                                </div>
                                 <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>বর্তমান শহরঃ </h5></div>
                                       <div class="col-md-12"><p>  {{ $AuthorDetail->PRESENT_CITY }} </p></div>
                                   </div>
                                </div>
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>বর্তমান জেলাঃ </h5></div>
                                       <div class="col-md-12"><p>  {{ $AuthorDetail->PRESENT_DISTRICT }}</p></div>
                                   </div>
                                </div>
                               <div class="col-md-2 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>বসবাসরত  দেশঃ</h5></div>
                                       <div class="col-md-12"><p>  {{ $country }}</p></div>
                                   </div>
                                </div>
                               
                           </div>
                           <div class="row">
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>স্থায়ী ঠিকানাঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->PRESENT_ADDRESS }}</p></div>
                                   </div>
                                </div>
                               
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>স্থায়ী শহরঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->PRESENT_CITY }} </p></div>
                                   </div>
                                </div>
                               <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>স্থায়ী জেলাঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->PRESENT_DISTRICT}}</p></div>
                                   </div>
                                </div>

                                <div class="col-md-2 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>সংক্ষিপ্ত কোড</h5></div>
                                       <div class="col-md-12"><p>{{ $AuthorDetail->SHORT_CODE }}</p></div>
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