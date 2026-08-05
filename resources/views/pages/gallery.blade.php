@extends('layouts.common_page')
@section('page-content')

<style>
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }

  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>



<!-- HERO SECTION - AUTO SCROLLING SLIDER -->
<div x-data="{ 
    lightbox: false,
    currentImage: null,
    currentIndex: 0,
    allImages: [],

    activeSlide:0,

        slides:[

            {

                img:'images/preaching_hall_1.jpg',

                title:'Preaching Hall Inauguration 2026',

                desc:'The grand opening of our new preaching hall in Birnagar'

            },

            {

                img:'images/preaching_hall_2.jpg',

                title:'Gaura Purnima 2024',

                desc:'Appearance of Lord Chaitanya Mahaprabhu'

            }

        ],

        next() {
            console.log(this.activeSlide);
            this.activeSlide = (this.activeSlide + 1) % this.slides.length;
            console.log(this.activeSlide);
        },

        prev() {
            this.activeSlide =
                (this.activeSlide - 1 + this.slides.length) % this.slides.length;
        },

    openLightbox(src,index) {
    this.currentImage = src;
    this.currentIndex = this.allImages.indexOf(src);
    this.lightbox = true;
    document.body.style.overflow = 'hidden';
    },
    closeLightbox() {
        this.lightbox = false;
        document.body.style.overflow = 'auto';
    },
    nextImage() {
        if (this.currentIndex < this.allImages.length - 1) {
            this.currentIndex++;
            this.currentImage = this.allImages[this.currentIndex];
        }
    },
    prevImage() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.currentImage = this.allImages[this.currentIndex];
        }
    },
    init() {
    console.log('init running');
  this.allImages=Array.from(
  document.querySelectorAll('[data-gallery-image]')
  ).map(el=> el.src);

  setInterval(() => {
  this.next();
  }, 6000);
  },
  }" x-init="init()" @keydown.escape="closeLightbox()" @keydown.arrow-right="nextImage()" @keydown.arrow-left="prevImage()">

  <!-- LIGHTBOX MODAL -->
  <div
    x-show="lightbox"
    @click="closeLightbox()"
    x-transition
    class="fixed inset-0 bg-black/90 z-50 flex items-center justify-center">
    <!-- CLOSE BUTTON -->
    <button
      @click="closeLightbox()"
      class="absolute top-6 right-6 text-white text-4xl z-50 hover:text-amber-400 transition">
      <i class="fas fa-times"></i>
    </button>

    <!-- IMAGE CONTAINER -->
    <div @click.stop class="relative w-full h-full flex items-center justify-center px-4">
      <img :src="currentImage" class="max-w-full max-h-full object-contain" />

      <!-- PREV BUTTON -->
      <button @click="prevImage()" x-show="currentIndex > 0" class="absolute left-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 hover:bg-white/30 backdrop-blur text-white transition flex items-center justify-center">
        <i class="fas fa-chevron-left"></i>
      </button>

      <!-- NEXT BUTTON -->
      <button @click="nextImage()" x-show="currentIndex < allImages.length - 1" class="absolute right-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 hover:bg-white/30 backdrop-blur text-white transition flex items-center justify-center">
        <i class="fas fa-chevron-right"></i>
      </button>

      <!-- IMAGE COUNTER -->
      <div class="absolute bottom-6 left-1/2 -translate-x-1/2 bg-black/50 text-white px-4 py-2 rounded-full text-sm font-semibold">
        <span x-text="currentIndex + 1"></span> / <span x-text="allImages.length"></span>
      </div>
    </div>
  </div>

  <div class="relative rounded-3xl overflow-hidden shadow-2xl h-[350px] md:h-[500px] bg-stone-900">

    <!-- SLIDES -->
    <!-- <template x-for="(slide, index) in slides" :key="index">
      <div
        x-show="activeSlide === index"
        x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute inset-0 w-full h-full">
        <img
          :src="slide.img"
          :alt="slide.title"
          class="w-full h-full object-cover brightness-50" /> -->

    <!-- TEXT OVERLAY -->
    <!-- <div class="absolute inset-0 bg-gradient-to-t from-stone-900 via-transparent to-transparent flex flex-col items-center justify-center">
          <div class="text-center px-6">
            <p class="text-amber-400 text-sm font-bold uppercase tracking-[0.2em] mb-4">Featured Gallery</p>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-3" x-text="slide.title"></h2>
            <p class="text-amber-100/80 text-lg" x-text="slide.desc"></p>
          </div>
        </div>
      </div>
    </template> -->

    <template x-for="(slide, index) in slides" :key="index">
      <div
        x-show="activeSlide === index"
        class="absolute inset-0 w-full h-full">
        <img
          :src="slide.img"
          :alt="slide.title"
          class="w-full h-full object-cover brightness-50" />

        <div class="absolute inset-0 bg-gradient-to-t from-stone-900 via-transparent to-transparent flex flex-col items-center justify-center">
          <div class="text-center px-6">
            <p class="text-amber-400 text-sm font-bold uppercase tracking-[0.2em] mb-4">
              Featured Gallery
            </p>

            <h2 class="text-4xl md:text-5xl font-bold text-white mb-3"
              x-text="slide.title"></h2>

            <p class="text-amber-100/80 text-lg"
              x-text="slide.desc"></p>
          </div>
        </div>
      </div>
    </template>

    <!-- NAVIGATION BUTTONS -->
    <button
      @click="prev()"
      class="absolute left-6 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/10 hover:bg-white/30 backdrop-blur text-white transition duration-300 flex items-center justify-center">
      <i class="fas fa-chevron-left text-xl"></i>
    </button>

    <button
      @click="next()"
      class="absolute right-6 top-1/2 -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/10 hover:bg-white/30 backdrop-blur text-white transition duration-300 flex items-center justify-center">
      <i class="fas fa-chevron-right text-xl"></i>
    </button>

    <!-- DOTS -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex gap-2">
      <template x-for="(slide, index) in slides" :key="index">
        <button
          @click="activeSlide = index"
          class="rounded-full transition-all duration-300"
          :class="activeSlide === index ? 'w-8 h-2 bg-amber-500' : 'w-2 h-2 bg-white/40 hover:bg-white/60'"></button>
      </template>
    </div>

    <!-- PROGRESS BAR -->
    <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-amber-600 to-amber-400 z-10"
      :style="{ width: ((activeSlide + 1) / slides.length * 100) + '%' }"
      style="transition: width 6s linear;">
    </div>
  </div>

  <!-- EVENTS/CATEGORIES SECTION -->
  <div class="py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- EVENTS GRID -->
      <div class="space-y-16">

        <!-- EVENT 1: PREACHING HALL 2026 -->
        <div>
          <div class="mb-6">
            <h2 class="text-3xl font-bold text-stone-900 mb-2">Preaching Hall Inauguration 2026</h2>
            <p class="text-stone-600">The grand openning of our new preaching hall in Birnagar</p>
          </div>
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Image 1 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/preaching_hall_1.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 2 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/preaching_hall_2.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 3 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/preaching_hall_3.png" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 4 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/preaching_hall_4.png" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 5 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/preaching_hall_5.png" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 6 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/preaching_hall_6.png" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- EVENT 2: Bhumi Puja 2025 -->
        <div>
          <div class="mb-6">
            <h2 class="text-3xl font-bold text-stone-900 mb-2">Bhumi Puja 2025</h2>
            <p class="text-stone-600">The grand celebration of Land Innauguration (Silanyasa Festival)</p>
          </div>
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Image 1 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_2.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 2 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_3.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 3 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_4.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 4 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_5.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 5 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_6.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- EVENT 3: Land Registration 2025 -->

        <div>
          <div class="mb-6">
            <h2 class="text-3xl font-bold text-stone-900 mb-2">Land Registration 2025</h2>
            <p class="text-stone-600">HH Jayapataka Swami blessing the Land registartion papers</p>
          </div>
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Image 1 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_1a.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 2 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_1b.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 3 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/image_1c.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
            <!-- Image 4 -->
            <div class="group relative aspect-square rounded-2xl overflow-hidden bg-stone-200 cursor-pointer" @click="openLightbox($event.currentTarget.querySelector('img').src)">
              <img src="images/heritage.jpg" data-gallery-image alt="Preaching Hall" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />
              <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition flex items-center justify-center">
                <i class="fas fa-expand text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
              </div>
            </div>
          </div>
        </div>



      </div>

    </div>
  </div>
</div>
@endsection