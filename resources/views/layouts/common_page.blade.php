@extends('layouts.app')
@section('content')
  <div
    class="relative w-full min-h-screen flex flex-col font-googleSans bg-orange-50"
    style="font-family: 'Google Sans Flex', sans-serif"
    x-data="{ scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 40)"
  >
    
    @include("partials.header")
        <main class="max-w-6xl mx-auto px-6 py-12 mt-32 text-amber-950">
            @yield('page-content')
        </main>
      </div>
 @endsection