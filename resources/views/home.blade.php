@extends('layout')

@section('title', 'Home')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section mb-5">
    <div class="hero-content text-center">
        <h1 class="fw-bold">Welcome, {{ auth()->user()->name }} 👋</h1>
        <p class="lead">
            Explore matches and NGO programs under <strong>Renewed Muslim Faith</strong>
        </p>
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
