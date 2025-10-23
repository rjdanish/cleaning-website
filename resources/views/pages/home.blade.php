@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

@section('title', 'Home Page')
<style>
    .text-white-90 {
        color: rgba(255, 255, 255, 0.9);
    }

    .text-gradient {
        background: linear-gradient(to right, #007bff, #00c4cc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .service-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .service-card img {
        transition: transform 0.5s ease;
    }

    .service-card:hover img {
        transform: scale(1.1);
    }

    .testimonial-card {
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
</style>

@section('content')
    {{-- Hero --}}
    <section class="position-relative min-vh-100 d-flex align-items-center text-white">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3)), url('assets/hero-cleaning.jpg') center/cover no-repeat; z-index: 0;">
        </div>

        <div class="container position-relative z-1">
            <div class="col-lg-8">
                <!-- Tagline -->
                <div
                    class="d-inline-flex align-items-center gap-2 bg-white bg-opacity-10 backdrop-blur border border-white border-opacity-25 rounded-pill px-4 py-2 mb-4">
                    <i class="bi bi-stars text-warning"></i>
                    <span class="fw-medium small text-white">
                        {{ __('messages.hero.tagline') }}
                    </span>
                </div>

                <!-- Title -->
                <h1 class="display-4 fw-bold mb-3 text-white">
                    {{ __('messages.hero.title') }}
                </h1>

                <!-- Description -->
                <p class="fs-5 mb-4 text-white-90 text-white">
                    {{ __('messages.hero.description') }}
                </p>

                <!-- CTA Buttons -->
                <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
                    <a href="/contact" class="btn btn-primary btn-lg px-4">
                        {{ __('messages.hero.quote_button') }}
                    </a>
                    {{-- <a href="/contact" class="btn btn-outline-light btn-lg px-4">
                        {{ __('messages.hero.contact_button') }}
                    </a> --}}
                </div>

                <!-- Features -->
                <div class="row g-3">
                    <div class="col-sm-6 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span class="text-white">{{ __('messages.hero.features.certified') }}</span>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span class="text-white">{{ __('messages.hero.features.eco') }}</span>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span class="text-white">{{ __('messages.hero.features.flexible') }}</span>
                    </div>
                    <div class="col-sm-6 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span class="text-white">{{ __('messages.hero.features.satisfaction') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}

    <section id="services" class="py-5 bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-3 text-gradient">
                    {{ __('messages.services_section.title') }}
                </h2>
                <p class="text-secondary fs-5">
                    {{ __('messages.services_section.subtitle') }}
                </p>
            </div>

            <!-- Service Cards -->
            <div class="row g-4">
                @php
                    $services = [
                        'hotel' => 'assets/hotel-cleaning.jpg',
                        'apartment' => 'assets/apartment-cleaning.jpg',
                        'office' => 'assets/office-cleaning.jpg',
                        'industrial' => 'assets/industrial-cleaning.jpg',
                    ];
                @endphp

                @foreach ($services as $key => $image)
                    <div class="col-md-6">
                        <div class="card h-100 border-0 shadow-sm service-card">
                            <div class="position-relative overflow-hidden">
                                <img src="{{ $image }}" class="card-img-top"
                                    alt="{{ __('messages.services_section.list.' . $key . '.title') }}">
                                <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient"
                                    style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>
                                <h3 class="position-absolute bottom-0 start-0 text-white fw-bold fs-4 p-3">
                                    {{ __('messages.services_section.list.' . $key . '.title') }}
                                </h3>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">
                                    {{ __('messages.services_section.list.' . $key . '.description') }}
                                </p>
                                <p class="text-muted small fst-italic mb-4">
                                    {{ __('messages.services_section.list.' . $key . '.keywords') }}
                                </p>
                                <a href="/services/{{ $key }}"
                                    class="btn btn-primary d-inline-flex align-items-center">
                                    {{ __('messages.services_section.view_pricing') }}
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    {{-- Testimonial --}}
    <section id="testimonials" class="py-5 bg-light">
        <div class="container">
            <!-- Title -->
            <div class="text-center mb-5">
                <h2 class="fw-bold display-6 mb-3">{{ __('messages.testimonials.title') }}</h2>
                <p class="text-secondary fs-5">
                    {{ __('messages.testimonials.title') }}
                </p>
            </div>

            <!-- Reviews Grid -->
            <div class="row g-4">
                <!-- Testimonial Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 border-0 shadow-sm h-100 position-relative testimonial-card">
                        <i class="bi bi-quote position-absolute top-0 end-0 text-primary opacity-25 fs-1 me-3 mt-2"></i>

                        <!-- Stars -->
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                        <p class="text-muted fst-italic mb-3">
                            “Rengørings Tjeneste has transformed our hotel cleaning standards. Our guest satisfaction scores
                            have increased by 25% since partnering with them. Their attention to detail is exceptional.”
                        </p>

                        <div class="border-top pt-3">
                            <p class="fw-semibold mb-0">Henrik Larsen</p>
                            <p class="text-muted small mb-0">General Manager</p>
                            <p class="text-primary small mb-0">Hotel Guldsmeden</p>
                        </div>

                        <p class="text-muted small mt-3"><strong>SEO:</strong> hotel cleaning Copenhagen, professional
                            housekeeping, guest satisfaction</p>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 border-0 shadow-sm h-100 position-relative testimonial-card">
                        <i class="bi bi-quote position-absolute top-0 end-0 text-primary opacity-25 fs-1 me-3 mt-2"></i>
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-muted fst-italic mb-3">
                            “Managing 50+ apartments in Ørestad, I need reliable cleaning partners. Their move-in/move-out
                            service is flawless. Tenants consistently praise the cleanliness. Highly recommended!”
                        </p>
                        <div class="border-top pt-3">
                            <p class="fw-semibold mb-0">Maria Schmidt</p>
                            <p class="text-muted small mb-0">Property Manager</p>
                            <p class="text-primary small mb-0">Nordic Properties</p>
                        </div>
                        <p class="text-muted small mt-3"><strong>SEO:</strong> apartment cleaning, move-out cleaning,
                            property management cleaning</p>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 border-0 shadow-sm h-100 position-relative testimonial-card">
                        <i class="bi bi-quote position-absolute top-0 end-0 text-primary opacity-25 fs-1 me-3 mt-2"></i>
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-muted fst-italic mb-3">
                            “Our 300m² office has never looked better. The team works after hours, never disrupting our
                            operations. Eco-friendly products are a bonus. Professional and punctual every time.”
                        </p>
                        <div class="border-top pt-3">
                            <p class="fw-semibold mb-0">Lars Nielsen</p>
                            <p class="text-muted small mb-0">Facilities Director</p>
                            <p class="text-primary small mb-0">TechHub Copenhagen</p>
                        </div>
                        <p class="text-muted small mt-3"><strong>SEO:</strong> office cleaning Copenhagen, commercial
                            cleaning, workplace hygiene</p>
                    </div>
                </div>

                <!-- Testimonial Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 border-0 shadow-sm h-100 position-relative testimonial-card">
                        <i class="bi bi-quote position-absolute top-0 end-0 text-primary opacity-25 fs-1 me-3 mt-2"></i>
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-muted fst-italic mb-3">
                            “Industrial cleaning requires expertise and safety compliance. Rengøring Stjeneste exceeds all
                            regulations. Their hazmat-certified team handles our warehouse cleaning perfectly.”
                        </p>
                        <div class="border-top pt-3">
                            <p class="fw-semibold mb-0">Sofie Andersen</p>
                            <p class="text-muted small mb-0">Safety Manager</p>
                            <p class="text-primary small mb-0">Copenhagen Manufacturing</p>
                        </div>
                        <p class="text-muted small mt-3"><strong>SEO:</strong> industrial cleaning, warehouse cleaning,
                            safety compliance</p>
                    </div>
                </div>

                <!-- Testimonial Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 border-0 shadow-sm h-100 position-relative testimonial-card">
                        <i class="bi bi-quote position-absolute top-0 end-0 text-primary opacity-25 fs-1 me-3 mt-2"></i>
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-muted fst-italic mb-3">
                            “Been using their bi-weekly apartment service for 2 years. Always on time, always thorough. My
                            120m² apartment sparkles. The deep cleaning package is worth every krone!”
                        </p>
                        <div class="border-top pt-3">
                            <p class="fw-semibold mb-0">Thomas Jensen</p>
                            <p class="text-muted small mb-0">Homeowner - Vesterbro</p>
                            <p class="text-primary small mb-0">Private Resident</p>
                        </div>
                        <p class="text-muted small mt-3"><strong>SEO:</strong> home cleaning Copenhagen, residential
                            cleaning, deep cleaning service</p>
                    </div>
                </div>

                <!-- Testimonial Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4 border-0 shadow-sm h-100 position-relative testimonial-card">
                        <i class="bi bi-quote position-absolute top-0 end-0 text-primary opacity-25 fs-1 me-3 mt-2"></i>
                        <div class="mb-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="text-muted fst-italic mb-3">
                            “Switched to Rengørings Tjeneste 6 months ago - best decision ever. Their 24/7 availability and
                            quality consistency is unmatched in Copenhagen. True professionals.”
                        </p>
                        <div class="border-top pt-3">
                            <p class="fw-semibold mb-0">Anna Kristensen</p>
                            <p class="text-muted small mb-0">Head of Housekeeping</p>
                            <p class="text-primary small mb-0">Ibsens Hotel</p>
                        </div>
                        <p class="text-muted small mt-3"><strong>SEO:</strong> hotel housekeeping, 24/7 cleaning service,
                            Copenhagen cleaning company</p>
                    </div>
                </div>
            </div>

            <!-- Rating Summary -->
            <div class="text-center mt-5">
                <div
                    class="d-inline-flex align-items-center gap-2 bg-primary bg-opacity-10 text-primary px-4 py-3 rounded-pill fw-semibold">
                    <i class="bi bi-star-fill text-primary"></i>
                    4.9/5 Average Rating • 200+ Happy Clients
                </div>
            </div>
        </div>
    </section>

    {{-- WhyChooseUs --}}



@endsection
