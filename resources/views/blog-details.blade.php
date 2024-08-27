@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Blog</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/b/{{$post->link}}">Blog</a></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-details">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-8">
                        <div class="blog-details__content">
                            <div class="blog-details__image">
                                <img src="{{ asset('/storage/images/'.$post->thumbnail) }}" alt="{{$post->title}}" style="height: 350px; width: 100%; object-fit: cover; border-radius: 20px">
                            </div><!-- /.blog-card__image -->
                            <ul class="list-unstyled blog-details__top-meta">
                                <li class="blog-details__top-meta__cats"><a href="blog-grid.html">{{$post->category->title}}</a></li>
                                <li>
                                    <a href="#">
                                        <img src="https://ui-avatars.com/api/?name={{$post->user->first_name . '+' .$post->user->last_name}}" alt="">Author: {{$post->user->first_name}} {{$post->user->last_name}}
                                    </a>
                                </li>
                                {{-- <li><i class="icofont-comment"></i>Comment (5)</li> --}}
                                <li><i class="icofont-ui-calendar"></i>{{$post->created_at->format('j M, Y')}}</li>
                            </ul><!-- /.list-unstyled blog-card__top-meta -->
                            <h3 class="blog-details__title">{{$post->title}}</h3>
                            <p class="blog-details__text">
                                {!!$post->content!!}
                            </p><!-- /.blog-details__text -->

                            <div class="blog-details__meta">
                                <div class="blog-details__tags">
                                    <h4 class="blog-details__tags__title">Tags</h4><!-- /.blog-details__tags__title -->
                                    <div class="sidebar__tags">
                                        @foreach ($tags as $tag)
                                            <a href="javascript:void(0);">{{ trim($tag) }}</a>
                                        @endforeach
                                    </div><!-- /.sidebar__projects -->
                                </div><!-- /.blog-details__tags -->
                                <div class="blog-details__social">
                                    <a href="https://facebook.com/" style="--accent-color: #ffa415;">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com/" style="--accent-color: #fc5528;">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://pinterest.com/" style="--accent-color: #8139e7;">
                                        <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                        <span class="sr-only">Pinterest</span>
                                    </a>
                                    <a href="https://instagram.com/" style="--accent-color: #44c895;">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.blog-details__social -->
                            </div><!-- /.blog-details__meta -->
                        </div><!-- /.blog-details -->

                        {{-- <div class="comments-one">
                            <h3 class="comments-one__title">2 comments</h3><!-- /.comments-one__title -->
                            <ul class="list-unstyled comments-one__list">
                                <li class="comments-one__card">
                                    <div class="comments-one__card__image">
                                        <img src="/assets/images/blog/blog-comment-1-1.jpg" alt="">
                                    </div><!-- /.comments-one__card__image -->
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">Kevin Martin <span class="comments-one__card__date">March 20, 2023 at 1:37 pm</span></h3><!-- /.comments-one__card__title -->
                                        <p class="comments-one__card__text">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia
                                            nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.
                                        </p><!-- /.comments-one__card__text -->
                                        <div class="comments-one__card__btn">
                                            <a href="blog-details-right.html" class="careox-btn comments-one__card__reply"><span>Reply</span></a>
                                        </div><!-- /.comments-one__card__btn -->
                                    </div><!-- /.comments-one__card__content -->
                                </li><!-- /.comments-one__card -->
                                <li class="comments-one__card">
                                    <div class="comments-one__card__image">
                                        <img src="/assets/images/blog/blog-comment-1-2.jpg" alt="">
                                    </div><!-- /.comments-one__card__image -->
                                    <div class="comments-one__card__content">
                                        <h3 class="comments-one__card__title">Sarah Albert <span class="comments-one__card__date">March 20, 2023 at 2:37 pm</span></h3><!-- /.comments-one__card__title -->
                                        <p class="comments-one__card__text">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia
                                            nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.
                                        </p><!-- /.comments-one__card__text -->
                                        <div class="comments-one__card__btn">
                                            <a href="blog-details-right.html" class="careox-btn comments-one__card__reply"><span>Reply</span></a>
                                        </div><!-- /.comments-one__card__btn -->
                                    </div><!-- /.comments-one__card__content -->
                                </li><!-- /.comments-one__card -->
                            </ul><!-- /.list-unstyled comments-one__list -->
                        </div><!-- /.comments-one --> --}}

                        <div class="comments-form">
                            <h3 class="comments-form__title">Leave a comment</h3><!-- /.comments-form__title -->
                            <form class="comments-form__form contact-form-validated form-one">
                                <div class="form-one__group">
                                    <div class="form-one__control">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                                    </div><!-- /.form-one__control -->
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="careox-btn careox-btn--base"><span>Submit comment</span></button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.form-one__group -->
                            </form>
                            <div class="result"></div>
                        </div><!-- /.comments-form -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <aside class="widget-area">
                                <div class="sidebar__single sidebar__single--search">
                                    <form action="#" class="sidebar__search">
                                        <input type="text" placeholder="Search Here..." />
                                        <button type="submit" aria-label="search submit">
                                            <span><i class="icon-magnifying-glass"></i></span>
                                        </button>
                                    </form><!-- /.sidebar__search -->
                                </div><!-- /.sidebar__single -->
                                @if (count($categories)>0)
                                    <div class="sidebar__single">
                                        <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
                                        <ul class="sidebar__categories list-unstyled">
                                            @foreach ($categories as $cat)
                                                <li>
                                                    <a href="javascript:void(0);">{{$cat->title}}</a>({{$cat->posts->count()}})
                                                </li>
                                            @endforeach
                                        </ul><!-- /.sidebar__categories list-unstyled -->
                                    </div><!-- /.sidebar__single -->
                                @endif
                                @if (count($tags)>0)
                                <div class="sidebar__single">
                                    <h4 class="sidebar__title">Tags</h4><!-- /.sidebar__title -->
                                    <div class="sidebar__tags">
                                        @foreach ($tags as $tag)
                                        <a href="javascript:void(0);">{{ trim($tag) }}</a>
                                        @endforeach
                                    </div><!-- /.sidebar__tags -->
                                </div><!-- /.sidebar__single -->
                                @endif
                                @if (count($latest)>0)
                                <div class="sidebar__single">
                                    <h4 class="sidebar__title">Recent Posts</h4><!-- /.sidebar__title -->
                                    <ul class="sidebar__posts list-unstyled">
                                        @foreach ($latest as $post)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="{{ asset('/storage/images/'.$post->thumbnail) }}" alt="" style="height: 100px; width:100px; border-radius: 10px; object-fit:cover">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><i class="icofont-calendar"></i>  {{$post->created_at->format('j M, Y')}}
                                                </p><!-- /.sidebar__posts__date -->
                                                <h4 class="sidebar__posts__title">
                                                    <a href="/b/{{$post->link}}">{{$post->title}}</a>
                                                </h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                        @endforeach
                                    </ul><!-- /.sidebar__posts list-unstyled -->
                                </div>
                                @endif
                            </aside><!-- /.widget-area -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->
</div>
@endsection
