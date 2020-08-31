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
                     <form form action="/admin/culturalNews/store" method="post" enctype="multipart/form-data">
                            <div class="header">
                                
                                 <div class="col-md-9" style="padding: 0px;">
                                      <h4 class="title">সাংস্কৃতিক খবর যুক্ত করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                  </div>
                                  <div class="col-md-3" style="padding: 0px;">
                                       <input type="submit" class="btn btn-info btn-fill pull-right" value="সংরক্ষন করুন">
                                  </div>
                            </div>
                            <div class="content">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সাংস্কৃতিক খবরের নামঃ</label>
                                                <input type="text" class="form-control" placeholder="সাংস্কৃতিক খবর" value="{{ old('news_name') }}" required="" name="news_name">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সাংস্কৃতিক খবরের তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ old('news_date') }}" name="news_date" required="">
                                                <!-- @if ($errors->has('event_date'))
                                                    <span  class="error">
                                                        {{ $errors->first('event_date') }}
                                                    </span>
                                                 @endif -->
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সাংস্কৃতিক খবর বিস্তারিতঃ</label>
                                                <textarea class="form-control"  name="news_text" required="">{{ old('news_text') }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থাঃ </label>
                                                <select name="active_status" class="form-control">
                                                      <option value="1"  selected> কার্যকর </option>
                                                      <option value="0"  > অকার্যকর </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label> খবরের  ছবিঃ</label>
                                                <input type="file" class="form-control" placeholder="" name="news_image">
                                                 <span class="input_warning"> ( * সর্বোচ্চ ফাইল সাইজ ৫ এম্ বি )</span><br>
                                                <!-- @if ($errors->has('news_image'))
                                                    <span  class="error">
                                                        {{ $errors->first('news_image') }}
                                                    </span>
                                                @endif -->
                                            </div>                                            
                                        </div>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">সংরক্ষন করুন</button>
                                    <div class="clearfix"></div>
                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>


@endsection