<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$nom = htmlspecialchars($_POST["nom"]);
$niveau = $_POST["niveau"];

if ($nom !=""){
    if ($niveau = "debutant"){
        echo "<b>Bonjour, $nom, vous êtes débutant en PHP </b>";
    }else echo "<b>Bonjour, $nom, vous êtes initié en PHP</b>";
}

?> 
</body>
</html>
