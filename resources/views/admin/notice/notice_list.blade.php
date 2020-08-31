@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>নোটিশ তালিকা </span></div>
@endsection
@section('main-content') 
<div class="container-fluid search">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 0px;">
                    
                        <form action="/admin/notice" method="get">
                        <ul>
                             <li>
                                <input type="text" class="form-control" placeholder="নোটিশ   নাম" name="notice_name" @if(isset($_GET['notice_name']))  value="{{ $_GET['notice_name'] }}"   @endif >
                            </li>
                            <li><input type="date"  class="form-control" name="start_date"></li>
                            <li><input type="date"  class="form-control" name="end_date"></li>
                             
                            <li>
                                <select name="active_status" class="form-control">
                                  <option value="1" > কার্যকর </option>
                                  <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif> 
                                    অকার্যকর </option>
                                </select>
                            </li>
                            <li class="refresh"><a href="/admin/notice" type="btn reset" class="form-control " ><i class="fas fa-redo-alt"></i></i></a></li>
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
                           <th>নোটিশের নাম</th>
                           <th>নোটিশ বিস্তারিত</th>
                           <th>কার্যকর তারিখ</th>
                            <th>শেষ তারিখ</th>
                            <th>আপলোড তারিখ</th>
                                                 
                       </thead>
                       
                       <tbody>
                        @foreach($notices as $notice)
                           <tr>
                               <td><center><a href="/admin/notice/show/{{ $notice->NOTICE_ID }}" data-toggle="tooltip" title="ভিউ"><i class="far fa-list-alt"></i></a> &nbsp
                                   <a href="/admin/notice/{{ $notice->NOTICE_ID }}/edit" data-toggle="tooltip" title="এডিট"><i class="far fa-edit"></i></a>

                                       <a href="#"  class="" data-toggle="modal" data-target=".poem-{{ $notice->NOTICE_ID }}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                   <!-- Large modal -->
                                   <div class="modal fade poem-{{ $notice->NOTICE_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                       <div class="modal-dialog modal-sm" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               </div>
                                               <div class="modal-body text-center">
                                                   <h3>আপনি কি সত্যি এটা ডিলিট করতে চান??</h3>

                                                   <form action="/admin/notice/delete/{{ $notice->NOTICE_ID }}" method="get">
                                                       <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                       <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                   </form>


                                               </div>
                                           </div>
                                       </div>
                                   </div>

                              </td>
                               <td>{{ $notice->NOTICE_TITLE }}</td>
                               <td>{{str_limit($notice->NOTICE_DESC,100)}}</td>
                               <td>{{ $notice->PUBLISH_START_DATE }}</td>
                               <td>{{ $notice->PUBLISH_END_DATE }} </td>
                               <td>{{ $notice->ENTRY_TIMESTAMP }} </td>
                           </tr> 
                        @endforeach               
                       </tbody>
                    </table>

                    </div>

                </div>
            </div>
        </div>

@endsection