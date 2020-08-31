@extends('layouts.master')

@section('content')

    <div class="container-fluid ">

        <span class="overlay-white"></span>
        <div class="container-fluid">

            <div class="row">
                @foreach($learnings as $learning)
                <div class="col-md-10 learning_rec text-center">
                    <h2 class="text-center"> {{ $learning->CATEGORY_NAME }} </h2>
                    <img src="{{ asset('assets2/img/border.png')}}" style="width: 20%; padding:15px 0px">
                    <div class="row">

                        <div class="col-md-12 text-left">

                            <div class="rec_topic_info text-left">
                                <h3 style="font-weight: 600">{{ $learning->LEARNING_TITLE }}</h3>

                                <hr>
                                <p> {{ $learning->LEARNING_DESC }} </p>
                            </div>
                        </div>



                    </div>
                </div>
                @endforeach
                <div class="col-md-2 add"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}">
                    <img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin-top: 10px">
                </div>
            </div>
        </div>
    </div>

@endsection