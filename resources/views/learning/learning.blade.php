@extends('layouts.master')

@section('content')

    <div class="container-fluid ">

        <span class="overlay-white"></span>
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-10 learning_rec text-center">
                    <h2 class="text-center"> {{ $head }}</h2>
                    <img src="{{ asset('assets2/img/border.png') }}" style="width: 20%; padding:15px 0px">
                    <div class="row">

                        <div class="col-md-12 text-left">
                            <table class="table table-bordered table-responsive" width="100%">
                                <thead>
                                <th> বিষসমূহঃ  </th>
                                <th>আপলোড এর তারিখঃ </th>
                                </thead>
                                <tbody>

                                @foreach($learnings as $learning)
                                <tr>
                                    <td><a href="/learning/show/{{ $learning->LEARNING_ID }}">{{ $learning->LEARNING_TITLE }}</a></td>
                                    <td> {{ $learning->PUBLISH_START_DATE }} </td>
                                </tr>
                                @endforeach


                                </tbody>
                            </table>

                            <div class="row">
                                <div class="text-center">
                                    {{ $learnings->links() }}
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-md-2 add"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}">
                    <img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin-top: 10px">
                </div>
            </div>
        </div>
    </div>

@endsection