@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>মন্তব্য তালিকা </span></div>
@endsection
@section('main-content') 
<div class="container-fluid search">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 0px;">
                    
                        <form action="/admin/comment" method="get">
                        <ul>
                            <li>
                                <select name="active_status" class="form-control">
                                  <option value="1" > কার্যকর </option>
                                  <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif> 
                                    অকার্যকর </option>
                                </select>
                            </li>
                            <li class="refresh"><a href="/admin/comment" type="btn reset" ><i class="fas fa-redo-alt"></i></a></li>
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
  @include('admin.inc.messages')
                      <table id="my_table" class="datatable">
                      <thead>
                            <th> অ্যাকশান</th>
                           <th>মন্তব্যকারীর নাম</th>
                           <th class="text-center">মন্তব্য</th>
                           <th>মন্তব্যকারীর ইমেইল</th>
                           <th>কার্যকারিতা</th>
                           <th>আপলোড তারিখ</th>
                                                 
                       </thead>
                       
                       <tbody>
                        @foreach($comments as $comment)
                           <tr>
                               <td><center>

                                   <a href="#"  class="" data-toggle="modal" data-target=".poem-{{ $comment->COMMENT_ID }}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                   <!-- Large modal -->
                                   <div class="modal fade poem-{{ $comment->COMMENT_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                       <div class="modal-dialog modal-sm" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               </div>
                                               <div class="modal-body text-center">
                                                   <h3>আপনি কি সত্যি এটা ডিলিট করতে চান??</h3>

                                                   <form action="/admin/comment/delete/{{ $comment->COMMENT_ID }}" method="get">
                                                       <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                       <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                   </form>


                                               </div>
                                           </div>
                                       </div>
                                   </div>

                              </td>
                               <td>{{ $comment->commented_by_name }}</td>
                               <td>{{ $comment->COMMENT_DESC }}</td>
                               <td>{{ $comment->commented_by_email }}</td>
                               <td><!-- {{ $comment->ACTIVE_STATUS }}  -->
                                @if($comment->ACTIVE_STATUS == 1)
                                <a href="/admin/comment/active/{{ $comment->COMMENT_ID }}"><p style="color: green ">কার্যকর</p></a>
                                @elseif($comment->ACTIVE_STATUS == 0)
                                <a href="/admin/comment/active/{{ $comment->COMMENT_ID }}">অকার্যকর</a>
                                @endif
                               </td>
                               <td>{{ $comment->ENTRY_TIMESTAMP }} </td>

                           </tr> 
                        @endforeach               
                       </tbody>
                    </table>

                    </div>
                </div>
            </div>
        </div>

@endsection