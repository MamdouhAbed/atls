<footer class="atlas-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>جميع الحقوق محفوظة لمركز أطلس للدراسات الإسرائيلية © 2018</p>
                <p>طُور بكل <i class="fa fa-heart" aria-hidden="true" style="color: red"></i>
                    بواسطة: البراق لتكنولوجيا المعلومات</p>
            </div>
        </div>
    </div>
</footer>


<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.3.15/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-modal-video.min.js"></script>
<script src="<?php echo base_url();?>assets/js/modal-video.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.sticky-kit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
<script src="<?php echo base_url();?>assets/js/endlessRiver.js"></script>
<script>
    $(document).ready(function() {
        if (window.matchMedia('screen and (max-width: 767px)').matches) {
            $(document).delegate('.open', 'click', function (event) {
                $(this).addClass('oppenned');
                $('.open').removeClass('cssmenu');
                $(".social-media-header").css("display", 'block');
                $(".body-scroll").css("overflow-y", 'hidden');

//            $(".oppenned span:nth-child(1),.oppenned span:nth-child(3)").css("right", '-45px');

                event.stopPropagation();
            })

            $(document).delegate('body', 'click', function (event) {
                $('.open').removeClass('oppenned');
                $(".body-scroll").css("overflow-y", 'scroll');

            })
            $(document).delegate('.cls', 'click', function (event) {
                $('.open').removeClass('oppenned');
                $(".social-media-header").css("display", 'none');
                $(".body-scroll").css("overflow-y", 'scroll');
//            $(".open span:nth-child(1),.open span:nth-child(3)").css("right", '-7px !important');

                event.stopPropagation();
            });

            $(document).delegate('.play-button', 'click', function (event) {
                $(".play-close").css("width", '15px');
                $(".play-close").css("height", '15px');
                $(".play-close").css("right", '96px');

                event.stopPropagation();
            });
        }
        if (window.matchMedia('screen and (min-width: 768px) and (max-width: 990px)').matches) {
            $(document).delegate('.open', 'click', function (event) {
                $(this).addClass('oppenned');
                $('.open').removeClass('cssmenu');
                $(".social-media-header").css("display", 'block');
                $(".body-scroll").css("overflow-y", 'hidden');

//            $(".oppenned span:nth-child(1),.oppenned span:nth-child(3)").css("right", '-45px');

                event.stopPropagation();
            })
            $(document).delegate('body', 'click', function (event) {
                $('.open').removeClass('oppenned');
                $(".body-scroll").css("overflow-y", 'scroll');

            })
            $(document).delegate('.cls', 'click', function (event) {
                $('.open').removeClass('oppenned');
                $(".body-scroll").css("overflow-y", 'scroll');
//            $(".open span:nth-child(1),.open span:nth-child(3)").css("right", '-7px !important');

                event.stopPropagation();
            });

            $(document).delegate('.play-button', 'click', function (event) {
                $(".play-close").css("width", '25px');
                $(".play-close").css("height", '25px');
                $(".play-close").css("right", '96px');

                event.stopPropagation();
            });

        }

        });
</script>

<script>
    $(".slider-blog").slick({
        rtl: true,
        dots: false,
        infinite: true,
        centerMode: true,
        autoplay:true,
        slidesToShow: 1,
        slidesToScroll: 3,
        prevArrow:'<i class="fa fa-angle-top fa-angle-right" style="right: 0px" aria-hidden="true"></i>',
        nextArrow:'<i class="fa fa-angle-top fa-angle-left" style="left: 20px" aria-hidden="true"></i>'
    });

    $('[data-fancybox="gallery"]').fancybox({
        thumbs : {
            showOnStart : false
        },
        hash : true
    })
</script>
<script>
    var search = document.getElementById('search');
    var button = document.getElementById('button');
    var input = document.getElementById('input');

    function loading() {
        search.classList.add('loading');

        setTimeout(function() {
            search.classList.remove('loading');
        }, 1500);
    }

    button.addEventListener('click', loading);

    input.addEventListener('keydown', function() {
        if(event.keyCode == 13) loading();
    });

    $('.search-focus').on('focus', function(event) {
        $('.select-container').addClass('opensearch');
    });
    $('.search-focus').on('focusout', function(event) {
        $('.select-container').removeClass('opensearch');
    });
</script>
<script>

    $(window).scroll(function(){
        var heightOfThePage = $(document).height();
        var h = window.innerHeight;
        if (window.matchMedia('screen and (max-width: 767px)').matches) {

            if ($(window).scrollTop() >= 55) {
                $('.open span').css("display", 'none');
                $('.open').css("display", 'none');
            }
            else{
                $('.open span').css("display", 'block');
                $('.open').css("display", 'block');

            }
            $(document).delegate('body', 'click', function(event) {
                $(".social-media-header").css("display", 'none');
            })
        }
    });
    $(window).scroll(function(){
        var heightOfThePage = $(document).height();
        var h = window.innerHeight;
        if (window.matchMedia('screen and (min-width: 768px) and (max-width: 990px)').matches) {

            if ($(window).scrollTop() >= 55) {
                $('.open span').css("display", 'none');
                $('.open').css("display", 'none');
            }
            else{
                $('.open span').css("display", 'block');
                $('.open').css("display", 'block');

            }

        }
    });
</script>
<script>
    $("document").ready(function() {
        $(".copy-link").click(function() {
//            $(".share-link").focus();
            $(".share-link").select();
            document.execCommand("copy");
        });
    });
</script>
<script>
    $(window).load(function() {
        $('.post-module').hover(function() {
            $(".desc-brief").css("max-height", '60px');
            $(".desc-brief").css("overflow", 'hidden');
            $(this).find('.description').stop().animate({
                height: "toggle",
                opacity: "toggle"
            }, 300);
        });
    });
</script>
<!--<script src="http://hernansartorio.com/jquery-nice-select/js/jquery.nice-select.min.js"></script>-->
<script  src="<?php echo base_url();?>assets/js/custom.js"></script>

</body>
</html>