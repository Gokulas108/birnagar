{{-- ═══════════════════════════════════════════════════════
     partials/hero-slider.blade.php
     Drop-in replacement for partials/hero.blade.php
     Header stays inside this file, exactly as it was.
     ═══════════════════════════════════════════════════════ --}}

<div class="relative w-full h-screen overflow-hidden font-googleSans">

    {{-- ─── SLIDE 1: ORIGINAL HERO (moved forward) ─────────────────── --}}
    <div class="absolute inset-0 flex flex-col transition-opacity duration-700 opacity-100 z-10"
        id="slide-0">

        {{-- Background --}}
        <div class="absolute inset-0 z-0 overflow-hidden bg-stone-900">
            <img
                src="{{ asset('images/temple-background.png') }}"
                alt="Temple Background"
                class="w-full h-full object-cover object-center animate-slow-zoom opacity-85" />
            {{-- Gradient only at bottom for readability --}}
            <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.0) 0%, rgba(0,0,0,0.0) 25%, rgba(0,0,0,0.45) 50%, rgba(0,0,0,0.65) 75%, rgba(0,0,0,0.85) 100%);"></div>
            <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/noise.png')]"></div>
        </div>

        {{-- BOTTOM — Title left, buttons right --}}
        <div class="absolute bottom-0 left-0 right-0 z-20
                flex items-end justify-between flex-wrap gap-4
                px-6 sm:px-10 pb-10 sm:pb-14
                opacity-0"
            style="animation: s2FadeUp 0.9s cubic-bezier(0.22,1,0.36,1) 0.2s forwards;">

            {{-- Title + tagline --}}
            <div>
                <span class="text-white/85 text-[9px] sm:text-[10px] font-semibold uppercase tracking-[0.2em]">
                    Sri Sri Radha Krishna Temple
                </span>
                <h1 class="font-bold leading-tight drop-shadow-2xl mb-2"
                    style="font-family:'Cinzel','Georgia',serif; font-size:clamp(28px,5vw,58px);">
                    <span class="text-white block">Manifesting a</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-white via-yellow-200 to-amber-400">
                        Sacred Vision
                    </span>
                </h1>
                <p class="text-white/60 font-light italic tracking-wide"
                    style="font-size:clamp(12px,1.4vw,15px);">
                    Fulfilling the long‑standing desire of Srila Prabhupada
                </p>
            </div>

            {{-- Buttons --}}
            <div class="flex gap-3 flex-wrap items-center pb-1">
                <a href="/donation"
                    class="inline-flex items-center gap-2 text-white font-bold uppercase tracking-wider rounded-full border border-white/15 transition-all transform hover:-translate-y-1"
                    style="background:linear-gradient(135deg,#C8590A,#E8760A); padding:12px 26px; font-size:12px; letter-spacing:1px; text-decoration:none; box-shadow:0 4px 20px rgba(200,90,10,0.45);">
                    <i class="fa-solid fa-hands-praying"></i>
                    Help Build the Temple
                </a>
                <a href="#about"
                    class="inline-flex items-center gap-2 text-white font-bold uppercase tracking-wider rounded-full transition-all transform hover:-translate-y-1"
                    style="background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.35); padding:12px 26px; font-size:12px; letter-spacing:1px; text-decoration:none; backdrop-filter:blur(4px);">
                    Learn History
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

        </div>

    </div>

    <style>
        @keyframes s2FadeUp {
            from {
                opacity: 0;
                transform: translateY(28px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes s2FadeDown {
            from {
                opacity: 0;
                transform: translateY(-16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    {{-- ─── SLIDE 2 ───────────────────────────────────────────────── --}}
    <div class="absolute inset-0 flex flex-col transition-opacity duration-700 opacity-0 pointer-events-none z-10"
        id="slide-1">

        <picture class="absolute inset-0 z-0 block h-full w-full bg-stone-950">
            <source media="(min-width: 640px)" srcset="{{ asset('images/hall_desktop.png') }}">
            <img
                src="{{ asset('images/hall_desktop.png') }}"
                alt="Preaching Hall"
                class="absolute inset-0 h-full w-full object-cover object-center opacity-100" />
        </picture>

        <div class="hidden md:flex absolute inset-y-0 right-0 w-full md:w-[42%] lg:w-[38%] z-20 overflow-hidden items-end justify-end">
            <!-- Darker background overlay for content area -->
            <div class="absolute inset-0 bg-gradient-to-l from-[#2a160b]/65 via-[#3d210f]/60 to-transparent"></div>

            <!-- Extended blur fade from right to left -->
            <div class="absolute inset-y-0 -left-24 right-0 bg-gradient-to-l from-[#2a160b]/90 via-[#3d210f]/60 to-transparent blur-2xl"></div>

            <!-- Additional soft dark layer for better readability -->
            <div class="absolute inset-0 bg-black/10"></div>

            <div class="absolute inset-y-0 left-0 w-px bg-white/10"></div>

            <div class="relative flex h-full w-full flex-col justify-end px-5 pb-3 pt-4 sm:px-6 sm:pb-4 sm:pt-6 lg:px-8 lg:pb-5 lg:pt-8 text-white">
                <div class="space-y-1.5 max-h-full overflow-y-auto pr-1">
                    <div class="pt-1">
                        <h2 class="leading-tight text-white drop-shadow-[0_2px_16px_rgba(0,0,0,0.45)]">
                            <span
                                class="block text-lg lg:text-xl font-bold"
                                style="font-family:'Cinzel','Georgia',serif;">
                                Join hands to build a
                            </span>

                            <span
                                class="block mt-0.5 text-3xl lg:text-4xl text-amber-200"
                                style="font-family:'Great Vibes',cursive;">
                                Preaching Centre
                            </span>

                            <span
                                class="block mt-0.5 text-lg lg:text-xl font-bold"
                                style="font-family:'Cinzel','Georgia',serif;">
                                at Birnagar
                            </span>
                        </h2>
                    </div>

                    <div class="space-y-1.5">
                        <p class="text-[10px] uppercase tracking-[0.35em] text-amber-100/70">
                            Support the Temple
                        </p>
                        <p class="mt-1 text-xs leading-relaxed text-white/75 max-w-[30rem] lg:text-sm">
                            Become a sponsor or dedicate a specific part of the preaching hall.
                            Every contribution moves the project forward.
                        </p>
                    </div>

                    <div class="relative overflow-hidden rounded-3xl border border-white/10 p-2.5 shadow-[0_10px_30px_rgba(0,0,0,0.12)]">
                        <div class="relative grid gap-2">
                            <div class="rounded-2xl border border-white/10 bg-black/10 p-3 shadow-lg backdrop-blur-xl">
                                <div class="flex items-center gap-2">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-full border border-amber-200/20 bg-amber-300/15 text-sm font-bold text-amber-200">
                                        1
                                    </span>

                                    <div>
                                        <p class="text-sm font-semibold uppercase tracking-[0.18em] text-amber-50/90">
                                            Become a Sponsor
                                        </p>
                                        <p class="text-xs text-white/70">
                                            Choose the level that best fits your seva.
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-2.5 grid grid-cols-2 gap-2 text-[11px] lg:grid-cols-3">
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                                        <span class="block text-white/60">Devotee</span>
                                        <span class="block mt-1 text-sm font-semibold text-amber-100">5,000</span>
                                    </div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                                        <span class="block text-white/60">Brick</span>
                                        <span class="block mt-1 text-sm font-semibold text-amber-100">10,000</span>
                                    </div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                                        <span class="block text-white/60">Silver</span>
                                        <span class="block mt-1 text-sm font-semibold text-amber-100">25,000</span>
                                    </div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2">
                                        <span class="block text-white/60">Gold</span>
                                        <span class="block mt-1 text-sm font-semibold text-amber-100">50,000</span>
                                    </div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2 col-span-2 lg:col-span-1">
                                        <span class="block text-white/60">Diamond</span>
                                        <span class="block mt-1 text-sm font-semibold text-amber-100">1,00,000</span>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-white/10 bg-black/15 p-3 shadow-lg backdrop-blur-sm">
                                <div class="flex items-center gap-2">
                                    <span class="flex h-8 w-8 items-center justify-center rounded-full bg-amber-300/15 text-amber-200 text-sm font-bold border border-amber-200/20">
                                        2
                                    </span>
                                    <div>
                                        <p class="text-sm font-semibold uppercase tracking-[0.18em] text-amber-50/90">
                                            Specific Component Sponsorship
                                        </p>
                                        <p class="text-xs text-white/55">
                                            Dedicate your offering to a visible part of the hall.
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-2.5 grid grid-cols-2 gap-2 text-[11px] lg:grid-cols-3">
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Ceiling</span><span class="block mt-1 text-sm font-semibold text-amber-100">88,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Roof</span><span class="block mt-1 text-sm font-semibold text-amber-100">1,44,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Electrical</span><span class="block mt-1 text-sm font-semibold text-amber-100">40,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Stage</span><span class="block mt-1 text-sm font-semibold text-amber-100">1,20,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Altar</span><span class="block mt-1 text-sm font-semibold text-amber-100">40,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Pavement</span><span class="block mt-1 text-sm font-semibold text-amber-100">42,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Flooring</span><span class="block mt-1 text-sm font-semibold text-amber-100">52,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Foundation</span><span class="block mt-1 text-sm font-semibold text-amber-100">86,000</span></div>
                                    <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2"><span class="block text-white/60">Structure</span><span class="block mt-1 text-sm font-semibold text-amber-100">1,24,000</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between gap-4 border-t border-white/10 pt-2.5 mt-2.5">
                    <div>
                        <p class="text-[10px] uppercase tracking-[0.25em] text-amber-100/60">Ready to give?</p>
                        <p class="text-sm text-white/80">Tap donate now to continue to the donation page.</p>
                    </div>
                    <a href="/donation"
                        class="inline-flex shrink-0 items-center gap-2 rounded-full border border-white/15 px-5 py-3 text-[11px] font-bold uppercase tracking-[0.18em] text-white transition-transform hover:-translate-y-0.5"
                        style="background:linear-gradient(135deg,#C8590A,#E8760A); box-shadow:0 4px 20px rgba(200,90,10,0.45); text-decoration:none;">
                        Donate now
                    </a>
                </div>
            </div>
        </div>

        <div class="md:hidden absolute inset-0 z-10 bg-black/35"></div>

        <div class="md:hidden absolute inset-0 z-20 flex items-center justify-center px-4 pt-16 pb-4 sm:pt-20">
            <div class="w-full rounded-[1.5rem] border border-white/10 bg-black/40 p-3 text-white shadow-[0_12px_40px_rgba(0,0,0,0.35)] backdrop-blur-xl">
                <!-- Centered Heading -->
                <div class="mb-4 text-center">
                    <p class="text-[9px] uppercase tracking-[0.3em] text-amber-100/70">
                        Support the Temple
                    </p>

                    <h2 class="mt-2 leading-tight text-white drop-shadow-[0_4px_16px_rgba(0,0,0,0.6)]">
                        <span
                            class="block text-[20px] font-bold"
                            style="font-family:'Cinzel','Georgia',serif;">
                            Join hands to build a
                        </span>

                        <span
                            class="block mt-1 text-[34px] text-amber-200"
                            style="font-family:'Great Vibes',cursive;">
                            Preaching Centre
                        </span>

                        <span
                            class="block mt-1 text-[20px] font-bold"
                            style="font-family:'Cinzel','Georgia',serif;">
                            at Birnagar
                        </span>
                    </h2>
                </div>

                <!-- Sponsor Cards -->
                <div class="relative overflow-hidden rounded-[1.25rem] border border-white/10 bg-black/30 p-2 shadow-[0_8px_24px_rgba(0,0,0,0.25)] backdrop-blur-md">
                    <!-- <div class="absolute inset-0 bg-black/20"></div> -->
                    <div class="relative grid gap-2">
                        <div class="rounded-2xl border border-white/10 bg-white/5 p-2.5">
                            <p class="text-[10px] font-semibold uppercase tracking-[0.16em] text-amber-50/90">
                                Become a Sponsor
                            </p>
                            <div class="mt-2 grid grid-cols-3 gap-1.5 text-[10px] leading-none">
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Devotee</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">5,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Brick</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">10,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Silver</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">25,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Gold</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">50,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5 col-span-2"><span class="block text-white/55">Diamond</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">1,00,000</span></div>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-white/5 p-2.5">
                            <p class="text-[10px] font-semibold uppercase tracking-[0.16em] text-amber-50/90">
                                Specific Component Sponsorship
                            </p>
                            <div class="mt-2 grid grid-cols-3 gap-1.5 text-[10px] leading-none">
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Ceiling</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">88,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Roof</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">1,44,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Electrical</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">40,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Stage</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">1,20,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Altar</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">40,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Pavement</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">42,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Flooring</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">52,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5"><span class="block text-white/55">Foundation</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">86,000</span></div>
                                <div class="rounded-xl border border-white/10 bg-black/10 px-2 py-1.5 col-span-3"><span class="block text-white/55">Structure</span><span class="block mt-1 text-[11px] font-semibold text-amber-100">1,24,000</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between gap-3 border-t border-white/10 pt-2">
                    <p class="text-[10px] uppercase tracking-[0.24em] text-amber-100/60">Ready to give?</p>
                    <a href="/donation"
                        class="inline-flex shrink-0 items-center gap-2 rounded-full border border-white/15 px-4 py-2 text-[10px] font-bold uppercase tracking-[0.16em] text-white transition-transform hover:-translate-y-0.5"
                        style="background:linear-gradient(135deg,#C8590A,#E8760A); box-shadow:0 4px 20px rgba(200,90,10,0.45); text-decoration:none;">
                        Donate now
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    @keyframes wolSlideIn {
        from {
            opacity: 0;
            transform: translateX(56px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .wol-digit-box {
        background: rgba(0, 0, 0, 0.45);
        border: 1px solid rgba(255, 180, 40, 0.2);
        border-radius: 8px;
        width: 28px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Cinzel', 'Georgia', serif;
        font-weight: 700;
        font-size: 20px;
        color: #FFD580;
        position: relative;
    }

    .wol-digit-box::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        height: 1px;
        background: rgba(255, 180, 40, 0.1);
    }

    .wol-digit-comma {
        display: flex;
        align-items: flex-end;
        padding-bottom: 5px;
        color: rgba(255, 180, 40, 0.35);
        font-size: 14px;
        font-weight: 700;
        font-family: 'Cinzel', 'Georgia', serif;
    }

    @media(min-width: 640px) {
        .wol-digit-box {
            width: 40px;
            height: 52px;
            font-size: 28px;
        }

        .wol-digit-comma {
            font-size: 20px;
            padding-bottom: 8px;
        }
    }
</style>

<script>
    (function() {
        var CURRENT = 0;
        var TARGET = 100000;

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

        setTimeout(function() {
            var pct = Math.round((CURRENT / TARGET) * 100);
            var bar = document.getElementById('wolDevBar');
            var lbl = document.getElementById('wolDevPct');
            if (bar) bar.style.width = pct + '%';
            if (lbl) lbl.textContent = pct + '%';
        }, 500);
    })();
</script>

<style>
    @keyframes s2FadeUp {
        from {
            opacity: 0;
            transform: translateY(28px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes s2FadeDown {
        from {
            opacity: 0;
            transform: translateY(-16px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<style>
    @keyframes s1SlideRight {
        from {
            opacity: 0;
            transform: translateX(60px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

{{-- ─── SLIDER CONTROLS ────────────────────────────────── --}}

{{--
    <div class="absolute bottom-10 sm:bottom-12 left-1/2 -translate-x-1/2 flex gap-2.5 z-30">
        <button onclick="heroGoTo(0)" id="dot-0"
            class="w-2.5 h-2.5 rounded-full bg-amber-400 scale-125 transition-all"></button>
        <button onclick="heroGoTo(1)" id="dot-1"
            class="w-2.5 h-2.5 rounded-full bg-white/30 transition-all"></button>
    </div>

    --}}

<button onclick="heroPrev()"
    class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 rounded-full bg-black/30 border border-amber-400/25 text-amber-300 flex items-center justify-center text-xl hover:bg-orange-800/50 transition-all">
    &#8249;
</button>

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
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.1);
        }
    }

    .animate-slow-zoom {
        animation: slowZoom 20s ease-in-out infinite alternate;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    @keyframes scrollPulse {

        0%,
        100% {
            opacity: 0.6;
            transform: translateY(0);
        }

        50% {
            opacity: 1;
            transform: translateY(4px);
        }
    }

    /* Smooth link transitions */
    a {
        transition: all 0.3s ease-out;
    }
</style>


<script>
    (function() {
        const TOTAL = 2;
        const INTERVAL = 20000;
        let current = 0;
        let autoTimer = null;

        function heroGoTo(idx) {
            // Hide current
            const prevSlide = document.getElementById('slide-' + current);
            const prevDot = document.getElementById('dot-' + current);
            if (!prevSlide) {
                return;
            }
            prevSlide.classList.remove('opacity-100');
            prevSlide.classList.add('opacity-0', 'pointer-events-none');
            if (prevDot) {
                prevDot.classList.remove('bg-amber-400', 'scale-125');
                prevDot.classList.add('bg-white/30');
            }

            current = idx;

            // Show next
            const nextSlide = document.getElementById('slide-' + current);
            const nextDot = document.getElementById('dot-' + current);
            if (!nextSlide) {
                return;
            }
            nextSlide.classList.remove('opacity-0', 'pointer-events-none');
            nextSlide.classList.add('opacity-100');
            if (nextDot) {
                nextDot.classList.remove('bg-white/30');
                nextDot.classList.add('bg-amber-400', 'scale-125');
            }

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
            if (diff <= 0) {
                el.textContent = 'Campaign ended';
                return;
            }
            const d = Math.floor(diff / 86400000);
            const h = Math.floor((diff % 86400000) / 3600000);
            const m = Math.floor((diff % 3600000) / 60000);
            el.textContent = d + 'd ' + h + 'h ' + m + 'm left';
        }
        updateCountdown();
        setInterval(updateCountdown, 60000);
    })();
</script>