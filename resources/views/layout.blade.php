<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SEF</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="SEF is an NGO" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/icofont/icofont.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="/assets/vendors/main-icons/style.css" />
    <link rel="stylesheet" href="/assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/main.css" />
</head>
<body class="custom-cursor">
    
<div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(/assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
     <div class="page-wrapper">
     <header class="main-header main-header--three sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.html">
                            <img src="/assets/images/logo-dark.png" alt="" width="223">
                            <img class="main-header__logo__sticky" src="/assets/images/logo-light.png" alt="" width="223">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li class="">
                                <a href="{{route('home')}}">Home</a>
                                
                            </li>

                            <li>
                                <a href="{{route('about')}}">About</a>
                            </li>
                            <li class="">
                                <a href="{{route('gallery')}}">Gallery</a>
                                
                            </li>
                            <li class="">
                                <a href="{{route('donate')}}">Donations</a>
                               
                            </li>
                            <li class="">
                                <a href="{{route('team')}}">Team</a>
                                
                            </li>
                            <li class="">
                                <a href="{{route('blog')}}">Blog</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        
                        <a href="{{route('donate')}}" class="careox-btn"><span><i class="icofont-heart"></i>Donate Now</span></a>
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->

        @yield('content')

        <footer class="main-footer background-black">
            <div class="main-footer__bg background-black" style="background-image: url(/assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
            <!-- /.main-footer__bg -->
            <div class="container">
                <div class="main-footer__top">
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="main-footer__top__left">
                                <div class="main-footer__top__left__icon"><i class="icon-messages"></i></div>
                                <h5 class="main-footer__top__left__title">Our Newslatter</h5>
                                <p class="main-footer__top__left__text">Subscribe to our latest updates and upcoming events</p>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <form action="#" data-url="MAILCHIMP_FORM_URL" class="main-footer__newsletter mc-form">
                                <input type="text" name="EMAIL" placeholder="Enter email address">
                                <button type="submit" class="fas fa-paper-plane">
                                    <span class="sr-only">submit</span><!-- /.sr-only -->
                                </button>
                            </form><!-- /.footer-widget__newsletter mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                        </div>
                    </div>
                </div>
            </div><!-- /.main-footer__top -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget footer-widget--about">
                            <a href="index.html" class="footer-widget__logo">
                                <img src="/assets/images/logo-light.png" width="223" alt="">
                            </a>
                            <p class="footer-widget__text">
                            Our mission is to uplift vulnerable communities through dedicated support and strategic initiatives.
                            </p>
                            <div class="footer-widget__box">
                                <div class="footer-widget__box__icon"><i class="icon-phone-call"></i></div>
                                <p class="footer-widget__box__text">Hotline 24/7 <a href="tel:+234 (0) 814 802 8900">+234 (0) 814 802 8900</a></p>
                            </div>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-2 wow fadeInUp" data-wow-delay="150ms">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">Thematic Focus</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="health.html">Health</a></li>
                                <li><a href="children.html">Vulnerable Children</a></li>
                                <li><a href="empowerment.html">Empowerment</a></li>
                                <li><a href="civic.html">Civic Engagement</a></li>
                                
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget footer-widget--links-two">
                            <h2 class="footer-widget__title">Quick Links</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="blog-list-right.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="250ms">
                        <div class="footer-widget footer-widget--contact">
                            <h2 class="footer-widget__title">Contact Info</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__info">
                                <li style="--accent-color: #A1CD46;">
                                    <span class="footer-widget__info__icon"><i class="icofont-clock-time"></i></span>
                                    Open Hours: Mon - Fri: 9.00 am. - 6.00 pm.
                                </li>
                                <li style="--accent-color: #A1CD46;">
                                    <span class="footer-widget__info__icon"><i class="icofont-location-pin"></i></span>
                                    12 Karaye Street Garki
                                </li>
                                <li style="--accent-color: #A1CD46;">
                                    <span class="footer-widget__info__icon"><i class="icofont-email"></i></span>
                                    <a href="mailto:help@samempowermentfoundation.org">help@samempowermentfoundation.org</a>
                                </li>
                            </ul><!-- /.list-unstyled -->
                            <div class="footer-widget__social">
                                <a href="https://facebook.com/" style="--accent-color: #37B1C1;">
                                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://twitter.com/" style="--accent-color: #37B1C1;">
                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://pinterest.com/" style="--accent-color: #37B1C1;">
                                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                    <span class="sr-only">Pinterest</span>
                                </a>
                                <a href="https://instagram.com/" style="--accent-color: #37B1C1;">
                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                            </div><!-- /.footer-widget__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="main-footer__bottom wow fadeInUp" data-wow-delay="300ms">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> Sam Empowerment Foundation.
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->


     </div>

     
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="/assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:help@samempoweremntfoundation.org">help@samempoweremntfoundation.org</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+@348148028900">0814 802  8900</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com/" style="--accent-color: #37B1C1;">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/" style="--accent-color: #37B1C1;">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://pinterest.com/" style="--accent-color: #37B1C1;">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com/" style="--accent-color: #37B1C1;">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="careox-btn">
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
   
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <script src="/cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/slick/slick.min.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- gsap js -->
    <script src="/assets/vendors/gsap/gsap.js"></script>
    <script src="/assets/vendors/gsap/scrolltrigger.min.js"></script>
    <script src="/assets/vendors/gsap/splittext.min.js"></script>
    <script src="/assets/vendors/gsap/main-split.js"></script>
    <!-- template js -->
    <script src="/assets/js/main.js"></script>

</body>
</html>