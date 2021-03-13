<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <?php
        
            if(isset($_GET['previous'])){
                $_SESSION['caractere'] -= 512; 
            }
            $first = $_SESSION['caractere'];
            echo '<table>';
            for($i = 0;$i<16;$i++){
                echo '<tr>';
                for($j = 0;$j<16;$j++){
                    $_SESSION['caractere']++;
                    echo '<td>&#'.$_SESSION['caractere'].'</td>';
                }
                echo '</tr>';
                $_SESSION['precedent']= $first;
            }
        ?>
        <a href="prosit.php?previous=true">precedant</a>
        <a href="prosit.php?">suivant</a>
    </body>
</html>