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
                            <form  action="" method="post">
                                <div class="header">

                                    <div class="col-md-9" style="padding: 0px;">
                                        <h4 class="title">নোটিশ পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                    </div>
                                    <div class="col-md-3" style="padding: 0px;">
                                        <a href="/admin/notice/{{ $notice->NOTICE_ID }}/edit" class="btn btn-info btn-fill pull-right" >পরিবর্তন করুন</a>
                                    </div>
                                </div>
                                <div class="content">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>নোটিশ নামঃ</label>
                                                <input type="text" class="form-control" placeholder="কবিতা" value="{{ $notice->NOTICE_TITLE }}" disabled="" name="notice_title">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>নোটিশ বিবরনঃ</label>
                                                <textarea rows="5" class="form-control" name="notice_detail" style="min-height: 300px" disabled="">{{ $notice->NOTICE_DESC }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>নোটিশ শুরুর তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $notice->PUBLISH_START_DATE }}" disabled="" name="notice_start_date">
                                                @if ($errors->has('notice_start_date'))
                                                    <span  class="error">
                                                        {{ $errors->first('notice_start_date') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>নোটিশ  শেষের তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $notice->PUBLISH_END_DATE }}" disabled="" name="notice_end_date">
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
                                                <select name="active_status" class="form-control" disabled="">
                                                    @if($notice->ACTIVE_STATUS == 1)
                                                        <option value="1"  selected> কার্যকর </option>
                                                    @else
                                                        <option value="0"  > অকার্যকর </option>
                                                    @endif
                                                </select>
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