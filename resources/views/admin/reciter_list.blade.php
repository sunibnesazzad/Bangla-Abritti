@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>আবৃত্তিকারের তালিকা </span></div> 
@endsection
@section('main-content') 
<div class="container-fluid search">
                <div class="row">
                    <div class="col-md-12">
                    
                        <form action="/admin/reciter" method="get">
                        <ul>
                            <li>
                                <input type="text" class="form-control" placeholder="আবৃত্তিকারের নাম" name="reciter_name" @if(isset($_GET['reciter_name']))  value="{{ $_GET['reciter_name'] }}"   @endif>
                            </li>
                            <li>
                                <select name="active_status" class="form-control">
                                  <option value="1" > কার্যকর </option>
                                  <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif> 
                                    অকার্যকর </option>
                                </select>
                            </li>
                           <li class="refresh"><a href="/admin/reciter" type="btn reset" class="form-control " ><i class="fas fa-redo-alt"></i></a></li>
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
                           <th width="15%">আবৃত্তিকারের নাম</th>
                           <th width="5%">জাতীয়তা</th>
                           <th width="5%">জন্ম তারিখ</th>
                           <th width="40%">আবৃত্তিকারের পরিচিতি</th>
                           <th width="5%">বর্তমান ঠিকানা</th>
                          
                           {{--<th width="5%">বর্তমান শহর</th>
                           <th width="5%">বর্তমান জেলা</th>--}}
                            <th width="5%">স্থায়ী ঠিকানা</th>
                           {{--<th width="5%">স্থায়ী শহর</th>
                           <th width="5%">স্থায়ী জেলা</th>--}}
                           <th width="5%">আবৃত্তিকারের ইমেইল</th>
                             <th width="5%">সংক্ষিপ্ত কোড</th>
                           <th width="5%">আবৃত্তিকারের অবস্থা</th>
                       </thead>

<?php
    
    // code for shortening the big content fetched from database

     function textShorten($text, $limit = 200){
            $text = $text." ";
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, " "));
            $text = $text;
            return $text;

    }

?>                       
                       <tbody id="author_list">
                      @foreach($AuthorDetails as $AuthorDetail)
                           <tr>
                               <td><center><a href="/admin/reciter/{{$AuthorDetail->RECITER_ID}}" data-toggle="tooltip" title="ভিউ"><i class="far fa-list-alt"></i></a> &nbsp
                                   <a href="/admin/reciter/{{ $AuthorDetail->RECITER_ID }}/edit" data-toggle="tooltip" title="এডিট"><i class="far fa-edit"></i></a>

                                   <a href="#"  class="" data-toggle="modal" data-target=".poem-{{$AuthorDetail->RECITER_ID}}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                   <!-- Large modal -->
                                   <div class="modal fade poem-{{ $AuthorDetail->RECITER_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                       <div class="modal-dialog modal-sm" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               </div>
                                               <div class="modal-body text-center">
                                                   <h2>আপনি কি সত্যি এটা ডিলিট করতে চান??</h2>

                                                   <form action="/admin/reciter/delete/{{ $AuthorDetail->RECITER_ID }}" method="get">
                                                       <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                       <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                   </form>


                                               </div>
                                           </div>
                                       </div>
                                   </div>

                              </td>
                               <th width="15%">{{ $AuthorDetail->RECITER_NAME }}</th>
               
                               <th width="5%">{{ $AuthorDetail->COUNTRY_NAME }}</th>
                               <th width="5%">{{ $AuthorDetail->RECITER_DOB }}</th>
                               <th width="40%"> {{ textShorten($AuthorDetail->RECITER_BIBLIOGRAPHY)}}  @if(strlen($AuthorDetail->RECITER_BIBLIOGRAPHY) > 200) ..... @endif</th>

                               <th width="5%">{{ $AuthorDetail->PRESENT_ADDRESS }}</th>
                              
                               {{--<th width="5%">{{ $AuthorDetail->PRESENT_CITY }}</th>
                               <th width="5%">{{ $AuthorDetail->PRESENT_DISTRICT }}</th>--}}
                               <th width="5%">{{ $AuthorDetail->PERMANENT_ADDRESS }}</th>
                               {{--<th width="5%">{{ $AuthorDetail->PERMANENT_CITY }}</th>
                               <th width="5%">{{ $AuthorDetail->PERMANENT_DISTRICT }}</th>--}}
                               <th width="5%">{{ $AuthorDetail->RECITER_EMAIL }}</th>
                               <th width="5%">{{ $AuthorDetail->SHORT_CODE }}</th>
                               <th width="5%">@if( $AuthorDetail->ACTIVE_STATUS ==1)কার্যকর  @else অকার্যকর @endif</th>
                           </tr>
                      @endforeach    
                       </tbody>
                    </table>
                   

                    </div>
            
                    <div class="row" >
                       <center class= "author">{{ $AuthorDetails->links() }}</center>
                    </div>


                </div>
                
                
            </div>
        </div>



@endsection

