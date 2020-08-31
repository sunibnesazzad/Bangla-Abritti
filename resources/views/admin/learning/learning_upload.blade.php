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
                        <form form action="/admin/learning/store" method="post">
                            <div class="header">

                                <div class="col-md-9" style="padding: 0px;">
                                    <h4 class="title">এসো শিখি যুক্ত করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
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
                                            <label><span class="required">* </span>এসো শিখি নামঃ</label>
                                            <input type="text" class="form-control" placeholder="এসো শিখি" value="{{ old('learning_title') }}" required="" name="learning_title">
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>এসো অবস্থাঃ </label>
                                            <select  class="form-control" name="learning_category">
                                                <option value="1"  > আবৃত্তি শিখি </option>
                                                <option value="2"  > সংবাদ পাঠের খুঁটিনাটি </option>
                                                <option value="3"  > উপস্থাপনার কলাকৌশল </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><span class="required">* </span>এসো শিখি বিবরনঃ</label>
                                            <textarea rows="5" class="form-control" name="learning_detail" style="min-height: 300px" required>{{ old('learning_detail') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><span class="required">* </span>এসো শিখি তারিখঃ</label>
                                            <input type="date" class="form-control" value="" name="learning_date" required>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>


@endsection