<form action="{{ route('player.profile.update', [Auth::guard('player')->user()->id]) }}" method="POST">
    @csrf
    <div class="form-row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label class="text-dark" for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ Auth::guard('player')->user()->first_name }}">
            @error('firstname')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label class="text-dark" for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ Auth::guard('player')->user()->last_name }}">
            @error('lastname')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label class="text-dark" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ Auth::guard('player')->user()->email }}" disabled>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="form-text text-muted">The email address used to identify your BPMS Account to you and others. You can’t change this address. If you want to change, Please contact your site admin or coach.
            </small>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label class="text-dark" for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ Auth::guard('player')->user()->dob }}">
            @error('birthday')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label class="text-dark" for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ Auth::guard('player')->user()->mobile }}">
            @error('mobile')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="form-text text-muted">Your mobile number is private. Only you can see it.</small>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <label class="text-dark" for="nic">NIC</label>
            <input type="text" name="nic" id="nic" class="form-control @error('nic') is-invalid @enderror" value="{{ Auth::guard('player')->user()->nic }}">
            @error('nic')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="form-text text-muted">Your NIC is private. Only you can see it.</small>
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <label class="text-dark" for="weight">Weight</label>
            <input type="text" name="weight" id="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ Auth::guard('player')->user()->weight }}">
            @error('weight')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="form-text text-muted">Format: 50kg 500g</small>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <label class="text-dark" for="height">Height</label>
            <input type="text" name="height" id="height" class="form-control @error('height') is-invalid @enderror" value="{{ Auth::guard('player')->user()->height }}">
            @error('height')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="form-text text-muted">Format: 7' 12"</small>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" class="custom-select form-control @error('gender') is-invalid @enderror">
                <option selected disabled>Select Gender</option>
                <option value="Male" @if(Auth::guard('player')->user()->gender == "Male") selected @endif>Male</option>
                <option value="Female" @if(Auth::guard('player')->user()->gender == "Female") selected @endif>Female</option>
            </select>
            @error('gender')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-row mt-3">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <label class="text-dark" for="address">Address</label>
            <textarea name="address" id="address" rows="5" class="form-control @error('address') is-invalid @enderror">{!! Auth::guard('player')->user()->address !!}</textarea>
            @error('address')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small class="form-text text-muted">Your Address is private. Only you can see it.</small>
        </div>
    </div>

    <br><br><br>
    <div class="text-right">
        <a class="btn btn-outline-dark px-3" href="#">Back</a>
        <input class="btn btn-dark px-5" type="submit" value="Save">
    </div>
</form>
