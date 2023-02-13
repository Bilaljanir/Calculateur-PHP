<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./grade.css">
    <title>Document</title>
</head>
<body>


<div class="bdy">
<h1>Calculateur de moyenne </h1>
<div class="haut">
    <p>Enter Your grade</p>
    <p>Your average</p>
    <p>Your final average</p>
</div>


    <div class="grp-1">
        <button id="branch">École pro</button>
        <div class="selectgr1">
        <select name="semestre-select" id="semestre-select2">
        </div>
        </select>
        <label for="input-number"></label>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button id="add-grade">+</button>
        <button id="remove-grade">-</button>
    </div>

    <div class="grp-2">
        <button id="branch">Cours Inter</button>
        <div class="selectgr1">
            <select name="semestre-select" id="semestre-select2">
            </select>
        </div>
        <label for="input-number"></label>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button id="add-grade">+</button>
        <button id="remove-grade">-</button>
    </div>
    <div class="grp-3">
        <button id="branch">Compétence Élargie</button>
        <select name="semestre-select" id="semestre-select">
            <option>Semestre 1</option>
            <option>Semestre 2</option>
            <option>Semestre 3</option>
            <option>Semestre 4</option>
            <option>Semestre 5</option>

        </select>

        <select name="semestre-select" id="semestre-select5">

        </select>
        <label for="input-number"></label>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button id="add-grade">+</button>
        <button id="remove-grade">-</button>
    </div>
    <div class="grp-4">
        <button id="branch">Culture G</button>
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


        </select>
        <label for="input-number"></label>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button id="add-grade">+</button>
        <button id="remove-grade">-</button>
    </div>
    <div class="grp-5">
        <button id="branch">TPI</button>
        <div class="selectgr1">
            <select name="semestre-select" id="semestre-select2">
            </select>
        </div>
        <label for="input-number"></label>
        <input id="input-number" type="number" min="1" max="6" step="0.5">
        <button id="add-grade">+</button>
        <button id="remove-grade">-</button>
    </div>
</div>
</body>
</html>
