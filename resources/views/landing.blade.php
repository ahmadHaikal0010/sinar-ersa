<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kuliner Mami — Tasty Landing</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --accent:#FF6B35;
      --accent-2:#F9A826;
      --muted:#F7F5F3;
      --text:#1f2937;
    }
    body{ font-family: 'Poppins', sans-serif; background:var(--muted); color:var(--text); }
    .btn-accent{ background:linear-gradient(90deg,var(--accent),var(--accent-2)); color:white; }
    .card-shadow{ box-shadow: 0 8px 30px rgba(15,23,42,0.06); }
  </style>
</head>
<body class="antialiased">

  <!-- NAVBAR -->
  <header class="fixed w-full z-40 bg-white/80 backdrop-blur-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center gap-4">
          <a href="#" class="text-2xl font-bold text-amber-600">Kuliner <span class="text-red-600">Mami</span></a>
        </div>

        <!-- desktop menu -->
        <nav class="hidden md:flex items-center gap-6">
          <a href="#home" class="text-sm font-medium hover:text-amber-600">Home</a>
          <div class="relative group">
            <button id="menuBtn" class="flex items-center gap-2 text-sm font-medium hover:text-amber-600 focus:outline-none">
              Menu
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <!-- dropdown -->
            <div id="menuDropdown" class="absolute left-0 mt-3 w-44 bg-white rounded-lg border border-gray-100 shadow-lg py-1 opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all">
              <a href="#kuliner" class="block px-4 py-2 text-sm hover:bg-gray-50">🍽️ Kuliner</a>
              <a href="#oleholeh" class="block px-4 py-2 text-sm hover:bg-gray-50">🎁 Oleh-Oleh</a>
            </div>
          </div>

          <a href="#popular" class="text-sm font-medium hover:text-amber-600">Popular</a>
          <a href="#news" class="text-sm font-medium hover:text-amber-600">News</a>
        </nav>

        <div class="flex items-center gap-3">
          <a href="#order" class="hidden md:inline-block btn-accent px-4 py-2 rounded-full text-sm font-semibold shadow">Order Online</a>

          <!-- mobile hamburger -->
          <button id="hamburger" class="md:hidden p-2 rounded-md border border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path d="M3 5h14M3 10h14M3 15h14" /></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- mobile panel -->
    <div id="mobileMenu" class="md:hidden bg-white border-t border-gray-100 hidden">
      <div class="px-6 py-4 space-y-2">
        <a href="#home" class="block py-2">Home</a>
        <div class="py-2">
          <div class="font-medium">Menu</div>
          <div class="mt-2 flex flex-col gap-1">
            <a href="#kuliner" class="pl-2 py-1">🍽️ Kuliner</a>
            <a href="#oleholeh" class="pl-2 py-1">🎁 Oleh-Oleh</a>
          </div>
        </div>
        <a href="#popular" class="block py-2">Popular</a>
        <a href="#news" class="block py-2">News</a>
        <a href="#order" class="block py-2 btn-accent text-white text-center rounded-full">Order Online</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <main class="pt-20">
    <section id="home" class="max-w-7xl mx-auto px-6 py-12 md:py-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Left Column -->
        <div class="order-2 lg:order-1">
          <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4">Welcome To Dapur <span class="text-red-600">Mami</span> Ersa</h1>
          <p class="text-gray-600 mb-6 text-lg">Nikmati hidangan lezat yang dibuat dari bahan segar. Order online atau reservasi meja — cepat, mudah, dan nikmat.</p>
          <div class="flex flex-wrap gap-3 mb-10">
            <a href="#order" class="btn-accent px-6 py-3 rounded-full font-semibold shadow-lg">Order Now</a>
            <a href="#book" class="px-6 py-3 rounded-full border-2 border-gray-300 text-sm font-semibold hover:border-amber-600">Book a Table</a>
          </div>

          <!-- categories -->
          <div class="grid grid-cols-3 md:grid-cols-6 gap-4 text-center text-xs">
            <div class="flex flex-col items-center gap-2">
              <div class="bg-white rounded-full p-4 card-shadow w-16 h-16 flex items-center justify-center">
                <span class="text-2xl">🍔</span>
              </div>
              <div class="font-medium">Burger</div>
            </div>
            <div class="flex flex-col items-center gap-2">
              <div class="bg-white rounded-full p-4 card-shadow w-16 h-16 flex items-center justify-center">
                <span class="text-2xl">🍟</span>
              </div>
              <div class="font-medium">French Fry</div>
            </div>
            <div class="flex flex-col items-center gap-2">
              <div class="bg-white rounded-full p-4 card-shadow w-16 h-16 flex items-center justify-center">
                <span class="text-2xl">🍝</span>
              </div>
              <div class="font-medium">Pasta</div>
            </div>
            <div class="flex flex-col items-center gap-2">
              <div class="bg-white rounded-full p-4 card-shadow w-16 h-16 flex items-center justify-center">
                <span class="text-2xl">🥪</span>
              </div>
              <div class="font-medium">Sandwich</div>
            </div>
            <div class="flex flex-col items-center gap-2">
              <div class="bg-white rounded-full p-4 card-shadow w-16 h-16 flex items-center justify-center">
                <span class="text-2xl">🥤</span>
              </div>
              <div class="font-medium">Drinks</div>
            </div>
            <div class="flex flex-col items-center gap-2">
              <div class="bg-white rounded-full p-4 card-shadow w-16 h-16 flex items-center justify-center">
                <span class="text-2xl">🍱</span>
              </div>
              <div class="font-medium">Combo</div>
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="order-1 lg:order-2">
          <div class="bg-white rounded-3xl card-shadow overflow-hidden max-w-lg mx-auto">
            <div class="relative">
              <img src="/image/pisang.jpg" alt="hero food" class="w-full h-80 object-cover">
              <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold">-20% OFF</div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold mb-2">Pasta • Burger • Combo</h3>
              <p class="text-sm text-gray-500 mb-4">Dapatkan diskon 20% untuk pesanan pertama.</p>
              <div class="flex gap-3">
                <a href="#menu" class="flex-1 text-center py-3 rounded-full border-2 border-gray-200 font-semibold hover:border-amber-600">View Menu</a>
                <a href="#order" class="flex-1 btn-accent px-3 py-3 rounded-full text-white text-center font-semibold">Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROMO CARDS -->
    <section class="max-w-7xl mx-auto px-6 py-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 card-shadow flex items-center gap-4 hover:shadow-xl transition-shadow">
          <div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0">
            <img src="/image/pisang.jpg" alt="pasta" class="w-full h-full object-cover">
          </div>
          <div>
            <div class="text-xs text-amber-600 uppercase font-bold mb-1">Pasta</div>
            <div class="font-bold text-lg mb-1">Get a 20% Discount</div>
            <div class="text-xl text-red-600 font-bold">Rp 10.900</div>
          </div>
        </div>

        <div class="bg-white rounded-2xl p-6 card-shadow flex items-center gap-4 hover:shadow-xl transition-shadow">
          <div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0">
            <img src="/image/singkong.webp" alt="burger" class="w-full h-full object-cover">
          </div>
          <div>
            <div class="text-xs text-amber-600 uppercase font-bold mb-1">Burger</div>
            <div class="font-bold text-lg mb-1">Get a 20% Discount</div>
            <div class="text-xl text-red-600 font-bold">Rp 12.900</div>
          </div>
        </div>

        <div class="bg-white rounded-2xl p-6 card-shadow flex items-center gap-4 hover:shadow-xl transition-shadow">
          <div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0">
            <img src="/image/pisang.jpg" alt="combo" class="w-full h-full object-cover">
          </div>
          <div>
            <div class="text-xs text-amber-600 uppercase font-bold mb-1">Combo</div>
            <div class="font-bold text-lg mb-1">Get a 20% Discount</div>
            <div class="text-xl text-red-600 font-bold">Rp 19.900</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="bg-white py-20">
      <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="order-2 lg:order-1">
            <div class="inline-block bg-amber-100 text-amber-700 px-4 py-1 rounded-full text-xs font-bold mb-4">ABOUT US</div>
            <h2 class="text-4xl md:text-5xl font-bold mb-6">About <span class="text-red-600">Tasty Foods</span></h2>
            <p class="text-gray-600 mb-6 text-lg leading-relaxed">Kami menyajikan makanan lezat dan sehat, dibuat dari bahan terbaik. Dimasak dengan resep turun-temurun dan disajikan dengan penuh cinta.</p>
            <ul class="space-y-4 mb-8">
              <li class="flex items-center gap-3">
                <span class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">✓</span>
                <span class="font-semibold">Delicious & Healthy Foods</span>
              </li>
              <li class="flex items-center gap-3">
                <span class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">✓</span>
                <span class="font-semibold">Best Price & Offers</span>
              </li>
              <li class="flex items-center gap-3">
                <span class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold">✓</span>
                <span class="font-semibold">Made By Fresh Ingredients</span>
              </li>
            </ul>
            <div class="flex gap-4">
              <a href="#order" class="btn-accent px-6 py-3 rounded-full text-white font-semibold shadow-lg">Order Now</a>
              <a href="#about" class="px-6 py-3 rounded-full border-2 border-gray-300 font-semibold hover:border-amber-600">Read More</a>
            </div>
          </div>
          <div class="order-1 lg:order-2">
            <div class="relative">
              <img src="/image/kaca.jpg" alt="about" class="rounded-3xl w-full object-cover card-shadow h-96">
              <div class="absolute -bottom-6 -left-6 bg-amber-500 text-white rounded-2xl p-6 card-shadow">
                <div class="text-4xl font-black">10+</div>
                <div class="text-sm font-semibold">Years Experience</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- POPULAR PRODUCTS -->
    <section id="popular" class="max-w-7xl mx-auto px-6 py-20">
      <div class="text-center mb-12">
        <div class="inline-block bg-red-100 text-red-600 px-4 py-1 rounded-full text-xs font-bold mb-4">POPULAR MENU</div>
        <h3 class="text-4xl md:text-5xl font-bold mb-4">Our Popular <span class="text-red-600">Tasty Foods</span></h3>
        <p class="text-gray-600">Pilihan favorit pelanggan kami</p>
      </div>

      <div class="flex justify-center gap-3 mb-12 flex-wrap">
        <button class="px-5 py-2 rounded-full border-2 border-red-500 bg-red-500 text-white font-semibold">All Food</button>
        <button class="px-5 py-2 rounded-full border-2 border-gray-200 bg-white font-semibold hover:border-amber-600">Burger</button>
        <button class="px-5 py-2 rounded-full border-2 border-gray-200 bg-white font-semibold hover:border-amber-600">Pizza</button>
        <button class="px-5 py-2 rounded-full border-2 border-gray-200 bg-white font-semibold hover:border-amber-600">Sandwich</button>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- product card -->
        <div class="bg-white rounded-3xl overflow-hidden card-shadow hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="relative">
            <div class="h-48 overflow-hidden">
              <img src="/image/pisang.jpg" class="w-full h-full object-cover" alt="">
            </div>
            <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">-20%</div>
          </div>
          <div class="p-5">
            <div class="flex items-center gap-1 mb-2">
              <span class="text-yellow-400 text-sm">⭐⭐⭐⭐⭐</span>
            </div>
            <h4 class="font-bold text-lg mb-2">Spicy Burger</h4>
            <p class="text-xs text-gray-500 mb-4">Get a 20% Discount On First Order</p>
            <div class="flex items-center justify-between">
              <div class="text-red-600 font-bold text-xl">Rp 10.900</div>
              <button class="btn-accent px-4 py-2 rounded-full text-sm font-semibold">Add Cart</button>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-3xl overflow-hidden card-shadow hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="relative">
            <div class="h-48 overflow-hidden">
              <img src="/image/singkong.webp" class="w-full h-full object-cover" alt="">
            </div>
            <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">-20%</div>
          </div>
          <div class="p-5">
            <div class="flex items-center gap-1 mb-2">
              <span class="text-yellow-400 text-sm">⭐⭐⭐⭐⭐</span>
            </div>
            <h4 class="font-bold text-lg mb-2">French Fry</h4>
            <p class="text-xs text-gray-500 mb-4">Get a 20% Discount On First Order</p>
            <div class="flex items-center justify-between">
              <div class="text-red-600 font-bold text-xl">Rp 4.900</div>
              <button class="btn-accent px-4 py-2 rounded-full text-sm font-semibold">Add Cart</button>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-3xl overflow-hidden card-shadow hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="relative">
            <div class="h-48 overflow-hidden">
              <img src="/image/kaca.jpg" class="w-full h-full object-cover" alt="">
            </div>
            <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">-20%</div>
          </div>
          <div class="p-5">
            <div class="flex items-center gap-1 mb-2">
              <span class="text-yellow-400 text-sm">⭐⭐⭐⭐⭐</span>
            </div>
            <h4 class="font-bold text-lg mb-2">Pasta</h4>
            <p class="text-xs text-gray-500 mb-4">Get a 20% Discount On First Order</p>
            <div class="flex items-center justify-between">
              <div class="text-red-600 font-bold text-xl">Rp 9.900</div>
              <button class="btn-accent px-4 py-2 rounded-full text-sm font-semibold">Add Cart</button>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-3xl overflow-hidden card-shadow hover:shadow-2xl transition-all hover:-translate-y-2">
          <div class="relative">
            <div class="h-48 overflow-hidden">
              <img src="/image/pisang.jpg" class="w-full h-full object-cover" alt="">
            </div>
            <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">-20%</div>
          </div>
          <div class="p-5">
            <div class="flex items-center gap-1 mb-2">
              <span class="text-yellow-400 text-sm">⭐⭐⭐⭐⭐</span>
            </div>
            <h4 class="font-bold text-lg mb-2">Sandwich</h4>
            <p class="text-xs text-gray-500 mb-4">Get a 20% Discount On First Order</p>
            <div class="flex items-center justify-between">
              <div class="text-red-600 font-bold text-xl">Rp 8.500</div>
              <button class="btn-accent px-4 py-2 rounded-full text-sm font-semibold">Add Cart</button>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-12 text-center">
        <a href="#menu" class="inline-block px-8 py-3 rounded-full border-2 border-gray-300 bg-white font-semibold hover:border-amber-600 hover:bg-amber-50">View All Products</a>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="bg-gradient-to-b from-amber-50 to-white py-20">
      <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
          <div class="inline-block bg-green-100 text-green-600 px-4 py-1 rounded-full text-xs font-bold mb-4">TESTIMONIALS</div>
          <h3 class="text-4xl md:text-5xl font-bold">Our Customer <span class="text-red-600">Feedbacks</span></h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-3xl card-shadow border-t-4 border-amber-500">
            <div class="text-yellow-400 text-2xl mb-4">⭐⭐⭐⭐⭐</div>
            <p class="text-gray-600 mb-6 leading-relaxed">"Tasty and fast delivery. Portions are generous and flavor is on point."</p>
            <div class="flex items-center gap-4">
              <img src="/image/kaca.jpg" class="w-12 h-12 rounded-full object-cover" alt="">
              <div>
                <div class="font-bold">Paul K. Selden</div>
                <div class="text-xs text-gray-500">Foodie</div>
              </div>
            </div>
          </div>
          <div class="bg-white p-8 rounded-3xl card-shadow border-t-4 border-red-500">
            <div class="text-yellow-400 text-2xl mb-4">⭐⭐⭐⭐⭐</div>
            <p class="text-gray-600 mb-6 leading-relaxed">"Great taste, quick service. Highly recommended!"</p>
            <div class="flex items-center gap-4">
              <img src="/image/pisang.jpg" class="w-12 h-12 rounded-full object-cover" alt="">
              <div>
                <div class="font-bold">Anna W.</div>
                <div class="text-xs text-gray-500">Customer</div>
              </div>
            </div>
          </div>
          <div class="bg-white p-8 rounded-3xl card-shadow border-t-4 border-green-500">
            <div class="text-yellow-400 text-2xl mb-4">⭐⭐⭐⭐⭐</div>
            <p class="text-gray-600 mb-6 leading-relaxed">"Always fresh and delicious. Perfect for family dinners."</p>
            <div class="flex items-center gap-4">
              <img src="/image/kaca.jpg" class="w-12 h-12 rounded-full object-cover" alt="">
              <div>
                <div class="font-bold">Rudi S.</div>
                <div class="text-xs text-gray-500">Regular</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- LATEST NEWS -->
    <section id="news" class="max-w-7xl mx-auto px-6 py-20">
      <div class="text-center mb-12">
        <div class="inline-block bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-xs font-bold mb-4">LATEST NEWS</div>
        <h3 class="text-4xl md:text-5xl font-bold">Our Latest Foods <span class="text-red-600">News</span></h3>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <article class="bg-white rounded-3xl overflow-hidden card-shadow hover:shadow-2xl transition-all">
          <div class="h-56 overflow-hidden">
            <img src="/image/singkong.webp" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" alt="">
          </div>
          <div class="p-6">
            <div class="text-xs text-amber-600 font-bold mb-2">FOOD TIPS • 2 DAYS AGO</div>
            <h4 class="font-bold text-lg mb-3">Lorem condimentum id libero orci.</h4>
            <p class="text-sm text-gray-500 mb-4">Aliquam euismod pellentesque orci, nec tempor.</p>
            <a href="#" class="text-sm text-red-600 font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">
              Read More 
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </article>

        <article class="bg-white rounded-3xl overflow-hidden card-shadow hover:shadow-2xl transition-all">
          <div class="h-56 overflow-hidden">
            <img src="/image/kaca.jpg" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" alt="">
          </div>
          <div class="p-6">
            <div class="text-xs text-amber-600 font-bold mb-2">RECIPE • 3 DAYS AGO</div>
            <h4 class="font-bold text-lg mb-3">Lorem condimentum id libero orci.</h4>
            <p class="text-sm text-gray-500 mb-4">Aliquam euismod pellentesque orci, nec tempor.</p>
            <a href="#" class="text-sm text-red-600 font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">
              Read More 
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </article>

        <article class="bg-white rounded-3xl overflow-hidden card-shadow hover:shadow-2xl transition-all">
          <div class="h-56 overflow-hidden">
            <img src="/image/pisang.jpg" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" alt="">
          </div>
          <div class="p-6">
            <div class="text-xs text-amber-600 font-bold mb-2">PROMO • 5 DAYS AGO</div>
            <h4 class="font-bold text-lg mb-3">Lorem condimentum id libero orci.</h4>
            <p class="text-sm text-gray-500 mb-4">Aliquam euismod pellentesque orci, nec tempor.</p>
            <a href="#" class="text-sm text-red-600 font-semibold inline-flex items-center gap-2 hover:gap-3 transition-all">
              Read More 
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </article>
      </div>
    </section>

    <!-- GALLERY -->
    {{-- <section class="bg-white py-20">
      <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
          <div class="inline-block bg-purple-100 text-purple-600 px-4 py-1 rounded-full text-xs font-bold mb-4">GALLERY</div>
          <h3 class="text-4xl md:text-5xl font-bold">Foods <span class="text-red-600">Gallery</span></h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
          <img src="/image/pisang.jpg" class="w-full h-32 object-cover rounded-2xl card-shadow hover:scale-105 transition-transform cursor-pointer" alt="">
          <img src="/image/kaca.jpg" class="w-full h-32 object-cover rounded-2xl card-shadow hover:scale-105 transition-transform cursor-pointer" alt="">
          <img src="/image/pisang.jpg" class="w-full h-32 object-cover rounded-2xl card-shadow hover:scale-105 transition-transform cursor-pointer" alt="">
          <img src="/image/kaca.jpg" class="w-full h-32 object-cover rounded-2xl card-shadow hover:scale-105 transition-transform cursor-pointer" alt="">
          <img src="/image/pisang.jpg" class="w-full h-32 object-cover rounded-2xl card-shadow hover:scale-105 transition-transform cursor-pointer" alt="">
          <img src="/image/kaca.jpg" class="w-full h-32 object-cover rounded-2xl card-shadow hover:scale-105 transition-transform cursor-pointer" alt="">
        </div>
      </div>
    </section> --}}

    <!-- NEWSLETTER & FOOTER -->
    <section class="max-w-7xl mx-auto px-6 py-12">
      <div class="bg-gradient-to-r from-amber-500 to-red-500 rounded-3xl p-8 md:p-12 card-shadow">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
          <div class="text-white">
            <h4 class="text-3xl font-bold mb-2">Subscription News</h4>
            <p class="text-amber-100">Subscribe to our newsletter for latest updates & offers.</p>
          </div>
          <form class="flex w-full md:w-auto gap-3">
            <input type="email" placeholder="Enter Email Address" class="px-6 py-3 rounded-full border-0 w-full md:w-80 focus:ring-2 focus:ring-white" />
            <button class="bg-white text-amber-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-all">Subscribe</button>
          </form>
        </div>
      </div>
    </section>

    <footer class="bg-gray-900 text-gray-200">
      <div class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-4 gap-12">
        <div class="md:col-span-2">
          <div class="text-3xl font-bold text-amber-400 mb-4">Kuliner <span class="text-red-500">Mami</span></div>
          <p class="text-gray-300 mb-6 leading-relaxed">Rasakan cita rasa Nusantara dengan pelayanan terbaik. Kami menyajikan hidangan lezat yang dibuat dari bahan segar dan berkualitas.</p>
          <div class="flex gap-4">
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-amber-600 transition-colors">
              <span class="text-lg">📘</span>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-amber-600 transition-colors">
              <span class="text-lg">📷</span>
            </a>
            <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-amber-600 transition-colors">
              <span class="text-lg">🐦</span>
            </a>
          </div>
        </div>
        <div>
          <h5 class="font-bold text-lg mb-4 text-white">Quick Links</h5>
          <ul class="space-y-3">
            <li><a href="#home" class="hover:text-amber-400 transition-colors">Home</a></li>
            <li><a href="#about" class="hover:text-amber-400 transition-colors">About Us</a></li>
            <li><a href="#popular" class="hover:text-amber-400 transition-colors">Menu</a></li>
            <li><a href="#news" class="hover:text-amber-400 transition-colors">News</a></li>
          </ul>
        </div>
        <div>
          <h5 class="font-bold text-lg mb-4 text-white">Contact</h5>
          <ul class="space-y-3">
            <li class="flex items-start gap-2">
              <span>📞</span>
              <span>+62 812 3456 7890</span>
            </li>
            <li class="flex items-start gap-2">
              <span>📧</span>
              <span>info@kulinermami.com</span>
            </li>
            <li class="flex items-start gap-2">
              <span>📍</span>
              <span>Jl. Kuliner No. 123<br>Jakarta Selatan, Indonesia</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-6 text-center text-sm text-gray-500">
          © 2025 Kuliner Mami. All rights reserved.
        </div>
      </div>
    </footer>
  </main>

  <!-- Minimal JS for menu toggle -->
  <script>
    // mobile menu
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger?.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // dropdown (desktop)
    const menuBtn = document.getElementById('menuBtn');
    const menuDropdown = document.getElementById('menuDropdown');
    // show / hide on click (works for keyboard too)
    menuBtn?.addEventListener('click', (e) => {
      e.preventDefault();
      menuDropdown.classList.toggle('invisible');
      menuDropdown.classList.toggle('opacity-0');
      menuDropdown.classList.toggle('visible');
      menuDropdown.classList.toggle('opacity-100');
    });

    // close dropdown when clicking outside
    document.addEventListener('click', function(e){
      if(!menuBtn.contains(e.target) && !menuDropdown.contains(e.target)){
        if(!menuDropdown.classList.contains('invisible')){
          menuDropdown.classList.add('invisible','opacity-0');
          menuDropdown.classList.remove('visible','opacity-100');
        }
      }
    });
  </script>
</body>
</html>