@extends('layout')

@section('title', 'Privacy & Policy')

@section('content')

<div class="container my-5">
    <h1 class="fw-bold mb-3">Privacy Policy</h1>

    <p class="text-muted">Last updated: {{ date('F d, Y') }}</p>

    <p>
        Renewed Muslim Faith Foundation values your privacy. This policy explains what
        data we collect, how we use it, and the choices you have. By using our website you
        agree to the practices described here.
    </p>

    <h4 class="mt-4">Information We Collect</h4>
    <ul>
        <li>Personal information you provide directly (name, email, contact details).</li>
        <li>Donation and payment details submitted during a donation process.</li>
        <li>Technical data such as IP address, browser type, and device information collected automatically.</li>
    </ul>

    <h4 class="mt-4">How We Use Your Information</h4>
    <ul>
        <li>To respond to enquiries and provide services you request (e.g., donations, volunteer coordination).</li>
        <li>To process transactions and send receipts or updates.</li>
        <li>To improve our website and user experience.</li>
    </ul>

    <h4 class="mt-4">Cookies</h4>
    <p>We use cookies to improve your experience. The cookie consent banner controls non-essential cookies.</p>

    <h4 class="mt-4">Third-party Links</h4>
    <p>Our site may contain links to third-party services. We are not responsible for their privacy practices.</p>

    <h4 class="mt-4">Security</h4>
    <p>We take reasonable measures to protect your information, but no method of transmission is 100% secure.</p>

    <h4 class="mt-4">Contact</h4>
    <p>If you have questions about this policy, please <a href="{{ route('contact.us') }}">contact us</a>.</p>

</div>

@endsection
