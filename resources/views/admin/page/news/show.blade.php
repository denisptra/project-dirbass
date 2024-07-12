@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('news.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">News Details</h4>
            <p class="card-description">
                View detailed information about this news
            </p>

            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('dist') }}/images/news/{{ $news->image }}" class="img-lg my-4"
                            alt="news image">
                        <h4>{{ $news->title }}</h4>
                    </div>
                </div>
                <div class="col-md-8 row">
                    <div class="col-6">
                        <p><strong>ID :</strong> {{ $news->id }}</p>
                        <p><strong>Title :</strong> {{ $news->title }}</p>
                        <p><strong>Created By :</strong> {{ $news->user?->name ?? 'Unknown' }}</p>
                        <p><strong>Created At :</strong> {{ $news->created_at }}</p>
                        <p><strong>Updated At :</strong> {{ $news->updated_at }}</p>
                    </div>
                    <div class="col-6">
                        <p><strong>Status :</strong>
                            @if($news->status)
                            <span>Active</span>
                            @else
                            <span>Non-Active</span>
                            @endif
                        </p>
                        <p><strong>Content :</strong> {{ $news->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection