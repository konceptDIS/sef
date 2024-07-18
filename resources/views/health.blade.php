@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Health</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Our Focus</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="event-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="event-details__content">
                            <div class="event-details__image">
                                <img src="/assets/images/resources/event-details-health.jpg" alt="">
                            </div>
                            <h3 class="event-details__title">HEALTH</h3>
                            <p class="event-details__text">
                                We design and implement strategic interventions that reduce infant
                                mortality rates and child diseases such as pneumonia, diarrhea,
                                malnutrition, etc., conduct community immunization, prevent the spread
                                of HIV/AIDS, improve maternal health care, and sensitize the rural
                                communities on best practices that would ameliorate the spread of
                                endemic and non-communicable diseases. To realize these, we have
                                developed the Community Child Healthcare Initiative which is targeted at
                                the following:
                            </p>
                            <p class="event-details__text">
                               <ul>
                                <li>Conduct free community testing to ensure early detection of health
                                    conditions.
                                </li>
                                    <li>Conduct basic prevention activities such as deworming, and
                                        community sensitization on topical issues such as menstrual Hygiene
                                        management, WASH, and Mental Health.
                                    </li>
                                        <li>Carry out HIV/AIDS, Hepatitis, Fasting Blood Sugar, Blood Pressure
                                            testing and counseling services.
                                        </li>
                                        <li>Provide vitamins supplementation for children, pregnant and lactating
                                            mothers in communities
                                        </li>
                                        <li>Raise funds from individuals, organizations, and concerned agencies
                                            
                                        </li>

                               </ul>
                            </p>
                           
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
</div>
@endsection