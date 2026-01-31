<div class="absolute top-0 w-full overflow-hidden border-b z-50 backdrop-blur-sm h-8 flex items-center transition-transform duration-500"
         :class="{ '-translate-y-full': scrolled @if(request()->path() === '/'), 'border-white/5': true @else, 'border-amber-900/30 bg-orange-50': true @endif }">
        <div class="flex w-fit animate-marquee hover:pause gap-6">
            @if(request()->path() === '/')
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-stone-300">
                <span class="font-serif italic opacity-80 text-white">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-white">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-stone-300">
                <span class="font-serif italic opacity-80 text-white">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-white">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-stone-300">
                <span class="font-serif italic opacity-80 text-white">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-white">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-stone-300">
                <span class="font-serif italic opacity-80 text-white">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-white">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-stone-300">
                <span class="font-serif italic opacity-80 text-white">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-white">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-stone-300">
                <span class="font-serif italic opacity-80 text-white">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-white">and be happy</span>
            </span>
            @else
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-amber-950">
                <span class="font-serif italic opacity-80 text-amber-900">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-amber-900">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-amber-950">
                <span class="font-serif italic opacity-80 text-amber-900">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-amber-900">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-amber-950">
                <span class="font-serif italic opacity-80 text-amber-900">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-amber-900">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-amber-950">
                <span class="font-serif italic opacity-80 text-amber-900">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-amber-900">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-amber-950">
                <span class="font-serif italic opacity-80 text-amber-900">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-amber-900">and be happy</span>
            </span>
            <span class="whitespace-nowrap px-2 text-[9px] md:text-[10px] italic font-light tracking-wider text-amber-950">
                <span class="font-serif italic opacity-80 text-amber-900">Chant</span> Hare Krishna Hare Krishna Krishna Krishna Hare Hare <span class="mx-2 text-saffron-500">•</span> Hare Rama Hare Rama Rama Rama Hare Hare <span class="font-serif italic opacity-80 text-amber-900">and be happy</span>
            </span>
            @endif

        </div>
    </div>

    <nav 
         @if(request()->path() === '/')
            :class="scrolled ? 'top-0 shadow-2xl border-stone-800' : 'top-8 border-white/10'"
            :style="scrolled ? 'background-color: rgba(7, 7, 8, 0.6); backdrop-filter: blur(6.25px);' : 'background-color: transparent;'"
         @else
            :class="scrolled ? 'top-0 shadow-2xl border-amber-900/10' : 'top-8 border-white/10'"
            :style="scrolled ? 'background-color: rgba(254, 243, 230, 0.95); backdrop-filter: blur(6.25px);' : 'background-color: rgba(254, 243, 230, 0.5);'"
         @endif
         class="fixed w-full z-40 transition-all duration-500 border-b backdrop-blur-md left-0">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                
                <a href="/" class="flex-shrink-0 flex items-center gap-3 group cursor-pointer">
                    <div class="flex flex-col">
                        <h1 class="font-bold text-xl md:text-2xl tracking-wide leading-none transition-colors
                            @if(request()->path() === '/')
                                text-white group-hover:text-saffron-400
                            @else
                                text-amber-950 group-hover:text-saffron-600
                            @endif">
                            Kirtan Seva Trust
                        </h1>
                        <p class="text-[10px] font-bold uppercase tracking-[0.25em] mt-1 transition-colors
                            @if(request()->path() === '/')
                                text-white/80 group-hover:text-white/80
                            @else
                                text-amber-950/80 group-hover:text-amber-950
                            @endif">
                            Birnagar Temple Project
                        </p>
                    </div>
                </a>

                <div class="hidden md:flex items-center gap-8">
                    <a href="/" 
                       class="text-sm font-semibold tracking-wide transition-colors uppercase
                        @if(request()->path() === '/')
                            text-saffron-600 border-b-2 border-saffron-600
                        @else
                            text-amber-950 hover:text-saffron-600 border-b-2 border-transparent
                        @endif">HOME</a>

                    <div class="relative group" x-data="{ openDropdown: false }">
                        <button @mouseenter="openDropdown = true" @mouseleave="openDropdown = false" 
                                class="text-sm font-semibold transition-colors flex items-center gap-1 uppercase tracking-wide py-2
                               @if (request()->is('about/*'))
                                    text-saffron-600 hover:text-saffron-600 border-b-2 border-saffron-600 pb-1
                                @elseif(request()->path() === '/')
                                    text-stone-300 hover:text-saffron-400
                                @else
                                    text-amber-950 hover:text-saffron-600
                                @endif">
                            About <i class="fas fa-chevron-down text-[9px] transition-transform duration-300" :class="{ 'rotate-180': openDropdown @if(request()->path() === '/'), 'text-saffron-500': true @else, 'text-saffron-600': true @endif }"></i>
                        </button>
                        <div x-show="openDropdown" @mouseenter="openDropdown = true" @mouseleave="openDropdown = false" x-transition.opacity 
                             @if(request()->path() === '/')
                                class="absolute left-0 mt-0 w-64 backdrop-blur-xl border border-saffron-500/30 rounded-lg shadow-2xl py-2 bg-stone-900/95"
                             @else
                                class="absolute left-0 mt-0 w-64 backdrop-blur-xl border border-amber-600/30 rounded-lg shadow-2xl py-2 bg-orange-100/95"
                             @endif>
                            <a href="/about/bhaktivinoda-thakura" 
                               class="block px-6 py-3 text-xs transition
                               @if(request()->is('about/bhaktivinoda-thakura'))
                                   font-bold bg-saffron-500/20 text-saffron-700 hover:bg-saffron-500/30 hover:text-saffron-800
                               @elseif(request()->path() === '/')
                                   text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                               @else
                                   text-amber-950 hover:bg-saffron-500/10 hover:text-saffron-700
                               @endif">
                               Who is Bhaktivinod Thakur</a>
                            <a href="/about/building-temple" 
                               class="block px-6 py-3 text-xs transition
                               @if(request()->is('about/building-temple'))
                                   font-bold bg-saffron-500/20 text-saffron-700 hover:bg-saffron-500/30 hover:text-saffron-800
                               @elseif(request()->path() === '/')
                                   text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                               @else
                                   text-amber-950 hover:bg-saffron-500/10 hover:text-saffron-700
                               @endif">
                               Why build a Temple</a>
                            <a href="/about/message-from-chairman" 
                               class="block px-6 py-3 text-xs transition
                               @if(request()->is('about/message-from-chairman'))
                                   font-bold bg-saffron-500/20 text-saffron-700 hover:bg-saffron-500/30 hover:text-saffron-800
                               @elseif(request()->path() === '/')
                                   text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                               @else
                                   text-amber-950 hover:bg-saffron-500/10 hover:text-saffron-700
                               @endif">
                               Chairman's Message</a>
                            <a href="/about/team" 
                               class="block px-6 py-3 text-xs transition
                               @if(request()->is('about/team'))
                                   font-bold bg-saffron-500/20 text-saffron-700 hover:bg-saffron-500/30 hover:text-saffron-800
                               @elseif(request()->path() === '/')
                                   text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                               @else
                                   text-amber-950 hover:bg-saffron-500/10 hover:text-saffron-700
                               @endif">
                               Meet the Team</a>
                        </div>
                    </div>

                    <div class="relative group" x-data="{ openVision: false }">
                        <button @mouseenter="openVision = true" @mouseleave="openVision = false" 
                                class="text-sm font-semibold transition-colors flex items-center gap-1 uppercase tracking-wide py-2
                                @if(request()->path() === '/')
                                    text-stone-300 hover:text-saffron-400
                                @else
                                    text-amber-950 hover:text-saffron-600
                                @endif">
                            Vision <i class="fas fa-chevron-down text-[9px] transition-transform duration-300" :class="{ 'rotate-180': openVision @if(request()->path() === '/'), 'text-saffron-500': true @else, 'text-saffron-600': true @endif }"></i>
                        </button>
                        <div x-show="openVision" @mouseenter="openVision = true" @mouseleave="openVision = false" x-transition.opacity 
                             @if(request()->path() === '/')
                                class="absolute left-0 mt-0 w-64 backdrop-blur-xl border border-saffron-500/30 rounded-lg shadow-2xl py-2 bg-stone-900/95"
                             @else
                                class="absolute left-0 mt-0 w-64 backdrop-blur-xl border border-amber-600/30 rounded-lg shadow-2xl py-2 bg-orange-100/95"
                             @endif>
                            <a href="#" 
                               class="block px-6 py-3 text-xs transition
                               @if(request()->path() === '/')
                                   text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                               @else
                                   text-amber-950 hover:bg-saffron-500/10 hover:text-saffron-700
                               @endif">Srila Prabhupada's Vision</a>
                            <a href="#" 
                               class="block px-6 py-3 text-xs transition
                               @if(request()->path() === '/')
                                   text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                               @else
                                   text-amber-950 hover:bg-saffron-500/10 hover:text-saffron-700
                               @endif">JPS Vision</a>
                            <a href="#" 
                               class="block px-6 py-3 text-xs transition
                               @if(request()->path() === '/')
                                   text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                               @else
                                   text-amber-950 hover:bg-saffron-500/10 hover:text-saffron-700
                               @endif">Founders Vision</a>
                        </div>
                    </div>

                    <a href="/gallery" 
                       class="text-sm font-semibold transition-colors uppercase
                        @if(request()->is('gallery'))
                            text-saffron-600 hover:text-saffron-600 border-b-2 border-saffron-600
                        @elseif(request()->path() === '/')
                            text-stone-300 hover:text-saffron-400
                        @else
                            text-amber-950 hover:text-saffron-600
                        @endif">Gallery</a>
                    <a href="/songs" 
                       class="text-sm font-semibold transition-colors uppercase
                        @if(request()->is('songs'))
                            text-saffron-600 hover:text-saffron-600 border-b-2 border-saffron-600
                        @elseif(request()->path() === '/')
                            text-stone-300 hover:text-saffron-400
                        @else
                            text-amber-950 hover:text-saffron-600
                        @endif">Songs</a>
                    
                    <a href="/donate" 
                       class="relative overflow-hidden group text-white text-xs font-bold px-6 py-2.5 rounded-full transition-all duration-300 transform hover:-translate-y-0.5 border border-white/10
                        @if(request()->is('donate'))
                            bg-gradient-to-r from-red-600 via-red-500 to-red-600 shadow-[0_0_15px_rgba(220,38,38,0.4)]
                        @else
                            bg-gradient-to-r from-cyan-600 via-cyan-500 to-cyan-600 hover:from-red-600 hover:via-red-500 hover:to-red-600 hover:shadow-[0_0_25px_rgba(220,38,38,0.6)] shadow-[0_0_15px_rgba(34,211,238,0.4)]
                        @endif">
                        <span class="relative z-10 tracking-widest uppercase">Donate Now</span>
                    </a>
                </div>

                <div class="md:hidden flex items-center" x-data="{ open: false }">
                    <button @click="open = !open" class="focus:outline-none transition-colors p-2
                        @if(request()->path() === '/')
                            text-white hover:text-saffron-400
                        @else
                            text-amber-950 hover:text-saffron-600
                        @endif">
                        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2"
                         @if(request()->path() === '/')
                            class="absolute top-20 left-0 right-0 w-full backdrop-blur-xl border-t border-white/10 shadow-2xl p-4 flex flex-col space-y-1 bg-stone-900 max-h-[calc(100vh-5rem)] overflow-y-auto"
                         @else
                            class="absolute top-20 left-0 right-0 w-full backdrop-blur-xl border-t border-amber-200 shadow-2xl p-4 flex flex-col space-y-1 bg-orange-50 max-h-[calc(100vh-5rem)] overflow-y-auto"
                         @endif>
                        <a href="/" class="py-3 px-4 rounded-lg transition-colors
                            @if(request()->path() === '/')
                                font-bold text-saffron-500 bg-saffron-500/10
                            @else
                                text-amber-950 hover:bg-orange-100
                            @endif">Home</a>
                        
                        <div x-data="{ aboutOpen: false }" class="@if(request()->path() === '/') text-stone-300 @else text-amber-950 @endif">
                            <button @click="aboutOpen = !aboutOpen" class="w-full text-left py-3 px-4 rounded-lg flex items-center justify-between hover:bg-saffron-500/10 transition-colors">
                                <span>About</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300" :class="{ 'rotate-180': aboutOpen }"></i>
                            </button>
                            <div x-show="aboutOpen" x-transition class="pl-4 space-y-1 mt-1">
                                <a href="/about/bhaktivinoda-thakura" class="block py-2.5 px-4 rounded-lg text-sm transition-colors
                                    @if(request()->path() === '/')
                                        text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                                    @else
                                        text-amber-900 hover:bg-orange-100
                                    @endif">Who is Bhaktivinod Thakur</a>
                                <a href="/about/building-temple" class="block py-2.5 px-4 rounded-lg text-sm transition-colors
                                    @if(request()->path() === '/')
                                        text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                                    @else
                                        text-amber-900 hover:bg-orange-100
                                    @endif">Why build a Temple</a>
                                <a href="/about/message-from-chairman" class="block py-2.5 px-4 rounded-lg text-sm transition-colors
                                    @if(request()->path() === '/')
                                        text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                                    @else
                                        text-amber-900 hover:bg-orange-100
                                    @endif">Chairman's Message</a>
                                <a href="/about/team" class="block py-2.5 px-4 rounded-lg text-sm transition-colors
                                    @if(request()->path() === '/')
                                        text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                                    @else
                                        text-amber-900 hover:bg-orange-100
                                    @endif">Meet the Team</a>
                            </div>
                        </div>

                        <div x-data="{ visionOpen: false }" class="@if(request()->path() === '/') text-stone-300 @else text-amber-950 @endif">
                            <button @click="visionOpen = !visionOpen" class="w-full text-left py-3 px-4 rounded-lg flex items-center justify-between hover:bg-saffron-500/10 transition-colors">
                                <span>Vision</span>
                                <i class="fas fa-chevron-down text-xs transition-transform duration-300" :class="{ 'rotate-180': visionOpen }"></i>
                            </button>
                            <div x-show="visionOpen" x-transition class="pl-4 space-y-1 mt-1">
                                <a href="#" class="block py-2.5 px-4 rounded-lg text-sm transition-colors
                                    @if(request()->path() === '/')
                                        text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                                    @else
                                        text-amber-900 hover:bg-orange-100
                                    @endif">Srila Prabhupada's Vision</a>
                                <a href="#" class="block py-2.5 px-4 rounded-lg text-sm transition-colors
                                    @if(request()->path() === '/')
                                        text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                                    @else
                                        text-amber-900 hover:bg-orange-100
                                    @endif">JPS Vision</a>
                                <a href="#" class="block py-2.5 px-4 rounded-lg text-sm transition-colors
                                    @if(request()->path() === '/')
                                        text-stone-400 hover:bg-saffron-500/10 hover:text-saffron-300
                                    @else
                                        text-amber-900 hover:bg-orange-100
                                    @endif">Founders Vision</a>
                            </div>
                        </div>

                        <a href="/gallery" class="py-3 px-4 rounded-lg transition-colors
                            @if(request()->is('gallery'))
                                text-saffron-400 bg-saffron-500/10
                            @elseif(request()->path() === '/')
                                text-stone-300 hover:bg-saffron-500/10 hover:text-saffron-300
                            @else
                                text-amber-950 hover:bg-orange-100
                            @endif">Gallery</a>
                        
                        <a href="/songs" class="py-3 px-4 rounded-lg transition-colors
                            @if(request()->is('songs'))
                                text-saffron-400 bg-saffron-500/10
                            @elseif(request()->path() === '/')
                                text-stone-300 hover:bg-saffron-500/10 hover:text-saffron-300
                            @else
                                text-amber-950 hover:bg-orange-100
                            @endif">Songs</a>
                        
                        <a href="/donate" class="mt-2 text-white font-bold bg-gradient-to-r from-cyan-600 to-cyan-500 hover:from-red-600 hover:to-red-500 px-6 py-3 rounded-full text-center transition-all transform hover:scale-105 shadow-lg text-sm uppercase tracking-wider">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>