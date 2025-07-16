@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left"> A Gift of Purpose – Celebrating 51 Years with Impact </h2>
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
                                <img src="/assets/images/resources/event-details-paulonoja.jpg" alt="">
                            </div>
                            <h3 class="event-details__title">A Gift of Purpose – Celebrating 51 Years with Impact </h3>
                            <p class="event-details__text">
                            In celebration of her 51st birthday, Dr. Mrs. Asha Achimugu, President and Founder of the Sam  Empowerment Foundation (SEF), chose to mark the day not with friends alone, but with a powerful act of compassion that changed a life forever. While visiting the Asokoro District Hospital, she encountered Paul Onoja, a helpless and displaced individual wandering the hospital premises. Paul, overwhelmed with emotion, shared his story — he had no place to live and longed for something meaningful to keep his hands busy. He humbly mentioned his past experience in bike delivery and his desire to return to honest work. Moved by his honesty and brokenness, Dr. Asha responded with swift kindness:<br> A brand new bike was gifted to Paul to help him restart his delivery career <br> He was also supported with ₦2,000,000 to secure accommodation and regain stability <br> Paul wept, not from despair this time, but from gratitude and renewed hope. This heartfelt gesture reflects the true spirit of SEF — empowering individuals with dignity, opportunity, and love. Dr. Asha’s birthday became a beacon of hope, not just for Paul, but for all who believe in the power of second chances.
                        </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event-details__info">
                            <ul class="event-details__info__list">
                                <li>Start Time: <span>4:00pm</span></li>
                                <li>Date: <span>29th Jan 2025</span></li>
                                <li>Category: <span>Event</span></li>
                                <li>Location: <span>Jabi, Abuja</span></li>
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
                            <img src="/assets/images/gallery/gallery-8-1.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-8-2.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-8-3.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-8-4.jpg" alt="">

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