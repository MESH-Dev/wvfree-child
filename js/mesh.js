// var scrollLinks = document.querySelectorAll('header a');
//
// for (var i = 0; i < scrollLinks.length; i++) {
//    scrollLinks[i].addEventListener('click', function(event){
//       event.preventDefault();
//       var scrollId = this.href.split('#')[1];
//       document.getElementById(scrollId).scrollIntoView({
//          behavior: 'smooth',
//          block: 'center'
//       });
//    });
// }



var welcomeAnim = new TimelineMax(),
   footerAnim = new TimelineMax(),
   controller = new ScrollMagic.Controller(),
   welcomeTitle = document.getElementById('welcomeTitle'),
   // welcomeDesc = document.getElementById('welcomeDesc'),
   scrollLink = document.getElementById('scrollLink'),
   mainPanels = document.getElementsByClassName('panel'),
   navItems =  document.getElementById('main-nav').getElementsByTagName('ul')[0].getElementsByTagName('a'),
   introPanels = document.getElementsByClassName('panel intro'),
   cardPanels = document.getElementsByClassName('panel cards'),
   textPanels = document.getElementsByClassName('panel wysiwyg'),
   footerLeft = document.getElementById('left-col'),
   footerRight = document.getElementById('right-col');

jQuery(document).ready(function($){

$('.popup-container:eq(1)').detach();

 //Force divs in homepage grid to be square
//Setup variables to hold our sizes
var gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW;

//Grab the width of each element
function gi_resize(){
  gi2 = $('.grid-item-width2 ').width();
  gi3 = $('.grid-item-width3 ').width();
  //console.log(gi3);
  gi4 = $('.grid-item-width4 ').width();
  gi5 = $('.grid-item-width5 ').width();
  gi6 = $('.grid-item-width6 ').width();
  gi7 = $('.grid-item-width7 ').width();
  cp4 = $('.columns-4').width();
  cp5 = $('.columns-5').width();
  cp6 =  $('.columns-6.eq ').width();
  //console.log(cp6);
  //cp6_alt = $('.columns-6')
  cp7 = $('.columns-7.trip').width();
  $wW = $(window).width();


  //return gi2, gi3, gi4;
}
//Run the function above at document ready and on a window resize event
 $(document).ready(gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW));
 $(window).resize(gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW));

//Apply our widths to the height of selected elements either on load, or on resize
function _resize(){
  gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7, $wW);
   $(window).resize(gi_resize(gi2, gi3, gi4, gi5, gi6, gi7, cp4, cp5, cp6, cp7,$wW));

 //  console.log("Width 2: "+gi2);
   // console.log("Width 3: "+gi3);
   //  console.log("Width 4: "+gi4);
  $('.grid-item-width2').css({height: (gi2)});
  $('.grid-item-width2.nest').css({height: (gi2*2)});
  $('.grid-item-width2.nest .nested').css({height: gi2});
  $('.grid-item-width3').css({height: gi3});
  $('.grid-item-width4').css({height: gi4});
  $('.grid-item-width5').css({height: gi5})
  $('.grid-item-width6').css({height: (gi6*.66)});
  $('.width6-diamond').css({height: (gi6*0.4)});
  $('.columns-4.child-links').css({height:cp4});
  $('.columns-6.promo').css({height: (cp6*.5)});
  $('.columns-6.cpromo').css({height: (cp6*.66)});
  //console.log(cp6*.66);
  $('.columns-6 .width6-diamond').css({height: (cp6*0.4)});
  $('.columns-5.event-feed').css({height: (cp5)});
  $('.columns-7.trip').css({height: cp5});
  $('.grid-item-width6.nest').css({height: gi2});
  $('.grid-item-width6.nest .nested').css({height: gi2});
  $('.grid-item-width7').css({height: (gi5)});
  $('.sidebar-io').css({height:cp4});
  console.log($wW);
  //var $target;
  if($wW > 768){
   $('.card').each(function(){
   //$target = $(this).find('a.popup').attr("id");
   $clicker = $(this).find('a.popup');
   //console.log($target);
   $($clicker).click(function(){
      $target = $(this).attr("id");
      $name = $('.popup-container .the-popup').data('name');
      //console.log($name);
      $('.popup-container').fadeIn('fast');
      $('.popup-container .the_popup[data-name="'+$target+'"]').fadeIn('fast');
      //$('.popup-container .the_popup[data-name="iuds"]').css({'display':'block'});
      //$('.popup-container .the_popup[data-name="iuds"]').css({'display':'block'});
      //console.log($target);
      //return $target;
   }); 
   //$dt_clk=0;  
   
});
  }else if ($wW < 768){
   var $dt_clk=0;
   //$target;
   $('.popup-container').hide();
      $('.dropdown-trigger').each(function(){
         $(this).click(function(){
            $dt_clk++;
            console.log($dt_clk);
            //$target;
            //console.log($target);
            if($dt_clk == 1){

            $(this).next('.the_dropdown').slideDown();
            $(this).find('svg').css({'transform':'rotate(180deg'});
            }else{
               $dt_clk=0;
               $(this).next('.the_dropdown').slideUp();
               $(this).find('svg').css({'transform':'rotate(0deg'});
            }
         });
      });
         $('a.popup').click(function(e){
            e.stopPropagation();
         });
  }


}

