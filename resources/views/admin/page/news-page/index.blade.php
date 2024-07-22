@extends('layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('news-page.create') }}" class="float-right">
                <button type="button" class="btn btn-primary">Add News <i class="mx-2 fa fa-plus-circle"></i></button>
            </a>
            <h4 class="card-title">News Table Information</h4>
            <h6 class="card-description mt-3">
                List of News
            </h6>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($news as $item)
                        <tr>
                            <td>{{ $no++ }}.</td>
                            <td><img src="{{ asset('storage/images/news/' . $item->image) }}" class="img-lg"
                                    alt="profile image"></td>
                            <td>{{ substr($item->title, 0, 20) }}...</td>
                            <td>{{ substr($item->content, 0, 50) }}...</td>
                            <td>
                                <form action="{{ route('news-page.updateStatus', $item->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="checkbox-apple">
                                        <input class="yep" id="check-apple-{{ $item->id }}" type="checkbox"
                                            name="status" {{ $item->status ? 'checked' : '' }}
                                        onchange="this.form.submit()">
                                        <label for="check-apple-{{ $item->id }}"></label>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('news-page.show', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('news-page.edit', $item->id) }}" class="btn btn-warning btn-sm text-white">
                                    <i class="fa fa-edit"></i>
                                </a>                                
                                <a href="{{ route('news-page.destroy', $item->id) }}" class="btn btn-danger btn-sm"
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
<style>
    .checkbox-apple {
        position: relative;
        width: 50px;
        height: 25px;
        margin: 20px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .checkbox-apple label {
        position: absolute;
        top: 0;
        left: 0;
        width: 50px;
        height: 25px;
        border-radius: 50px;
        background: linear-gradient(to bottom, #b3b3b3, #e6e6e6);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .checkbox-apple label:after {
        content: '';
        position: absolute;
        top: 1px;
        left: 1px;
        width: 23px;
        height: 23px;
        border-radius: 50%;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    .checkbox-apple input[type="checkbox"]:checked+label {
        background: linear-gradient(to bottom, #4cd964, #5de24e);
    }

    .checkbox-apple input[type="checkbox"]:checked+label:after {
        transform: translateX(25px);
    }

    .checkbox-apple label:hover {
        background: linear-gradient(to bottom, #b3b3b3, #e6e6e6);
    }

    .checkbox-apple label:hover:after {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .yep {
        position: absolute;
        top: 0;
        left: 0;
        width: 50px;
        height: 25px;
    }
</style>

<script>
    function toggleStatus(newsId) {
    // Buat permintaan AJAX atau logika lain untuk mengubah status di backend

    // Contoh perubahan status di frontend
    const toggleButton = document.querySelector(`.toggle-button[onclick='toggleStatus(${newsId})']`);
    const isActive = toggleButton.classList.toggle('active');
    const tooltip = toggleButton.querySelector('.tooltip');

    if (isActive) {
        tooltip.textContent = 'Active';
    } else {
        tooltip.textContent = 'Inactive';
    }
}
</script>

@endsection