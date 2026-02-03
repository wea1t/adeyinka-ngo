@extends('layout')

@section('title', 'Home')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section mb-5">
    <div class="hero-content text-center container py-5">
        @if(auth()->check())
            <h1 class="fw-bold">Welcome back, {{ auth()->user()?->name }} 👋</h1>
            <p class="lead">Continue exploring programs and opportunities tailored for you.</p>
            <a href="/profile" class="btn btn-outline-light mt-3">Go to Profile</a>
        @else
            <div class="guest-hero mx-auto" style="max-width:900px;">
                <h1 class="fw-bold">Renewed Muslim Faith</h1>
                <p class="lead">Empowering communities through compassion, education, and service.</p>
                <div class="mt-3">
                    <a href="/about-us" class="btn btn-light me-2">Learn More</a>
                    <a href="/donation" class="btn btn-outline-light">Donate Now</a>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="features-section mb-5">
    <h3 class="mb-4 text-center fw-bold">Our Features</h3>

    <div class="row g-4">

        <!-- NGO -->
        <div class="col-md-3">
            <div class="feature-card card h-100 text-center p-4">
                <i class="bi bi-heart-pulse-fill text-danger feature-icon"></i>
                <h5 class="mt-3">NGO Programs</h5>
                <p class="text-muted">
                    Humanitarian programs focused on care, relief, and community development.
                </p>
            </div>
        </div>

        <!-- Matchmaking -->
        <div class="col-md-3">
            <div class="feature-card card h-100 text-center p-4">
                <i class="bi bi-people-fill text-primary feature-icon"></i>
                <h5 class="mt-3">Matchmaking</h5>
                <p class="text-muted">
                    Find compatible members based on shared values and goals.
                </p>
            </div>
        </div>

        <!-- Education -->
        <div class="col-md-3">
            <div class="feature-card card h-100 text-center p-4">
                <i class="bi bi-mortarboard-fill text-warning feature-icon"></i>
                <h5 class="mt-3">Education</h5>
                <p class="text-muted">
                    Learning programs that empower individuals through knowledge.
                </p>
            </div>
        </div>

        <!-- Volunteer -->
        <div class="col-md-3">
            <div class="feature-card card h-100 text-center p-4">
                <i class="bi bi-hand-thumbs-up-fill text-success feature-icon"></i>
                <h5 class="mt-3">Volunteer</h5>
                <p class="text-muted">
                    Serve humanity by joining impactful volunteer initiatives.
                </p>
            </div>
        </div>

    </div>
</section>


<!-- IMPACT IMAGE SECTION -->
<section class="impact-section">
    <div class="impact-overlay">
        <div class="impact-text">

            <h2 class="slide-in-title">
                Build a World Where All Humanity Are Safe, Strong & Valued
            </h2>

            <p class="slide-in-text">
                Renewed Muslim Faith is a commendable program aimed at fostering
                empowerment, compassion, and community development. The framework focuses on
                uplifting individuals through support systems, resources, and collective action.
            </p>
        </div>
    </div>
</section>

<!-- IMAGE SLIDER SECTION -->
<section class="gallery-section">
    <h3 class="text-center mb-4 fw-bold">Our Activities</h3>

    <div class="slider-container">
        <button class="slider-btn left" onclick="slideLeft()">&#10094;</button>

        <div class="slider-track" id="sliderTrack">
            <img src="/images/pic2.jpg" alt="">
            <img src="/images/pic3.jpg" alt="">
            <img src="/images/pic4.jpg" alt="">
            <img src="/images/pic5.jpg" alt="">
            <img src="/images/pic6.jpg" alt="">
            <img src="/images/pic7.jpg" alt="">
            <img src="/images/pic8.jpg" alt="">
            <img src="/images/pic9.jpg" alt="">
            <img src="/images/pic10.jpg" alt="">
            <img src="/images/pic11.jpg" alt="">
        </div>

        <button class="slider-btn right" onclick="slideRight()">&#10095;</button>
    </div>
</section>


<section class="part-b">
    <div class="part-b-content">
        <h3 class="wordwide">
            Renewed Muslim Faith Support Initiative Impact Story
        </h3>

        <h2>
            We have been transforming lives through community support.
            In a small rural town, the Renewed Muslim Faith Support Initiative (JSSI) has become a beacon of hope
            for many families struggling to find their footing. Founded with the mission to uplift and empower
            individuals around the world, JSSI provides resources, mentorship, and emotional support to those in need.
        </h2>
    </div>
</section>


<!-- CONTRIBUTORS SECTION -->
<section class="contributors-section py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Our Leadership Team</h2>

        <div class="contributors-slider-wrapper position-relative">
            <button class="contributors-slider-btn left" onclick="slideContributorsLeft()">
                <i class="bi bi-chevron-left"></i>
            </button>

            <div class="contributors-slider-container">
                <div class="contributors-slider-track" id="contributorsTrack">
                    <!-- Contributor 1 -->
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/lawal.jpg") }}" alt="Founder" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Lawal Habiba</h5>
                                <p class="contributor-role">Treasurer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contributor 2 -->
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/founder.jpg") }}" alt="Co-Founder" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Founder and Chariman</h5>
                                {{-- <p class="contributor-role">Founder and Chariman</p> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Contributor 3 -->
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/ibrahim.jpg") }}" alt="Trustee" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Ibrahim Mustapha Olasunkanmi</h5>
                                <p class="contributor-role">Secretary</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contributor 4 -->
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/nimatallah.jpg") }}" alt="Manager" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Nimatallah Lawal</h5>
                                <p class="contributor-role">Program Coordinator and Program Manager</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contributor 5 (additional) -->
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/ummu.jpg") }}" alt="Coordinator" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Ummu Salamah</h5>
                                <p class="contributor-role">Operational Manager</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contributor 6 (additional) -->
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/shakirah.jpg") }}" alt="Advisor" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Shakirah Arinola Abdulrohim</h5>
                                <p class="contributor-role">Volunteer Coordinator</p>
                            </div>
                        </div>
                    </div>
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/ahmad.jpg") }}" alt="Advisor" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Ahmad Ishola Azeez</h5>
                                <p class="contributor-role">Member and Adviser Barrister</p>
                            </div>
                        </div>
                    </div>
                    <div class="contributor-slide">
                        <div class="contributor-card">
                            <div class="contributor-image-wrapper">
                                <img src="{{ asset("images/contributors/monitoring.jpg") }}" alt="Advisor" class="contributor-image">
                            </div>
                            <div class="contributor-info">
                                <h5 class="contributor-name">Monitoring and Evaluation (M&E) Officer</h5>
                                {{-- <p class="contributor-role">Monitoring and Evaluation (M&E) Officer</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="contributors-slider-btn right" onclick="slideContributorsRight()">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</section>


<section class="donate-section">
    <h2 class="donate-title">Donate</h2>
    <p class="donate-intro">
        Your generous contributions play a vital role in supporting the mission of the
        Renewed Muslim Faith Support Initiative (RMF). Donations help us provide essential programs
        and resources that empower individuals and communities.
    </p>

    <div class="donate-cards">

        <div class="donate-card">
            <i class="bi bi-credit-card-fill donate-icon"></i>
            <h3>Online Donations</h3>
            <p>
                Click on the donate button on our website to make a secure online donation
                using your bank transfer payment app. Every contribution, big or small, makes a difference.
            </p>
        </div>

        <div class="donate-card">
            <i class="bi bi-calendar-check-fill donate-icon"></i>
            <h3>Monthly Giving</h3>
            <p>
                Consider becoming a monthly donor. Regular contributions help us plan and sustain
                our initiatives over time, ensuring ongoing support for the community.
            </p>
        </div>

        <div class="donate-card">
            <i class="bi bi-gift-fill donate-icon"></i>
            <h3>In-Kind Donations</h3>
            <p>
                We welcome in-kind donations such as educational materials, clothing, or supplies
                for our programs. Contact us to learn about our current needs.
            </p>
        </div>

        <div class="donate-card">
            <i class="bi bi-people-fill donate-icon"></i>
            <h3>Sponsorship Opportunities</h3>
            <p>
                Explore various sponsorship opportunities for specific programs or events.
                Sponsoring a workshop or initiative can have a profound impact on participants’ lives.
            </p>
        </div>

    </div>
</section>

@endsection