//Run the function on load & on resize
_resize();
$(window).resize(_resize);

//BC Methods Popups 



$('.popup-container').click(function(){
   $(this).css({'display':'none'});
   $('.the_popup').css({'display':'none'});
});

// $('.card').each(function(){
//    //$target = $(this).find('a.popup').attr("id");
//    $clicker = $(this).find('a.popup');
//    //console.log($target);
//    $($clicker).click(function(){
//       $target = $(this).attr("id");
//       $name = $('.popup-container .the-popup').data('name');
//       //console.log($name);
//       $('.popup-container').fadeIn('fast');
//       $('.popup-container .the_popup[data-name="'+$target+'"]').fadeIn('fast');
//       //$('.popup-container .the_popup[data-name="iuds"]').css({'display':'block'});
//       //$('.popup-container .the_popup[data-name="iuds"]').css({'display':'block'});
//       //console.log($target);
//    });   
   
// });



//BC Methods Dropdowns

// $('.dropdown-trigger').click(function(){
//    $(this).next('.the_dropdown').slideDown();
// })
var $top

if($wW > 768){
   $top = 0;
}else if ($wW < 768){
   $top=-64;
}

  $('a[href*=#]:not([href=#])').click(function() {
       if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
           || location.hostname == this.hostname) {

           var target = $(this.hash);
           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top-64)
               }, 600);
               return false;
           }
       }
   });

   $('#mobileMenuTrigger').click(function(){
      $('.main-navigation ul').slideToggle();
   });

   //Taken from https://jsfiddle.net/cse_tushar/Dxtyu/141/
   $(document).on("scroll", onScroll);    
   console.log('Page is this tall '+$(document).height());
   function onScroll(event){
       var scrollPos = $(document).scrollTop();

      // height of the document (total height)
      var d = $(document).height();
       
      // height of the window (visible page)
      var w = $(window).height();

       console.log(scrollPos);
       $('.main-navigation ul li a').each(function () {
           var currLink = $(this);
           var currLi = $(this);
           var refElement = $(currLink.attr("href"));
           //Note, the OR is checking as to whether our current scroll position is at the bottom of the screen
           if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos || d-(w+scrollPos) == 0  ) {
               $('.main-navigation ul li a').removeClass("active");
               currLi.addClass("active");
           }
           else{
               currLi.removeClass("active");
           }
       });
   }

   $('.main-navigation ul li a').click(function(){
      $('.main-navigation ul li a').removeClass('active');
       $(this).addClass('active');
   })

   $('#scrollLink').click(function(){
      var dist = ($('#top').outerHeight()-64);
      $('html,body').animate({
         scrollTop: (dist)
      }, 600);
   });

   var wH = $(window).width();

   $(window).scroll(wH

      );

   console.log(wH)

   //Taken from https://jsfiddle.net/cse_tushar/Dxtyu/141/
   //This does not fire for the footer (contact section).
   // $(document).on("scroll", onScroll);
   //
   // function onScroll(event){
   //     var scrollPos = $(document).scrollTop();
   //     $('.main-navigation a').each(function () {
   //         var currLink = $(this);
   //         var currLi = $(this).parent('li');
   //         var refElement = $(currLink.attr("href"));
   //         if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
   //             $('.main-navigation ul li').removeClass("active");
   //             currLi.addClass("active");
   //         }
   //         else{
   //             currLi.removeClass("active");
   //         }
   //     });
   // }

});

