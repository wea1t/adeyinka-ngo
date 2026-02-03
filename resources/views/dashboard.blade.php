<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | JSS Initiative</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f7fb;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #0d6efd;
        }
        .navbar-custom .nav-link, .navbar-custom .navbar-brand {
            color: #fff;
        }
        .navbar-custom .nav-link:hover {
            color: #ffc107;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #0d6efd, #20c997);
            color: #fff;
            padding: 60px 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
        }

        /* Stats cards */
        .card-stat {
            border: none;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            padding: 25px;
            text-align: center;
        }

        /* Featured cards */
        .featured-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .featured-card:hover {
            transform: translateY(-5px);
        }

        /* Footer */
        footer {
            background-color: #0d6efd;
            color: #fff;
            padding: 30px 0;
            margin-top: 50px;
        }
        footer a {
            color: #ffc107;
            text-decoration: none;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom px-4">
    <a class="navbar-brand fw-bold" href="#">JSS Initiative</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Foundation</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Matches</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="#">NGO Programs</a></li>
            <li class="nav-item">
                <form class="d-flex" method="GET" action="/matches/search">
                    <input type="text" name="query" class="form-control me-2" placeholder="Search matches...">
                    <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </li>
            <li class="nav-item ms-3">
                <form method="POST" action="/logout">
                    @csrf
                    <button class="btn btn-light">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<!-- HERO SECTION -->
<div class="container mt-4">
    <div class="hero">
        <h1>Welcome, {{ auth()->user()->name }}!</h1>
        <p>Discover your matches and explore NGO programs today.</p>
    </div>

    <!-- STATS CARDS -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card card-stat">
                <h6 class="text-muted">Profile Completion</h6>
                <h3 class="fw-bold text-primary">80%</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-stat">
                <h6 class="text-muted">Matches Found</h6>
                <h3 class="fw-bold text-success">12</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-stat">
                <h6 class="text-muted">NGO Activities</h6>
                <h3 class="fw-bold text-warning">5</h3>
            </div>
        </div>
    </div>

    <!-- FEATURED MATCHES -->
    <h4 class="mb-3">Featured Matches</h4>
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card featured-card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Profile">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text">25 | New York | Designer</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card featured-card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Profile">
                <div class="card-body">
                    <h5 class="card-title">Jane Smith</h5>
                    <p class="card-text">28 | Los Angeles | Engineer</p>
                </div>
            </div>
        </div>
        <!-- Add more profile cards here -->
    </div>

    <!-- FEATURED NGO PROGRAMS -->
    <h4 class="mb-3">NGO Programs</h4>
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card featured-card p-3">
                <h5>Education Program</h5>
                <p class="text-muted">Supporting education for underprivileged children.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card featured-card p-3">
                <h5>Health Initiative</h5>
                <p class="text-muted">Providing free healthcare and awareness campaigns.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card featured-card p-3">
                <h5>Volunteer Program</h5>
                <p class="text-muted">Join hands to make a difference in your community.</p>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center">
    <div class="container">
        <p>© 2026 JSS Initiative. All rights reserved.</p>
        <p>
            <a href="#">Contact</a> | 
            <a href="#">Privacy Policy</a> | 
            <a href="#">Terms</a>
        </p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
