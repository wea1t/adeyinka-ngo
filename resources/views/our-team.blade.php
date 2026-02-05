@extends('layout')

@section('title', 'Our Team')

@section('content')

<div class="container py-5">
    <div class="text-center mb-4">
        <h1>Our Team</h1>
        <p class="lead text-muted">Leadership, volunteers and partners committed to service.</p>
    </div>

    <div class="row g-4">
        @php
            $team = [
                ['img'=>asset('images/contributors/founder.jpg'), 'name'=>'Founder and Chairman', 'role'=>'Founder'],
                ['img'=>asset('images/contributors/lawal.jpg'), 'name'=>'Lawal Habiba', 'role'=>'Treasurer'],
                ['img'=>asset('images/contributors/ibrahim.jpg'), 'name'=>'Ibrahim Mustapha Olasunkanmi', 'role'=>'Secretary'],
                ['img'=>asset('images/contributors/nimatallah.jpg'), 'name'=>'Nimatallah Lawal', 'role'=>'Program Coordinator'],
            ];
        @endphp

        @foreach($team as $member)
            <div class="col-12 col-md-3">
                <div class="card h-100 text-center border-0 shadow-sm">
                    <img src="{{ $member['img'] }}" class="card-img-top" alt="{{ $member['name'] }}">
                    <div class="card-body">
                        <h6 class="mb-0">{{ $member['name'] }}</h6>
                        <small class="text-muted">{{ $member['role'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
