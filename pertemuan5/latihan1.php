<?php

// $x = 10;

// function lojik(){
//     //global digunakan untuk mendefinisikan suatu variabel menjadi variabel
//     //global/juga bisa dibilang untuk mencari suatu variabel yg sama diluar function.
//     global $x;
//     echo $x;
// }

// lojik();

//SUPERGLOBALS

//$_GET["nama"]="lojik aih";

$mahasiswa = [
    ["nama" => "Intel core i5", "nim" => "1231313", "jurusan" => "Informatika", "gambar" => "i55.png"],
    ["nama" => "Intel core i7", "nim" => "453455", "jurusan" => "Informatika", "gambar" => "i7.png"]


];


// var_dump ($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar CPU</h1>
    <ul>
       <?php foreach ($mahasiswa as $mhs):?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nim=<?= $mhs["nim"];?>&jurusan=<?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"];?></a>
        </li> 
       <?php endforeach;?>
    </ul>
   
</body>
</html>