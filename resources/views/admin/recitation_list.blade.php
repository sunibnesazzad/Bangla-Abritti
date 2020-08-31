@extends('admin.layout.app')
@section('page_title')
    <div class="back_btn"> <a href="{{ url()->previous() }}" ><img src="/admin/img/back.png" class="img-rounded "></a><span>আবৃত্তির তালিকা </span></div> 
@endsection
@section('main-content') 
<div class="container-fluid search">
                <div class="row">
                    <div class="col-md-12">
                    
                        <form action="/admin/recitation" method="get">
                        <ul>
                             <li>
                                <input type="text" class="form-control" placeholder="কবিতার  নাম" name="poem_name" @if(isset($_GET['poem_name']))  value="{{ $_GET['poem_name'] }}"   @endif >
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="কবির  নাম" name="author_name" @if(isset($_GET['author_name']))  value="{{ $_GET['author_name'] }}"   @endif >
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="আবৃত্তিকারের   নাম" name="reciter_name" @if(isset($_GET['reciter_name']))  value="{{ $_GET['reciter_name'] }}"   @endif >
                            </li>
                            <li>
                                <select name="active_status" class="form-control">
                                  <option value="1" > কার্যকর </option>
                                  <option value="0"  @if(isset($_GET['active_status']))  @if($_GET['active_status'] == 0) selected @endif  @endif> 
                                    অকার্যকর </option>
                                </select>
                            </li>
                            <li class="refresh"><a href="/admin/recitation" type="btn reset" class="form-control " ><i class="fas fa-redo-alt"></i></a></li>
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
                           <th>কবির নাম</th>
                           <th>আবৃত্তিকারের নাম</th>
                           <th>অডিও লিঙ্ক</th>
                           <th>ভিডিও লিঙ্ক</th>
                       </thead>
        
                       <tbody>
          @foreach($RecitationDetails as $RecitationDetail)
                           <tr>
                               <td><center>
                                       <a href="#"  class="" data-toggle="modal" data-target=".poem-{{ $RecitationDetail->RECITATION_ID }}" data-toggle="tooltip" title="ডিলিট"><i class="far fa-trash-alt"></i></a></center>
                                   <!-- Large modal -->
                                   <div class="modal fade poem-{{ $RecitationDetail->RECITATION_ID }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                       <div class="modal-dialog modal-sm" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header">
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                               </div>
                                               <div class="modal-body text-center">
                                                   <h3>আপনি কি সত্যি এটা ডিলিট করতে চান??</h3>

                                                   <form action="/admin/recitation/delete/{{ $RecitationDetail->RECITATION_ID }}" method="get">
                                                       <input type="submit" class="btn btn-danger" name="submit" value="Confirm" />
                                                       <input type="button" class="btn btn-primary " data-dismiss="modal" aria-label="Close" value="Cancel" />
                                                   </form>


                                               </div>
                                           </div>
                                       </div>
                                   </div>

                               </td>

                               <td><a href="/admin/recitation/{{ $RecitationDetail->RECITATION_ID }}">{{  $RecitationDetail->POEM_NAME }}</a></td>
                               <td>{{  $RecitationDetail->AUTHOR_NAME }}</td>
                               <td>{{  $RecitationDetail->RECITER_NAME }}</td>


                               <td>
                                @if($RecitationDetail->AUDIO_FLAG == 1)
                                   <a href="/admin/recitation/{{ $RecitationDetail->RECITATION_ID }}">লিঙ্কে ক্লিক করুন </a>
                                @else
                                    কোন অডিও ফাইল নেই
                                @endif
                               </td>
                               <td>
                                  @if($RecitationDetail->VIDEO_FLAG == 1)
                                   <a href="/admin/recitation/{{ $RecitationDetail->RECITATION_ID }}">লিঙ্কে ক্লিক করুন </a>
                                   @else
                                    কোন ভিডিও ফাইল নেই
                                   @endif
                               </td>
                           </tr>
          @endforeach        
                       </tbody>
                    </table>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    </div>
            



                </div>
                
              {{ $RecitationDetails->links() }}  
            </div>
        </div>
@endsection