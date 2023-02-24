<?php
// Initialiser le tableau des notes et le compteur de notes
$grades = array();
$num_grades = 0;

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {
    // Récupérer la nouvelle note et l'ajouter au tableau des notes
    $new_grade = $_POST['input-Ecole-Pro'];
    $grades[] = $new_grade;
    $num_grades++;
}

// Afficher le tableau des notes
echo "<table>";
echo "<tr>";
for ($i = 0; $i < 6; $i++) {
    if ($i < $num_grades) {
        echo "<td>" . $grades[$i] . "</td>";
    } else {
        echo "<td></td>";
    }
}
echo "</tr>";
echo "</table>";
?>

<?php
if(isset($_POST['submit'])) {
    $note = $_POST['input-Ecole-Pro'];
    // Stocker la note dans un fichier, une base de données, etc.
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
    <div id="img" style="text-align: center ;">
        <img src="./img/titre.svg" alt="">
        <hr id="line">
    </div>
    <div class="enter-grade">
        <p>Enter your grade</p>
        <p>Your average</p>
        <p>your final average is</p>
    </div>

    <div class="grp-1">
        <form method="post">
            <button id="branch">École pro</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-Ecole-Pro" type="number" min="1" max="6" step="0.5" value="1">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <button id="remove-grade" style="display: inline-block;">-</button>
            <table style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <?php
                    $num_grades = count($grades); // obtenir le nombre de notes dans le tableau
                    for ($i = 0; $i < 6; $i++) { // boucle sur chaque cellule de la première ligne
                        if ($i < $num_grades) { // si une note existe pour cette cellule
                            echo "<td style='width: 33px; height: 32px; border: 1px solid black;'>".$grades[$i]."</td>";
                        } else { // sinon, laisser la cellule vide
                            echo "<td style='width: 33px; height: 32px; border: 1px solid black;'></td>";
                        }
                    }
                    ?>
                </tr>
            </table>
            <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 79px; height: 32px; border: 1px solid black;"></td>
                </tr>
            </table>
            <table id="moyennefinal" style="display: inline-block; border-collapse: collapse;">
                <tr>
                    <td style="width: 131px; height: 41px; border: 1px solid black;"></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="grp-2">
        <form method="post" action="recuper.php">
            <button id="branch">Cours inter</button>
            <label for="input-number"></label>
            <input id="input-number" name="input-cours-inter" type="number" min="1" max="6" step="0.5" value="1"
                   style="display: inline-block;">
            <button id="add-grade" name="submit" style="display: inline-block;">+</button>
            <button id="remove-grade">-</button>
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
                <button id="remove-grade">-</button>

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
            <button id="remove-grade">-</button>
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
            <button id="remove-grade">-</button>
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