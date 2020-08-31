
@extends('layouts.master')

@section('content')

    <div class="row poem_book">

        <div class="col-md-10">
            <div class="panel panel-default cul-head">
                <h2>আবৃত্তির বই  </h2>
            </div>

            <div class="row" style="padding: 15px">
                @foreach($books as $book)
                <div class="col-md-3 all_books text-center">
                    <div class="panel panel-danger books">
                        <div class="book_img">
                            @if($book->image_file_path != NULL)
                            <img src="{{ asset('bangla_abritti/uploaded_img/book_images/'. $book->image_file_path ) }}">
                            @else
                                <img src="{{ asset('bangla_abritti/uploaded_img/book_images/book.jpg' ) }}">
                            @endif
                        </div>
                        <div class="book_title_dis" style="margin-top: 5px">
                            <h3> {{ $book->BOOK_NAME }}  </h3>
                        </div>
                        <a href="/book/show/{{ $book->BOOK_ID }}" type="button" class="btn btn-success read-more"> বিস্তারিত  </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="text-center">
                    {{ $books->links() }}
                </div>
            </div>

        </div>

        <div class="col-md-2" style="overflow: hidden">
            <img src="{{ asset('assets2/img/add-horizontal.jpg') }}"style=" width: 100%; margin-top: 10px">
            <img src="{{ asset('assets2/img/add-horizontal.jpg') }}"style=" width: 100%; margin-top: 10px">
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



