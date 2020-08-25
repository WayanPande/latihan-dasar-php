<?php
$angka =[
    [1,2,3], 
    [4,5,6]
];

// echo $angka[1][1] ;

// foreach ($angka as $a) {
//     foreach ($a as $b){
//         echo $b;
//     }
//     echo "<br>";
//}
?>



<?php


$mahasiswa = [
    ["nama" => "Intel core i5", "nim" => "1231313", "jurusan" => "Informatika", "gambar" => "i55.png"],
    ["nama" => "Intel core i7", "nim" => "453455", "jurusan" => "Informatika", "gambar" => "i7.png"]


];


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>
<body>
    <h1>Data Prossesor</h1>
    <?php foreach($mahasiswa as $mhs ):?>
    <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];?>"> 
            </li>
            <li>Nama   : <?= $mhs["nama"]?></li>
            <li>NIM    : <?= $mhs["nim"]?></li>
            <li>Jurusan: <?= $mhs["jurusan"]?></li>
         
    </ul>
    <?php endforeach;?>    
</body>
</html> 