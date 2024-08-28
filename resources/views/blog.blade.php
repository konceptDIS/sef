@extends('layout')

@section('content')
<div class="page-wrapper">
<section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">Blog</h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Blog</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-one blog-one--page">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-8">
                        <div class="row gutter-y-30">
                            @if (count($latest)>0)
                            @foreach ($latest as $post)
                                <div class="col-md-12">
                                    <div class="blog-card-list wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #37B1C1;'>
                                        <div class="blog-card-list__image" style="height: 350px; border-radius: 25px; object-fit: cvoer;">
                                            <img src="{{ asset('/storage/images/'.$post->thumbnail) }}" alt="{{$post->title}}">
                                            <img src="{{ asset('/storage/images/'.$post->thumbnail) }}" alt="{{$post->title}}">
                                            <a href="blog-details-right.html" class="blog-card-list__image__link"><span class="sr-only">{{$post->title}}</span>
                                                <!-- /.sr-only --></a>
                                        </div><!-- /.blog-card-list__image -->
                                        <div class="blog-card-list__content">
                                            <ul class="list-unstyled blog-card-list__meta">
                                                <li class="blog-card-list__meta__cats"><a href="/b/{{$post->link}}">{{$post->category->title}}</a></li>
                                                <li><a href="/b/{{$post->link}}"><img src="https://ui-avatars.com/api/?name={{$post->user->first_name . '+' .$post->user->last_name}}" alt="">Author: {{$post->user->first_name}} {{$post->user->last_name}}</a></li>
                                                {{-- <li><i class="icofont-comment"></i>Comment (5)</li> --}}
                                                <li><i class="icofont-ui-calendar"></i>{{$post->created_at->format('j M, Y')}}</li>
                                            </ul><!-- /.list-unstyled blog-card-list__meta -->
                                            <h3 class="blog-card-list__title"><a href="/b/{{$post->link}}">{{$post->title}}</a></h3><!-- /.blog-card-list__title -->
                                            <p class="blog-card-list__text">
                                                {{$post->excerpt}}
                                            </p><!-- /.blog-card-list__text -->
                                            <a href="/b/{{$post->link}}" class="blog-card-list__link">
                                                <span class="blog-card-list__link__front"><span class="icofont-double-right"></span></span>
                                                <span class="blog-card-list__link__back"><span class="icofont-double-right"></span>Read More</span>
                                            </a><!-- /.blog-card-list__link -->
                                        </div><!-- /.blog-card-list__content -->
                                    </div><!-- /.blog-card-list -->
                                </div><!-- /.col-md-12 -->
                            @endforeach
                            <div class="col-md-12">
                                <ul class="post-pagination blog-page__pagination">
                                    <li>
                                        <a href="blog-list.html">1</a>
                                    </li>
                                    <li>
                                        <a class="current" href="blog-list-right.html">2</a>
                                    </li>
                                    <li>
                                        <a href="blog-list-right.html"><span class="icofont-double-right"></span></a>
                                    </li>
                                </ul>
                            </div><!-- /.col-md-12 -->
                            @endif
                        </div><!-- /.row -->
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
        </section><!-- /.blog-one blog-one--page -->

</div>
@endsection
