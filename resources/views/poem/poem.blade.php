@extends('layouts.master')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default poem-summury">
                    <div class="row">
                        <div class="col-md-6">
                            মোট কবিতার সংখ্যা : {{ $poemNum }} টি
                        </div>
                        <div class="col-md-6">
                            {{--মোট পাঠক সংখ্যা : ০০০০ জন--}}
                        </div>
                    </div>
                </div>

                <div class="panel panel-success poem-search">
                    <div class="row">
                        <form action="/poem" method="get">

                            <div class="col-md-5 poem-inp"> </div>
                            <div class="col-md-3 poem-inp">
                                <div class="form-group">
                                    <label>কবির নাম</label>
                                    <select class="form-control" name="author_name">
                                        <option value="">কবির  নাম</option>
                                        @foreach($authors as $author)
                                            <option value="{{$author->AUTHOR_NAME}}">{{$author->AUTHOR_NAME}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 poem-inp">
                                <div class="form-group">
                                    <label>কবিতার নাম</label>
                                    <input class="form-control" type="text" placeholder="কবিতার নাম" name="poem_name">
                                </div>
                            </div>
                            <div class="col-md-1 poem-inp">
                                <div class="form-group">
                                    <label style="padding-top: 36px"></label>
                                    <input class="btn btn-default" type="submit" value="খুজুন">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-danger table-responsive" style="padding: 15px">

                    <table  id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <th>কবিতার নাম</th>
                        <th>কবির নাম</th>
                        {{--<th>বই এর নাম</th>--}}
                        <th>প্রকাশের সময়</th>

                        </thead>
                        <tbody>
                        @foreach($poems as $poem)
                        <tr>
                            <td>
                                <a href="#" type="button" class="" data-toggle="modal" data-target=".poem-{{$poem->POEM_ID}}">{{ $poem->POEM_NAME }}</a>

                                <!-- Large modal -->
                                <div class="modal fade poem-{{$poem->POEM_ID}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <h2>{{ $poem->POEM_NAME }}</h2>

                                                <span style="padding-bottom: 20px; display: block; color: red">- {{ $poem->AUTHOR_NAME }}</span>
<pre>
{!!   $poem->POEM_TEXT !!}
</pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td>{{ $poem->AUTHOR_NAME }} </td>
                            {{--<td>{{ $poem->BOOK_NAME }} </td>--}}
                            <td> {{ $poem->FIRST_PUBLICATION_DATE }} </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="text-center">
                        {{ $poems->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-2 add">
                <img src="{{ asset('assets2/img/add-horizontal.jpg') }}"style=" width: 100%">
            </div>

        </div>



    </div>



    <style>
        button.close {
            -webkit-appearance: none;
            padding: 0px 15px 0 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
        }

        .close {
            float: right;
            font-size: 50px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            filter: alpha(opacity=20);
            opacity: .2;
        }
    </style>
@endsection