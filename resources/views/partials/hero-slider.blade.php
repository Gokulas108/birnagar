{{-- ═══════════════════════════════════════════════════════
     partials/hero-slider.blade.php
     Drop-in replacement for partials/hero.blade.php
     Header stays inside this file, exactly as it was.
     ═══════════════════════════════════════════════════════ --}}

<div class="relative w-full h-screen overflow-hidden font-googleSans">

{{-- ─── SLIDE 1: WALL OF LEGACY CAMPAIGN ─────────────────── --}}
<div class="absolute inset-0 flex flex-col transition-opacity duration-700 opacity-100 z-10"
     id="slide-0">

    <div class="absolute inset-0 bg-stone-950">
        <img
            src="{{ asset('images/campaign-background.png') }}"
            alt="Wall of Legacy"
            class="w-full h-full object-cover object-center opacity-100"
        />
        <!-- <div class="absolute inset-0"
             style="background: linear-gradient(105deg, rgba(4,2,0,0.0) 0%, rgba(4,2,0,0.2) 40%, rgba(4,2,0,0.75) 68%, rgba(4,2,0,0.92) 100%);">
        </div> -->
    </div>

    <div class="absolute right-0 top-0 bottom-0 w-full sm:w-[56%] lg:w-[50%]
                flex flex-col justify-center opacity-0
                px-6 sm:px-10 lg:px-14 xl:px-16 gap-3"
         id="wol-panel"
         style="animation: wolSlideIn 1s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards;">

        {{-- Cursive name --}}
        <p class="mb-0"
           style="font-family: 'Dancing Script', cursive;
                  font-size: clamp(17px, 2vw, 26px);
                  color: rgba(255, 210, 120, 0.75);
                  font-weight: 600;
                  line-height: 1.1;">
            Srila Bhaktivinoda Thakur's
        </p>

        {{-- Title --}}
        <h1 class="font-black leading-[1.0] mb-1"
            style="font-family:'Cinzel','Georgia',serif;
                   font-size:clamp(34px,4.8vw,56px);
                   color:#FFD580;
                   text-shadow:0 0 40px rgba(200,90,0,0.35);">
            Wall of Legacy
        </h1>

        {{-- Campaign subtitle --}}
        <div class="flex items-center gap-3 mb-3">
            <div class="w-7 h-px bg-orange-600"></div>
            <span class="text-[20px] uppercase tracking-[0.22em] font-semibold"
                  style="color: rgba(255,190,80,0.6);">
                3-Month Fundraising Campaign 2026
            </span>
        </div>

        {{-- Date pill --}}
        <div class="inline-flex items-center gap-2 mb-3 self-start px-3 py-1 rounded-md"
             style="background:rgba(200,90,0,0.15); border:1px solid rgba(200,110,0,0.28);">
            <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
            <span class="text-[11px] tracking-wide"
                  style="color:rgba(255,200,120,0.78);">
                March 29 — June 30, 2026
            </span>
        </div>

        {{-- Body --}}
        <p class="mb-4 font-light leading-relaxed"
           style="font-size:clamp(12px,1.25vw,14px);
                  color:rgba(255,235,200,0.8);
                  max-width:400px;">
            Join the
            <span style="color:#FFD580;font-weight:700;">100,000 devotee mission</span>
            and become the first to get your name etched on the
            <span style="color:#FFD580;font-weight:700;">Wall of Legacy.</span>
        </p>

        {{-- Devotee counter --}}
        <div class="mb-4">

            <div class="flex items-center gap-2 mb-2">
                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-ping" style="animation-duration:1.4s;"></span>
                <span class="text-[10px] uppercase tracking-[0.22em]"
                      style="color:rgba(255,200,100,0.45);">
                    Devotees who have joined
                </span>
            </div>

            <div class="flex items-stretch gap-1 mb-2" id="wolDevDigits"></div>

            <div class="flex items-center gap-3">
                <div class="flex-1 rounded-full overflow-hidden" style="height:4px; background:rgba(255,255,255,0.08);">
                    <div id="wolDevBar" class="h-full rounded-full"
                         style="width:0%; background:linear-gradient(90deg,#C8590A,#FFD580); transition:width 2.2s cubic-bezier(0.23,1,0.32,1);">
                    </div>
                </div>
                <span style="font-size:11px; color:rgba(255,200,100,0.6); white-space:nowrap;">
                    <span id="wolDevPct" style="color:#FFD580; font-weight:700;">0%</span> of 100,000
                </span>
            </div>

        </div>

        {{-- Button --}}
        <div>
            <a href="#campaign"
               class="inline-flex items-center gap-3 font-bold uppercase rounded-full transition-all transform hover:-translate-y-1"
               style="color:#FFD580;
                      border:1.5px solid rgba(255,190,60,0.38);
                      padding:11px 28px;
                      font-size:12px;
                      letter-spacing:2px;
                      background:transparent;
                      text-decoration:none;">
                Join Now!
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none"
                     stroke="#FFD580" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M13 6l6 6-6 6"/>
                </svg>
            </a>
        </div>

    </div>
</div>

<style>
    @keyframes wolSlideIn {
        from { opacity:0; transform:translateX(56px); }
        to   { opacity:1; transform:translateX(0); }
    }
    .wol-digit-box {
        background: rgba(0,0,0,0.45);
        border: 1px solid rgba(255,180,40,0.2);
        border-radius: 8px;
        width: 40px; height: 52px;
        display: flex; align-items: center; justify-content: center;
        font-family: 'Cinzel','Georgia',serif;
        font-weight: 700; font-size: 28px;
        color: #FFD580;
        position: relative;
    }
    .wol-digit-box::after {
        content:'';
        position:absolute; left:0; right:0; top:50%;
        height:1px; background:rgba(255,180,40,0.1);
    }
    .wol-digit-comma {
        display:flex; align-items:flex-end; padding-bottom:8px;
        color:rgba(255,180,40,0.35);
        font-size:20px; font-weight:700;
        font-family:'Cinzel','Georgia',serif;
    }
</style>

<script>
(function(){
    var CURRENT = 28460;
    var TARGET  = 100000;

    function buildDigits(num) {
        var container = document.getElementById('wolDevDigits');
        if (!container) return;
        var str = num.toLocaleString('en-IN');
        container.innerHTML = '';
        for (var i = 0; i < str.length; i++) {
            if (str[i] === ',') {
                var comma = document.createElement('span');
                comma.className = 'wol-digit-comma';
                comma.textContent = ',';
                container.appendChild(comma);
            } else {
                var box = document.createElement('div');
                box.className = 'wol-digit-box';
                box.textContent = str[i];
                container.appendChild(box);
            }
        }
    }

    buildDigits(CURRENT);

    setTimeout(function(){
        var pct = Math.round((CURRENT / TARGET) * 100);
        var bar = document.getElementById('wolDevBar');
        var lbl = document.getElementById('wolDevPct');
        if (bar) bar.style.width = pct + '%';
        if (lbl) lbl.textContent = pct + '%';
    }, 500);
})();
</script>

    {{-- ─── SLIDE 2: ORIGINAL HERO ─────────────────────────── --}}
    <div class="absolute inset-0 flex flex-col transition-opacity duration-700 opacity-0 pointer-events-none z-10"
         id="slide-1">

        {{-- Your original background, unchanged --}}
        <div class="absolute inset-0 z-0 overflow-hidden bg-stone-900">
            <img
                src="{{ asset('images/temple-background.png') }}"
                alt="Temple Background"
                class="w-full h-full object-cover object-center animate-slow-zoom opacity-80"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-stone-900/70 via-stone-900/30 to-transparent"></div>
            <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/noise.png')]"></div>
        </div>


        {{-- Your original hero content, unchanged --}}
        <div class="relative z-10 text-center px-4 sm:px-6 max-w-5xl mx-auto my-auto flex-grow flex flex-col justify-center items-center mt-16 sm:mt-20">

            <div class="mb-6 sm:mb-8 animate-fade-in-down opacity-0"
                 style="animation-delay: 0.1s; animation-fill-mode: forwards;">
                <div class="px-3 sm:px-5 py-1.5 sm:py-2 rounded-full border border-saffron-400/40 bg-gradient-to-r from-saffron-500/5 to-amber-500/5 backdrop-blur-md flex items-center gap-2 sm:gap-3 shadow-[0_0_20px_rgba(234,88,12,0.15)] hover:shadow-[0_0_30px_rgba(234,88,12,0.25)] transition-all">
                    <span class="relative flex h-1.5 w-1.5 sm:h-2 sm:w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-saffron-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-1.5 w-1.5 sm:h-2 sm:w-2 bg-saffron-500"></span>
                    </span>
                    <span class="text-white/90 text-[9px] sm:text-[10px] md:text-xs font-semibold uppercase tracking-[0.15em] sm:tracking-[0.2em]">SRI SRI RADHA KRISHNA TEMPLE</span>
                </div>
            </div>

            <h1 class="animate-fade-in-up opacity-0 text-5xl sm:text-6xl md:text-7xl lg:text-7xl xl:text-8xl font-bold mb-6 sm:mb-8 leading-tight drop-shadow-2xl px-2"
                style="animation-delay: 0.3s; animation-fill-mode: forwards;">
                <span class="text-white block mb-1 sm:mb-2">Manifesting a</span>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-yellow-200 to-yellow-400 drop-shadow-lg filter">Sacred Vision</span>
            </h1>

            <div class="animate-fade-in-up opacity-0 relative group mb-8 sm:mb-10 md:mb-12 max-w-2xl mx-auto"
                 style="animation-delay: 0.5s; animation-fill-mode: forwards;">
                <div class="absolute -inset-1 bg-gradient-to-r from-saffron-500/20 to-amber-500/20 rounded-2xl blur opacity-75 transition duration-1000 group-hover:opacity-100"></div>
                <div class="relative px-5 sm:px-6 md:px-8 py-5 sm:py-6 md:py-7 bg-stone-900/40 backdrop-blur-md rounded-xl border border-white/20 transition-all duration-300 group-hover:border-white/40 group-hover:bg-stone-900/50">
                    <p class="text-base sm:text-lg md:text-xl text-stone-100 font-light leading-relaxed">
                        Join us in fulfilling the long‑standing desire of Srila Prabhupada. Your support for the <span style="font-weight:600;">Birnagar Temple Project</span> builds more than walls, it builds devotion.
                    </p>
                </div>
            </div>

            <div class="animate-fade-in-up opacity-0 flex flex-col sm:flex-row gap-3 sm:gap-4 md:gap-5 w-full sm:w-auto px-2"
                 style="animation-delay: 0.7s; animation-fill-mode: forwards;">
                <a href="/donation"
                   class="relative group bg-gradient-to-r from-saffron-600 via-amber-500 to-orange-600 hover:from-saffron-500 hover:via-yellow-400 hover:to-amber-500 text-white px-6 sm:px-8 md:px-12 py-3 sm:py-3.5 md:py-4 rounded-full font-bold transition-all shadow-[0_4px_25px_rgba(245,158,11,0.5)] hover:shadow-[0_8px_35px_rgba(245,158,11,0.7)] transform hover:-translate-y-1.5 uppercase tracking-wider text-xs sm:text-sm md:text-base flex items-center justify-center gap-2 sm:gap-3 border border-white/20 backdrop-blur-sm">
                    <i class="fa-solid fa-hands-praying group-hover:scale-125 transition-transform duration-300 text-sm sm:text-base"></i>
                    <span class="drop-shadow-sm font-semibold">Help Build the Temple</span>
                </a>
                <a href="#about"
                   class="bg-gradient-to-b from-white/15 to-white/5 hover:from-white/25 hover:to-white/10 backdrop-blur-md border border-white/30 hover:border-white/50 text-white px-6 sm:px-8 md:px-12 py-3 sm:py-3.5 md:py-4 rounded-full font-bold transition-all uppercase tracking-wider text-xs sm:text-sm md:text-base flex items-center justify-center gap-2 sm:gap-3 group shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <span>Learn History</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1.5 transition-transform duration-300 text-sm sm:text-base"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- ─── SLIDER CONTROLS ────────────────────────────────── --}}

    {{-- Dot navigation --}}
    <div class="absolute bottom-10 sm:bottom-12 left-1/2 -translate-x-1/2 flex gap-2.5 z-30">
        <button onclick="heroGoTo(0)" id="dot-0"
            class="w-2.5 h-2.5 rounded-full bg-amber-400 scale-125 transition-all"></button>
        <button onclick="heroGoTo(1)" id="dot-1"
            class="w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></button>
    </div>

    {{-- Arrow left --}}
    <button onclick="heroPrev()"
        class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 rounded-full bg-black/30 border border-amber-400/25 text-amber-300 flex items-center justify-center text-xl hover:bg-orange-800/50 transition-all">
        &#8249;
    </button>

    {{-- Arrow right --}}
    <button onclick="heroNext()"
        class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 rounded-full bg-black/30 border border-amber-400/25 text-amber-300 flex items-center justify-center text-xl hover:bg-orange-800/50 transition-all">
        &#8250;
    </button>

    {{-- Progress bar --}}
    <div class="absolute bottom-0 left-0 h-[3px] bg-gradient-to-r from-orange-600 to-amber-400 z-30"
         id="heroTimerBar" style="width:100%; transition:none;"></div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-4 sm:bottom-6 md:bottom-8 left-0 right-0 mx-auto w-fit text-white/60 hover:text-saffron-400 flex flex-col items-center gap-1 sm:gap-2 cursor-pointer transition-colors z-20"
         style="animation: scrollPulse 2.5s ease-in-out infinite;">
        <span class="text-[9px] sm:text-[10px] uppercase tracking-widest font-light">Scroll</span>
        <i class="fas fa-chevron-down text-base sm:text-lg"></i>
    </div>

