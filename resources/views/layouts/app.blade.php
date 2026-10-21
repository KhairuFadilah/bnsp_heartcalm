<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title','HEARTCALM Acne Water Gel')</title>
</head>

<body class="min-h-screen flex flex-col">
    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-50 bg-white shadow">
        <div class="page-container">
            <div class="flex items-center justify-between">
                <!--Menu-->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#bahan" class="nav-link">Bahan</a>
                    <a href="#manfaat" class="nav-link">Manfaat</a>
                    <a href="#permasalahan" class="nav-link">Permasalahan</a>
                    <a href="#hasil" class="nav-link">Hasil Penggunaan</a>
                    <a href="#testimoni" class="nav-link">Testimoni</a>
                </div>


                <!-- logo -->
                <div class="flex">
                    <a href="/" class="flex items-center py-5">
                        <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="h-8">
                    </a>
                </div>

                <!--Mobile Button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button" aria-label="Menu">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="mobile-menu md:hidden grid grid-rows-[0fr] transition-[grid-template-rows] duration-300 ease-in-out">
            <div class="overflow-hidden">
                <a href="#bahan" class="nav-link-mobile">Bahan</a>
                <a href="#manfaat" class="nav-link-mobile">Manfaat</a>
                <a href="#permasalahan" class="nav-link-mobile">Permasalahan</a>
                <a href="#hasil" class="nav-link-mobile">Hasil Penggunaan</a>
                <a href="#testimoni" class="nav-link-mobile">Testimoni</a>
            </div>
        </div>
    </nav>
    <main class="flex-1">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="bg-black text-white py-10">
        <div class="page-container">
            <div class="grid grid-cols-12 gap-x-0.75 gap-y-10">

                <!-- Logo -->
                <div class="col-span-12">
                    <img src="{{ asset('images/logo.svg') }}" alt="Heartcalm" class="h-10 brightness-0 invert">
                </div>

                <!-- Contact Us -->
                <div class="col-span-12 md:col-span-4">
                    <h2 class="text-2xl font-bold">Contact Us</h2>
                    <ul class="mt-4 space-y-3">
                        <li><a href="{{url('https://wa.me/620000000000')}}" target="_blank" class="hover:text-gray-400 transition-all duration-300">WhatsApp</a></li>
                        <li><a href="{{url('mailto:cs@HEARTCALM.com')}}" class="hover:text-gray-400 transition-all duration-300">Email</a></li>
                    </ul>
                </div>

                <!-- Official Shop Link -->
                <div class="col-span-12 md:col-span-4">
                    <h2 class="text-2xl font-bold">Official Shop Link</h2>
                    <ul class="mt-4 space-y-3">
                        <li><a href="{{url('https://shopee.co.id/HEARTCALM_id')}}" target="_blank" class="hover:text-gray-400 transition-all duration-300">Shopee Indonesia</a></li>
                        <li><a href="{{url('https://www.tiktok.com/@HEARTCALM_id')}}" target="_blank" class="hover:text-gray-400 transition-all duration-300">TikTok Shop Indonesia</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col-span-12 md:col-span-4">
                    <h2 class="text-2xl font-bold">Newsletter</h2>
                    <p class="mt-4 text-sm text-gray-300">Ingin mendapatkan info terbaru? Subscribe sekarang</p>

                    <form id="newsletter-form" novalidate class="mt-4">
                        <label for="newsletter-email" class="sr-only">Alamat email</label>
                        <div class="flex gap-2">
                            <input
                                id="newsletter-email"
                                type="email"
                                name="email"
                                autocomplete="email"
                                placeholder="nama@email.com"
                                class="min-w-0 flex-1 rounded border border-gray-600 bg-white/10 px-3 py-2 text-white placeholder-gray-400 outline-none focus:border-sky-400 aria-invalid:border-red-500">
                            <button
                                type="submit"
                                class="rounded bg-sky-500 px-4 py-2 font-semibold text-white transition-all duration-300 hover:bg-sky-400 disabled:cursor-not-allowed disabled:opacity-60">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-10 border-t border-gray-800 pt-5">
                <p>&copy; By Khairu Fadilah 2026</p>
            </div>
        </div>
    </footer>
</body>

</html>