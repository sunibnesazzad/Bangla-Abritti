<!doctype html>
<html lang="bn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bangla Abritty</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>

<body>

    <header>
      <div class="container-fluid">
        <div class="row">
                <div class="col-sm-2 brand">
                    <img src="assets/img/logo2.png" alt="bangla abritty">
                </div>
                <div class="col-sm-10 addvertisement_top">
                    <img src="assets/img/add.png" alt="addvertisement">
                </div>
            </div>
      </div>
            
    </header>

    <!--  =========header ends here==============  -->

    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" role="navigation" style=" position: relative;z-index: 999999">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">হোম</a></li>
                    
                    <li><a href="/recitation">আবৃত্তি</a></li>
                    
                    <li><a href="under_constraction.html">পান্ডূলিপি</a></li>
                    
                    <li class="dropdown">
                        <a href="under_constraction.html" class="dropdown-toggle" data-toggle="dropdown">এসো শিখি<b class="caret"></b></a>
                        <ul class="dropdown">
                            <li><a href="under_constraction.html">আবৃত্তি শিখি</a></li>
                            <li><a href="under_constraction.html">আবৃত্তির বই</a></li>
                            <li><a href="under_constraction.html">সংবাদ পাঠের খুটিনাটি</a></li>
                            <li><a href="under_constraction.html">উপস্থাপনার কলাকৌশল</a></li>
                        </ul>
                    </li>
                    <li><a href="under_constraction.html">সাংস্কৃতিক খবর</a></li>
                    <li><a href="under_constraction.html">সংগঠনের তথ্য</a></li>
                    <li class="active"><a href="/notice">নোটিশ</a></li>
                    <li><a href="/comment">মন্তব্য</a></li>
                    <li><a href="under_constraction.html">আমরা</a></li>
                    <li><a href="under_constraction.html">যোগাযোগ</a></li>
                    
                </ul>
            </div>
    </div>
    </nav>
    
<!--  navigation end here  -->


  
  <div class="row">
    
    <div class="col-md-10">
      <div class="panel panel-danger" style="padding: 10px; margin: 10px">
         <div class="row">
                <div class="col-md-6">
                    <h3 style="margin-bottom: 0px">নোটিশ :</h3>
                </div>
                <div class="col-md-6 text-right">
                    <!-- <form>
                        <input type="date" class="" style="padding: 4px; border-radius: 5px; border: 1px solid #aaa">
                        <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-search"></i></button>
                    </form> -->
                </div>
          </div>
      </div>
        
      <div class="panel">
             <div class="row">
                <div class="col-sm-12 col-md-6">
             @foreach($notices as $notice)
                    <div class="panel panel-danger all_notice" style="padding: 10px; margin: 10px">
                        <h3> {{$notice->NOTICE_TITLE}}  </h3>
                        <span class="notice_pub_date"><i class="glyphicon glyphicon-time"></i> {{$notice->PUBLISH_START_DATE }} </span>
                        <hr>
                        <p> {{$notice->NOTICE_DESC}}</p>
                    </div> 
              @endforeach
                </div>
             </div> 
      </div>
        

    </div>

    <div class="col-md-2 add">
      <img src="assets/img/add3.png"style=" width: 100%">


    </div>

  </div>
  
  
  
    
    
  <!-- Adding footer -->

        @include('include.footer')
 
  <!-- End footer -->

    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="assets/js/myScript.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>
    
</body>

</html>