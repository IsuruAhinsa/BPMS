@extends('layouts.app')

@section('content')

    <section class="ftco-section ftco-schedule bg-white" id="schedule-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Search Results</span>
                    <h2 class="mb-4">{{ $news->count() }} result(s) for {{ request()->input('query') }}</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                    @include('forms.search-news')
                </div>
            </div>
            <div class="ftco-schedule bg-white">
                <div class="row d-flex">

                    @foreach($news as $item)
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <a href="{{ route('news.show', [$item->slug]) }}" class="block-20" style="background-image: url({{ Voyager::image($item->cover) }});">
                                </a>
                                <div class="text float-right d-block">
                                    <div class="d-flex align-items-center pt-2 mb-4 topp">
                                        <div class="one mr-2">
                                            <span class="day">{{ $item->created_at->isoFormat('D') }}</span>
                                        </div>
                                        <div class="two">
                                            <span class="yr">{{ $item->created_at->isoFormat('YYYY') }}</span>
                                            <span class="mos">{{ $item->created_at->isoFormat('MMM') }}</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="{{ route('news.show', [$item->slug]) }}">{{ $item->title }}</a></h3>
                                    @if(strlen(strip_tags($item->body)) > 250)
                                        <p> {{ Str::limit(strip_tags($item->body), 250) }}</p>
                                    @else
                                        <p>{{ Str::limit(strip_tags($item->body)) }}</p>
                                    @endif
                                    <div class="d-flex align-items-center mt-4 meta">
                                        <p class="mb-0"><a href="{{ route('news.show', [$item->slug]) }}" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto mb-0">
                                            <a href="#" class="mr-2"><span class="icon-user-circle-o"></span> {{ $item->role }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection
