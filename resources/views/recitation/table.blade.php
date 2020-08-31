<thead>
<tr>
    <th>আবৃত্তিকার</th>
    <th>কবিতা</th>
    <th>কবি</th>
    <th class="text-center">টাইপ</th>
</tr>
</thead>
<tbody >
@foreach($RecitationDetails as $RecitationDetail)
    <tr >
        <td>{{  $RecitationDetail->RECITER_NAME }}</td>
        <td>{{  $RecitationDetail->POEM_NAME }}</td>
        <td>{{  $RecitationDetail->AUTHOR_NAME }}</td>
        <td>
            <div class="row">
                @if($audio)
                    <div class="col-sm-4 text-center">
                        @if(!$RecitationDetail->AUDIO_FLAG)
                            <button href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন  অডিও নেই' disabled>  অডিও</button>
                        @else
                            {{--<button href="/recitation/audio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm">  অডিও</button>--}}

                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".audio-{{$RecitationDetail->RECITATION_ID}}"> অডিও </button>
                            <!-- Large modal -->
                            <div class="modal fade audio-{{$RecitationDetail->RECITATION_ID}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>

                                        <div>
                                            <div class="panel">
                                                @if($RecitationDetail->IMAGE_FILE_PATH !=NULL )
                                                    <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$RecitationDetail->IMAGE_FILE_PATH)}}" class="img-responsive center-block" alt="" style="width: 20%">
                                                @else
                                                    <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/avatar.jpg')}}" class="img-responsive center-block" alt="" style="width: 20%">
                                                @endif
                                                <h3 style="padding: 10px">{{  $RecitationDetail->RECITER_NAME }}</h3>
                                            </div>
                                            <div class="panel panel-danger" style="background: red; padding: 15px">
                                                <audio controls>
                                                    <source src="{{$RecitationDetail->AUDIO_FILE_PATH }}" type="audio/ogg">
                                                    <source src="{{$RecitationDetail->AUDIO_FILE_PATH }}" type="audio/wav">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endif
                    </div>
                @else

                    <div class="col-sm-4 text-center">
                        <button href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন অডিও নেই' disabled>  অডিও</button>
                    </div>

                @endif

                @if($vedio)
                    <div class="col-sm-4 text-center">
                        @if(!$RecitationDetail->VIDEO_FLAG)
                            <button href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</button>
                        @else
                            {{--<button href="/recitation/vedio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm">  ভিডিও</button>--}}

                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".vedio-{{$RecitationDetail->RECITATION_ID}}"> ভিডিও </button>
                            <!-- Large modal -->
                            <div class="modal fade vedio-{{$RecitationDetail->RECITATION_ID}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>

                                        <div class="panel panel-danger" style="background: red; padding: 15px">
                                            {!! $RecitationDetail->VIDEO_LINK !!}
                                        </div>

                                    </div>
                                </div>
                            </div>

                        @endif
                    </div>
                @else

                    <div class="col-sm-4 text-center">
                        <button href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</button>
                    </div>

                @endif
                <div class="col-sm-4 text-center">
                    @if($RecitationDetail->POEM_TEXT ==NULL)

                        <button  class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন পাণ্ডুলিপি নেই' disabled>পাণ্ডুলিপি  </button>

                    @else

                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".poem-{{$RecitationDetail->RECITATION_ID}}"> পাণ্ডুলিপি </button>
                        <!-- Large modal -->
                        <div class="modal fade poem-{{$RecitationDetail->RECITATION_ID}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <h2>{{ $RecitationDetail->POEM_NAME }}</h2>

                                        <span style="padding-bottom: 20px; display: block; color: red">- {{ $RecitationDetail->AUTHOR_NAME }}</span>
                                        <pre>
{!!   $RecitationDetail->POEM_TEXT !!}
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </td>
       {{-- <td>
                <div class="row">
                  @if($audio)
                    <div class="col-sm-4 text-center">
                        @if($RecitationDetail->AUDIO_FLAG == NULL)
                       <a  class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন  অডিও নেই' disabled>  অডিও</a>
                        @else
                        <a href="/recitation/audio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary btn-sm">  অডিও</a>

                        @endif
                    </div>
                    @else

                    <div class="col-sm-4 text-center">
                        <a  class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title='কোন অডিও নেই' disabled>  অডিও</a>
                    </div>

                    @endif

                    @if($vedio)
                    <div class="col-sm-4 text-center">
                        @if($RecitationDetail->VIDEO_FLAG == NULL)
                        <a  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</a>
                        @else
                        <a href="/recitation/vedio/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-danger btn-sm">  ভিডিও</a>

                        @endif
                    </div>
                    @else

                    <div class="col-sm-4 text-center">
                         <a  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title='কোন ভিডিও নেই' disabled>  ভিডিও</a>
                    </div>

                    @endif
                    <div class="col-sm-4 text-center">
                        @if($RecitationDetail->POEM_TEXT ==NULL)

                        <a  class="btn btn-primary" data-toggle="tooltip" data-placement="top" title='কোন পাণ্ডুলিপি নেই' disabled>পাণ্ডুলিপি  </a>

                        @else

                        <a href="/recitation/poem/{{  $RecitationDetail->RECITATION_ID }}" class="btn btn-primary" >পাণ্ডুলিপি  </a>
                    @endif
                    </div>
                </div>
            </td>--}}
    </tr>
@endforeach
</tbody>


<style>
    @media only screen and (max-width: 768px) {
        .filter_right select{
            width: 100%;
        }
        .filter_right input{
            width: 100%;
        }
    }
</style>
{{--//Poem modal Style--}}
<style>
    button.close {
        -webkit-appearance: none;
        padding: 0px 15px 0 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
    }

    .close {
        float: right;
        font-size: 50px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2;
    }
</style>
{{--//Poem modal Style end--}}