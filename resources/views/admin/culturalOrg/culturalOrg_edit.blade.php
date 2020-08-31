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
                        @foreach($culturalOrgs as $culturalOrg)
                        <form form action="/admin/culturalOrg/update/{{ $culturalOrg->CULTURAL_ORG_ID }}" method="post" enctype="multipart/form-data">
                            <div class="header">

                                <div class="col-md-9" style="padding: 0px;">
                                    <h4 class="title">সংগঠনের তথ্য পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
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
                                            <label><span class="required">* </span>সংগঠনের নামঃ</label>
                                            <input type="text" class="form-control" placeholder="সংগঠনের নাম" value="{{ $culturalOrg->ORG_NAME }}" required="" name="org_name">
                                        </div>
                                    </div>


                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label><span class="required">* </span>স্থপতির নামঃ</label>
                                            <input type="text" class="form-control" placeholder="স্থপতির নাম" value="{{ $culturalOrg->ORG_FOUNDER }}" required="" name="builder_name">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label><span class="required">* </span>ঠিকানাঃ</label>
                                            <input type="text" class="form-control" placeholder="ঠিকানা " value="{{ $culturalOrg->ORG_ADDRESS }}" required="" name="org_palace">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label><span class="required">* </span>স্থাপনার সময়কাল তারিখঃ</label>
                                            <input type="date" class="form-control" value="{{ $culturalOrg->ESTABLISHED_DATE }}" name="est_date" required="">

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label><span class="required">* </span>সংগঠনের বিস্তারিত</label>
                                            <textarea class="form-control"  name="org_text" required="">{{ $culturalOrg->ORG_DESC }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>কার্যকরী অবস্থা </label>
                                            <select name="active_status" class="form-control">
                                                <option value="1"  selected> কার্যকর </option>
                                                <option value="0"  > অকার্যকর </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label> সংগঠনের  ছবিঃ</label>
                                            <input type="file" class="form-control"  name="org_image" >
                                            <span class="input_warning"> ( * সর্বোচ্চ ফাইল সাইজ ৫ এম্ বি )</span><br>

                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">সংরক্ষন করুন</button>
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