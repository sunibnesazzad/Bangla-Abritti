<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bangla Abritty</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap_min.css')}}">       

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="{{asset('assets2/css/all.css')}}">


    <!-- SLick CDN -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/slick_new.css')}}"/>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.css')}}"> -->

    <!-- Slick  -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/slick.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/slick-theme.css')}}">

    <!-- Main style  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/style.css')}}">


    <style type="text/css">
        .slider {
            width: 100%;
        }
        
        .slick-slide {
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .1;
        }

        .slick-active {
            opacity: 1;
        }

        .slick-current {
            opacity: 1;
        }

        .poet_img_con {
            height: 180px;
            width: 180px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
        }

        .poet_img_con img {
            width: 100%;
        }

        
        .nav-pills li{
            margin: 3px;
            height: 40px;
            width: 40px;
        }
        

      #overlay {
        background: #ffffff;
        color: #666666;
        position: fixed;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        float: left;
        text-align: center;
        padding-top: 0%;
        z-index: 999999999999999999999;
    }  

    .btn-default{
        margin-top: 10px;
    }
    .filter_right select:first-child{
            width: 35%;
        }


    </style>

    {{--modal style--}}
    <style>
        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 9999999;
            display: none;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            outline: 0;
        }
    </style>

    <script>

        $('.center').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            settings: "unslick",
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>
    
</head>
