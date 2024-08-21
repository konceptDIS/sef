@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">SEF Sallah Party</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
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
                                <img src="/assets/images/resources/event-details-sallah.jpg" alt="">
                            </div>
                            <h3 class="event-details__title">SEF Sallah Party</h3>
                            <p class="event-details__text">
                               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, provident adipisci? Consectetur numquam omnis doloremque et mollitia at laborisam id libero est quae quos amet beatae excepturi minus, ex tenetur quas recusandae dicta dolore enim tempore blanditiis vero nesciunt? Voluptatum dolor amet modi at natus ipsum, vitae, quia quae, aliquam accusantium cum fuga autem! Assumenda, alias quia. Vel sunt atque ad maxime sequi possimus suscipit provident, amet, adipisci, velit consectetur dolorum. Modi, cum beatae vero consequuntur, quaerat, cumque esse animi commodi fuga molestiae magnam optio mollitia doloribus id sed! A praesentium sapiente ipsum. Totam at exercitationem voluptatibus error inventore animi.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event-details__info">
                            <ul class="event-details__info__list">
                                <li>Start Time: <span>8:00pm</span></li>
                                <li>Date: <span>April, 2024</span></li>
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
                            <img src="/assets/images/gallery/gallery-3-1.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-3-3.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-3-4.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-3-5.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-3-6.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-3-7.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-3-8.jpg" alt="">

                        </div><!-- /.gallery-one__card -->
                    </div><!-- /.col-md-6 col-lg-4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="gallery-one__card">
                            <img src="/assets/images/gallery/gallery-3-10.jpg" alt="">

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
