@extends('layouts.common_page')
@section('page-content')

        <div class="flex flex-col md:flex-row items-center gap-12 mb-20">
          <div class="w-full md:w-1/2 relative group">
            <div
              class="absolute -inset-4 bg-saffron/20 blur-xl rounded-full opacity-50 group-hover:opacity-100 transition duration-1000"
            ></div>
            <div
              class="relative bg-stone-900 p-2 rounded-2xl border border-stone-800 shadow-2xl"
            >
              <img
                id="about-hero-image"
                src="{{ asset('images/sbvt_about.webp') }}"
                alt="Srila Bhaktivinoda Thakur"
                class="rounded-xl w-full transition-all duration-700"
              />
            </div>
          </div>

          <div class="w-full md:w-1/2">
            <h2
              class="text-stone-600 text-sm font-bold tracking-[0.3em] uppercase mb-4"
            >
              The Pioneer of Modern Bhakti
            </h2>
            <h1
              class="text-5xl md:text-7xl text-heading mb-6 leading-tight"
            >
             Śrīla Bhaktivinoda Ṭhākura.
            </h1>
            <p class="text-xl text-stone-600 italic font-light leading-relaxed">
              "The Seventh Goswami who bridged the gap between ancient Vedic
              wisdom and the modern world."
            </p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-14">
          <div class="md:col-span-2 bg-stone-card p-10">
            <h3 class="text-2xl text-heading mb-6">A Life of Divine Purpose</h3>
            <div class="space-y-6 text-slate-700 leading-relaxed font-light">
              <p>
                He was born as Kedarnath Datta in 1838 in Ula, Birnagar (Nadia
                district, Bengal) and passed away in 1914. He was a householder,
                magistrate, scholar, poet and preacher in the line of the
                Gaudiya Vaishnava tradition, and is regarded as one of the
                prominent acharyas of the disciplic succession from Lord
                Krishna. He re-introduced the full teachings of Sri Chaitanya
                Mahaprabhu, wrote extensively, composed devotional songs, and
                laid foundations for modern Krishna-consciousness.
              </p>
              <p>
                According to the Gaudiya Vaishnava sources on ISKCON Desire
                Tree, Bhaktivinoda Thakura’s eternal form is that of a direct
                servant in the spiritual world: specifically he is called
                “Kamala Manjari” the confidential maidservant of Rupa Manjari
                (who in turn serves Srimati Lalita-sakhī in Vraja). Thus his
                eternal service is to serve the Divine Couple (Sri Sri
                Radha-Krishna) through the mood of Lalita-sakhī’s party,
                fulfilling devotional service in the infinite spiritual realm.
              </p>
            </div>
          </div>

          <div class="bg-saffron p-10 rounded-3xl text-stone-950">
            <h3
              class="text-xl font-bold uppercase tracking-widest mb-6 border-b border-stone-950/20 pb-2"
            >
              Legacy
            </h3>
            <ul class="space-y-4 font-semibold">
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70">Discovered</span>
                Birthplace of Lord Chaitanya
              </li>
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70">Role</span> The
                Seventh Goswami
              </li>
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70">Son</span> Srila
                Bhaktisiddhanta Saraswati
              </li>
              <li class="flex flex-col">
                <span class="text-[10px] uppercase opacity-70">Dream</span>
                World-wide Nama Hatta
              </li>
            </ul>
          </div>
        </div>

        <!--About section-->
        <div class="max-w-6xl mx-auto px-6 pb-12">
          <div
            class="bg-amber-900 text-saffron-100 p-10 md:p-16 rounded-[3rem] mb-16 shadow-2xl relative overflow-hidden"
          >
            <div
              class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center"
            >
              <div>
                <h2 class="text-4xl mb-6 text-white leading-tight">
                  The Golden Light Across the Jalangi
                </h2>
                <p class="text-lg font-light leading-relaxed mb-6 opacity-90">
                  While residing at Svananda Sukhada Kunja, Bhaktivinoda Thakura
                  beheld Sri Chaitanya and Nityananda Prabhu dancing in a
                  brilliant golden light[cite: 20].
                </p>
                <p class="text-lg font-light leading-relaxed opacity-90">
                  This led to the identification of the
                  <strong>Yoga Pitha</strong>, the true birthplace of Lord
                  Chaitanya, which he later confirmed with Jagannatha Dasa
                  Babaji Maharaj[cite: 21, 22].
                </p>
              </div>
              <div class="border-l border-saffron-500/30 pl-8">
                <p class="italic text-xl text-saffron-400 mb-6">
                  "When will that day come when the fair-skinned foreigners will
                  come to Sri Mayapur-dhama and join with the Bengali Vaishnavas
                  to chant, Jaya Sacinandana!" [cite: 36]
                </p>
                <div
                  class="bg-saffron-500/10 p-6 rounded-2xl border border-saffron-500/20"
                >
                  <p class="text-sm">
                    He foresaw a temple whose splendor would broadcast the
                    service of Lord Gaurāṅga throughout the world[cite: 23].
                  </p>
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
                  class="text-3xl text-stone-950 mb-6 underline decoration-amber-600/30"
                >
                  Life's Achievements
                </h3>
                <div
                  class="space-y-6 text-stone-900 leading-relaxed font-medium"
                >
                  <p>
                    • He held high civil-service positions under British
                    colonial rule as Deputy Magistrate and Deputy Collector in
                    Bengal and Orissa.
                  </p>
                  <p>
                    • He was a prolific writer and scholar: he wrote many books,
                    translations and commentaries, and composed hundreds of
                    devotional songs. •
                  </p>
                  <p>
                    • He used his government office to reform temple worship and
                    maintain standards of deity service: for example, when
                    manager of the Jagannatha Puri temple he established regular
                    worship and daily discourses.
                  </p>
                  <p>
                    • He discovered and excavated the birthplace of Sri
                    Chaitanya (in Mayapur, Navadvipa). •
                  </p>
                  <p>
                    He revived pure devotional service (śuddha-bhakti) in his
                    era, when the Gaudiya movement had degenerated; he
                    re-emphasised the philosophy of achintya-bheda-abheda and
                    sankīrtana of the holy name.
                  </p>
                  <p>
                    • He established the “Nama-Hatta” centres for chanting and
                    preaching in Bengal.
                  </p>
                  <p>
                    • He served as an acharya in the disciplic line
                    (guru-parampara) and his 7th son was Srila Bhaktisiddhanta
                    Saraswati Thakura, who carried forward his mission; hence
                    Bhaktivinoda is recognized as the root of the modern Gaudiya
                    preaching movement.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div
              class="bg-saffron-light/50 p-10 rounded-3xl border border-amber-600/20"
            >
              <h3 class="text-2xl text-stone-950 mb-6">
                Literary Masterpieces
              </h3>
              <ul class="space-y-4">
                <li class="flex gap-4">
                  <span class="text-amber-800 font-bold">1896</span>
                  <div>
                    <strong class="block text-stone-950">Jaiva-Dharma</strong>
                    <span class="text-sm text-amber-950/70"
                      >A novel-style devotional work explaining the soul's
                      nature[cite: 27].</span
                    >
                  </div>
                </li>
                <li class="flex gap-4">
                  <span class="text-amber-800 font-bold">1893</span>
                  <div>
                    <strong class="block text-stone-950">Tattva-Viveka</strong>
                    <span class="text-sm text-amber-950/70"
                      >A concise work awakening intelligence in absolute
                      truth[cite: 26].</span
                    >
                  </div>
                </li>
                <li class="flex gap-4">
                  <span class="text-amber-800 font-bold">Songs</span>
                  <div>
                    <strong class="block text-stone-950"
                      >Kalyana-Kalpataru & Saranagati</strong
                    >
                    <span class="text-sm text-amber-950/70"
                      >Hundreds of devotional songs that nourish the heart[cite:
                      29].</span
                    >
                  </div>
                </li>
              </ul>
            </div>

            <div
              class="bg-saffron-light-50 p-10 rounded-3xl border border-amber-600/20 text-stone-950"
            >
              <h3 class="text-2xl text-stone-950 mb-6">
                Wisdom for the Soul
              </h3>
              <blockquote
                class="border-l-4 border-amber-800 pl-6 space-y-4 italic font-light"
              >
                <p>
                  "Give up all false pride. Always think yourself to be
                  worthless, destitute, lower and more humble than straw in the
                  street." [cite: 35]
                </p>
                <p>
                  "Practice forgiveness like the tree. Knowing that Lord Sri
                  Krishna lives within all living beings, you should respect and
                  honor everyone at all times." [cite: 35]
                </p>
              </blockquote>
              <div class="mt-8 pt-6 border-t border-stone-800">
                <p class="text-[10px] text-stone-500 uppercase tracking-widest">
                  Preaching Legacy
                </p>
                <p class="text-sm mt-2">
                  His 7th son,
                  <strong>Srila Bhaktisiddhanta Saraswati Thakura</strong>,
                  carried this mission forward[cite: 13].
                </p>
              </div>
            </div>
          </div>
        </div>

        <!--End of about section-->

        <div class="text-center py-20 border-t border-stone-800">
          <p
            class="text-3xl md:text-4xl text-stone-400 max-w-4xl mx-auto leading-snug"
          >
            "He reasons ill who tells that Vaishnavas die, When thou art living
            still in sound!"
          </p>
          <div class="mt-8 flex justify-center items-center gap-4">
            <div class="h-px w-12 bg-saffron/50"></div>
            <span
              class="text-saffron font-bold tracking-widest uppercase text-xs"
              >A Tribute by his son</span
            >
            <div class="h-px w-12 bg-saffron/50"></div>
          </div>
        </div>

        <script>
          document.addEventListener('DOMContentLoaded', function() {
            const heroImage = document.getElementById('about-hero-image');

            if (!heroImage) return;

            function updateImageGrayscale() {
              const imageRect = heroImage.getBoundingClientRect();
              const imageMidpoint = imageRect.top + imageRect.height / 2;
              const viewportMiddle = window.innerHeight / 2;

              if (imageMidpoint < viewportMiddle) {
                heroImage.classList.add('grayscale');
              } else {
                heroImage.classList.remove('grayscale');
              }
            }

            window.addEventListener('scroll', updateImageGrayscale);
            updateImageGrayscale(); // Initial check
          });
        </script>
 @endsection

