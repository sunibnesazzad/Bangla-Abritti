@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>আবৃত্তিকারের  তথ্য পরিবর্তন </span></div>
@endsection
@section('main-content') 

        <div class="content">
            <div class="container-fluid">
@include('admin.inc.messages')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                 @foreach($AuthorDetails as $AuthorDetail)
                        <form action="/admin/reciter/{{ $AuthorDetail->RECITER_ID }}" method="post" enctype="multipart/form-data">
                            <div class="header">
                                
                                 <div class="col-md-9" style="padding: 0px;">
                                     <h4 class="title">আবৃত্তিকারের তথ্য পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
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
                                                <label><span class="required">* </span>আবৃত্তিকারের নামঃ</label>
                                                <input type="text" class="form-control" placeholder="আবৃত্তিকারের নাম" name="author_name" value="{{ $AuthorDetail->RECITER_NAME }}" required="">
                                                @if ($errors->has('author_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_name') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                      
                                         <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span class="required">* </span>সংক্ষিপ্ত কোডঃ <span class="required"> ( ইংরেজিতে লিখতে হবে ) </span></label>
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
                                                <select class="form-control" name="author_nationality"  >
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
                                                <label>জন্ম তারিখঃ</label>
                                                <input type="date" class="form-control"   name="author_dob" value="{{ $AuthorDetail->RECITER_DOB }}">
                                                @if ($errors->has('author_dob'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_dob') }}
                                                    </span>
                                                @endif
                                                <br>
                                               <div class="form-group">
                                                <label>আবৃত্তিকারের এন আই ডিঃ</label>
                                                <input type="text"  class="form-control" name="nid" value="{{ $AuthorDetail->RECITER_NID }}">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>আবৃত্তিকারের পরিচিতি</label>
                                                <textarea class="form-control"  name="author_biblography">{{ $AuthorDetail->RECITER_BIBLIOGRAPHY }}</textarea>
                                                @if ($errors->has('author_biblography'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_biblography') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>আবৃত্তিকারের ইমেইলঃ</label>
                                                <input type="text" class="form-control" placeholder="ইমেইল" name="author_email" value="{{ $AuthorDetail->RECITER_EMAIL }}">
                                                @if ($errors->has('author_email'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_email') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                       <div class="col-md-3">
                                            <div class="form-group">

                                                <label>আবৃত্তিকারের ছবিঃ</label>
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
                                            {{--<div class="form-group" style="padding-top: 28px;">
                                               <label>জীবিতঃ</label>
                                                <input type="checkbox" style="margin-left: 10px;"   name="live_flag"  value="1" @if($AuthorDetail->LIVE_FLAG == 1) checked @endif >
                                            </div>--}}
                                        </div>
                                    </div>

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