$(document).ready(function(){
    
    $(document).on('click', 'a[href^="#"]', function (event) {
        if (!$(event.target).hasClass('nav-link')) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        }
    });
    
    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
        e.target
        e.relatedTarget
        $('.usp-carousel').slick('setPosition');
        $('.usp-carousel').slick('slickGoTo', 0);
    });
    
    $('#usp-carousel-7').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        touchThreshold: 8,
        autoplaySpeed: 5000,
        prevArrow:"<div class='slick-prev pull-left'></div>",
        nextArrow:"<div class='slick-next pull-right'></div>"
    });
    
    $('#usp-carousel-i7').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        touchThreshold: 8,
        autoplaySpeed: 5000,
        prevArrow:"<div class='slick-prev pull-left'></div>",
        nextArrow:"<div class='slick-next pull-right'></div>"
    });
    
    $('.i-carousel').slick({
        infinite: true,
        centerPadding: '80px',
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        dots: true,
        touchThreshold: 8,
        centerMode: true,
        autoplaySpeed: 5000,
        prevArrow:"<div class='slick-prev pull-left'></div>",
        nextArrow:"<div class='slick-next pull-right'></div>",
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                centerMode: false,
                slidesToShow: 2
              }
            },
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerPadding: '60px',  
                centerMode: true,
                slidesToShow: 1
              }
            }
        ]
    });
    
    $(window).on('resize', function(){
        uspslickArrowAdjust();
        islickArrowAdjust();
    });
    
    uspslickArrowAdjust();
    islickArrowAdjust();
    
    function uspslickArrowAdjust(){
        var height = $('.usp-carousel .slick-list').innerHeight();
        $('.usp-carousel .slick-arrow').height(height);
    }
    
    function islickArrowAdjust(){
        var height = $('.i-carousel .slick-list').innerHeight();
        $('.i-carousel .slick-arrow').height(height);
    }
});

$(function() {
    AOS.init();
});

var stickyIn = false;
$(window).bind("scroll", function() {
    if ($(this).scrollTop() > -1) {
        if(!stickyIn){
            $("#sticky-footer").fadeIn();
            stickyIn = true;
        }
        if ($(this).scrollTop() >= $('#reserve-image').position().top - 200) {
            $("#sticky-footer").stop().fadeOut(100);
            stickyIn = true;
        } else if ($(this).scrollTop() < $('#reserve-image').position().top) {
            stickyIn = false;
        }
    } else {
        $("#sticky-footer").stop().fadeOut(100);
        stickyIn = false;
    }
});