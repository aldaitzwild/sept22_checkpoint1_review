<?php
require_once '_connec.php';
$pdo = new PDO(DSN,USER,PASSWORD);

$query = "SELECT * FROM vinyl";
$statement = $pdo->query($query);
$vinyls = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<h2>
    <?php

echo 'Il y a ' . count($vinyls) . ' vinyl(s) dans la collection';

?>
</h2>

<table>
        <thead>
            <th>Title</th>
            <th>Cover</th>
            <th>Artist</th>
            <th>Genre</th>
        </thead>
        <tbody>
            <?php
            foreach ($vinyls as $vinyl) {

                

                echo '<tr><td>' . $vinyl['title'] . '</td>';

                echo '<td><img width="100" src="' . $vinyl['cover'] . '"></td>';
                echo '<td>' . $vinyl['artist'] . '</td>';
                echo '<td>' . $vinyl['genre'] . '</td></tr>';
               
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<!--
     
    1 - Creer une table Vinyl en BDD : 
       - id Int PK AI
       - title String 200 char max
       - cover String 255 char max URL vers l'image de la pochette de l'album
       - artist String 200 char max
       - genre String 100 char max

    2 - Saisir au moins 5 lignes d'exemples

    3 - Ecrire le code PHP qui permet de récupérer ces lignes en BDD pour les afficher 
    dans un joli tableau HTML :-D 
    
 -->