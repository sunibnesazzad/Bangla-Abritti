@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="{{ asset('/admin/img/back.png') }}" class="img-rounded "></a><span>সাংস্কৃতিক খবরা খবর তালিকা </span></div>
@endsection
@section('main-content') 
<div class="container-fluid search">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 0px;">
                    
                        <form action="/admin/culturalNews/index" method="get">
                        <ul>
                             <li>
                                <input type="text" class="form-control" placeholder="খবরের  নাম" name="news_name" @if(isset($_GET['notice_name']))  value="{{ $_GET['notice_name'] }}"   @endif >
                            </li>
                            <li><input type="date"  class="form-control" name="news_date"></li>
                             
                            <li>
                                <select name="active_status" class="form-control">
                                  <option value="1" > কার্যকর </option>
                                  <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif> 
                                    অকার্যকর </option>
                                </select>
                            </li>
                            <li class="refresh"><a href="/admin/culturalNews/index" type="btn reset" class="form-control " ><i class="fas fa-redo-alt"></i></i></a></li>
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
                           <th>সাংস্কৃতিক খবরের  নাম</th>
                           <th>সাংস্কৃতিক খবরের বিস্তারিত</th>
                           <th>খবরের তারিখ</th>
                                                 
                       </thead>
                       
                       <tbody>
                        @foreach($culturalNews as $culturalNew)
                           <tr>
                               <td><center><a href="/admin/culturalNews/show/{{ $culturalNew->CULTURAL_NEWS_ID }}" data-toggle="tooltip" title="ভিউ"><i class="far fa-list-alt"></i></a> &nbsp
                                   <a href="/admin/culturalNews/edit/{{ $culturalNew->CULTURAL_NEWS_ID }}" data-toggle="tooltip" title="এডিট"><i class="far fa-edit"></i></a>

                                   <a href="#"  class="" data-toggle="modal" data-target=".poem-{{ $culturalNew->CULTURAL_NEWS_ID }}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                   <!-- Large modal -->
                                   <div class="modal fade poem-{{ $culturalNew->CULTURAL_NEWS_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                       <div class="modal-dialog modal-sm" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               </div>
                                               <div class="modal-body text-center">
                                                   <h3>আপনি কি সত্যি এটা ডিলিট করতে চান??</h3>

                                                   <form action="/admin/culturalNews/delete/{{ $culturalNew->CULTURAL_NEWS_ID }}" method="get">
                                                       <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                       <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                   </form>


                                               </div>
                                           </div>
                                       </div>
                                   </div>

                              </td>
                               <td>{{ $culturalNew->NEWS_TITLE }}</td>
                               <td>{{str_limit($culturalNew->NEWS_DESC,100)}}</td>
                               <td>{{ $culturalNew->EVENT_DATE }}</td>
                               
                           </tr> 
                        @endforeach               
                       </tbody>
                    </table>

                    </div>
                </div>
            </div>
        </div>

@endsection