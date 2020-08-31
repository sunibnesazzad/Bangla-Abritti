@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>প্রকাশক  আপলোড </span></div>
@endsection
@section('main-content') 


        <div class="content">
            <div class="container-fluid">
@include('admin.inc.messages')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">প্রকাশক যুক্ত করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                            </div>
                            <div class="content">
                                <form action="/admin/publisher" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>প্রকাশকের নামঃ</label>
                                                <input type="text" class="form-control" placeholder="প্রকাশক" required="" name="publisher_name" value="{{ old('publisher_name') }}">
                                                @if ($errors->has('publisher_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('publisher_name') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">প্রকাশকের দেশঃ</label>
                                                 <select class="form-control" name="publisher_nationality" >
                                                       <option value = "">  নির্বাচন করুন </option>
                                                    @foreach($CountryNames as $CountryName)
                                                        <option value="{{$CountryName->COUNTRY_ID}}" @if(old('publisher_nationality') == $CountryName->COUNTRY_ID) selected @endif > {{$CountryName->COUNTRY_NAME}} </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('publisher_nationality'))
                                                    <span  class="error">
                                                        {{ $errors->first('publisher_nationality') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                       
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>ঠিকানাঃ</label>
                                                <textarea class="form-control" style="min-height: 100px"  name="publisher_address">{{ old('publisher_address') }}</textarea>
                                                @if ($errors->has('publisher_address'))
                                                    <span  class="error">
                                                        {{ $errors->first('publisher_address') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থাঃ </label>
                                                <select name="active_status" class="form-control">
                                                      <option value="1" selected  > কার্যকর </option>
                                                      <option value="0"   > অকার্যকর </option>
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