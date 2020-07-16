/**
 * Created by hp on 6/2/2018.
 */
TweenMax.set(".play-circle-01", {
    rotation: 90,
    transformOrigin: "center"
})

TweenMax.set(".play-circle-02", {
    rotation: -90,
    transformOrigin: "center"
})

TweenMax.set(".play-perspective", {
    xPercent: 6.5,
    scale: .175,
    transformOrigin: "center",
    perspective: 1
})

TweenMax.set(".play-video", {
    visibility: "hidden",
    opacity: 0,
})

TweenMax.set(".play-triangle", {
    transformOrigin: "left center",
    transformStyle: "preserve-3d",
    rotationY: 10,
    scaleX: 2
})

const rotateTL = new TimelineMax({ paused: true })
    .to(".play-circle-01", .7, {
        opacity: .1,
        rotation: '+=360',
        strokeDasharray: "456 456",
        ease: Power1.easeInOut
    }, 0)
    .to(".play-circle-02", .7, {
        opacity: .1,
        rotation: '-=360',
        strokeDasharray: "411 411",
        ease: Power1.easeInOut
    }, 0)

const openTL = new TimelineMax({ paused: true })
    .to(".play-backdrop", 1, {
        opacity: .95,
        visibility: "visible",
        ease: Power2.easeInOut
    }, 0)
    .to(".play-close", 1, {
        opacity: 1,
        ease: Power2.easeInOut
    }, 0)
    .to(".play-perspective", 1, {
        xPercent: 0,
        scale: 1,
        bottom: 156,
        ease: Power2.easeInOut
    }, 0)
    .to(".play-triangle", 1, {
        scaleX: 1,
        width: 568,
        height: 370,
        ease: ExpoScaleEase.config(2, 1, Power2.easeInOut)
    }, 0)
    .to(".play-triangle", 1, {
        rotationY: 0,
        ease: ExpoScaleEase.config(10, .01, Power2.easeInOut)
    }, 0)
    .to(".play-video", 1, {
        visibility: "visible",
        opacity: 1
    }, .5)

const button1 = document.querySelector(".play-button")
const backdrop = document.querySelector(".play-backdrop")
const close = document.querySelector(".play-close")

button1.addEventListener("mouseover", () => rotateTL.play())
button1.addEventListener("mouseleave", () => rotateTL.reverse())
button1.addEventListener("click", () => openTL.play())
backdrop.addEventListener("click", () => openTL.reverse())
close.addEventListener("click", e => {
    e.stopPropagation()
openTL.reverse()
})
if (window.matchMedia('screen and (max-width: 767px)').matches) {
    const openTL = new TimelineMax({ paused: true })
        .to(".play-perspective", 1, {
            bottom: 150,
        }, 0)
        .to(".play-triangle", 1, {
            width: 359,
            height: 225,
            margin: 70
        }, 0)

    const button1 = document.querySelector(".play-button")
    const backdrop = document.querySelector(".play-backdrop")
    const close = document.querySelector(".play-close")

    button1.addEventListener("mouseover", () => rotateTL.play())
    button1.addEventListener("mouseleave", () => rotateTL.reverse())
    button1.addEventListener("click", () => openTL.play())
    backdrop.addEventListener("click", () => openTL.reverse())
    close.addEventListener("click", e => {
        e.stopPropagation()
    openTL.reverse()
})
}

if (window.matchMedia('screen and (min-width: 768px) and (max-width: 990px)').matches) {
    const openTL = new TimelineMax({ paused: true })
        .to(".play-perspective", 1, {
            bottom: 162,
        }, 0)
        .to(".play-triangle", 1, {
            width: 359,
            height: 235,
            margin: 70
        }, 0)

    const button1 = document.querySelector(".play-button")
    const backdrop = document.querySelector(".play-backdrop")
    const close = document.querySelector(".play-close")

    button1.addEventListener("mouseover", () => rotateTL.play())
    button1.addEventListener("mouseleave", () => rotateTL.reverse())
    button1.addEventListener("click", () => openTL.play())
    backdrop.addEventListener("click", () => openTL.reverse())
    close.addEventListener("click", e => {
        e.stopPropagation()
    openTL.reverse()
})
}



