@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Curriculum Development and Classroom Management Workshop</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><span>Events</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="event-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="event-details__content">
                            <div class="event-details__image">
                                <img src="/assets/images/resources/event-details-cdworkshop.jpg" alt="">
                            </div>
                            <h3 class="event-details__title">Curriculum Development and Classroom Management Workshop</h3>
                            <p class="event-details__text">
                            Our two-day workshop on Curriculum Development and Classroom Management brought together dedicated educators and facilitators to improve teaching and learning in practical ways. Participants took part in lively sessions that covered modern teaching methods, student-focused learning, classroom assessment, and 21st-century skills. Through group work and hands-on activities, they gained useful tools to apply in their classrooms. The atmosphere was full of energy and purpose. Educators shared ideas, took notes, and worked together to bring lessons to life. We sincerely thank all our facilitators, volunteers, and partners. Their support helped make this workshop a meaningful step toward better education in our communities 

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event-details__info">
                            <ul class="event-details__info__list">
                                <li>Start Time: <span>10:00am</span></li>
                                <li>Date: <span> 5th & 6th September 2024 </span></li>
                                <li>Category: <span>Event</span></li>
                                <li>Location: <span> IDP, Kuchingoro Games Village </span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-one">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-11-1.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-11-2.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-11-3.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-11-4.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.gallery-one -->



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