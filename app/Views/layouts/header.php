<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himpunan Mahasiswa Sistem Informasi Industri Otomotif | HIMASIS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="font-['Outfit']">
     <header class="top-0 bg-white fixed w-full z-20 shadow">
        <nav class="mx-auto flex max-w-[1536px] items-center justify-between py-4 px-6 md:px-10 lg:px-20 gap-2 font-semibold"
            x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false">

            <div class="flex-1">
                 <img src="/images/navbar-logo.png" alt="navbar-logo" class="w-[140px] md:w-[180px] lg:w-[210px]">
                 <a href="http://127.0.0.1:8080">
                </a>
            </div>
            <!-- Desktop Menu -->
            <ul class="hidden lg:flex lg:gap-12 md:justify-center md:items-center">
                <li class="transform transition-transform duration-150 active:scale-90">
                    <a href="http://127.0.0.1:8080" class="hover:text-[#0077CC] ">Beranda</a>
                </li>
                <li class="">
                    <div class="relative">
                        <div x-data="{ open: false }" class="relative">
                            <button type="button"
                                class="flex items-center hover:text-[#0077CC] transform transition-transform duration-150 active:scale-90"
                                x-on:click="open = !open">
                                Tentang Kami
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-[320px] overflow-hidden rounded-xl bg-white shadow-lg ring-1 ring-gray-900/5"
                                x-show="open" 
                                x-transition
                                @click.away="open = false"
                                @scroll.window="open = false">
                                <div class="p-4 flex flex-col gap-2">
                                    <div class="flex-auto bg-[#0077CC] rounded-md px-4 py-2">
                                        <a href="http://127.0.0.1:8080/profile"
                                            class="block font-semibold text-white">
                                            Profile Himpunan
                                        </a>
                                    </div>
                                    <div class="flex-auto border rounded-md px-4 py-2">
                                        <a href="http://127.0.0.1:8080/divisi"
                                            class="block font-semibold text-gray-900">
                                            Divisi Himpunan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>
                <li class="transform transition-transform duration-150 active:scale-90">
                    <a href="http://127.0.0.1:8080/artikel" class="hover:text-[#0077CC] ">Artikel</a>
                </li>
                <li class="transform transition-transform duration-150 active:scale-90">
                    <a href="http://127.0.0.1:8080/blog" class="hover:text-[#0077CC] ">Blog</a>
                </li>
                <li class="transform transition-transform duration-150 active:scale-90">
                    <a href="http://127.0.0.1:8080/matkul" class="hover:text-[#0077CC] ">Matkul</a>
                </li>
                <li class="transform transition-transform duration-150 active:scale-90">
                    <a href="http://127.0.0.1:8080/faq" class="hover:text-[#0077CC] ">FAQ</a>
                </li>
                <li class="transform transition-transform duration-150 active:scale-90">
                    <a href="http://127.0.0.1:8080/contact" class="hover:text-[#0077CC] ">Kontak</a>
                </li>
            </ul>


            <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen"
                :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button"
                class="flex text-slate-800 lg:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
                <svg x-cloak="" x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none"
                    aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
                <svg x-cloak="" x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none"
                    aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Mobile Menu -->
            <ul x-cloak="" x-show="mobileMenuIsOpen"
                x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
                x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
                x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
                x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full"
                class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col rounded-b-xl border-b border-slate-300 bg-white px-8 pb-6 pt-10 lg:hidden">
                <li class="mb-4 border-none">
                    <div class="flex items-center gap-2">
                        <img src="images/navbar-logo.png" alt="navbar-logo" class="w-[120px] md:w-[160px] lg:w-[180px]">
                    </div>
                </li>
                <li class="p-2"><a href="http://127.0.0.1:8080"
                        class="w-full text-slate-800 focus:underline hover:text-[#0077CC]">Home</a></li>
                <li class="p-2">
                    <div class="w-full text-slate-800 focus:underline hover:text-[#0077CC]">
                        <div x-data="{ isExpanded: false }" class="">
                            <button id="controlsAccordionItemOne" type="button" class="flex items-center gap-2"
                                aria-controls="accordionItemOne" @click="isExpanded = ! isExpanded" :class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold' :
                                'text-onSurface dark:text-onSurfaceDark font-semibold'"
                                :aria-expanded="isExpanded ? 'true' : 'false'">
                                Tentang Kami
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                    stroke="currentColor" class="size-3 shrink-0 transition" aria-hidden="true"
                                    :class="isExpanded ? 'rotate-180' : ''">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                </svg>
                            </button>
                            <div x-cloak="" x-show="isExpanded" id="accordionItemOne" role="region"
                                aria-labelledby="controlsAccordionItemOne" x-collapse=""
                                class="flex flex-col pl-4 mt-1 text-slate-400 font-medium border-l gap-2">
                                <a href="http://127.0.0.1:8080/profile"
                                    class="hover:text-[#0077CC]">Profile
                                    Himpunan</a>
                                <a href="http://127.0.0.1:8080/divisi" class="hover:text-[#0077CC]">Divisi
                                    Himpunan</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="p-2"><a href="http://127.0.0.1:8080/artikel"
                        class="w-full text-slate-800 focus:underline hover:text-[#0077CC]">Artikel</a></li>
                <li class="p-2"><a href="http://127.0.0.1:8080/matkul"
                        class="w-full text-slate-800 focus:underline hover:text-[#0077CC]">Matkul</a></li>
                <li class="p-2"><a href="http://127.0.0.1:8080/blog"
                        class="w-full text-slate-800 focus:underline hover:text-[#0077CC]">Blog</a></li>
                <li class="p-2"><a href="http://127.0.0.1:8080/faq"
                        class="w-full text-slate-800 focus:underline hover:text-[#0077CC]">FAQ</a></li>
                <li class="p-2"><a href="http://127.0.0.1:8080/contact"
                        class="w-full text-slate-800 focus:underline hover:text-[#0077CC]">Kontak</a></li>
                <hr role="none" class="my-2 border-outline dark:border-slate-700">
                
            </ul>
        </nav>
    </header>
<main>
