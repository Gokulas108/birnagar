@extends('layouts.common_page')
@section('page-content')
<style>
  body {
    color: #0c0a09;
  }

  .text-heading {
    color: oklch(37.4% 0.01 67.558);
  }

  .bg-stone-card {
    background-color: #ffffff;
  }

  /* ── PORTRAIT CARD ── */
  .team-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(200, 120, 30, 0.12);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
  }

  .team-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
  }

  .team-card-img {
    width: 100%;
    aspect-ratio: 3 / 4;
    overflow: hidden;
    position: relative;
    background: #e5e0d8;
  }

  .team-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
    transition: transform 0.7s;
  }

  .team-card:hover .team-card-img img {
    transform: scale(1.06);
  }

  .team-card-img .gradient-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 40%;
    background: linear-gradient(to top, rgba(20, 8, 0, 0.7), transparent);
  }

  .team-card-body {
    padding: 20px 20px 24px;
    position: relative;
  }

  .team-card-icon {
    position: absolute;
    top: -22px;
    right: 20px;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #C8590A;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(200, 90, 10, 0.35);
    font-size: 16px;
  }

  .team-card-name {
    font-family: 'Cinzel', serif;
    font-size: 15px;
    font-weight: 700;
    color: #1c0a00;
    margin-bottom: 4px;
    line-height: 1.3;
  }

  .team-card-role {
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #C8590A;
    font-weight: 700;
  }

  /* ── NAME-ONLY CARD ── */
  .team-name-card {
    background: #fff;
    border-radius: 16px;
    border: 1px solid rgba(200, 120, 30, 0.15);
    padding: 28px 24px;
    display: flex;
    align-items: center;
    gap: 16px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
    transition: transform 0.25s, box-shadow 0.25s;
  }

  .team-name-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  }

  .team-name-icon {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: linear-gradient(135deg, #C8590A, #E8760A);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 16px;
  }

  .team-name-text {}

  .team-name-name {
    font-family: 'Cinzel', serif;
    font-size: 15px;
    font-weight: 700;
    color: #1c0a00;
    margin-bottom: 3px;
  }

  .team-name-role {
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #C8590A;
    font-weight: 700;
  }

  /* ── SECTION DIVIDER ── */
  .section-heading {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 32px;
  }

  .section-heading h3 {
    font-family: 'Cinzel', serif;
    font-size: clamp(20px, 3vw, 28px);
    font-weight: 700;
    color: #44200A;
    white-space: nowrap;
  }

  .section-heading-line {
    height: 1px;
    flex: 1;
    background: rgba(200, 120, 30, 0.25);
  }

  /* ── RESPONSIVE ── */
  @media(max-width: 768px) {
    .team-card-name {
      font-size: 14px;
    }

    .team-name-name {
      font-size: 13px;
    }
  }
</style>

{{-- ══ PAGE HEADER ══ --}}
<div class="text-center mb-16">
  <h2 class="text-stone-500 text-xs font-bold tracking-[0.3em] uppercase mb-4">United in Seva</h2>
  <h1 class="text-4xl md:text-6xl text-heading mb-6 font-bold" style="font-family:'Cinzel',serif;">The Hearts Behind<br>the Project</h1>
  <p class="text-base text-stone-500 italic font-light max-w-xl mx-auto leading-relaxed">
    "We are all tiny servants of the Supreme Lord, working together to build a home for His devotees."
  </p>
</div>

{{-- ══ JAYAPATAKA SWAMI ══ --}}
<div class="flex flex-col md:flex-row items-center gap-10 mb-20 bg-white/50 p-8 rounded-3xl border border-stone-200 shadow-sm">
  <div class="w-full md:w-1/3 relative group flex-shrink-0">
    <div class="absolute -inset-2 bg-orange-400/20 blur-xl rounded-2xl opacity-60 group-hover:opacity-100 transition duration-700"></div>
    <img
      src="{{ asset('images/jps.jpg') }}"
      alt="HH Jayapataka Swami Maharaj"
      class="relative rounded-2xl w-full shadow-xl object-cover object-top"
      style="aspect-ratio: 3/4;" />
  </div>
  <div class="w-full md:w-2/3">
    <p class="text-xs font-bold tracking-widest uppercase text-orange-700 mb-2">Spiritual Leadership</p>
    <h2 class="text-3xl md:text-4xl font-bold text-heading mb-2" style="font-family:'Cinzel',serif;">HH Jayapataka Swami Maharaj</h2>
    <p class="text-xs text-stone-500 uppercase tracking-wider font-bold border-b border-stone-200 pb-4 mb-6 inline-block">
      Inspirational Founder &amp; Spiritual Guide
    </p>
    <p class="text-stone-600 text-base leading-relaxed font-light">
      His Holiness Jayapataka Swami Maharaj is a senior disciple of A. C. Bhaktivedanta Swami Prabhupada and one of the most respected spiritual leaders of ISKCON worldwide. For decades, he has dedicated his life to sharing spiritual knowledge, guiding communities, and establishing devotional projects across the globe. As the inspirational founder and spiritual guide of the Birnagar Temple Project, he continues to inspire devotees to come together in service of this historic initiative.
    </p>
  </div>
</div>

{{-- ══ PRABHUPADA QUOTE ══ --}}
<div class="text-center mb-16 px-4">
  <i class="fas fa-quote-left text-3xl text-amber-300/40 mb-4"></i>
  <h3 class="text-xl md:text-2xl text-stone-700 max-w-3xl mx-auto leading-relaxed font-light italic" style="font-family:'Georgia',serif;">
    "Your love for me will be shown by how much you cooperate to keep this institution together."
  </h3>
  <p class="text-xs font-bold uppercase tracking-widest text-stone-400 mt-4">— Srila Prabhupada</p>
</div>

{{-- ══ CORE TEAM ══ --}}
<div class="mb-16">
  <div class="section-heading">
    <h3>Core Team</h3>
    <div class="section-heading-line"></div>
  </div>

  {{-- Project Director — centred solo card --}}
  <div class="flex justify-center mb-10">
    <div class="team-card w-full max-w-xs">
      <div class="team-card-img">
        <img src="{{ asset('images/chairman.jpeg') }}" alt="Vaikunthapati das" />
        <div class="gradient-overlay"></div>
      </div>
      <div class="team-card-body">
        <div class="team-card-icon"><i class="fas fa-hammer"></i></div>
        <p class="team-card-name">Vaikunthapati das</p>
        <p class="team-card-role">Project Director</p>
      </div>
    </div>
  </div>

  {{-- 2 portrait cards --}}
  <div class="grid grid-cols-2 gap-6 mb-10 max-w-2xl mx-auto">
    <div class="team-card">
      <div class="team-card-img">
        <img src="{{ asset('images/agd.jpeg') }}" alt="Aniruddha Gopala das" />
        <div class="gradient-overlay"></div>
      </div>
      <div class="team-card-body">
        <div class="team-card-icon"><i class="fas fa-hand-holding-dollar"></i></div>
        <p class="team-card-name">Aniruddha Gopala das</p>
        <p class="team-card-role">Finance &amp; Outreach</p>
      </div>
    </div>

    <div class="team-card">
      <div class="team-card-img">
        <img src="{{ asset('images/ggd.jpeg') }}" alt="Govardhana Giri dasa" />
        <div class="gradient-overlay"></div>
      </div>
      <div class="team-card-body">
        <div class="team-card-icon"><i class="fas fa-om"></i></div>
        <p class="team-card-name">Govardhana Giri dasa</p>
        <p class="team-card-role">Seva Coordinator</p>
      </div>
    </div>
  </div>

  {{-- 2 name-only cards --}}
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-2xl mx-auto">
    <div class="team-name-card">
      <div class="team-name-icon"><i class="fas fa-bullhorn"></i></div>
      <div class="team-name-text">
        <p class="team-name-name">Radhapathy Shyam das</p>
        <p class="team-name-role">Communications</p>
      </div>
    </div>
    <div class="team-name-card">
      <div class="team-name-icon"><i class="fas fa-book-open"></i></div>
      <div class="team-name-text">
        <p class="team-name-name">Harikirtan Ranjan das</p>
        <p class="team-name-role">Donor Care &amp; Cultivation</p>
      </div>
    </div>
  </div>
</div>

{{-- ══ JOIN THE MISSION ══ --}}
<div class="bg-amber-900 text-white p-10 md:p-16 rounded-3xl shadow-2xl relative overflow-hidden">
  <div class="absolute -right-20 -top-20 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl"></div>
  <div class="relative z-10 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4" style="font-family:'Cinzel',serif;">Join the Mission</h2>
    <p class="text-base font-light leading-relaxed mb-8 opacity-85 max-w-xl mx-auto">
      "There is no service small or big in the eyes of Krishna. It is the devotion that matters."
      We are constantly looking for volunteers in IT, Content Writing, Architecture, and Fundraising.
    </p>
    <div x-data="{ openContactModal: false }">

      <button
        @click="openContactModal = true"
        class="inline-flex items-center gap-2 border border-orange-400/50 text-orange-200 px-8 py-3 rounded-full font-bold hover:bg-orange-500/15 transition uppercase text-sm tracking-wider">
        Contact Us
      </button>

      {{-- Contact Modal --}}
      <div
        x-show="openContactModal"
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-50"
        @click.self="openContactModal = false">
        <div class="bg-white rounded-2xl p-8 max-w-sm w-full mx-4 shadow-xl">
          <h3 class="text-2xl font-bold text-stone-900 mb-6" style="font-family:'Cinzel',serif;">Our Contact Information</h3>

          <div class="space-y-4 mb-8">
            <div class="flex items-start gap-3">
              <i class="fa-brands fa-whatsapp text-orange-600 mt-1"></i>
              <div>
                <p class="text-sm text-stone-500 uppercase tracking-wide font-bold">WhatsApp: +91 8167562119</p>

              </div>
            </div>
            <div class="flex items-start gap-3">
              <i class="fas fa-envelope text-orange-600 mt-1"></i>
              <div>
                <p class="text-sm text-stone-500 uppercase tracking-wide font-bold">Email: sbvt.jsp@gmail.com</p>

              </div>
            </div>
          </div>

          <button
            @click="openContactModal = false"
            class="w-full bg-orange-600 text-white py-2 rounded-lg font-bold hover:bg-orange-700 transition">
            Close
          </button>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection