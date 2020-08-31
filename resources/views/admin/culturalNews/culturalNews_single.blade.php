@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>সাংস্কৃতিক খবর  আপলোড </span></div>
@endsection
@section('main-content')
    <div class="content">
        <div class="container-fluid">
            @include('admin.inc.messages')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @foreach($culturalNews as $culturalNew)
                            <form form action="" method="post" enctype="multipart/form-data">
                                <div class="header">

                                    <div class="col-md-9" style="padding: 0px;">
                                        <h4 class="title">সাংস্কৃতিক খবর পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                    </div>
                                    <div class="col-md-3" style="padding: 0px;">
                                        <a href="/admin/culturalNews/edit/{{ $culturalNew->CULTURAL_NEWS_ID }}" class="btn btn-info btn-fill pull-right" >পরিবর্তন করুন</a>
                                    </div>
                                </div>
                                <div class="content">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সাংস্কৃতিক খবরের নামঃ</label>
                                                <input type="text" class="form-control" placeholder="সাংস্কৃতিক খবর" value="{{ $culturalNew->NEWS_TITLE }}" required="" name="news_name" disabled="">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সাংস্কৃতিক খবরের তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $culturalNew->EVENT_DATE }}" name="news_date" disabled="">
                                            <!-- @if ($errors->has('event_date'))
                                                <span  class="error">
{{ $errors->first('event_date') }}
                                                        </span>
@endif -->
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সাংস্কৃতিক খবর বিস্তারিত</label>
                                                <textarea class="form-control"  name="news_text" disabled="">{{ $culturalNew->NEWS_DESC }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থা </label>
                                                <select name="active_status" class="form-control">
                                                    @if($culturalNew->ACTIVE_STATUS == 1)
                                                        <option value="1"  selected> কার্যকর </option>
                                                    @else
                                                        <option value="0"  > অকার্যকর </option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label> খবরের  ছবিঃ</label>
                                                @if($culturalNew->IMAGE_FILE_PATH != NULL)
                                                    <img src="{{asset('bangla_abritti/uploaded_img/cultural_news_images/'.$culturalNew->IMAGE_FILE_PATH)}}" style="width: 200px; height: auto">
                                                @else
                                                    <img src="{{asset('bangla_abritti/uploaded_img/cultural_news_images/occ.jpg')}}" style="width: 200px; height: auto">
                                                @endif

                                            </div>
                                        </div>

                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>


@endsection