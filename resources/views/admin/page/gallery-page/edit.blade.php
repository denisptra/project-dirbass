@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('gallery-page.index') }}" class="float-right">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-left"
                        style="margin-right: 2px;"></i> Back</button>
            </a>
            <h4 class="card-title">Edit Gallery</h4>
            <p class="card-description">Edit existing gallery item</p>
            <form class="forms-sample" method="POST" action="{{ route('gallery-page.update', $gallery->id) }}"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="inputGroupFile01">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile01"
                        name="image">
                    @if($gallery->image)
                        <img src="{{ asset('storage/images/gallery/' . $gallery->image) }}" class="img-lg mt-3"
                            alt="Current Image" width="100" >
                    @endif
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection