@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <h1 class="text-primary mb-3">{{ $blog['title'] }}</h1>

            <div class="text-muted mb-3">
                <small>By {{ $blog['author'] }} • {{ $blog['date'] }}</small>
            </div>

            <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" class="img-fluid rounded mb-4 shadow-sm">

            <div class="blog-content">
                {!! $blog['content'] !!}
            </div>

            <hr class="my-5">

            <div class="text-center">
                <a href="{{ route('blog.index') }}" class="btn btn-outline-primary">← Back to Blog</a>
            </div>

        </div>
    </div>
</div>

<style>
.blog-content p {
    line-height: 1.8;
    color: #444;
}
.blog-content h5 {
    color: #0d6efd;
    margin-top: 1.5rem;
}
</style>
@endsection
