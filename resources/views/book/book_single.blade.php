
@extends('layouts.master')

@section('content')

    <div class="container-fluid">

        <div class="row">
            @foreach($books as $book)
            <div class="col-md-10">

                <div class="panel panel-default cul-head">
                    <h2>{{ $book->BOOK_NAME }}</h2>
                </div>
                <div class="panel panel-default single-cul-news">
                    <div class="row">
                        <div class="col-md-12 news_img text-center">

                            @if($book->image_file_path != NULL)
                                <img src="{{ asset('bangla_abritti/uploaded_img/book_images/'. $book->image_file_path ) }}" style="width: 20%">
                            @else
                                <img src="{{ asset('bangla_abritti/uploaded_img/book_images/book.jpg' ) }}" style="width: 20%">
                            @endif
                            <div class="clt-title">
                                @if($book->AUTHOR_NAME != NULL)
                                <h2 style="padding: 15px">{{ $book->AUTHOR_NAME }} </h2>
                                @else
                                    <h2 style="padding: 15px"> লেখক অজানা </h2>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12 evnt-dis">
                            <p style="font-weight: 500">
                                <span style="font-weight: 900"> বইয়ের  বিবরনঃ </span>
                                {!! $book->BOOK_DESC !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-2" style="overflow: hidden">
                <img src="{{ asset('assets2/img/add-horizontal.jpg') }}"style=" width: 100%; margin-top: 10px">
                <img src="{{ asset('assets2/img/add-horizontal.jpg') }}"style=" width: 100%; margin-top: 10px">
            </div>

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



