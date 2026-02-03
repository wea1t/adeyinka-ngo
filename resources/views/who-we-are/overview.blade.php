@extends('layout')

@section('title', 'Who We Are')

@section('content')

<!-- Hero Section -->
<div class="hero text-center mb-5">
    <h1>Who We Are</h1>
    <p class="lead">
        Renewed Muslim Faith is dedicated to spiritual growth, unity, and service to humanity.
    </p>
</div>

<!-- Overview Section -->
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h2 class="mb-3">Our Overview</h2>
            <p>
                Renewed Muslim Faith is a faith-based non-profit organization committed to
                strengthening Islamic values while promoting compassion, education, and community
                development. We believe that faith should inspire action—uplifting individuals,
                supporting families, and serving society with sincerity and accountability.
            </p>
            <p>
                Through outreach programs, spiritual guidance, humanitarian initiatives, and
                leadership development, we aim to build a united and morally grounded community
                that reflects the true teachings of Islam.
            </p>
        </div>
    </div>
</div>

<!-- Mission, Vision, Values -->
<div class="container mb-5">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="feature-card text-center h-100">
                <i class="bi bi-compass fs-1"></i>
                <h5 class="mt-3">Our Mission</h5>
                <p>
                    To renew Islamic faith through education, compassion, and community empowerment.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card text-center h-100">
                <i class="bi bi-eye fs-1"></i>
                <h5 class="mt-3">Our Vision</h5>
                <p>
                    A world where faith inspires positive change, unity, and peaceful coexistence.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card text-center h-100">
                <i class="bi bi-heart fs-1"></i>
                <h5 class="mt-3">Our Values</h5>
                <p>
                    Integrity, service, unity, accountability, and sincerity in all we do.
                </p>
            </div>
        </div>

    </div>
</div>

<!-- Students Section -->
<div class="section-title-wrapper">
    <h2 class="section-title mb-4">
        Students Now in School with RMFF Support
    </h2>
</div>

<div class="row g-3">
    @php
        $people = [
            ['img'=>'/images/bip3.jpg', 'name'=>'Students Now in School with RMFF Support'],
            ['img'=>'/images/bip1.jpg', 'name'=>'Students Now in School with RMFF Support'],
            ['img'=>'/images/bip2.jpg', 'name'=>'Students Now in School with RMFF Support'],
            ['img'=>'/images/bip4.jpg', 'name'=>'Students Now in School with RMFF Support'],
            ['img'=>'/images/bip5.jpg', 'name'=>'Students Now in School with RMFF Support'],
            ['img'=>'/images/control10.jpg', 'name'=>'Students Now in School with RMFF Support'],
            ['img'=>'/images/control11.jpg', 'name'=>'Students Now in School with RMFF Support'],
        ];
    @endphp

    @foreach($people as $person)
        <div class="col-6 col-md-3">
            <div class="card text-white position-relative overflow-hidden border-0 team-card">
                <img src="{{ $person['img'] }}"
                     class="card-img team-img"
                     alt="{{ $person['name'] }}">

                <div class="card-img-overlay d-flex align-items-end p-0">
                    <div class="w-100 text-center bg-dark bg-opacity-50 py-2">
                        <h6 class="mb-0">{{ $person['name'] }}</h6>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


<!-- COMMUNITY GALLERY SECTION -->
<div class="container my-5">

    <!-- Shaped Headline -->
    <div class="gallery-title text-center mb-5">
        <h2>Life at Renewed Muslim Faith</h2>
        <span class="gallery-shape"></span>
    </div>

    <div class="row g-4 community-gallery">

        @php
            $gallery2 = [
                ['img'=>'/images/lop2.jpg', 'title'=>'Weekend and Arabic Classes'],
                ['img'=>'/images/lop3.jpg', 'title'=>'Community Service'],
                ['img'=>'/images/lop4.jpg', 'title'=>'Youth Engagement'],
                ['img'=>'/images/lop5.jpg', 'title'=>'Educational Support'],
                ['img'=>'/images/lop6.jpg', 'title'=>'Spiritual Growth'],
                ['img'=>'/images/my3.jpg', 'title'=>'Unity & Hope'],
            ];
        @endphp

        @foreach($gallery2 as $item)
            <div class="col-12 col-md-4">
                <div class="gallery-card">
                    <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                    <div class="gallery-overlay">
                        <h5>{{ $item['title'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection

{{-- @push('styles')
<style>
/* HERO SECTION WITH ANIMATED BACKGROUND AND PARTICLE EFFECT */

</style>
@endpush --}}
