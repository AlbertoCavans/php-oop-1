<?php
require_once __DIR__ ."/Models/Production.php";
require_once __DIR__ ."/DB/productions.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($productions as $production): ?>
        <ul>
            <li>Title: <?= $production->title ?></li>
            <li>Language: <?= $production->language ?></li>
            <li>Rating: <?= $production->rating ?></li>
            <li>Genre: <?= $production->genre->name ?></li>
            <li>Desc: <?= $production->genre->description ?></li>
        </ul>

    <?php endforeach; ?>
</body>
</html>
