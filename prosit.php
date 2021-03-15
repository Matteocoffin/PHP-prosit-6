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
        // permet de connaitre le choix de l'utilisateur (précédent ou suivant)
            if(isset($_GET['previous'])){
                $_SESSION['caractere'] -= 512;
                $_SESSION['PAGE']--;
            }else{
                $_SESSION['PAGE']++;
            }
        //création d'une table avec les smileys
            echo '<table>';
            for($i = 0;$i<16;$i++){
                echo '<tr>';
                //génération de caractères
                for($j = 0;$j<16;$j++){
                    $_SESSION['caractere']++;
                    echo '<td>&#'.$_SESSION['caractere'].'</td>';
                }
                echo '</tr>';
               }
        ?>
        <a href="prosit.php?previous=true">precedent</a>
        <?php echo '-----'.$_SESSION['PAGE'].'-----' ?>
        <a href="prosit.php">suivant</a>
        <br>
        <a href="mentionlegal.php">Mention légale</a>
    </body>
</html>