// loader 
// $(document).ready(function(){
// 	$('div#loading').removeAttr('id');
// });
var preloader = document.getElementById("loading");
// window.addEventListener('load', function(){
// 	preloader.style.display = 'none';
// 	})
function myFunction() {
    preloader.style.display = 'none';
};
// Navigation Js Scroll Starts
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 50) {
        $(".navigation-wrap").css("background", "white");
        $(".nav-link").css("color", "#484d67");
        $(".navigation-wrap").css("box-shadow", "rgb(0 0 0 / 20%) 0px 10px 10px -7px");
        $(".navigation-wrap").css("padding", "10px 0px");
        $(".navigation-wrap").css("border-bottom", "3px solid var(--main-color)");
    } else {
        $(".navigation-wrap").css("background", "white");
        $(".nav-link").css("color", "#484d67");
        $(".navigation-wrap").css("box-shadow", "none");
        $(".navigation-wrap").css("padding", "10px 0px");
        $(".navigation-wrap").css("border-bottom", "unset");
    }
}); // Navigation Js Scroll Ends

$(document).ready(function() {
    // product Gallery and Zoom
    // activation carousel plugin
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 5,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
        }
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        },
    });
    // change carousel item height
    // gallery-top
    let productCarouselTopWidth = $('.gallery-top').outerWidth();
    $('.gallery-top').css('height', productCarouselTopWidth);
    // gallery-thumbs
    let productCarouselThumbsItemWith = $('.gallery-thumbs .swiper-slide').outerWidth();
    $('.gallery-thumbs').css('height', productCarouselThumbsItemWith);
    // activation zoom plugin
    // var $easyzoom = $('.easyzoom').easyZoom();
});
// Bootstrap Range Slider Js
$("#range-slider-div").slider({
    // the id of the slider element
    id: "range-slider",
    // minimum value
    min: 1,
    // maximum value
    max: 10000,
    // increment step
    step: 1,
    // the number of digits shown after the decimal.
    precision: 0,
    // 'horizontal' or 'vertical'
    orientation: 'horizontal',
    // initial value
    value: 5,
    // enable range slider
    range: true,
    // selection placement. 
    // 'before', 'after' or 'none'. 
    // in case of a range slider, the selection will be placed between the handles
    selection: 'before',
    // 'show', 'hide', or 'always'
    tooltip: 'always',
    // show two tooltips one for each handler
    tooltip_split: true,
    // lock to ticks
    lock_to_ticks: false,
    // 'round', 'square', 'triangle' or 'custom'
    handle: 'round',
    // whether or not the slider should be reversed
    reversed: false,
    // RTL mode
    rtl: 'auto',
    // whether or not the slider is initially enabled
    enabled: true,
    // callback
    formatter: function formatter(val) {
        if (Array.isArray(val)) {
            return val[0] + " : " + val[1];
        } else {
            return val;
        }
    },
    // The natural order is used for the arrow keys. 
    // Arrow up select the upper slider value for vertical sliders, arrow right the righter slider value for a horizontal slider - no matter if the slider was reversed or not. 
    // By default the arrow keys are oriented by arrow up/right to the higher slider value, arrow down/left to the lower slider value.
    natural_arrow_keys: false,
    // Used to define the values of ticks. 
    // Tick marks are indicators to denote special values in the range. 
    // This option overwrites min and max options.
    ticks: [],
    // Defines the positions of the tick values in percentages. 
    // The first value should always be 0, the last value should always be 100 percent.
    ticks_positions: [],
    // Defines the labels below the tick marks. Accepts HTML input.
    ticks_labels: [],
    // Used to define the snap bounds of a tick. 
    // Snaps to the tick if value is within these bounds.
    ticks_snap_bounds: 0,
    // Used to allow for a user to hover over a given tick to see it's value.
    ticks_tooltip: false,
    // Position of tooltip, relative to slider. 
    // Accepts 'top'/'bottom' for horizontal sliders and 'left'/'right' for vertically orientated sliders. 
    // Default positions are 'top' for horizontal and 'right' for vertical slider.
    tooltip_position: null,
    // Set to 'logarithmic' to use a logarithmic scale.
    scale: 'linear',
    // Focus the appropriate slider handle after a value change.
    focus: false,
    // ARIA labels for the slider handle's, Use array for multiple values in a range slider.
    labelledby: null,
    // Defines a range array that you want to highlight
    rangeHighlights: []
        // Bootstrap Range Slider Js End
});
// Bootstrap Range Slider Js Ends
// Brand Slick Slider Starts
$('.our_brand').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false
});
// Brand Slick Slider Ends
// Brand Slick Slider On Modal Popup
$(window).on('shown.bs.modal', function() {
    $('.our_brand-2').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false
    });
});
// Brand Slick Slider On Modal Popup End
// Banner Slick Slider Starts
$('.slick-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    dots: false,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1080,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});
// Banner Slick Slider Ends
// Category Slick Slider Starts
$('.slick-slider-category').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1080,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 325,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});
// Category Slick Slider Ends
// Product Listing Slick Slider Starts
$('.slick-slider-listing').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1080,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: true
            }
        },   {
            breakpoint: 325,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }
    ]
});
// Product Listing Slick Slider Ends
// Product Detail Image Size choose Js
$(document).ready(function() {
    $('.imagesize').click(function() {
        if ($('.imagesize-active').length) {
            $('.imagesize-active').not($(this)).removeClass('imagesize-active').addClass('image-size');
        }
        $(this).removeClass('image-size').addClass('imagesize-active');
    });

    // Toastr
    $('.toastr-click').click(function() {
        console.log('hwllo');
        toastr.success('Successfully Product added');
        // $('.toastr-click').prop('disabled', true);
        // delayToasts();
    });

});
// Product Detail Image Size choose Js

function successMsg() {
    toastr.success('Successfully Product added');
}