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