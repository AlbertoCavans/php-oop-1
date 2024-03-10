<?php

class Movie {
    public $duration;
    public $profit;

    function __construct($duration, $profit) {
        $this->duration = $duration;
        $this->profit = $profit;
}
}