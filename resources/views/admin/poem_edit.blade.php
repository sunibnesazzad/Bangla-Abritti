@extends('admin.layout.app')
@section('page_title')
   <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>কবিতার  তথ্য পরিবর্তন </span></div>
@endsection
@section('main-content') 

        <div class="content">
            <div class="container-fluid">
@include('admin.inc.messages')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                   @foreach($PoemDetails as $PoemDetail)
                       <form form action="/admin/poem/{{ $PoemDetail->POEM_ID }}" method="post">
                            <div class="header">
                                
                                 <div class="col-md-9" style="padding: 0px;">
                                     <h4 class="title">কবিতার তথ্য পরিবর্তন করুনঃ<span class="input_warning"> ( * চিহ্নযুক্ত ঘর অবশ্যই পূরণ করতে হবে )</span></h4>
                                  </div>
                                  <div class="col-md-3" style="padding: 0px;">
                                       <button type="submit" class="btn btn-info btn-fill pull-right" >সংরক্ষন করুন</button>
                                  </div>
                            </div>
                            <div class="content">
             
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><span class="required">* </span>কবিতার নামঃ</label>
                                                <input type="text" class="form-control" placeholder="কবিতা" value="{{ $PoemDetail->POEM_NAME }}" required="" name="poem_name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কবির নামঃ</label>
                                                <select class="form-control"  name="author_name" >
                                                    <option value="">নির্বাচন করুন</option>
                                                @foreach($authors as $author)
                                                    <option value="{{$author->AUTHOR_ID}}" @if($PoemDetail->AUTHOR_ID == $author->AUTHOR_ID) selected @endif > {{$author->AUTHOR_NAME}} </option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('author_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('author_name') }}
                                                    </span>
                                                 @endif
                                            </div>
                                        </div>
                                      <!--   <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">কবিতার ধরনঃ</label>
                                                <select class="form-control" disabled>
                                                    <option value="">নির্বাচন করুন</option>
                                                </select>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>বইয়ের নামঃ</label>
                                                <select class="form-control"  name="book_name" >
                                                    <option value="">নির্বাচন করুন</option>
                                                @foreach($books as $book)
                                                    <option value="{{$book->BOOK_ID}}" @if($PoemDetail->BOOK_ID == $book->BOOK_ID) selected @endif > {{$book->BOOK_NAME}} </option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('publisher_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('publisher_name') }}
                                                    </span>
                                                 @endif
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label><span class="required">* </span>কবিতাঃ</label>
                                                <textarea class="form-control" style="min-height: 300px" name="poem" id="textEd">{!! $PoemDetail->POEM_TEXT !!}</textarea>
                                                @if ($errors->has('poem'))
                                                    <span  class="error">
                                                        {{ $errors->first('poem') }}
                                                    </span>
                                                 @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>কবিতার বিবরনঃ</label>
                                                <textarea rows="5" class="form-control" name="poem_description" style="min-height: 300px">{{ $PoemDetail->POEM_DESC }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>প্রকাশনার নামঃ</label>
                                                 <select class="form-control"  name="publisher_name" >
                                                    <option value="">নির্বাচন করুন</option>
                                                @foreach($publishers as $publisher)
                                                    <option value="{{$publisher->PUBLISHER_ID}}" @if($PoemDetail->PUBLISHER_ID == $publisher->PUBLISHER_ID) selected @endif > {{$publisher->PUBLISHER_NAME}} </option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('publisher_name'))
                                                    <span  class="error">
                                                        {{ $errors->first('publisher_name') }}
                                                    </span>
                                                 @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>প্রথম প্রকাশনার তারিখঃ</label>
                                                <input type="date" class="form-control" value="{{ $PoemDetail->FIRST_PUBLICATION_DATE }}" name="publication_date">
                                                @if ($errors->has('publication_date'))
                                                    <span  class="error">
                                                        {{ $errors->first('publication_date') }}
                                                    </span>
                                                 @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>প্রথম প্রকাশনার বিবরনঃ</label>
                                                <textarea rows="5" class="form-control" name="publication_description" style="min-height: 300px">{{ $PoemDetail->FIRST_PUBLICATION_DESC }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>কার্যকরী অবস্থা </label>
                                                <select name="active_status" class="form-control">
                                                      <option value="1" @if($PoemDetail->ACTIVE_STATUS == 1) selected @endif > কার্যকর </option>
                                                      <option value="0" @if($PoemDetail->ACTIVE_STATUS == 0) selected @endif > অকার্যকর </option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">সংরক্ষন করুন</button>
                                    <div class="clearfix"></div>
                                </form>
                @endforeach
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

@endsection