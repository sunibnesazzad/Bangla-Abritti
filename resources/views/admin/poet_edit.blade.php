@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>কবির  তথ্য পরিবর্তন </span></div>
@endsection
@section('main-content') 

        <div class="content">
            <div class="container-fluid">
@include('admin.inc.messages')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                        @foreach($AuthorDetails as $AuthorDetail)
                                <form action="/admin/author/{{ $AuthorDetail->AUTHOR_ID }}" method="post" enctype="multipart/form-data">
                                 <div class="col-md-9" style="padding: 0px;">
                                      <h4 class="title">কবির তথ্য পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                  </div>
                                  <div class="col-md-3" style="padding: 0px;">
                                       <button type="submit" class="btn btn-info btn-fill pull-right" >সংরক্ষন করুন</button>
                                  </div>
                            </div>
                            <div class="content">
            
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><span class="required">* </span>কবির নামঃ</label>
                                                <input type="text" class="form-control" placeholder="কবির নাম" name="author_name" value="{{ $AuthorDetail->AUTHOR_NAME }}" required="">
                                                @if ($errors->has('author_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_name') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                       <!--  <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কবির ধরনঃ</label>
                                                <select class="form-control" disabled name="author_type">
                                                    @foreach($AuthorTypes as $AuthorType)
                                                        <option> {{$AuthorType->TYPE_NAME}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> -->
                                          <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span class="required">* </span>সংক্ষিপ্ত কোডঃ<span class="required">( ইংরেজিতে লিখতে হবে )</span></label>
                                                    <input type="text" name="short_code" placeholder="সংক্ষিপ্ত কোড" class="form-control" required="" value="{{ $AuthorDetail->SHORT_CODE }}">
                                                 
                                                    @if ($errors->has('short_code'))
                                                        <span  class="error">
                                                            {{ $errors->first('short_code') }}
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>জাতীয়তাঃ</label>
                                                <select class="form-control" name="author_nationality" >
                                                       <option value = "">  নির্বাচন করুন </option>
                                                    @foreach($CountryNames as $CountryName)
                                                        <option value="{{$CountryName->COUNTRY_ID}}" @if($AuthorDetail->COUNTRY_BIRTH == $CountryName->COUNTRY_ID) selected @endif > {{$CountryName->COUNTRY_NAME}} </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('author_nationality'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_nationality') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>বসবাসরত  দেশঃ</label>
                                                <select class="form-control" name="author_citizenship">
                                                        <option value = "">  নির্বাচন করুন </option>
                                                    @foreach($CountryNames as $CountryName)
                                                        <option value="{{$CountryName->COUNTRY_ID}}" @if($AuthorDetail->COUNTRY_LIVING == $CountryName->COUNTRY_ID) selected @endif > {{$CountryName->COUNTRY_NAME}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><span class="required">* </span>জন্ম তারিখঃ</label>
                                                <input type="date" class="form-control"  name="author_dob" value="{{ $AuthorDetail->AUTHOR_DOB }}">
                                                @if ($errors->has('author_dob'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_dob') }}
                                                    </span>
                                                @endif
                                                <br>
                                                <label>মৃত্যু তারিখঃ</label>
                                                <input type="date" class="form-control" name="author_dod" value="{{ $AuthorDetail->AUTHOR_DEATH_DATE }}">
                                                @if ($errors->has('author_dod'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_dod') }}
                                                    </span>
                                                @endif

                                                <br>
                                                <label><span class="required">* </span>কবির ইমেইলঃ</label>
                                                <input type="text" class="form-control" placeholder="ইমেইল" name="author_email" value="{{ $AuthorDetail->AUTHOR_EMAIL }}">
                                                @if ($errors->has('author_email'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_email') }}
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>কবি পরিচিতি</label>
                                                <textarea class="form-control"  name="author_biblography" rows="20">{{ $AuthorDetail->AUTHOR_BIBLIOGRAPHY }}</textarea>
                                                @if ($errors->has('author_biblography'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_biblography') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                    </div>
                                {{--not needed said by boss 26/11/2018--}}
                                    {{--<div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কবির ইমেইলঃ</label>
                                                <input type="text" class="form-control" placeholder="ইমেইল" name="author_email" value="{{ $AuthorDetail->AUTHOR_EMAIL }}">
                                                @if ($errors->has('author_email'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_email') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                       <div class="col-md-3">
                                            <div class="form-group">

                                                <label>কবির ছবিঃ</label>
                                                <input type="file" class="form-control" placeholder="" name="author_image">
                                                <span class="input_warning"> ( * সর্বোচ্চ ফাইল সাইজ ৫ এম্ বি )</span><br>
                                                @if ($errors->has('author_image'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_image') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" style="padding-top: 28px;">
                                               <label>জীবিতঃ</label>
                                                <input type="checkbox" style="margin-left: 10px;"   name="live_flag"  value="1" @if($AuthorDetail->LIVE_FLAG == 1) checked @endif >
                                            </div>
                                        </div>
                                    </div>--}}

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>বর্তমান ঠিকানাঃ</label>
                                                <input type="text" class="form-control" placeholder="" name="present_address" value="{{ $AuthorDetail->PRESENT_ADDRESS }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>বর্তমান শহরঃ</label>
                                                 <input type="text" class="form-control" placeholder="" name="present_city" value="{{ $AuthorDetail->PRESENT_CITY }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>বর্তমান জেলাঃ</label>
                                                 <input type="text" class="form-control" placeholder="" name="present_district" value="{{ $AuthorDetail->PRESENT_DISTRICT }}">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>স্থায়ী ঠিকানাঃ</label>
                                                <input type="text" class="form-control" placeholder="" name="permanent_address" value="{{ $AuthorDetail->PERMANENT_ADDRESS }}">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>স্থায়ী শহরঃ</label>
                                                 <input type="text" class="form-control" placeholder="" name="permanent_city" value="{{ $AuthorDetail->PERMANENT_CITY }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>স্থায়ী জেলাঃ </label>
                                                 <input type="text" class="form-control" placeholder="" name="permanent_district" value="{{ $AuthorDetail->PERMANENT_DISTRICT }}">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থা </label>
                                                <select name="active_status" class="form-control">
                                                      <option value="1" @if($AuthorDetail->ACTIVE_STATUS == 1) selected @endif > কার্যকর </option>
                                                      <option value="0" @if($AuthorDetail->ACTIVE_STATUS == 0) selected @endif > অকার্যকর </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কবির/লেখক ধরনঃ</label>
                                                <select class="form-control"  name="author_type">
                                                    @foreach($AuthorTypes as $AuthorType)
                                                        <option value="{{ $AuthorType->AUTHOR_TYPE_ID }}" @if($AuthorDetail->AUTHOR_TYPE_ID == $AuthorType->AUTHOR_TYPE_ID) selected @endif> {{$AuthorType->TYPE_NAME}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">সংরক্ষন করুন</button>
                                    <div class="clearfix"></div>
                                </form>
                @endforeach
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

@endsection