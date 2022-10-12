<?php

require_once '_connec.php';


function addVinyl (array $music) : void
{
    $pdo = new PDO(DSN, USER, PASS);

    $query = "INSERT INTO music (title, cover, artist, genre)
    VALUES (:title, :cover, :artist, :genre);";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $music['title'], PDO::PARAM_STR);
    $statement->bindValue(':cover', $music['cover'], PDO::PARAM_STR);
    $statement->bindValue(':artist', $music['artist'], PDO::PARAM_STR);
    $statement->bindValue(':genre', $music['genre'], PDO::PARAM_STR);
    $statement->execute();

}