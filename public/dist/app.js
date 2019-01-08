/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/navbar.js":
/***/ (function(module, exports) {

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta) return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

$(function () {
    $("li").click(function () {
        // remove classes from all
        $("li").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
    });

    $("#home").click(function () {
        $('html,body').animate({
            scrollTop: $(".home").offset().top }, 'slow');
    });
    $("#about").click(function () {
        $('html,body').animate({
            scrollTop: $(".about").offset().top }, 'slow');
    });
    $("#projects").click(function () {
        $('html,body').animate({
            scrollTop: $(".projects").offset().top }, 'slow');
    });
    $("#photography").click(function () {
        $('html,body').animate({
            scrollTop: $(".photography").offset().top }, 'slow');
    });
    $("#contact").click(function () {
        $('html,body').animate({
            scrollTop: $(".contact").offset().top }, 'slow');
    });
});

// Mobile navbar
// show/hide the mobile menu based on class added to container
$(function () {
    $('.menu-icon').click(function () {
        $(this).parent().toggleClass('is-tapped');
        $('#hamburger').toggleClass('open');
    });
});

// Hides mobile menu when list item is clicked
$(function () {
    $('li').click(function () {
        $('.sitenavigation').toggleClass('is-tapped');
        $('#hamburger').toggleClass('open');
        console.log('clicked');
    });
});

/***/ }),

/***/ "./resources/assets/js/transitions.js":
/***/ (function(module, exports) {

// header-text fade-up on page load
$('fade-up').delay(1300).animate({ 'marginTop': '+=-80px', 'opacity': '1' }, 800);

// Social icon hover circle outline
$('a').each(function () {
	$(this).html('<span class="icon">' + $(this).html() + '</span><span class="circle"><span><em></em></span><span><em></em></span></span>');
});

// Project Details
$('#project-preview').hover(function () {
	$('#project-info').slideToggle(500);
});
$('#project-preview2').hover(function () {
	$('#project-info2').slideToggle(500);
});

// lightGallery
$('#lightgallery, #lightgallery2, #lightgallery3').lightGallery();

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/navbar.js");
module.exports = __webpack_require__("./resources/assets/js/transitions.js");


/***/ })

/******/ });