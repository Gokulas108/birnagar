    <section
      id="home-gallery"
      class="relative overflow-hidden bg-gradient-to-br from-stone-50 via-orange-50/70 to-amber-100/80 py-12 sm:py-14 md:py-16">
      <div class="absolute inset-0 pointer-events-none bg-[radial-gradient(circle_at_top,rgba(251,146,60,0.18),transparent_35%),radial-gradient(circle_at_bottom_right,rgba(251,191,36,0.14),transparent_30%)]"></div>

      <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="mb-8 text-center reveal">
          <span class="inline-flex items-center rounded-full border border-orange-200 bg-white/70 px-4 py-1 text-[11px] font-semibold uppercase tracking-[0.24em] text-orange-700 shadow-sm backdrop-blur">
            Fresh gallery picks
          </span>
          <h2 class="mt-4 text-3xl sm:text-4xl md:text-5xl font-semibold tracking-tight text-stone-900">
            Divine Glimpses
          </h2>
          <p class="mx-auto mt-3 max-w-2xl text-sm sm:text-base md:text-lg leading-relaxed text-stone-600">
            A mixed set of moments from the gallery, reshuffled on every refresh.
          </p>
        </div>

        <div class="reveal rounded-[2rem] border border-white/70 bg-white/65 p-3 sm:p-4 shadow-[0_30px_80px_rgba(120,53,15,0.12)] backdrop-blur-xl">
          <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6 lg:gap-4">
            @foreach ($galleryHighlights as $image)
            <a
              href="{{ route('gallery') }}"
              class="group relative block overflow-hidden rounded-[1.5rem] bg-stone-200 shadow-lg ring-1 ring-black/5 transition duration-500 hover:-translate-y-1 hover:shadow-2xl">
              <div class="relative aspect-square">
                <img
                  src="{{ asset($image['src']) }}"
                  alt="{{ $image['alt'] }}"
                  class="h-full w-full object-cover transition duration-700 group-hover:scale-105" />
                <div class="absolute inset-0 bg-gradient-to-t from-stone-950/80 via-stone-950/15 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-4">
                  <p class="text-[10px] font-semibold uppercase tracking-[0.24em] text-amber-200/80">
                    Gallery pick
                  </p>
                  <h3 class="mt-1 text-sm font-semibold text-white drop-shadow">
                    {{ $image['alt'] }}
                  </h3>
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </section>