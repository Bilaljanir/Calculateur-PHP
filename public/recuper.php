<?php
session_start();

if (!isset($_GET['grade']) || !isset($_GET['index'])) {
    header('Location: grade.php');
    exit;
}

$grade = isset($_GET['grade']) ? floatval($_GET['grade']) : null;
$index = isset($_GET['index']) ? intval($_GET['index']) : null;

if (!isset($_SESSION['grades_pro'][$index]) && !isset($_SESSION['grades_inter'][$index]) && !isset($_SESSION['grades_comp'][$index]) && !isset($_SESSION['grades_culture'][$index]) && !isset($_SESSION['grades_tpi'][$index])) {
    header('Location: grade.php');
    exit;
}

if (isset($_POST['edit'])) {
    $new_grade = isset($_POST['grade']) ? floatval($_POST['grade']) : null;
    if ($new_grade !== null) {
        if (isset($_SESSION['grades_pro'][$index])) {
            $_SESSION['grades_pro'][$index] = $new_grade;
        } elseif (isset($_SESSION['grades_inter'][$index])) {
            $_SESSION['grades_inter'][$index] = $new_grade;
        } elseif (isset($_SESSION['grades_comp'][$index])) {
            $_SESSION['grades_comp'][$index] = $new_grade;
        } elseif (isset($_SESSION['grades_culture'][$index])) {
            $_SESSION['grades_culture'][$index] = $new_grade;
        } elseif (isset($_SESSION['grades_tpi'][$index])) {
            $_SESSION['grades_tpi'][$index] = $new_grade;
        }
    }

    header('Location: grade.php');
    exit;

} elseif (isset($_POST['delete'])) {
    if (isset($_SESSION['grades_pro'][$index])) {
        unset($_SESSION['grades_pro'][$index]);
        $_SESSION['grades_pro'] = array_values($_SESSION['grades_pro']);
    } elseif (isset($_SESSION['grades_inter'][$index])) {
        unset($_SESSION['grades_inter'][$index]);
        $_SESSION['grades_inter'] = array_values($_SESSION['grades_inter']);
    } elseif (isset($_SESSION['grades_comp'][$index])) {
        unset($_SESSION['grades_comp'][$index]);
        $_SESSION['grades_comp'] = array_values($_SESSION['grades_comp']);
    } elseif (isset($_SESSION['grades_culture'][$index])) {
        unset($_SESSION['grades_culture'][$index]);
        $_SESSION['grades_culture'] = array_values($_SESSION['grades_culture']);
    } elseif (isset($_SESSION['grades_tpi'][$index])) {
        unset($_SESSION['grades_tpi'][$index]);
        $_SESSION['grades_tpi'] = array_values($_SESSION['grades_tpi']);
    }
    header('Location: grade.php');
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier / Supprimer une note</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css"
          integrity="sha512-6TqT3ZD/kdbE2fH/Q/LwY3q3gUvGxXQI6jKk6g1sw6U20h6U19Hod0/ZeB53OaFT5vM07kUG5z5+5Afcf4cw4Q=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./recuper.css">

</head>
<body>
<div class="bdy">
    <div id="img" style="text-align: center;">
        <img src="./img/titre.svg" alt="">
        <hr id="line">
    </div>
    <form method="post">
        <div class="modify">
            <label>
                <img src="./img/Modifey.svg"> Modify
            </label>
            <input id="input-grade" name="grade" type="number" min="1" max="6" step="0.5"
                   value="<?php echo $grade; ?>">
        </div>
        <div class="form-group">
            <button name="edit" type="submit" class="btn btn-primary">Modify</button>
            <button name="delete" type="submit" class="btn btn-danger">Delete</button>
            <input type="hidden" name="index" value="<?php echo $index; ?>">
        </div>
    </form>
</div>
</body>
</html>
<?php
//// initialiser un tableau vide pour stocker les valeurs des champs de formulaire
//$form_values = array();
//
//// parcourir toutes les valeurs soumises dans le formulaire
//foreach ($_POST as $name => $value) {
//    // stocker la valeur dans le tableau, avec le nom du champ comme cl??
//    $form_values[$name] = $value;
//}
//
//// afficher le contenu du tableau de valeurs de formulaire
//var_dump($form_values);
//?>
<!---->
<?php
//session_start();
//
//// Get the grade to edit
//if (isset($_GET['grade']) && isset($_GET['index'])) {
//    $index = intval($_GET['index']);
//    if (isset($_SESSION['grades'][$index]) && $_SESSION['grades'][$index] == floatval($_GET['grade'])) {
//        $grade = $_SESSION['grades'][$index];
//    }
//}
//
//// Traiter la saisie d'un formulaire
//if (isset($_POST['submit'])) {
//    if (isset($_POST['action'])) {
//        if ($_POST['action'] == 'edit' && isset($_POST['new-grade'])) {
//            $new_grade = floatval($_POST['new-grade']);
//            if ($new_grade >= 1 && $new_grade <= 6) {
//                $_SESSION['grades'][$index] = $new_grade;
//                $_SESSION['success_message'] = 'Grade edited successfully.';
//            } else {
//                $_SESSION['error_message'] = 'Invalid grade value.';
//            }
//        } elseif ($_POST['action'] == 'delete') {
//            unset($_SESSION['grades'][$index]);
//            $_SESSION['grades'] = array_values($_SESSION['grades']);
//            $_SESSION['success_message'] = 'Grade deleted successfully.';
//        }
//    }
//}
//?>
