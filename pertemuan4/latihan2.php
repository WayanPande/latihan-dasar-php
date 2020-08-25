<?php
$mahasiswa = [
    ["lojik aih", "081212", "Informatika", "email"],
    ["mantap", "0190191", "informatika", "email"]   
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
    <h1>Data mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs ):?>
    <ul>
        
            <li>Nama: <?= $mhs[0]?></li>
            <li>NIM : <?= $mhs[1]?></li>
            <li>Jurusan:<?= $mhs[2]?></li>
            <li>Email:<?= $mhs[3]?></li>
    </ul>
    <?php endforeach;?>    
</body>
</html>