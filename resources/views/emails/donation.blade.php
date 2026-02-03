<!DOCTYPE html>
<html>
<head>
    <title>New Donation Received</title>
</head>
<body>
    <h2>New Donation Received</h2>
    <p><strong>Name:</strong> {{ $donation->name }}</p>
    <p><strong>Email:</strong> {{ $donation->email }}</p>
    <p><strong>Amount:</strong> ₦{{ number_format($donation->amount) }}</p>
    <p><strong>Message:</strong> {{ $donation->message ?? 'No message provided' }}</p>
    <p><strong>Date:</strong> {{ $donation->created_at->format('d M Y H:i') }}</p>
</body>
</html>
