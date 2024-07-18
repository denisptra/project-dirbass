@extends('layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('male.create') }}" class="float-right">
                <button type="button" class="btn btn-primary">Add Data <i class="mx-2 fa fa-plus-circle"></i></button>
            </a>
            <h4 class="card-title">Male Table Information</h4>
            <h6 class="card-description mt-3">
                List of males
            </h6>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Motivation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($males as $male)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('images/male/' . $male->image) }}" class="img-lg"
                                    alt="profile image"></td>
                            <td>{{ $male->user->name }}</td>
                            <td>{{ $male->number_tlp }}</td>
                            <td>{{ $male->city }}</td>
                            <td>{{ $male->motivation }}</td>
                            <td>
                                <a href="{{ route('male.show', $male->id) }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{ route('male.edit', $male->id) }}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit text-white"></i></a>
                                <a href="{{ route('male.destroy', $male->id) }}" class="btn btn-danger btn-sm"
                                    data-confirm-delete="true"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <small class="text-muted">(Note: You can only fill in one male data for your account)</small>
        </div>
    </div>
</div>

@endsection