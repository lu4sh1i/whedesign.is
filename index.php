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


 <figure class="uk-overlay center-block">
     <img src="images/reswebdev.jpg" width="2000" height="" alt="ready">
     <figcaption class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle ">
         <div data-uk-parallax="y:300, opacity:0" class="uk-width-1-2">
             <h1 class="text-uppercase serifs font-w-100">Responsive Web Development</h1>
             <div class="no-padding">
                 <p class="text-white">
                     Be it for PC, laptop, tablet or phone,
                     we pride ourselves on developing state-of-the-art,
                     creative, functional and productive websites.
                     Websites designed to maximize your online presence and support your organizational goals.  
                     <br>
                     Websites that help you grow.
                 </p>
             </div>
         </div>
     </figcaption>
 </figure>
 <figure class="uk-overlay center-block">
     <img src="images/viside.jpg" width="2000" height="" alt="ready">
     <figcaption class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle ">
         <div data-uk-parallax="y:300, opacity:0" class="uk-width-1-2">
             <h1 class="text-uppercase serifs font-w-100">Visual Identity</h1>
             <div class=" no-padding">
                 <p class="text-white">
                     Whether we like it or not, a book does get judged by its cover. So, we make sure your cover says the right things and projects the right message.  
                     Be it online or in print your identity will be relevant, properly reflect your organization and be clearly understood by all.
                 </p>
             </div>
         </div>
     </figcaption>
 </figure>


 <figure class="uk-overlay center-block">
     <img src="images/grade.jpg" width="2000" height="" alt="ready" >
     <figcaption class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle">
         <div data-uk-parallax="y:300, opacity:0" class="uk-width-1-2">
             <h1 class="text-uppercase serifs font-w-100">Graphic Design</h1>
             <div class=" no-padding">
                 <p class="text-white">
                     The Graphic Designer - an indispensable person in any company. Graphic Design makes what was once impossible possible.

                     You don't need to hire an in-house Graphic Designer. As long as you have us.
                 </p>
             </div>
         </div>
     </figcaption>
 </figure>


 <figure class="uk-overlay center-block">
        <img src="images/FOOTER-CTA.png" width="2000" height="" alt="ready">
        <figcaption class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle uk-text-center">
            <div>
                <h1 class="text-uppercase">Ready to get started?</h1>
                <a href="mailto:hello@wheredesign.is" class="wd-sm-box-shadow uk-button button-aqua uk-button-large wd-large-btn wd-color">Contact us</a>
            </div>
        </figcaption>
    </figure>




 <?php

 include 'footer.php';

 ?>