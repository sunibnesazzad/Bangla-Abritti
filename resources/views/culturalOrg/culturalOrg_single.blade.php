@extends('layouts.master')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-10">


                <div class="panel panel-default cul-head text-center" style="padding: 15px; margin-top: 10px">
                    <h2>বিভিন্ন সংগঠনের তথ্যাবলী</h2>
                </div>
                @foreach($culturalOrgs as $culturalOrg)
                <div class="panel panel-default single-cul-news">
                        <div class="row">
                        <div class="col-md-4 news_img">
                            <img src="{{asset('bangla_abritti/uploaded_img/cultural_org_images/'.$culturalOrg->ORG_IMAGE_PATH)}}" width="100%">
                        </div>
                        <div class="col-md-8 main_info">
                            <div class="clt-title">
                                <h2> {{ $culturalOrg->ORG_NAME }} </h2>
                            </div>
                            <div class="org_info">
                                <ul>
                                    <li> স্থাপনার সময়কালঃ {{ $culturalOrg->ESTABLISHED_DATE }} </li>
                                    <li> স্থপতিঃ  {{ $culturalOrg->ORG_FOUNDER }} </li>
                                    <li> ঠিকানাঃ {{ $culturalOrg->ORG_ADDRESS }} </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 evnt-dis">
                            <p style="font-weight: 300">
                                <span style="font-weight: 900">সংগঠনটি সম্পর্কে বিস্তারিতঃ</span>
                                {{ $culturalOrg->ORG_DESC }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="col-md-2 add"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin-top: 10px"></div>
        </div>
    </div>

    <style>
        .single-cul-news{
            padding: 10px;
            margin: 10px 0px;
        }

        .news_info{
            padding: 90px 30px;
            text-align: center;
        }
        .evnt-dis{
            padding: 15px 0px;
        }
        .org_info ul li{
            list-style: none;
        }
        .clt-title h2{
            margin-top: 10px;
        }

    </style>

@endsection