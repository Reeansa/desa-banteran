<div class="px-5 md:px-[50px] lg:px-[120px] py-5 md:py-14 space-y-10 w-full h-full">
    <div class="flex border-b border-[#C4C4C4] text-3xl space-x-10 pb-8 relative">
        <button class="text-[#182126]">Berita</button>
    </div>
    <div>

        <?php
        $sql = mysqli_query($connection, "SELECT * FROM tb_berita ORDER BY id_berita");
        $no = 1;
        foreach ($sql as $data) : ?>
            <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
                <div class="col-span-3 md:col-span-1">
                    <h1 class="text-md md:text-xl">#0<?= $no++ ?> Berita</h1>
                </div>
                <div class="space-y-6 col-span-3 md:col-span-1">
                    <h1 class="text-xl"><?= $data['judul_berita'] ?></h1>
                    <p>
                        <?= substr($data['artikel_berita'], 0, 100) ?>
                    </p>
                </div>
                <div class="md:justify-self-end col-span-3 md:col-span-1">
                    <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/berita/<?= $data['img'] ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>