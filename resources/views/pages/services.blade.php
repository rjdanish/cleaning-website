@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
@php
    $language = session('language', 'en');
@endphp
@section('title', $language == 'da' ? 'Vores Tjenester' : 'Our Services')


@section('content')
<section class="py-5 bg-light" id="services">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-5 text-primary mb-3">
                  @lang('messages.services.title')
            </h2>
            <p class="text-muted fs-5 mx-auto" style="max-width:700px;">
                @lang('messages.services.subtitle')
            </p>
        </div>

        <!-- Services Grid -->
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 service-card hover-shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-house-door-fill text-primary display-5"></i>
                        </div>
                        <h5 class="fw-bold mb-3">
                           @lang('messages.services.home_cleaning.title')
                        </h5>
                        <p class="text-muted">
                           @lang('messages.services.home_cleaning.desc')
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 service-card hover-shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-building text-success display-5"></i>
                        </div>
                        <h5 class="fw-bold mb-3">
                           @lang('messages.services.commercial_cleaning.title')
                        </h5>
                        <p class="text-muted">
                           @lang('messages.services.commercial_cleaning.desc')
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 service-card hover-shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-brush-fill text-warning display-5"></i>
                        </div>
                        <h5 class="fw-bold mb-3">
                            @lang('messages.services.move_cleaning.title')
                        </h5>
                        <p class="text-muted">
                            @lang('messages.services.move_cleaning.desc')
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 service-card hover-shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-droplet-fill text-info display-5"></i>
                        </div>
                        <h5 class="fw-bold mb-3">
                            @lang('messages.services.window_cleaning.title')
                        </h5>
                        <p class="text-muted">
                             @lang('messages.services.window_cleaning.desc')
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 service-card hover-shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-tree-fill text-success display-5"></i>
                        </div>
                        <h5 class="fw-bold mb-3">
                             @lang('messages.services.outdoor_cleaning.title')
                        </h5>
                        <p class="text-muted">
                             @lang('messages.services.outdoor_cleaning.desc')
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm border-0 service-card hover-shadow">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="bi bi-stars text-danger display-5"></i>
                        </div>
                        <h5 class="fw-bold mb-3">
                           @lang('messages.services.special_cleaning.title')
                        </h5>
                        <p class="text-muted">
                            @lang('messages.services.special_cleaning.desc')
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5">
            <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-5 py-3 shadow-sm">
                <i class="bi bi-envelope-fill me-2"></i>
                @lang('messages.services.cta.text')
            </a>
        </div>
    </div>
</section>

<style>
    .service-card {
        border-radius: 20px;
        transition: all 0.3s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .icon-box {
        width: 90px;
        height: 90px;
        margin: 0 auto 20px;
        border-radius: 50%;
        background: rgba(13, 110, 253, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }
    .service-card:hover .icon-box {
        background: rgba(13, 110, 253, 0.15);
    }
</style>
@endsection
