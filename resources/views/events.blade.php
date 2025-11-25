@extends('layout')

@section('content')
<div class="page-wrapper">
       <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Events</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><span>Events</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <section class="event-one event-one--page">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Our Events</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Our Events</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="event-two" style="margin-bottom:30px">
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-13.jpg" alt="sef">
                            <a href="{{route('ramadan-food-bank')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('ramadan-food-bank')}}">Ramadan Food Bank – A Month of Compassion and Community </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>01 - 30 March 2025 </li>
                                    <li><i class="icofont-location-pin"></i>FCT, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-14.jpg" alt="sef">
                            <a href="{{route('idd')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('idd')}}">International Day of Discrimination  </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>01 Mar 2025</li>
                                    <li><i class="icofont-location-pin"></i>FCT, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-15.jpg" alt="sef">
                            <a href="{{route('lea-scholarship')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('lea-scholarship')}}">Education Empowered – Scholarship Support for 416 Pupils </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>10 Feb 2025 </li>
                                    <li><i class="icofont-location-pin"></i>Jahi, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    
                </div>
                <div class="event-two" style="margin-bottom:30px">
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-17.jpg" alt="sef">
                            <a href="{{route('paul-onoja')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('paul-onoja')}}">A Gift of Purpose – Celebrating 51 Years with Impact</a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>29 Jan 2025</li>
                                    <li><i class="icofont-location-pin"></i>Fct, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-16.jpg" alt="sef">
                            <a href="{{route('mik')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('mik')}}">Medical Intervention – Kiwoyi Community  </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>28 Feb 2025</li>
                                    <li><i class="icofont-location-pin"></i>Kiwoyi, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-18.jpg" alt="sef">
                            <a href="{{route('idp-pupils')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('idp-pupils')}}">Back to School – A Message of Hope for IDP Pupils  </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i> 15 Jan 2025 </li>
                                    <li><i class="icofont-location-pin"></i>Fct, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    
                </div>
                <div class="event-two">
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-7.jpg" alt="sef">
                            <a href="{{route('gauraka-fb')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('gauraka-fb')}}">Gauraka Food Bank Outreach </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>8th November 2024 </li>
                                    <li><i class="icofont-location-pin"></i>Gauraka, Niger State </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-8.jpg" alt="sef">
                            <a href="{{route('cd-workshop')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('cd-workshop')}}">Curriculum Development and Classroom Management Workshop  </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i>5th & 6th September 2024</li>
                                    <li><i class="icofont-location-pin"></i>IDP, Kuchingoro Games Village</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    <div class="item">
                        <div class="event-one__item">
                            <img src="assets/images/events/event-1-9.jpg" alt="sef">
                            <a href="{{route('maraba-fb')}}" class="event-one__item__rm"><i class="icon-right-arrow"></i></a>
                            <div class="event-one__item__content">
                                <h3 class="event-one__item__title"><a href="{{route('maraba-fb')}}">Eid-El-Kabir Outreach – Mararaba Food Bank for Widows  </a></h3>
                                <ul class="event-one__item__meta">
                                    <li><i class="icofont-ui-calendar"></i> 18th June, 2024 </li>
                                    <li><i class="icofont-location-pin"></i>Maraba, Abuja</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--item-->
                    
                </div>
            </div>
        </section>

</div>  
@endsection