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
  body {
    color: #0c0a09;
  }

  .text-heading {
    color: oklch(37.4% 0.01 67.558);
  }

  .status-success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  }

  .status-failed {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
  }

  .status-pending {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
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

  @keyframes bounce {
    0%,
    100% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.05);
    }
  }

  .animate-bounce-icon {
    animation: bounce 1s ease-in-out infinite;
  }
</style>

<div class="flex flex-col items-center justify-center min-h-[60vh] py-12">
  <div class="w-full max-w-md md:max-w-2xl">
    <!-- Success State -->
    @if ($status === 'SUCCESS')
      <div class="animate-slide-up">
        <div
          class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-stone-100 mb-8"
        >
          <div class="status-success px-6 py-8 md:px-12 md:py-12 text-center relative overflow-hidden">
            <div
              class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-20 -mt-20 blur-2xl"
            ></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-20 -mb-20 blur-2xl"></div>

            <div class="relative z-10">
              <div class="mb-6 flex justify-center">
                <div
                  class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center animate-bounce-icon"
                >
                  <i class="fas fa-check text-green-600 text-3xl md:text-4xl"></i>
                </div>
              </div>

              <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $respDescription ?? "Payment Successful!" }}</h1>
              <p class="text-green-50 text-lg">
                Thank you for your generous donation of <b> Rs {{ $amount ?? '' }}/- </b> to the sacred cause
              </p>
            </div>
          </div>

          <div class="p-6 md:p-10">
            <div class="space-y-6">
              <div class="bg-green-50 rounded-xl p-4 border border-green-200">
                <p class="text-xs font-bold text-green-700 uppercase tracking-widest mb-2">
                  Transaction ID
                </p>
                <div class="flex items-center justify-between gap-4">
                  <p class="font-mono font-bold text-green-900 break-all">{{ $txnID ?? 'N/A' }}</p>
                  <button
                    onclick="navigator.clipboard.writeText('{{ $txnID ?? '' }}')"
                    class="text-green-600 hover:text-green-700 transition"
                  >
                    <i class="fas fa-copy"></i>
                  </button>
                </div>
              </div>

              {{-- <div class="space-y-3">
                <p class="text-sm text-stone-600">
                  <i class="fas fa-info-circle text-green-600 mr-2"></i>
                  <span>A confirmation email has been sent to your registered email address.</span>
                </p>
                <p class="text-sm text-stone-600">
                  <i class="fas fa-check-circle text-green-600 mr-2"></i>
                  <span>Your donation will help in the sacred restoration of Birnagar.</span>
                </p>
              </div> --}}

              <div class="border-t border-stone-200 pt-6 space-y-3">
                <a
                  href="/"
                  class="block w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-3 rounded-xl text-center hover:shadow-lg transition uppercase tracking-widest text-sm"
                >
                  <i class="fas fa-home mr-2"></i> Back to Home
                </a>
                <a
                  href="/donation"
                  class="block w-full bg-stone-100 text-stone-700 font-bold py-3 rounded-xl text-center hover:bg-stone-200 transition uppercase tracking-widest text-sm"
                >
                  <i class="fas fa-heart mr-2"></i> Make Another Donation
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @elseif ($status === 'FAILED')
      <!-- Failed State -->
      <div class="animate-slide-up">
        <div
          class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-stone-100 mb-8"
        >
          <div class="status-failed px-6 py-8 md:px-12 md:py-12 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-20 -mt-20 blur-2xl"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-20 -mb-20 blur-2xl"></div>

            <div class="relative z-10">
              <div class="mb-6 flex justify-center">
                <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center">
                  <i class="fas fa-times text-red-600 text-3xl md:text-4xl"></i>
                </div>
              </div>

              <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $respDescription ?? "Payment Failed" }}</h1>
              <p class="text-red-50 text-lg">
                Unfortunately, your payment could not be processed
              </p>
            </div>
          </div>

          <div class="p-6 md:p-10">
            <div class="space-y-6">
              @if ($txnID)
                <div class="bg-red-50 rounded-xl p-4 border border-red-200">
                  <p class="text-xs font-bold text-red-700 uppercase tracking-widest mb-2">
                    Transaction ID
                  </p>
                  <div class="flex items-center justify-between gap-4">
                    <p class="font-mono font-bold text-red-900 break-all">{{ $txnID }}</p>
                    <button
                      onclick="navigator.clipboard.writeText('{{ $txnID }}')"
                      class="text-red-600 hover:text-red-700 transition"
                    >
                      <i class="fas fa-copy"></i>
                    </button>
                  </div>
                </div>
              @endif

              <div class="space-y-3">
                <p class="text-sm text-stone-600">
                  <i class="fas fa-exclamation-circle text-red-600 mr-2"></i>
                  <span>Please check your payment details and try again.</span>
                </p>
                <p class="text-sm text-stone-600">
                  <i class="fas fa-phone text-red-600 mr-2"></i>
                  <span
                    >If the problem persists, please contact our support team at
                    <span class="font-semibold">support@birnagar.org</span></span
                  >
                </p>
              </div>

              <div class="border-t border-stone-200 pt-6 space-y-3">
                <a
                  href="/donation"
                  class="block w-full bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-3 rounded-xl text-center hover:shadow-lg transition uppercase tracking-widest text-sm"
                >
                  <i class="fas fa-redo mr-2"></i> Try Again
                </a>
                <a
                  href="/"
                  class="block w-full bg-stone-100 text-stone-700 font-bold py-3 rounded-xl text-center hover:bg-stone-200 transition uppercase tracking-widest text-sm"
                >
                  <i class="fas fa-home mr-2"></i> Back to Home
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @else
      <!-- Pending/Unknown State -->
      <div class="animate-slide-up">
        <div
          class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-stone-100 mb-8"
        >
          <div class="status-pending px-6 py-8 md:px-12 md:py-12 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-20 -mt-20 blur-2xl"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-white/10 rounded-full -ml-20 -mb-20 blur-2xl"></div>

            <div class="relative z-10">
              <div class="mb-6 flex justify-center">
                <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-full flex items-center justify-center">
                  <i class="fas fa-clock text-amber-600 text-3xl md:text-4xl animate-spin"></i>
                </div>
              </div>

              <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Payment Pending</h1>
              <p class="text-amber-50 text-lg">
                Your payment is being processed, please wait
              </p>
            </div>
          </div>

          <div class="p-6 md:p-10">
            <div class="space-y-6">
              @if ($txnID)
                <div class="bg-amber-50 rounded-xl p-4 border border-amber-200">
                  <p class="text-xs font-bold text-amber-700 uppercase tracking-widest mb-2">
                    Transaction ID
                  </p>
                  <div class="flex items-center justify-between gap-4">
                    <p class="font-mono font-bold text-amber-900 break-all">{{ $txnID }}</p>
                    <button
                      onclick="navigator.clipboard.writeText('{{ $txnID }}')"
                      class="text-amber-600 hover:text-amber-700 transition"
                    >
                      <i class="fas fa-copy"></i>
                    </button>
                  </div>
                </div>
              @endif

              <div class="space-y-3">
                <p class="text-sm text-stone-600">
                  <i class="fas fa-info-circle text-amber-600 mr-2"></i>
                  <span>We are processing your donation. This may take a few moments.</span>
                </p>
                <p class="text-sm text-stone-600">
                  <i class="fas fa-envelope text-amber-600 mr-2"></i>
                  <span>You will receive a confirmation email once the payment is complete.</span>
                </p>
              </div>

              <div class="border-t border-stone-200 pt-6 space-y-3">
                <a
                  href="/"
                  class="block w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-bold py-3 rounded-xl text-center hover:shadow-lg transition uppercase tracking-widest text-sm"
                >
                  <i class="fas fa-home mr-2"></i> Back to Home
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
</div>

@endsection
