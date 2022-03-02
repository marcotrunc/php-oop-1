<?php
class Movie
{
    public $original_title;
    public $original_language;
    public $poster_path;
    public $vote_average;

    public function __construct($original_title, $original_language, $poster_path, $vote_average)
    {
        $this->original_title = $original_title;
        $this->original_language = $original_language;
        $this->poster_path = $poster_path;
        $this->vote_average = $vote_average;
    }


    function iterateVisible()
    {
        foreach ($this as $value) {
            print  $value . "<br>";
        }
    }
}
