@extends('layouts.master')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('gallery-page.create') }}" class="float-right">
                <button type="button" class="btn btn-primary">Add Gallery <i
                        class="mx-2 fa fa-plus-circle"></i></button>
            </a>
            <h4 class="card-title">Gallery Table Information</h4>
            <h6 class="card-description mt-3">
                List of Gallery
            </h6>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($gallery as $item)
                        <tr>
                            <td>{{ $no++ }}.</td>
                            <td><img src="{{ asset('storage/images/gallery/' . $item->image) }}" class="img-lg"
                                    alt="profile image"></td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ route('gallery-page.show', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('gallery-page.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm text-white">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('gallery-page.destroy', $item->id) }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection