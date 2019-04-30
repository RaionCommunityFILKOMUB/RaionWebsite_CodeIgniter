var navOpen = false;
function stop(){
  $('body').css('overflow','visible')
  $('.trailer').removeClass('isplay')
  $('#main_menu').fadeIn('slow')
  $("#trailer")[0].pause()
  $("#trailer")[0].load()
}
$(document).ready(function(){
  $('a[href="#home"]').click(function(){
    if($(window).width()<768)
    $('.navbar-toggle').click();
    $('body').animatescroll({padding:0});
    return false

  })
  $('a[href="#about"]').click(function(){
    if($(window).width()<768)
    $('.navbar-toggle').click();
    $('.about').animatescroll({padding:140});
    return false
  })
  $('a[href="#speaker"]').click(function(){
    if($(window).width()<768)
    $('.navbar-toggle').click();
    $('.speaker').animatescroll({padding:50});
    return false
  })
  $('a[href="#ticket"]').click(function(){
    if($(window).width()<768)
    $('.navbar-toggle').click();
    $('.ticket').animatescroll({padding:60});
    return false
  })
  $('a[href="#location"]').click(function(){
    if($(window).width()<768)
    $('.navbar-toggle').click();
    $('.map').animatescroll({padding:60});
    return false
  })
  $('a[href="#register"]').click(function(){
    if($(window).width()<768)
    $('.navbar-toggle').click();
    $('.register').animatescroll({padding:60});
    return false
  })
  $('a[href="#contact"]').click(function(){
    if($(window).width()<768)
    $('.navbar-toggle').click();
    $('.contact').animatescroll({padding:60});
    return false
  })
  if($(window).width()<768){
    $("#main_menu").addClass("scroll");
  }


  $('.slide-testi').owlCarousel({
    navigation : false, // Show next and prev buttons
	  paginationSpeed : 400,
	  singleItem: true,
    autoplay:true,
    autoplayTimeout:5000,
    items:1
  })
  $('.brands').owlCarousel({
      dots:false,
      loop:true,
      center: true,
      autoplay:true,
      autoplayTimeout:5000,
      margin:30,
      paginationSpeed : 1000,
      responsive:{
        678:{
            items: 2
        },
        1000:{
            items: 4
        }
    }
  })

  $('#trailer').on('ended',function(){
      stop();
    });
  $('.play').click(function(e){
    $('body').css('overflow','hidden')
    $('.trailer').addClass('isplay')
    $('#main_menu').fadeOut('slow')
    $("#trailer")[0].play()
	  var $window = $(window),
		$element = $('#trailer'),
		elementTop = $element.offset().top,
		elementHeight = $element.height(),
		viewportHeight = $window.height(),
		scrollIt = elementTop - ((viewportHeight - elementHeight) / 2);
    $("html, body").animate({ scrollTop: scrollIt }, 600);
  })
  $('.stop').click(function(){
    stop();
  })
  var ispause = false;
  $('.pause').click(function(){
    if(!ispause){
      $("#trailer")[0].pause()
      ispause = true;
      $('.pause').removeClass('fa-pause-circle');
      $('.pause').addClass('fa-play-circle');
    }
    else{
      $("#trailer")[0].play()
      ispause = false;
      $('.pause').removeClass('fa-play-circle');
      $('.pause').addClass('fa-pause-circle');
    }
  })

  var amount = '';
  function scroll() {
      $('.prev').animate({
          scrollTop: amount
      }, 100, 'linear',function() {
          if (amount != '') {
              scroll();
          }
      });
  }

  $('.phone img').hover(function() {
      amount = '+=20';
      scroll();
  }, function() {
      amount = '-=50';
  });


  $('.navbar-toggle').click(function(){
  			if(navOpen){
  				$('.navbar-toggle').addClass("blur");
  				$('.navbar-toggle').removeClass("focus");
  				navOpen = false;
  			}else{
  				$('.navbar-toggle').addClass("focus");
  				$('.navbar-toggle').removeClass("blur");
  				navOpen = true;
  			}
  		})
})

$(window).scroll(function(){
	var wScroll = $(this).scrollTop();
  if($(window).width()>768){
    if(wScroll==0){
  		$("#main_menu").removeClass("scroll");
    }
  	if(wScroll>30){
  		$("#main_menu").addClass("scroll");
    }
  }
  var hi = ($(window).height() / 1.1)||(wScroll+$(window).height())>=$(document).height();
  if(wScroll > $('.about .maskot,.about .text').offset().top - hi){
    setTimeout($('.about .maskot,.about .text').addClass('show'),1500);
  }

	if(wScroll > $('.speaker .brand, .speaker .text').offset().top - ($(window).height() / 1.1)||(wScroll+$(window).height())>=$(document).height()){
			setTimeout($('.speaker .brand, .speaker .text').addClass('show'),1500);
	}
  var selisih = 2500;
  $('.sale').each(function(){
		if(wScroll > $(this).offset().top - ($(window).height() / 1.3)||(wScroll+$(window).height())>=$(document).height()){
			setTimeout($(this).addClass('show'),selisih);
      selisih+=2500;
			}
	})
  selisih = 2500;
  $('.register .content').each(function(){
		if(wScroll > $(this).offset().top - ($(window).height() / 1.3)||(wScroll+$(window).height())>=$(document).height()){
			setTimeout($(this).addClass('show'),selisih);
      selisih+=2500;
			}
	})
  selisih = 2500;
  $('.contact .col').each(function(){
		if(wScroll > $(this).offset().top - ($(window).height() / 1.3)||(wScroll+$(window).height())>=$(document).height()){
			setTimeout($(this).addClass('show'),selisih);
      selisih+=2500;
			}
	})
  if(wScroll > $('.footer .text').offset().top - ($(window).height() / 1)||(wScroll+$(window).height())>=$(document).height()){
			setTimeout($('.footer .text').addClass('show'),1500);
	}
})

$(window).resize(function() {
  if($(window).width()<768||$(this).scrollTop()>30){
    $("#main_menu").addClass("scroll");
  }else{
    $("#main_menu").removeClass("scroll");
  }

  });

//gmap
// function initMap() {
//   var isDraggable = $(document).width() > 768 ? true : false;
//   var uluru = {lat: -7.976711, lng: 112.624928};
//   var map = new google.maps.Map(document.getElementById('map'), {
//   zoom: 16,
//   center: uluru,
//   scrollwheel: false,
//   draggable: isDraggable
//   });
//   var marker = new google.maps.Marker({
//   position: uluru,
//   map: map
//   });
// }

jQuery(window).load(function () {
  $('.loading').slideUp('slow');
  $('body').css('overflow','auto')



})
