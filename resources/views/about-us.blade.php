@extends('layout')

@section('title', 'About Us')

@section('content')

<!-- INTRO SECTION -->
<section class="about-hero-section text-center py-5">
    <div class="container">
        <h2 class="fw-bold">About Us</h2>
        <p class="lead text-muted">Faith in Action. Mercy in Motion.</p>
    </div>
</section>

<!-- MAIN ABOUT SECTION -->
<section class="about-main py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/about/banner1.jpeg') }}" class="img-fluid rounded shadow" alt="RMFF Community">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Renewed Muslim Faith Foundation</h3>
                <p>
                    Renewed Muslim Faith Foundation is a deeply heartfelt, faith-based non-profit organization born from tears, love, and an unbreakable commitment to the Ummah. We are dedicated to renewing spiritual consciousness that once burned brightly in hearts, strengthening moral values that guide every step, and tenderly uplifting the well-being of individuals, families, and entire communities who have felt forgotten, weary, or lost.
Rooted in the pure, timeless light of Islam, we bridge the sacred space between sincere iman and compassionate, life-changing action. We see the silent struggles that weigh on souls: the quiet fading of salah in busy lives, the vulnerability of our youth drifting toward confusion and temptation, the fragile threads of family bonds straining under hardship and misunderstanding, the aching loneliness of widows carrying burdens alone, the innocent eyes of orphans searching for a sense of belonging, and the underserved communities crying out for hope, dignity, and a helping hand that truly cares.
Our foundation was established not from grand plans, but from a profound ache in the heart a deep sense of responsibility and love for Allah's creation. We believe that lasting healing and transformation begin with ikhlās (pure sincerity), gentle Islamic guidance that soothes the soul, and unwavering compassionate support that says, without words: You are seen. You are valued. You are never truly alone Allah has not abandoned you, and neither will we.
                </p>
            </div>
        </div>

        <!-- LONG TEXT BLOCK WITH IMAGE BREAK -->
        <div class="row mb-5">
            <div class="col-md-12">
                <p>
                    Rooted in the pure, timeless light of Islam, we bridge the sacred space between sincere iman and compassionate, life-changing action. We see the silent struggles that weigh on souls: the quiet fading of salah in busy lives, the vulnerability of our youth drifting toward confusion and temptation, the fragile threads of family bonds straining under hardship and misunderstanding, the aching loneliness of widows carrying burdens alone, the innocent eyes of orphans searching for a sense of belonging, and the underserved communities crying out for hope, dignity, and a helping hand that truly cares.
Our foundation was established not from grand plans, but from a profound ache in the heart a deep sense of responsibility and love for Allah's creation. We believe that lasting healing and transformation begin with ikhlās (pure sincerity), gentle Islamic guidance that soothes the soul, and unwavering compassionate support that says, without words: You are seen. You are valued. You are never truly alone Allah has not abandoned you, and neither will we.
With tears of gratitude and determination, we offer holistic, Shariah-compliant programs filled with rahmah and purpose:
Islamic education and da‘wah  Igniting hearts anew with the Qur’an’s soothing recitation, the Prophet’s (PBUH) beautiful sunnah, and reminders of Allah’s endless mercy that bring tears of joy and renewed closeness to Him.
Mentorship and counseling  Sitting with broken hearts in safe spaces, listening with empathy, offering faith-rooted healing for emotional wounds, marital storms, personal doubts, and inner turmoil so individuals emerge stronger, more peaceful, and deeply connected to their Lord.
Youth empowerment initiatives — Wrapping our young ones in love, purpose, and protection; guiding them through mentorship, skills training, faith-building adventures, and safe communities where they can grow confident, proud of their deen, and excited for a future filled with barakah.
                </p>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('images/about/youth-emp.jpeg') }}" class="img-fluid rounded shadow" alt="Youth Empowerment">
            </div>
            <div class="col-md-6 order-md-1">
                <h4 class="fw-bold">Our Programs</h4>
                <ul>
                    <li><strong>Islamic Education & Da‘wah:</strong> Igniting hearts anew with Qur’an and Sunnah.</li>
                    <li><strong>Mentorship & Counseling:</strong> Safe spaces for healing and renewal.</li>
                    <li><strong>Youth Empowerment:</strong> Guiding young ones with love and purpose.</li>
                    <li><strong>Humanitarian Assistance:</strong> Urgent relief and sustainable aid.</li>
                    <li><strong>Ethical Matchmaking:</strong> Faith-centered unions built on respect.</li>
                    <li><strong>Mosques & Madrasahs:</strong> Sacred spaces of worship and learning.</li>
                    <li><strong>Widows & Orphans Support:</strong> Empowerment, shelter, and belonging.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PURPOSE SECTION -->
