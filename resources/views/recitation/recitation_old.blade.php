<!doctype html>
<html lang="bn">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Bangla Abritty</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">

	 <!-- ajax script link -->
    
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


	<style type="text/css">
		.slider {
			width: 100%;
            margin: 40px 65px;
		}
        
		.slick-slide {
			margin: 0px 0px;
		}

		.slick-slide img {
			width: 100%;
		}

		.slick-prev:before,
		.slick-next:before {
			color: black;
		}


		.slick-slide {
			transition: all ease-in-out .3s;
			opacity: .2;
		}

		.slick-active {
			opacity: 1;
		}

		.slick-current {
			opacity: 1;
		}

		.poet_img_con {
			height: 180px;
			width: 180px;
			border-radius: 50%;
			overflow: hidden;
			position: relative;
		}

		.poet_img_con img {
			width: 100%;
		}

		
		.nav-pills li{
			margin: 3px;
			height: 40px;
			width: 40px;
		}
        
		.modal-window {
  position: fixed;
  background-color: rgba(200, 200, 200, 0.75);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 99999999;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.modal-window:target {
  opacity: 1;
  pointer-events: auto;
}

.modal-window>div {
  width: 60%;
  position: relative;
  margin: 0% auto;
  padding: 2rem;
  background: #fff;
  color: #444;
}
 .modal-window>div:last-child {
  padding: 2% 15%;
     overflow-y: scroll;
}

.modal-window header {
  font-weight: bold;
}

.modal-close {
  color: #aaa;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  padding: 10px;
  text-decoration: none;
  z-index: 9999;
  background-color: #fff;
  color: red;
}

.modal-close:hover {
  color: #000;
}

.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}

        .select-sim {
  width:250px;
  height:38px;
  line-height:22px;
  vertical-align:middle;
  position:relative;
  background:white;
  border:1px solid #ccc;
  overflow:hidden;
            display: inline-block;
            text-align: left;
            padding-top: 6px;
}

.select-sim::after {
  content:"▼";
  font-size:0.5em;
  font-family:arial;
  position:absolute;
  top:50%;
  right:5px;
  transform:translate(0, -50%);
}

.select-sim:hover::after {
  content:"";
}

.select-sim:hover {
  overflow:visible;
}

.select-sim:hover .options .option label {
  display:inline-block;
}

.select-sim:hover .options {
  background:white;
  border:1px solid #ccc;
  position:absolute;
  top:-1px;
  left:-1px;
  width:100%;
  height:88px;
  overflow-y:scroll;
}

.select-sim .options .option {
  overflow:hidden;
}

.select-sim:hover .options .option {
  height:40px;
  overflow:hidden;
}

.select-sim .options .option img {
  vertical-align:middle;
}

.select-sim .options .option label {
  display:none;
}

.select-sim .options .option input {
  width:0;
  height:0;
  overflow:hidden;
  margin:0;
  padding:0;
  float:left;
  display:inline-block;
  /* fix specific for Firefox */
  position: absolute;
  left: -10000px;
}

.select-sim .options .option input:checked + label {
  display:block;
  width:100%;
}

.select-sim:hover .options .option input + label {
  display:block;
}

.select-sim:hover .options .option input:checked + label {
  background:#fffff0;
}
        
.videoPl_container{
    width: 50%;
 }
      #overlay {
        background: #ffffff;
        color: #666666;
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        float: left;
        text-align: center;
        padding-top: 0%;
        z-index: 999999999999999999999;
    }  

    .btn-default{
    	margin-top: 10px;
    }
    .filter_right select:first-child{
        	width: 35%;
        }
	</style>
    
</head>
<body>

<div id="overlay">
    <img src="{{ asset('assets2/img/ajax-loader.gif') }}" alt="Loading" /><br/>
    Loading...
