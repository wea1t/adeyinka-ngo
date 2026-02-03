@extends('layout')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Contact Us</h2>
        <p class="text-muted">We’d love to hear from you</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <h5>Get in Touch</h5>
            <p>
                Have questions, suggestions, or want to partner with us?
                Reach out and we’ll respond as soon as possible.
            </p>

            <ul class="list-unstyled">
                <li><strong>Email:</strong> renewedmuslimfaith@gmail.com</li>
                <li><strong>Phone:</strong> +234 XXX XXX XXXX</li>
                <li><strong>Location:</strong> Nigeria</li>
            </ul>
        </div>

        <div class="col-md-6">
            <h5>Send a Message</h5>


              @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            {{-- FORM CAN BE CONNECTED LATER --}}
           <form method="POST" action="{{ route('contact.submit') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="4" required></textarea>
    </div>

    <button class="btn btn-success w-100">Send Message</button>
</form>

        </div>
    </div>
</div>
@endsection
