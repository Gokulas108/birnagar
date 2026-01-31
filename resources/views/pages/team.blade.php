@extends('layouts.common_page')
@section('page-content')
 <style>
      /* Saffron 500 Background */
      body {
        color: #0c0a09;
      }

      /* Using a deeper burnt-orange for accents on the bright background */
      .text-accent {
        color: #b45309;
      }
      .text-heading {
        color: oklch(37.4% 0.01 67.558);
      }
      .border-accent {
        border-color: #d97706;
      }
      /* A slightly lighter saffron for card-like areas to give depth */
      .bg-saffron-light {
        background-color: #fbbf24;
      }
      .bg-stone-card {
        background-color: #ffffff;
      }
    </style>
        <div class="text-center mb-16">
          <h2
            class="text-stone-600 text-sm font-bold tracking-[0.3em] uppercase mb-4"
          >
            United in Seva
          </h2>
          <h1 class="text-5xl md:text-7xl  text-heading mb-6">
            The Hearts Behind the Project
          </h1>
          <p class="text-lg text-stone-600 italic font-light max-w-2xl mx-auto">
            "We are all tiny servants of the Supreme Lord, working together to
            build a home for His devotees."
          </p>
        </div>

        <div
          class="flex flex-col md:flex-row items-center gap-12 mb-24 bg-white/40 p-8 rounded-[2rem] border border-stone-200"
        >
          <div class="w-full md:w-1/3 relative group">
            <div
              class="absolute -inset-2 bg-saffron/30 blur-lg rounded-full opacity-50 group-hover:opacity-100 transition duration-1000"
            ></div>
            <div class="relative">
              <img
                src="https://placehold.co/500x600/333/FFF?text=Chairman"
                alt="Chairman"
                class="rounded-xl w-full shadow-2xl grayscale hover:grayscale-0 transition-all duration-700 object-cover h-[400px]"
              />
            </div>
          </div>

          <div class="w-full md:w-2/3">
            <h3
              class="text-accent text-xs font-bold tracking-widest uppercase mb-2"
            >
              Leadership
            </h3>
            <h2 class="text-4xl  text-heading mb-4">
              HG Vaikunthapathi Das
            </h2>
            <p
              class="text-stone-500 text-sm uppercase tracking-wider mb-6 font-bold border-b border-stone-300 pb-4 inline-block"
            >
              Chairman & Founder
            </p>
            <p class="text-stone-700 text-lg leading-relaxed font-light mb-6">
              With over 30 years of dedicated service in the mission of Srila
              Prabhupada, HG Vaikunthapathi Prabhu leads the Birnagar project
              with a vision to revive the glory of the holy dham. His steady
              guidance ensures that every brick laid is cemented with devotion.
            </p>
            <div class="flex gap-4">
              <a href="#" class="text-stone-400 hover:text-saffron-600"
                ><i class="fab fa-linkedin text-xl"></i
              ></a>
              <a href="#" class="text-stone-400 hover:text-saffron-600"
                ><i class="fas fa-envelope text-xl"></i
              ></a>
            </div>
          </div>
        </div>

        <div class="text-center mb-20 px-4">
          <i class="fas fa-quote-left text-4xl text-saffron-400/30 mb-4"></i>
          <h3
            class="text-2xl md:text-3xl  text-stone-800 max-w-4xl mx-auto leading-relaxed"
          >
            "Your love for me will be shown by how much you cooperate to keep
            this institution together."
          </h3>
          <p
            class="text-sm font-bold uppercase tracking-widest text-stone-500 mt-4"
          >
            — Srila Prabhupada
          </p>
        </div>

        <div class="mb-20">
          <div class="flex items-center gap-4 mb-10">
            <h3 class="text-3xl  text-heading">Core Team</h3>
            <div class="h-px flex-grow bg-stone-300"></div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
              class="bg-stone-card rounded-2xl overflow-hidden shadow-lg border border-stone-100 group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
            >
              <div class="h-64 overflow-hidden relative">
                <img
                  src="https://placehold.co/400x400/444/FFF?text=Photo"
                  alt="Team Member"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                />
                <div
                  class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-stone-900/80 to-transparent"
                ></div>
              </div>
              <div class="p-8 relative">
                <div
                  class="absolute -top-6 right-8 bg-saffron-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg"
                >
                  <i class="fas fa-hammer"></i>
                </div>
                <h4 class="text-xl  font-bold text-stone-800">
                  [Name] Das
                </h4>
                <p
                  class="text-xs text-saffron-600 font-bold uppercase tracking-widest mb-4"
                >
                  Project Director
                </p>
                <p class="text-stone-600 text-sm leading-relaxed mb-4">
                  Overseeing the architectural integrity and daily construction
                  operations at the site.
                </p>
              </div>
            </div>

            <div
              class="bg-stone-card rounded-2xl overflow-hidden shadow-lg border border-stone-100 group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
            >
              <div class="h-64 overflow-hidden relative">
                <img
                  src="https://placehold.co/400x400/555/FFF?text=Photo"
                  alt="Team Member"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                />
                <div
                  class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-stone-900/80 to-transparent"
                ></div>
              </div>
              <div class="p-8 relative">
                <div
                  class="absolute -top-6 right-8 bg-saffron-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg"
                >
                  <i class="fas fa-hand-holding-dollar"></i>
                </div>
                <h4 class="text-xl  font-bold text-stone-800">
                  [Name] Das
                </h4>
                <p
                  class="text-xs text-saffron-600 font-bold uppercase tracking-widest mb-4"
                >
                  Fundraising Head
                </p>
                <p class="text-stone-600 text-sm leading-relaxed mb-4">
                  Connecting with donors worldwide to gather the resources
                  needed for the temple.
                </p>
              </div>
            </div>

            <div
              class="bg-stone-card rounded-2xl overflow-hidden shadow-lg border border-stone-100 group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
            >
              <div class="h-64 overflow-hidden relative">
                <img
                  src="https://placehold.co/400x400/666/FFF?text=Photo"
                  alt="Team Member"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                />
                <div
                  class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-stone-900/80 to-transparent"
                ></div>
              </div>
              <div class="p-8 relative">
                <div
                  class="absolute -top-6 right-8 bg-saffron-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg"
                >
                  <i class="fas fa-bullhorn"></i>
                </div>
                <h4 class="text-xl  font-bold text-stone-800">
                  [Name] Devi Dasi
                </h4>
                <p
                  class="text-xs text-saffron-600 font-bold uppercase tracking-widest mb-4"
                >
                  Communications
                </p>
                <p class="text-stone-600 text-sm leading-relaxed mb-4">
                  Managing public relations, social media, and spreading the
                  news of the project.
                </p>
              </div>
            </div>

            <div
              class="bg-stone-card rounded-2xl overflow-hidden shadow-lg border border-stone-100 group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
            >
              <div class="h-64 overflow-hidden relative">
                <img
                  src="https://placehold.co/400x400/777/FFF?text=Photo"
                  alt="Team Member"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                />
                <div
                  class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-stone-900/80 to-transparent"
                ></div>
              </div>
              <div class="p-8 relative">
                <div
                  class="absolute -top-6 right-8 bg-saffron-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg"
                >
                  <i class="fas fa-om"></i>
                </div>
                <h4 class="text-xl  font-bold text-stone-800">
                  [Name] Das
                </h4>
                <p
                  class="text-xs text-saffron-600 font-bold uppercase tracking-widest mb-4"
                >
                  Deity Worship
                </p>
                <p class="text-stone-600 text-sm leading-relaxed mb-4">
                  Ensuring high standards of archana and seva for the presiding
                  Deities.
                </p>
              </div>
            </div>

            <div
              class="bg-stone-card rounded-2xl overflow-hidden shadow-lg border border-stone-100 group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
            >
              <div class="h-64 overflow-hidden relative">
                <img
                  src="https://placehold.co/400x400/888/FFF?text=Photo"
                  alt="Team Member"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                />
                <div
                  class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-stone-900/80 to-transparent"
                ></div>
              </div>
              <div class="p-8 relative">
                <div
                  class="absolute -top-6 right-8 bg-saffron-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg"
                >
                  <i class="fas fa-book-open"></i>
                </div>
                <h4 class="text-xl  font-bold text-stone-800">
                  [Name] Devi Dasi
                </h4>
                <p
                  class="text-xs text-saffron-600 font-bold uppercase tracking-widest mb-4"
                >
                  Research & Education
                </p>
                <p class="text-stone-600 text-sm leading-relaxed mb-4">
                  Heading the Bhaktivinoda Research Institute and library
                  development.
                </p>
              </div>
            </div>

            <div
              class="bg-stone-card rounded-2xl overflow-hidden shadow-lg border border-stone-100 group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
            >
              <div class="h-64 overflow-hidden relative">
                <img
                  src="https://placehold.co/400x400/999/FFF?text=Photo"
                  alt="Team Member"
                  class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                />
                <div
                  class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-stone-900/80 to-transparent"
                ></div>
              </div>
              <div class="p-8 relative">
                <div
                  class="absolute -top-6 right-8 bg-saffron-500 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg"
                >
                  <i class="fas fa-tree"></i>
                </div>
                <h4 class="text-xl  font-bold text-stone-800">
                  [Name] Das
                </h4>
                <p
                  class="text-xs text-saffron-600 font-bold uppercase tracking-widest mb-4"
                >
                  Land & Agriculture
                </p>
                <p class="text-stone-600 text-sm leading-relaxed mb-4">
                  Managing the gardens, landscaping, and sustainable agriculture
                  for the temple.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-24">
          <h3 class="text-2xl  text-heading mb-8 text-center">
            Advisory Board
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div
              class="bg-saffron-light/20 p-6 rounded-xl border border-amber-600/10 text-center"
            >
              <p class=" font-bold text-stone-800">
                HG [Name] Prabhu
              </p>
              <p class="text-xs uppercase text-stone-500 mt-1">
                Senior Advisor
              </p>
            </div>
            <div
              class="bg-saffron-light/20 p-6 rounded-xl border border-amber-600/10 text-center"
            >
              <p class=" font-bold text-stone-800">
                HG [Name] Prabhu
              </p>
              <p class="text-xs uppercase text-stone-500 mt-1">Legal Council</p>
            </div>
            <div
              class="bg-saffron-light/20 p-6 rounded-xl border border-amber-600/10 text-center"
            >
              <p class=" font-bold text-stone-800">
                HG [Name] Prabhu
              </p>
              <p class="text-xs uppercase text-stone-500 mt-1">
                Vastu Consultant
              </p>
            </div>
            <div
              class="bg-saffron-light/20 p-6 rounded-xl border border-amber-600/10 text-center"
            >
              <p class=" font-bold text-stone-800">
                HG [Name] Prabhu
              </p>
              <p class="text-xs uppercase text-stone-500 mt-1">Finance Audit</p>
            </div>
          </div>
        </div>

        <div
          class="bg-amber-900 text-saffron-100 p-10 md:p-16 rounded-[3rem] shadow-2xl relative overflow-hidden"
        >
          <div
            class="absolute -right-20 -top-20 w-96 h-96 bg-saffron-500/10 rounded-full blur-3xl"
          ></div>

          <div class="relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl  text-white mb-6">
              Join the Mission
            </h2>
            <p
              class="text-lg font-light leading-relaxed mb-8 opacity-90 max-w-2xl mx-auto"
            >
              "There is no service small or big in the eyes of Krishna. It is
              the devotion that matters." We are constantly looking for
              volunteers in IT, Content Writing, Architecture, and Fundraising.
            </p>

            <div class="flex flex-col md:flex-row gap-4 justify-center">
              <a
                href="#"
                class="bg-saffron-500 text-white px-8 py-3 rounded-lg font-bold hover:bg-saffron-600 transition shadow-lg uppercase text-sm tracking-wider"
              >
                Become a Volunteer
              </a>
              <a
                href="#"
                class="border border-saffron-500/50 text-saffron-200 px-8 py-3 rounded-lg font-bold hover:bg-saffron-500/10 transition uppercase text-sm tracking-wider"
              >
                Contact Us
              </a>
            </div>
          </div>
        </div>
    @endsection