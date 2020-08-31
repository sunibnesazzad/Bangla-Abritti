@extends('admin.layout.app')
@section('page_title')
     <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>আবৃত্তির  বিস্তারিত বিবরন </span></div>
@endsection
@section('main-content') 


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                       <div class="content">
                          <div class="row">
        @foreach($RecitationDetails as $RecitationDetail)                      
                              <div class="col-md-2">
                                  <a href="/admin/recitation/{{ $RecitationDetail->RECITATION_ID }}/edit" class="btn btn-danger">তথ্য পরিবর্তন করুন</a>
                              </div>
                          </div>
                           <div class="row">
                             <div class="col-md-4 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>কবিতার নামঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $RecitationDetail->POEM_NAME}}</p></div>
                                   </div>
                                </div>
                               <div class="col-md-4 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>কবির নামঃ </h5></div>
                                       <div class="col-md-12"><p>{{ $RecitationDetail->AUTHOR_NAME}}</p></div>
                                   </div>
                                </div>
                                <div class="col-md-3 poem_info">
                                   <div class="row">
                                       <div class="col-md-12"><h5>আবৃত্তিকারের নাম</h5></div>
                                       <div class="col-md-12"><p>{{ $RecitationDetail->RECITER_NAME}}</p></div>
                                   </div>
                                </div>
                               
                             
                                
                           </div>
                           <div class="row">
                              
                               <div class="col-md-4 poem_info">
                                 <div class="row">
                                     <div class="col-md-12"><h5>আবৃত্তির অডিওঃ</h5></div>
                                       <div class="col-md-12">
                                         

                                         <audio controls>
                                             <source src="{{ asset($RecitationDetail->AUDIO_FILE_PATH ) }}" type="audio/ogg">
                                             <source src="{{ asset($RecitationDetail->AUDIO_FILE_PATH ) }}" type="audio/wav">
                                             <source src="{{ asset($RecitationDetail->AUDIO_FILE_PATH ) }}" type="audio/mpeg">
                                          </audio>
                                       </div>
                                 </div>
                                  
                                   
                               </div>
                               <div class="col-md-7 poem_info">
                                  <div class="row">
                                     <div class="col-md-12"><h5>আবৃত্তির ভিডিওঃ</h5></div>
                                       <div class="col-md-12 video_frame" >
                                        @if($RecitationDetail->VIDEO_FLAG == 1)
                                        {!! $RecitationDetail->VIDEO_LINK !!}
                                      @else
                                        কোন ভিডিও নেই
                                      @endif
                                      </div>
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