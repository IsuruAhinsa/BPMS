<form action="{{ route('player.password.update', [Auth::guard('player')->user()->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="current_password" class="text-dark">Enter Current Password</label>
        <input type="password" name="current_password" id="current_password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="text-dark">Enter New Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="text-dark">Re-enter New Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>
    <div class="text-center">
        <input type="submit" value="Change Password" class="btn btn-dark">
    </div>
</form>
