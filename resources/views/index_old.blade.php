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
    <link rel="stylesheet" type="text/css" href="assets2/css/slick.css">
    <link rel="stylesheet" href="assets2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/style.css">
    <style type="text/css">
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
    </style>
</head>

<body>

  <div id="overlay">
    <img src="assets2/img/ajax-loader.gif" alt="Loading" /><br/>
    Loading...
</div>

        @include('include.navbar')


  
  <div class="row slide">
    
    <div class="col-md-10">
      
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
   <div class="item active">
      <div class="container-fluid main_slide">
         <div class="slide_img_bg">
             <img src="assets2/img/sunset.jpg">
         </div>
         
          <div class="row slide_content">
              
              
              
        <div class="col-md-4 slide_poem">
                 <div class="poem_holder">
                  <p>
                       আমার মায়ের সোনার নোলক<br> হারিয়ে গেল শেষে,<br>
হেথায় খুঁজি হোথায় খুঁজি<br> সারা বাংলাদেশে। 
                   </p>
                   <span class="poet_name">
                       -আল-মাহমুদ
                   </span>
                 </div>
                  
              </div>
              <div class="col-md-4"></div>
        <div class="col-md-4"></div>
          </div>
      </div>

    </div>

    <div class="item">
      <div class="container-fluid main_slide">
         <div class="slide_img_bg">
             <img src="assets2/img/martyres.jpg">
         </div>
         
          <div class="row slide_content">
              
              <div class="col-md-4 slide_poem">
                 <div class="poem_holder">
                  <p style="color: black">
তোমাকে পাওয়ার জন্যে, হে স্বাধীনতা তোমাকে পাওয়ার জন্যে,<br>  আর কতবার ভাসতে হবে রক্তগঙ্গায়? <br>
আর কতবার দেখতে হবে খান্ডবদাহন?
                   </p>
                   <span class="poet_name" style="color: #f60000">
                      -শামসুর রাহমান
                   </span>
                 </div>
                  
              </div>
              <div class="col-md-4"></div>
        <div class="col-md-4"></div>
              
          </div>
      </div>
    </div>

    <div class="item">
      <div class="container-fluid main_slide">
         <div class="slide_img_bg">
             <img src="assets2/img/village.jpg">
         </div>
         
          <div class="row slide_content">
              
              <div class="col-md-4 slide_poem">
                 <div class="poem_holder">
                  <p style="color: #fff">
                        সাম্যের গান গাই - আমার চক্ষে পুরুষ-রমণী কোনো ভেদাভেদ নাই।
বিশ্বে যা-কিছু মহান সৃষ্টি চির-কল্যাণকর, অর্ধেক তার করিয়াছে নারী অর্ধেক তার নর।
                   </p>
                   <span class="poet_name" style="color: #f60000">
                       -কাজী নজরুল ইসলাম
                   </span>
                 </div>
                  
              </div>
              <div class="col-md-4"></div>
        <div class="col-md-4"></div>
              
          </div>
      </div>
    </div>
    <div class="item">
      
      <div class="container-fluid main_slide">

         <div class="slide_img_bg">
             <img src="assets2/img/shahid_minar_1.jpg">
         </div>
         
          <div class="row slide_content">
              
              <div class="col-md-6 slide_poem">
                 <div class="poem_holder">
                  <p style="color: black">
                       এখানে যারা প্রাণ দিয়েছে রমনার উর্দ্ধমূখী কৃষ্ণচূড়ার তলায়<br> যেখানে আগুনের ফুলকির মত এখানে ওখানে
জ্বলছে অসংখ্য রক্তের ছাপ, <br>সেখানে আমি কাঁদতে আসিনি। আজ আমি শোকে বিহবল নই, <br> আজ আমি ক্রোধে উন্মত্ত নই, আজ আমি প্রতিজ্ঞায় অবিচল।
                   </p>
                   <span class="poet_name" style="color: #f60000">
                       -মাহবুবুল আলম চৌধুরী
                   </span>
                 </div>
                  
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
          </div>
      </div>
    </div>
    <div class="item">
      <div class="container-fluid main_slide">
         <div class="slide_img_bg">
             <img src="assets2/img/egf.jpg">
         </div>
         
          <div class="row slide_content">
              
              <div class="col-md-4 slide_poem">
                 <div class="poem_holder">
                  <p>
                       তুমি রবে নীরবে হৃদয়ে মম<br>
                        নিবিড় নিভৃত পূর্ণিমানিশীথিনী-সম॥<br>
                                  মম জীবন যৌবন    মম অখিল ভুবন<br>
                             তুমি    ভরিবে গৌরবে নিশীথিনী-সম॥<br>
                   </p>
                   <span class="poet_name">
                       রবীন্দ্রনাথ ঠাকুর
                   </span>
                 </div>
                  
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-4"></div>
          </div>
      </div>
    </div>

    <div class="item">
      <div class="container-fluid main_slide">
         <div class="slide_img_bg">
             <img src="assets2/img/Taj_Mahal_in_March_2004.JPG">
         </div>
         
          <div class="row slide_content">
              
              <div class="col-md-4 slide_poem">
                 <div class="poem_holder">
                  <p style="color: #fff">
                       তুমি রবে নীরবে হৃদয়ে মম<br>
                        নিবিড় নিভৃত পূর্ণিমানিশীথিনী-সম॥<br>
                                  মম জীবন যৌবন    মম অখিল ভুবন<br>
                             তুমি    ভরিবে গৌরবে নিশীথিনী-সম॥<br>
                   </p>
                   <span class="poet_name" style="color: #ff0000">
                       রবীন্দ্রনাথ ঠাকুর
                   </span>
                 </div>
                  
              </div>
              <div class="col-md-4"></div>
              <div class="col-md-4"></div>
          </div>
      </div>
    </div>

    <div class="item">
      <div class="container-fluid main_slide">
         <div class="slide_img_bg">
             <img src="assets2/img/bg110.jpg">
         </div>
         
          <div class="row slide_content">
              <div class="col-md-4"></div>
        <div class="col-md-4"></div>
              <div class="col-md-4 slide_poem">
                 <div class="poem_holder">
                  <p>
                       তুমি রবে নীরবে হৃদয়ে মম<br>
                        নিবিড় নিভৃত পূর্ণিমানিশীথিনী-সম॥<br>
                                  মম জীবন যৌবন    মম অখিল ভুবন<br>
                             তুমি    ভরিবে গৌরবে নিশীথিনী-সম॥<br>
                   </p>
                   <span class="poet_name">
                       রবীন্দ্রনাথ ঠাকুর
                   </span>
                 </div>
                  
              </div>
              
              
          </div>
      </div>
    </div>

    <div class="item">
      <div class="container-fluid main_slide">
         <div class="slide_img_bg">
             <img src="assets2/img/a_glimpse_of_the_tagores_02.jpg">
         </div>
         
          <div class="row slide_content">
              <div class="col-md-4"></div>
        <div class="col-md-3"></div>
              <div class="col-md-5 slide_poem">
                 <div class="poem_holder">
                   <p style="color: #000">
                      এ জগতে হায়, সেই বেশী চায় <br> আছে যার ভূরি ভূরি। <br>
