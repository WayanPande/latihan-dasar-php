<?php
//array

$bulan = ["januari", "februari"];
$arr = ["wadidaw", 123, true];

for ($i=0; $i < 3; $i++) { 
    echo "$arr[$i] <br>";
}

var_dump ($arr);
echo "<br>";

//menambah elemen pada akhir array
$arr[] = "lojik";

var_dump ($arr);
echo "<br>";
echo "<br>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        .kotak {
            width: 60px;
            height: 60px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;

        }

        .clear {clear: both;}
    </style>
</head>
<body>
    <?php for ($i=0; $i < count($arr); $i++) :?> 
        <div class="kotak"><?php echo $arr[$i]?></div>
    
    <?php endfor;?>

    <div class="clear"></div>

    <?php foreach ($arr as $a) :?>
        <div class="kotak"><?php echo $a;?></div>
    <?php endforeach;?>
       
</body>
</html>