@extends('layout')

@section('title', 'Our Foundation')

@section('content')
<div class="container my-5">

    <!-- HERO -->
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">Our Foundation</h1>
        <p class="lead text-secondary mx-auto" style="max-width: 720px;">
            A faith-driven foundation dedicated to education, healthcare,
            community development, and empowering the next generation.
        </p>
    </div>

    <!-- FOUNDATION FOCUS AREAS -->
    @php
        $headings = [
            ['title' => 'Education', 'desc' => 'Scholarships, learning support, and academic empowerment.', 'icon' => 'bi-mortarboard'],
            ['title' => 'Healthcare', 'desc' => 'Medical outreach, wellness programs, and health awareness.', 'icon' => 'bi-heart-pulse'],
            ['title' => 'Community Support', 'desc' => 'Helping families and strengthening communities.', 'icon' => 'bi-people'],
            ['title' => 'Spiritual Growth', 'desc' => 'Faith-based guidance and moral development.', 'icon' => 'bi-moon-stars'],
            ['title' => 'Youth Empowerment', 'desc' => 'Mentorship and leadership development for young people.', 'icon' => 'bi-lightning'],
        ];
    @endphp

    <div class="row justify-content-center g-4 mb-5">
        @foreach($headings as $heading)
            <div class="col-md-4 col-lg-2">
                <div class="card focus-card h-100 text-center border-0 shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="focus-icon mb-3">
                            <i class="bi {{ $heading['icon'] }}"></i>
                        </div>
                        <h5 class="fw-bold text-primary mb-2">{{ $heading['title'] }}</h5>
                        <p class="text-secondary small mb-0">{{ $heading['desc'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- FULL FOUNDATION STORY -->
    <div class="story-section p-4 p-md-5 rounded shadow-sm">
        <h2 class="text-center fw-bold mb-4">Our Story</h2>
        <div class="mt-4 p-4 p-md-5 bg-white rounded shadow-sm">

            <h3 class="fw-bold text-center mb-4">
                <i class="bi bi-heart-fill text-primary me-2"></i>
                Where Every Heartbeat Echoes Faith, Every Hand Reaches Hope
            </h3>

            <p class="text-muted text-center mb-5">
                In the name of Allah, the Most Gracious, the Most Merciful.
            </p>

            <!-- Story Section 1 -->
            <h5 class="fw-bold text-primary mb-2">
                <i class="bi bi-chat-left-quote me-2"></i>
                The Whisper That Started a Movement
            </h5>
            <p>
                It was a cold winter night in a refugee camp when Fatima, a widow with three
                children, whispered to our founder:
                <em>“We have lost everything but our faith. But sometimes, even that feels heavy
                to carry alone.”</em>
            </p>
            <p>
                That whisper became our mission. That weight became our purpose.
                RMFF exists to carry what feels too heavy,
                to renew the faith that hardship tries to steal.
            </p>

            <!-- Story Section 2 -->
            <h5 class="fw-bold text-primary mt-4 mb-2">
                <i class="bi bi-emoji-smile me-2"></i>
                Mercy in Motion — Lives Touched, Hearts Renewed
            </h5>
            <p>
                In Sudan, mother Mariam once divided a single bottle of water among her children.
                When RMFF drilled a well in her village, she wept and said,
                <em>“I can finally let them drink without fear.”</em>
            </p>
            <p>
                In Afghanistan, orphaned Amina hugged her first Qur’an and prayer mat and whispered,
                <em>“Now I have my Allah with me.”</em>
            </p>

            <!-- Story Section 3 -->
            <h5 class="fw-bold text-primary mt-4 mb-2">
                <i class="bi bi-book-half me-2"></i>
                Lighting the Path with Knowledge
            </h5>
            <p>
                We do not merely pay school fees. We nurture future scholars, doctors,
                and leaders who understand that seeking knowledge is an act of worship.
            </p>
            <p>
                Aisha, whose father died when she was twelve, once believed her dreams died too.
                Today, supported by RMFF, she is graduating as a medical doctor.
                <em>“My first patient will be treated with skill and Islamic compassion,”</em>
                she says.
            </p>

            <!-- Story Section 4 -->
            <h5 class="fw-bold text-primary mt-4 mb-2">
                <i class="bi bi-people-fill me-2"></i>
                Rebuilding the Ummah — One Heart at a Time
            </h5>
            <p>
                Our community gatherings are not events — they are reunions.
                Refugees teach youth, new converts find family, and neighbors
                become allies.
            </p>
            <p>
                During Ramadan in a flood-stricken village, children laughed while breaking
                their first meal in days. Their mother whispered,
                <em>“You brought joy when all hope was gone.”</em>
            </p>

            <!-- Story Section 5 -->
            <h5 class="fw-bold text-primary mt-4 mb-2">
                <i class="bi bi-heart-pulse me-2"></i>
                Healing What Cannot Be Seen
            </h5>
            <p>
                Trauma, grief, and silent pain exist in our communities.
                Through Islamic-integrated therapy and Qur’anic storytelling,
                we help hearts heal.
            </p>
            <p>
                Yusuf, who lost his family to conflict, once said,
                <em>“I can smile without guilt now.”</em>
            </p>

            <!-- Story Section 6 -->
            <h5 class="fw-bold text-primary mt-4 mb-2">
                <i class="bi bi-lightning-charge me-2"></i>
                Raising the Leaders of Tomorrow
            </h5>
            <p>
                Our youth do not wait for the future — they lead today.
                From relief missions to youth-led dawah initiatives,
                we raise voices grounded in faith and courage.
            </p>
            <p>
                Sixteen-year-old Lina led a flood relief team and later said,
                <em>“Allah showed me that my voice could guide others.”</em>
            </p>

            <hr class="my-4">
            <p class="fw-semibold">
                These are not beneficiaries. They are our family.
                Their pain is our pain. Their faith — shaken yet unbroken — 
                is our shared responsibility.
            </p>
            <p class="mb-0">
                Your trust is our sacred <em>amanah</em>.
                Your reward is with <strong>Ar-Razzaq</strong>.
            </p>

        </div>
    </div>

    <!-- FOUNDATION STATISTICS -->
    <div class="row text-center my-5">
        <div class="col-md-3">
            <i class="bi bi-mortarboard-fill display-4 text-primary"></i>
            <h3 class="fw-bold counter" data-target="500">500</h3>
            <p>Students Sponsored</p>
        </div>
        <div class="col-md-3">
            <i class="bi bi-droplet-fill display-4 text-primary"></i>
            <h3 class="fw-bold counter" data-target="20">20</h3>
            <p>Villages Served</p>
        </div>
        <div class="col-md-3">
            <i class="bi bi-people-fill display-4 text-primary"></i>
            <h3 class="fw-bold counter" data-target="10000">10,000</h3>
            <p>Lives Touched</p>
        </div>
        <div class="col-md-3">
            <i class="bi bi-hand-thumbs-up-fill display-4 text-primary"></i>
            <h3 class="fw-bold counter" data-target="200">200</h3>
            <p>Mentorship Hours</p>
        </div>
    </div>

    <!-- TESTIMONIALS CAROUSEL -->
    <div class="carousel slide" id="testimonials" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <p>"Thanks to RMFF, I can now study and dream big!"</p>
                <small>- Aisha, Student</small>
            </div>
            <div class="carousel-item text-center">
                <p>"They brought water to our village when we had none."</p>
                <small>- Mariam, Sudan</small>
            </div>
            <div class="carousel-item text-center">
                <p>"RMFF helped me continue my education despite the floods."</p>
                <small>- Ibrahim, Nigeria</small>
            </div>
            <div class="carousel-item text-center">
                <p>"The mentorship I received changed my outlook on life."</p>
                <small>- Fatima, Afghanistan</small>
            </div>
            <div class="carousel-item text-center">
                <p>"I finally have clean water to drink thanks to RMFF!"</p>
                <small>- Hanan, Sudan</small>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- DONATE & VOLUNTEER CTA -->
    <div class="text-center my-5">
        <h3 class="fw-bold mb-3">Become a Part of the Change</h3>
        <a href="/donate" class="btn btn-primary me-3"><i class="bi bi-gift-fill me-2"></i>Donate</a>
        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#volunteerModal">
            <i class="bi bi-people-fill me-2"></i>Volunteer
        </button>
    </div>

</div>

<!-- VOLUNTEER SIGN-UP MODAL -->
<div class="modal fade" id="volunteerModal" tabindex="-1" aria-labelledby="volunteerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="volunteerModalLabel">Volunteer Sign-Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('volunteer.submit') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Your full name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="+234..." required>
            </div>
            <div class="mb-3">
                <label class="form-label">Volunteer Area</label>
                <select name="area" class="form-select" required>
                    <option value="">Select an area</option>
                    <option value="community">Community Support</option>
                    <option value="education">Education & Mentorship</option>
                    <option value="relief">Relief & Outreach</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Message (optional)</label>
                <textarea name="message" class="form-control" rows="3" placeholder="Tell us more..."></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
<style>
/* Story section and volunteer modal */
.story-section h5 i {
    font-size: 1.3rem;
    vertical-align: middle;
}
.story-card {
    border-radius: 14px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.story-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}
.story-section > div p {
    line-height: 1.8;
    color: #444;
    margin-bottom: 1rem;
}
.story-section h3 {
    font-size: 1.85rem;
}
.modal-body .form-control, .modal-body .form-select {
    border-radius: 10px;
}
@media (max-width: 768px) {
    .story-section h3 { font-size: 1.5rem; }
    .story-section h5 i { font-size: 1.1rem; }
}
</style>
@endpush
