@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>বই  আপলোড </span></div>
@endsection
@section('main-content')

    <div class="content">
        <div class="container-fluid">
            @include('admin.inc.messages')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="/admin/book" method="post" enctype="multipart/form-data">
                            <div class="header">

                                <div class="col-md-9" style="padding: 0px;">
                                    <h4 class="title"> বই যুক্ত করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                </div>
                                <div class="col-md-3" style="padding: 0px;">
                                    <button type="submit" class="btn btn-info btn-fill pull-right" >সংরক্ষন করুন</button>
                                </div>
                            </div>
                            <div class="content">

                                @csrf

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><span class="required">* </span>বইয়ের নামঃ</label>
                                            <input type="text" class="form-control" placeholder="বই" value="{{ old('book_name') }}" required="" name="book_name">
                                            @if ($errors->has('book_name'))
                                                <span  class="error">
                                                        {{ $errors->first('book_name') }}
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>বইয়ের প্রকারভেদঃ</label>
                                            <select class="form-control"  name="book_type" >
                                                <option value="">নির্বাচন করুন</option>
                                                @foreach($books as $book)
                                                    <option value="{{$book->BOOK_CATEGORY_ID}}" @if(old('book_type') == $book->BOOK_CATEGORY_ID) selected @endif > {{$book->CATEGORY_NAME}} </option>
                                                @endforeach
                                                @if ($errors->has('book_type'))
                                                    <span  class="error">
                                                        {{ $errors->first('book_type') }}
                                                    </span>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><span class="required">* </span>কবি/লেখকের নামঃ</label>
                                            <select class="form-control" name="author_name">
                                                {{--<option value="">নির্বাচন করুন</option>--}}
                                                @foreach($authors as $author)
                                                    <option value="{{$author->AUTHOR_ID}}" @if(old('author_name') == $author->AUTHOR_ID) selected @endif > {{$author->AUTHOR_NAME}} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('author_name'))
                                                <span  class="error">
                                                        {{ $errors->first('author_name') }}
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>প্রকাশনার নামঃ</label>
                                            <select class="form-control"  name="publisher_name" >
                                                <option value="">নির্বাচন করুন</option>
                                                @foreach($publishers as $publisher)
                                                    <option value="{{$publisher->PUBLISHER_ID}}" @if(old('publisher_name') == $publisher->PUBLISHER_ID) selected @endif > {{$publisher->PUBLISHER_NAME}} </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('publisher_name'))
                                                <span  class="error">
                                                        {{ $errors->first('publisher_name') }}
                                                    </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>প্রথম প্রকাশনার তারিখঃ</label>
                                            <input type="date" class="form-control"  value="{{ old('publication_date') }}" name="publication_date">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">

                                            <label>বইয়ের ছবিঃ</label>
                                            <input type="file" class="form-control" placeholder="" name="book_image">
                                            <span class="input_warning"> ( * সর্বোচ্চ ফাইল সাইজ ৫ এম্ বি )</span><br>
                                            @if ($errors->has('book_image'))
                                                <span  class="error">
                                                        {{ $errors->first('book_image') }}
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><span class="required">* </span>বই বিবরনঃ</label>
                                            <textarea rows="5" class="form-control" placeholder="" value="{{ old('book_description') }}" style="min-height: 300px" name="book_description" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>প্রথম প্রকাশনার বিবরনঃ</label>
                                            <textarea rows="5" class="form-control" placeholder="" value="{{ old('publication_description') }}" style="min-height: 300px" name="publication_description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>কার্যকরী অবস্থাঃ </label>
                                            <select name="active_status" class="form-control">
                                                <option value="1"  selected> কার্যকর </option>
                                                <option value="0"  > অকার্যকর </option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">সংরক্ষন করুন</button>
                                <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>

@endsection