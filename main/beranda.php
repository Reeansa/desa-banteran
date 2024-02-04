<div class="bg-[#F6F6F6] px-5 md:px-[50px] lg:px-[120px] py-14 md:py-24 space-y-10">
    <div class="flex justify-between text-[#182126] items-center border-b-2 pb-5 md:pb-8 border-[#C4C4C4]">
        <h1 class="text-xl md:text-3xl lg:text-4xl">Berita Terbaru</h1>
        <a href="#" class="text-sm md:text-md lg:text-xl">Lihat Lainnya</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-8 lg:gap-16">

        <?php
        // Set zona waktu ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        // Mendapatkan waktu sekarang dalam zona waktu Indonesia
        $current_time = new DateTime();
        $current_time->setTimezone(new DateTimeZone('Asia/Jakarta'));

        // Daftar nama bulan dalam bahasa Indonesia
        $nama_bulan = array(
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        );

        // Mendapatkan indeks bulan dari waktu sekarang
        $bulan = $current_time->format('n');

        // Format tanggal dan waktu sesuai kebutuhan
        $current_time_formatted = $current_time->format('d ') . $nama_bulan[$bulan] . $current_time->format(' Y');
        $sql = mysqli_query($connection, "SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 4");
        $no = 1;
        foreach ($sql as $data): ?>
            <div class="py-10 px-5 md:px-10 bg-white grid grid-cols-2 space-y-5">
                <div class="col-span-2 lg:col-span-1 space-y-5 justify-items-start">
                    <h5 class="rounded-3xl bg-[#BF5939] w-min whitespace-nowrap px-5 text-white md:text-sm lg:text-md">
                        <?= $data['kategori'] ?>
                    </h5>
                    <h1 class="md:text-xl lg:text-2xl">
                        <?= $data['judul_berita'] ?>
                    </h1>
                    <div class="space-y-2">
                        <p>
                            <?= $data['tanggal'] = $current_time_formatted; ?>
                        </p>
                        <p>
                            <?= substr($data['artikel_berita'], 0, 100) ?>
                        </p><br>
                        <!-- <a href="#" class="text-[#008644]">Lihat Selengkapnya</a> -->
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-1 w-full justify-items-end">
                    <img class="h-64 w-full lg:w-full object-cover" src="assets/img/berita/<?= $data['img'] ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<div class="px-5 md:px-[50px] lg:px-[120px] py-14 md:py-24 space-y-10">
    <div class="flex justify-between text-[#182126] items-center border-b-2 pb-5 md:pb-8 border-[#C4C4C4]">
        <h1 class="text-xl md:text-3xl lg:text-4xl">Fasilitas Desa</h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-14 text-center">
        <?php
        $sql = mysqli_query($connection, "SELECT * FROM tb_fasilitas ORDER BY id_fasilitas DESC LIMIT 4");
        $no = 1;
        foreach ($sql as $data): ?>
            <img src="assets/img/fasilitas/<?= $data['img'] ?>" alt="" class="w-full h-full object-cover">
        <?php endforeach; ?>
    </div>
</div>

<!-- DATA DESA -->
<div class="px-5 md:px-[50px] lg:px-[120px] py-14 md:py-24 space-y-14">
    <div class="flex justify-between text-[#182126] items-center border-b-2 pb-5 md:pb-8 border-[#C4C4C4]">
        <h1 class="text-xl md:text-3xl lg:text-4xl">Data Penduduk</h1>
    </div>
    <canvas id="myChart"></canvas>
</div>

<!-- PETA DESA -->
<div class="px-5 md:px-[50px] lg:px-[120px] py-14 md:py-24 space-y-10">
    <div class="flex justify-between text-[#182126] items-center border-b-2 pb-5 md:pb-8 border-[#C4C4C4]">
        <h1 class="text-xl md:text-3xl lg:text-4xl">Peta Desa</h1>
    </div>
    <div>
        <iframe class="h-[60vh] md:h-[650px]"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.69394819717!2d109.25675978671252!3d-7.362473634154001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f5b62137ba5%3A0x5027a76e35502e0!2sBanteran%2C%20Kec.%20Sumbang%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1658383386268!5m2!1sid!2sid"
            width="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>