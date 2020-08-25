<?php

require 'functions.php';
//cek tombol submit sudah dipencet/belum
if (isset($_POST["submit"])){
    


    //cek data apakah berhasil ditambah ke database
    if(tambah($_POST) > 0 ){
        echo "
            <script>
                alert('Data Berhasil Disimpan...');
                document.location.href = 'index.php';
            </script>";
    }else {
        echo " 
        <script>
            alert('Data Gagal Disimpan!!!');
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
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul> 
            <li>
                <label for="nim">nim : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required> 
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit" required>Tambah Data!</button>
            </li>
        </ul>
    </form>

    <button type="submit" name="index"><a href="index.php">Menu</button>
</body>
</html>