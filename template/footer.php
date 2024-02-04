<div class="px-5 md:px-[50px] lg:px-[120px] py-14 md:py-24 space-y-10 bg-[#F6F6F6]">
    <div class="grid grid-cols-4 gap-14">
        <div class="col-span-4 md:col-span-2 lg:col-span-1 space-y-5">
            <h1 class="text-2xl">Desa Banteran</h1>
            <p>Desa Banteran merupakan salah satu desa besar yang terletak di kecamatan Sumbang, kabupaten Banyumas
            </p>
            <div class="flex gap-4">
                <div class="rounded-full py-2 px-4 bg-[#008644]">
                    <i class="fa-brands fa-facebook-f text-white"></i>
                </div>
                <div class="rounded-full py-2 px-3 bg-[#008644]">
                    <i class="fa-brands fa-instagram text-white"></i>
                </div>
                <div class="rounded-full py-2 px-3 bg-[#008644]">
                    <i class="fa-brands fa-twitter text-white"></i>
                </div>
            </div>
        </div>
        <div class="col-span-4 md:col-span-1 md:hidden lg:block space-y-5 text[#182126]">
            <h1 class="text-2xl">Peta Situs</h1>
            <div class="grid gap-2 md:gap-4">
                <a href="#">Beranda</a>
                <a href="#">Berita</a>
                <a href="#">Program</a>
                <a href="#">Layanan</a>
                <a href="#">Tentang Desa</a>
            </div>
        </div>
        <div class="col-span-4 md:col-span-1 md:hidden lg:block space-y-5 text[#182126]">
            <h1 class="text-2xl">Layanan</h1>
            <div class="grid gap-4">
                <a href="#">Vaksin Covid-19</a>
                <a href="#">Pembuatan KTP</a>
                <a href="#">Perubahan KK</a>
                <a href="#">Laporan Masyarakat</a>
            </div>
        </div>
        <div class="col-span-4 md:col-span-2 lg:col-span-1 space-y-5 text[#182126]">
            <h1 class="text-2xl">Kontak</h1>
            <div class="grid gap-4">
                <p>Email:</p>
                <a href="#">pemdesbanteransumbang@gmail.com</a>
                <p>No.HP/Whatsapp:</p>
                <a href="#">085877404557</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = [
        'PNS',
        'TNI/POLSI',
        'Karyawan Swasta',
        'Wiraswasta',
        'Tani',
        'Buruh Tani',
        'Buruh Harian Lepas',
        'Pertukangan',
        'Pensiunan',
        'Dagang',
        'Pemulung',
    ];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Data Penduduk Desa Banteran',
            backgroundColor: '#008644',
            borderColor: '#008644',
            data: [58, 16, 770, 313, 238, 276, 1592, 119, 54, 395, 14],
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
</body>

</html>