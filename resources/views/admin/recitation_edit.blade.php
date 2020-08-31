@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>আবৃত্তির  তথ্য পরিবর্তন </span></div>
@endsection
@section('main-content') 

        <div class="content">
            <div class="container-fluid">
@include('admin.inc.messages')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">আবৃত্তির  তথ্য পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                            </div>
                            <div class="content">
            @foreach($RecitationDetails as $RecitationDetail)
                                <form  action="/admin/recitation/{{ $RecitationDetail->RECITATION_ID }}" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <input type="text" name="audio_flag" value="{{$RecitationDetail->AUDIO_FLAG}}" hidden="">
                                        <input type="text" name="video_flag" value="{{$RecitationDetail->VIDEO_FLAG}}" hidden="">
                                        <input type="text" name="audio_file_path" value="{{$RecitationDetail->AUDIO_FILE_PATH}}" hidden="">
                                    <div class="row">
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><span class="required">* </span>কবিতার নামঃ</label>
                                                <select class="form-control" required="" name="poem_name">
                                                    <option value=""><span class="required">* </span>নির্বাচন করুন</option>
                                                @foreach($poems as $poem)
                                                    <option value="{{$poem->POEM_ID}}" @if( $RecitationDetail->POEM_ID == $poem->POEM_ID) selected @endif > {{$poem->POEM_NAME}} </option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('poem_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('poem_name') }}
                                                    </span>
                                                 @endif

                                            </div>
                                        </div>

                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>আবৃত্তিকারের নামঃ</label>
                                                <select class="form-control"  name="reciter_name">
                                                    <option value="">নির্বাচন করুন</option>
                                                @foreach($reciters as $reciter)
                                                    <option value="{{$reciter->RECITER_ID}}" @if( $RecitationDetail->RECITER_ID == $reciter->RECITER_ID) selected @endif > {{$reciter->RECITER_NAME}} </option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('reciter_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('reciter_name') }}
                                                    </span>
                                                 @endif

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                       
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>আবৃত্তির অডিওঃ</label>
                                                <input class="form-control" type="file" name="audio"  />
                                                  @if ($errors->has('audio'))
                                                    <span  class="error">
                                                        {{ $errors->first('audio') }}
                                                    </span>
                                                 @endif
                                                 <div style="padding: 5px;">অডিও ফাইলঃ {{  substr($RecitationDetail->AUDIO_FILE_PATH,62,500) }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>আবৃত্তির ভিডিওঃ</label>
                                                <input class="form-control" type="text" name="video" value="{{  $RecitationDetail->VIDEO_LINK }}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থা </label>
                                                <select name="active_status" class="form-control">
                                                      <option value="1" @if($RecitationDetail->ACTIVE_STATUS == 1) selected @endif > কার্যকর </option>
                                                      <option value="0" @if($RecitationDetail->ACTIVE_STATUS == 0) selected @endif > অকার্যকর </option>
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