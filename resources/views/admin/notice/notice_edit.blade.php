@extends('admin.layout.app')
@section('page_title')
   <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>নোটিশ  আপলোড </span></div>
@endsection
@section('main-content') 
        <div class="content">
            <div class="container-fluid">
@include('admin.inc.messages')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                      @foreach($notices as $notice)      
                     <form form action="/admin/notice/{{ $notice->NOTICE_ID }}" method="post">
                            <div class="header">
                                
                                <div class="col-md-9" style="padding: 0px;">
                                      <h4 class="title">নোটিশ যুক্ত করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                  </div>
                                  <div class="col-md-3" style="padding: 0px;">
                                       <button type="submit" class="btn btn-info btn-fill pull-right" >সংরক্ষন করুন</button>
                                  </div>
                            </div>
                            <div class="content">
                       
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>নোটিশ নামঃ</label>
                                                <input type="text" class="form-control" placeholder="কবিতা" value="{{ $notice->NOTICE_TITLE }}" required="" name="notice_title">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>নোটিশ বিবরনঃ</label>
                                                <textarea rows="5" class="form-control" name="notice_detail" style="min-height: 300px" >{{ $notice->NOTICE_DESC }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>নোটিশ suru তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $notice->PUBLISH_START_DATE }}" name="notice_start_date">
                                                @if ($errors->has('notice_start_date'))
                                                    <span  class="error">
                                                        {{ $errors->first('notice_start_date') }}
                                                    </span>
                                                 @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>নোটিশ ses তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $notice->PUBLISH_END_DATE }}" name="notice_end_date">
                                                @if ($errors->has('notice_end_date'))
                                                    <span  class="error">
                                                        {{ $errors->first('notice_end_date') }}
                                                    </span>
                                                 @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থা </label>
                                                <select name="active_status" class="form-control">
                                                      <option value="1" @if($notice->ACTIVE_STATUS == 1) selected @endif > কার্যকর </option>
                                                      <option value="0" @if($notice->ACTIVE_STATUS == 0) selected @endif > অকার্যকর </option>
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