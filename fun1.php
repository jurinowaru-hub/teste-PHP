<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fun1.php" method="POST">
<label for="nom">Nom : </label>
<input type="text" name="nom"><br>
En php, mon niveau est : 
Débutant : <input type="radio" name="niveau" value="debutant" checked="checked">
initié : <input type="radio" name="niveau" value="initie">
<br>
<input type="reset" value="effacer">
<input type="submit" value="envoyer"><br><br><br>
<?php 

$nom = htmlspecialchars($_POST["nom"]);
$niveau = $_POST["niveau"];

if ($nom !=""){
    if ($niveau = "debutant"){
        echo "<b>Bonjour, $nom, vous êtes débutant en PHP </b>";
    }else echo "<b>Bonjour, $nom, vous êtes initié en PHP</b>";
}

?>


    </form>
</body>
</html>