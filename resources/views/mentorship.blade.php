@extends('layout')

@section('title', 'Mentorship & Counselling')

@section('content')

<div class="container py-5">
    <div class="text-center mb-4">
        <h1>Mentorship & Counselling</h1>
        <p class="lead text-muted">Safe spaces for healing, guidance and spiritual renewal.</p>
    </div>

    <div class="row">
        <div class="col-md-8">
            <p>
                We offer confidential, faith-rooted mentorship and counselling to support individuals
                through emotional wounds, marital challenges, personal doubts, and inner turmoil. Our
                compassionate team listens with empathy and provides guidance grounded in Islamic
                principles so people emerge stronger, more peaceful, and deeply connected to their Lord.
            </p>

            <h5>What to expect</h5>
            <ul>
                <li>Confidential one-on-one support</li>
                <li>Faith-based emotional and spiritual guidance</li>
                <li>Practical steps for recovery and resilience</li>
                <li>Referral to additional services when needed</li>
            </ul>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/home/mentorship.jpeg') }}" class="img-fluid rounded" alt="Mentorship">
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('contact.us') }}" class="btn btn-primary">Contact Us for Support</a>
    </div>
</div>

@endsection
