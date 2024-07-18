@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('creation.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px;"></i> Back</button>
            </a>
            <h4 class="card-title">Edit Creation</h4>
            <p class="card-description">Edit existing creation item</p>
            <form class="forms-sample" method="POST" action="{{ route('creation.update', $creation->id) }}"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Title" name="title" value="{{ old('title', $creation->title) }}">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <select class="form-control @error('author_id') is-invalid @enderror" id="UserId" name="author_id">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $creation->author_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                        placeholder="Description" name="description">{{ old('description', $creation->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="inputGroupFile01">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile01"
                        name="image">
                    @if($creation->image)
                        <img src="{{ asset('storage/' . $creation->image) }}" alt="Current Image" width="100" class="mt-3">
                    @endif
                </div>
              
                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
