@extends('layout')

@section('title', 'Donation')

@section('content')
<div class="container my-5">
    <!-- PAGE HEADER -->
    <h2 class="text-center mb-4">Support Our Cause</h2>
    <p class="text-center mb-5 fs-5 text-secondary">
        Every contribution helps us empower communities and serve humanity.
    </p>

    <!-- SUCCESS / ERROR MESSAGES -->
    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @endif

    <!-- DONATION FORM -->
    <div class="card shadow donation-card mb-5 mx-auto p-4">
        <form action="{{ route('donate.submit') }}" method="POST">
            @csrf
            <div class="row g-3">
                <!-- NAME -->
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
                </div>

                <!-- EMAIL -->
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                </div>

                <!-- AMOUNT -->
                <div class="col-md-6">
                    <label class="form-label">Amount (₦)</label>
                    <input type="number" name="amount" class="form-control" placeholder="5000" required>
                </div>

                <!-- MESSAGE -->
                <div class="col-md-12">
                    <label class="form-label">Message (optional)</label>
                    <textarea name="donation_message" class="form-control" rows="4" placeholder="Your message..."></textarea>
                </div>

                <!-- SUBMIT BUTTON -->
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg mt-3">Donate Now</button>
                </div>
            </div>
        </form>
    </div>

    <!-- RECENT DONATIONS TABLE -->
    <h3 class="mb-4">Recent Donations</h3>
    <div class="table-responsive shadow rounded">
        <table class="table table-hover donation-table mb-5">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($donations as $donation)
                    <tr>
                        <td>{{ $donation->name }}</td>
                        <td>{{ $donation->email }}</td>
                        <td>₦{{ number_format($donation->amount) }}</td>
                        <td>{{ $donation->message ?? '—' }}</td>
                        <td>{{ $donation->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No donations yet. Be the first to donate!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<style>
/* ===== DONATION FORM ===== */
.donation-card {
    max-width: 800px;
    border-radius: 18px;
    border: none;
    background: #ffffff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.donation-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

.form-control {
    border-radius: 12px;
    padding: 10px 15px;
    font-size: 1rem;
}

.form-label {
    font-weight: 600;
}

.btn-primary {
    background: #0d6efd;
    border: none;
    border-radius: 12px;
    padding: 10px 30px;
    font-size: 1.1rem;
    transition: background 0.3s ease, transform 0.3s ease;
}

.btn-primary:hover {
    background: #0b5ed7;
    transform: translateY(-2px);
}

/* ===== RECENT DONATIONS TABLE ===== */
.donation-table th, .donation-table td {
    vertical-align: middle;
}

.donation-table tr:hover {
    background-color: #f1f5ff;
}

.table-responsive {
    overflow-x: auto;
}

/* MOBILE */
@media (max-width: 576px) {
    .donation-card {
        padding: 20px;
    }
}
</style>
@endpush
