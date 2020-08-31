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
                            <form form action="" method="post" enctype="multipart/form-data">
                                <div class="header">

                                    <div class="col-md-9" style="padding: 0px;">
                                        <h4 class="title">সংগঠনের তথ্য পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                    </div>
                                    <div class="col-md-3" style="padding: 0px;">
                                        <a href="/admin/culturalOrg/edit/{{ $culturalOrg->CULTURAL_ORG_ID }}" class="btn btn-info btn-fill pull-right" >পরিবর্তন করুন</a>
                                    </div>
                                </div>
                                <div class="content">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সংগঠনের নামঃ</label>
                                                <input type="text" class="form-control" placeholder="সংগঠনের নাম" value="{{ $culturalOrg->ORG_NAME }}" required="" name="org_name" disabled="">
                                            </div>
                                        </div>


                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>স্থপতির নামঃ</label>
                                                <input type="text" class="form-control" placeholder="স্থপতির নাম" value="{{ $culturalOrg->ORG_FOUNDER }}" required="" name="builder_name" disabled="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label><span class="required">* </span>ঠিকানাঃ</label>
                                                <input type="text" class="form-control" placeholder="ঠিকানা " value="{{ $culturalOrg->ORG_ADDRESS }}" required="" name="org_palace" disabled="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>স্থাপনার সময়কাল তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $culturalOrg->ESTABLISHED_DATE }}" name="est_date" required="" disabled="">

                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label><span class="required">* </span>সংগঠনের বিস্তারিত</label>
                                                <textarea class="form-control"  name="org_text" required="" disabled="">{{ $culturalOrg->ORG_DESC }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থা </label>
                                                <select name="active_status" class="form-control" disabled="">
                                                    @if($culturalOrg->ACTIVE_STATUS == 1)
                                                    <option value="1"  selected> কার্যকর </option>
                                                    @else
                                                    <option value="0"  > অকার্যকর </option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <label> সংগঠনের  ছবিঃ</label>
                                                <img src="{{asset('bangla_abritti/uploaded_img/cultural_org_images/'.$culturalOrg->ORG_IMAGE_PATH)}}" style="width: 200px; height: auto">

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