@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('creation.index') }}" class="float-right">
                <button type="button" class="btn btn-primary">
                    <i class="fa fa-arrow-left" style="margin-right: 2px;"></i> Back
                </button>
            </a>
            <h4 class="card-title">Add New Creation Item</h4>
            <p class="card-description">Create a New Creation Item</p>
            <form class="forms-sample" method="POST" action="{{ route('creation.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="Title"
                        placeholder="Title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="Description"
                        placeholder="description" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="inputGroupFile01">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile01"
                        name="image">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <select class="form-control @error('author_id') is-invalid @enderror" id="UserId" name="author_id">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection