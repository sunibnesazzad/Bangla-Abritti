@extends('layouts.master')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default cul-head">
                    <h2>বিভিন্ন সংগঠনের তথ্যাবলী  </h2>
                </div>
                <div class="row">

                    @foreach($culturalOrgs as $culturalOrg)

                    <div class="col-md-3 all_evnt">
                        <div class="panel cult_evnt panel-danger">
                            <div class="news_img">
                                <img src="{{asset('bangla_abritti/uploaded_img/cultural_org_images/'.$culturalOrg->ORG_IMAGE_PATH)}}">
                            </div>
                            <div class="news_title_dis">
                                <h3>{{ $culturalOrg->ORG_NAME }}</h3>
                                <hr>
                                <p>{!! str_limit($culturalOrg->ORG_DESC,140) !!}</p>
                            </div>
                            <a href="/culturalOrg/show/{{ $culturalOrg->CULTURAL_ORG_ID }}" type="button" class="btn btn-success read-more">বিস্তারিত</a>
                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="row">
                    <div class="text-center">
                        {{ $culturalOrgs->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-2 add"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin-top: 10px"></div>

        </div>
    </div>

    <style>
        .cul-head{
            padding: 10px;
            margin: 10px 0px;
            text-align: center;
        }
        .cul-head h2{
            margin: 0px;
        }
        .all_evnt{
            padding: 10px;
            text-align: justify;
        }
        .cult_evnt{
            padding: 10px;
            transition: 0.5s;
            min-height: 450px;
        }

        .cult_evnt:hover{
            box-shadow: 0px 0px 3px red;
            transition: 0.5s;
        }
        .cult_evnt img{
            width: 100%;
            height: 100%;
        }

        .news_title_dis{
            padding: 10px 0px;
        }


        .news_title_dis h3{
            margin-bottom: 0px;
        }

        .news_img{
            min-height: 170px;
        }
        .news_img img{
            width: 100%;
        }
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

        .main_info{
            padding: 10px 30px;
        }
        .org_info ul li{
            list-style: none;
        }
    </style>

@endsection