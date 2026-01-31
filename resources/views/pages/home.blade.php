@extends('layouts.app')
@section('content')
    <style>
      /* Mobile-First Responsive Optimizations */
      @media (max-width: 640px) {
        body {
          overflow-x: hidden;
        }
        
        /* Improve touch targets on mobile */
        button, a {
          min-height: 44px;
        }
        
        /* Disable hover effects on mobile for better performance */
        .group:hover {
          border-color: inherit;
          box-shadow: inherit;
        }
        
        /* Optimize animations for mobile */
        .animate-bounce,
        .animate-pulse,
        .animate-spin {
          animation-duration: 2s;
        }
      }
      
      /* Prevent horizontal scroll on all devices */
      html, body {
        max-width: 100%;
        overflow-x: hidden;
      }
    
      /* ... (Existing styles for .reveal, etc. go here) ... */

      @keyframes scroll-right {
        from {
          transform: translateX(-50%);
        }
        to {
          transform: translateX(0);
        }
      }

      .scrolling-text-container {
        animation: scroll-right 30s linear infinite; /* Adjust '30s' to change speed */
        display: inline-block;
        padding-left: 100%;
        /* Ensures the container respects the animation flow */
      }

      /*CSS for gallery section*/
      /* Hide scrollbar for Chrome, Safari and Opera */
      .no-scrollbar::-webkit-scrollbar {
        display: none;
      }
      /* Hide scrollbar for IE, Edge and Firefox */
      .no-scrollbar {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
      }

      /* Clean horizontal scroll for mobile */
      .no-scrollbar::-webkit-scrollbar {
        display: none;
      }
      .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }

      /* Lighter, smoother scroll hint animation */
      @keyframes scroll-hint {
        0% {
          transform: translateX(-100%);
        }
        100% {
          transform: translateX(200%);
        }
      }
      .animate-scroll-hint {
        animation: scroll-hint 3s infinite ease-in-out;
      }

      /* Soften the card border glow on hover */
      .group:hover {
        border-color: rgba(245, 158, 11, 0.4);
        box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5);
      }
    
      /* ... your existing custom styles (scrollbar, text-shadow, glass-nav) are here ... */

      .nav-link-underline {
        /* Required for the absolute line element */
        position: relative;
        /* Hide the line before hover */
        overflow: hidden;
      }

      .nav-link-underline::after {
        /* Create the actual underline element */
        content: "";
        position: absolute;
        width: 100%;
        height: 2px; /* Thickness of the line */
        bottom: 0;
        left: 0;

        /* Use the Tailwind Saffron color */
        background-color: #ff9933; /* saffron-500 */

        /* Start the line at 0 width (hidden) */
        transform: scaleX(0);
        transform-origin: bottom left;

        /* Animation transition */
        transition: transform 0.3s ease-out;
      }

      .nav-link-underline:hover::after {
        /* Stretch the line to 100% width on hover */
        transform: scaleX(1);
      }

      /* ... (your existing nav-link-underline CSS) ... */

      .nav-link-active {
        /* Sets the persistent saffron text color */
        color: #ff9933 !important; /* saffron-500 color */

        /* Required for the underline pseudo-element */
        position: relative;

        /* Adds the permanent underline */
        border-bottom: 2px solid #ff9933; /* saffron-500 border */
      }

      /* We need to override the hover effect for the active link 
   so the hover doesn't interfere with the permanent look */
      .nav-link-active:hover::after {
        transform: scaleX(0);
      }

      /* --- 1. Planet Animations & Styles (Same as before) --- */
      @keyframes float {
        0%,
        100% {
          transform: translateY(0px) rotate(0deg);
        }
        50% {
          transform: translateY(-20px) rotate(5deg);
        }
      }
      .planet {
        position: absolute;
        border-radius: 50%;
        overflow: hidden;
        mix-blend-mode: screen;
        pointer-events: none;
        will-change: transform;
      }
      .planet::before,
      .planet::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 50%;
      }

      /* Lighting Layer */
      .planet::after {
        background: radial-gradient(
          circle at 30% 30%,
          rgba(255, 255, 255, 0.2),
          rgba(0, 0, 0, 0.4) 50%,
          rgba(0, 0, 0, 0.9)
        );
        box-shadow: inset -10px -10px 20px rgba(0, 0, 0, 0.9);
      }
      /* Saffron Planet Texture */
      .planet-saffron::before {
        background-color: #d97706;
        background-image: repeating-linear-gradient(
            45deg,
            rgba(0, 0, 0, 0.1) 0,
            transparent 20px
          ),
          repeating-radial-gradient(
            circle at 20% 80%,
            rgba(120, 53, 15, 0.3),
            transparent 30%
          );
        filter: blur(1px) contrast(1.2);
      }
      /* Stone Planet Texture */
      .planet-stone::before {
        background-color: #57534e;
        background-image: radial-gradient(
          circle at 50% 50%,
          rgba(0, 0, 0, 0.3) 5%,
          transparent 20%
        );
        filter: contrast(1.1);
      }

      /* --- 2. NEW: Scroll Reveal Animations --- */
      .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 1s cubic-bezier(0.5, 0, 0, 1);
      }
      .reveal.active {
        opacity: 1;
        transform: translateY(0);
      }

      /* --- 3. Timeline Beam Effect --- */
      .timeline-beam {
        background: linear-gradient(
          to bottom,
          transparent 0%,
          #f59e0b 20%,
          #f59e0b 80%,
          transparent 100%
        );
        box-shadow: 0 0 15px #f59e0b;
      }
    </style>

  <!-- //Header!!!!! -->
  <body
    class="bg-stone-50 text-stone-800 antialiased"
    style="font-family: 'Google Sans Flex', sans-serif"
  >

    @include("partials.hero")

    <!-- //About/History/Mission section!!!! -->
    <!-- <div class="bg-gradient-to-b from-blue-950 to-blue-800"> -->
    @include("partials.about")

    <!-- Countdown Section!!! -->
    @include("partials.countdown")

    @include("partials.timeline")

    <!--New ticker-->
    @include("partials.ticker")



    <!-- New Gallery Section -->
    @include("partials.gallery")

    <!-- //Donate Now Section!!! -->
    @include("partials.pricing")

    <!-- //Google Map Section!!! -->
    @include("partials.map")

    <!-- //Footer Section!!! -->

    <script>
      // Optional: Add simple fade-in on scroll
      const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1,
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("opacity-100", "translate-y-0");
            entry.target.classList.remove("opacity-0", "translate-y-10");
          }
        });
      }, observerOptions);

      document.querySelectorAll("section > div").forEach((el) => {
        el.classList.add(
          "transition-all",
          "duration-1000",
          "opacity-0",
          "translate-y-10"
        );
        observer.observe(el);
      });
    </script>
 @endsection
