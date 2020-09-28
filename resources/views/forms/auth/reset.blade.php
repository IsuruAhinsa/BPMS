<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <label for="email" class="form-label text-md-right">{{ __('E-Mail Address') }}</label>
        <input
            id="email"
            type="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email"
            value="{{ $email ?? old('email') }}"
            required
            autocomplete="email"
            autofocus
        >

        @error('email')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password" class="form-label text-md-right">{{ __('Password') }}</label>
        <input
            id="password"
            type="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password"
            required
            autocomplete="new-password"
        >

        @error('password')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password-confirm" class="form-label text-md-right">{{ __('Confirm Password') }}</label>
        <input
            id="password-confirm"
            type="password"
            class="form-control"
            name="password_confirmation"
            required
            autocomplete="new-password"
        >
    </div>

    <div class="form-group mb-0">
        <button type="submit" class="btn btn-dark btn-block btn-lg">
            {{ __('Reset Password') }}
        </button>
    </div>
</form>