<section class="about-purpose py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Our Purpose</h3>
        <div class="row g-4">
            <div class="col-md-6">
                <h5>Mission</h5>
                <p>
                    To serve humanity selflessly for the pleasure of Allah (SWT) by rushing heartfelt relief to those gripped by despair, awakening inner strength and dignity through sustainable empowerment, and providing nurturing faith rooted care that mends broken families, revives weary and wounded spirits, rebuilds shattered hopes, and fosters resilient thriving communities. This includes constructing and maintaining mosques as beacons of worship and unity, establishing madrasahs to nurture young hearts with Quranic knowledge and moral guidance, and offering ongoing compassionate support to widows and orphans through provision, protection, education, and emotional upliftment. Every effort is rooted in the highest excellence, absolute unwavering transparency, and complete Shariah compliant integrity, so that our work becomes a living reflection of divine mercy in action.
                </p>
            </div>
            <div class="col-md-6">
                <h5>Vision</h5>
                <p>
                    A radiant hopeful world illuminated by unwavering faith, where suffering finds gentle solace in the arms of shared compassion, where isolated lonely hearts discover the comforting warmth of true brotherhood and sisterhood, where forgotten souls especially widows and orphans are remembered, cherished, and lifted with dignity, and where generous loving hands transform crushing hardship into blooming vibrant hope. We envision communities enriched by towering mosques that echo the call to prayer, vibrant madrasahs filled with eager children learning the light of the Quran, fragile lives turned into empowered confident futures, fleeting pain into lasting inner peace, profound dignity, and unbreakable joy for every single soul under the vast mercy of Allah.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- VALUES SECTION -->
<section class="about-values py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Guiding Values</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="{{ asset('images/about/compassion.jpeg') }}" class="img-fluid rounded mb-3" alt="Compassion">
                <h5>Rahmah (Compassion)</h5>
                <p>Extending gentle life giving mercy to every wounded hurting soul, responding to silent cries of pain with open tender hearts, healing hands, and comforting presence that says "you are not alone" especially embracing widows, orphans, and those in spiritual need.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/about/trust.jpeg') }}" class="img-fluid rounded mb-3" alt="Trust">
                <h5>Amanah (Trust)</h5>
                <p>Cherishing every resource every precious story and every entrusted life as a divine sacred amanah, protecting it with unshakeable rock solid honesty reverence and profound accountability before Allah and His beloved creation.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/about/excellence.jpeg') }}" class="img-fluid rounded mb-3" alt="Excellence">
                <h5>Ihsan (Excellence)</h5>
                <p>Pursuing the highest beauty precision and heartfelt perfection in every single deed and detail from building enduring mosques and madrasahs to delivering aid so our work reflects the very best of our faith brings deep lasting transformative good and honors the One who sees all.</p>
            </div>
            <div class="col-md-4">
                <h5>Ukhuwwah (Brotherhood & Sisterhood)</h5>
                <p>Forging unbreakable eternal ties of genuine love mutual upliftment collective strength and shared destiny, turning strangers into cherished family united in purpose unwavering support and the beautiful bond of iman.</p>
            </div>
            <div class="col-md-4">
                <h5>Adl (Justice & Fairness)</h5>
                <p>Delivering aid with fierce righteous equity and unwavering integrity, ensuring every gift whether for mosque construction, madrasah education, or widow/orphan support reaches those in greatest deepest need without any bias favoritism delay or compromise  upholding justice as an unbreakable pillar of our deen and a command from our Lord.</p>
            </div>
            <div class="col-md-4">
                <h5>Ikhlas (Sincerity)</h5>
                <p>Serving from the purest depths of undivided hearts seeking nothing nothing but Allah's boundless love approval and nearness, so every action from raising minarets to comforting an orphan  becomes a radiant beacon of genuine pure devotion that lights up darkened paths and draws His endless mercy.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHO WE ARE SECTION -->
