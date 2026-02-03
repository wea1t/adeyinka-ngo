@extends('layout')

@section('title', $ngo->name)

@section('content')
<div class="container my-5">
    <h2>{{ $ngo->name }}</h2>
    <p class="text-muted">{{ $ngo->location }}</p>

    <hr>

    <h5>Mission</h5>
    <p>{{ $ngo->mission }}</p>

    <h5>Description</h5>
    <p>{{ $ngo->description }}</p>

    <a href="{{ route('ngos.index') }}" class="btn btn-secondary mt-3">
        Back to NGOs
    </a>
</div>
@endsection
