<?php

require 'functions.php';

// ambil data di url

$id = $_GET["id"];

// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



//cek tombol submit sudah dipencet/belum
if (isset($_POST["submit"])){
    


    //cek data apakah berhasil diubah ke database
    if(ubah($_POST) > 0 ){
        echo "
            <script>
                alert('Data Berhasil Diubah...');
                document.location.href = 'index.php';
            </script>";
    }else {
        echo " 
        <script>
            alert('Data Gagal Diubah!!!');
            document.location.href = 'index.php';
        </script>";
        
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name = "id" value = "<?= $mhs["id"]?>">
        <input type="hidden" name = "gambarLama" value = "<?= $mhs["gambar"]?>">
        <ul> 
            <li>
                <label for="nim">nim : </label>
                <input type="text" name="nim" id="nim" required 
                value="<?= $mhs["nim"]?>">
            </li>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]?>"> 
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required
                value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
                <label for="gambar">gambar : </label> <br>
                <img src="img/<?= $mhs["gambar"]?>" width="50">   <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit" required>Ubah Data!</button>
            </li>
        </ul>
    </form>

    <button type="submit" name="index"><a href="index.php">Menu</button>
</body>
</html>