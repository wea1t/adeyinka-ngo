<h3>User Profile Updated</h3>

<p><strong>Name:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>
<p><strong>Age:</strong> {{ $user->age ?? 'N/A' }}</p>
<p><strong>Gender:</strong> {{ $user->gender ?? 'N/A' }}</p>
<p><strong>Bio:</strong> {{ $user->bio ?? 'N/A' }}</p>
<p><strong>Interests:</strong> {{ $user->interests ?? 'N/A' }}</p>

<hr>

<h4>NGO Information</h4>
<p><strong>Organization Name:</strong> {{ $user->organization ?? 'N/A' }}</p>
<p><strong>Mission / Focus:</strong> {{ $user->mission ?? 'N/A' }}</p>
<p><strong>Website:</strong> {{ $user->website ?? 'N/A' }}</p>
<p><strong>NGO Type:</strong> {{ $user->ngo_type ?? 'N/A' }}</p>
