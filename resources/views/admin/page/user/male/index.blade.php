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
                            <td><img src="{{ asset('dist') }}/images/faces/face1.jpg" class="img-lg"
                                    alt="profile image">
                            </td>
                            <td>{{ $male->user->name }}</td>
                            <td>{{ $male->number_tlp }}</td>
                            <td>{{ $male->city }}</td>
                            <td>{{ $male->motivation }}</td>
                            <td>
                                <a href="{{ route('male.show', $male->id) }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{ route('male.edit', $male->id) }}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit text-white"></i></a>
                                <form action="{{ route('male.destroy', $male->id) }}" method="POST" class="d-inline"
                                    id="delete-form-{{ $male->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete('{{ $male->id }}')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>
@endsection