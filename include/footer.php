<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-8 d-flex align-items-center justify-content-center justify-content-sm-start">2019 © Tüm hakları saklıdır.</div>
            <div class="col-12 col-sm-6 col-lg-4 text-right">
                <a href="http://www.takprojectmedia.com" target="blank">
                    <img src="img/takprojectmedia-logo.png" alt="tak project media logo">
                </a>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="js/main.js"></script>

<script>
    jQuery(document).ready(function($) {
        $('a[href^="#"]').bind('click.smoothscroll',function (e) {
            e.preventDefault();
            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate( {
            'scrollTop': $target.offset().top-40
            }, 900, 'swing', function () {
            window.location.hash = target;
            });
        });
    });
</script>

<script>
var swiper = new Swiper('.main-referans', {
    spaceBetween: 30,
    slidesPerView: 5,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        480: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        991: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1000: {
            slidesPerView: 4,
            spaceBetween: 30
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 30
        }
    },
});
</script>
</body>
</html>