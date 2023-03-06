<?php
session_start();

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Initialize the grades arrays
if (!isset($_SESSION['grades_pro'])) {
    $_SESSION['grades_pro'] = [];
}
if (!isset($_SESSION['grades_inter'])) {
    $_SESSION['grades_inter'] = [];
}
if (!isset($_SESSION['grades_culture'])) {
    $_SESSION['grades_culture'] = [];
}

if (!isset($_SESSION['grades_tpi'])) {
    $_SESSION['grades_tpi'] = [];
}

// Handle submission of new grades
if (isset($_POST['submit'])) {
    if (isset($_POST['input-Ecole-Pro'])) {
        if(!is_array($_POST['input-Ecole-Pro'])) {
            $_POST['input-Ecole-Pro'] = array($_POST['input-Ecole-Pro']);
        }
        foreach($_POST['input-Ecole-Pro'] as $new_grade) {
            $new_grade = floatval($new_grade);
            array_push($_SESSION['grades_pro'], $new_grade);
        }
        $_SESSION['success_message'] = 'Grades added successfully.';
        header('Location: grade.php');
        exit;
    }
    if (isset($_POST['input-Cours-Inter'])) {
        if(!is_array($_POST['input-Cours-Inter'])) {
            $_POST['input-Cours-Inter'] = array($_POST['input-Cours-Inter']);
        }
        foreach($_POST['input-Cours-Inter'] as $new_grade) {
            $new_grade = floatval($new_grade);
            array_push($_SESSION['grades_inter'], $new_grade);
        }
        header('Location: grade.php');
        exit;
    }
}
if (isset($_POST['submit'])) {
    if (isset($_POST['input-Culture-G'])) {
        if(!is_array($_POST['input-Culture-G'])) {
            $_POST['input-Culture-G'] = array($_POST['input-Culture-G']);
        }
        foreach($_POST['input-Culture-G'] as $new_grade) {
            $new_grade = floatval($new_grade);
            array_push($_SESSION['grades_culture'], $new_grade);
        }
        header('Location: grade.php');
        exit;
    }
}

// Calculate average grades
$num_grades_pro = count($_SESSION['grades_pro']);
$sum_grades_pro = array_sum($_SESSION['grades_pro']);
$average_pro = $num_grades_pro > 0 ? $sum_grades_pro / $num_grades_pro : 0;

$num_grades_inter = count($_SESSION['grades_inter']);
$sum_grades_inter = array_sum($_SESSION['grades_inter']);
$average_inter = $num_grades_inter > 0 ? $sum_grades_inter / $num_grades_inter : 0;

$num_grades_culture = count($_SESSION['grades_culture']);
$sum_grades_culture = array_sum($_SESSION['grades_culture']);
$average_culture = $num_grades_culture > 0 ? $sum_grades_culture / $num_grades_culture : 0;



// Handle success message
if (isset($_SESSION['success_message'])) {
    echo '<div style="color: green;">'.$_SESSION['success_message'].'</div>';
    unset($_SESSION['success_message']);
}

// Handle error message
if (isset($_SESSION['error_message'])) {
    echo '<div style="color: red;">'.$_SESSION['error_message'].'</div>';
    unset($_SESSION['error_message']);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./grade.css">
    <title>Grade</title>
</head>

<body>
<div class="bdy">
    <div id="img" style="text-align: center;">
        <img src="./img/titre.svg" alt="">
        <hr id="line">
    </div>
    <div class="logoutt">
        <form action="grade.php" method="post">
            <input type="hidden" name="logout" value="true">
            <button type="submit">Déconnexion</button>
        </form>
    </div>
    <div class="grp-1">
        <form method="post">
            <button onclick="event.preventDefault()" id="branch">École pro</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-Ecole-Pro[]" type="number" min="1" max="6" step="0.5" value="1">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <?php
                    // Display each grade in a table cell as a hyperlink
                    foreach ($_SESSION['grades_pro'] as $index => $grade) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'><a href='recuper.php?grade=".$grade."&index=".$index."'>".$grade."</a></td>";
                    }
                    // Add empty cells if necessary to fill the first row
                    for ($i = count($_SESSION['grades_pro']); $i < 6; $i++) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'></td>";
                    }
                    ?>
                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;">
                        <?php echo round($average_pro, 2); ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="grp-2">
        <form method="post">
            <button onclick="event.preventDefault()" id="branch">Cours inter</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-Cours-Inter[]" type="number" min="1" max="6" step="0.5" value="1"
                   style="display: inline-block;">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <?php
                    // Display each grade in a table cell as a hyperlink
                    foreach ($_SESSION['grades_inter'] as $index => $grade) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'><a href='recuper.php?grade=".$grade."&index=".$index."'>".$grade."</a></td>";
                    }
                    // Add empty cells if necessary to fill the first row
                    for ($i = count($_SESSION['grades_inter']); $i < 6; $i++) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'></td>";
                    }
                    ?>
                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;">
                        <?php echo round($average_inter, 2); ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="grp-3">
        <form method="post">
            <button onclick="event.preventDefault()" id="branch">Compétence de base élargie</button>

            <label for="semestre-select[]"></label>
            <select name="semestre-select[]" ">
            <option>Semestre 1</option>
            <option>Semestre 2</option>
            <option>Semestre 3</option>
            <option>Semestre 4</option>
            <option>Semestre 5</option>
            </select>

            <label for=" branch-select1[]"></label>
            <select name="branch-select1[]">
                <option>Math</option>
                <option>Anglais</option>
            </select>
            <label for="input-numbergr3"></label>
            <input id="input-numbergr3" name="input-Ecole-Pro[]" type="number" min="1" max="6" step="0.5"
                   value="1">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>


            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <?php
                    // Display each grade in a table cell as a hyperlink
                    foreach ($_SESSION['grades'] as $index => $grade) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'><a href='recuper.php?grade=".$grade."&index=".$index."'>".$grade."</a></td>";
                    }
                    // Add empty cells if necessary to fill the first row
                    for ($i = count($_SESSION['grades']); $i < 6; $i++) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'></td>";
                    }
                    ?>

                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="grp-4">
        <form method="post">
            <button onclick="event.preventDefault()" id="branch">Culture G</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-Culture-G[]" type="number" min="1" max="6" step="0.5" value="1"
                   style="display: inline-block;">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <?php
                    // Display each grade in a table cell as a hyperlink
                    foreach ($_SESSION['grades_culture'] as $index => $grade) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'><a href='recuper.php?grade=".$grade."&index=".$index."'>".$grade."</a></td>";
                    }
                    // Add empty cells if necessary to fill the first row
                    for ($i = count($_SESSION['grades_culture']); $i < 6; $i++) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'></td>";
                    }
                    ?>

                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;">
                        <?php echo round($average_culture, 2); ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="grp-5">
        <form onclick="event.preventDefault()" method="post" action="recuper.php">
            <button id="branch">TPI</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-tpi[]" type="number" min="1" max="6" step="0.5" value="1"
                   style="display: inline-block;">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <?php
                    // Display each grade in a table cell as a hyperlink
                    foreach ($_SESSION['grades_tpi'] as $index => $grade) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'><a href='recuper.php?grade=".$grade."&index=".$index."'>".$grade."</a></td>";
                    }
                    // Add empty cells if necessary to fill the first row
                    for ($i = count($_SESSION['grades_tpi']); $i < 6; $i++) {
                        echo "<td style='width: 33px; height: 32px; border: 1px solid black;'></td>";
                    }
                    ?>
                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;">
                        <?php echo round($average_pro, 2); ?>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</div>

</body>

</html>