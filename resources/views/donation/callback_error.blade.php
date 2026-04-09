@extends('layouts.common_page')
@section('page-content')

<link
  href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
  body {
    color: #0c0a09;
  }

  .status-error {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
  }

  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-slide-up {
    animation: slideUp 0.6s ease-out;
  }
</style>

<div class="flex flex-col items-center justify-center min-h-[60vh] py-12">
  <div class="w-full max-w-md md:max-w-2xl">
    <div class="animate-slide-up">
      <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-stone-100 mb-8">
        <div class="status-error px-6 py-8 md:px-12 md:py-12 text-center relative overflow-hidden">
          <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-20 -mt-20 blur-2xl"></div>
          <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-20 -mb-20 blur-2xl"></div>

          <div class="relative z-10">
            <div class="mb-6 flex justify-center">
              <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center">
                <i class="fas fa-triangle-exclamation text-red-600 text-3xl md:text-4xl"></i>
              </div>
            </div>

            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Unable to Verify Payment</h1>
            <p class="text-red-50 text-lg">
              We could not find this transaction in our records.
            </p>
          </div>
        </div>

        <div class="p-6 md:p-10">
          <div class="space-y-6">
            <div class="space-y-3">
              <p class="text-sm text-stone-600">
                <i class="fas fa-info-circle text-red-600 mr-2"></i>
                <span>This can happen if the callback is invalid or the transaction has expired.</span>
              </p>
              <p class="text-sm text-stone-600">
                <i class="fas fa-phone text-red-600 mr-2"></i>
                <span>If money was debited, please contact support at <span class="font-semibold">sbvt.jsp@gmail.com</span>.</span>
              </p>
            </div>

            <div class="border-t border-stone-200 pt-6 space-y-3">
              <a
                href="/donation"
                class="block w-full bg-linear-to-r from-red-500 to-red-600 text-white font-bold py-3 rounded-xl text-center hover:shadow-lg transition uppercase tracking-widest text-sm">
                <i class="fas fa-heart mr-2"></i> Donate Again
              </a>
              <a
                href="/"
                class="block w-full bg-stone-100 text-stone-700 font-bold py-3 rounded-xl text-center hover:bg-stone-200 transition uppercase tracking-widest text-sm">
                <i class="fas fa-home mr-2"></i> Back to Home
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection