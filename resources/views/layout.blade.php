<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Renewed Muslim Faith</title>

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

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 240px;
            background: #0d6efd;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            z-index: 1000;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .sidebar a:hover {
            background-color: rgba(255,255,255,0.15);
        }

        .sidebar i {
            font-size: 1.2rem;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            margin-left: 240px;
            padding: 30px;
            width: calc(100% - 240px);
        }

        /* ===== HERO ===== */
        .hero {
            background: linear-gradient(135deg, #0d6efd, #20c997);
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
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
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
            color: #0d6efd;
        }

        /* ===== COOKIE BANNER ===== */
        .cookie-consent {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #ffffff;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
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

       /* ===== FOOTER (FIXED & CLEAN) ===== */
.site-footer {
    background-color: #0d6efd;
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
    color: #ffc107;
    text-decoration: none;
    font-weight: 500;
}

.footer-links span {
    color: rgba(255,255,255,0.6);
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
            .sidebar {
                width: 70px;
            }

            .sidebar span {
                display: none;
            }

            .main-content {
                margin-left: 70px;
                width: calc(100% - 70px);
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="app-wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <a href="/"><i class="bi bi-house-fill"></i><span>Home</span></a>
        <div class="sidebar-dropdown">
    <a href="#" class="dropdown-toggle-custom">
        <i class="bi bi-people-fill"></i>
        <span>Who We Are</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>

    <div class="dropdown-menu-custom">
        <a href="/who-we-are">
            <i class="bi bi-info-circle"></i>
            <span>Overview</span>
        </a>
        <a href="/leaders">
            <i class="bi bi-person-badge"></i>
            <span>Leaders</span>
        </a>
        <a href="/trustees">
            <i class="bi bi-diagram-3"></i>
            <span>Trustees</span>
        </a>
    </div>
</div>

        <a href="/what-we-do"><i class="bi bi-lightbulb-fill"></i><span>What We Do</span></a>
        <a href="/donation"><i class="bi bi-cash-stack"></i><span>Donation</span></a>
        <a href="/foundation"><i class="bi bi-building"></i><span>Foundation</span></a>
        <a href="/profile"><i class="bi bi-person-circle"></i><span>Profile</span></a>
        <a href="/search"><i class="bi bi-search"></i><span>Search</span></a>
        <a href="/about-us"><i class="bi bi-info-circle"></i><span>About Us</span></a>
        <a href="/contact-us"><i class="bi bi-envelope-fill"></i><span>Contact Us</span></a>
        <a href="/ngo"><i class="bi bi-heart-fill"></i><span>NGO</span></a>

        <form method="POST" action="/logout" class="mt-auto p-3">
            @csrf
            <button type="submit" class="btn btn-light w-100">
                <i class="bi bi-box-arrow-right me-1"></i><span>Logout</span>
            </button>
        </form>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
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
        <a href="/privacy-policy">Privacy Policy</a>
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
</script>

</body>
</html>
