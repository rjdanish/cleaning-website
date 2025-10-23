@extends('layouts.app')
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="badge bg-primary-subtle text-primary mb-2">Professional Service</span>
            <h2 class="fw-bold text-primary">Office Cleaning Services</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Boost productivity with a pristine professional workspace. Our customized office cleaning ensures a
                hygienic, safe, and inspiring environment where businesses thrive.
            </p>
        </div>

        <!-- Features Row -->
        <div class="container my-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold text-dark mb-3">Why Choose Us</h3>
                <p class="text-muted">We provide reliable, professional, and efficient cleaning solutions that make your
                    space shine</p>
            </div>

            <div class="row text-center">
                <!-- Feature 1 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card p-4 rounded shadow-sm bg-white h-100">
                        <div class="icon-circle mb-3 mx-auto">
                            <i class="bi bi-calendar-check text-success fs-3"></i>
                        </div>
                        <h5 class="fw-semibold mb-2">Flexible Scheduling</h5>
                        <p class="text-muted small mb-0">Book cleaning sessions that fit perfectly with your business hours.
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card p-4 rounded shadow-sm bg-white h-100">
                        <div class="icon-circle mb-3 mx-auto">
                            <i class="bi bi-patch-check text-primary fs-3"></i>
                        </div>
                        <h5 class="fw-semibold mb-2">Certified Staff</h5>
                        <p class="text-muted small mb-0">Our trained professionals follow strict hygiene and safety
                            protocols.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card p-4 rounded shadow-sm bg-white h-100">
                        <div class="icon-circle mb-3 mx-auto">
                            <i class="bi bi-star-fill text-warning fs-3"></i>
                        </div>
                        <h5 class="fw-semibold mb-2">Quality Guarantee</h5>
                        <p class="text-muted small mb-0">We ensure spotless results and 100% customer satisfaction every
                            time.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-md-3 mb-4">
                    <div class="feature-card p-4 rounded shadow-sm bg-white h-100">
                        <div class="icon-circle mb-3 mx-auto">
                            <i class="bi bi-people-fill text-danger fs-3"></i>
                        </div>
                        <h5 class="fw-semibold mb-2">Expert Team</h5>
                        <p class="text-muted small mb-0">Our experienced cleaners use the latest equipment and eco-friendly
                            products.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Features -->
        <div class="text-center my-5">
            <h4 class="fw-bold mb-4 text-primary">Service Features</h4>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row g-3">
                        <div class="col-md-4 col-sm-6">
                            <div
                                class="feature-item p-3 d-flex align-items-center justify-content-center border rounded-3 shadow-sm bg-white h-100">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-2"></i>
                                <span class="fw-semibold text-dark">Daily or weekly cleaning</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div
                                class="feature-item p-3 d-flex align-items-center justify-content-center border rounded-3 shadow-sm bg-white h-100">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-2"></i>
                                <span class="fw-semibold text-dark">Desk & workstation sanitization</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div
                                class="feature-item p-3 d-flex align-items-center justify-content-center border rounded-3 shadow-sm bg-white h-100">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-2"></i>
                                <span class="fw-semibold text-dark">Restroom deep cleaning</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div
                                class="feature-item p-3 d-flex align-items-center justify-content-center border rounded-3 shadow-sm bg-white h-100">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-2"></i>
                                <span class="fw-semibold text-dark">Floor care & maintenance</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div
                                class="feature-item p-3 d-flex align-items-center justify-content-center border rounded-3 shadow-sm bg-white h-100">
                                <i class="bi bi-check-circle-fill text-success fs-5 me-2"></i>
                                <span class="fw-semibold text-dark">After-hours cleaning available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Pricing Packages -->
        <div class="text-center mb-4">
            <h4 class="fw-semibold">Pricing Packages</h4>
            <p class="text-muted">Choose the package that fits your needs. Prices are indicative and customizable.</p>
        </div>

        <div class="row">
            <!-- Startup -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Startup</h5>
                        <p class="text-primary fs-5 fw-semibold">From 1,800 DKK/month</p>
                        <ul class="list-unstyled text-muted small">
                            <li>Up to 100m² office</li>
                            <li>1–2 weekly cleanings</li>
                            <li>Trash removal</li>
                            <li>Restroom cleaning</li>
                            <li>Kitchen area maintenance</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Business -->
            <div class="col-md-4 mb-4">
                <div class="card shadow border-primary rounded-3 h-100">
                    <div class="card-body text-center">
                        <span class="badge bg-primary mb-2">Most Popular</span>
                        <h5 class="fw-bold">Business</h5>
                        <p class="text-primary fs-5 fw-semibold">From 3,500 DKK/month</p>
                        <ul class="list-unstyled text-muted small">
                            <li>Up to 300m² office</li>
                            <li>Daily cleaning</li>
                            <li>Conference room service</li>
                            <li>Window cleaning monthly</li>
                            <li>Supply restocking</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Enterprise -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Enterprise</h5>
                        <p class="text-primary fs-5 fw-semibold">Custom Pricing</p>
                        <ul class="list-unstyled text-muted small">
                            <li>Unlimited office area</li>
                            <li>24/7 cleaning</li>
                            <li>Specialized equipment cleaning</li>
                            <li>Dedicated cleaning manager</li>
                            <li>Monthly quality reports</li>
                        </ul>
                        {{-- <a href="#" class="btn btn-outline-primary">Get Started</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .feature-card {
            transition: all 0.3s ease;
            border: 1px solid #eee;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            border-color: #28a745;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #d1f7e2, #f4fff9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .feature-item {
            transition: all 0.3s ease;
            cursor: default;
        }

        .feature-item:hover {
            background-color: #f0f8ff;
            transform: translateY(-4px);
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.15);
        }

        .text-primary {
            color: #0d6efd !important;
        }

        .btn-outline-primary {
            border-color: #0d6efd;
            color: #0d6efd;
        }

        .btn-outline-primary:hover {
            background-color: #0d6efd;
            color: #fff;
        }

        .badge.bg-primary-subtle {
            background-color: #e7f1ff;
        }
    </style>
@endsection
