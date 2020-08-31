
     
 @extends('layouts.master')

@section('content')

@foreach($RecitationDetails as $RecitationDetail)

  <div class="container">
    <div class="panel panel-default text-center" style="margin-top: 15px">
        <div class="row" style="">
       <div class="col-md-4 text-center">
        @if($RecitationDetail->IMAGE_FILE_PATH)
          <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$RecitationDetail->IMAGE_FILE_PATH)}}" class="img-responsive" alt="" style="width: 80%; padding: 30px 0px">
        @else
          <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/avatar.jpg')}}" class="img-responsive" alt="" style="width: 80%; padding: 30px 0px">
        @endif  
       </div>

              <div class="col-md-8 text-left" style="padding: 5%">
                  <h3 style="padding-top: 20px; font-weight: 600">আবৃতিকারের নাম : {{  $RecitationDetail->RECITER_NAME }}</h3>
                  <h5>কবিতার নাম : {{  $RecitationDetail->POEM_NAME }}</h5>
                  <h6>কবির নাম : {{  $RecitationDetail->AUTHOR_NAME }}</h6>
              </div>
        </div>                                                                                      
    </div>

     <div>
        <div class="panel row text-center" style="background-image: linear-gradient(to right,red, green); padding: 15px;">
            <div class="col-md-12">
                <audio controls>
                    <source src="{{asset($RecitationDetail->AUDIO_FILE_PATH) }}" type="audio/ogg">
                    <source src="{{asset($RecitationDetail->AUDIO_FILE_PATH) }}" type="audio/wav">
                    Your browser does not support the audio element.
                </audio><br>
            </div>
        </div>
                           
        <br>
        <div class="panel panel-default"  style=" margin: 20px 0px; padding : 15px">
        </div>
    </div>
                
  </div>
@endforeach  
                            

@endsection