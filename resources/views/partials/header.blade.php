<style>
    /* Navbar Styling */
    .navbar {
        background: #ffffff;
        transition: all 0.3s ease;
        padding: 0.8rem 1rem;
        border-bottom: 2px solid #f8f9fa;
    }

    .navbar.scrolled {
        background-color: #0d6efd;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar.scrolled .nav-link {
        color: #ffffff !important;
    }

    .navbar-brand {
        font-size: 1.6rem;
        font-weight: 700;
        color: #0d6efd !important;
        letter-spacing: 0.5px;
        transition: color 0.3s ease;
    }

    .navbar-brand:hover {
        color: #084298 !important;
    }

    .nav-link {
        font-weight: 500;
        color: #333333 !important;
        margin: 0 10px;
        position: relative;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #0d6efd !important;
    }

    .nav-link.active {
        color: #0d6efd !important;
    }

    .nav-link.active::after {
        content: "";
        display: block;
        width: 50%;
        height: 2px;
        background-color: #0d6efd;
        margin: 0.2rem auto 0;
        border-radius: 2px;
    }

    .dropdown-menu {
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item.active,
    .dropdown-item:hover {
        background-color: #0d6efd;
        color: #fff;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .navbar-nav {
            text-align: center;
        }

        .nav-link {
            margin: 8px 0;
        }

        .navbar.scrolled {
            background-color: #0d6efd;
        }

        .navbar.scrolled .navbar-brand {
            color: #ffffff !important;
        }
    }
</style>

<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- <img src="{{ asset('uploads/logo.png') }}" alt="Logo" height="35" class="me-2"> --}}
            Cleaning Services
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                        @lang('messages.home')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ url('/services') }}">
                        @lang('messages.services_page')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">
                        @lang('messages.about_us')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">
                        @lang('messages.contact_us')
                    </a>
                </li>

                <!-- Language Switcher -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="langDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ app()->getLocale() === 'da' ? 'DA' : 'EN' }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}"
                                href="{{ route('lang.switch', ['locale' => 'en']) }}">
                                English
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ app()->getLocale() === 'da' ? 'active' : '' }}"
                                href="{{ route('lang.switch', ['locale' => 'da']) }}">
                                Dansk
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
