$(document).ready(function() {
	$('.center').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 5,
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

    jQuery(window).load(function(){
    jQuery('#overlay').fadeOut();
    });
        $('#demoDefaultSelection').ddslick({
    data: ddData,
    defaultSelectedIndex:2
});
    

    
    
    
    
});

//audio modal

var audio_modal = document.getElementById ('audio');

var start_audio = document.getElementById ('play_audio');

var finish_audio = document.getElementsByClassName ('close_audio')[0];

start_audio.onclick = function() {
   audio_modal.style.display = "block";
}

finish_audio.onclick = function() {
   audio_modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == audio_modal) {
        audio_modal.style.display = "none";
    }
}


//video modal

var video_modal = document.getElementById ('video');

var start_video = document.getElementById ('play_video');

var finish_video = document.getElementsByClassName ('close_video')[0];

start_video.onclick = function() {
   video_modal.style.display = "block";
}

finish_video.onclick = function() {
   video_modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == video_modal) {
        video_modal.style.display = "none";
    }
}


// poem modal

var poem_modal = document.getElementById ('poem');

var start_poem = document.getElementById ('play_poem');

var finish_poem = document.getElementsByClassName ('close_poem')[0];

start_poem.onclick = function() {
   poem_modal.style.display = "block";
}

finish_poem.onclick = function() {
   poem_modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == poem_modal) {
        poem_modal.style.display = "none";
    }
}