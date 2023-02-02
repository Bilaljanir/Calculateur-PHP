<?php
if(isset($_POST["submit"])) {
    $userName = $_POST["user"];
    $password = $_POST["pass"];

    if ($userName === "bilal" && $password === "janir123") {
        header("Location: login.php");
    } elseif ($userName === "janir" && $password === "bilal123") {
        header("Location: login.php");
    }
    else{
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
<div class="titre">
    <title>CalculateurPHP</title>
</div>
</head>
<body>
<div class="titre">
    <section>
        <form action="=login.php" method="post">
        <h1>Calculateur de moyenne CFC </h1>
</div>
<div class="login">
    <h2>Login Here</h2>
</div>
<div class="inputuser">
    <input type="text" name="user" placeholder="Username">
</div>
<div class="inputpass">
    <input type="password" name="pass" placeholder="Enter password">
</div>
<input type="submit" value="LOGIN">
</div>
</section>
</body>
</html>
