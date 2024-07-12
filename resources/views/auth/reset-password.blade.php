<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Difference To Be A Strong's</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dist') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dist') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dist') }}/images/db-rm.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div
                            class="auth-form-light text-left py-5 px-4 px-sm-5 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                            <h4>Create a new password here!</h4>
                            <p>Please remember the password</p>
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                                        type="email" name="email" :value="old('email', $request->email)" required
                                        autofocus autocomplete="username" placeholder="Email">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">New Password <span class="text-danger">*</span></label>
                                    <input id="password" class="form-control @error('password') is-invalid @enderror"
                                        type="password" name="password" required autocomplete="new-password"
                                        placeholder="New Password">
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password <span
                                            class="text-danger">*</span></label>
                                    <input id="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        type="password" name="password_confirmation" required
                                        autocomplete="new-password" placeholder="Confirm Password">
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <button href="" type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{
                                        __('Reset Password') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('dist') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dist') }}/js/off-canvas.js"></script>
    <script src="{{ asset('dist') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('dist') }}/js/template.js"></script>
    <script src="{{ asset('dist') }}/js/settings.js"></script>
    <script src="{{ asset('dist') }}/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>