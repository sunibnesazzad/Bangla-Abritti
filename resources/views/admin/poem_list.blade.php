@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>কবিতার তালিকা </span></div>
@endsection
@section('main-content') 
<div class="container-fluid search">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 0px;">
                    
                        <form action="/admin/poem" method="get">
                        <ul>
                             <li>
                                <input type="text" class="form-control" placeholder="কবিতার  নাম" name="poem_name" @if(isset($_GET['poem_name']))  value="{{ $_GET['poem_name'] }}"   @endif >
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="কবির  নাম" name="author_name" @if(isset($_GET['author_name']))  value="{{ $_GET['author_name'] }}"   @endif >
                            </li>
                             <li>
                                <input type="text" class="form-control" placeholder="বইয়ের  নাম" name="book_name" @if(isset($_GET['book_name']))  value="{{ $_GET['book_name'] }}"   @endif >
                            </li>
                            {{--<li>
                                <input type="text" class="form-control" placeholder="প্রকাশনার  নাম" name="publisher_name" @if(isset($_GET['publisher_name']))  value="{{ $_GET['publisher_name'] }}"   @endif >
                            </li>--}}
                            <li>
                                <select name="active_status" class="form-control">
                                  <option value="1" > কার্যকর </option>
                                  <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif> 
                                    অকার্যকর </option>
                                </select>
                            </li>
                            <li class="refresh"><a href="/admin/poem" type="btn reset" class="form-control " ><i class="fas fa-redo-alt"></i></a></li>
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
                           <th>কবিতার নাম</th>
                            <th>বইয়ের নাম</th>
                           <th>কবির নাম</th>
                          
                          
                             <th>প্রকাশনার নাম</th>
                           <th>প্রথম প্রকাশনার তারিখ</th>
                        
                          
                       </thead>
                       
                
                       
                       <tbody>
                          
         @foreach($PoemDetails as $PoemDetail)
                           <tr>
                             <td><center><a href="/admin/poem/{{$PoemDetail->POEM_ID}}" data-toggle="tooltip" title="ভিউ"><i class="far fa-list-alt"></i></a> &nbsp
                                   <a href="/admin/poem/{{ $PoemDetail->POEM_ID }}/edit" data-toggle="tooltip" title="এডিট"><i class="far fa-edit"></i></a>

                                 <a href="#"  class="" data-toggle="modal" data-target=".poem-{{ $PoemDetail->POEM_ID }}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                 <!-- Large modal -->
                                 <div class="modal fade poem-{{ $PoemDetail->POEM_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                     <div class="modal-dialog modal-sm" role="document">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                             </div>
                                             <div class="modal-body text-center">
                                                 <h3>আপনি কি সত্যি এটা ডিলিট করতে চান??</h3>

                                                 <form action="/admin/poem/delete/{{ $PoemDetail->POEM_ID }}" method="get">
                                                     <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                     <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                 </form>


                                             </div>
                                         </div>
                                     </div>
                                 </div>

                              </td>
                               <td>{{ $PoemDetail->POEM_NAME}}</td>
                               <td>{{ $PoemDetail->BOOK_NAME}}</td>
                               <td>{{ $PoemDetail->AUTHOR_NAME}}</td>
                               
                               <td>{{ $PoemDetail->PUBLISHER_NAME}} </td>
                               <td>{{ $PoemDetail->FIRST_PUBLICATION_DATE}}</td>
                               </td>
                           </tr>
         @endforeach             
                       </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>

@endsection