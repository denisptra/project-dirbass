@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('male.index') }}" class="float-right">
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-arrow-left" style="margin-right: 2px;"></i> Back
                </button>
            </a>
            <h4 class="card-title">Add New Male User</h4>
            <p class="card-description">Create a new male user profile</p>
            <form class="forms-sample" method="POST" action="{{ route('male.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>User ID</label>
                            <select class="form-control @error('user_id') is-invalid @enderror" id="UserId"
                                name="user_id">
                                @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="City"
                                placeholder="City" name="city">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control @error('number_tlp') is-invalid @enderror"
                                id="NumberTlp" placeholder="Number TLP" name="number_tlp">
                        </div>
                        <div class="form-group">
                            <label>Motivation</label>
                            <textarea class="form-control @error('motivation') is-invalid @enderror" id="Motivation"
                                placeholder="Motivation" name="motivation"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="Image"
                                name="image">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection