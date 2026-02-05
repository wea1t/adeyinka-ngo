@extends('layout')

@section('title', 'Search')

@section('content')
<div class="container py-4">
    <div class="feature-card">
        <h2>Search</h2>
        <p>Use the form below to search our site.</p>
        <form action="{{ route('search') }}" method="get" class="mt-3">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
@endsection
