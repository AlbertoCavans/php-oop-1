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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1 class="m-4">Movies & TVSeries cards</h1>
<div class="my-4 container d-flex justify-content-center">

    <?php foreach ($productions as $production): ?>
        <div class="m-3 card w-25">
        <ul>
            <li>Title: <?= $production->title ?></li>
            <li>Language: <?= $production->language ?></li>
            <li>Rating: <?= $production->rating ?></li>
            <li>Genre: <?= $production->genre->name ?></li>
            <li>Desc: <?= $production->genre->description ?></li>
            <li>Profit: <?= $production->movie->profit ?></li>
            <li>Duration: <?= $production->movie->duration ?></li>
            <li>Number seasons: <?= $production->tvserie->nseasons ?></li>
        </ul>
        </div>
      

    <?php endforeach; ?>
    </div>
</body>
</html>
