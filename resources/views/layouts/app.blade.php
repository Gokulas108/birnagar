<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Birnagar | Birthplace of Srila Bhaktivinoda Thakur</title>

    <meta
      name="description"
      content="Official website of Birnagar Temple Project. Join us in rebuilding the holy birthplace of Srila Bhaktivinoda Thakur. Donate, learn, and chant."
    />
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script> --}}

    <script src="//unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="//unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js" defer></script>

    {{-- <script src="assets/js/main.js"></script> --}}
    @vite(['resources/js/main.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <style>
      /* Custom Scrollbar */
      ::-webkit-scrollbar {
        width: 10px;
      }
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }
      ::-webkit-scrollbar-thumb {
        background: #d4af37;
        border-radius: 5px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #b59223;
      }
      .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      }
      .glass-nav {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
      }
#page-loader {
    position: fixed;
    inset: 0;
    background: #ffffff;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px solid #ddd;
    border-top-color: #3490dc;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}
</style>

  </head>
    <body
    class="bg-orange-50 text-stone-800 antialiased"
    style="font-family: 'Google Sans Flex', sans-serif"
  >
  <div id="page-loader">
    <img src="{{ asset('images/loader.gif') }}" class="logo-loader" alt="Loading">
</div>


    @yield('content')
    <script>
window.addEventListener('load', function () {
    document.getElementById('page-loader').style.display = 'none';
});
</script>

    </body>
    @include("partials.footer")
    </html>