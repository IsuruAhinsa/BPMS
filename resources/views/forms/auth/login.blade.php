<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email" class="form-label text-md-right">{{ __('E-Mail Address') }}</label>
        <input
            id="email"
            type="email"
            class="form-control @error('email') is-invalid @enderror"
            name="email"
            value="{{ old('email') }}"
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
            autocomplete="current-password"
        >

        @error('password')
        <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="custom-control custom-checkbox">
        <input
            class="custom-control-input"
            type="checkbox"
            name="remember"
            id="remember" {{ old('remember') ? 'checked' : '' }}
        >
        <label class="custom-control-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>

    <div class="form-group mb-0 mt-4">
        <button type="submit" class="btn btn-dark btn-block">
            {{ __('Login') }}
        </button>
    </div>
</form>