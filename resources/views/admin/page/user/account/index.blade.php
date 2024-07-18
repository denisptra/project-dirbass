@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
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
                            <th>Data</th>
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
                            <td>{{ ucfirst($account->role) }} </td>
                            <td>
                                @if ($account->male)
                                <span class="badge badge-success">Complete</span>
                                @else
                                <span class="badge badge-warning">Incomplete</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('account.show', $account->id) }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{ route('account.edit', $account->id) }}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit text-white"></i></a>
                                <a href="{{ route('account.destroy', $account->id) }}" class="btn btn-danger btn-sm"
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