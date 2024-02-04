<div class="px-5 md:px-[50px] lg:px-[120px] py-5 md:py-14 space-y-10 w-full h-full">
    <div class="flex border-b border-[#C4C4C4] text-3xl space-x-10 pb-8 relative">
        <button class="text-[#182126]">Layanan</button>
    </div>
    <div>

        <?php
        $sql = mysqli_query($connection, "SELECT * FROM tb_layanan ORDER BY id_layanan");
        $no = 1;
        foreach ($sql as $data) : ?>
            <div class="grid grid-cols-2 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
                <div class="col-span-2 md:col-span-1">
                    <h1 class="text-md md:text-xl">#0<?= $no++ ?> Layanan</h1>
                </div>
                <div class="space-y-6 col-span-2 md:col-span-1">
                    <h1 class="text-xl"><?= $data['judul_layanan'] ?></h1>
                    <p>
                        <?= substr($data['artikel_layanan'], 0, 100) ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>