 <?php

 include "header.php";
 include 'navigation.php';
?>
<!--Content-->
<!-- Begin Slider -->

 <section id="slider" class="slider-parallax swiper_wrapper full-screen force-full-screen clearfix">

  <div class="swiper-container swiper-parent">
   <div class="swiper-wrapper">
    <div class="swiper-slide dark" style="background-image: url('images/slide-bg.jpg');">
     <div class="container clearfix">
      <div class="wd-margin-b50 slider-caption slider-caption-center ">
       <h2 data-caption-animate="fadeInUp">Welcome to WHERE DESIGN IS</h2>
       <p data-caption-animate="fadeInUp" data-caption-delay="200">We Create Bold Designs</p>
      </div>
     </div>
    </div>


   </div>
<!--   <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>-->
<!--   <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>-->
<!--   <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>-->
  </div>

  <script>
   jQuery(document).ready(function($){
    var swiperSlider = new Swiper('.swiper-parent',{
     paginationClickable: false,
     slidesPerView: 1,
     grabCursor: true,
     onSwiperCreated: function(swiper){
      $('[data-caption-animate]').each(function(){
       var $toAnimateElement = $(this);
       var toAnimateDelay = $(this).attr('data-caption-delay');
       var toAnimateDelayTime = 0;
       if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
       if( !$toAnimateElement.hasClass('animated') ) {
        $toAnimateElement.addClass('not-animated');
        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
        setTimeout(function() {
         $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
        }, toAnimateDelayTime);
       }
      });
     },
     onSlideChangeStart: function(swiper){
      $('#slide-number-current').html(swiper.activeIndex + 1);
      $('[data-caption-animate]').each(function(){
       var $toAnimateElement = $(this);
       var elementAnimation = $toAnimateElement.attr('data-caption-animate');
       $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
      });
     },
     onSlideChangeEnd: function(swiper){
      $('#slider .swiper-slide').each(function(){
       if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
      });
      $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
       if($(this).find('video').length > 0) {
        if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
       }
      });
      if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

      $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
       var $toAnimateElement = $(this);
       var toAnimateDelay = $(this).attr('data-caption-delay');
       var toAnimateDelayTime = 0;
       if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
       if( !$toAnimateElement.hasClass('animated') ) {
        $toAnimateElement.addClass('not-animated');
        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
        setTimeout(function() {
         $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
        }, toAnimateDelayTime);
       }
      });
     }
    });

    $('#slider-arrow-left').on('click', function(e){
     e.preventDefault();
     swiperSlider.swipePrev();
    });

    $('#slider-arrow-right').on('click', function(e){
     e.preventDefault();
     swiperSlider.swipeNext();
    });

    $('#slide-number-current').html(swiperSlider.activeIndex + 1);
    $('#slide-number-total').html(swiperSlider.slides.length);
   });
  </script>

 </section>
<div class="content-0"></div>
 <div class="content-0"></div>







 <?php

 include 'footer.php';

 ?>