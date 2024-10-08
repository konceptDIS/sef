@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Contact Page</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Contact</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one contact-one--page">
            <div class="contact-one__shape" style="background-image: url(/assets/images/shapes/contact-1-shape-2.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="contact-one__image">
                            <div class="contact-one__image__shape" style="background-image: url(/assets/images/shapes/contact-1-shape-1.png);"></div>
                            <img src="/assets/images/resources/contact-1-1.png" alt="c">
                            <div class="contact-one__image__icon"><img src="/assets/images/shapes/icon-1.png" alt=""></div>
                            <div class="contact-one__image__info">
                                <div class="contact-one__image__info__icon"><i class="icofont-phone-circle"></i></div>
                                <p class="contact-one__image__info__title">Need Help?</p>
                                <p class="contact-one__image__info__text"><a href="tel:+2348148028900">0814 802 8900</a></p>
                            </div>
                        </div>
                    </div><!-- /.col-xl-5 -->
                    <div class="col-xl-7">
                        <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="{{ route('contact') }}" method="POST">
                        @csrf
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__border"></span>Contact Us </h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Got Questions? <br>Send Us a Message</h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="contact-one__text">
                                If you have any questions or are interested in becoming a volunteer, our team is always available and ready to assist you. Your support and involvement can make a significant difference in the lives of those we serve.
                            </p>
                            <div class="form-one__group">
                                <div class="form-one__control">
                                    <input type="text" id="name" name="name" placeholder="First Name">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control">
                                    <input type="text" id="lastname" name="lastname" placeholder="Last Name">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control">
                                    <input type="tel" id="phone" name="phone" placeholder="Phone No">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control">
                                <input type="email" id="email" name="email" placeholder="Email Address">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <textarea id="message" name="message" placeholder="Write  a Message"></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="careox-btn"><span>Send Request</span></button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div><!-- /.col-xl-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

</div>
@endsection