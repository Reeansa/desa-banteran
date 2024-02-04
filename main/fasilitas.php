<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/font.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="px-5 md:px-[50px] lg:px-[120px] py-5 md:py-14 space-y-10 w-full h-full">
        <div class="flex border-b border-[#C4C4C4] text-3xl space-x-10 pb-8 relative">
            <button class="text-[#182126]">Fasilitas Desa</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20">

            <?php
            $sql = mysqli_query($connection, "SELECT * FROM tb_fasilitas ORDER BY id_fasilitas");
            $no = 1;
            foreach ($sql as $data) : ?>
                <div class="space-y-2 md:space-y-5">
                    <img src="assets/img/fasilitas/<?= $data['img'] ?>" alt="" class="w-full h-full object-cover">
                    <h5 class="text-center text-xl"><?= $data['img'] ?></h5>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</body>

</html>