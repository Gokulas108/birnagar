<section
      id="countdown-section"
      class="-mt-8 sm:-mt-10 md:-mt-12 pt-20 sm:pt-28 md:pt-32 pb-16 sm:pb-20 md:pb-24 lg:pb-32 bg-orange-50 relative overflow-hidden font-googleSans"
    >
      <!-- Animated Background Elements -->
      <!-- Floating Blobs -->
      <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 pointer-events-none animate-pulse" style="animation: blob 7s infinite;"></div>
      <div class="absolute top-40 right-10 w-72 h-72 bg-orange-300/20 rounded-full mix-blend-multiply filter blur-3xl opacity-50 pointer-events-none animate-pulse" style="animation: blob 9s infinite 2s;"></div>
      <div class="absolute -bottom-8 left-1/2 w-80 h-80 bg-orange-100/20 rounded-full mix-blend-multiply filter blur-3xl opacity-60 pointer-events-none animate-pulse" style="animation: blob 8s infinite 4s;"></div>

      <!-- Animated Gradient Lines -->
      <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-orange-400 to-transparent opacity-30 pointer-events-none" style="animation: shimmer 3s infinite;"></div>

      <!-- Floating Circles -->
      <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-orange-400 rounded-full opacity-20 pointer-events-none" style="animation: float 6s ease-in-out infinite;"></div>
      <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-orange-500 rounded-full opacity-20 pointer-events-none" style="animation: float 8s ease-in-out infinite 1s;"></div>
      <div class="absolute bottom-1/3 left-1/3 w-2 h-2 bg-orange-400 rounded-full opacity-20 pointer-events-none" style="animation: float 7s ease-in-out infinite 2s;"></div>
      <div class="absolute top-1/2 right-1/3 w-2.5 h-2.5 bg-orange-500 rounded-full opacity-20 pointer-events-none" style="animation: float 9s ease-in-out infinite 1.5s;"></div>

      <!-- Animated Grid Pattern -->
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-orange-100/10 pointer-events-none opacity-40"></div>

      <!-- Shimmer Animation Style -->
      <style>
        @keyframes blob {
          0%, 100% { transform: translate(0, 0) scale(1); }
          33% { transform: translate(30px, -50px) scale(1.1); }
          66% { transform: translate(-20px, 20px) scale(0.9); }
        }
        @keyframes float {
          0%, 100% { transform: translateY(0px) translateX(0px); }
          50% { transform: translateY(-20px) translateX(10px); }
        }
        @keyframes shimmer {
          0%, 100% { opacity: 0.3; }
          50% { opacity: 0.8; }
        }
      </style>

      <div class="container mx-auto px-4 sm:px-6 max-w-5xl relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-10 sm:mb-12 md:mb-16">
          <div class="inline-block mb-4 sm:mb-5 md:mb-6">
            <div class="px-3 sm:px-4 md:px-5 py-1.5 sm:py-2 rounded-full border border-orange-400/40 bg-gradient-to-r from-orange-500/5 to-orange-600/5 backdrop-blur-md flex items-center gap-2 sm:gap-3 shadow-[0_0_20px_rgba(234,88,12,0.15)]">
              <span class="relative flex h-1.5 w-1.5 sm:h-2 sm:w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-500 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-1.5 w-1.5 sm:h-2 sm:w-2 bg-orange-600"></span>
              </span>
              <span class="text-orange-900 text-[10px] sm:text-xs font-semibold uppercase tracking-[0.15em] sm:tracking-[0.2em]">2026 Milestone</span>
            </div>
          </div>

          <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 text-transparent bg-clip-text bg-gradient-to-r from-orange-600 via-orange-400 to-orange-600 px-4">
            The Preaching Hall
          </h2>
          
          <p class="text-lg sm:text-xl md:text-2xl text-orange-600 font-light mb-6 sm:mb-7 md:mb-8 px-4">
            Our First Sacred Milestone
          </p>
          
          <p class="text-base sm:text-lg md:text-xl text-orange-800 mb-8 sm:mb-10 md:mb-12 font-light leading-relaxed max-w-3xl mx-auto px-4">
            Join us in fulfilling our 2026 milestone. Every contribution echoes in the foundation of this sacred project.
          </p>
        </div>

        <!-- Countdown Timer -->
        <div class="mb-8 sm:mb-10 md:mb-12">
          <div class="flex flex-wrap justify-center items-center gap-2 sm:gap-3 md:gap-4 lg:gap-8 mb-4 px-2">
            <div class="flex flex-col items-center">
              <div class="relative">
                <div class="absolute -inset-1 sm:-inset-2 bg-gradient-to-br from-orange-400/20 to-orange-600/20 rounded-lg blur-lg"></div>
                <div class="relative bg-orange-100/40 backdrop-blur-md border border-orange-400/30 rounded-lg px-3 py-2 sm:px-5 sm:py-3.5 md:px-6 md:py-4 lg:px-8 lg:py-6">
                  <span
                    id="days"
                    class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-mono font-bold tracking-tighter text-transparent bg-clip-text bg-gradient-to-b from-orange-500 to-orange-700"
                  >000</span>
                </div>
              </div>
              <span class="text-[9px] sm:text-xs md:text-sm font-light text-orange-700 mt-1.5 sm:mt-3 uppercase tracking-widest">Days</span>
            </div>

            <span class="text-xl sm:text-3xl md:text-4xl lg:text-6xl font-light text-orange-500 mb-3 sm:mb-5 md:mb-6">:</span>

            <div class="flex flex-col items-center">
              <div class="relative">
                <div class="absolute -inset-1 sm:-inset-2 bg-gradient-to-br from-orange-400/20 to-orange-600/20 rounded-lg blur-lg"></div>
                <div class="relative bg-orange-100/40 backdrop-blur-md border border-orange-400/30 rounded-lg px-3 py-2 sm:px-5 sm:py-3.5 md:px-6 md:py-4 lg:px-8 lg:py-6">
                  <span
                    id="hours"
                    class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-mono font-bold tracking-tighter text-transparent bg-clip-text bg-gradient-to-b from-orange-500 to-orange-700"
                  >00</span>
                </div>
              </div>
              <span class="text-[9px] sm:text-xs md:text-sm font-light text-orange-700 mt-1.5 sm:mt-3 uppercase tracking-widest">Hours</span>
            </div>

            <span class="text-xl sm:text-3xl md:text-4xl lg:text-6xl font-light text-orange-500 mb-3 sm:mb-5 md:mb-6">:</span>

            <div class="flex flex-col items-center">
              <div class="relative">
                <div class="absolute -inset-1 sm:-inset-2 bg-gradient-to-br from-orange-400/20 to-orange-600/20 rounded-lg blur-lg"></div>
                <div class="relative bg-orange-100/40 backdrop-blur-md border border-orange-400/30 rounded-lg px-3 py-2 sm:px-5 sm:py-3.5 md:px-6 md:py-4 lg:px-8 lg:py-6">
                  <span
                    id="minutes"
                    class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-mono font-bold tracking-tighter text-transparent bg-clip-text bg-gradient-to-b from-orange-500 to-orange-700"
                  >00</span>
                </div>
              </div>
              <span class="text-[9px] sm:text-xs md:text-sm font-light text-orange-700 mt-1.5 sm:mt-3 uppercase tracking-widest">Minutes</span>
            </div>

            <span class="text-xl sm:text-3xl md:text-4xl lg:text-6xl font-light text-orange-500 mb-3 sm:mb-5 md:mb-6">:</span>

            <div class="flex flex-col items-center">
              <div class="relative">
                <div class="absolute -inset-1 sm:-inset-2 bg-gradient-to-br from-cyan-400/20 to-cyan-500/20 rounded-lg blur-lg"></div>
                <div class="relative bg-stone-900/60 backdrop-blur-md border border-cyan-400/30 rounded-lg px-3 py-2 sm:px-5 sm:py-3.5 md:px-6 md:py-4 lg:px-8 lg:py-6">
                  <span
                    id="seconds"
                    class="text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-mono font-bold tracking-tighter text-transparent bg-clip-text bg-gradient-to-b from-cyan-300 to-cyan-500"
                  >00</span>
                </div>
              </div>
              <span class="text-[9px] sm:text-xs md:text-sm font-light text-stone-700 mt-1.5 sm:mt-3 uppercase tracking-widest">Seconds</span>
            </div>
          </div>
        </div>

        <!-- Quote Section -->
        <div class="relative">
          <div class="absolute -inset-3 bg-gradient-to-r from-orange-400/20 to-orange-600/20 rounded-2xl blur-xl opacity-75"></div>
          <div class="relative bg-orange-100/20 backdrop-blur-md border border-orange-300/30 rounded-2xl p-8">
            <div class="space-y-6">
              <p class="text-lg md:text-2xl text-orange-900 leading-relaxed font-light italic">
                <span class="text-3xl text-orange-500 mr-2">"</span>
                Srila Bhaktivinoda Thakura is the pioneer of the Krsna consciousness movement. He is the original spiritual master in the sense that he first introduced the movement in the western countries. So we are simply following his footsteps.
                <span class="text-3xl text-orange-500 ml-2">"</span>
              </p>
              <div class="flex items-center gap-3 pt-4 border-t border-orange-300/30">
                <div class="w-1 h-8 bg-gradient-to-b from-orange-500 to-orange-700 rounded-full"></div>
                <p class="text-base md:text-lg font-semibold text-orange-700">
                  His Divine Grace A.C. Bhaktivedanta Swami Prabhupada
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="flex justify-center mt-12">
          <a
            href="/donation"
            class="group relative overflow-hidden bg-gradient-to-r from-cyan-600 via-cyan-500 to-cyan-600 hover:from-cyan-500 hover:via-cyan-400 hover:to-cyan-500 px-10 py-4 rounded-full text-white font-bold text-base uppercase tracking-wider transition-all duration-300 shadow-[0_4px_25px_rgba(34,211,238,0.4)] hover:shadow-[0_8px_35px_rgba(34,211,238,0.6)] transform hover:-translate-y-1 border border-white/20 flex items-center gap-3"
          >
            <i class="fas fa-heart"></i>
            <span>Support This Milestone</span>
          </a>
        </div>
      </div>
    </section>