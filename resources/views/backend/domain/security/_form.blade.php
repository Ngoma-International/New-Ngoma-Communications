<form action="{{ route('admins.password.update', auth()->id()) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="form-label" for="old_password">Old Password</label>
                <div class="form-control-wrap">
                    <input
                        type="password"
                        class="form-control @error('old_password') error @enderror"
                        id="old_password"
                        name="old_password"
                        placeholder="Enter Old Password"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-2">
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <div class="form-control-wrap">
                    <input
                        type="password"
                        class="form-control @error('password') error @enderror"
                        id="password"
                        name="password"
                        placeholder="Enter new password"
                        required>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-2">
            <div class="form-group">
                <label class="form-label" for="password_confirmation">Password</label>
                <div class="form-control-wrap">
                    <input
                        type="password"
                        class="form-control @error('password_confirmation') error @enderror"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Enter new password"
                        required>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <div class="form-group ">
            <button type="submit" class="btn btn-md btn-outline-primary">
                <em class="icon ni ni-save mr-2"></em>
                Update Password
            </button>
        </div>
    </div>
</form>
