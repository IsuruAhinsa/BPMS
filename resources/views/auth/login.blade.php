@extends('layouts.app')

@section('content')
    <div class="container p-5" style="margin-top: 121px">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-xl-7 col-sm">
                <h2>{{ __('Player Login') }}</h2>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <i class="icon icon-check-circle mr-2"></i>
                        {{ session('status') }}
                    </div>
                @endif
                @include('forms.auth.login')
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="btn btn-outline-dark btn-block btn-lg mt-3">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