<section class="about-who-we-are py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Who We Are</h3>
        <p class="text-center mb-5">
            Renewed Muslim Faith Foundation is a heartfelt, faith-driven humanitarian and community development organization, deeply committed to serving the most vulnerable individuals and families with boundless compassion, unwavering dignity, profound integrity, and genuine love rooted in the timeless teachings of Islam.
        </p>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="{{ asset("images/about/widow-support.jpeg") }}" class="img-fluid rounded shadow" alt="Widows Support">
                <h5>Widows Empowerment</h5>
                <p>Empowering widows with dignity-restoring opportunities through skills training, sustainable income support, emotional care, and community belonging so they rise strong, independent, and cherished once more.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset("images/about/orphan-support.jpeg") }}" class="img-fluid rounded shadow" alt="Orphans Support">
                <h5>Orphans Care</h5>
                <p>Sheltering and uplifting orphans with loving protection, nutritious care, joyful companionship, and heartfelt guidance to grow into confident, faithful individuals who know they are valued and never truly alone.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset("images/about/quran-classes.jpeg") }}" class="img-fluid rounded shadow" alt="Quran Classes">
                <h5>Quran Classes</h5>
                <p>Offering inspiring Quran classes in nurturing environments, where young hearts memorize the words of Allah, find inner peace, build moral character, and light up their souls with the eternal beauty of the Quran.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset("images/about/mosques.jpeg") }}" class="img-fluid rounded shadow" alt="Mosques & Madrasahs">
                <h5>Mosques & Madrasahs</h5>
                <p>Building and sustaining mosques and madrasahs as sacred beacons of worship, learning, unity, and hope places where communities gather in prayer, children thirst for knowledge, and the call to faith echoes as a source of comfort and strength for generations.</p>
            </div>
        </div>
    </div>
</section>


<!-- HOW WE WORK -->
<section class="about-how-we-work py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">How We Work & Our Commitment</h3>
        <p class="text-center mb-5">At Renewed Muslim Faith Foundation, we embrace a compassionate, balanced path that touches every layer of human need delivering immediate relief to ease urgent suffering, building sustainable empowerment to restore dignity and independence, and nurturing spiritual strengthening to deepen faith, heal hearts, and foster unbreakable emotional resilience. Guided by Islamic principles, we ensure every act of kindness revives hope, mends broken spirits, and lights the way toward a brighter, more faithful tomorrow.</p>
        <div class="row g-4">
            <div class="col-md-6">
                <h5>Our Holistic Approach</h5>
                <p>Our process is rooted in sincerity, respect, and community trust:
Needs Assessment with Local Leaders We listen deeply to community voices, elders, and those directly affected, identifying true hardships with empathy and humility.</p>
            </div>
            <div class="col-md-6">
                <h5>Transparency & Accountability</h5>
                <ul>
                    <li>100% Zakat Policy</li>
                    <li>Clear Financial Reporting</li>
                    <li>Shariah-Compliant Operations</li>
                    <li>Regular Donor Updates</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PARTNERSHIPS -->
