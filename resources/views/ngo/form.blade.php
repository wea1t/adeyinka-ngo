@extends('layout')

@section('title', 'NGO Submission')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Submit Your NGO</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form action="{{ route('ngo.submit') }}" method="POST" class="mx-auto" style="max-width:600px;">
        @csrf
        <div class="mb-3">
            <label class="form-label">NGO Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone (optional)</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Location (optional)</label>
            <input type="text" name="location" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Mission (optional)</label>
            <textarea name="mission" class="form-control" rows="4"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit NGO</button>
        </div>
    </form>
</div>
@endsection
