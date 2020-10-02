@extends('layouts.app')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ Voyager::image($news->cover) }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">{{ $news->title }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{ route('news.index') }}">News <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ $news->title }} </span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    {!! $news->body !!}
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        @include('forms.search-news')
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading-sidebar">Recent News</h3>
                        @foreach($recentNews as $news)
                            <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url({{ Voyager::image($news->cover) }});"></a>
                            <div class="text">
                                <h3 class="heading"><a href="{{ route('news.show', [$news->slug]) }}">{{ $news->title }}</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> {{ $news->created_at->toFormattedDateString() }}</a></div>
                                    <div><a href="#"><span class="icon-person"></span> {{ $news->role }}</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->

@endsection
