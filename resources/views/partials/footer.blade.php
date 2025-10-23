<footer class="bg-dark text-light py-5">
  <div class="container">
    <div class="row gy-4 text-center text-md-start">
      <!-- Company Info -->
      <div class="col-12 col-sm-6 col-md-3">
        <h5 class="fw-bold text-primary">Rengørings Tjeneste ApS</h5>
        <p class="text-light-50 small mb-0">
          Professional cleaning services in Copenhagen
        </p>
      </div>

      <!-- Services -->
      <div class="col-6 col-md-3">
        <h6 class="fw-semibold mb-3">
          {{ app()->getLocale() === 'da' ? 'Tjenester' : 'Services' }}
        </h6>
        <ul class="list-unstyled small mb-0">
          @if(app()->getLocale() === 'da')
            <li><a href="#services" class="text-decoration-none d-block mb-1">Hotel Rengøring</a></li>
            <li><a href="#services" class="text-decoration-none d-block mb-1">Lejligheds Rengøring</a></li>
            <li><a href="#services" class="text-decoration-none d-block mb-1">Kontor Rengøring</a></li>
            <li><a href="#services" class="text-decoration-none d-block mb-1">Industriel Rengøring</a></li>
          @else
            <li><a href="#services" class="text-decoration-none d-block mb-1">Hotel Cleaning</a></li>
            <li><a href="#services" class="text-decoration-none d-block mb-1">Apartment Cleaning</a></li>
            <li><a href="#services" class="text-decoration-none d-block mb-1">Office Cleaning</a></li>
            <li><a href="#services" class="text-decoration-none d-block mb-1">Industrial Cleaning</a></li>
          @endif
        </ul>
      </div>

      <!-- Quick Links -->
      <div class="col-6 col-md-3">
        <h6 class="fw-semibold mb-3">
          {{ app()->getLocale() === 'da' ? 'Hurtige Links' : 'Quick Links' }}
        </h6>
        <ul class="list-unstyled small mb-0">
          @if(app()->getLocale() === 'da')
            <li><a href="{{ url('/about') }}" class="text-decoration-none d-block mb-1">Om Os</a></li>
            <li><a href="{{ url('/contact') }}" class="text-decoration-none d-block mb-1">Kontakt</a></li>
            <li><a href="{{ url('/blog') }}" class="text-decoration-none d-block mb-1">Blog</a></li>
            <li><a href="{{ url('/vendor-login') }}" class="text-decoration-none d-block mb-1">Leverandør Login</a></li>
          @else
            <li><a href="{{ url('/about') }}" class="text-decoration-none d-block mb-1">About Us</a></li>
            <li><a href="{{ url('/contact') }}" class="text-decoration-none d-block mb-1">Contact</a></li>
            <li><a href="{{ url('/blog') }}" class="text-decoration-none d-block mb-1">Blog</a></li>
            <li><a href="{{ url('/vendor-login') }}" class="text-decoration-none d-block mb-1">Vendor Login</a></li>
          @endif
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-12 col-sm-6 col-md-3">
        <h6 class="fw-semibold mb-3">
          {{ app()->getLocale() === 'da' ? 'Kontakt' : 'Contact' }}
        </h6>
        <ul class="list-unstyled small mb-0">
          <li><i class="bi bi-telephone-fill me-2 text-primary"></i>+45 27 300 300</li>
          <li><i class="bi bi-envelope-fill me-2 text-primary"></i>info@rengøringstjeneste.com</li>
          <li><i class="bi bi-geo-alt-fill me-2 text-primary"></i>CVR: 44405792</li>
        </ul>
      </div>
    </div>

    <!-- Divider -->
    <hr class="border-secondary mt-4 mb-3">

    <!-- Developer Credit -->
    <div class="text-center small text-light-50">
      © {{ date('Y') }} Developed by
      <a href="https://rjdanish.com" target="_blank" class="text-light fw-semibold text-decoration-none">
        RJ DANISH
      </a>. All Rights Reserved.
    </div>
  </div>
</footer>

<style>
  footer a {
    color: rgba(255, 255, 255, 0.85);
    text-decoration: none;
    transition: color 0.2s ease;
  }

  footer a:hover {
    color: #0d6efd !important;
  }

  .text-light-50 {
    color: rgba(255, 255, 255, 0.75);
  }

  footer i {
    vertical-align: middle;
  }

  @media (max-width: 767px) {
    footer {
      text-align: center;
    }
    footer .col-md-3 {
      margin-bottom: 20px;
    }
  }
</style>
