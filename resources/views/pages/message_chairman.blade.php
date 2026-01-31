@extends('layouts.common_page')
@section('page-content')

<link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

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
      /* Adding the card background used in your original snippet */
      .bg-stone-card {
        background-color: #ffffff;
      }
    </style>

        <div class="flex flex-col md:flex-row items-center gap-12 mb-20">
          <div class="w-full md:w-1/2 relative group">
            <div
              class="absolute -inset-4 bg-saffron/20 blur-xl rounded-full opacity-50 group-hover:opacity-100 transition duration-1000"
            ></div>
            <div
              class="relative bg-stone-900 p-2 rounded-2xl border border-stone-800 shadow-2xl"
            >
              <img
                src="https://placehold.co/600x600/222/FFF?text=Chairman+Photo"
                alt="Chairman Message"
                class="rounded-xl w-full grayscale hover:grayscale-0 transition-all duration-700"
              />
            </div>
          </div>

          <div class="w-full md:w-1/2">
            <h2
              class="text-stone-600 text-sm font-bold tracking-[0.3em] uppercase mb-4"
            >
              Building for the Future
            </h2>
            <h1
              class="text-5xl md:text-6xl   text-heading mb-6 leading-tight"
            >
              A Message from the Chairman
            </h1>
            <p class="text-xl text-stone-600 italic font-light leading-relaxed">
              "To serve the holy dham is not merely a task, but the highest
              privilege of the soul."
            </p>
            <div class="mt-6">
              <span class="  text-lg font-bold text-accent"
                >HG Vaikunthapathi Das</span
              >
              <p class="text-xs uppercase tracking-widest text-stone-500">
                Chairman, Kirtan Seva Trust
              </p>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-14">
          <div class="md:col-span-2 bg-stone-card p-10 shadow-xl rounded-sm">
            <h3 class="text-2xl text-heading mb-6  ">
              Dear Devotees and Well-wishers,
            </h3>
            <div
              class="space-y-6 text-slate-700 leading-relaxed font-light text-justify"
            >
              <p>
                Please accept my humble obeisances. All glories to Srila
                Prabhupada.
              </p>
              <p>
                It is with great joy and a sense of deep responsibility that I
                welcome you to the Birnagar Temple Project. This land, hallowed
                by the footsteps of Srila Bhaktivinoda Thakur, holds a unique
                significance in the history of our Gaudiya Vaishnava tradition.
                It was here that the Thakur envisioned a worldwide movement of
                chanting the Holy Name.
              </p>
              <p>
                Our mission is not simply to construct a building of brick and
                mortar, but to revive the spiritual potency of this sacred
                place. We aim to create a sanctuary where the timeless teachings
                of Lord Chaitanya can flourish, providing spiritual shelter to
                pilgrims from around the world.
              </p>
              <p>
                This endeavor requires the collective heart and hands of our
                community. Just as the great acharyas laid the foundation for
                us, it is now our turn to build the walls that will protect and
                propagate their legacy for future generations.
              </p>
              <p>
                I invite you to join us in this glorious service. Whether
                through your prayers, your presence, or your contributions, your
                participation is the life-breath of this project.
              </p>

              <div class="pt-8 mt-8 border-t border-stone-100">
                <p
                  class="  text-2xl text-accent"
                  style="font-family: 'Dancing Script', cursive"
                >
                  Your servant, <br />
                  Vaikunthapathi Das
                </p>
              </div>
            </div>
          </div>

          <div
            class="bg-saffron p-10 rounded-3xl text-stone-950 h-fit sticky top-20"
          >
            <h3
              class="text-xl font-bold uppercase tracking-widest mb-6 border-b border-stone-950/20 pb-2"
            >
              Our Priorities
            </h3>
            <ul class="space-y-6 font-semibold">
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70 mb-1"
                  >Phase 1</span
                >
                Land Acquisition & Excavation
              </li>
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70 mb-1"
                  >Community</span
                >
                Establishing Daily Deity Worship
              </li>
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70 mb-1"
                  >Education</span
                >
                Bhaktivinoda Cultural Center
              </li>
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70 mb-1"
                  >Outreach</span
                >
                Annadanam Distribution
              </li>
            </ul>
            <div class="mt-8">
              <a
                href="#donate"
                class="block w-full text-center bg-stone-900 text-white py-3 rounded-lg text-xs font-bold uppercase tracking-wider hover:bg-stone-800 transition"
              >
                Support the Vision
              </a>
            </div>
          </div>
        </div>

        <div class="max-w-6xl mx-auto pb-12">
          <div
            class="bg-amber-900 text-saffron-100 p-10 md:p-16 rounded-[3rem] mb-16 shadow-2xl relative overflow-hidden"
          >
            <div
              class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center"
            >
              <div>
                <h2 class="text-4xl   mb-6 text-white leading-tight">
                  A Promise to the Acharyas
                </h2>
                <p class="text-lg font-light leading-relaxed mb-6 opacity-90">
                  We are dedicated to fulfilling the desires of the previous
                  Acharyas by developing Birnagar into a thriving center of
                  Kirtan and Krishna Katha.
                </p>
                <div class="flex items-center gap-4 mt-4">
                  <div
                    class="h-10 w-10 bg-saffron-500 rounded-full flex items-center justify-center text-white"
                  >
                    <i class="fas fa-hand-holding-heart"></i>
                  </div>
                  <span
                    class="font-bold text-white uppercase tracking-wider text-sm"
                    >Service • Devotion • Culture</span
                  >
                </div>
              </div>
              <div class="border-l border-saffron-500/30 pl-8">
                <p class="italic text-xl   text-saffron-400 mb-6">
                  "Our only business is to see that everyone is happy. And how
                  can they be happy? By taking to Krishna Consciousness."
                </p>
                <div
                  class="bg-saffron-500/10 p-6 rounded-2xl border border-saffron-500/20"
                >
                  <p class="text-sm font-bold text-right">— Srila Prabhupada</p>
                </div>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="md:col-span-3 space-y-8">
              <div
                class="bg-saffron-light/50 p-10 rounded-3xl border-2 border-amber-600/20 shadow-inner"
              >
                <h3
                  class="text-3xl   text-stone-950 mb-6 underline decoration-amber-600/30"
                >
                  Strategic Roadmap
                </h3>
                <div
                  class="grid grid-cols-1 md:grid-cols-3 gap-6 text-stone-900 leading-relaxed font-medium"
                >
                  <div class="p-4 bg-white/40 rounded-xl">
                    <strong class="text-amber-800 block text-lg mb-2"
                      >Preservation</strong
                    >
                    <p class="text-sm">
                      Restoring the sacred sites associated with Bhaktivinoda
                      Thakur's residence and bhajana kutir.
                    </p>
                  </div>
                  <div class="p-4 bg-white/40 rounded-xl">
                    <strong class="text-amber-800 block text-lg mb-2"
                      >Construction</strong
                    >
                    <p class="text-sm">
                      Building a magnificent Temple Hall capable of hosting
                      hundreds of devotees for festivals.
                    </p>
                  </div>
                  <div class="p-4 bg-white/40 rounded-xl">
                    <strong class="text-amber-800 block text-lg mb-2"
                      >Sustainability</strong
                    >
                    <p class="text-sm">
                      Creating an eco-friendly environment with flower gardens
                      and sustainable guest facilities.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center py-20 border-t border-stone-800">
          <p
            class="text-3xl md:text-4xl text-stone-400 max-w-4xl mx-auto leading-snug  "
          >
            "Come, let us build this temple together for the pleasure of Sri Sri
            Radha Krishna."
          </p>
        </div>

@endsection