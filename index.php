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


    public function print()
    {
        $title =  $this->original_title;
        echo "<strong>Il titolo è: </strong> <br>" .  $title;
    }
}

$movie1 = new Movie("The Lord of the Rings: The Fellowship of the Ring", 'en', '/vRQnzOn4HjIMX4LBq9nHhFXbsSu.jpg', 8.4);

// $movie1 = new Movie;
// $movie1->original_title = 'The Lord of the Rings: The Fellowship of the Ring';
// $movie1->original_language = 'en';
// $movie1->poster_path = '/vRQnzOn4HjIMX4LBq9nHhFXbsSu.jpg';
// $movie1->vote_average = 8.4;
var_dump($movie1);

$movie2 = new Movie('The Lord of the Rings: The Two Towers', 'en', '/fVKewiBPcY2dQujYEsnQmQ7lfRZ.jpg', 8.4);
// $movie2 = new Movie;
// $movie2->original_title = 'The Lord of the Rings: The Two Towers';
// $movie2->original_language = 'en';
// $movie2->poster_path = '/fVKewiBPcY2dQujYEsnQmQ7lfRZ.jpg';
// $movie2->vote_average = 8.4;
var_dump($movie2);

$movie2->print();
