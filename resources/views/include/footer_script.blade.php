   
    <!-- jQuery Plugin -->
    <script src="{{asset('assets2/js/jquery-1.9.1.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>

    <!-- Bootstrap CDN -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets2/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets2/js/bootstrap-collapse.js"></script> -->

     <!-- Slick -->
    <script type="text/javascript" src="{{asset('assets2/js/slick_min.js')}}"></script>

    <script src="{{asset('assets2/js/myScript.js')}}"></script>
   

    <!-- Custom js file for recitation button click -->
    
       @include('recitation.script')

    <!-- Custom Script -->

    <script type="text/javascript">


        $(document).on('ready', function() {

            $(".lazy").slick({
                lazyLoad: 'ondemand', // ondemand progressive anticipated
                infinite: true
              });


            $(".center").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay : false
            });

            /*recitation page Loader*/
            jQuery(window).load(function(){
                jQuery('#overlay').fadeOut();
                });
                    $('#demoDefaultSelection').ddslick({
                data: ddData,
                defaultSelectedIndex:2
            });

            $('.center').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
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

        });

    </script>




