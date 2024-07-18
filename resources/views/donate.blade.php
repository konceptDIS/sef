@extends('layout')

@section('content')
    <div class="page-wrapper">
    <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Donate</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Donate</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="donate-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="donate-page__content">
                            <!-- <div class="donate-page__notice">
                                <div class="donate-page__notice__icon"><i class="icofont-alarm"></i></div>
                                <span>Notice:</span> Test mode is enabled. While in test mode no live donations are processed.
                            </div> -->
                            <form action="#" class="donate-page__form">
                                <div class="donate-page__form__amount">
                                    <span class="donate-page__form__amount__sign">$</span>
                                    <input type="text" value="300" name="donate_amount" id="donate_amount" placeholder="Amount" class="donate-page__form__amount__input">
                                </div><!-- /.donate-page__form__amount__box -->
                                <div class="donate-page__form__buttons">
                                    <button type="button" class="donate-page__form__buttons__item">$<span class="donate-page__form__buttons__amount">10</span></button>
                                    <button type="button" class="donate-page__form__buttons__item">$<span class="donate-page__form__buttons__amount">30</span></button>
                                    <button type="button" class="donate-page__form__buttons__item">$<span class="donate-page__form__buttons__amount">50</span></button>
                                    <button type="button" class="donate-page__form__buttons__item">$<span class="donate-page__form__buttons__amount">100</span></button>
                                    <button type="button" class="donate-page__form__buttons__item active">$<span class="donate-page__form__buttons__amount">300</span></button>
                                    <button type="button" class="donate-page__form__buttons__item">Custom Amount</button>
                                </div><!-- /.donate-page__form__amount__buttons -->
                                <div class="donate-page__form__payment">
                                    <h3 class="donate-page__form__title">Select Payment Method</h3><!-- /.donate-page__form__title -->
                                    <div class="donate-page__form__payment__method">
                                        <div class="donate-page__form__payment__method__item">
                                            <input type="radio" id="account" name="donation" checked>
                                            <label for="account">Debit Card<span></span></label>
                                        </div>
                                        <div class="donate-page__form__payment__method__item">
                                            <input type="radio" id="ship" name="donation">
                                            <label for="ship">Bank Transfer<span></span></label>
                                        </div>
                                    </div>
                                </div><!-- /.donate-page__form__payment -->
                                <div class="donate-page__form__info form-one">
                                    <h3 class="donate-page__form__title">Personal Info</h3><!-- /.donate-page__form__title -->
                                    <div class="form-one__group">
                                        <div class="form-one__control">
                                            <input type="text" name="name" placeholder="Your Name">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control">
                                            <input type="email" name="email" placeholder="Your Email">
                                        </div><!-- /.form-one__control -->
                                        <div class="form-one__control form-one__control--full">
                                            <input type="text" name="address" placeholder="Address">
                                        </div><!-- /.form-one__control -->
                                    </div><!-- /.form-one__group -->
                                    <div class="donate-page__form__donate-amount">Donation Total: <span>$322</span></div>
                                    <button type="submit" class="careox-btn"><span>Donate Now</span></button>
                                </div><!-- /.donate-page__form__info -->
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="donate-page__sidebar">
                            <div class="donations-one__carousel careox-owl__carousel owl-carousel" data-owl-options='{
						"items": 1,
						"margin": 0,
						"loop": false,
						"smartSpeed": 700,
						"nav": false,
						"navText": ["<span class=\"icon-up-arrow-two\"></span>","<span class=\"icon-down-arrow-two\"></span>"],
						"dots": false,
						"autoplay": true
						}'>
                                <div class="item">
                                    <div class="donations-one__item" style="--accent-color: #201E1E;">
                                        <div class="donations-one__item__image">
                                            <img src="/assets/images/donation/donation-1-1.jpg" alt="">
                                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                           
                                        </div>
                                        <div class="donations-one__item__content">
                                            <h3 class="donations-one__item__title"><a href="donate.html">We reduce infant
                                                mortality rates and child diseases </a></h3>
                                            <p class="donations-one__item__text">such as pneumonia, diarrhea,
                                                malnutrition, etc., conduct community immunization, prevent the spread
                                                of HIV/AIDS.</p>
                                            <a class="donations-one__item__rm" href="donate.html"><i class="icon-right-arrow"></i></a>
                                        </div>
                                        
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donations-one__item" style="--accent-color: #201E1E;">
                                        <div class="donations-one__item__image">
                                            <img src="/assets/images/donation/donation-1-2.jpg" alt="">
                                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                            
                                        </div>
                                        <div class="donations-one__item__content">
                                            <h3 class="donations-one__item__title"><a href="donate.html">We enhance the quality of life of identified
                                                orphaned and vulnerable children</a></h3>
                                            <p class="donations-one__item__text"> by strengthening the capacity of
                                                caregivers through interventions in Health, Education, Household
                                                Economic Strengthening, Shelter, Psychosocial Support, Nutrition, and
                                                WASH.</p>
                                            <a class="donations-one__item__rm" href="donate.html"><i class="icon-right-arrow"></i></a>
                                        </div>

                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donations-one__item" style="--accent-color: #201E1E;">
                                        <div class="donations-one__item__image">
                                            <img src="/assets/images/donation/donation-1-3.jpg" alt="">
                                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                            
                                        </div>
                                        <div class="donations-one__item__content">
                                            <h3 class="donations-one__item__title"><a href="donate.html">We provide intervention programs that would enhance the skills and economic standing of beneficiaries</a></h3>
                                            <p class="donations-one__item__text">We bridge the economic disparity women and
                                                youths face.</p>
                                            <a class="donations-one__item__rm" href="donate.html"><i class="icon-right-arrow"></i></a>
                                        </div>
                                       
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="donations-one__item" style="--accent-color: #201E1E;">
                                        <div class="donations-one__item__image">
                                            <img src="/assets/images/donation/donation-1-4.jpg" alt="">
                                            <a href="donation-details.html" class="donations-one__item__image__link"></a>
                                            
                                        </div>
                                        <div class="donations-one__item__content">
                                            <h3 class="donations-one__item__title"><a href="donate.html">We promote Social Behavioral and Communication
                                                Change</a></h3>
                                            <p class="donations-one__item__text">engage in Voters’
                                                Education, Mentoring, Peace Building, and Development.</p>
                                            <a class="donations-one__item__rm" href="donate.html"><i class="icon-right-arrow"></i></a>
                                        </div>
                                        
                                    </div>
                                </div><!-- /.item -->
                            </div><!-- /.donations-one__slider -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

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