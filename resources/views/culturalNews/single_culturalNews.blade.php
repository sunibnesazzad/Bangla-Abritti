 @extends('layouts.master')

@section('content')

	<div class="container-fluid">

		<div class="row">
			<div class="col-md-10">
			    <div class="panel panel-default cul-head text-center" style="padding: 10px; margin-top: 10px">
			        <h2>সাংস্কৃতিক খবরা খবর</h2>
			    </div>
			    <div class="row">

			   	@foreach($culturalNews as $culturalNew)
				    <div class="panel panel-default single-cul-news">
				        <div class="row">
				            <div class="col-md-4 news_img">
				                <img src="{{asset('bangla_abritti/uploaded_img/cultural_news_images/'.$culturalNew->IMAGE_FILE_PATH)}}" width="100%">
				            </div>
				            <div class="col-md-8 news_info">
				                <div class="clt-title">
				                    <h2>{{ $culturalNew->NEWS_TITLE }}</h2>
				                </div>
				                <span class="evnt-date">
				                অনুষ্ঠান এর তারিখঃ {{ $culturalNew->EVENT_DATE }} <!--  <br>
				                অনুষ্ঠান এর সময়ঃ সকাল ৯ঃ৩০ - বিকেল ৫ঃ০০ পর্যন্ত -->
				                </span>
				            </div>
				            <div class="col-md-12 evnt-dis">
				                <p>{!! $culturalNew->NEWS_DESC !!}</p></p>
				                    
				            </div>
				            
				            
				        </div>
				    </div>
			    @endforeach     
			        
			    </div>

			</div>
			<div class="col-md-2 add"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin-top: 10px"></div>
		</div>

	</div>

	<style>
		.single-cul-news{
			padding: 10px;
			margin: 10px 0px;
		}

		.news_info{
			padding: 90px 30px;
			text-align: center;
		}
		.evnt-dis{
			padding: 15px 0px;
		}
		.org_info ul li{
			list-style: none;
		}
		.clt-title h2{
			margin-top: 10px;
		}

	</style>


@endsection