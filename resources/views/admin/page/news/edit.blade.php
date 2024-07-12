@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('news.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px;"></i> Back</button>
            </a>
            <h4 class="card-title">Edit News</h4>
            <p class="card-description">Edit existing news item</p>
            <form class="forms-sample" method="POST" action="{{ route('news.update', $news->id) }}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                        value="{{ old('title', $news->title) }}">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <select class="form-control" id="author" name="author">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('author', $news->author) == $user->id ? 'selected' : ''
                            }}>
                            {{ $user->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" placeholder="Content"
                        name="content">{{ old('content', $news->content) }}</textarea>
                </div>
                <div class="input-group my-4">
                    <label class="input-group-text btn-primary" for="inputGroupFile01">Upload Image</label>
                    <input type="file" class="form-control" id="inputGroupFile01" hidden>
                    <input type="text" class="form-control" id="inputGroupFile02"
                        value="{{ old('image', $news->image) }}">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection