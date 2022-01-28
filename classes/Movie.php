<?php 
class Movie {
    public $title;
    public $genre;
    public $director;
    public $country;
    public int $year;

    public function __construct($_title, $_genre, $_director, $_country, $_year) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->country = $_country;
        $this->year = $_year;
    }

    public function movieInfo(){
        return "<em>{$this->genre}</em> <br> 
                {$this->director} <br>
                {$this->country} <br>
                {$this->year}";
    }
}