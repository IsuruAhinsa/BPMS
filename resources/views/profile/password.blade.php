@extends('layouts.app')

@section('content')

    <div class="container-fluid" style="margin-top: 121px">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <img src="{{ Voyager::image(Auth::guard('player')->user()->image) }}" alt="" class="img-fluid" width="128">
                <br><br>
                <h5 class="text-primary mb-0">{{ Auth::guard('player')->user()->first_name . " " . Auth::guard('player')->user()->last_name }}</h5>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-sm-4 mb-5">
                <h4>Change Your Password</h4>
                @include('include.success')
                @include('include.error')
                @include('forms.changePassword')
            </div>
        </div>
    </div>

@endsection
