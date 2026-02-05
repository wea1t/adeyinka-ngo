@extends('layout')

@section('title', 'Matchmaking')

@section('content')

<div class="container py-5">
    <div class="text-center mb-4">
        <h1>Matchmaking</h1>
        <p class="lead text-muted">Ethical, faith-centred matchmaking to help build sincere, lasting unions.</p>
    </div>

    <div class="row">
        <div class="col-md-8">
            <p>
                Our matchmaking services are guided by Islamic values, respect, and privacy. We
                support individuals and families seeking compatible, faith-aligned partners and
                provide counselling and guidance through the process.
            </p>
            <h5>How it works</h5>
            <ul>
                <li>Initial confidential conversation</li>
                <li>Values and compatibility assessment</li>
                <li>Chaperoned introductions</li>
                <li>Support and counselling for couples</li>
            </ul>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/home/matchmaking.jpeg') }}" class="img-fluid rounded" alt="Matchmaking">
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('contact.us') }}" class="btn btn-primary">Get in Touch</a>
    </div>
</div>

@endsection
