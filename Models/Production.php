<?php
require_once __DIR__ ."/Genre.php";

class Production {

    public $title;
    public $language;
    public $rating;
    public $genre;

    function __construct(
        string $title, 
        string $language, 
        int $rating,
        Genre $genre
        ) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
        $this->genre = $genre;
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