$(".hover").mouseleave(
    function () {
        $(this).removeClass("hover");
    }
);

$(document).ready(function() {
    var $top_slider = $('.owl-carousel1');
    if ($top_slider.length) {
        $top_slider.owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            // nav:false,
            autoplayHoverPause: true,
            autoplay: 5000,
            // stagePadding: 213,
            rtl: true,
            smartSpeed: 300,
            // navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
            responsive: {
                0: {
                    items: 1
                    // stagePadding: 15
                },
                600: {
                    items: 1
                    // stagePadding: 15
                },
                760: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }
})


$(document).ready(function() {
    var $bottom_slider = $('.owl-carousel2');
    if ($bottom_slider.length) {
        $bottom_slider.owlCarousel({
            loop: true,
//                margin: 30,
            dots: true,
            // nav:false,
            autoplayHoverPause: true,
            autoplay: 5000,
//                stagePadding: 213,
            rtl: true,
            smartSpeed: 300,
            // navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                760: {
                    items: 2
                },
                1024: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        });
    }
})



$(document).ready(function() {
    var $bottom_slider = $('.owl-carousel3');
    if ($bottom_slider.length) {
        $bottom_slider.owlCarousel({
            loop: true,
//                margin: 30,
            dots: true,
            // nav:false,
            autoplayHoverPause: true,
            autoplay: 5000,
//                stagePadding: 213,
            rtl: true,
            smartSpeed: 300,
            // navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                760: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    }
})


$(document).ready(function() {
    var $bottom_slider = $('.owl-carousel4');
    if ($bottom_slider.length) {
        $bottom_slider.owlCarousel({
            loop: true,
//                margin: 30,
            dots: true,
            // nav:false,
            autoplayHoverPause: true,
            autoplay: 5000,
//                stagePadding: 213,
            rtl: true,
            smartSpeed: 300,
            // navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 2
                },
                760: {
                    items: 2
                },
                1024: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    }
})


$('.slider-for').slick({
    rtl: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    asNavFor: '.slider-nav',
    dots: false,
    arrows:false,
    appendArrows: '.pr_images'

});
$('.slider-nav').slick({
    rtl: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows:true,
    centerMode: true,
    centerPadding: '0px',
    focusOnSelect: true,
    autoplay:true,
    prevArrow:'<i class="fa fa-angle-book fa-angle-right" aria-hidden="true"></i>',
    nextArrow:'<i class="fa fa-angle-book fa-angle-left" aria-hidden="true"></i>'

});


$('.slider-top').slick({
    rtl: true,
    dots: false,
    infinite: true,
    speed: 1000,
    fade: true,
    autoplay:true,
    prevArrow:'<i class="fa fa-angle-top fa-angle-right" style="right: 0px" aria-hidden="true"></i>',
    nextArrow:'<i class="fa fa-angle-top fa-angle-left" style="left: 20px" aria-hidden="true"></i>'
});








$(".js-video-button").modalVideo({
    youtube:{
        controls:1,
        nocookie: true,

    }
});





$(window, document, undefined).ready(function() {

    $('input,textarea').blur(function() {
        var $this = $(this);
        if ($this.val())
            $this.addClass('used');
        else
            $this.removeClass('used');
    });

    var $ripples = $('.ripples');

    $ripples.on('click.Ripples', function(e) {

        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find('.ripplesCircle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
            top: y + 'px',
            left: x + 'px'
        });

        $this.addClass('is-active');

    });

    $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
        $(this).removeClass('is-active');
    });

});

$(document).ready(function() {
    $(".play-close").click(function () {
        $('.play-video iframe').attr('src', $('.play-video iframe').attr('src'));
    });
});


$("#myUl").endlessRiver({
});

    // $(document).ready(function() {
    //     $('select').niceSelect();
    // });