</div>{{-- end slider wrapper --}}


<style>
    @keyframes slowZoom {
        0%   { transform: scale(1);   }
        100% { transform: scale(1.1); }
    }
    .animate-slow-zoom { animation: slowZoom 20s ease-in-out infinite alternate; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }

    @keyframes scrollPulse {
        0%, 100% { opacity: 0.6; transform: translateY(0);   }
        50%       { opacity: 1;   transform: translateY(4px); }
    }

    /* Smooth link transitions */
    a { transition: all 0.3s ease-out; }
</style>


<script>
(function () {
    const TOTAL    = 2;
    const INTERVAL = 20000;
    let current   = 0;
    let autoTimer = null;

    function heroGoTo(idx) {
        // Hide current
        const prevSlide = document.getElementById('slide-' + current);
        const prevDot   = document.getElementById('dot-'   + current);
        prevSlide.classList.remove('opacity-100');
        prevSlide.classList.add('opacity-0', 'pointer-events-none');
        prevDot.classList.remove('bg-amber-400', 'scale-125');
        prevDot.classList.add('bg-white/30');

        current = idx;

        // Show next
        const nextSlide = document.getElementById('slide-' + current);
        const nextDot   = document.getElementById('dot-'   + current);
        nextSlide.classList.remove('opacity-0', 'pointer-events-none');
        nextSlide.classList.add('opacity-100');
        nextDot.classList.remove('bg-white/30');
        nextDot.classList.add('bg-amber-400', 'scale-125');

        // Reset progress bar
        const bar = document.getElementById('heroTimerBar');
        bar.style.transition = 'none';
        bar.style.width = '100%';
        setTimeout(() => {
            bar.style.transition = 'width ' + INTERVAL + 'ms linear';
            bar.style.width = '0%';
        }, 40);

        // Restart auto-advance
        clearInterval(autoTimer);
        autoTimer = setInterval(() => heroGoTo((current + 1) % TOTAL), INTERVAL);
    }

    window.heroGoTo = heroGoTo;
    window.heroNext = () => heroGoTo((current + 1) % TOTAL);
    window.heroPrev = () => heroGoTo((current - 1 + TOTAL) % TOTAL);

    // Start on slide 0
    heroGoTo(0);

    // Live countdown to 30 June 2026
    function updateCountdown() {
        const el = document.getElementById('cdTimer');
        if (!el) return;
        const deadline = new Date('2026-06-30T23:59:59');
        const diff = deadline - new Date();
        if (diff <= 0) { el.textContent = 'Campaign ended'; return; }
        const d = Math.floor(diff / 86400000);
        const h = Math.floor((diff % 86400000) / 3600000);
        const m = Math.floor((diff % 3600000)  / 60000);
        el.textContent = d + 'd ' + h + 'h ' + m + 'm left';
    }
    updateCountdown();
    setInterval(updateCountdown, 60000);
})();
</script>