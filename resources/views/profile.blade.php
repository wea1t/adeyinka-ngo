@extends('layout')

@section('title', 'My Profile')

@section('content')
<div class="container my-5">
    <h2 class="text-center fw-bold mb-4">My Profile</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">

            <!-- PROFILE PICTURE CARD -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center p-4">
                    <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('images/default-avatar.png') }}" 
                         class="img-fluid rounded-circle mb-3 profile-pic" alt="Profile Picture">
                    <input type="file" name="profile_picture" class="form-control mt-2">
                    <p class="text-muted mt-2 small">Max size: 2MB</p>
                </div>
            </div>

            <!-- PROFILE INFO CARD -->
            <div class="col-md-8">
                <div class="card shadow-sm p-4">
                    <ul class="nav nav-tabs mb-3" id="profileTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab">Personal Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ngo-tab" data-bs-toggle="tab" data-bs-target="#ngo" type="button" role="tab">NGO Info</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="profileTabsContent">
                        <!-- PERSONAL INFO TAB -->
                        <div class="tab-pane fade show active" id="personal" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label class="form-label">Age</label>
                                    <input type="number" name="age" class="form-control" value="{{ $user->age }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" class="form-select">
                                        <option value="">Select Gender</option>
                                        <option value="male" {{ $user->gender=='male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $user->gender=='female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ $user->gender=='other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bio / Description</label>
                                <textarea name="bio" class="form-control" rows="3">{{ $user->bio }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Interests</label>
                                <input type="text" name="interests" class="form-control" value="{{ $user->interests }}">
                                <small class="text-muted">Comma-separated (e.g., Education, Healthcare)</small>
                            </div>
                        </div>

                        <!-- NGO INFO TAB -->
                        <div class="tab-pane fade" id="ngo" role="tabpanel">
                            <div class="mb-3">
                                <label class="form-label">Organization Name</label>
                                <input type="text" name="organization" class="form-control" value="{{ $user->organization }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mission / Focus</label>
                                <textarea name="mission" class="form-control" rows="3">{{ $user->mission }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Website</label>
                                <input type="url" name="website" class="form-control" value="{{ $user->website ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NGO Type</label>
                                <select name="ngo_type" class="form-select">
                                    <option value="">Select Type</option>
                                    <option value="education" {{ $user->ngo_type=='education' ? 'selected' : '' }}>Education</option>
                                    <option value="health" {{ $user->ngo_type=='health' ? 'selected' : '' }}>Healthcare</option>
                                    <option value="relief" {{ $user->ngo_type=='relief' ? 'selected' : '' }}>Relief</option>
                                    <option value="community" {{ $user->ngo_type=='community' ? 'selected' : '' }}>Community</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary btn-lg">Update Profile</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
@endsection

@push('styles')
<style>
/* Profile Picture */
.profile-pic {
    width: 100%;
    max-width: 160px;
    height: auto;
    object-fit: cover;
    border: 4px solid #0d6efd;
}

/* Tabs */
.nav-tabs .nav-link {
    font-weight: 600;
}
.nav-tabs .nav-link.active {
    border-bottom: 3px solid #0d6efd;
}

/* Card Hover */
.card:hover {
    transform: translateY(-3px);
    transition: 0.3s;
}

/* Form Inputs Rounded */
.form-control, .form-select {
    border-radius: 0.5rem;
}
</style>
@endpush
