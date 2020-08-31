@extends('layouts.master')

@section('content')

<style>
    .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9{
        padding : 0;
    }
    .btn-default {
        height: 30px;
        width: 30px;
    }
    .slick-next{
        right: 0;
    }

    .modal-content{
        width: 70%!important;
        margin: 0 auto;
    }
</style>
    <div class="container-fluid">
        <div class="row slide">

            <div class="col-md-10" style="    padding-left: 30px;
    padding-top: 50px;">





                <section class="center slider" style="box-sizing: border-box;width: 95%;">

                    @foreach ($reciterpics as $reciterpic)
                        <div>
                            <div class="poet_img_con">
                                @if($reciterpic->IMAGE_FILE_PATH)
                                    <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$reciterpic->IMAGE_FILE_PATH)}}" class="img-responsive" alt="">
                                @else
                                    <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$reciterpic->IMAGE_FILE_PATH)}}" class="img-responsive" alt="">
                                @endif
                                <a href="#" class="poet_name_slide">{{ $reciterpic->RECITER_NAME }}</a>
                            </div>

                        </div>
                    @endforeach

                </section>

            </div>

            <div class="col-md-2 add">
                <img src="{{ asset('assets2/img/add-horizontal.jpg') }}">
            </div>

        </div>

    </div>





    <div class="container-fluid recitation_sec">

        <div class="row">
            <div class="col-md-10">


                <div class="row">
                    <div class="col-md-12 alph_nav">

                        <button class="btn btn-default btn-submit1" name="name1" value='অ'>অ</button>
                        <button class="btn btn-default btn-submit2" name="name2" value='আ'>আ</button>
                        <button class="btn btn-default btn-submit3" name="name3" value='ই'>ই</button>
                        <button class="btn btn-default btn-submit4" name="name4" value='ঈ'>ঈ</button>
                        <button class="btn btn-default btn-submit5" name="name5" value='উ'>উ</button>
                        <button class="btn btn-default btn-submit6" name="name6" value='ঊ'>ঊ</button>
                        <button class="btn btn-default btn-submit7" name="name7" value='ঋ'>ঋ</button>
                        <button class="btn btn-default btn-submit8" name="name8" value='এ'>এ</button>
                        <button class="btn btn-default btn-submit9" name="name9" value='ঐ'>ঐ</button>
                        <button class="btn btn-default btn-submit10" name="name10" value='ও'>ও</button>
                        <button class="btn btn-default btn-submit11" name="name11" value='ঔ'>ঔ</button>

                        <button class="btn btn-default btn-submit12" name="name12" value='ক'>ক</button>
                        <button class="btn btn-default btn-submit13" name="name13" value='খ'>খ</button>
                        <button class="btn btn-default btn-submit14" name="name14" value='গ'>গ</button>
                        <button class="btn btn-default btn-submit15" name="name15" value='ঘ'>ঘ</button>
                        <button class="btn btn-default btn-submit16" name="name16" value='ঙ'>ঙ</button>
                        <button class="btn btn-default btn-submit17" name="name17" value='চ'>চ</button>
                        <button class="btn btn-default btn-submit18" name="name18" value='ছ'>ছ</button>
                        <button class="btn btn-default btn-submit19" name="name19" value='জ'>জ</button>
                        <button class="btn btn-default btn-submit20" name="name20" value='ঝ'>ঝ</button>
                        <button class="btn btn-default btn-submit21" name="name21" value='ঞ'>ঞ</button>

                        <button class="btn btn-default btn-submit22" name="name22" value='ট'>ট</button>
                        <button class="btn btn-default btn-submit23" name="name23" value='ঠ'>ঠ</button>
                        <button class="btn btn-default btn-submit24" name="name24" value='ড'>ড</button>
                        <button class="btn btn-default btn-submit25" name="name25" value='ঢ'>ঢ</button>
                        <button class="btn btn-default btn-submit26" name="name26" value='ন'>ন</button>
                        <button class="btn btn-default btn-submit27" name="name27" value='প'>প</button>
                        <button class="btn btn-default btn-submit28" name="name28" value='ফ'>ফ</button>
                        <button class="btn btn-default btn-submit29" name="name29" value='ব'>ব</button>
                        <button class="btn btn-default btn-submit30" name="name30" value='ভ'>ভ</button>
                        <button class="btn btn-default btn-submit31" name="name31" value='ম'>ম</button>

                        <button class="btn btn-default btn-submit32" name="name32" value='য'>য</button>
                        <button class="btn btn-default btn-submit33" name="name33" value='র'>র</button>
                        <button class="btn btn-default btn-submit34" name="name34" value='ল'>ল</button>
                        <button class="btn btn-default btn-submit35" name="name35" value='শ'>শ</button>
                        <button class="btn btn-default btn-submit36" name="name36" value='ষ'>ষ</button>
                        <button class="btn btn-default btn-submit37" name="name37" value='স'>স</button>
                        <button class="btn btn-default btn-submit38" name="name38" value='হ'>হ</button>
                        <button class="btn btn-default btn-submit39" name="name39" value='ড়'>ড়</button>
                        <button class="btn btn-default btn-submit40" name="name40" value='ঢ়'>ঢ়</button>
                        <button class="btn btn-default btn-submit41" name="name41" value='য়'>য়</button>



                    </div>
                </div>
                <div class="row filter">
                    <div class="col-md-12  panel panel-default  text-center">


                        <form action="/recitation" method="get" id="myForm">

                            <div class="col-md-4">

                            </div>

                            <div class="col-md-5" style="padding: 0px">

                            </div>
                            <div class="col-md-3" style="padding: 0px">
                                <div class="form-group" style=" padding: 5px; margin-bottom: 0px; float: left">

                                    <label>অডিও</label>
                                    <input type="checkbox" style="margin-left: 10px;"   name="audio_flag"  value="1"  >
                                </div>
                                <div class="form-group" style=" padding: 5px; margin-bottom: 0px; float: left;">
                                    <label>ভিডিও</label>
                                    <input type="checkbox" style="margin-left: 10px;"   name="vedio_flag"  value="1"  >
                                </div>
                                <div class="form-group" style=" padding: 5px; margin-bottom: 0px; float: left;">
                                    <label> সকল  </label>
                                    <input type="checkbox" style="margin-left: 10px;"   name="poem_flag"  value="1"  >
                                </div>
                            </div>
                            <!-- </form> -->


                    </div>
                    <div class="col-md-12 filter_right">

                        <select name="reciter_name" >
                            <option value="">আবৃত্তিকারের   নাম</option>
                            @foreach($reciters as $reciter)
                                <option value="{{$reciter->RECITER_NAME}}">{{$reciter->RECITER_NAME}}</option>
                            @endforeach
                        </select>
                        <select name="author_name" >
                            <option value="">কবির  নাম</option>
                            @foreach($authors as $author)
                                <option value="{{$author->AUTHOR_NAME}}">{{$author->AUTHOR_NAME}}</option>
                            @endforeach
                        </select>

                        <input type="text" placeholder="কবিতার নাম" name="poem_name"  style="">
                    <!-- <a href="{!! route('recitation.reload') !!}"><i class="glyphicon glyphicon-repeat"></i></a> -->
                        <button  type="reset" class="btn btn-reset"  value="Reset"><i class="glyphicon glyphicon-repeat"></i></button>
                        <button type="submit" class="btn btn-search"><i class="glyphicon glyphicon-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <table id="example" name="table1" class="table table-striped table-bordered table-responsive" style="">
                            <thead>
                            <tr>
                                <th>আবৃত্তিকার</th>
                                <th>কবিতা</th>
                                <th>কবি</th>
                                <th class="text-center">টাইপ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($RecitationDetails as $RecitationDetail)
                                <tr>
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
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    @if($RecitationDetail->IMAGE_FILE_PATH !=NULL )
                                                                                        <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/'.$RecitationDetail->IMAGE_FILE_PATH)}}" class="img-responsive center-block" alt="" style="width: 70%; padding: 10px">
                                                                                    @else
                                                                                        <img src="{{asset('bangla_abritti/uploaded_img/reciter_images/avatar.jpg')}}" class="img-responsive center-block" alt="" style="width: 70%; padding: 10px;">
                                                                                    @endif
                                                                                </div>
                                                                                <div class="col-md-6 text-left">
                                                                                    {{--<h3 style="padding: 10px">{{  $RecitationDetail->RECITER_NAME }}</h3>--}}
                                                                                    <p>কবিতার নামঃ {{  $RecitationDetail->POEM_NAME }}</p>
                                                                                    <p>কবির নামঃ {{  $RecitationDetail->AUTHOR_NAME }}</p>
                                                                                    <p>আবৃত্তিকার নামঃ {{  $RecitationDetail->RECITER_NAME }}</p>
                                                                                </div>
                                                                            </div>






                                                                        </div>
                                                                        <div class="panel panel-danger" style="background: #bbb; padding: 15px">
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

                                                                    <div class="panel panel-danger" style=" padding: 15px">
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                        <div class="row">
                            <div class="text-center">
                                {{ $RecitationDetails->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2 add"><img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin-top: 10px"></div>


        </div>
    </div>
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


    @include('recitation.script')


@endsection


