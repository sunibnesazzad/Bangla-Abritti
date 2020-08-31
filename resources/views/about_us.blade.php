@extends('layouts.master')

@section('content')

    <span class="overlay-white"></span>

    <div class="row about_org">
					<span class="over_img">
						   <img src="{{ asset('assets2/img/about-border.jpg') }}">
					   </span>
        <div class="col-md-10 learning_rec text-center">
            <div class="row" style="padding: 0 15%">

                <div class="col-md-12">
                    <div class="abt_con">
                        <h1 class="animated pulse">আমাদের কথা</h1>

                        <img src="{{ asset('assets2/img/border.png') }}" style="padding-bottom: 20px;">
                        <p style="text-align: justify;">
                            ছোট ছোট স্বপ্ন। আর স্বপ্ন দেখতে দেখতে উৎপত্তি হয় ভাবনার।
                            সেই ভাবনা এক সময় রুপ নেয় বাস্তবতায়।
                            একুশ শতকের গতিময় পৃথিবীতে প্রায় প্রতিটি মানুষ আজ বিত্ত
                            আর প্রবৃত্তির টানে ছুটে চলছে, কারো দিকে কারো ভালোবাসার চোখ
                            মেলে তাকাবার সময় নেই। এই মানুষেরাই ক্লান্ত হয়ে ফিরে
                            বলে, অর্থ নয়, কীর্তি নয়, স্বচ্ছলতা নয়, আরো এক বিপন্ন বিষ্ময়
                            আমাদের অন্তর্গত রক্তের ভেতরে খেলা করে, আমাদের ক্লান্ত করে ।
                            ভাবছিলাম বাংলা কবিতার এ  আবৃত্তিকে কিভাবে মানুষের একান্ত কাছে পৌছে
                            দেয়া যায়। বাংলা কবিতা মানুষের মনকে প্রশান্তি দেয়, দেশপ্রেম জাগ্রত
                            করে, ভালবাসা-মমত্ববোধ, সৃষ্টি করে। আর এ ভাবনা থেকে আমাদের
                            এই আয়োজন - বাংলা কবিতার আবৃত্তিকে ইথারে ছড়িয়ে দেয়া।
                        </p>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <p>
                                        বাংলা কবিতার আবৃত্তি শুনুন<br>
                                        মনকে প্রশান্তিতে ভরিয়ে দিন,<br>
                                        জাগ্রত হোক ভালবাসা, মমত্ববোধ, দেশপ্রেম।<br>
                                        ভিজিট করুন  www.banglaabritti.com
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="tetx-center" style="padding: 30px 0px">
                                    <img src="{{ asset('assets2/img/20180922_191302.jpg') }}" style="width: 20%">
                                </div>

                                <div class="">

                                    <h2>কামাল মিনা</h2><p style="text-align: center;">ওয়েবসাইট প্রতিষ্ঠাতা এবং<br>পরিচালক </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 text-right">
            <img src="{{ asset('assets2/img/add-horizontal.jpg') }}" style="margin: 10px 0px; width: 100%">
            <img src="{{asset('assets2/img/add-horizontal.jpg') }}" style="margin-bottom: 10px; width: 100%">
        </div>
    </div>

    <style>
        .over_img img{
            height: 100%;
        }
        .about_org{
            background-image: url(assets2/img/about-border2.jpg);
            background-repeat: no-repeat;
            background-position: left;
            background-size: contain;
            position: relative;
            overflow: hidden;
            width: 100%;
        }
        }
        .about_org>.over_img{
            position: absolute;
            top: 0;
            right: 6.7%;
            height: 100%;
            display: block;
            margin-right: 10%;
            z-index: 9;
        }
        @media only screen and (max-width: 768px) {
        .about_org{
            background-image: none;
        }

        .about_org>.over_img{
            display: none;
        }
        }
    </style>

@endsection