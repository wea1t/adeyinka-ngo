@extends('layout')

@section('title', 'NGOs')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Registered NGOs</h2>

    <div class="row">
        @forelse($ngos as $ngo)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5>{{ $ngo->name }}</h5>
                        <p class="text-muted">{{ $ngo->mission }}</p>
                        <a href="{{ route('ngos.show', $ngo) }}" class="btn btn-sm btn-primary">
                            View NGO
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">No NGOs registered yet.</p>
        @endforelse
    </div>
</div>
@endsection
