@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>এসো শিখি তালিকা </span></div>
@endsection
@section('main-content')
    <div class="container-fluid search">
        <div class="row">
            <div class="col-md-12" style="padding-left: 0px;">

                <form action="/admin/learning/index" method="get">
                    <ul>
                        <li>
                            <input type="text" class="form-control" placeholder="এসো শিখি নাম" name="learning_title" @if(isset($_GET['learning_title']))  value="{{ $_GET['learning_title'] }}"   @endif >
                        </li>
                        <li><input type="date"  class="form-control" name="learning_date"></li>
                        <li>
                            <select  class="form-control" name="learning_category">
                                <option value="1"  > আবৃত্তি শিখি </option>
                                <option value="2"  > সংবাদ পাঠের খুঁটিনাটি </option>
                                <option value="3"  > উপস্থাপনার কলাকৌশল </option>
                            </select>
                        </li>

                        <li>
                            <select name="active_status" class="form-control">
                                <option value="1" > কার্যকর </option>
                                <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif>
                                    অকার্যকর </option>
                            </select>
                        </li>
                        <li class="refresh"><a href="/admin/learning/index" type="btn reset" class="form-control " ><i class="fas fa-redo-alt"></i></a></li>
                        <li>
                            <button class="form-control" type="submit"><i class="fa fa-search"></i></button>
                        </li>
                    </ul>
                </form>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <table id="my_table" class="datatable">
                        <thead>
                        <th> অ্যাকশান</th>
                        <th>এসো শিখি নাম</th>
                        <th class="text-center">এসো শিখি বিস্তারিত</th>
                        <th>এসো শিখি  বিভাগ </th>
                        <th>এসো শিখি তারিখ</th>

                        </thead>

                        <tbody>
                        @foreach($learningLists as $learningList)
                            <tr>
                                <td><center><a href="/admin/learning/show/{{ $learningList->LEARNING_ID }}" data-toggle="tooltip" title="ভিউ"><i class="far fa-list-alt"></i></a> &nbsp
                                        <a href="/admin/learning/edit/{{ $learningList->LEARNING_ID }}" data-toggle="tooltip" title="এডিট"><i class="far fa-edit"></i></a>

                                        <a href="#"  class="" data-toggle="modal" data-target=".poem-{{ $learningList->LEARNING_ID }}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                    <!-- Large modal -->
                                    <div class="modal fade poem-{{ $learningList->LEARNING_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <h3>আপনি কি সত্যি এটা ডিলিট করতে চান??</h3>

                                                    <form action="/admin/learning/delete/{{ $learningList->LEARNING_ID }}" method="get">
                                                        <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                        <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                                <td>{{ $learningList->LEARNING_TITLE }}</td>
                                <td >{{ $learningList->LEARNING_DESC }}</td>
                                <td>
                                    @if($learningList->LEARNING_CATEGORY_ID==1)
                                        <p>আবৃত্তি শিখি</p>
                                     @elseif($learningList->LEARNING_CATEGORY_ID==2)
                                        <p>সংবাদ পাঠের খুঁটিনাটি</p>
                                    @elseif($learningList->LEARNING_CATEGORY_ID==3)
                                        <p>উপস্থাপনার কলাকৌশল</p>
                                    @endif
                                </td>
                                <td>{{ $learningList->PUBLISH_START_DATE }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection