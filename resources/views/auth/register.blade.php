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
                            <h4>Create New Account Here!</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama <span class="text-danger">*</span></label>
                                    <input id="name"
                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                        type="text" name="name" :value="old('name')" required autofocus
                                        autocomplete="name" placeholder="Nama">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input id="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        type="email" name="email" :value="old('email')" required autocomplete="username"
                                        placeholder="Email">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password <span class="text-danger">*</span></label>
                                    <input id="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        type="password" name="password" required autocomplete="new-password"
                                        placeholder="Password">
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password <span
                                            class="text-danger">*</span></label>
                                    <input id="password_confirmation"
                                        class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                                        type="password" name="password_confirmation" required
                                        autocomplete="new-password" placeholder="Confirm Password">
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            I agree to all Terms & Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button href="" type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{
                                        __('SIGN UP') }}</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    {{ __('Already have an account') }} <a href="{{ route('login') }}"
                                        class="text-primary">Login</a>
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