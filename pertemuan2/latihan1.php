<?php

    //perulangan
    for ($i = 0; $i <5 ; $i++)
    {
        echo "lojik <br>";
    }
    
    $a = 0;
    while ($a <= 5) {
        echo "aih <br>";
        $a++;
    }

    $a = 0;
    do {
        $a++;
        echo "wadidaw <br>";
    } while ($a <= 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php $a=1?>
        <?php for ($i=1; $i <= 3; $i++) :?>
            <tr>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td>
                        <?php 
                            echo "$a"; 
                            $a++;
                        ?>
                    </td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php $i=1;while ($i <=5 ) :?>
            <tr>
                <td>
                    <?php echo "$i"; $i++;?>
                </td>
            </tr>
        <?php endwhile;?>    
    </table>

</body>
</html>