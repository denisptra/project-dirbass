@extends('layouts.master')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('creation.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px; "></i> Back</button>
            </a>
            <h4 class="card-title">Creation Details</h4>
            <p class="card-description">
                View detailed information about this creation
            </p>

            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $creation->image) }}" class="img-fluid my-4"
                            alt="creation image" >
                        <h4>{{ $creation->title }}</h4>
                    </div>
                </div>
                <div class="col-md-8 row">
                    <div class="col-6">
                        <p><strong>ID :</strong> {{ $creation->id }}</p>
                        <p><strong>Title :</strong> {{ $creation->title }}</p>
                        <p><strong>Created By :</strong> {{ $creation->author->name ?? 'Unknown' }}</p>
                        <p><strong>Created At :</strong> {{ $creation->created_at }}</p>
                        <p><strong>Updated At :</strong> {{ $creation->updated_at }}</p>
                    </div>
                    <div class="col-6">
                        <p><strong>Description :</strong> {{ $creation->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection