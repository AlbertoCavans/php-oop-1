<?php

class Production {

    public $title;
    public $language;
    public $rating;

    function __construct(
        string $title, 
        string $language, 
        int $rating
        ) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    public function set_title($title) {
        if (empty($title))
        return;
    $this->title = ucfirst($title);
    }
    public function get_title($title) { 
        return $this->title;
}

}


$film = new Production("Film", "EN", 7);
$serie_TV = new Production("Serie TV", "FR", 8);

/* var_dump($serie_TV);
var_dump($film); */

$productions = [
    $film,
    $serie_TV
];

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
        </ul>

    <?php endforeach; ?>
</body>
</html>
