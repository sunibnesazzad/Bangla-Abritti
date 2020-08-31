 @extends('layouts.master')

@section('content')

    
	<div class="container-fluid">
        <div class="row slide">

		<div class="col-md-10" style="    padding-left: 30px;
    padding-top: 50px;">

			<section class="center slider" style="box-sizing: border-box;width: 95%;">

				@foreach ($reciterpics as $reciterpic)
                <div>
					<div class="poet_img_con">
						@if($reciterpic->IMAGE_FILE_PATH)
						<img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$reciterpic->IMAGE_FILE_PATH)}}" class="img-responsive" alt="">
						@else
						<img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$reciterpic->IMAGE_FILE_PATH)}}" class="img-responsive" alt="">
						@endif
						<a href="#" class="poet_name_slide">{{ $reciterpic->RECITER_NAME }}</a>
					</div>

				</div>
                @endforeach
				
			</section>

		</div>

		<div class="col-md-2 add">
			      <img src="{{ asset('assets2/img/add-horizontal.jpg') }}">
		</div>

	</div>
    
    </div>





	<div class="container-fluid recitation_sec">

		<div class="row">
			<div class="col-md-10">


				<div class="row">
					<div class="col-md-12 alph_nav">

						<button class="btn btn-default btn-submit1" name="name1" value='অ'>অ</button>
						<button class="btn btn-default btn-submit2" name="name2" value='আ'>আ</button>
						<button class="btn btn-default btn-submit3" name="name3" value='ই'>ই</button>
						<button class="btn btn-default btn-submit4" name="name4" value='ঈ'>ঈ</button>
						<button class="btn btn-default btn-submit5" name="name5" value='উ'>উ</button>
						<button class="btn btn-default btn-submit6" name="name6" value='ঊ'>ঊ</button>
						<button class="btn btn-default btn-submit7" name="name7" value='ঋ'>ঋ</button>
						<button class="btn btn-default btn-submit8" name="name8" value='এ'>এ</button>
						<button class="btn btn-default btn-submit9" name="name9" value='ঐ'>ঐ</button>
						<button class="btn btn-default btn-submit10" name="name10" value='ও'>ও</button>
						<button class="btn btn-default btn-submit11" name="name11" value='ঔ'>ঔ</button>

						<button class="btn btn-default btn-submit12" name="name12" value='ক'>ক</button>
						<button class="btn btn-default btn-submit13" name="name13" value='খ'>খ</button>
						<button class="btn btn-default btn-submit14" name="name14" value='গ'>গ</button>
						<button class="btn btn-default btn-submit15" name="name15" value='ঘ'>ঘ</button>
						<button class="btn btn-default btn-submit16" name="name16" value='ঙ'>ঙ</button>
						<button class="btn btn-default btn-submit17" name="name17" value='চ'>চ</button>
						<button class="btn btn-default btn-submit18" name="name18" value='ছ'>ছ</button>
						<button class="btn btn-default btn-submit19" name="name19" value='জ'>জ</button>
						<button class="btn btn-default btn-submit20" name="name20" value='ঝ'>ঝ</button>
						<button class="btn btn-default btn-submit21" name="name21" value='ঞ'>ঞ</button>

						<button class="btn btn-default btn-submit22" name="name22" value='ট'>ট</button>
						<button class="btn btn-default btn-submit23" name="name23" value='ঠ'>ঠ</button>
						<button class="btn btn-default btn-submit24" name="name24" value='ড'>ড</button>
						<button class="btn btn-default btn-submit25" name="name25" value='ঢ'>ঢ</button>
						<button class="btn btn-default btn-submit26" name="name26" value='ন'>ন</button>
						<button class="btn btn-default btn-submit27" name="name27" value='প'>প</button>
						<button class="btn btn-default btn-submit28" name="name28" value='ফ'>ফ</button>
						<button class="btn btn-default btn-submit29" name="name29" value='ব'>ব</button>
						<button class="btn btn-default btn-submit30" name="name30" value='ভ'>ভ</button>
						<button class="btn btn-default btn-submit31" name="name31" value='ম'>ম</button>

						<button class="btn btn-default btn-submit32" name="name32" value='য'>য</button>
						<button class="btn btn-default btn-submit33" name="name33" value='র'>র</button>
						<button class="btn btn-default btn-submit34" name="name34" value='ল'>ল</button>
						<button class="btn btn-default btn-submit35" name="name35" value='শ'>শ</button>
						<button class="btn btn-default btn-submit36" name="name36" value='ষ'>ষ</button>
						<button class="btn btn-default btn-submit37" name="name37" value='স'>স</button>
						<button class="btn btn-default btn-submit38" name="name38" value='হ'>হ</button>
						<button class="btn btn-default btn-submit39" name="name39" value='ড়'>ড়</button>
						<button class="btn btn-default btn-submit40" name="name40" value='ঢ়'>ঢ়</button>
						<button class="btn btn-default btn-submit41" name="name41" value='য়'>য়</button>
						


					</div>
				</div>
				<div class="row filter">
					<div class="col-md-4  panel panel-default  text-center">
					  <form action="/recitation" method="get" id="myForm">
                        <div class="col-md-4">
                            <div class="form-group" style=" padding: 5px; margin-bottom: 0px">
                                  
                                  <label>অডিও</label>
                                  <input type="checkbox" style="margin-left: 10px;"   name="audio_flag"  value="1"  >
                            </div>
                        </div>
                        <div class="col-md-4" style="padding: 0px">
                            <div class="form-group" style=" padding: 5px; margin-bottom: 0px">
                                  <label>ভিডিও</label>
                                  <input type="checkbox" style="margin-left: 10px;"   name="vedio_flag"  value="1"  >
                            </div>
                        </div>
                        <div class="col-md-4" style="padding: 0px">
                            <div class="form-group" style=" padding: 5px; margin-bottom: 0px">
                                  <label> সকল  </label>
                                  <input type="checkbox" style="margin-left: 10px;"   name="poem_flag"  value="1"  >
                            </div>
                        </div>
                        <!-- </form> -->
					</div>
					<div class="col-md-8 filter_right">

							<select style="width: 25%" name="reciter_name" >
								<option value="">আবৃত্তিকারের   নাম</option>
								@foreach($reciters as $reciter)
                                    <option value="{{$reciter->RECITER_NAME}}">{{$reciter->RECITER_NAME}}</option>
                                @endforeach
							</select>
							<select style="width: 25%" name="author_name" >
								<option value="">কবির  নাম</option>
								@foreach($authors as $author)
                                    <option value="{{$author->AUTHOR_NAME}}">{{$author->AUTHOR_NAME}}</option>
                                @endforeach
							</select>
							
							<input type="text" placeholder="কবিতার নাম" name="poem_name"  style="width: 25%">
							<!-- <a href="{!! route('recitation.reload') !!}"><i class="glyphicon glyphicon-repeat"></i></a> -->
							<button  type="reset" class="btn btn-reset"  value="Reset"><i class="glyphicon glyphicon-repeat"></i></button>
							<button type="submit" class="btn btn-search"><i class="glyphicon glyphicon-search"></i></button>
						</form>
					</div>
				</div> 

				<div class="row">

					<div class="col-md-12">
						<table id="example" name="table1" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>আবৃত্তিকার</th>
									<th>কবিতা</th>
									<th>কবি</th>
									<th class="text-center">টাইপ</th>
								</tr>
							</thead>
							<tbody>
								 @foreach($RecitationDetails as $RecitationDetail)
								<tr>
								<td>{{  $RecitationDetail->RECITER_NAME }}</td>
                                <td>{{  $RecitationDetail->POEM_NAME }}</td>
                                <td>{{  $RecitationDetail->AUTHOR_NAME }}</td>
								<td>
										<div class="row">
                                          @if($audio)
											<div class="col-sm-4 text-center">
												@if(!$RecitationDetail->AUDIO_FLAG)
                                               <a href="/recitation/audio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন  অডিও নেই' disabled>  অডিও</a>
                                                @else
                                                <a href="/recitation/audio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm">  অডিও</a>
                                                
												@endif 
                                            </div>
                                            @else

                                            <div class="col-sm-4 text-center">
                                            	<a href="/recitation/audio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন অডিও নেই' disabled>  অডিও</a>
                                            </div>

                                            @endif

                                            @if($vedio)
											<div class="col-sm-4 text-center">
												@if(!$RecitationDetail->VIDEO_FLAG)
                                                <a href="/recitation/vedio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</a>
                                                @else
                                                <a href="/recitation/vedio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm">  ভিডিও</a>
                                                
												@endif 
                                            </div>
                                            @else

                                            <div class="col-sm-4 text-center">
                                            	 <a href="/recitation/vedio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</a>
                                            </div>

                                            @endif
											<div class="col-sm-4 text-center">
                                                @if($RecitationDetail->POEM_TEXT ==NULL)

                                                <a href="/recitation/poem/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title='কোন পাণ্ডুলিপি নেই' disabled>পাণ্ডুলিপি  </a>
                                                
                                                @else

                                                <a href="/recitation/poem/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary" >পাণ্ডুলিপি  </a>
                                            @endif 
                                            </div>
										</div>
									</td>
								</tr>
								@endforeach 	
							</tbody>
						</table>
                        
                        
                        <div class="row">
                        	<div class="text-center">
                                 {{ $RecitationDetails->links() }}
                            </div>
                        </div>
					</div>
				</div>
			</div>
            
			<div class="col-md-2 add"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin-top: 10px"></div>


		</div>
	</div>

	@include('recitation.script')


@endsection


