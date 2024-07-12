@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('news.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">Add New News Item</h4>
            <p class="card-description">Create a new news item</p>
            <!-- Tempatkan ini di bagian atas form atau di tempat yang sesuai di view Anda -->
            <form class="forms-sample" method="POST" action="{{ route('news.store') }}">
                @method('post')
                @csrf
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="Title"
                        placeholder="Title" name="title">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <select class="form-control @error('author') is-invalid @enderror" id="author" name="author">
                        <option value="">Select an author</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ old('author') == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="Content"
                        placeholder="Content" name="content"></textarea>
                    @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group my-4">
                    <label class="input-group-text btn-primary" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01" hidden>
                    <input type="text" class="form-control" id="inputGroupFile02">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>

        </div>
    </div>
</div>

@endsection