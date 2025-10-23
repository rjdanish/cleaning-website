@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

@php
    $language = session('language', 'en');
@endphp

@section('title', __('messages.about.page_title'))

@section('content')
<section class="py-5 bg-light" id="about">
    <div class="container">

        <!-- Intro Section -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/hotel-cleaning.jpg"
                     alt="About Cleaning"
                     class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover"
                     style="max-height: 420px;">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold text-primary display-5 mb-3">
                    {{ __('messages.about.section_title') }}
                </h2>
                <p class="text-muted fs-5 mb-4">
                    {{ __('messages.about.intro') }}
                </p>
                <a href="{{ url('/contact') }}" class="btn btn-primary px-4 py-2">
                    <i class="bi bi-envelope-fill me-2"></i>
                    {{ __('messages.about.contact_button') }}
                </a>
            </div>
        </div>

        <!-- Values Section -->
        <div class="text-center mb-5">
            <h3 class="fw-bold text-dark display-6 mb-3">
                {{ __('messages.about.values_title') }}
            </h3>
            <p class="text-muted fs-5 mx-auto" style="max-width:700px;">
                {{ __('messages.about.values_text') }}
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
                    <div class="icon-circle bg-primary text-white mx-auto mb-3">
                        <i class="bi bi-shield-check display-6"></i>
                    </div>
                    <h5 class="fw-bold mb-2">
                        {{ __('messages.about.reliability_title') }}
                    </h5>
                    <p class="text-muted">
                        {{ __('messages.about.reliability_text') }}
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
                    <div class="icon-circle bg-success text-white mx-auto mb-3">
                        <i class="bi bi-star-fill display-6"></i>
                    </div>
                    <h5 class="fw-bold mb-2">
                        {{ __('messages.about.quality_title') }}
                    </h5>
                    <p class="text-muted">
                        {{ __('messages.about.quality_text') }}
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4 rounded-4">
                    <div class="icon-circle bg-warning text-white mx-auto mb-3">
                        <i class="bi bi-heart-fill display-6"></i>
                    </div>
                    <h5 class="fw-bold mb-2">
                        {{ __('messages.about.dedication_title') }}
                    </h5>
                    <p class="text-muted">
                        {{ __('messages.about.dedication_text') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5">
            <a href="{{ url('/services') }}" class="btn btn-outline-primary btn-lg px-5 py-3">
                <i class="bi bi-gear-fill me-2"></i>
                {{ __('messages.about.cta_button') }}
            </a>
        </div>
    </div>
</section>

<style>
    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
    }
</style>
@endsection
