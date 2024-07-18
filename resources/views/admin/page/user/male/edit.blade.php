@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('male.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px;"></i> Back</button>
            </a>
            <h4 class="card-title">Edit Male User</h4>
            <p class="card-description">Edit existing male user profile</p>
            <form class="forms-sample" method="POST" action="{{ route('male.update', $male->id) }}"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="number">Phone</label>
                    <input type="number" class="form-control" id="number" placeholder="Number Phone" name="number_tlp"
                        value="{{ old('number_tlp', $male->number_tlp) }}">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City" name="city"
                        value="{{ old('city', $male->city) }}">
                </div>
                <div class="form-group">
                    <label for="motivation">Motivation</label>
                    <input type="text" class="form-control" id="motivation" placeholder="Motivation" name="motivation"
                        value="{{ old('motivation', $male->motivation) }}">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                    @if($male->image)
                    <img src="{{ asset('images/male/'. $male->image) }}" class="img-lg mt-3" alt="Current Image"
                        width="100" id="preview-image">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection