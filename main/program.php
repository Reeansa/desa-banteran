<div x-data="{terlaksana: true, mendatang: false}" class="px-5 md:px-[50px] lg:px-[120px] py-5 md:py-14 space-y-10 w-full h-full">
    <div class="flex border-b border-[#C4C4C4] md:text-2xl lg:text-3xl space-x-10 pb-8 relative">
        <button @click="terlaksana = true, mendatang = false" class="text-[#182126]">Terlaksana</button>
        <button @click="mendatang = true, terlaksana = false" class="text-[#C4C4C4] hover:text-[#182126]">Mendatang</button>
        <div x-show="terlaksana" class="w-10 md:w-14 h-2 absolute -bottom-1 -left-7 md:-left-3 lg:left-0 bg-green-500">
        </div>
        <div x-show="mendatang" class="w-10 md:w-14 h-2 absolute -bottom-1 left-[5.5rem] md:left-36 lg:left-[11.5rem] bg-green-500">
        </div>
    </div>
    <div x-show="terlaksana">

        <?php
        $sql = mysqli_query($connection, "SELECT * FROM tb_program WHERE kategori='terlaksana' ORDER BY id_program");
        $no = 1;
        foreach ($sql as $data) : ?>
            <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
                <div class="col-span-3 md:col-span-1">
                    <h1 class="text-md md:text-xl">#0<?= $no++ ?> Program Terlaksana</h1>
                </div>
                <div class="space-y-6 col-span-3 md:col-span-1">
                    <h1 class="text-xl"><?= $data['judul_program'] ?></h1>
                    <p>
                        <?= substr($data['artikel_program'], 0, 100) ?>
                    </p>
                </div>
                <div class="md:justify-self-end col-span-3 md:col-span-1">
                    <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/<?= $data['img'] ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div x-show="mendatang">
        <?php
        $sql = mysqli_query($connection, "SELECT * FROM tb_program WHERE kategori='mendatang' ORDER BY id_program");
        $no = 1;
        foreach ($sql as $data) : ?>
            <div class="grid grid-cols-3 gap-5 md:gap-14 py-8 md:px-10 lg:px-14 border-b border-[#C4C4C4]">
                <div class="col-span-3 md:col-span-1">
                    <h1 class="text-md md:text-xl">#0<?= $no++ ?> Program Mendatang</h1>
                </div>
                <div class="space-y-6 col-span-3 md:col-span-1">
                    <h1 class="text-xl"><?= $data['judul_program'] ?></h1>
                    <p>
                        <?= substr($data['artikel_program'], 0, 100) ?>
                    </p>
                </div>
                <div class="md:justify-self-end col-span-3 md:col-span-1">
                    <img class="h-[50h] md:h-[25vh] w-full object-cover" src="assets/img/program/<?= $data['img'] ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>