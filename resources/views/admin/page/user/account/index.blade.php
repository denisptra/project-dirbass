@extends('layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('account.create') }}" class="float-right">
                <button type="button" class="btn btn-primary">Add Account <i
                        class="mx-2 fa fa-plus-circle"></i></button>
            </a>
            <h4 class="card-title">Account Information</h4>
            <h6 class="card-description mt-3">
                List of accounts
            </h6>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($accounts as $account)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $account->name }}</td>
                            <td>{{ $account->email }}</td>
                            <td>{{ ucfirst($account->role) }}</td>
                            <td>
                                <a href="{{ route('account.show', $account->id) }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{ route('account.edit', $account->id) }}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit text-white"></i></a>
                                @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                                @endif
                                <form action="{{ route('account.destroy', $account->id) }}" method="POST"
                                    class="d-inline" id="delete-form-{{ $account->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDelete('{{ $account->id }}')">
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