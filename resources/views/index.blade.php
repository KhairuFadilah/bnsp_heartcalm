@extends('layouts.app')
@section('content')

<!-- Hero Section -->
<section id="hero" class="relative overflow-hidden min-h-[550px] flex items-center bg-blue-200">
    <img src="{{ asset('images/hero-bg.svg') }}" alt=""
        class="absolute inset-0 w-full h-full object-cover z-0">
    <div class="page-container relative z-10 container mx-auto px-6 grid md:grid-cols-2 gap-8 items-center">
        <div class="py-16">
            <p class="italic font-medium mb-4">10% Panthenol Barrier Repair Water Gel Moisturizer</p>
            <h1 class="text-4xl md:text-5xl font-light leading-tight mb-4">
                Ringan di wajah, lembap tanpa berminyak
            </h1>
            <p class="text-gray-700 mb-8">
                Gel ringan dengan cooling sensation, membantu menenangkan jerawat dan mengontrol minyak
            </p>
            <div class="flex items-center gap-4 mb-8">
                <img src="{{ asset('images/hero-icon1.svg') }}" alt="Logo1" class="h-20 w-auto">
                <img src="{{ asset('images/hero-icon2.svg') }}" alt="Logo2" class="h-20 w-auto">
                <img src="{{ asset('images/hero-icon3.svg') }}" alt="Logo2" class="h-20 w-auto">
            </div>
            <div class="flex gap-3">
                <a href="{{url('https://shopee.co.id/HEARTCALM_id')}}" target="_blank" class="hero-button-buy">Beli Sekarang</a>
                <a href="{{url('https://wa.me/620000000000')}}" target="_blank" class="hero-button-consultation">Konsultasi Disini</a>
            </div>
        </div>
        <div class="flex justify-center md:justify-end -mt-12 md:mt-0">
            <img src="{{ asset('images/hero-product.svg') }}" alt="Water Gel Moisturizer" class="w-64 md:w-[420px] drop-shadow-2xl md:translate-y-10">
        </div>
    </div>
</section>
<!-- Ingredient Section -->
<section id="bahan" class="py-7.5 scroll-mt-20 bg-gray-700">
    <div class="page-container">
        <div class="text-center">
            <p class="font-montserrat text-md text-white mb-2">Barrier Repairwater Gel</p>
            <p class="font-montserrat text-4xl text-white font-bold mb-2">Bahan apa yang ada di dalam moisturizer ini?</p>
        </div>
    </div>
</section>
<section class="py-7.5 scroll-mt-20 bg-blue-200">
    <div class="page-container">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="card-ingredient">
                <div class="card-ingredient-header">HERO Ingredient</div>
                <div class="card-ingredient-body">
                    <h3 class="text-2xl text-cyan-500">5% Panthenol</h3>
                    <p class="text-gray-800">Menenangkan kulit berjerawat Merawat kulit kemerahan dan sensitif</p>
                </div>
            </div>
            <div class="card-ingredient">
                <div class="card-ingredient-header">HERO Ingredient</div>
                <div class="card-ingredient-body">
                    <h3 class="text-2xl text-cyan-500">5X Ceramide</h3>
                    <p class="text-gray-800">Merawat skin barrier</p>
                </div>
            </div>
            <div class="card-ingredient">
                <div class="card-ingredient-header">HERO Ingredient</div>
                <div class="card-ingredient-body">
                    <h3 class="text-2xl text-cyan-500">Compound Ection</h3>
                    <p class="text-gray-800">Merawat dan menghidrasi kulit</p>
                </div>
            </div>
            <div class="card-ingredient">
                <div class="card-ingredient-header">HERO Ingredient</div>
                <div class="card-ingredient-body">
                    <h3 class="text-2xl text-cyan-500">Pure Centella</h3>
                    <p class="text-gray-800">Meredakan dan menenangkan jerawat meradang serta meningkatkan hidrasi pada kulit</p>
                </div>
            </div>
        </div>
        <div id="bahan-lainnya" class="mt-8 scroll-mt-20" x-data="accordion">
            <button @click="toggle" class="accordion-btn" :class="open ? 'rounded-t-md' : 'rounded-md'">
                Bahan Lainnya
                <svg class="w-4 h-4 transition-transform duration-300" :class="open && 'rotate-180'" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" x-collapse x-cloak class="bg-white rounded-b-md">
                <div class="p-4">Water, Panthenol, Centella Asiatica Extract, Calendula Officinalis Extract, Avena Sativa (Oat) Kernel Extract, Phaeodactylum Tricornutum Extract, Chlorella Vulgaris Extract, Pentylene Glycol, Acrylates/​C10-30 Alkyl Acrylate Crosspolymer, Ceramide NP, Ceramide AS, Ceramide NS, Ceramide NG, Ceramide AP, Ceramide EOP, Butylene Glycol, Glycerophosphoinositol Choline, Glycerin, Ectoin, Tocopherol, Pentasodium Pentetate, Erythritol, Propanediol, Phytic Acid, Silver Oxide, Diethoxyethyl Succinate</div>
            </div>
        </div>
    </div>
