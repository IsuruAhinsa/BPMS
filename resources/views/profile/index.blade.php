@extends('layouts.app')

@section('content')

    <div class="container-fluid" style="margin-top: 121px">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 border-right text-center">
                <img src="{{ Voyager::image(Auth::guard('player')->user()->image) }}" alt="" class="img-fluid" width="128">
                <br><br>
                <h5 class="text-primary mb-0">{{ Auth::guard('player')->user()->first_name . " " . Auth::guard('player')->user()->last_name }}</h5>
                <div>
                    <small>Player</small>
                </div>
                <br>
                @include('forms.avatar')
                <br><br>
                <a href="{{ route('player.password.edit') }}" class="btn btn-danger">Change Password</a>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <div class="p-5">
                    <div class="d-flex justify-content-between">
                        <h4>Basic Info</h4>
                    </div>
                    @include('include.success')
                    <hr>
                    @include('forms.profile')
                </div>
            </div>
        </div>
    </div>

@endsection
