@extends('layout')

@section('title', 'Our Impact')

@section('content')

<div class="container py-5">
    <div class="text-center mb-4">
        <h1>Our Impact</h1>
        <p class="lead text-muted">Stories and results from our programs and partnerships.</p>
    </div>

    <div class="row mb-4">
        <div class="col-md-8">
            <h4>Transforming Lives</h4>
            <p>
                Renewed Muslim Faith has supported individuals and families through mentorship,
                education, humanitarian aid, and community-building programs. Our initiatives focus
                on restoring dignity, supporting widows and orphans, empowering youth, and building
                sustainable community projects.
            </p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/home/impact.jpeg') }}" class="img-fluid rounded" alt="Impact">
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card p-3">
                <h5>Education</h5>
                <p>Sponsored students and Quran classes helping young hearts grow.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-3">
                <h5>Humanitarian Support</h5>
                <p>Immediate relief and long-term aid for vulnerable families.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card p-3">
                <h5>Mentorship</h5>
                <p>Emotional and spiritual support to restore hope and resilience.</p>
            </div>
        </div>
    </div>

</div>

@endsection
