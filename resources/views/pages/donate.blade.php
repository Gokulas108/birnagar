@extends('layouts.common_page')
@section('page-content')

<link
  href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap"
  rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
  /* Saffron 500 Background */
  body {
    color: #0c0a09;
  }

  .text-heading {
    color: oklch(37.4% 0.01 67.558);
  }

  .bg-stone-card {
    background-color: #ffffff;
  }

  /* Pulse Animation for Donate Button */
  @keyframes pulse-saffron {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.7);
    }

    50% {
      box-shadow: 0 0 0 10px rgba(245, 158, 11, 0);
    }
  }

  .animate-pulse-custom {
    animation: pulse-saffron 2s infinite;
  }

  .seva-option.selected {
    border-color: #f59e0b;
    background-color: #fff7ed;
    box-shadow: 0 0 0 1px #f59e0b;
  }

  .font-signature {
    font-family: "Dancing Script", cursive;
  }

  /* Custom Select Chevron */
  select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%2378716c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 1em;
  }
</style>

<div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-start">
  <div class="w-full lg:w-5/12 pt-4 lg:sticky lg:top-[-120px]">
    <!-- <div
              class="inline-flex items-center gap-2 px-3 py-1 bg-green-100 text-green-800 rounded-full text-[10px] font-bold uppercase tracking-widest mb-6 border border-green-200"
            >
              <i class="fas fa-certificate"></i> 80G Tax Exemption Available
            </div> -->

    <h1
      class="text-4xl md:text-5xl lg:text-6xl  text-heading mb-6 leading-tight">
      Help us build<br />
      <span
        class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-amber-500">The Sacred Temple</span>
    </h1>

    <div
      class="bg-white p-8 rounded-2xl border border-stone-200 shadow-[0_8px_30px_rgb(0,0,0,0.04)] relative overflow-hidden group">
      <div
        class="absolute top-0 right-0 w-32 h-32 bg-orange-100 rounded-full -mr-16 -mt-16 opacity-50 blur-2xl"></div>

      <div class="relative z-10">
        <div class="flex items-center gap-4 mb-6">
          <div
            class="w-16 h-16 rounded-full border-2 border-white shadow-md overflow-hidden shrink-0">
            <img
              src="https://placehold.co/100x100/333/FFF?text=HG"
              alt="Chairman"
              class="object-cover w-full h-full grayscale group-hover:grayscale-0 transition duration-500" />
          </div>
          <div>
            <p
              class="text-sm font-bold text-stone-900 uppercase tracking-wide">
              A personal appeal from
            </p>
            <p class="text-saffron-600 font-bold text-lg">
              HG Vaikunthapathi Das
            </p>
          </div>
        </div>

        <divs
          class="space-y-4 text-stone-700 leading-relaxed text-sm text-justify">
          <p>Dear Devotees,</p>
          <p>
            “We stand at a pivotal moment as Birnagar, the sacred birthplace of Srila Bhaktivinoda Thakur, inspires a new beginning. It is our collective privilege to develop this holy land into a place that will preserve its significance and inspire generations to come.”
          </p>
          <p>
            I personally invite you to join this divine mission. Whether
            you sponsor a single brick or an entire pillar, your service
            is eternal, for the Lord sees the love rather than the
            amount. Let us build this sanctuary together for the
            pleasure of Guru and Gauranga.
          </p>
        </divs>

        <div
          class="mt-8 pt-6 border-t border-stone-100 flex justify-between items-end">
          <div>
            <p
              class="text-xs text-stone-400 uppercase tracking-widest mb-1">
              Yours in Service,
            </p>
            <p class="font-signature text-3xl text-stone-800">
              Vaikunthapathi Das
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div
    class="w-full lg:w-7/12"
    x-data="{ 
    frequency: 'One-Time',
    amount: '',
    selectedSeva: '',
    customAmount: false,

    init() {
        // Read URL parameters
        const params = new URLSearchParams(window.location.search);
        const sevaType = params.get('seva');
        const sevaAmount = params.get('amount');
        
        if (sevaType && sevaAmount) {
            this.selectedSeva = sevaType;
            this.amount = sevaAmount;
            this.customAmount = false;
        }
    },

    setSeva(id, cost) {
        this.selectedSeva = id;
        this.amount = cost;
        this.customAmount = false;
    },
    setCustom() {
        this.selectedSeva = 'custom';
        this.amount = '';
        this.customAmount = true;
        this.$nextTick(() => { $refs.customInput.focus(); });
    },
    copyToClipboard(text) {
        navigator.clipboard.writeText(text);
        alert('Copied details to clipboard!');
    }
}"
    @load="init()">
    <div
      class="relative bg-white rounded-3xl shadow-2xl overflow-hidden border border-stone-100 mb-8">
      <div
        class="bg-stone-50 px-6 py-5 border-b border-stone-200 flex flex-col sm:flex-row justify-between items-center gap-4">
        <h3
          class="text-lg font-bold text-stone-800 flex items-center gap-2">
          <i class="fas fa-heart text-saffron-500"></i> Make an Offering
        </h3>

        <div class="relative">


        </div>
      </div>

      <form method="POST" action="{{ route('payment.initiate') }}" class="p-6 md:p-8">
        @csrf
        <p
          class="text-[10px] font-bold text-stone-400 uppercase tracking-wider mb-3">
          Select your Seva
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
          <div
            @click="setSeva('sqft', '7501')"
            class="seva-option border rounded-xl p-4 cursor-pointer relative bg-white"
            :class="selectedSeva === 'sqft' ? 'selected' : 'border-stone-200'">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div
                  class="w-10 h-10 rounded-full bg-orange-50 text-orange-600 flex items-center justify-center">
                  <i class="fas fa-th"></i>
                </div>
                <div>
                  <span class="block text-stone-800 font-bold text-sm">Pādapadma</span>
                  <span class="block text-saffron-600 font-bold text-xs">₹7,501</span>
                </div>
              </div>
              <div
                x-show="selectedSeva === 'sqft'"
                class="text-saffron-500">
                <i class="fas fa-check-circle"></i>
              </div>
            </div>
            <p class="text-xs text-stone-500 leading-snug pl-[3.25rem]">
              Sponsor one square foot of sacred ground to build the foundation.
            </p>
          </div>

          <div
            @click="setSeva('land', '25001')"
            class="seva-option border rounded-xl p-4 cursor-pointer relative bg-white"
            :class="selectedSeva === 'land' ? 'selected' : 'border-stone-200'">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div
                  class="w-10 h-10 rounded-full bg-orange-50 text-orange-600 flex items-center justify-center">
                  <i class="fas fa-utensils"></i>
                </div>
                <div>
                  <span class="block text-stone-800 font-bold text-sm">Bhūmi-Dāna</span>
                  <span class="block text-saffron-600 font-bold text-xs">₹25,001</span>
                </div>
              </div>
              <div
                x-show="selectedSeva === 'land'"
                class="text-saffron-500">
                <i class="fas fa-check-circle"></i>
              </div>
            </div>
            <p class="text-xs text-stone-500 leading-snug pl-[3.25rem]">
              Help prepare and sanctify the sacred soil for the temple manifestation.
            </p>
          </div>

          <div
            @click="setSeva('foundation', '50001')"
            class="seva-option border rounded-xl p-4 cursor-pointer relative bg-white"
            :class="selectedSeva === 'foundation' ? 'selected' : 'border-stone-200'">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div
                  class="w-10 h-10 rounded-full bg-orange-50 text-orange-600 flex items-center justify-center">
                  <i class="fas fa-ruler-combined"></i>
                </div>
                <div>
                  <span class="block text-stone-800 font-bold text-sm">Sthāpana</span>
                  <span class="block text-saffron-600 font-bold text-xs">₹50,001</span>
                </div>
              </div>
              <div
                x-show="selectedSeva === 'foundation'"
                class="text-saffron-500">
                <i class="fas fa-check-circle"></i>
              </div>
            </div>
            <p class="text-xs text-stone-500 leading-snug pl-[3.25rem]">
              Establish the spiritual roots of the library and memorial hall.
            </p>
          </div>

          <div
            @click="setSeva('temple','100001')"
            class="seva-option border rounded-xl p-4 cursor-pointer relative bg-white"
            :class="selectedSeva === 'temple' ? 'selected' : 'border-stone-200'">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div
                  class="w-10 h-10 rounded-full bg-stone-100 text-stone-600 flex items-center justify-center">
                  <i class="fas fa-heart"></i>
                </div>
                <div>
                  <span class="block text-stone-800 font-bold text-sm">Pratiṣṭhā</span>
                  <span class="block text-saffron-600 font-bold text-xs">₹1,00,001</span>
                </div>
              </div>
              <div
                x-show="selectedSeva === 'temple'"
                class="text-saffron-500">
                <i class="fas fa-check-circle"></i>
              </div>
            </div>
            <p class="text-xs text-stone-500 leading-snug pl-[3.25rem]">
              A transformative vow to fulfill the vision of the Ācāryas for future generations.
            </p>
          </div>
        </div>

        {{-- 5th option — full width --}}
        <div
          @click="setCustom()"
          class="seva-option border rounded-xl p-4 cursor-pointer relative bg-white mb-6"
          :class="selectedSeva === 'custom' ? 'selected' : 'border-stone-200'">
          <div class="flex items-start justify-between mb-2">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full bg-orange-50 text-orange-600 flex items-center justify-center">
                <i class="fas fa-hand-holding-heart"></i>
              </div>
              <div>
                <span class="block text-stone-800 font-bold text-sm">General Donation</span>
                <span class="block text-saffron-600 font-bold text-xs">Any Amount</span>
              </div>
            </div>
            <div x-show="selectedSeva === 'custom'" class="text-saffron-500">
              <i class="fas fa-check-circle"></i>
            </div>
          </div>
          <p class="text-xs text-stone-500 leading-snug pl-[3.25rem]">
            Contribute any amount of your choice towards the sacred Birnagar Temple Project. Every rupee counts.
          </p>
        </div>

        <div class="relative mb-6">
          <label
            class="text-[10px] font-bold text-stone-400 uppercase tracking-wider mb-2 block">Donation Amount (INR)</label>
          <div class="relative group">
            <span
              class="absolute left-4 top-1/2 -translate-y-1/2 text-stone-400 font-bold text-xl group-focus-within:text-saffron-500 transition">₹</span>
            <input
              x-ref="customInput"
              type="number"
              name="amount"
              x-model="amount"
              class="w-full bg-stone-50 border border-stone-200 rounded-xl py-4 pl-10 pr-4 text-2xl font-bold text-stone-800 focus:ring-2 focus:ring-saffron-500 outline-none transition shadow-inner"
              placeholder="Enter Amount" />
          </div>
        </div>

        <div class="space-y-4 mb-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label
                class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">Full Name</label>
              <input
                type="text"
                name="name"
                class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition"
                placeholder="e.g. Rahul Kumar" />
            </div>
            <div>
              <label
                class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">Email Address</label>
              <input
                type="email"
                name="email"
                class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition"
                placeholder="name@example.com" />
            </div>
          </div>
          <div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="md:col-span-1">
                <label class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">Country Code</label>
                <select
                  name="country_code"
                  class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition">
                  <option value="+91" selected>India (+91)</option>
                  <option value="+93">Afghanistan (+93)</option>
                  <option value="+355">Albania (+355)</option>
                  <option value="+213">Algeria (+213)</option>
                  <option value="+1684">American Samoa (+1684)</option>
                  <option value="+376">Andorra (+376)</option>
                  <option value="+244">Angola (+244)</option>
                  <option value="+1264">Anguilla (+1264)</option>
                  <option value="+1268">Antigua and Barbuda (+1268)</option>
                  <option value="+54">Argentina (+54)</option>
                  <option value="+374">Armenia (+374)</option>
                  <option value="+297">Aruba (+297)</option>
                  <option value="+61">Australia (+61)</option>
                  <option value="+672">Australian External Territories (+672)</option>
                  <option value="+43">Austria (+43)</option>
                  <option value="+998">Uzbekistan (+998)</option>
                  <option value="+32">Belgium (+32)</option>
                  <option value="+880">Bangladesh (+880)</option>
                  <option value="+55">Brazil (+55)</option>
                  <option value="+1">Canada (+1)</option>
                  <option value="+56">Chile (+56)</option>
                  <option value="+86">China (+86)</option>
                  <option value="+57">Colombia (+57)</option>
                  <option value="+420">Czech Republic (+420)</option>
                  <option value="+45">Denmark (+45)</option>
                  <option value="+20">Egypt (+20)</option>

                  <option value="+358">Finland (+358)</option>
                  <option value="+33">France (+33)</option>
                  <option value="+49">Germany (+49)</option>
                  <option value="+30">Greece (+30)</option>
                  <option value="+852">Hong Kong (+852)</option>
                  <option value="+36">Hungary (+36)</option>
                  <option value="+62">Indonesia (+62)</option>
                  <option value="+39">Italy (+39)</option>
                  <option value="+81">Japan (+81)</option>
                  <option value="+7">Kazakhstan (+7)</option>
                  <option value="+82">South Korea (+82)</option>
                  <option value="+212">Morocco (+212)</option>
                  <option value="+60">Malaysia (+60)</option>
                  <option value="+52">Mexico (+52)</option>
                  <option value="+31">Netherlands (+31)</option>
                  <option value="+64">New Zealand (+64)</option>
                  <option value="+234">Nigeria (+234)</option>
                  <option value="+47">Norway (+47)</option>
                  <option value="+92">Pakistan (+92)</option>
                  <option value="+51">Peru (+51)</option>
                  <option value="+63">Philippines (+63)</option>
                  <option value="+48">Poland (+48)</option>
                  <option value="+351">Portugal (+351)</option>
                  <option value="+974">Qatar (+974)</option>
                  <option value="+40">Romania (+40)</option>
                  <option value="+966">Saudi Arabia (+966)</option>
                  <option value="+65">Singapore (+65)</option>
                  <option value="+34">Spain (+34)</option>
                  <option value="+94">Sri Lanka (+94)</option>
                  <option value="+46">Sweden (+46)</option>
                  <option value="+41">Switzerland (+41)</option>
                  <option value="+886">Taiwan (+886)</option>
                  <option value="+66">Thailand (+66)</option>
                  <option value="+216">Tunisia (+216)</option>
                  <option value="+971">United Arab Emirates (+971)</option>
                  <option value="+44">United Kingdom (+44)</option>
                  <option value="+1">United States (+1)</option>
                  <option value="+379">Vatican City (+379)</option>
                  <option value="+58">Venezuela (+58)</option>
                  <option value="+84">Vietnam (+84)</option>
                  <option value="+1340">Virgin Islands, U.S. (+1340)</option>
                  <option value="+1284">Virgin Islands, British (+1284)</option>
                  <option value="+681">Wallis and Futuna (+681)</option>
                  <option value="+260">Zambia (+260)</option>
                  <option value="+263">Zimbabwe (+263)</option>
                </select>
              </div>
              <div class="md:col-span-2">
                <label class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">Mobile Number</label>
                <input
                  type="tel"
                  name="mobile"
                  class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition" />
              </div>
            </div>
          </div>
          <p class="text-[10px] text-stone-400 mt-1 italic">
            Please enter your mobile number without the country code (e.g., 9876543210).
          </p>
        </div>


        <div x-show="amount > 10000"
          x-collapse class="mt-3 mb-8">
          <label
            class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">PAN Card Number</label>
          <input
            type="text"
            name="pan"
            class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 uppercase tracking-widest placeholder:normal-case transition"
            placeholder="ABCDE1234F" />
          <p class="text-[10px] text-stone-400 mt-1 italic">
            Make sure the name matches with the one on your PAN card.
          </p>

          <div class="mt-4 space-y-4">
            <div>
              <label
                class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">Complete Address</label>
              <textarea
                name="address"
                rows="2"
                class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition resize-none"
                placeholder="Street Address, Apartment, Building"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label
                  class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">City</label>
                <input
                  type="text"
                  name="city"
                  class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition"
                  placeholder="e.g. Kolkata" />
              </div>
              <div>
                <label
                  class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">State</label>
                <select
                  name="state"
                  class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition">
                  <option value="">Select State</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Ladakh">Ladakh</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Puducherry">Puducherry</option>
                </select>
              </div>
            </div>

            <div>
              <label
                class="text-[10px] font-bold text-stone-400 uppercase mb-1 block">PIN Code</label>
              <input
                type="text"
                name="pincode"
                maxlength="6"
                class="w-full bg-white border border-stone-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:border-saffron-400 focus:ring-1 focus:ring-saffron-400 transition"
                placeholder="700001" />
            </div>
          </div>
        </div>

        <div class="mb-6">
          <label class="flex items-start gap-3 cursor-pointer group">
            <input
              type="checkbox"
              class="mt-1 w-4 h-4 rounded border-stone-300 text-saffron-500 focus:ring-saffron-500 focus:ring-2 cursor-pointer"
              required />
            <span class="text-xs text-stone-600 leading-relaxed">
              I have read and accepted the
              <a href="/terms-and-conditions" target="_blank" class="text-saffron-600 hover:text-saffron-700 font-semibold underline">Terms and Conditions</a>
              and
              <a href="/privacy-policy" target="_blank" class="text-saffron-600 hover:text-saffron-700 font-semibold underline">Privacy Policy</a>
            </span>
          </label>
        </div>
        <div class="mb-6">
          <p class="text-xs text-stone-500 italic">
            Note: In the netbanking option, some banks might not work. If so, please use UPI or card to make the payment.
          </p>
        </div>

        <button
          type="submit"
          class="w-full bg-gradient-to-r from-saffron-500 to-orange-600 text-white font-bold py-4 rounded-xl shadow-lg hover:shadow-xl hover:shadow-saffron-500/30 transform hover:-translate-y-0.5 transition uppercase tracking-widest text-sm flex justify-center items-center gap-2 animate-pulse-custom">
          <span>Proceed to Pay</span>
          <span>₹<span x-text="amount ? amount : '0'"></span></span>
          <span
            x-show="frequency !== 'One-Time'"
            class="text-[10px] bg-white/20 px-2 py-0.5 rounded"
            x-text="'(' + frequency + ')'"></span>
        </button>

        <div
          class="flex justify-center gap-4 mt-6 opacity-40 grayscale hover:grayscale-0 transition duration-500">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg"
            class="h-5" />
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg"
            class="h-5" />
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg"
            class="h-5" />
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Google_Pay_Logo.svg"
            class="h-5" />
        </div>
      </form>
    </div>

    {{-- <div class="flex items-center gap-4 mb-6">
              <div class="h-px bg-stone-300 flex-1"></div>
              <span
                class="text-stone-400 text-[10px] font-bold uppercase tracking-widest"
                >Or Pay via Direct Transfer</span
              >
              <div class="h-px bg-stone-300 flex-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div
                class="bg-white p-6 rounded-xl border border-stone-200 shadow-sm hover:shadow-md transition flex flex-col items-center text-center"
              >
                <div class="mb-4">
                  <h4
                    class="font-bold text-stone-800 text-sm uppercase tracking-wide mb-3"
                  >
                    <i class="fas fa-qrcode text-green-600 mr-2"></i> UPI
                    Payment
                  </h4>
                  <div
                    class="bg-white p-2 border border-stone-200 rounded-lg inline-block"
                  >
                    <img
                      src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=upi://pay?pa=birnagar@upi&pn%20Birnagar&mc=0000&tid=123456&tr=123456&tn=Donation%20for%20Temple"
                      alt="UPI QR"
                      class="w-32 h-32"
                    />
                  </div>
                </div>

                <div
                  class="bg-stone-50 rounded border border-stone-100 p-2 w-full flex justify-between items-center cursor-pointer hover:bg-stone-100 transition group"
                  @click="copyToClipboard('birnagar@upi')"
                >
                  <span
                    class="font-mono text-xs font-bold text-stone-700 mx-auto"
                    >birnagar@upi</span
                  >
                  <i
                    class="far fa-copy text-stone-400 group-hover:text-green-600"
                  ></i>
                </div>
                <p class="text-[10px] text-stone-400 mt-2">
                  Scan with GPay, PhonePe, Paytm
                </p>
              </div>

              <div
                class="bg-white p-6 rounded-xl border border-stone-200 shadow-sm hover:shadow-md transition"
              >
                <h4
                  class="font-bold text-stone-800 text-center text-sm uppercase tracking-wide mb-4 border-b border-stone-100 pb-2"
                >
                  <i class="fas fa-university text-blue-600 mr-2"></i> Bank
                  Transfer
                </h4>

                <div class="space-y-3 mt-10 text-xs">
                  <div
                    class="flex justify-between items-center group cursor-pointer"
                    @click="copyToClipboard('Birnagar Kirtan Trust')"
                  >
                    <span class="text-stone-500 font-bold uppercase"
                      >Acc Name</span
                    >
                    <div class="flex items-center gap-2">
                      <span
                        class="font-bold text-stone-800 text-right truncate w-32"
                        >Birnagar Kirtan Trust</span
                      >
                      <i
                        class="far fa-copy text-stone-300 group-hover:text-blue-600"
                      ></i>
                    </div>
                  </div>

                  <div
                    class="flex justify-between items-center group cursor-pointer"
                    @click="copyToClipboard('123456789012')"
                  >
                    <span class="text-stone-500 font-bold uppercase"
                      >Acc No</span
                    >
                    <div class="flex items-center gap-2">
                      <span
                        class="font-mono font-bold text-stone-800 bg-stone-50 px-2 py-0.5 rounded"
                        >123456789012</span
                      >
                      <i
                        class="far fa-copy text-stone-300 group-hover:text-blue-600"
                      ></i>
                    </div>
                  </div>

                  <div
                    class="flex justify-between items-center group cursor-pointer"
                    @click="copyToClipboard('SBIN0001234')"
                  >
                    <span class="text-stone-500 font-bold uppercase"
                      >IFSC Code</span
                    >
                    <div class="flex items-center gap-2">
                      <span
                        class="font-mono font-bold text-stone-800 bg-stone-50 px-2 py-0.5 rounded"
                        >SBIN0001234</span
                      >
                      <i
                        class="far fa-copy text-stone-300 group-hover:text-blue-600"
                      ></i>
                    </div>
                  </div>

                  <div class="flex justify-between items-start">
                    <span class="text-stone-500 font-bold uppercase mt-1"
                      >Bank</span
                    >
                    <span class="font-bold text-stone-800 text-right"
                      >State Bank of India,<br />Birnagar Branch, Nadia</span
                    >
                  </div>
                </div>
              </div>
            </div> --}}
  </div>
</div>

@endsection