//Landing & Scroll Animations

welcomeAnim.set(welcomeTitle, {css:{transform:"translateY(40px)", opacity:0}})
   // .set(welcomeDesc, {css:{transform:"translateY(30px)", opacity:0}})
   .set(scrollLink, {css:{opacity:0}})
   .to(welcomeTitle, 0.5, {css:{transform:"translateY(0px)", opacity:1}, ease: Power3.easeInOut, delay: 0.4})
   // .to(welcomeDesc, 0.5, {css:{transform:"translateY(0px)", opacity:1}, ease: Power2.easeInOut, delay: -0.1})
   .to(scrollLink, 0.5, {css:{opacity:1}, ease: Power2.easeInOut});

if (introPanels) {
   for (var i = 0; i < introPanels.length; i++) {
      var theBlurb = introPanels[i].getElementsByClassName('blurb')[0],
         theCTA = introPanels[i].getElementsByClassName('cta')[0],
         theDesc = introPanels[i].getElementsByClassName('intro-desc')[0],
         introPanelAnim = new TimelineMax();

      //Define Animations
      introPanelAnim.set(theBlurb, {css:{transform:"translateY(30px)", opacity:0}})
         .set(theCTA, {css:{opacity:0}})
         .set(theDesc, {css:{transform:"translateX(30px)", opacity:0}})
         .to(theBlurb, 0.5, {css:{transform:"translateY(0px)", opacity:1}, ease: Power2.easeInOut})
         .to(theDesc, 0.4, {css:{transform:"translateX(0px)", opacity:1}, ease: Power2.easeInOut, delay: -0.2})
         .to(theCTA, 0.25, {css:{opacity:1}, ease: Power2.easeInOut, delay: -0.1});

      //Trigger Animations
      var introScene = new ScrollMagic.Scene({triggerElement: introPanels[i], reverse: false})
         .setTween(introPanelAnim)
         .addTo(controller);
   };
};

if (cardPanels) {
   for (var i = 0; i < cardPanels.length; i++) {
      var theCards = cardPanels[i].getElementsByClassName('card'),
         count = 0,
         cardPanelAnim = new TimelineMax();

      cardPanelAnim.staggerFrom(theCards, 0.5, {css:{transform:"translateY(-30px)", opacity:0}, ease: Power2.easeInOut}, 0.15);

      var cardScene = new ScrollMagic.Scene({triggerElement: cardPanels[i], reverse: false})
         .setTween(cardPanelAnim)
         .addTo(controller);
   };
};

if (textPanels) {
   for (var i = 0; i < textPanels.length; i++) {
      var theColumns = textPanels[i].getElementsByClassName('content-col'),
         textPanelAnim = new TimelineMax();

      textPanelAnim.staggerFrom(theColumns, 0.5, {css:{transform:"translateX(-30px)", opacity:0}, ease: Power2.easeInOut}, 0.25);

      var textScene = new ScrollMagic.Scene({triggerElement: textPanels[i], reverse: false})
         .setTween(textPanelAnim)
         .addTo(controller);
   };
};

//Define Footer Animations
footerAnim.set(footerLeft, {css:{transform:"translateX(-30px)", opacity:0}})
   .set(footerRight, {css:{transform:"translateX(-30px)", opacity:0}})
   .to(footerLeft, 0.5, {css:{transform:"translateX(0px)", opacity:1}, ease: Power3.easeInOut, delay: 0.4})
   .to(footerRight, 0.5, {css:{transform:"translateX(0px)", opacity:1}, ease: Power2.easeInOut, delay: -0.1});

//Trigger Footer Animations
var footerScene = new ScrollMagic.Scene({triggerElement: ".site-footer", triggerHook: "onEnter", offset: 40, reverse: false})
   .setTween(footerAnim)
   .addTo(controller);

//Scroll-based active nav item class toggling that successfully fires for the footer and allows smoother scrolling.
// for (var i = 0; i < navItems.length; i++) {
//    var refLink = navItems[i].href.split('#')[1];
//    console.log(refLink);
//    var refElement = document.getElementById(refLink);
//    console.log(refElement);
//    var refHeight = refElement.getBoundingClientRect().height;
//    console.log(refHeight);
//    new ScrollMagic.Scene({triggerElement: refElement, duration: refHeight})
//             .setClassToggle(navItems[i], "active") // add class toggle
//             .addTo(controller);
// };
