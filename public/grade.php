<?php
require "../vendor/autoload.php";

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

    <div class="grp-1">
        <form method="post" action="recuper.php">
        <h2>Enter your grade</h2>
        <button id="branch">École pro</button>
            <label for="input-number"></label><input id="input-number" name="input" type="number" min="1" max="6" step="0.5" value="1" style="display: inline-block;">
            <button type="submit">+</button>
<!--        <button id="add-grade" name="button" style="display: inline-block;">+</button>-->
        <button id="remove-grade" style="display: inline-block;">-</button>
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
        <table id="moyennefinal" style="display: inline-block; border-collapse: collapse;">
            <tr>
                <td style="width: 131px; height: 41px; border: 1px solid black;"></td>
            </tr>
        </table>
        </form>
    </div>

    <div class="grp-2">
        <button id="branch">Cours inter</button>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button type="submit">+</button>
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
        <div class="result" style="display: inline-block;">
            <p1>You passed</p1>
            <p2>You failed</p2>
        </div>
    </div>

    <div class="grp-3">
        <button id="branch">Compétence de base élargie </button>
    <select name="semestre-select" id="semestre-select">
        <option>Semestre 1</option>
        <option>Semestre 2</option>
        <option>Semestre 3</option>
        <option>Semestre 4</option>
        <option>Semestre 5</option>
    </select>
    <select name="semestre-select" id="semestre-select">
        <option>Math</option>
        <option>Anglais</option>
        <input id="input-numbergr3" type="number" min="1" max="6" step="0.5">
        <button type="submit">+</button>
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
    </select>
    <table id="moyenne" style="display: inline-block; border-collapse: collapse;">
        <tr>
            <td style="width: 79px; height: 32px; border: 1px solid black;"></td>
        </tr>
    </table>
    </div>
    <div class="grp-4">
        <button id="branch">Culture G</button>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button type="submit">+</button>
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
    </div>
    <div class="grp-5">
        <button id="branch">TPI</button>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button type="submit">+</button>
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
    </div>

</div>

</body>
</html>