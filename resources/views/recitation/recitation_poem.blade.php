
     
 @extends('layouts.master')

@section('content')

@foreach($RecitationDetails as $RecitationDetail)
  <div class="container">
    <div class="row panel panel-default" style="margin-top: 15px">
       <div class="col-md-6 text-center">
        @if($RecitationDetail->IMAGE_FILE_PATH)
          <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$RecitationDetail->IMAGE_FILE_PATH)}}" class="img-responsive" alt="" style="width: 50%; padding: 30px 0px">
        @else
          <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/avatar.jpg')}}" class="img-responsive" alt="" style="width: 50%; padding: 30px 0px">
        @endif  
       </div>
       <div class="col-md-6" style="padding: 5%">
         <h3 style="padding-top: 20px; font-weight: 600">কবিতার নাম : {{  $RecitationDetail->POEM_NAME }}</h3>
                                                      
         <h4>কবির নাম : {{  $RecitationDetail->AUTHOR_NAME }}</h4>
       </div>
   </div>

   <div class="panel panel-default text-center" style="padding: 5%; margin: 15px 0px">
     <h2>{{  $RecitationDetail->POEM_NAME }} </h2>
        <h4>{{  $RecitationDetail->AUTHOR_NAME }}</h4>
        <p> {!! $RecitationDetail->POEM_TEXT !!} </p>
                      
   </div>

  </div> 
@endforeach

@endsection