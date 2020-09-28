<section id="home-section" class="hero">

    <div class="home-slider js-fullheight owl-carousel">

        @foreach($sliders as $slider)
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                        <div class="one-third order-md-last img js-fullheight" style="background-image:url({{ Voyager::image($slider->image) }});">
                            <h3 class="vr" style="background-image: url({{ asset('images/divider.jpg') }});">{{ $slider->vertical_text }}</h3>
                        </div>
                        <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">{{ $slider->small_text }}</span>
                                <h1 class="mb-4 mt-3">{!! $slider->heading !!}</h1>
                                <p>{!! $slider->paragraph !!}</p>
                                @if($slider->btn_link)
                                    <p><a href="{{ $slider->btn_link }}" class="btn btn-primary px-5 py-3 mt-3">{{ $slider->btn_text }}</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</section>
