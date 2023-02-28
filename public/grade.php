<?php
session_start();

// Initialize the grades array
if (!isset($_SESSION['grades'])) {
    $_SESSION['grades'] = [];
}

// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Handle new grade submission
if (isset($_POST['submit'])) {
    if (isset($_POST['input-Ecole-Pro'])) {
        $new_grade = floatval($_POST['input-Ecole-Pro']);
        array_push($_SESSION['grades'], $new_grade);
        $_SESSION['success_message'] = 'Grade added successfully.';
        header('Location: grade.php');
        exit;
    }
}

// Calculate average grade
$num_grades = count($_SESSION['grades']);
$sum_grades = array_sum($_SESSION['grades']);
$average = $num_grades > 0 ? $sum_grades / $num_grades : 0;

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

    <form action="grade.php" method="post">
        <input type="hidden" name="logout" value="true">
        <button type="submit">Déconnexion</button>
    </form>

    <div class="grp-1">
        <form method="post">
            <button id="branch">École pro</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-Ecole-Pro" type="number" min="1" max="6" step="0.5" value="1">
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
                    <td style="width: 79px; height: 32px; border: 1px solid black;"><?php echo round($average, 2); ?></td>
                </tr>
            </table>
            <table id="moyennefinal" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 131px; height: 41px; border: 1px solid black;">Votre moyenne finale</td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>



<div class="grp-2">
        <form method="post" action="recuper.php">
            <button id="branch">Cours inter</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-cours-inter" type="number" min="1" max="6" step="0.5" value="1"
                   style="display: inline-block;">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="grp-3">
        <form method="post" action="recuper.php">
            <button id="branch">Compétence de base élargie</button>

            <label for="semestre-select[]"></label>
            <select name="semestre-select[]" ">
                <option>Semestre 1</option>
                <option>Semestre 2</option>
                <option>Semestre 3</option>
                <option>Semestre 4</option>
                <option>Semestre 5</option>
            </select>

            <label for="branch-select1[]"></label>
            <select name="branch-select1[]">
                <option>Math</option>
                <option>Anglais</option>
            </select>
                <label for="input-numbergr3"></label>
                <input id="input-numbergr3" name="input-grade" type="number" min="1" max="6" step="0.5" value="1">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>


                <table style="display: inline-block; border-collapse: collapse;">
                    <tr>
                        <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                        <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                        <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                        <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                        <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                        <td style="width: 33px; height: 32px; border: 1px solid black;"></td>

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
        <form method="post" action="recuper.php">
            <button id="branch">Culture G</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-culture" type="number" min="1" max="6" step="0.5" value="1"
                   style="display: inline-block;">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>

                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;"></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="grp-5">
        <form method="post" action="recuper.php">
            <button id="branch">TPI</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-cours inter" type="number" min="1" max="6" step="0.5" value="1"
                   style="display: inline-block;">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>
                    <td style="width: 33px; height: 32px; border: 1px solid black;"></td>

                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;"></td>
                </tr>
            </table>
        </form>
    </div>

</div>

</body>
</html>