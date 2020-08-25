<?php
//pengkondisian



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
    <style>
        .warnabaris{
            background-color: grey;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0"> 
        <?php $a=1?>
        <?php for ($i=1; $i <= 3; $i++) :?>
            <tr>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <?php if ($a % 2 == 0): ?>
                    <td class="warnabaris">
                        <?php 
                            echo "$a"; 
                            $a++;
                        ?>
                    </td>
                    <?php else: ?>
                        <td>
                            <?php 
                            echo "$a";
                            $a++;
                            ?>
                        </td>
                    <?php endif;?>
                      
                    

                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>