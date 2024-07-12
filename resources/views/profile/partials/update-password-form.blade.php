<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Update Password</h4>
            <p class="card-description">
                Ensure your account is using a long, random password to stay secure.
            </p>
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')

                @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="alert alert-success py-3" role="alert">{{ __('Password updated successfully.') }}</p>
                @endif

                <div class="form-group">
                    <label for="update_password_current_password">Current Password</label>
                    <input type="password"
                        class="form-control shadow-none p-3 bg-body-tertiary rounded @error('current_password') is-invalid @enderror"
                        id="update_password_current_password" name="current_password" autocomplete="current-password" />
                    @error('current_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="update_password_password">New Password</label>
                    <input type="password"
                        class="form-control shadow-none p-3 bg-body-tertiary rounded @error('password') is-invalid @enderror"
                        id="update_password_password" name="password" autocomplete="new-password" />
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="update_password_password_confirmation">Confirm Password</label>
                    <input type="password"
                        class="form-control shadow-none p-3 bg-body-tertiary rounded @error('password_confirmation') is-invalid @enderror"
                        id="update_password_password_confirmation" name="password_confirmation"
                        autocomplete="new-password" />
                    @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex items-center gap-4">
                    <button class="btn btn-primary">{{ __('Save') }}</button>
                    <button class="btn btn-light">{{ __('Cancel') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>