@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary display-6">Our Latest Blog Posts</h2>
            <p class="text-muted fs-5">Insights, cleaning tips, and industry updates from our team</p>
        </div>

        <div class="row g-4">
            <!-- Blog 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/hero-cleaning.jpg') }}" class="card-img-top" alt="Eco-Friendly Cleaning">
                    <div class="card-body">
                        <h5 class="fw-bold mb-2">Eco-Friendly Cleaning: A Sustainable Future</h5>
                        <p class="text-muted small mb-3">
                            Discover how green cleaning methods not only protect the environment but also improve your indoor air quality.
                        </p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                    <div class="card-footer bg-white border-0 text-muted small">
                        <i class="bi bi-calendar-event"></i> Oct 15, 2025
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/apartment-cleaning.jpg') }}" class="card-img-top" alt="Office Cleaning Tips">
                    <div class="card-body">
                        <h5 class="fw-bold mb-2">Top 5 Office Cleaning Tips for Better Productivity</h5>
                        <p class="text-muted small mb-3">
                            Learn how maintaining a clean and organized office space boosts employee motivation and focus.
                        </p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                    <div class="card-footer bg-white border-0 text-muted small">
                        <i class="bi bi-calendar-event"></i> Sep 30, 2025
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/office-cleaning.jpg') }}" class="card-img-top" alt="Hotel Cleaning Standards">
                    <div class="card-body">
                        <h5 class="fw-bold mb-2">How Hotels Maintain 5-Star Cleanliness Standards</h5>
                        <p class="text-muted small mb-3">
                            Explore the best cleaning practices that luxury hotels follow to keep every corner spotless.
                        </p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                    <div class="card-footer bg-white border-0 text-muted small">
                        <i class="bi bi-calendar-event"></i> Aug 20, 2025
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

    .text-primary {
        color: #0d6efd !important;
    }
</style>

@endsection
