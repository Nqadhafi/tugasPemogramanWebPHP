<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$no_hp = $_POST['no_hp'];
$kota = $_POST['kota'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My personal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="content flex-col">
        <section class="flex-row">
        <h3 class="title">Nama</h3>
        <h3>: <?php echo $nama;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">NIM</h3>
        <h3>: <?php echo $nim;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">Prodi</h3>
        <h3>: <?php echo $prodi;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">No. HP</h3>
        <h3>: <?php echo $no_hp;?></h3>
        </section>
        <hr>
        <section class="flex-row">
        <h3 class="title">Asal Kota</h3>
        <h3>: <?php echo $kota;?></h3>
        </section>
        </div>
    </div>
</body>
</html>