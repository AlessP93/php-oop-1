<?php

class Movie {
    public $title;
    public $genre;
    public $director;
    public $year;
    public $actor;
    public $country;

    public function __construct($_title, $_actor, $_director, $_year)
    {
        $this->title = $_title;
        $this->actor = $_actor;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function getYear() {
        if($this->year == '2022') {
            return $this->year + 10;
        }
        return false;
    }
}

?>