// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

$(function() {
   $("li").click(function() {
      // remove classes from all
      $("li").removeClass("active");
      // add class to the one we clicked
      $(this).addClass("active");
   });

   $("#home").click(function() {
        $('html,body').animate({
            scrollTop: $(".home").offset().top},
            'slow');
    });
    $("#about").click(function() {
        $('html,body').animate({
            scrollTop: $(".about").offset().top},
            'slow');
    });
    $("#projects").click(function() {
        $('html,body').animate({
            scrollTop: $(".projects").offset().top},
            'slow');
    });
    $("#photography").click(function() {
        $('html,body').animate({
            scrollTop: $(".photography").offset().top},
            'slow');
    });
    $("#contact").click(function() {
        $('html,body').animate({
            scrollTop: $(".contact").offset().top},
            'slow');
    });
});


// Mobile navbar
// show/hide the mobile menu based on class added to container
$(function() {
    $('.menu-icon').click(function() {
        $(this).parent().toggleClass('is-tapped');
        $('#hamburger').toggleClass('open');
        // if ($('.icon').click) {
        //     $('hamburger').removeClass('open');
        // };
    });
});