</div>


	      @include('include.navbar')


    
	<div class="container-fluid">
        <div class="row slide">

		<div class="col-md-10" style="margin: 0;
			padding: 0">

			<section class="center slider" style="width: 88%">

				@foreach ($reciterpics as $reciterpic)
                <div>
					<div class="poet_img_con">
						<img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$reciterpic->IMAGE_FILE_PATH)}}" class="img-responsive" alt="">
						<a href="#" class="poet_name_slide">{{ $reciterpic->RECITER_NAME }}</a>
					</div>

				</div>
                @endforeach
				
			</section>

		</div>

		<div class="col-md-2 add">
			      <img src="assets2/img/add-horizontal.jpg">
		</div>

	</div>
    
    </div>





	<div class="container-fluid recitation_sec">

		<div class="row">
			<div class=" col-md-10">


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
                        <div class="col-md-3">
                            <div class="form-group" style=" padding: 5px; margin-bottom: 0px">
                                  
                                  <label>অডিও</label>
                                  <input type="checkbox" style="margin-left: 10px;"   name="audio_flag"  value="1"  >
                            </div>
                        </div>
                        <div class="col-md-3" style="padding: 0px">
                            <div class="form-group" style=" padding: 5px; margin-bottom: 0px">
                                  <label>ভিডিও</label>
                                  <input type="checkbox" style="margin-left: 10px;"   name="vedio_flag"  value="1"  >
                            </div>
                        </div>
                        <div class="col-md-3" style="padding: 0px">
                            <div class="form-group" style=" padding: 5px; margin-bottom: 0px">
                                  <label> সকল  </label>
                                  <input type="checkbox" style="margin-left: 10px;"   name="poem_flag"  value="1"  >
                            </div>
                        </div>
                        <!-- </form> -->
					</div>
					<div class="col-md-8 filter_right">

							<select style="" name="reciter_name" >
								@if($reciterName)
								<option value="{{ $reciterName }}">{{ $reciterName }}</option>
								@else
								<option value="">আবৃত্তিকারের   নাম</option>
								@endif
								@foreach($reciters as $reciter)
                                    <option value="{{$reciter->RECITER_NAME}}">{{$reciter->RECITER_NAME}}</option>
                                @endforeach
							</select>
							<select style="" name="author_name" >
								@if($poetName)
								<option value="{{$poetName}}">{{ $poetName }}</option>
								@else
								<option value="">কবির  নাম</option>
								@endif
							
								@foreach($authors as $author)
                                    <option value="{{$author->AUTHOR_NAME}}">{{$author->AUTHOR_NAME}}</option>
                                @endforeach
							</select>
							
							<input type="text" placeholder="কবিতার নাম" name="poem_name" value="{{ $poemName }}" style="">
							<!-- <a href="{!! route('recitation.reload') !!}"><i class="glyphicon glyphicon-repeat"></i></a> -->
							<button  type="reset" class=" btn-reset"  value="Reset"><i class="glyphicon glyphicon-repeat"></i></button>
							<button type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</form>
					</div>
				</div> 

				<div class="row">

					<div class="col-md-12">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                               <a href="#au/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন  অডিও নেই' disabled>  অডিও</a>
                                                @else
                                                <a href="#au/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm">  অডিও</a>
                                                <div id="au/{{  $RecitationDetail->RECITATION_ID }}" class="modal-window">
												   <div>
												    <a href="#modal-close" title="Close" class="modal-close"><i class="glyphicon glyphicon-remove"></i></a>
												    <audio controls>
                                                          <source src="{{$RecitationDetail->AUDIO_FILE_PATH }}" type="audio/ogg">
                                                          <source src="{{$RecitationDetail->AUDIO_FILE_PATH }}" type="audio/wav">
                                                        Your browser does not support the audio element.
                                                    </audio><br>
												  </div>
												</div>
												@endif 
                                            </div>
                                            @else

                                            <div class="col-sm-4 text-center">
                                            	<a href="#au/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm" disabled>  অডিও</a>
                                            </div>

                                            @endif

                                            @if($vedio)
											<div class="col-sm-4 text-center">
												@if(!$RecitationDetail->VIDEO_FLAG)
                                                <a href="#{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</a>
                                                @else
                                                <a href="/recitation/vedio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm">  ভিডিও</a>
                                                <div id="{{  $RecitationDetail->RECITATION_ID }}" class="modal-window">
												    <div class="videoPl_container">
												    	<a href="#modal-close" title="Close" class="modal-close"><i class="glyphicon glyphicon-remove"></i></a>
                                                        @if($RecitationDetail->VIDEO_FLAG == 1)
                                                           {!! $RecitationDetail->VIDEO_LINK !!}
                                                        @else
                                                           কোন ভিডিও নেই
                                                        @endif
                                                        
                                                    </div>
												</div>
												@endif 
                                            </div>
                                            @else

                                            <div class="col-sm-4 text-center">
                                            	 <a href="#{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm" disabled>  ভিডিও</a>
                                            </div>

                                            @endif
											<div class="col-sm-4 text-center">
                                                @if($RecitationDetail->POEM_TEXT ==NULL)

                                                <a href="#po/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title='কোন পাণ্ডুলিপি নেই' disabled>পাণ্ডুলিপি  </a>
                                                
                                                @else

                                                <a href="/recitation/poem/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary" >পাণ্ডুলিপি  </a>

                                                <!-- <a href="#po/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top"  >পাণ্ডুলিপি  </a>
                                                <div id="po/{{  $RecitationDetail->RECITATION_ID }}" class="modal-window">
												   <div>
												    <a href="#modal-close" title="Close" class="modal-close"><i class="glyphicon glyphicon-remove"></i></a>
                                                    <h2>{{  $RecitationDetail->POEM_NAME }}</h1>
												    <h1>{{  $RecitationDetail->AUTHOR_NAME }}</h2>
												    <div>{!! $RecitationDetail->POEM_TEXT !!}</div>
												  </div>
												</div> -->
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
            
			<div class="col-md-2 add"><img src="assets2/img/add-horizontal.jpg"><img src="assets2/img/add-horizontal.jpg" style="margin-top: 10px"></div>


		</div>
	</div>

        <!-- Adding footer -->

        @include('include.new_footer')
 
        <!-- End footer -->


<!--==================================================
				all modal are here
========================================================-->


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets2/js/bootstrap-transition.js"></script>
	<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets2/js/bootstrap-collapse.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="assets2/js/myScript.js"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {

			$(".center").slick({
				dots: true,
				infinite: true,
				centerMode: true,
				slidesToShow: 5,
				slidesToScroll: 3,
				autoplay : true
			});


			

		});
        
        jQuery(window).load(function(){
    jQuery('#overlay').fadeOut();
    });
        $('#demoDefaultSelection').ddslick({
    data: ddData,
    defaultSelectedIndex:2
});
	</script>

        @include('recitation.script')

</body>
</html>