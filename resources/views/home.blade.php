@extends('layout')

@section('title', 'Home')

@section('content')

<!-- HERO SECTION -->
<section class="hero-section d-flex align-items-center text-center">
    <div class="container hero-content">
        @if(auth()->check())
        <h1 class="fw-bold text-white">Welcome back, {{ auth()->user()?->name }} 👋</h1>
        <p class="lead text-light">Continue exploring programs and opportunities tailored for you.</p>
        <a href="/profile" class="btn btn-outline-light mt-3">Go to Profile</a>
        @else
        <h1 class="fw-bold text-white">Renewed Muslim Faith Foundation (RMFF)</h1>
        <p class="lead text-light">Renewing Faith. Restoring Hope. Transforming Lives.</p>
        <div class="mt-4">
            <a href="/donation" class="btn btn-light me-2">Donate Now</a>
            <a href="{{ route('contact.us') }}" class="btn btn-outline-light me-2">Seek Guidance</a>
            <a href="/about-us" class="btn btn-outline-light">Discover Our Mission</a>
        </div>
        @endif
    </div>
</section>

<!-- WHO WE ARE SECTION -->
<section class="who-we-are-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="fw-bold mb-4">Who We Are – A Heartfelt Commitment</h3>
                <p>We are a community-rooted organization driven by profound love for the Ummah and an unshakeable trust in Allah's mercy. With deep sincerity and professional integrity, we connect authentic Islamic faith with purposeful, life-affirming action addressing spiritual disconnection, emotional wounds, family challenges, and the silent struggles of widows, orphans, youth, and vulnerable communities.
Our work is an amanah: transparent, accountable, and eternally oriented serving solely for Allah's pleasure, to bring light where shadows linger and hope where despair once dwelled.</p>
                <a href="/about-us" class="btn btn-outline-primary mt-3">Read More</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/home/whoweare.jpeg') }}" class="img-fluid rounded shadow" alt="Who We Are">
            </div>
        </div>
    </div>
</section>



<!-- WHAT WE DO -->
<section class="what-we-do-section py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">What We Do – Pillars of Compassionate Service</h3>
        <div class="row g-4">
            <div class="col-md-4 service-card">
                <img src="{{ asset('images/home/education.jpeg') }}" class="img-fluid rounded mb-3" alt="Education">
                <h5>Islamic Education & Da‘wah</h5>
                <p>Islamic Education & Da‘wah  Igniting hearts with the Qur’an’s healing words and the Prophet’s (PBUH) beautiful example, fostering deeper iman and joyful remembrance.</p>
            </div>
            <div class="col-md-4 service-card">
                <img src="{{ asset('images/home/mentorship.jpeg') }}" class="img-fluid rounded mb-3" alt="Mentorship">
                <h5>Mentorship & Counseling</h5>
                <p>Offering safe, confidential spaces for emotional healing, spiritual renewal, and guidance that mends broken hearts and strengthens resilient spirits.</p>
            </div>
            <div class="col-md-4 service-card">
                <img src="{{ asset('images/home/empowerment.jpeg') }}" class="img-fluid rounded mb-3" alt="Youth Empowerment">
                <h5>Youth and Community Empowerment</h5>
                <p> Nurturing our young with faith, purpose, skills, and loving support to rise as confident leaders grounded in deen.</p>
            </div>
            <div class="col-md-4 service-card">
                <img src="{{ asset('images/home/humanitarian1.jpeg') }}" class="img-fluid rounded mb-3" alt="Humanitarian">
                <h5>Humanitarian Support</h5>
                <p>Delivering urgent relief, sustainable aid, and dignified care to those in hardship feeding the hungry, sheltering the vulnerable, and restoring hope with mercy in motion.</p>
            </div>
            <div class="col-md-4 service-card">
                <img src="{{ asset('images/home/matchmaking.jpeg') }}" class="img-fluid rounded mb-3" alt="Matchmaking">
                <h5>Ethical Matchmaking Services</h5>
                <p>Facilitating halal, respectful unions rooted in shared faith, values, and mutual respect building homes of sakeenah, love, and barakah.</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('about.us') }}" class="btn btn-outline-success">Explore Our Programs</a>
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


<section class="impact-section-- py-5 text-center">
    <h3 class="fw-bold">Our Impact – Lives Touched, Hearts Healed</h3>
    <ul class="list-unstyled mt-3">
        <li>Restore hope to weary families</li>
        <li>Guide youth toward purposeful futures</li>
        <li>Heal emotional and spiritual wounds</li>
        <li>Empower widows and shelter orphans</li>
        <li>Unite souls in righteous marriage</li>
    </ul>
    <p class="mt-3">
        <strong>Account Number:</strong> 0013741243 <br>
        <strong>Account Name:</strong> Renewed Muslim Faith Foundation
    </p>
    <a href="/donation" class="btn btn-danger">Donate Now – Let Your Heart Lead</a>
</section>


<section class="get-involved-section py-5 bg-light text-center">
    <h3 class="fw-bold">Get Involved – Your Place in This Noble Mission</h3>
    <p>Lend your time as a volunteer, partner with us in service, or sustain our programs...</p>
    <a href="{{ route('contact.us') }}" class="btn btn-primary">Join Us Today</a>
</section>


<section class="closing-message py-5 text-center">
    <p>
        At Renewed Muslim Faith Foundation, we hold firmly to the belief that when sincere faith is nurtured,
        when hearts are met with genuine mercy, and when generosity flows freely for Allah's sake,
        profound and lasting transformation becomes not just possible but inevitable.
    </p>
    <p>
        Join us in this sacred journey. Be the mercy someone is praying for. Let your contribution become a light in the darkness,
        a comfort to the afflicted, and a path to Allah's boundless pleasure.
    </p>
    <p><em>May Allah accept our efforts, multiply our rewards, and unite our hearts in His service. Ameen. 🌿</em></p>
</section>


@endsection