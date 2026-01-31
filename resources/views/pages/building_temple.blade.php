@extends('layouts.common_page')
@section('page-content')

        <div class="text-center mb-16">
          <h2
            class="text-stone-600 text-sm font-bold tracking-[0.3em] uppercase mb-4"
          >
            Why This Temple Matters
          </h2>
          <h1
            class="text-4xl md:text-6xl font-semibold text-heading mb-6 leading-tight"
          >
            A Sacred Duty.<br />
            <span class="text-amber-900 italic">A Global Offering.</span><br />
            A Spiritual Home.
          </h1>
          <div class="h-1 w-24 bg-saffron-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
          <div
            class="bg-stone-card p-10 rounded-3xl border border-stone-200 shadow-xl relative overflow-hidden group"
          >
            <div
              class="absolute -right-10 -top-10 w-40 h-40 bg-saffron-500/10 rounded-full group-hover:scale-150 transition-transform duration-700"
            ></div>

            <div class="relative z-10">
              <div
                class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center text-amber-700 mb-6 text-2xl"
              >
                <i class="fas fa-book-journal-whills"></i>
              </div>
              <h3 class="text-2xl font-bold text-stone-800 mb-4">
              Honoring Śrīla Bhaktivinoda Ṭhākura, a Guardian of the Gauḍīya Lineage
              </h3>
              <p class="text-stone-600 font-light leading-relaxed">
                Śrīla Bhaktivinoda Ṭhākura revived lost teachings, authored
                timeless spiritual works, and envisioned a global spiritual
                movement. Building a temple at his birthplace stands as an act
                of gratitude and devotion to the pioneer who ignited modern
                bhakti.
              </p>
            </div>
          </div>

          <div
            class="bg-stone-card p-10 rounded-3xl border border-stone-200 shadow-xl relative overflow-hidden group"
          >
            <div
              class="absolute -right-10 -top-10 w-40 h-40 bg-saffron-500/10 rounded-full group-hover:scale-150 transition-transform duration-700"
            ></div>

            <div class="relative z-10">
              <div
                class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center text-amber-700 mb-6 text-2xl"
              >
                <i class="fas fa-hands-praying"></i>
              </div>
              <h3 class="text-2xl   font-bold text-stone-800 mb-4">
               Realizing the Vision of Śrīla Prabhupāda
              </h3>
              <p class="text-stone-600 font-light leading-relaxed">
                Śrīla Prabhupāda repeatedly emphasized that honoring previous
                ācāryas is key to spiritual progress. By participating in this
                project, donors directly help fulfill his desire of establishing
                a beautiful temple where Bhaktivinoda Ṭhākura appeared to bless
                the world.
              </p>
            </div>
          </div>
        </div>

        <div class="mb-20">
          <div
            class="bg-saffron-light/30 rounded-[3rem] p-8 md:p-12 border border-amber-500/20"
          >
            <div class="flex flex-col md:flex-row items-center gap-12">
              <div class="w-full md:w-1/2">
                <div class="relative">
                  <img
                    src="{{ asset('images/heritage.jpg') }}"
                    alt="Birnagar Heritage Site"
                    class="rounded-2xl shadow-lg rotate-2 hover:rotate-0 transition-all duration-500 border-4 border-white"
                  />
                  <div
                    class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg max-w-xs hidden md:block"
                  >
                    <p class="text-xs font-bold uppercase text-stone-400">
                      Current Status
                    </p>
                    <p class="text-sm   text-stone-800">
                      Recieved permission from HH Jayapataka Swami to revitalize
                      the heritage site and construct the temple complex.
                    </p>
                  </div>
                </div>
              </div>

              <div class="w-full md:w-1/2">
                <h3
                  class="text-accent text-sm font-bold tracking-widest uppercase mb-2"
                >
                  Heritage Preservation
                </h3>
                <h2 class="text-3xl md:text-4xl   text-stone-900 mb-6">
                  Revitalizing a Sacred Heritage Site
                </h2>
                <div
                  class="space-y-4 text-stone-700 leading-relaxed font-light"
                >
                  <p>
                    Birnagar holds immense spiritual potency. It is not just a
                    location on a map, but a tirtha—a crossing place where the
                    spiritual world meets the material.
                  </p>
                  <p>
                    Yet today, it requires our immediate attention. The new
                    temple complex will restore the sanctity and serenity of
                    this holy land and create a devotional hub for pilgrims,
                    scholars, and seekers.
                  </p>
                </div>
                <ul class="mt-8 space-y-2">
                  <li
                    class="flex items-center gap-3 text-stone-800 text-sm font-medium"
                  >
                    <i class="fas fa-check-circle text-saffron-500"></i> Restore
                    Sanctity
                  </li>
                  <li
                    class="flex items-center gap-3 text-stone-800 text-sm font-medium"
                  >
                    <i class="fas fa-check-circle text-saffron-500"></i> Create
                    a Devotional Hub
                  </li>
                  <li
                    class="flex items-center gap-3 text-stone-800 text-sm font-medium"
                  >
                    <i class="fas fa-check-circle text-saffron-500"></i>
                    Preserve History
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div
          class="bg-amber-900 text-saffron-100 p-10 md:p-16 rounded-[3rem] shadow-2xl relative overflow-hidden text-center"
        >
          <div
            class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none"
          >
            <i
              class="fas fa-globe-asia text-[20rem] absolute -right-20 -bottom-20 rotate-12"
            ></i>
          </div>

          <div class="relative z-10 max-w-3xl mx-auto">
            <div
              class="inline-block p-3 rounded-full bg-saffron-500/20 mb-6 border border-saffron-500/30"
            >
              <i class="fas fa-users text-2xl text-saffron-400"></i>
            </div>

            <h2
              class="text-3xl md:text-5xl   text-white mb-6 leading-tight"
            >
              Creating a Global Offering of Unity and Devotion
            </h2>

            <p class="text-lg font-light leading-relaxed mb-8 opacity-90">
              This sacred project invites devotees and well-wishers worldwide to
              unite, where every contribution becomes an offering of love and
              service toward a timeless mission that transcends geography,
              culture, and time.
            </p>

            <div
              class="flex flex-col sm:flex-row gap-6 justify-center items-center"
            >
              <a
                href="./donate.html"
                class="bg-saffron-500 text-white px-10 py-4 rounded-xl font-bold hover:bg-saffron-600 transition shadow-lg transform hover:scale-105 uppercase tracking-wider text-sm"
              >
                Make Your Offering
              </a>
            </div>
          </div>
        </div>

@endsection