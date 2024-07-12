@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('account.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">Account Profile</h4>
            <p class="card-description">
                View detailed information about this account
            </p>

            <div class="row">
                <div class="col-md-8">
                    <div class="col-6">
                        <p><strong>Account ID :</strong> {{ $account->id }}</p>
                        <p><strong>Name :</strong> {{ $account->name }}</p>
                        <p><strong>Email :</strong> {{ $account->email }}</p>
                        <p><strong>Role :</strong> {{ ucfirst($account->role) }}</p>
                        <p><strong>Created At :</strong> {{ $account->created_at }}</p>
                        <p><strong>Updated At :</strong> {{ $account->updated_at }}</p>
                    </div>
                    <div class="col-6">
                        <!-- Add any additional account information here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection