<?php
/*
    1/ Créer un formulaire pour renseigner un nouveau vinyl : 
        - Titre => string de Max 200 caractères - Obligatoire
        - Pochette => Url - Obligatoire
        - Artiste => string de max 200 caractères - Obligatoire
        - Genre => liste déroulante contenant les valeurs : Rock, Classique, Rap, Jazz, Electro, BO de film, Métal, Disco

        Le formulaire doit envoyer ces informations sur la même page

    2/ Controle des données saisies : 
       - vous devez afficher "Bravo le nouveau Vinyl a bien été transmis !" si les données correspondent bien au critères ci-dessus
       - vous devez affichez "Non essayez encore";
       - Et si le Genre selectionné est "Disco" vous devez affichez "Merci de bien vouloir brûler ce vinyl et s'il vous plait n'utiliser plus cette plateforme."
*/

 if($_SERVER["REQUEST_METHOD"] === 'POST') {
    $data = array_map('trim', $_POST);
    $errors= [];

    if(!isset($data['title']) || empty($data['title']))
    $errors[] = "Le titre est obligatoire";

    if(strlen($data['title']) > 200)
    $errors[] = "Le titre ne doit pas dépasser 200 caractères";

    if(!isset($data['cover']) || empty($data['cover']))
    $errors[] = "L'url est obligatoire";

    if(!filter_var($data['cover'], FILTER_VALIDATE_URL))
    $errors[] = "L'url comporte une erreur";

    if(!isset($data['artist']) || empty($data['artist']))
    $errors[] = "L'artiste est obligatoire";

    if(strlen($data['artist']) > 200)
    $errors[] = "L'artiste ne doit pas dépasser 200 caractères";




    if(!empty($errors)) {
     echo "<h2>Non essayez encore</h2>";
     foreach ($errors as $error)     
     echo "<li>". $error . "</li><br>";
    } else {echo "<h2>Bravo le nouveau Vinyl a bien été transmis !</h2>";
    
        if($data['style'] === 'disco')
        {
            echo "<h2>Mais merci de bien vouloir brûler ce vinyl et s'il vous plait n'utilisez plus cette plateforme!</h2>";
        } 
}
    
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau vinyl</title>

    <h1>Ajouter un nouveau vinyl</h1>
    <form  method="post">

    <p>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title">
    </p>

    <p>
        <label for="cover">Pochette :</label>
        <input type="url" name="cover" id="cover">
    </p>

    <p>
        <label for="artist">Artiste :</label>
        <input type="text" name="artist" id="artist">
    </p>

    <p>
        <label for="style">Genre :</label>
        <select name="style" id="style">
            <option value="">--Please choose an option--</option>
            <option value="rock">rock</option>
            <option value="classic">classique</option>
            <option value="rap">rap</option>
            <option value="jazz">jazz</option>
            <option value="bo">BO de film</option>
            <option value="metal">métal</option>
            <option value="disco">disco</option>
        </select>
    <p>
    
    <p><button type="submit">Send</button>
</p>
</form>
</head>
<body></body>
    
</body>
</html>