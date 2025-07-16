@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Kiwoyi Medical Intervention</h2>
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
                                <img src="/assets/images/resources/event-details-mik.jpg" alt="">
                            </div>
                            <h3 class="event-details__title">Kiwoyi Medical Intervention</h3>
                            <p class="event-details__text">
                            In Kwoyi, access to healthcare remains a pressing challenge. On 28th February, 2025, our  medical team launched a full-day Medical Outreach Intervention, delivering free consultations, vital screenings, medications, and referrals to hundreds of residents. From elderly villagers receiving blood pressure checks to children getting treated for preventable conditions, every moment echoed our mission: health is a human right. With the support of volunteer doctors, nurses, and coordinators, lives were touched, ailments were addressed, and trust was built. The success of this intervention underscores the urgent need for sustainable healthcare access in remote communities. 
                        </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event-details__info">
                            <ul class="event-details__info__list">
                                <li>Start Time: <span>10:00am</span></li>
                                <li>Date: <span>28th Feb 2025</span></li>
                                <li>Category: <span>Event</span></li>
                                <li>Location: <span> Kiwoyi Village, FCT </span></li>
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
                            <img src="/assets/images/gallery/gallery-6-1.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-6-2.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-6-3.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-6-4.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-6-5.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-6-6.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-6-7.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-6-8.jpg" alt="">

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