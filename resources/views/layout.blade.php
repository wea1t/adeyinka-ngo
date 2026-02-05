<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Renewed Muslim Faith</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}">
    <meta name="theme-color" content="#6f42c1">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f7fb;
        }

        /* ===== APP WRAPPER ===== */
        .app-wrapper {
            display: flex;
            min-height: 100vh;
        }

        .app-wrapper.guest-layout {
            display: block;
            min-height: 100vh;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 240px;
            background: #6f42c1;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            padding-top: 20px;
            padding-bottom: 120px; /* leave space for fixed logout */
            display: flex;
            flex-direction: column;
            z-index: 1115;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            font-size: 0.95rem;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.15);
        }

        .sidebar i {
            font-size: 1.2rem;
        }

        /* fixed logout area inside sidebar so it's always reachable */
        .logout-fixed {
            position: absolute;
            bottom: 16px;
            left: 12px;
            right: 12px;
            z-index: 1120;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        /* ===== HERO ===== */
        .hero {
            background: linear-gradient(135deg, #6f42c1, #20c997);
            color: #fff;
            padding: 60px 30px;
            text-align: center;
            border-radius: 14px;
            margin-bottom: 40px;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
        }

        /* ===== CARDS ===== */
        .feature-card,
        .featured-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            padding: 25px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-card:hover,
        .featured-card:hover {
            transform: translateY(-6px);
        }

        .feature-card i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #6f42c1;
        }

        /* ===== COOKIE BANNER ===== */
        .cookie-consent {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #ffffff;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            padding: 15px 20px;
            border-radius: 12px;
            max-width: 420px;
            width: calc(100% - 40px);
            z-index: 99999;
        }

        .cookie-consent p {
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .cookie-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .cookie-buttons button {
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
        }

        #acceptCookies {
            background: #0d6efd;
            color: #fff;
        }

        #rejectCookies {
            background: #e5e7eb;
        }

        /* Cookie - mobile adjustments */
        @media (max-width: 480px) {
            .cookie-consent {
                left: 0 !important;
                right: 0 !important;
                transform: none !important;
                bottom: 0 !important;
                width: 100% !important;
                max-width: none !important;
                border-radius: 0 !important;
                padding: 12px !important;
                box-shadow: none !important;
            }

            .cookie-consent p {
                margin-bottom: 10px;
                text-align: center;
            }

            .cookie-buttons {
                flex-direction: column;
                gap: 8px;
                justify-content: center;
                align-items: stretch;
                margin-top: 6px;
            }

            .cookie-buttons button {
                width: 100%;
                padding: 10px 12px;
            }
        }

        /* ===== FOOTER (FIXED & CLEAN) ===== */
        .site-footer {
            background: linear-gradient(135deg, #6f42c1, #20c997);
            color: #ffffff;
            padding: 25px 15px;
        }

        .footer-inner {
            max-width: 1100px;
            margin: 0 auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 8px;
            font-size: 0.95rem;
        }

        .footer-links a {
            color: rgba(255,255,255,0.95);
            text-decoration: none;
            font-weight: 600;
        }

        .footer-links a.accent {
            color: #20c997;
        }

        .footer-links span {
            color: rgba(255, 255, 255, 0.6);
        }

        .footer-copy {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .footer-builder {
            font-size: 0.85rem;
            opacity: 0.85;
        }


        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            /* Sidebar becomes off-canvas on small screens */
            .sidebar {
                left: -240px;
                width: 240px;
                transition: left 0.28s ease;
                max-height: 100vh;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
                padding-bottom: 20px;
            }

            /* Hide text labels when sidebar is closed */
            .sidebar span {
                display: none;
            }

            /* Show labels when open */
            .sidebar.open span {
                display: inline-block;
                margin-left: 10px;
            }

            .sidebar.open {
                left: 0;
            }

            /* Main content should not reserve left space on small screens */
            .main-content {
                margin-left: 0;
                width: 100%;
                padding: 20px;
            }

            /* Mobile header inside main content */
            .mobile-header {
                display: flex;
                align-items: center;
                gap: 12px;
                margin-bottom: 16px;
            }

            .mobile-header .mobile-sidebar-toggle {
                background: #0d6efd;
                border: none;
                color: #fff;
                width: 44px;
                height: 44px;
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 6px 18px rgba(13,110,253,0.12);
            }

            .mobile-logo {
                height: 36px;
                width: auto;
                display: block;
            }

            /* Backdrop for off-canvas sidebar */
            .mobile-backdrop {
                position: fixed;
                inset: 0;
                background: rgba(0,0,0,0.45);
                z-index: 1110;
                display: none;
            }

            .mobile-backdrop.active {
                display: block;
            }

            /* ensure toggle is above backdrop */
            .mobile-header .mobile-sidebar-toggle {
                z-index: 100;
            }
        }
        /* Guest pages should not reserve space for the sidebar */
        .main-content.guest {
            margin-left: 0;
            width: 100%;
            padding-top: 20px;
        }

        /* ===== GUEST NAVBAR (namespaced to avoid clashing) ===== */
        .guest-navbar {
            background: #ffffff;
            border-bottom: 1px solid rgba(16,24,40,0.05);
            padding: 0.6rem 1rem;
            position: sticky !important;
            top: 0;
            width: 100%;
            z-index: 999;
            margin: 0;
        }

        .guest-navbar .navbar-brand {
            font-weight: 700;
            color: #6f42c1;
        }

        .guest-navbar .nav-link {
            color: #374151;
            font-weight: 500;
            padding: 0.5rem 0.75rem;
        }

        .guest-navbar .nav-link:hover {
            color: #0d6efd;
        }

        .guest-navbar .btn-primary {
            background: #6f42c1;
            border-color: #6f42c1;
            box-shadow: 0 6px 18px rgba(111,66,193,0.12);
        }

        /* Guest hero - separate from dashboard hero styles */
        .guest-hero {
            background: linear-gradient(135deg, #6f42c1, #20c997);
            color: #fff;
            padding: 48px 30px;
            border-radius: 12px;
            text-align: center;
        }

        .guest-hero .btn-outline-light {
            color: #0d6efd;
            background: rgba(255,255,255,0.95);
        }

        /* Guest hero buttons - stack on small screens */
        .guest-hero .btn {
            min-width: 140px;
        }

        @media (max-width: 576px) {
            .guest-hero {
                padding: 28px 18px;
            }

            .guest-hero .btn {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
        }

        /* ===== CONTRIBUTORS SECTION ===== */
        .contributors-section {
            background: #ffffff;
        }

        .contributor-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            height: 100%;
        }

        .contributor-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        }

        .contributor-image-wrapper {
            width: 100%;
            height: 280px;
            overflow: hidden;
            background: linear-gradient(135deg, #0d6efd, #20c997);
        }

        .contributor-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .contributor-info {
            padding: 20px;
        }

        .contributor-name {
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 5px;
        }

        .contributor-role {
            font-size: 0.95rem;
            color: #6f42c1;
            font-weight: 500;
            margin: 0;
        }

        /* ===== CONTRIBUTORS SLIDER ===== */
        .contributors-slider-wrapper {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .contributors-slider-container {
            flex: 1;
            overflow: hidden;
            border-radius: 12px;
        }

        .contributors-slider-track {
            display: flex;
            transition: transform 0.4s ease;
            gap: 24px;
            padding: 10px 0;
        }

        .contributor-slide {
            flex: 0 0 calc(25% - 18px);
            min-width: 250px;
        }

        .contributors-slider-btn {
            background: #0d6efd;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.2rem;
            transition: background 0.3s ease, transform 0.2s ease;
            flex-shrink: 0;
        }

        .contributors-slider-btn:hover {
            background: #0a58ca;
            transform: scale(1.1);
        }

        /* Responsive slider */
        @media (max-width: 1024px) {
            .contributor-slide {
                flex: 0 0 calc(33.333% - 16px);
                min-width: 220px;
            }
        }

        @media (max-width: 768px) {
            .contributor-slide {
                flex: 0 0 calc(50% - 12px);
                min-width: 180px;
            }

            .contributors-slider-btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .contributor-slide {
                flex: 0 0 100%;
                min-width: 100%;
            }

            .contributors-slider-btn {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>

    <div class="app-wrapper {{ !auth()->check() ? 'guest-layout' : '' }}">

        @php $isAuth = auth()->check(); @endphp

        {{-- mobile toggle removed from here; it's rendered inside main content to avoid left spacing --}}

        <!-- SIDEBAR (only for authenticated/dashboard users) -->
        @if($isAuth)
        <aside class="sidebar">
            <div class="sidebar-brand p-3 d-flex align-items-center gap-2">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height:36px;width:auto"> 
                <strong style="color:#fff">{{ config('app.name', 'Renewed Muslim Faith') }}</strong>
            </div>
            <a href="{{ route('home') }}"><i class="bi bi-house-fill"></i><span>Home</span></a>
            <a href="{{ route('about.us') }}"><i class="bi bi-info-circle"></i><span>About</span></a>
            <a href="{{ route('what.we.do') }}"><i class="bi bi-lightbulb-fill"></i><span>What We Do</span></a>
            <a href="{{ route('donate.form') }}"><i class="bi bi-cash-stack"></i><span>Donate</span></a>

            <div class="sidebar-dropdown">
                <a class="dropdown-toggle-custom" href="#"><i class="bi bi-building"></i><span>Organizations</span></a>
                <div class="dropdown-menu-custom">
                    <a href="{{ route('ngo.form') }}"><i class="bi bi-heart-fill"></i> NGOs</a>
                    <a href="{{ route('foundation') }}"><i class="bi bi-bank2"></i> Foundation</a>
                </div>
            </div>

            <a href="{{ route('profile.show') }}"><i class="bi bi-person-circle"></i><span>Profile</span></a>
            <a href="{{ route('search') }}"><i class="bi bi-search"></i><span>Search</span></a>
            <a href="{{ route('contact.us') }}"><i class="bi bi-envelope-fill"></i><span>Contact</span></a>

            @if (auth()->user()?->name)
                <div class="logout-fixed">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-light w-100">
                            <i class="bi bi-box-arrow-right me-1"></i><span>Logout</span>
                        </button>
                    </form>
                </div>
            @endif
        </aside>
        <div id="mobileSidebarBackdrop" class="mobile-backdrop d-lg-none"></div>
        @endif

        <!-- TOP NAV (for guests) -->
        @if(! $isAuth)
        <nav class="navbar guest-navbar navbar-expand-lg navbar-light bg-white shadow-sm px-4">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="height:28px;width:auto;margin-right:8px"> 
                    <span>{{ config('app.name', 'Renewed Muslim Faith') }}</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about.us') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact.us') }}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('donate.form') }}">Donate</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('ngo.form') }}">NGOs</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-2" href="{{ route('register.show') }}">Get Started</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @endif

        <!-- MAIN CONTENT -->
        <main class="main-content {{ $isAuth ? '' : 'guest' }}">

            @if($isAuth)
            <div class="mobile-header d-lg-none">
                <button class="mobile-sidebar-toggle" id="mobileSidebarToggle" aria-label="Open navigation">
                    <i class="bi bi-list" style="font-size:1.25rem;color:#fff"></i>
                </button>
                <img src="{{ asset('images/logo-demo.png') }}" alt="Logo" class="mobile-logo">
            </div>
            @endif

            @yield('content')

            <footer class="site-footer">
                <div class="footer-inner">

                    <div class="footer-links">
                        <a href="/">Home</a>
                        <span>•</span>
                        <a href="/about-us">About Us</a>
                        <span>•</span>
                        <a href="/contact-us">Contact</a>
                        <span>•</span>
                        <a href="/donation">Donate</a>
                    </div>

                    <div class="footer-copy">
                        © {{ date('Y') }} Renewed Muslim Faith. All rights reserved.
                    </div>

                    <div class="footer-builder">
                        Built by <strong>WETech</strong>
                    </div>

                </div>
            </footer>

        </main>
    </div>

    <!-- COOKIE CONSENT -->
    <div id="cookieConsent" class="cookie-consent">
        <p>
            We use cookies to ensure you get the best experience.
            <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
        </p>
        <div class="cookie-buttons">
            <button id="acceptCookies">Accept</button>
            <button id="rejectCookies">Reject</button>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        let currentIndex = 0;
        const track = document.getElementById('sliderTrack');
        const imageWidth = 210; // slider-img width + gap

        function slideRight() {
            currentIndex++;
            if (currentIndex > track.children.length - 4) currentIndex = 0;
            track.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
        }

        function slideLeft() {
            currentIndex--;
            if (currentIndex < 0) currentIndex = track.children.length - 4;
            track.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
        }

        // Auto slide
        setInterval(slideRight, 3500);


        document.addEventListener('DOMContentLoaded', function () {
            const banner = document.getElementById('cookieConsent');
            const consent = localStorage.getItem('cookiesConsent');

            if (consent) banner.style.display = 'none';

            document.getElementById('acceptCookies').onclick = () => {
                localStorage.setItem('cookiesConsent', 'accepted');
                banner.style.display = 'none';
            };

            document.getElementById('rejectCookies').onclick = () => {
                localStorage.setItem('cookiesConsent', 'rejected');
                banner.style.display = 'none';
            };
        });

        document.querySelectorAll('.dropdown-toggle-custom').forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                const menu = this.nextElementSibling;
                menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
            });
        });

        // Contributors Slider
        let contributorsIndex = 0;
        const contributorsTrack = document.getElementById('contributorsTrack');
        const contributorSlides = document.querySelectorAll('.contributor-slide');
        const slideWidth = 290; // card width + gap

        function slideContributorsRight() {
            contributorsIndex++;
            if (contributorsIndex > contributorSlides.length - 4) {
                contributorsIndex = Math.max(0, contributorSlides.length - 4);
            }
            updateContributorsSlider();
        }

        function slideContributorsLeft() {
            contributorsIndex--;
            if (contributorsIndex < 0) {
                contributorsIndex = 0;
            }
            updateContributorsSlider();
        }

        function updateContributorsSlider() {
            if (contributorsTrack) {
                contributorsTrack.style.transform = `translateX(-${contributorsIndex * slideWidth}px)`;
            }
        }

        // Mobile sidebar toggle for authenticated users (off-canvas with backdrop)
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('mobileSidebarToggle');
            const sidebar = document.querySelector('.sidebar');
            const backdrop = document.getElementById('mobileSidebarBackdrop');

            if (toggle && sidebar) {
                function openSidebar() {
                    sidebar.classList.add('open');
                    if (backdrop) backdrop.classList.add('active');
                }

                function closeSidebar() {
                    sidebar.classList.remove('open');
                    if (backdrop) backdrop.classList.remove('active');
                }

                toggle.addEventListener('click', function (e) {
                    e.stopPropagation();
                    if (sidebar.classList.contains('open')) closeSidebar();
                    else openSidebar();
                });

                if (backdrop) {
                    backdrop.addEventListener('click', function () {
                        closeSidebar();
                    });
                }

                // Close on Escape key
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape') closeSidebar();
                });
            }
        });
    </script>

</body>

</html>
