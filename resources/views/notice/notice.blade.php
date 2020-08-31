
@extends('layouts.master')

@section('content')

     <div class="row">
    
    <div class="col-md-10">
      <div class="panel panel-danger" style="padding: 10px; margin: 10px">
         <div class="row">
                <div class="col-md-3">
                    <h3 style="margin-bottom: 0px">নোটিশ :</h3>
                </div>
                <div class="col-md-9 text-right">
                    <form action="/notice" method="get" class="notice_form">
                      <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control" placeholder="নোটিশ   নাম" name="notice_name"></div>
                        <div class="col-md-3">
                         <input type="date" class="" name="start_date" style="padding: 4px; border-radius: 5px; border: 1px solid #aaa"></div>
                         <div class="col-md-1" style="margin-top: 10px;">
                         <p>থেকে</p></div>
                         <div class="col-md-3"><input type="date" class="" name="end_date" style="padding: 4px; border-radius: 5px; border: 1px solid #aaa"></div>
                         <div class="col-md-1"><button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-search"></i></button></div>
                      </div>
                        
                        
                    </form>
                </div>
          </div>
      </div>
        
      <div class="panel">
             <div class="row" style="padding: 0px 10%">
                <div class="col-sm-12 col-md-12">
             @foreach($notices as $notice)
                    <div class="panel panel-danger all_notice" style="padding: 10px; margin: 10px">
                        <h3> {{$notice->NOTICE_TITLE}}  </h3>
                        <span class="notice_pub_date"><i class="glyphicon glyphicon-time"></i> {{$notice->PUBLISH_START_DATE }} </span>
                        <hr>
                        <p> {{$notice->NOTICE_DESC}}</p>
                        
                        <div class="" style="padding-top: 10px"><!-- <a class="btn btn-success btn-sm" href="/notice/show/{{ $notice->NOTICE_ID }}" role="button"> বিস্তারিত </a> --></div>
                    </div> 
              @endforeach
                </div>
             </div> 
      </div>

        <div class="row">
            <div class="text-center">
                {{ $notices->links() }}
            </div>
        </div>

    </div>

    <div class="col-md-2 add">
      <img src="{{ asset('assets2/img/add-horizontal.jpg') }}"style=" width: 100%">
    </div>

  </div>

    <style>

        .all_notice{
            padding: 20px!important;
        }
        .all_notice h3{
            color: #ff0000;
        }
        .all_notice span.notice_pub_date{
            color: #bbb;
        }

        .panel.all_notice{
            background: ghostwhite;
        }
        @media only screen and (max-width: 768px) {
            .notice_form input {
                width: 100%;
                margin-top: 10px;
            }

            .notice_form button {
                margin-top: 10px;
            }
        }
    </style>

  
@endsection
  
 
  
  