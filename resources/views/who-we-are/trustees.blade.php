@extends('layout')

@section('title', 'Our Leaders')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-5">Our Leaders</h2>
    <div class="row g-4 justify-content-center">

        <!-- Leader 1 -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/leaders/leader1.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Leader Name">
            <h5>John Doe</h5>
            <p class="text-muted">Founder & CEO</p>
        </div>

        <!-- Leader 2 -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/leaders/leader2.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Leader Name">
            <h5>Jane Smith</h5>
            <p class="text-muted">Program Director</p>
        </div>

        <!-- Add up to 6 leaders -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/leaders/leader3.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Leader Name">
            <h5>Samuel Lee</h5>
            <p class="text-muted">Operations Manager</p>
        </div>

        <!-- Leader 4 -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/leaders/leader4.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Leader Name">
            <h5>Mary Johnson</h5>
            <p class="text-muted">Finance Lead</p>
        </div>

        <!-- Leader 5 -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/leaders/leader5.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Leader Name">
            <h5>David Brown</h5>
            <p class="text-muted">Community Manager</p>
        </div>

        <!-- Leader 6 -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/leaders/leader6.jpg') }}" class="img-fluid rounded-circle mb-3" alt="Leader Name">
            <h5>Lisa White</h5>
            <p class="text-muted">Volunteer Coordinator</p>
        </div>

    </div>
</div>
@endsection