রাজার হস্ত করে সমস্ত <br>কাঙালের ধন চুরি।
                   </p>
                   <span class="poet_name" style="color: #fff">
                       -রবীন্দ্রনাথ ঠাকুর
                   </span>
                 </div>
                 
              </div>
              
              
          </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>

    <div class="col-md-2 add">
      <img src="assets2/img/add-horizontal.jpg">


    </div>

  </div>
  
  
  <div class="row about_hm">
    <span class="over_img">
           <img src="assets2/img/about-border.jpg">
       </span>
    <div class="col-md-10">
      
        <div class="row">
                    <div class="col-md-2 flag">
                      <img src="assets2/img/flag2.png" alt="">
                    </div>
                    <div class="col-md-10">
                      <div class="abt_con">
                    <h1 class="animated pulse">আমাদের কথা</h1>
                    
                    <img src="assets2/img/border.png">
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
            <div class="col-md-6">
              <div class="owner">
                <p>
                বাংলা কবিতার আবৃত্তি শুনুন<br>
                মনকে প্রশান্তিতে ভরিয়ে দিন,<br>
                জাগ্রত হোক ভালবাসা, মমত্ববোধ, দেশপ্রেম।<br>
                ভিজিট করুন  www.banglaabritti.com
                  </p>
              
          </div>
            </div>
            <div class="col-md-6">
              <div class="owner_img">
                <img src="assets2/img/20180922_191302.jpg" style="width: 100%">
              </div>

            <div class="owner_article">
              
              <h2>কামাল মিনা</h2><p style="text-align: left;">ওয়েবসাইট প্রতিষ্ঠাতা এবং<br>পরিচালক </p>
            </div>
            </div>
          </div>

          
          
                   </div>
                    </div>


                   

                  </div>

    </div>

    <div class="col-md-2 add">
      <img src="assets2/img/add-horizontal.jpg">


    </div>

  </div>
    
    
    
    <div class="container-fluid other_nav">
       
            
            <div class="row">
                <div class="col-md-10 navs">
                    <div class="row nav_pad">
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/clipart_b.jpg">
                            <h3 class="nav_hd"><a href="#">আবৃত্তি</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/11066401.jpg">
                            <h3 class="nav_hd"><a href="#">পান্ডূলিপি</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/shikhi.jpg">
                            <h3 class="nav_hd"><a href="#">এসো শিখি</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/occ.jpg">
                            <h3 class="nav_hd"><a href="#">সাংস্কৃতিক খবর</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/shng.jpg">
                            <h3 class="nav_hd"><a href="#">সংগঠনের তথ্য</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/notice.jpg">
                            <h3 class="nav_hd"><a href="#">নোটিশ</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/illustration-idea-bubbles.jpg">
                            <h3 class="nav_hd"><a href="#">মন্তব্য</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/OrgaizationalCultureCoaching_1500.jpg">
                            <h3 class="nav_hd"><a href="#">আমরা</a></h3>
                        </div>
                        <div class="col-md-2 all_nav">
                            <img class="nav_img" src="assets2/img/contact-banner-left.png">
                            <h3 class="nav_hd"><a href="#">যোগাযোগ</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 add">
                    <img src="assets2/img/add-horizontal.jpg">
                    <img src="assets2/img/add-horizontal.jpg" style="margin-top: 10px;">
                </div>
            </div>
    </div>
    
        <!-- Adding footer -->

        @include('include.new_footer')
 
        <!-- End footer -->
    

    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets2/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="http://twitter.github.io/bootstrap/assets2/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="assets2/js/myScript.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });


jQuery(window).load(function(){
    jQuery('#overlay').fadeOut();
    });
        $('#demoDefaultSelection').ddslick({
    data: ddData,
    defaultSelectedIndex:2
});

    });
</script>
    
</body>

</html>