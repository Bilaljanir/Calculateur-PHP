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
<?php
session_start();

// Get the grade to edit
if (isset($_GET['grade']) && isset($_GET['index'])) {
    $index = intval($_GET['index']);
    if (isset($_SESSION['grades'][$index]) && $_SESSION['grades'][$index] == floatval($_GET['grade'])) {
        $grade = $_SESSION['grades'][$index];
    }
}

// Handle form submission
if (isset($_POST['submit'])) {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == 'edit' && isset($_POST['new-grade'])) {
            $new_grade = floatval($_POST['new-grade']);
            if ($new_grade >= 1 && $new_grade <= 6) {
                $_SESSION['grades'][$index] = $new_grade;
                $_SESSION['success_message'] = 'Grade edited successfully.';
            } else {
                $_SESSION['error_message'] = 'Invalid grade value.';
            }
        } elseif ($_POST['action'] == 'delete') {
            unset($_SESSION['grades'][$index]);
            $_SESSION['grades'] = array_values($_SESSION['grades']);
            $_SESSION['success_message'] = 'Grade deleted successfully.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Grade</title>
</head>
<body>
<h1>Edit Grade</h1>
<?php if (isset($grade)): ?>
    <?php if (isset($_SESSION['error_message'])): ?>
        <div style="color: red;"><?php echo $_SESSION['error_message']; ?></div>
        <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>
    <form method="post">
        <label for="input-grade">Grade:</label>
        <input id="input-grade" name="new-grade" type="number" min="1" max="6" step="0.5" value="<?php echo $grade; ?>">
        <br>
        <button type="submit" name="action" value="edit">Edit</button>
        <button type="submit" name="action" value="delete">Delete</button>
    </form>
<?php else: ?>
    <p>Grade not found.</p>
<?php endif; ?>
</body>
</html>

