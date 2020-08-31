
    <header>
      <div class="container-fluid">
        <div class="row">
                <div class="col-sm-2 brand">
                    <img src="{{asset('assets2/img/logo2.png')}}" alt="bangla abritty">
                </div>
                <div class="col-sm-10 addvertisement_top">
                    <img src="{{asset('assets2/img/add-vertical.jpg')}}" alt="addvertisement">
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
          <li class="{{Request:: is ('/') ? 'active' : ''}}"><a href="/">হোম</a></li>

          <li class="{{Request:: is ('recitation') ? 'active' : ''}}"><a href="/recitation">আবৃত্তি</a></li>

          <li class="{{Request:: is ('poem' ) ? 'active' : ''}}"><a href="/poem">পান্ডূলিপি</a></li>

          <li>
            <a href="under_constraction.html" class="dropdown-toggle" data-toggle="dropdown">এসো শিখি<b class="caret"></b></a>
            <ul class="dropdown">
              <li><a href="/learning/recitation">আবৃত্তি শিখি</a></li>
              <li><a href="/book">আবৃত্তির বই</a></li>
              <li><a href="/learning/news">সংবাদ পাঠের খুটিনাটি</a></li>
              <li><a href="/learning/presentation">উপস্থাপনার কলাকৌশল</a></li>
            </ul>
          </li>
          <li class="{{Request:: is ('culturalNews') ? 'active' : ''}}"><a href="/culturalNews">সাংস্কৃতিক খবর</a></li>
          <li class="{{Request:: is ('culturalOrg') ? 'active' : ''}}"><a href="/culturalOrg">সংগঠনের তথ্য</a></li>
          <li class="{{Request:: is ('notice') ? 'active' : ''}}"><a href="/notice">নোটিশ</a></li>
          <li class="{{Request:: is ('comment') ? 'active' : ''}}"><a href="/comment">মন্তব্য</a></li>
          <li class="{{Request:: is ('about_us') ? 'active' : ''}}"><a href="/about_us">আমরা</a></li>
          <li class="{{Request:: is ('contact') ? 'active' : ''}}"><a href="/contact">যোগাযোগ</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <!--  navigation end here  -->