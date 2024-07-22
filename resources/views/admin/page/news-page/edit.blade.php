@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('news-page.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px;"></i> Back</button>
            </a>
            <h4 class="card-title">Edit News</h4>
            <p class="card-description">Edit existing news item</p>
            <form class="forms-sample" method="POST" action="{{ route('news-page.update', $news_page->id) }}"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Title" name="title" value="{{ old('title', $news_page->title) }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                        placeholder="Content" name="content">{{ old('content', $news_page->content) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="inputGroupFile01">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile01"
                        name="image">
                    @if($news_page->image)
                        <img src="{{ asset('storage/images/news/' . $news_page->image) }}" class="img-lg mt-3"
                            alt="Current Image" width="100" >
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection