@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

@section('title', __('messages.contact.page_title'))

@php
    $language = session('language', 'en');
@endphp

@section('content')
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <!-- Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-5 text-primary mb-3">
                {{ __('messages.contact.page_title') }}
            </h2>
            <p class="text-muted lead">
                {{ __('messages.contact.enquries') }}
            </p>
        </div>

        <div class="row g-5 align-items-stretch">
            <!-- Contact Form -->
            <div class="col-lg-7">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">
                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ $language == 'da' ? 'Dit Navn' : 'Your Name' }}</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-lg rounded-3" required>
                                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ $language == 'da' ? 'Email Adresse' : 'Email Address' }}</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg rounded-3" required>
                                @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">{{ $language == 'da' ? 'Telefonnummer' : 'Phone Number' }}</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control form-control-lg rounded-3">
                                @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">{{ $language == 'da' ? 'Din Besked' : 'Your Message' }}</label>
                                <textarea name="message" rows="5" class="form-control form-control-lg rounded-3" required>{{ old('message') }}</textarea>
                                @error('message')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-3 shadow-sm">
                                <i class="bi bi-send me-2"></i>
                                {{ $language == 'da' ? 'Send Besked' : 'Send Message' }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body d-flex align-items-start">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3">
                            <i class="bi bi-geo-alt fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">{{ $language == 'da' ? 'Adresse' : 'Address' }}</h5>
                            <p class="text-muted mb-0">
                                Winghouse<br>
                                Ørestads Boulevard 73<br>
                                2300 København<br>
                                Danmark
                            </p>
                            <small class="text-secondary">CVR: 44405792</small>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body d-flex align-items-start">
                        <div class="icon-box bg-success bg-opacity-10 text-success rounded-circle p-3 me-3">
                            <i class="bi bi-telephone fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">{{ $language == 'da' ? 'Telefon' : 'Phone' }}</h5>
                            <a href="tel:+4527300300" class="text-decoration-none text-muted fs-5">
                                +45 27 300 300
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body d-flex align-items-start">
                        <div class="icon-box bg-info bg-opacity-10 text-info rounded-circle p-3 me-3">
                            <i class="bi bi-envelope fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">{{ $language == 'da' ? 'Email' : 'Email' }}</h5>
                            <a href="mailto:info@rengøringstjeneste.com" class="text-decoration-none text-muted fs-6">
                                info@rengøringstjeneste.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .icon-box {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .card:hover {
        transform: translateY(-3px);
        transition: all 0.3s ease-in-out;
    }
</style>
@endsection
