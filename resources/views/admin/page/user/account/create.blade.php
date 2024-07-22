@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('account.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">Create New Account</h4>
            <p class="card-description">Create a new account profile</p>
            <form class="forms-sample" method="POST" action="{{ route('account.store') }}">
                @method('post')
                @csrf
                <div class="form-group">
                    <label for="Name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="Name"
                        placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="Email">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="Email"
                        placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label>Role <span class="text-danger">*</span></label>
                    <select class="form-control @error('role') is-invalid @enderror" id="Role" name="role">
                        <option value="">Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="superadmin">Super Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password"
                        placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        id="ConfirmPassword" placeholder="Confirm Password" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Create Account</button>
            </form>

        </div>
    </div>
</div>

@endsection