</section>
<!-- Manfaat Section -->
<section id="manfaat" class="bg-cover bg-center bg-[url(/public/images/bg-manfaat.svg)]">
    <div class="grid grid-cols-1 md:grid-cols-5">
        <div class="md:col-span-2 flex items-center justify-center px-8 py-10 bg-cyan-500/10">
            <h2 class="font-montserrat text-white text-3xl lg:text-4xl font-semibold uppercase text-center leading-tight">
                Kenapa kulitmu akan menyukainya?
            </h2>
        </div>
        <div class="md:col-span-3 flex items-center bg-white/60 px-8 lg:px-14 py-10">
            <ul class="space-y-5">
                <li class="flex items-center gap-3 font-montserrat text-xl lg:text-2xl text-gray-800">
                    <svg class="w-7 h-7 shrink-0" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="12" fill="#00c800" />
                        <path d="M7 12.5l3.2 3.2L17 9" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Melembabkan dengan maksimal
                </li>
                <li class="flex items-center gap-3 font-montserrat text-xl lg:text-2xl text-gray-800">
                    <svg class="w-7 h-7 shrink-0" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="12" fill="#00c800" />
                        <path d="M7 12.5l3.2 3.2L17 9" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Merawat jerawat
                </li>
                <li class="flex items-center gap-3 font-montserrat text-xl lg:text-2xl text-gray-800">
                    <svg class="w-7 h-7 shrink-0" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="12" fill="#00c800" />
                        <path d="M7 12.5l3.2 3.2L17 9" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Merawat kemerahan
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Permasalahan Section -->
<section id="permasalahan" class="py-7.5 scroll-mt-20 relative grid h-screen grid-cols-2 grid-rows-2 gap-4 bg-white">
    <img src="/images/permasalahan-gatal.svg" class="h-full w-full object-cover" alt="">
    <img src="/images/permasalahan-jerawat.svg" class="h-full w-full object-cover" alt="">
    <img src="/images/permasalahan-kemerahan.svg" class="h-full w-full object-cover" alt="">
    <img src="/images/permasalahan-sensitif.svg" class="h-full w-full object-cover" alt="">
    <div class="absolute left-1/2 top-1/2 w-[72%] -translate-x-1/2 -translate-y-1/2 bg-white p-5">
        <div id="carousel" class="relative aspect-[16/9] overflow-hidden">
            <div id="track" class="flex h-full transition-transform duration-500 ease-in-out">
                <div class="relative h-full w-full shrink-0">
                    <img src="/images/permasalahan-jerawat.svg" class="h-full w-full object-cover" alt="">
                    <h3 class="absolute inset-0 grid place-items-center text-3xl font-semibold text-white">Jerawat</h3>
                </div>
                <div class="relative h-full w-full shrink-0">
                    <img src="/images/permasalahan-kemerahan.svg" class="h-full w-full object-cover" alt="">
                    <h3 class="absolute inset-0 grid place-items-center text-3xl font-semibold text-white">Kemerahan</h3>
                </div>
                <div class="relative h-full w-full shrink-0">
                    <img src="/images/permasalahan-gatal.svg" class="h-full w-full object-cover" alt="">
                    <h3 class="absolute inset-0 grid place-items-center text-3xl font-semibold text-white">Gatal</h3>
                </div>
                <div class="relative h-full w-full shrink-0">
                    <img src="/images/permasalahan-sensitif.svg" class="h-full w-full object-cover" alt="">
                    <h3 class="absolute inset-0 grid place-items-center text-3xl font-semibold text-white">Sensitif</h3>
                </div>
            </div>
            <button id="prev" class="absolute left-3 top-1/2 -translate-y-1/2 text-3xl text-white">‹</button>
            <button id="next" class="absolute right-3 top-1/2 -translate-y-1/2 text-3xl text-white">›</button>
            <div id="dots" class="absolute bottom-4 left-1/2 flex -translate-x-1/2 gap-2"></div>
        </div>
    </div>
