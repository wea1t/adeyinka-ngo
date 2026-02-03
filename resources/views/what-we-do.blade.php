@extends('layout')

@section('title', 'What We Do')

@section('content')

<!-- HERO -->
<div class="hero text-center mb-5">
    <h1>What We Do</h1>
    <p class="lead">
        Our work is rooted in faith, compassion, and service to humanity.
    </p>
</div>

<!-- INTRO -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-9 text-center">
            <p class="fs-5">
                Renewed Muslim Faith focuses on empowering individuals and communities
                through education, spiritual development, and humanitarian support.
                Everything we do is guided by sincerity, accountability, and service.
            </p>
        </div>
    </div>
</div>

<!-- FULL WIDTH IMAGE -->
<div class="container-fluid px-0 my-5">
    <div class="what-image-section"
         style="background-image: url('{{ asset('images/pic12.jpg') }}');">
        <div class="what-image-overlay">
            <div class="container text-center radio">
                <h2>Serving Humanity Through Faith & Action</h2>
                <p>
                    We turn compassion into impact by supporting education,
                    strengthening communities, and uplifting lives.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- WHAT WE DO GRID -->
@php
$features = [
    ['icon'=>'bi-book', 'title'=>'Faith Education', 'desc'=>'Providing Islamic education, spiritual growth programs, and moral guidance for all age groups.'],
    ['icon'=>'bi-mortarboard', 'title'=>'Educational Support', 'desc'=>'Supporting students with school fees, learning materials, and access to quality education.'],
    ['icon'=>'bi-people', 'title'=>'Community Outreach', 'desc'=>'Strengthening communities through outreach programs, mentorship, and social support initiatives.'],
    ['icon'=>'bi-heart-pulse', 'title'=>'Humanitarian Aid', 'desc'=>'Delivering food relief, welfare assistance, and emergency support to those in need.'],
    ['icon'=>'bi-globe', 'title'=>'Global Impact', 'desc'=>'Extending compassion beyond borders to support vulnerable communities worldwide.'],
    ['icon'=>'bi-lightbulb', 'title'=>'Leadership Development', 'desc'=>'Training and mentoring future leaders to serve with integrity and vision.'],
    ['icon'=>'bi-heart', 'title'=>'Matchmaking Services', 'desc'=>'Supporting individuals and families in finding compatible life partners based on faith, values, and mutual respect.'],
    ['icon'=>'bi-building', 'title'=>'NGO Initiatives', 'desc'=>'Launching projects and programs that address social issues, education, and humanitarian needs.'],
    ['icon'=>'bi-people-fill', 'title'=>'Youth Programs', 'desc'=>'Engaging young members in leadership, education, and spiritual activities.'],
    ['icon'=>'bi-gender-female', 'title'=>'Women Empowerment', 'desc'=>'Promoting education, mentorship, and social support for women and girls.'],
    ['icon'=>'bi-heart', 'title'=>'Health & Wellness', 'desc'=>'Organizing health camps, awareness campaigns, and wellness initiatives.'],
    ['icon'=>'bi-tree', 'title'=>'Environmental Awareness', 'desc'=>'Encouraging sustainable practices and community environmental programs.'],
    ['icon'=>'bi-brush', 'title'=>'Cultural & Arts Programs', 'desc'=>'Supporting cultural preservation, arts, and creative activities within the community.'],
    ['icon'=>'bi-hammer', 'title'=>'Skill Development', 'desc'=>'Providing vocational training and workshops for professional growth.'],
    ['icon'=>'bi-people-circle', 'title'=>'Social Integration', 'desc'=>'Fostering inclusion, collaboration, and harmony across diverse communities.'],
];
@endphp

<div class="container my-5">
    <div class="row g-4 what-we-do">
        @foreach($features as $feature)
            <div class="col-md-4">
                <div class="what-card">
                    <i class="bi {{ $feature['icon'] }}"></i>
                    <h5>{{ $feature['title'] }}</h5>
                    <p>{{ $feature['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@push('styles')
<style>

/* ===== WHAT WE DO CARDS ===== */
.what-we-do .what-card {
    height: 100%;
    padding: 40px 28px;
    text-align: center;
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.what-card i {
    font-size: 3.2rem;
    color: #0d6efd;
    margin-bottom: 18px;
}

.what-card h5 {
    font-weight: 700;
    margin-bottom: 12px;
}

.what-card p {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.6;
}

/* Hover effect */
.what-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 45px rgba(0,0,0,0.15);
}

/* Mobile adjustments */
@media (max-width: 576px) {
    .what-card {
        padding: 30px 22px;
    }
}

/* ===== FULL WIDTH IMAGE ===== */
.what-image-section {
    width: 100%;
    height: 500px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
}

.what-image-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
}

.what-image-overlay h2 {
    color: #fff;
    font-size: 2.8rem;
    font-weight: 800;
    margin-bottom: 16px;
    text-shadow: 2px 2px 12px rgba(0,0,0,0.5);
}

.what-image-overlay p {
    color: #f1f1f1;
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto;
    text-shadow: 1px 1px 8px rgba(0,0,0,0.4);
}

@media (max-width: 768px) {
    .what-image-section {
        height: 380px;
    }
    .what-image-overlay h2 {
        font-size: 2rem;
    }
    .what-image-overlay p {
        font-size: 1rem;
    }
}

</style>
@endpush
