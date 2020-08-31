@extends('admin.layout.app')
@section('page_title')
   <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>প্রকাশকের তালিকা </span></div> 
@endsection
@section('main-content') 
    <div class="container-fluid search">
                    <div class="row">
                        <div class="col-md-12">
                        
                            <form action="/admin/publisher" method="get">
                            <ul>
                                <li>
                                    <input type="text" class="form-control" placeholder="প্রকাশকের নাম" name="publisher_name" @if(isset($_GET['publisher_name']))  value="{{ $_GET['publisher_name'] }}"   @endif>
                                </li>
                                <li>
                                <select name="active_status" class="form-control">
                                  <option value="1" > কার্যকর </option>
                                  <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif> 
                                    অকার্যকর </option>
                                </select>
                                </li>
                                <li class="refresh"><a href="/admin/publisher" type="btn reset" class="form-control " ><i class="fas fa-redo-alt"></i></a></li>
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
                           <th> <center>অ্যাকশান</center></th>
                           <th>প্রকাশকের নাম</th>
                           <th>প্রকাশকের দেশ</th>
                           <th>ঠিকানা</th>
                           <th> অবস্থা </th>
                           
                       </thead>
                       
                    
                       
                       <tbody>
                @foreach($PublisherDetails as $PublisherDetail)
                           <tr>
                              <td><center><a href="/admin/publisher/{{$PublisherDetail->PUBLISHER_ID}}" data-toggle="tooltip" title="ভিউ"><i class="far fa-list-alt"></i></a> &nbsp
                                     <a href="/admin/publisher/{{ $PublisherDetail->PUBLISHER_ID }}/edit" data-toggle="tooltip" title="এডিট"><i class="far fa-edit"></i></a>

                                  <a href="#"  class="" data-toggle="modal" data-target=".poem-{{$PublisherDetail->PUBLISHER_ID}}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                  <!-- Large modal -->
                                  <div class="modal fade poem-{{ $PublisherDetail->PUBLISHER_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                      <div class="modal-dialog modal-sm" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              </div>
                                              <div class="modal-body text-center">
                                                  <h3>আপনি কি সত্যি এটা ডিলিট করতে চান??</h3>

                                                  <form action="/admin/publisher/delete/{{ $PublisherDetail->PUBLISHER_ID }}" method="get">
                                                      <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                      <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                  </form>


                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </td>
                               <td>{{ $PublisherDetail->PUBLISHER_NAME }}</td>
                               <th>{{$PublisherDetail->COUNTRY_NAME}}</th>
                               <th>{{ $PublisherDetail->PUBLISHER_ADDRESS }}</th>
                               <th >@if( $PublisherDetail->ACTIVE_STATUS ==1)কার্যকর  @else অকার্যকর @endif</th>
                           </tr>
                @endforeach       
                       </tbody>
                    </table>
                   
                    </div>
            



                </div>
                
                
            </div>
        </div>
@endsection