</section>
<!-- Hasil Penggunaan Section -->
<section id="hasil" class="page-container grid grid-cols-1 md:grid-cols-2 py-20 bg-sky-50 scroll-mt-20">
    <div class="bg-[url('/public/images/bg-hasil-penggunaan.svg')] bg-cover bg-center px-5 py-16 md:px-4 md:py-20">
        <p class="text-2xl leading-snug text-gray-800 md:text-3xl">
            Berdasarkan hasil self-assessment dari 30 responden usia 18 - 30 tahun
            setelah 1 minggu pemakaian.*
        </p>
        <p class="mt-3 italic text-gray-700">
            *fitur ini hanya simulasi untuk keperluan tugas dan tidak mewakili
            asesmen kulit yang sebenarnya
        </p>

        <div class="mt-10 space-y-8">
            <div>
                <div class="text-6xl text-orange-500">92%</div>
                <div class="mt-4 text-xl font-medium text-cyan-500">Jerawat tampak berkurang</div>
            </div>
            <div>
                <div class="text-6xl text-orange-500">95%</div>
                <div class="mt-4 text-xl font-medium text-cyan-500">Kemerahan berkurang</div>
            </div>
            <div>
                <div class="text-6xl text-orange-500">92%</div>
                <div class="mt-4 text-xl font-medium text-cyan-500">Kadar kelembapan lebih tinggi</div>
            </div>
        </div>
    </div>
    <div class="hidden md:block">
        <img src="images/bg-hasil-penggunaan-2.svg" alt="" class="h-full w-full object-cover">
    </div>
</section>
<!-- Testimoni Section -->
<section id="testimoni" class="bg-linear-to-br from-gray-100 to-white px-4 py-16 y-7.5 scroll-mt-20">
    <h2 class="text-center text-3xl font-medium">Apa Kata Mereka?</h2>
    <div class="mx-auto mt-12 grid max-w-7xl grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <article class="overflow-hidden rounded-lg border border-gray-200 bg-white text-center">
            <img src="/images/profile-picture/arata-naoko.png" alt="Arata Naoko" class="aspect-[4/3] w-full object-cover">
            <div class="p-5">
                <h3 class="text-xl text-cyan-600">Arata Naoko</h3>
                <div class="my-2 text-xl tracking-wide text-yellow-400" aria-label="Rating 5 dari 5">★★★★★</div>
                <p class="text-gray-800">
                    Teksturnya ringan dan cepat menyerap. Setelah sekitar seminggu pemakaian,
                    kulit terasa lebih lembap dan kelihatan lebih tenang.
                </p>
            </div>
        </article>

        <article class="overflow-hidden rounded-lg border border-gray-200 bg-white text-center">
            <img src="/images/profile-picture/punipun.png" alt="Mia" class="aspect-[4/3] w-full object-cover">
            <div class="p-5">
                <h3 class="text-xl text-cyan-600">Punipun</h3>
                <div class="my-2 text-xl tracking-wide text-yellow-400">★★★★★</div>
                <p class="text-gray-800">Biasanya pakai moisturizer takut lengket, tapi yang ini nyaman banget. Kemerahan di area pipi juga tampak berkurang.</p>
            </div>
        </article>

        <article class="overflow-hidden rounded-lg border border-gray-200 bg-white text-center">
            <img src="/images/profile-picture/bunda-harum.png" alt="Bunda Harum" class="aspect-[4/3] w-full object-cover">
            <div class="p-5">
                <h3 class="text-xl text-cyan-600">Bunda Harum</h3>
                <div class="my-2 text-xl tracking-wide text-yellow-400" aria-label="Rating 5 dari 5">★★★★★</div>
                <p class="text-gray-800">
                    Teksturnya ringan dan cepat menyerap. Setelah sekitar seminggu pemakaian,
                    kulit terasa lebih lembap dan kelihatan lebih tenang.
                </p>
            </div>
        </article>

        <article class="overflow-hidden rounded-lg border border-gray-200 bg-white text-center">
            <img src="/images/profile-picture/jokowi.png" alt="Jokowi" class="aspect-[4/3] w-full object-cover">
            <div class="p-5">
                <h3 class="text-xl text-cyan-600">Jokowi</h3>
                <div class="my-2 text-xl tracking-wide text-yellow-400">★★★★★</div>
                <p class="text-gray-800">SAYA AKAN LAWAN!!!</p>
            </div>
        </article>
    </div>
</section>

@endsection