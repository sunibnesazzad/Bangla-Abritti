
     
 @extends('layouts.master')

@section('content')

@foreach($RecitationDetails as $RecitationDetail)

  <div class="container">
    <div class="row panel" style="margin-top: 15px">
        <div class="col-md-8 ">
            {!! $RecitationDetail->VIDEO_LINK !!}
        </div>  

        <div class="col-md-4" style="padding: 5%">
            <h3 style="padding-top: 20px; font-weight: 600">আবৃতিকারের নাম : {{  $RecitationDetail->RECITER_NAME }}</h3>
            <h4>কবিতার নাম : {{  $RecitationDetail->POEM_NAME }}</h4>
            <h4>কবির নাম : {{  $RecitationDetail->AUTHOR_NAME }}</h4>
        </div>
                                                                                             
    </div>                
  </div>
@endforeach  
                            

@endsection



