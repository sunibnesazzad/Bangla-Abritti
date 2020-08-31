
<body>
<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="/admin/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                বাংলা আবৃত্তি
                </a>
            </div>

            <ul class="nav" >


               <li <?php  if($page == 'author') echo 'class="active"'; ?> >
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-user-circle"></i>
                        <p>কবি/লেখক</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/author">কবির/লেখকের তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/author/create">কবি/লেখক আপলোড</a></li>
                        </ul>
                    
                </li>

                <li <?php  if($page == 'reciter') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-user-alt"></i>
                        <p>আবৃত্তিকার</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/reciter">আবৃত্তিকারের তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/reciter/create">আবৃত্তিকার আপলোড</a></li>
                        </ul>
    
                </li>

                  <li <?php  if($page == 'publisher') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-warehouse"></i>
                        <p>প্রকাশক</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/publisher">প্রকাশকের  তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/publisher/create">প্রকাশক আপলোড</a></li>
                        </ul>
                    
                </li>

                <li <?php  if($page == 'book') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-book"></i>
                        <p>বই</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/book">বইয়ের  তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/book/create">বই আপলোড</a></li>
                        </ul>
                    
                </li>


                <li <?php  if($page == 'poem') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-book-open"></i>
                        <p>কবিতা</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/poem">কবিতার তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/poem/create">কবিতা আপলোড</a></li>
                        </ul>
                    
                </li>
                
                <li <?php  if($page == 'recitation') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-play"></i>
                        <p>আবৃত্তি</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/recitation">আবৃত্তির তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/recitation/create">আবৃত্তি আপলোড</a></li>
                        </ul>
                    
                </li>

                <!-- Notice part -->

                <li <?php  if($page == 'learning') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-book-open"></i>
                        <p>এসো শিখি</p>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="/admin/learning/index">এসো শিখি তালিকা</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/admin/learning/create">এসো শিখি আপলোড</a></li>
                    </ul>

                </li>
                <!-- Notice part End -->

                <!-- CulturalOrg part -->

                <li <?php  if($page == 'culturalOrg') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fas fa-book-open"></i>
                        <p>সংগঠনের তথ্য</p>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="/admin/culturalOrg/index">সংগঠনের তথ্য তালিকা</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/admin/culturalOrg/create">সংগঠনের তথ্য আপলোড</a></li>
                    </ul>

                </li>
                <!-- CulturalOrg part part End -->

                <!-- Cultural News part -->
                      
                <li <?php  if($page == 'culturalNews') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-user-alt"></i>
                        <p>সাংস্কৃতিক খবরা খবর</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/culturalNews/index">সাংস্কৃতিক খবর তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/culturalNews/create">সাংস্কৃতিক খবর আপলোড</a></li> 
                        </ul>
    
                </li>

                <!-- Cultural News part End-->                

                <!-- Notice part -->

                <li <?php  if($page == 'notice') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-book-open"></i>
                        <p>নোটিশ</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/notice">নোটিশ তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/notice/create">নোটিশ আপলোড</a></li>
                        </ul>
                    
                </li>
                <!-- Notice part End -->

                <!-- Comment part -->

                <li <?php  if($page == 'comment') echo 'class="active"'; ?>>
                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="fas fa-user-alt"></i>
                        <p>মন্তব্য</p>
                    </a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="/admin/comment">মন্তব্য তালিকা</a></li>
                            <li role="separator" class="divider"></li>
                            <!-- <li><a href="/admin/reciter/create">আবৃত্তিকার আপলোড</a></li> -->
                        </ul>
    
                </li>

            </ul>
    	</div>
    </div>
