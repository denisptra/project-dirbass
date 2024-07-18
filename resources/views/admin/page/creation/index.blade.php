@extends('layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('creation.create') }}" class="float-right">
                <button type="button" class="btn btn-primary">Add Data <i class="mx-2 fa fa-plus-circle"></i></button>
            </a>
            <h4 class="card-title">Creation Table Information</h4>
            <h6 class="card-description mt-3">
                List of Creation
            </h6>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($creations as $creation)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('storage/' . $creation->image) }}" alt="" width="100"></td>
                            <td>{{ $creation->title }}</td>
                            <td>{{ $creation->description }}</td>
                            <td>{{ $creation->author ? $creation->author->name : 'No Author' }}</td> <!-- Menampilkan nama author -->
                            <td>
                                <a href="{{ route('creation.show', $creation->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('creation.edit', $creation->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a href="{{ route('creation.destroy', $creation->id) }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true">
                                    <i class="fa fa-trash"></i>
                                </a>
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