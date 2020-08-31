@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>আবৃত্তিকার  আপলোড </span></div>
@endsection
@section('main-content') 

  
        <div class="content">
            <div class="container-fluid">
@include('admin.inc.messages')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                         <form action="/admin/reciter" method="post" enctype="multipart/form-data">
                            <div class="header">
                                 <div class="col-md-9" style="padding: 0px;">
                                      <h4 class="title">আবৃত্তিকার যুক্ত করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                  </div>
                                  <div class="col-md-3" style="padding: 0px;">
                                       <button type="submit" class="btn btn-info btn-fill pull-right" >সংরক্ষন করুন</button>
                                  </div>
                            </div>
                            <div class="content">
                               
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><span class="required">* </span>আবৃত্তিকারের নামঃ</label>
                                                <input type="text" class="form-control" placeholder="আবৃত্তিকারের নাম" name="author_name" value="{{ old('author_name') }}" required="">
                                                @if ($errors->has('author_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_name') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span class="required">* </span>সংক্ষিপ্ত কোডঃ <span class="required">( ইংরেজিতে লিখতে হবে )</span></label>
                                                    <input type="text" name="short_code" placeholder="সংক্ষিপ্ত কোড" class="form-control" required="" value="{{ old('short_code') }}">
                                                   
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
                                                        <option value="{{$CountryName->COUNTRY_ID}}" @if(old('author_nationality') == $CountryName->COUNTRY_ID) selected @endif > {{$CountryName->COUNTRY_NAME}} </option>
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
                                                <label>বসবাসরত দেশঃ</label>
                                                <select class="form-control" name="author_citizenship">
                                                        <option value = "">  নির্বাচন করুন </option>
                                                    @foreach($CountryNames as $CountryName)
                                                        <option value="{{$CountryName->COUNTRY_ID}}" @if(old('author_nationality') == $CountryName->COUNTRY_ID) selected @endif > {{$CountryName->COUNTRY_NAME}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>জন্ম তারিখঃ</label>
                                                <input type="date" class="form-control"   name="author_dob" value="{{ old('author_dob') }}">
                                                @if ($errors->has('author_dob'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_dob') }}
                                                    </span>
                                                @endif
                                                <br>
                                                
                                            </div>

                                            <div class="form-group">
                                                <label>আবৃত্তিকারের এন আই ডিঃ</label>
                                                <input type="text"  class="form-control" name="nid" value="{{ old('nid') }}">
                                            </div>
                                      

                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>আবৃত্তিকারের পরিচিতিঃ</label>
                                                <textarea class="form-control"  name="author_biblography">{{ old('author_biblography') }}</textarea>
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
                                                <input type="text" class="form-control" placeholder="ইমেইল" name="author_email" value="{{ old('author_email') }}">
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

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>বর্তমান ঠিকানাঃ</label>
                                                <input type="text" class="form-control" placeholder="" name="present_address" value="{{ old('present_address') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>বর্তমান শহরঃ</label>
                                                 <input type="text" class="form-control" placeholder="" name="present_city" value="{{ old('present_city') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>বর্তমান জেলাঃ</label>
                                                 <input type="text" class="form-control" placeholder="" name="present_district" value="{{ old('present_district') }}">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>স্থায়ী ঠিকানাঃ</label>
                                                <input type="text" class="form-control" placeholder="" name="permanent_address" value="{{ old('permanent_address') }}">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>স্থায়ী শহরঃ</label>
                                                 <input type="text" class="form-control" placeholder="" name="permanent_city" value="{{ old('permanent_city') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>স্থায়ী জেলাঃ </label>
                                                 <input type="text" class="form-control" placeholder="" name="permanent_district" value="{{ old('permanent_district') }}">
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থাঃ </label>
                                                <select name="active_status" class="form-control">
                                                      <option value="1"  selected> কার্যকর </option>
                                                      <option value="0"  > অকার্যকর </option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">সংরক্ষন করুন</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
@endsection