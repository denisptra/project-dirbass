@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('gallery-page.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">Gallery Details</h4>
            <p class="card-description">
                View detailed information about this news
            </p>

            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('storage/images/gallery/' . $gallery->image) }}" class="img-fluid my-4"
                            alt="news image" >
                    </div>
                </div>
                <div class="col-md-8 row">
                    <div class="col-6">
                        <p><strong>ID :</strong> {{ $gallery->id }}</p>
                        <p><strong>Created At :</strong> {{ $gallery->created_at }}</p>
                        <p><strong>Updated At :</strong> {{ $gallery->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection