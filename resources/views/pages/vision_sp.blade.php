@extends('layouts.common_page')
@section('page-content')

<div class="bg-orange-50 min-h-screen font-sans selection:bg-amber-200 selection:text-amber-900 pb-20">

    <div class="p-10 mx-auto pb-12 text-center">
        <div class="inline-block mb-4">
             <span class="py-1 px-3 border border-amber-900/30 rounded-full text-xs font-bold tracking-widest text-amber-900 uppercase bg-white/50 backdrop-blur-sm">
                The Divine Instruction
             </span>
        </div>
        
        <h1 class="text-4xl md:text-6xl  text-stone-900 mb-6 tracking-tight">
            Śrīla Prabhupāda’s Vision
        </h1>
        
        <p class="text-lg md:text-xl text-stone-600 leading-relaxed font-light text-justify mx-auto">
            Srila Prabhupada placed great importance on the construction of a temple at Birnagar, 
            repeatedly expressing his desire that this sacred site be properly developed and honored. 
            Standing firmly in the Gauḍīya Vaiṣṇava paramparā, he carried forward Bhaktivinoda 
            Ṭhākura’s vision of a revived, pure, and world-embracing bhakti, presenting the message of 
            Śrī Caitanya Mahāprabhu with courage, and compassion.
            For Śrīla Prabhupāda, this was not merely a building project—it was a vital service, meant 
            to preserve the legacy of the Gauḍīya Vaiṣṇava tradition and to provide a spiritual center 
            that would inspire devotion for generations.
        </p>
    </div>

    <div class="max-w-6xl mx-auto px-4 md:px-6 mb-20">
        <div class="bg-amber-900 rounded-[2.5rem] shadow-2xl overflow-hidden relative isolate">
            
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-amber-500/20 blur-3xl rounded-full mix-blend-overlay"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-orange-600/20 blur-3xl rounded-full mix-blend-overlay"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 items-center">
                
                <div class="relative h-full min-h-[400px] group">
                    <img 
                        src="{{ asset('images/srila_prabhupada.webp') }}" 
                        alt="Srila Prabhupada" 
                        class="absolute inset-0 w-full h-full object-cover opacity-90"
                    />
                    <!-- <div class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-amber-900 via-amber-900/20 to-transparent"></div> -->
                </div>

                <div class="p-10 md:p-16 relative z-10 text-orange-50">
                    <div class="flex items-center gap-3 mb-6 opacity-80">
                        <div class="h-px w-8 bg-orange-300"></div>
                        <span class="text-xs font-bold uppercase tracking-widest text-orange-200">August 14, 1976</span>
                    </div>

                    <h2 class="text-2xl md:text-3xl  mb-6 leading-tight text-white">
                        The Direct Instruction
                    </h2>

                    <blockquote class="relative">
                        <span class="absolute -top-4 -left-2 text-6xl text-amber-500/30 ">“</span>
                        <p class="text-xl md:text-2xl leading-relaxed font-light italic text-orange-50/90 relative z-10">
                            I wish that a nice temple be constructed there [in Birnagar] and a well-equipped library
                            and Bhaktivinoda Memorial Hall be established.
                        </p>
                        <footer class="mt-8 flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-amber-800 border border-amber-700 flex items-center justify-center text-orange-300  font-bold">SP</div>
                            <div>
                                <div class="text-sm font-bold uppercase tracking-wide text-white">Śrīla Prabhupāda</div>
                                <div class="text-xs text-amber-300/70">Founder-Acharya</div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

<div class="max-w-6xl mx-auto px-6 mb-24">
  <div class="flex flex-col md:flex-row-reverse items-center gap-12">

    <!-- IMAGE COLUMN -->
   <div class="w-full md:w-1/2 relative flex justify-center">

  <div
    class="relative bg-white p-2 rounded-[2rem] border border-orange-100
           shadow-[0_0_120px_40px_rgba(251,146,60,0.35)]
           transform md:-rotate-1 hover:rotate-0 transition duration-500
           max-w-[360px]"
  >
    <img
      src="{{ asset('images/jayapataka_swami.jpg') }}"
      alt="HH Jayapataka Swami"
      class="rounded-[1.5rem] w-full h-auto object-cover"
    />
  </div>

</div>

    <!-- TEXT COLUMN -->
    <div class="w-full md:w-1/2">
      <h2 class="text-3xl md:text-4xl text-stone-900 mb-6">
        HH Jayapataka Swami Maharaja's Vision
      </h2>

      <p class="text-lg text-stone-600 leading-relaxed mb-8">
        Beyond the construction of a temple, Śrīla Prabhupāda envisioned Birnagar as a
        <strong class="text-amber-700 bg-orange-100 px-1 rounded">
          comprehensive spiritual center
        </strong>
        — a place of learning, remembrance, and devotional inspiration.
      </p>

      <div class="bg-white p-8 rounded-2xl border-l-4 border-amber-600 shadow-sm">
        <p class="text-stone-800 italic leading-relaxed text-lg">
          "Śrīla Prabhupāda wanted Birnagar developed into a spiritual center — with displays of
          Bhaktivinoda Ṭhākura’s life history, his writings, an educational center, parks, gardens,
          guesthouses, and an āśrama."
        </p>
        <div class="mt-4 pt-4 border-t border-stone-100">
          <span class="text-sm font-bold text-amber-900 uppercase tracking-wider">
            — H.H. Jayapataka Swami
          </span>
        </div>
      </div>
    </div>

  </div>
</div>

    <div class="max-w-3xl mx-auto px-6 text-center">
        <div class="relative py-10 pb-0">
            <div class="absolute top-0 left-1/2 -translate-x-1/2">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" class="text-amber-800 opacity-20">
                    <path d="M12 2L14.5 9.5L22 12L14.5 14.5L12 22L9.5 14.5L2 12L9.5 9.5L12 2Z" fill="currentColor"/>
                </svg>
            </div>

            <p class="text-xl text-stone-700 leading-relaxed mb-6 font-light">
                Guided by the instructions of Śrīla Prabhupāda, this project seeks to manifest that original vision in a spirit of
                <span class=" italic text-amber-800">service, humility, and devotion.</span>
            </p>

            <p class="text-stone-600 mb-8">
                The Śrī Śrī Rādhā-Kṛṣṇa Temple at Birnagar is intended to stand as a living center of gratitude — 
                honoring the life, teachings, and unparalleled contribution of Śrīla Bhaktivinoda Ṭhākura.
            </p>

            <button class="bg-saffron-500 text-orange-50 px-8 py-3 rounded-full font-semibold hover:bg-amber-800 transition shadow-lg hover:shadow-orange-600/20">
                Support the Vision
            </button>
        </div>
    </div>

</div>

@endsection