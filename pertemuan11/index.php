<?php
//koneksi ke database
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// jika tombol cari diitekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus 
        placeholder="Masukan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
        
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>nim</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
            <th>test</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $row):?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]?>" width="50"></td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </tabel>
</body>
</html>