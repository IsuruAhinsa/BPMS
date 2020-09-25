<form method="POST" action="{{ route('password.email') }}">
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

    <div class="form-group mb-0">
        <button type="submit" class="btn btn-dark btn-block">
            {{ __('Send Password Reset Link') }}
        </button>
    </div>
</form>
