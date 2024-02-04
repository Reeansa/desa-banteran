<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/font.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/9138eb7436.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
</head>

<body>
    <!-- TODO: harusnya w-screen -->
    <div class="px-5 md:px-[50px] lg:px-[120px] py-5 md:py-14 space-y-10 w-full h-full">
        <!-- NAVBAR -->
        <div class="flex justify-between w-full items-center">
            <div class="flex justify-center">
                <img class="h-[65px] w-[60px]" src="assets/img/logo/desa-logo.jpg" alt="">
            </div>
            <div x-data="{mobileNav: false}" class="md:hidden border relative">
                <button @click="mobileNav = ! mobileNav" class="border rounded-sm border-black p-1 hover:border-[#707070] hover:text-[#707070]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="mobileNav" class="h-54 w-[30vh] absolute top-10 -right-1 bg-white border z-50">
                    <div class="grid p-5 gap-2 text-md justify-start text-left text-[#5c6b74]">
                        <a href="?page=beranda" class="font-bold text-[#182126]">Beranda</a>
                        <a href="?page=berita" class="hover:text-[#182126]">Berita</a>
                        <a href="?page=program" class="hover:text-[#182126]">Program</a>
                        <div x-data="{mobileLayanan: false}" class="relative">
                            <a href="#" @click="mobileLayanan = ! mobileLayanan" class="hover:text-[#182126] flex items-center gap-5">Layanan
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                            <div x-show="mobileLayanan" class="grid pt-1 gap-1 pl-5">
                                <a href="?page=fasilitas" class="hover:text-[#182126]">Fasilitas</a>
                                <a href="?page=tentang-desa" class="hover:text-[#182126]">Tentang Desa</a>
                            </div>
                        </div>
                        <div x-data="{mobileTentang: false}">
                            <a href="#" @click="mobileTentang = ! mobileTentang" class="hover:text-[#182126] flex items-center gap-5">Tentang Desa
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                            <div x-show="mobileTentang" class="grid pt-1 gap-1 pl-5">
                                <a href="?page=tentang-kami" class="hover:text-[#182126]">Tentang Kami</a>
                                <a href="?page=struktur-organisasi" class="hover:text-[#182126]">Struktur Organisasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-data="{layanan: false, tentang: false}" class="hidden md:block md:flex space-x-10 text-lg text-[#5c6b74]">
                <a href="?page=beranda" class="bg-white inline-block border-l border-t border-r rounded-thover:text-[#182126] rounded hover:border-gray-200 hover:bg-gray-200 py-2 px-4 font-bold">Beranda</a>
                <a href="?page=berita" class="bg-white inline-block py-2 px-4 hover:text-[#182126] rounded hover:border-gray-200 hover:bg-gray-200 font-semibold">Berita</a>
                <a href="?page=program" class="bg-white inline-block py-2 px-4 hover:text-[#182126] rounded hover:border-gray-200 hover:bg-gray-200 font-semibold">Program</a>
                <div class="relative">
                    <button @click="layanan = true, tentang = false" class="bg-white inline-block py-2 px-4 hover:text-[#182126] rounded hover:border-gray-200 hover:bg-gray-200 font-semibold">Layanan</button>

                    <div x-show="layanan" class="bg-gray-200 text-white grid w-min whitespace-nowrap px-5 py-2 space-y-2 right-0 absolute top-10 z-50">
                        <a href="?page=fasilitas" class="text-[#5c6b74] hover:text-[#182126]">Fasilitas</a>
                        <a href="?page=layanan" class="text-[#5c6b74] hover:text-[#182126]">Layanan Desa</a>
                    </div>
                </div>
                <div class="relative">
                    <button @click="tentang = true, layanan = false" class="bg-white inline-block py-2 px-4 hover:text-[#182126] rounded hover:border-gray-200 hover:bg-gray-200 font-semibold">Tentang Desa</button>

                    <div x-show="tentang" class="bg-gray-200 text-white grid w-min whitespace-nowrap px-5 py-2 space-y-2 right-0 absolute top-10 z-50">
                        <a href="?page=tentang" class="text-[#5c6b74] hover:text-[#182126]">Tentang Kami</a>
                        <a href="?page=struktur" class="text-[#5c6b74] hover:text-[#182126]">Struktur Organisasi</a>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!isset($_GET['page']) || $_GET['page'] == 'beranda') { ?>

            <!-- HERO -->
            <div class="w-full">
                <img class="h-screen md:h-[35rem] px w-full object-cover" src="assets/img/desa/desa-tugu.jpg" alt="">
            </div>

            <div class="w-full space-y-2 grid lg:grid-cols-4 md:grid-cols-5 justify-between items-center">
                <div class="space-y-2 md:space-y-6 md:col-span-3 lg:col-span-3">
                    <h5 class="text-[#008644] md:text-lg lg:text-xl">Selamat datang di</h5>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl">Desa Banteran</h1>
                </div>
                <div class="md:col-span-2 lg:col-span-1 md:text-lg lg:text-xl space-y-6">
                    <p class="text-[#182126]">Desa Banteran merupakan salah satu desa besar yang terletak di kecamatan
                        Sumbang, Kabupaten Banyumas
                    </p>
                    <a href="?page=tentang" class="flex items-center bg-[#008644] py-3 px-6 w-min whitespace-nowrap text-white">
                        Tentang kami
                    </a>
                </div>
            </div>

        <?php } else {
            $page = $_GET['page'];  ?>

            <!-- HERO -->
            <div class="w-full relative">
                <img class="h-screen md:h-[35rem] px w-full object-cover brightness-50" src="assets/img/desa/desa-gedung.jpg" alt="">
                <div class="flex items-center justify-center h-screen md:h-[35rem] px w-full absolute top-0 left-0">
                    <h1 class="text-4xl md:text-6xl text-white"><?= ucfirst($page) ?></h1>
                </div>
            </div>

        <?php } ?>
    </div>