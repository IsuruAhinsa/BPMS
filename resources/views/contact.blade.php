@extends('layouts.app')

@section('content')
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact</span>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-7 order-md-last d-flex">
                    @include('forms.contact')
                </div>

                <div class="col-md-5 d-flex">
                    <div class="row d-flex contact-info mb-5">
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-map-signs"></span>
                                </div>
                                <div>
                                    <h3 class="mb-3">Address</h3>
                                    <p>{!! setting('site.address') !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-phone2"></span>
                                </div>
                                <div>
                                    <h3 class="mb-3">Contact Number</h3>
                                    <p><a href="{{ setting('site.telephone') }}">{{ setting('site.telephone') }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div>
                                    <h3 class="mb-3">Email Address</h3>
                                    <p><a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ftco-animate">
                            <div class="box p-2 px-3 bg-light d-flex">
                                <div class="icon mr-3">
                                    <span class="icon-school"></span>
                                </div>
                                <div>
                                    <h3 class="mb-3">School</h3>
                                    <p><a href="#">School Name</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
