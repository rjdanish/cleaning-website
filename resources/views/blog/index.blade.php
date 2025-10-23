@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h2 class="text-primary">Our Latest Blog Posts</h2>
        <p class="text-muted">Discover cleaning tips, tricks, and updates from our team</p>
    </div>

    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 rounded-3">
                    <img src="{{ $blog['image'] }}" class="card-img-top" alt="{{ $blog['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog['title'] }}</h5>
                        <p class="text-muted small">{{ $blog['date'] }} • {{ $blog['author'] }}</p>
                        <p class="card-text">{{ $blog['excerpt'] }}</p>
                        <a href="{{ route('blog.show', $blog['slug']) }}" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
.card img {
    height: 220px;
    object-fit: cover;
}
.btn-outline-primary {
    border-color: #0d6efd;
    color: #0d6efd;
}
.btn-outline-primary:hover {
    background-color: #0d6efd;
    color: #fff;
    border-color: #0d6efd;
}
</style>
@endsection
