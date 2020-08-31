

     
 @extends('layouts.master')

@section('content')

    
    <div class="container-fluid contact">
      
               <div class="row">
               		<div class="col-md-6 contact_form text-center">
               			<h3 class="text-center"> আমাদের কাছে লিখুন </h3>
               			<img src="{{asset('assets2/img/border.png')}}" style="width: 30%; padding:15px 0px">
               			<form action="" method="post">
               				<div class="row">
               					<div class="col-sm-6 form_input">
               						<input type="text" placeholder=" আপনার নাম " class="form-control">
               					</div>
               					<div class="col-sm-6 form_input">
               						<input type="email" placeholder=" আপনার ই-মেইল " class="form-control">
               					</div>
               					
               				</div>
               				<div class="row">
               					<div class="col-sm-12 form_input">
               						<input type="text" placeholder="বিষয়" class="form-control">
               					</div>
               					<div class="col-sm-12 form_input">
               						<textarea rows="5" class="form-control" placeholder="আপনার মন্তব্য "></textarea>
               					</div>
               					<div class="col-sm-12 form_input text-center">
               						<input type="submit" value="পাঠিয়ে দিন" class="btn btn-danger btn-lg">
               					</div>
               				</div>
               			</form>
               			
               		</div>
               		<div class="col-md-6 contact_detail text-center">
               			<h3 class="">যোগাযোগ এর ঠিকানা</h3>
               			<img src="{{asset('assets2/img/border.png')}}" style="width: 30%; padding:15px 0px">
               			<div class="row all_detail">
               			
               				<div class="col-md-3 info_icon text-center">
               					<i class="glyphicon glyphicon-phone-alt"></i>
               				</div>
               				<div class="col-md-9 text-left">
               					০১৭১৮৬৪৪৯৩৭
               				</div>
               			</div>
               			
               			<div class="row all_detail">
               			
               				<div class="col-md-3 info_icon text-center">
               					<i class="glyphicon glyphicon-globe"></i>
               				</div>
               				<div class="col-md-9 text-left">
               					২৭১ / বি,মালিবাগ (৩ তলা) ঢাকা-১২১৭
               				</div>
               			</div>
               			
               			<div class="row all_detail">
               			
               				<div class="col-md-3 info_icon text-center">
               					<i class="glyphicon glyphicon-envelope"></i>
               				</div>
               				<div class="col-md-9 text-left">
               					info@banglaabritti.com
               				</div>
               			</div>
               			
               			
               			
               		</div>
               </div>
            
    </div>
    
    <div class="container-fluid other_nav">
       
     <span class="overlay-white"></span>

        <div class="row">
            <div class="col-md-10">
                <div class="row nav_pad">
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/clipart_b.jpg')}}">
                        <h3 class="nav_hd"><a href="/recitation">আবৃত্তি</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/11066401.jpg')}}">
                        <h3 class="nav_hd"><a href="/poem">পান্ডূলিপি</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/shikhi.jpg')}}">
                        <h3 class="nav_hd"><a href="/under_cons">এসো শিখি</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/occ.jpg')}}">
                        <h3 class="nav_hd"><a href="/culturalNews">সাংস্কৃতিক খবর</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/shng.jpg')}}">
                        <h3 class="nav_hd"><a href="/culturalOrg">সংগঠনের তথ্য</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/notice.jpg')}}">
                        <h3 class="nav_hd"><a href="/notice">নোটিশ</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/illustration-idea-bubbles.jpg')}}">
                        <h3 class="nav_hd"><a href="/comment">মন্তব্য</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/OrgaizationalCultureCoaching_1500.jpg')}}">
                        <h3 class="nav_hd"><a href="/about_us">আমরা</a></h3>
                    </div>
                    <div class="col-md-2 all_nav">
                        <img class="nav_img" src="{{asset('assets2/img/contact-banner-left.png')}}">
                        <h3 class="nav_hd"><a href="/contact">যোগাযোগ</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-2 add">
                <img src="{{asset('assets2/img/add-horizontal.jpg')}}">
                <img src="{{asset('assets2/img/add-horizontal.jpg')}}" style="margin-top: 10px;">
            </div>
        </div>
    </div>



    <style>
        .contact{
            padding: 60px 30px;
        }

        .contact_form{
            padding: 30px 0px;
        }

        .contact_form .form_input{
            padding: 10px;
        }

        .contact_detail{
            padding: 30px 0px;
        }

        .all_detail{
            padding: 10px 120px;
        }

        .info_icon{
            color: red;
        }
    </style>

@endsection