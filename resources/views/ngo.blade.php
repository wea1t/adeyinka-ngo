@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Partner NGOs</h2>
        <p class="text-muted">Organizations making real impact</p>
    </div>

    <div class="row g-4">

        {{-- NGO Card --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/ngo1.jpg') }}" class="card-img-top" alt="NGO">

                <div class="card-body">
                    <h5 class="card-title fw-bold">Hope Foundation</h5>
                    <p class="card-text">
                        Supporting education and welfare for underprivileged children.
                    </p>

                    <span class="badge bg-success mb-2">Education</span>
                </div>

                <div class="card-footer bg-white border-0">
                    <a href="{{ route('donate.form') }}" class="btn btn-success w-100">
                        Support NGO
                    </a>
                </div>
            </div>
        </div>

        {{-- Duplicate cards for now --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/ngo2.jpg') }}" class="card-img-top" alt="NGO">

                <div class="card-body">
                    <h5 class="card-title fw-bold">Care & Share</h5>
                    <p class="card-text">
                        Providing healthcare and relief support to communities.
                    </p>

                    <span class="badge bg-primary mb-2">Health</span>
                </div>

                <div class="card-footer bg-white border-0">
                    <a href="{{ route('donate.form') }}" class="btn btn-success w-100">
                        Donate
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
