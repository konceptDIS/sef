@extends('layout')

@section('content')
<div class="page-wrapper">
    <!-- main-slider-start -->
    <section class="main-slider-two">
            <div class="main-slider-two__carousel careox-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
		"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"margin": 0
		}'>
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-two__bg" style="background-image: url(/assets/images/backgrounds/slider-2-1.jpg);"></div>
                        <div class="main-slider-two__shape-one"><img src="/assets/images/shapes/slider-2-shape-1.png" alt=""></div>
                        <div class="main-slider-two__shape-three"><img src="/assets/images/shapes/slider-2-shape-3.png" alt=""></div>
                        <div class="main-slider-two__overlay"></div>
                        <div class="container">
                            <div class="main-slider-two__content">
                                <h2 class="main-slider-two__title">
                                    <span class="main-slider-two__title__text">Empowering <span>Children</span> Through</span><br>
                                    <span class="main-slider-two__title__text">Comprehensive Support</span><br>
                                    <span class="main-slider-two__title__text">Services</span>
                                </h2><!-- slider-title -->
                                <p class="main-slider-two__text">
                               We are providing holistic care, education, and guidance to empower children for a brighter future.
                                </p>
                                <div class="main-slider-two__btn">
                                    <a href="{{route('about')}}" class="careox-btn"><span>See More</span></a><!-- slider-btn -->
                                </div>
                                <a href="#" class="video-popup">
                                    <i class="icon-play-button"></i>
                                    <i class="ripple"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-two__bg" style="background-image: url(/assets/images/backgrounds/slider-2-2.jpg);"></div>
                        <div class="main-slider-two__shape-one"><img src="/assets/images/shapes/slider-2-shape-1.png" alt=""></div>
                        <div class="main-slider-two__shape-three"><img src="/assets/images/shapes/slider-2-shape-3.png" alt=""></div>
                        <div class="main-slider-two__overlay"></div>
                        <div class="container">
                            <div class="main-slider-two__content">
                                <h2 class="main-slider-two__title">
                                    <span class="main-slider-two__title__text">Addressing <span>Health </span>Through </span><br>
                                    <span class="main-slider-two__title__text">Targeted Sensitization</span><br>
                                    <span class="main-slider-two__title__text">Programs</span>
                                </h2><!-- slider-title -->
                                <p class="main-slider-two__text">
                                We promote wellness and awareness with tailored programs for healthier, informed communities.
                                </p>
                                <div class="main-slider-two__btn">
                                    <a href="{{route('about')}}" class="careox-btn"><span>See More</span></a><!-- slider-btn -->
                                </div>
                                <a href="#" class="video-popup">
                                    <i class="icon-play-button"></i>
                                    <i class="ripple"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="main-slider-two__item">
                        <div class="main-slider-two__bg" style="background-image: url(/assets/images/backgrounds/slider-2-3.jpg);"></div>
                        <div class="main-slider-two__shape-one"><img src="/assets/images/shapes/slider-2-shape-1.png" alt=""></div>
                        <div class="main-slider-two__shape-three"><img src="/assets/images/shapes/slider-2-shape-3.png" alt=""></div>
                        <div class="main-slider-two__overlay"></div>
                        <div class="container">
                            <div class="main-slider-two__content">
                                <h2 class="main-slider-two__title">
                                    <span class="main-slider-two__title__text">Empowering <span>Women</span> with Culturally</span><br>
                                    <span class="main-slider-two__title__text">Sensitive skills &</span><br>
                                    <span class="main-slider-two__title__text">Income Opportunities</span>
                                </h2><!-- slider-title -->
                                <p class="main-slider-two__text">
                                We are building independence and resilience through tailored skills and income-generating opportunities for women.
                                </p>
                                <div class="main-slider-two__btn">
                                    <a href="{{route('about')}}" class="careox-btn"><span>See More</span></a><!-- slider-btn -->
                                </div>
                                <a href="#" class="video-popup">
                                    <i class="icon-play-button"></i>
                                    <i class="ripple"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- item -->
            </div>
        </section>
        <!-- main-slider-end -->

        <section class="about-one">
            <div class="about-four__shape"><img src="/assets/images/shapes/about-4-shape-1.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__image wow fadeInLeft" data-wow-delay="100ms">
                            <div class="about-one__image__one">
                                <img src="/assets/images/resources/about-1-1.jpg" alt="">
                            </div>
                            <div class="about-one__image__two">
                                <img src="/assets/images/resources/about-1-2.jpg" alt="">
                                <div class="about-one__image__video">
                                    <a href="#" class="video-popup">
                                        <i class="icofont-ui-play"></i></a>Take a Tour
                                </div>
                            </div>
                            
                            <div class="about-one__image__shape-two"><img src="/assets/images/shapes/about-1-shape-2.png" alt=""></div>
                            <div class="about-one__image__shape-three"><img src="/assets/images/shapes/about-1-shape-3.png" alt=""></div>
                        </div><!-- /.about__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>ABOUT US</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Enhancing the Quality of Life of vulnerable Groups is Our Core Motivation</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__content__text">
                                Sam Empowerment Foundation (SEF) is a structured NGO based in Abuja, Nigeria, dedicated to providing humanitarian services to vulnerable groups. Registered with the Corporate Affairs Commission (CAC/IT/NO 70103), SEF employs professionals skilled in community mobilization on issues such as HIV/AIDS, Malaria, Nutrition, Menstrual Hygiene, Sexual and Gender-Based Violence (SGBV), and Water and Sanitation Hygiene (WASH).
                            </p>
                            
                            <div class="about-one__content__border"></div>
                            <ul class="about-one__content__list">
                                <li>
                                    <span class="about-one__content__list__icon"><i class="icofont-check-circled"></i></span>
                                    We help companies develop powerful corporate social <a href="about.html">Responsibility,</a>
                                </li>
                                <li>
                                    <span class="about-one__content__list__icon"><i class="icofont-check-circled"></i></span>
                                    We have successfully completed over 100 outreach projects
                                </li>
                            </ul>
                            <a href="{{route('about')}}" class="careox-btn"><span>See More</span></a>
                        </div><!-- /.about__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="about-one__text wow fadeInUp"><span>#</span> We support economic empowerment through strategic initiatives <a href="donation.html" class="careox-btn"><span>Donate Now</span></a></div>
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <!-- Service Start -->
        <section class="service-two">
            <div class="service-two__shape" style="background-image: url(assets/images/shapes/service-shape-3.png);"></div>
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>OUR FOCUS</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">To actualize our vision, mission, and objectives, <br> we have the following initiatives</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="service-two__item text-center" style="--accent-color: #37B1C1;">
                            <div class="service-two__item__shape" style="background-image: url(/assets/images/shapes/service-two-shape.png);"></div>
                            <div class="service-two__item__image">
                                <img src="/assets/images/resources/service-2-1.jpg" alt="">
                            </div>
                            <div class="service-two__item__icon">
                                <span class="icon-generous"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__item__title">HEALTH</h3><!-- /.service-title -->
                            <p class="service-two__item__text">
                                We design and implement strategic interventions that reduce infant mortality rates & child diseases such as pneumonia,..
                            </p><!-- /.service-title -->
                            <div class="service-two__item__rm">
                                <a href="{{route('health')}}">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="service-two__item text-center" style="--accent-color: #37B1C1;">
                            <div class="service-two__item__shape" style="background-image: url(/assets/images/shapes/service-two-shape.png);"></div>
                            <div class="service-two__item__image">
                                <img src="/assets/images/resources/service-2-2.jpg" alt="">
                            </div>
                            <div class="service-two__item__icon">
                                <span class="icon-zakat"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__item__title">VULNERABLE CHILDREN</h3><!-- /.service-title -->
                            <p class="service-two__item__text">
                                We ensure the survival and enhance the quality of life of identified orphaned & vulnerable children by..
                            </p><!-- /.service-title -->
                            <div class="service-two__item__rm">
                                <a href="{{route('children')}}">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="service-two__item text-center" style="--accent-color: #37B1C1;">
                            <div class="service-two__item__shape" style="background-image: url(/assets/images/shapes/service-two-shape.png);"></div>
                            <div class="service-two__item__image">
                                <img src="/assets/images/resources/service-2-3.jpg" alt="">
                            </div>
                            <div class="service-two__item__icon">
                                <span class="icon-zakat-two"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__item__title">EMPOWERMENT</h3><!-- /.service-title -->
                            <p class="service-two__item__text">
                                We provide intervention programs that would enhance the skills and economic standing of beneficiaries,..
                            </p><!-- /.service-title -->
                            <div class="service-two__item__rm">
                                <a href="{{route('empowerment')}}">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="service-two__item text-center" style="--accent-color: #37B1C1">
                            <div class="service-two__item__shape" style="background-image: url(assets/images/shapes/service-two-shape.png);"></div>
                            <div class="service-two__item__image">
                                <img src="/assets/images/resources/service-2-4.jpg" alt="">
                            </div>
                            <div class="service-two__item__icon">
                                <span class="icon-charity-three"></span>
                            </div><!-- /.service-icon -->
                            <h3 class="service-two__item__title">CIVIC <br> ENGAGEMENT</h3><!-- /.service-title -->
                            <p class="service-two__item__text">
                                This focus is geared towards promoting Social Behavioral & Communication Change,..
                            </p><!-- /.service-title -->
                            <div class="service-two__item__rm">
                                <a href="{{route('civic')}}">Read More</a>
                                <i class="icon-right-arrow"></i>
                            </div>
                        </div><!-- /.service-card-one -->
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Service End -->

        <section class="event-one">
            <div class="event-one__bg" style="background-image: url(/assets/images/backgrounds/event-bg-1.jpg);"></div>
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our Event</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Our Upcoming Event</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30 masonry-layout">
                    <div class="col-xl-4 col-md-6">
                        <div class="event-one__item">
                            <img src="/assets/images/events/event-1-1.jpg" alt="">
                            <a href="#" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('charity_ball')}}">SEF Charity Ball</a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i> Feb 2024</li>
                                    <li><i class="icofont-location-pin"></i>FCT, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="col-xl-4 col-md-6">
                        <div class="event-one__item">
                            <img src="/assets/images/events/event-1-2.jpg" alt="">
                            <a href="#" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('sallah_party')}}">SEF Sallah Party</a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>April 2024</li>
                                    <li><i class="icofont-location-pin"></i>FCT, Orozo</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="col-xl-4 col-md-6">
                        <div class="event-one__item">
                            <img src="/assets/images/events/event-1-3.jpg" alt="">
                            <a href="#" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="#"></a>Ushafa Medical Outreach</h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>Nov 2023</li>
                                    <li><i class="icofont-location-pin"></i>FCT, Ushafa</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="col-xl-4 col-md-6">
                        <div class="event-one__item">
                            <img src="/assets/images/events/event-1-5.jpg" alt="">
                            <a href="#" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="#">Stakeholders Workshop</a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>Aug 2023</li>
                                    <li><i class="icofont-location-pin"></i>Nasarawa, Lafia</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="col-xl-4 col-md-6">
                        <div class="event-one__item">
                            <img src="/assets/images/events/event-1-4.jpg" alt="">
                            <a href="#" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="#"></a>Psychosocial Intervention</h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>May 2023</li>
                                    <li><i class="icofont-location-pin"></i>New Kuchiguro, IDP Camp</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="col-xl-4 col-md-6">
                        <div class="event-one__item">
                            <img src="/assets/images/events/event-1-6.jpg" alt="">
                            <a href="event-details.html" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="#"></a>Sensitization Workshop on
                                    Menstrual Hygiene</h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"> </i>Oct 2022</li>
                                    <li><i class="icofont-location-pin"></i>FCT, Gbuape & Orozo</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                </div>
            </div>
        </section>

        <section class="donate-three" style="margin-top: 150px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="donate-three__carousel careox-owl__carousel owl-carousel" data-owl-options='{
					"items": 2,
					"margin": 30,
					"loop": false,
					"smartSpeed": 700,
					"nav": false,
					"navText": ["<span class=\"icon-up-arrow-two\"></span>","<span class=\"icon-down-arrow-two\"></span>"],
					"dots": false,
					"autoplay": true,
					"responsive": {
						"0": {
							"items": 1
						},
						"500": {
							"items": 2
						}
					}
					}'>
                            <div class="item">
                                <div class="donate-three__support">
                                    <img src="/assets/images/resources/support-1-1.jpg" alt="">
                                    <div class="donate-three__support__content">
                                        <h3 class="donate-three__support__title">Food Support</h3>
                                        <!-- /.donate-three__support__title -->
                                        <div class="donate-three__support__collected"><span>Target $1M</span></div>
                                        <!-- /.donate-three__support__collected -->
                                    </div>
                                </div><!-- /.donate-three__support -->
                            </div>
                            <div class="item">
                                <div class="donate-three__support">
                                    <img src="/assets/images/resources/support-1-2.jpg" alt="">
                                    <div class="donate-three__support__content">
                                        <h3 class="donate-three__support__title">Medical Support</h3>
                                        <!-- /.donate-three__support__title -->
                                        <div class="donate-three__support__collected"><span>Target $1M</span></div>
                                        <!-- /.donate-three__support__collected -->
                                    </div>
                                </div><!-- /.donate-three__support -->
                            </div>
                            <div class="item">
                                <div class="donate-three__support">
                                    <img src="/assets/images/resources/support-1-3.jpg" alt="">
                                    <div class="donate-three__support__content">
                                        <h3 class="donate-three__support__title">Education Support</h3>
                                        <!-- /.donate-three__support__title -->
                                        <div class="donate-three__support__collected"><span>Target $1M</span></div>
                                        <!-- /.donate-three__support__collected -->
                                    </div>
                                </div><!-- /.donate-three__support -->
                            </div>
                            <div class="item">
                                <div class="donate-three__support">
                                    <img src="/assets/images/resources/support-1-4.jpg" alt="">
                                    <div class="donate-three__support__content">
                                        <h3 class="donate-three__support__title">Empowerment </h3>
                                        <!-- /.donate-three__support__title -->
                                        <div class="donate-three__support__collected"><span>Target $1M</span></div>
                                        <!-- /.donate-three__support__collected -->
                                    </div>
                                </div><!-- /.donate-three__support -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="donate-three__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>HELP & DONATION</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Become a Partner Now</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <form action="#" class="donate-three__form">
                                <div class="donate-three__form__amount">
                                    <span class="donate-three__form__amount__sign">$</span>
                                    <input type="text" value="200" name="donate_amount" id="donate_amount" placeholder="Amount" class="donate-three__form__amount__input">
                                </div><!-- /.donate-three__form__amount__box -->
                                <div class="donate-three__form__buttons">
                                    <button type="button" class="donate-three__form__buttons__item">$<span class="donate-three__form__buttons__amount">100</span></button>
                                    <button type="button" class="donate-three__form__buttons__item active">$<span class="donate-three__form__buttons__amount">200</span></button>
                                    <button type="button" class="donate-three__form__buttons__item">$<span class="donate-three__form__buttons__amount">500</span></button>
                                    <button type="button" class="donate-three__form__buttons__item">$<span class="donate-three__form__buttons__amount">300</span></button>
                                    <button type="button" class="donate-three__form__buttons__item">Custom</button>
                                </div><!-- /.donate-three__form__amount__buttons -->
                                <div class="donate-three__form__submit">
                                    <button type="submit" class="careox-btn"><span>Donate Now</span></button>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>News & articles</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Latest Updates <br> and Stories</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-lg-5">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #37B1C1;'>
                            <div class="blog-card__image">
                                <img src="/assets/images/blog/blog-1-1.jpg" alt="">
                                <img src="/assets/images/blog/blog-1-1.jpg" alt="">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, blanditiis.</span>
                                    <!-- /.sr-only --></a>
                                <div class="blog-card__date"><i class="icofont-ui-calendar"></i>02 Sep 2024</div><!-- /.blog-card__date -->
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><img src="/assets/images/blog/blog-author-1-1.jpg" alt="">Admin: Lorat</a></li>
                                    
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">
                                    We poor standard chunk nibh velit majority suffered alteration in some form aliquet sollic tudin.
                                </p><!-- /.blog-card__text -->
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                    <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="col-lg-7">
                        <div class="blog-card blog-card--reverse wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #37B1C1;'>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><img src="/assets/images/blog/blog-author-1-1.jpg" alt="">Admin: Lorat</a></li>
                                    
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Lorem ipsum dolor sit amet consectetur.</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, dolorem.
                                </p><!-- /.blog-card__text -->
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                    <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__image">
                                <img src="/assets/images/blog/blog-1-2.jpg" alt="">
                                <img src="/assets/images/blog/blog-1-2.jpg" alt="">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                        </div><!-- /.blog-card -->
                        <div class="blog-card blog-card--reverse wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='150ms' style='--accent-color: #37B1C1;'>
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="blog-list-right.html"><img src="/assets/images/blog/blog-author-1-1.jpg" alt="">Admin: Lorat</a></li>
                                    
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title"><a href="blog-details-right.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3><!-- /.blog-card__title -->
                                <p class="blog-card__text">
                                    We poor standard chunk ofI nibh velit auctor aliquet sollic tudin.
                                </p><!-- /.blog-card__text -->
                                <a href="blog-details-right.html" class="blog-card__link">
                                    <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                    <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                            <div class="blog-card__image">
                                <img src="/assets/images/blog/blog-1-3.jpg" alt="">
                                <img src="/assets/images/blog/blog-1-3.jpg" alt="">
                                <a href="blog-details-right.html" class="blog-card__image__link"><span class="sr-only">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo, doloremque?</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-one--page -->

        <section class="cta-two">
            <div class="cta-two__shape" style="background-image: url(/assets/images/shapes/cta-2-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span class=""></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Let’s Make a Difference</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                    <div class="col-md-5">
                        <div class="cta-two__button">
                            <img src="/assets/images/shapes/arrow-1.png" alt="">
                            <a href="contact.html" class="careox-btn"><span>Become A Volunteer</span></a>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.cta-two -->
</div>
@endsection