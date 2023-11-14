<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemograman Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container flex-col">
    <h1 class="center padding">Form Penampil Data Diri berdasar Input</h1>
        <form action="mypersonal.php" method="post" class="flex-col center">
            
            <label for="nama">Masukkan Nama Anda :
            <input type="text" name="nama" id="">
            </label>
            <label for="nim">Masukkan NIM Anda :
            <input type="text" name="nim" id="">
            </label>
            <label for="prodi">Masukkan Prodi Anda :
            <input type="text" name="prodi" id="">
            </label>
            <label for="no_hp">Masukkan No. HP Anda :
            <input type="text" name="no_hp" id="">
            </label>
            <label for="kota">Masukkan Asal Kota Anda :
            <input type="text" name="kota" id="">
            </label>
            <button type="submit">Kirim Data</button>
        </form>
       <h5 class="center margin"><i>Created with love - Nanda Qadhafi - 3E_2212030572</i></h5>
    </div>
</body>
</html>