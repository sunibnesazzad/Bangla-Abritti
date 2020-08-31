@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>এসো শিখি  আপলোড </span></div>
@endsection
@section('main-content')
    <div class="content">
        <div class="container-fluid">
            @include('admin.inc.messages')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @foreach($learningLists as $learningList)
                            <form form action="" method="post">
                                <div class="header">

                                    <div class="col-md-9" style="padding: 0px;">
                                        <h4 class="title">এসো শিখি পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                    </div>
                                    <div class="col-md-3" style="padding: 0px;">
                                        <a href="/admin/learning/edit/{{ $learningList->LEARNING_ID }}" class="btn btn-info btn-fill pull-right" >পরিবর্তন করুন</a>
                                    </div>
                                </div>
                                <div class="content">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>এসো শিখি নামঃ</label>
                                                <input type="text" class="form-control" placeholder="এসো শিখি" value="{{ $learningList->LEARNING_TITLE }}" disabled name="learning_title">
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>এসো অবস্থা </label>
                                                <select  class="form-control" name="learning_category" disabled>
                                                    @if($learningList->LEARNING_CATEGORY_ID==1)
                                                        <option value="1"  > আবৃত্তি শিখি </option>
                                                    @elseif($learningList->LEARNING_CATEGORY_ID==2)
                                                        <option value="2"  > সংবাদ পাঠের খুঁটিনাটি </option>
                                                    @elseif($learningList->LEARNING_CATEGORY_ID==3)
                                                        <option value="3"  > উপস্থাপনার কলাকৌশল </option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><span class="required">* </span>এসো শিখি বিবরনঃ</label>
                                                <textarea rows="5" class="form-control" name="learning_detail" style="min-height: 300px" disabled>{{ $learningList->LEARNING_DESC }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><span class="required">* </span>এসো শিখি তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $learningList->PUBLISH_START_DATE }}" name="learning_date" disabled>
                                                @if ($errors->has('learning_date'))
                                                    <span  class="error">
                                                        {{ $errors->first('learning_date') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থা </label>
                                                <select name="active_status" class="form-control" disabled>
                                                    @if($learningList->ACTIVE_STATUS == 1)
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