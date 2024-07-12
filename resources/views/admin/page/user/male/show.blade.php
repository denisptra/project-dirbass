@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('male.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">Male User Profile</h4>
            <p class="card-description">
                View detailed information about this male user
            </p>

            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('dist') }}/images/faces/face1.jpg" class="img-lg my-4" alt="profile image">
                        <h4>{{ $user->name }}</h4>
                    </div>
                </div>
                <div class="col-md-8 row">
                    <div class="col-6">
                        <p><strong>User ID :</strong> {{ $male->user_id }}</p>
                        <p><strong>Name :</strong> {{ $user->name }}</p>
                        <p><strong>Email :</strong> {{ $user->email }}</p>
                        <p><strong>Email Verified :</strong> {{ $user->email_verified_at }}</p>
                        <p><strong>Created At :</strong> {{ $user->created_at }}</p>
                        <p><strong>Updated At :</strong> {{ $user->updated_at }}</p>
                    </div>
                    <div class="col-6">
                        <p><strong>ID :</strong> {{ $male->id }}</p>
                        <p><strong>Phone :</strong> {{ $male->number_tlp }}</p>
                        <p><strong>City :</strong> {{ $male->city }}</p>
                        <p><strong>Motivation :</strong> {{ $male->motivation }}</p>
                        <p><strong>Created At :</strong> {{ $male->created_at }}</p>
                        <p><strong>Updated At :</strong> {{ $male->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection