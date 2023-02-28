<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>CalculateurPHP</title>

</head>
<body>
<div class="test1">
    <img src="./img/image.png" width="522PX" height="900PX">
</div>
<div class="test2">
    <div class="titre">
        <h1>Calculateur de moyenne</h1>
    </div>
    <div class="titre2">
        <h2>welcome to Calculateur</h2>
    </div>
    <div class="container">
        <div id="phpconfig">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        </div>
        <label for="uname"></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit">Login</button>

    </div>
</div>
<?php
if (isset($_POST['logout'])) {
    // Déconnectez l'utilisateur
    // Vous pouvez supprimer les cookies, vider la session, etc.
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    if ($username === 'user1' && $password === 'pass1' ||
        $username === 'user2' && $password === 'pass2') {
        header('Location: grade.php');
        exit;

    } else {
        echo '<p>Invalid username or password.</p>';
    }
}
?>

</body>
</html>

