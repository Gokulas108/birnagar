<div class="relative w-full h-screen overflow-hidden flex flex-col font-googleSans" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 40)">
    
    <div class="absolute inset-0 z-0 overflow-hidden bg-stone-900">
        <img
            src="{{ asset('images/temple-background.png') }}"
            alt="Temple Background"
            class="w-full h-full object-cover object-center animate-slow-zoom opacity-80"
        />
        <div class="absolute inset-0 bg-gradient-to-b from-stone-900/70 via-stone-900/30 to-transparent"></div>
        <div class="absolute inset-0 opacity-[0.03] bg-[url('https://www.transparenttextures.com/patterns/noise.png')]"></div>
    </div>

    @include("partials.header")

    <div class="relative z-10 text-center px-4 sm:px-6 max-w-5xl mx-auto my-auto flex-grow flex flex-col justify-center items-center mt-16 sm:mt-20">
        
        <div class="mb-6 sm:mb-8 animate-fade-in-down opacity-0" style="animation-delay: 0.1s; animation-fill-mode: forwards;">
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

        <div class="animate-fade-in-up opacity-0 relative group mb-8 sm:mb-10 md:mb-12 max-w-2xl mx-auto" style="animation-delay: 0.5s; animation-fill-mode: forwards;">
            <div class="absolute -inset-1 bg-gradient-to-r from-saffron-500/20 to-amber-500/20 rounded-2xl blur opacity-75 transition duration-1000 group-hover:opacity-100"></div>
            <div class="relative px-5 sm:px-6 md:px-8 py-5 sm:py-6 md:py-7 bg-stone-900/40 backdrop-blur-md rounded-xl border border-white/20 transition-all duration-300 group-hover:border-white/40 group-hover:bg-stone-900/50">
                <p class="text-base sm:text-lg md:text-xl text-stone-100 font-light leading-relaxed">
                    Join us in fulfilling the long‑standing desire of Srila Prabhupada. Your support for the <span style="font-weight:600;">Birnagar Temple Project </span> builds more than walls, it builds devotion.
                </p>
            </div>
        </div>

        <div class="animate-fade-in-up opacity-0 flex flex-col sm:flex-row gap-3 sm:gap-4 md:gap-5 w-full sm:w-auto px-2" style="animation-delay: 0.7s; animation-fill-mode: forwards;">
            
            <a href="/donation" class="relative group bg-gradient-to-r from-saffron-600 via-amber-500 to-orange-600 hover:from-saffron-500 hover:via-yellow-400 hover:to-amber-500 text-white px-6 sm:px-8 md:px-12 py-3 sm:py-3.5 md:py-4 rounded-full font-bold transition-all shadow-[0_4px_25px_rgba(245,158,11,0.5)] hover:shadow-[0_8px_35px_rgba(245,158,11,0.7)] transform hover:-translate-y-1.5 uppercase tracking-wider text-xs sm:text-sm md:text-base flex items-center justify-center gap-2 sm:gap-3 border border-white/20 backdrop-blur-sm">
                <i class="fa-solid fa-hands-praying group-hover:scale-125 transition-transform duration-300 text-sm sm:text-base"></i>
                <span class="drop-shadow-sm font-semibold">Help Build the Temple</span> 
            </a>

            <a href="#about" class="bg-gradient-to-b from-white/15 to-white/5 hover:from-white/25 hover:to-white/10 backdrop-blur-md border border-white/30 hover:border-white/50 text-white px-6 sm:px-8 md:px-12 py-3 sm:py-3.5 md:py-4 rounded-full font-bold transition-all uppercase tracking-wider text-xs sm:text-sm md:text-base flex items-center justify-center gap-2 sm:gap-3 group shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <span>Learn History</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1.5 transition-transform duration-300 text-sm sm:text-base"></i>
            </a>
        </div>
    </div>

    <div class="absolute bottom-4 sm:bottom-6 md:bottom-8 left-0 right-0 mx-auto w-fit animate-bounce text-white/60 hover:text-saffron-400 flex flex-col items-center gap-1 sm:gap-2 cursor-pointer transition-colors z-20">
        <span class="text-[9px] sm:text-[10px] uppercase tracking-widest font-light">Scroll</span>
        <i class="fas fa-chevron-down text-base sm:text-lg"></i>
    </div>
</div>

<style>
    /* Slow Zoom Animation for Background */
    @keyframes slowZoom {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }
    .animate-slow-zoom {
        animation: slowZoom 20s ease-in-out infinite alternate;
    }

    /* Fade Up Animation */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    /* Fade Down Animation */
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    /* Enhanced scroll indicator pulse animation */
    @keyframes scrollPulse {
        0%, 100% { 
            opacity: 0.6;
            transform: translateY(0);
        }
        50% { 
            opacity: 1;
            transform: translateY(4px);
        }
    }
    .absolute.bottom-8.animate-bounce {
        animation: scrollPulse 2.5s ease-in-out infinite !important;
    }

    /* Smooth link transitions */
    a {
        @apply transition-all duration-300 ease-out;
    }
</style>