<section class="about-partnerships py-5">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Partnerships, Support & Impact</h3>
        <p class="text-center mb-5">At Renewed Muslim Faith Foundation, we believe true change blooms through unity and shared hearts. We warmly partner with dedicated community organizations, respected Islamic scholars, passionate volunteers, and ethical like-minded allies to amplify our reach, deepen our roots, and build stronger, more resilient communities. Together, we weave a beautiful tapestry of compassion combining knowledge, resources, and sincere intentions to serve humanity with greater love, efficiency, and lasting barakah.</p>
        <div class="row g-4">
            <div class="col-md-6">
                <h5>Ways to Support RMFF</h5>
                <ul>
                    <li>One-time donations</li>
                    <li>Monthly giving</li>
                    <li>Sponsor an orphan, widow, or student</li>
                    <li>Sadaqah Jariyah projects</li>
                    <li>Corporate partnerships</li>
                    <li>Volunteering</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/about/support-rffm.jpeg') }}" class="img-fluid rounded shadow" alt="Support RMFF">
            </div>
        </div>
    </div>
</section>

<!-- OUR CALL -->
<section class="about-call py-5 bg-light">
    <div class="container">
        <h3 class="fw-bold text-center mb-4">Our Call & Purpose</h3>
        <p class="text-center mb-5">Answering the cry of the Ummah with faith and action</p>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/about/call-mercy.jpeg') }}" class="img-fluid rounded shadow" alt="Call of Mercy">
            </div>
            <div class="col-md-6">
                <p>Some cries are loud, piercing the air with desperation. Others are silent whispers carried only on the wind of a heavy heart, yet they echo straight to the Throne of Allah.
A hungry child curling up at night with an empty stomach and tear-streaked cheeks.
A weary mother clutching her child, wondering how she will provide tomorrow's meal.
A father bowing in sujood, pleading with his Lord, "Ya Allah, how will we survive?"
These cries may never make headlines or reach distant ears, but they never go unheard by the Most Merciful. And sometimes, in His infinite wisdom, Allah answers them through ordinary people moved by extraordinary iman people like you, like us.
Renewed Muslim Faith Foundation was born from this profound conviction: when even one part of the Ummah suffers, the entire body feels the pain. We are not separate; we are one family under Allah's care. The hunger of a child in Lagos, the loneliness of a widow in the north, the uncertainty of an orphan these are our shared burdens, our collective call to action.
We carry your Zakat, your Sadaqah, your heartfelt dua, and your sincere intentions directly to those teetering on the edge of despair. We remind them, with gentle hands and open hearts: You are not forgotten. Allah sees you. And so do we.
We do more than deliver food, water, or shelter.
We restore shattered dignity with respect and honor.
We protect fragile faith by nurturing it through Quran, prayer, and community.
We reassure wounded hearts that Allah has not abandoned them He has sent mercy through His servants.
From rushing relief to the starving, to empowering widows with skills and hope, to sheltering orphans with love and education, to building mosques and madrasahs where the adhan calls and young souls learn Allah's words every step is an answer to those silent cries.
This is our story: a humble response to Allah's command to care for one another.
This is our purpose: to turn faith into tender action, compassion into healing, and generosity into eternal reward</p>
            </div>
        </div>
    </div>
</section>

<!-- BE A LIFE SAVER -->
<section class="about-life-saver py-5 text-center">
    <div class="container">
        <h3 class="fw-bold">Be a Life Saver</h3>
        <p class="lead">The Call of Mercy – Why Your Gift Echoes Through Eternity</p>
        <blockquote class="blockquote">
            “The example of those who spend their wealth in the way of Allah is like a seed which grows seven spikes...” (Surah Al-Baqarah 2:261)
        </blockquote>
        <p>Your donation is not a transaction, it’s a transformation...</p>
        <a href="/donation" class="btn btn-danger mt-3">Donate Now</a>
    </div>
</section>


@endsection
