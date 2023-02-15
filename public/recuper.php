<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Recuper</h1>
</body>
</html>
<?php

// initialiser un tableau vide pour stocker les valeurs des champs de formulaire
$form_values = array();

// parcourir toutes les valeurs soumises dans le formulaire
foreach ($_POST as $name => $value) {
    // stocker la valeur dans le tableau, avec le nom du champ comme clé
    $form_values[$name] = $value;
}

// afficher le contenu du tableau de valeurs de formulaire
var_dump($form_values);
?>


