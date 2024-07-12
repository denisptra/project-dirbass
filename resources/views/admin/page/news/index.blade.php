@extends('layouts.master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('news.create') }}" class="float-right">
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
                        @foreach ($news as $news)
                        <tr>
                            <td>{{ $no++ }}.</td>
                            <td><img src="{{ asset('dist') }}/images/faces/face1.jpg" class="img-lg"
                                    alt="profile image">
                            </td>
                            <td>{{ $news->title }}</td>
                            <td>{{ substr($news->content, 0, 50) }}...</td>
                            <td>
                                <form action="{{ route('news.status', $news->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    @if ($news->status == "1")
                                    <input type="hidden" name="status" value="1">
                                    @else
                                    <input type="hidden" name="status" value="0">
                                    @endif
                                    <div class="toggle-button" onclick="toggleStatus({{ $news->id }})">
                                        <div class="toggle-button-slider {{ $news->status ? 'active' : '' }}"></div>
                                        <div class="tooltip">{{ $news->status ? 'Active' : 'Inactive' }}</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                    
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('news.show', $news->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning btn-sm text-white">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="d-inline"
                                    id="delete-form-{{ $news->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this news?')">
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
{{-- <style>
    .toggle-button {
        position: relative;
        width: 60px;
        height: 30px;
        background-color: #ccc;
        border-radius: 50px;
        cursor: pointer;
        display: flex;
        align-items: center;
        padding: 0 5px;
        transition: background-color 0.3s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .toggle-button.active {
        background-color: #4caf50;
    }

    .toggle-button-slider {
        position: absolute;
        width: 25px;
        height: 25px;
        background-color: #fff;
        border-radius: 80%;
        transition: transform 0.3s;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .toggle-button.active .toggle-button-slider {
        transform: translateX(35px);
    }

    .tooltip {
        position: absolute;
        top: -35px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #333;
        color: #fff;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
        opacity: 0;
        transition: opacity 0.3s, background-color 0.3s;
        pointer-events: none;
    }

    .toggle-button:hover .tooltip {
        opacity: 1;
    }

    .toggle-button.active .tooltip {
        background-color: #4caf50;
    }
</style> --}}

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