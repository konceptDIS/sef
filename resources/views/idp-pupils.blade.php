@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Back to School – A Message of Hope for IDP Pupils </h2>
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
                                <img src="/assets/images/resources/event-details-idp.jpg" alt="">
                            </div>
                            <h3 class="event-details__title">Back to School – A Message of Hope for IDP Pupils </h3>
                            <p class="event-details__text">
                            In a powerful show of resilience and hope, our recent Back to School campaign captured young pupils from the IDP community holding placards with welcome messages — a symbolic gesture that says, "Education is key”, “It’s another year of growth and learning”, “We are ready to learn, grow, and dream again." These children have witnessed the unimaginable: conflict, displacement, and the loss of their homes. Yet, despite it all, they stood with bright eyes and hopeful hearts, eager to return to the classroom — a place of safety, learning, and possibility. This campaign is more than just a photo moment. It's a reminder that education can be a lifeline — a tool for healing, rebuilding, and imagining a future beyond crisis. We celebrate the courage of these children and reaffirm our commitment to supporting their educational journey, no matter the challenges. 
                        </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event-details__info">
                            <ul class="event-details__info__list">
                                <li>Start Time: <span>10:00am</span></li>
                                <li>Date: <span> 15th January 2025 </span></li>
                                <li>Category: <span>Event</span></li>
                                <li>Location: <span>FCT, Abuja</span></li>
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
                            <img src="/assets/images/gallery/gallery-9-1.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-9-2.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-9-3.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-9-4.jpg" alt="">

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