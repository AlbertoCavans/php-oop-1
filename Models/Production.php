<?php
require_once __DIR__ ."/Genre.php";
require_once __DIR__ ."/Movie.php";

class Production {

    public $title;
    public $language;
    public $rating;
    public $genre;
    public $desc;
    public $movie;

    function __construct(
        string $title, 
        string $language, 
        int $rating,
        Genre $genre,
        Movie $movie,
        ) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
        $this->genre = $genre;
        $this->movie = $movie;
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