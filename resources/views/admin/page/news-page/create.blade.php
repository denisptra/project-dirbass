@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('news-page.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">Add New News Item</h4>
            <p class="card-description">Create a new news item</p>
            <form class="forms-sample" method="POST" action="{{ route('news-page.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="Title"
                        placeholder="Title" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="Content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="Content"
                        placeholder="Content" name="content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection