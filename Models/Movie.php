<?php

/** Class movie
 *
 * @author Giovanni Bassani 
 */
class Movie
{
    public $title;
    public $year;
    public $genre;
    public $description;
    public $director;
    public $actors;
    public $publisher;

/**
 * Description Class Movie contructor
 * 
 * @param {any} string$title=""
 * @param {any} int$year=0
 * @param {any} array$genre=[]
 * @param {any} string$description=""
 * @param {any} string$director=""
 * @param {any} array$actors=[]
 * @param {any} string$publisher=""
 * @returns {any}
 **/
    function __construct(string $title = "", int $year = 0, array $genre = [], string $description = "", string $director = "", array $actors = [], string $publisher = "")
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->description = $description;
        $this->director = $director;
        $this->actors = $actors;
        $this->publisher = $publisher;
    }


    function show()
    {
        return "hello";
    }

    function showAll()
    {
        $textMovie = "Title: $this->title Year: $this->year Genre:";

        foreach ($this->genre as $singleGenre) {
            $textMovie .= " $singleGenre";
        }

        $textMovie .= " Director: $this->director Actors:";

        foreach ($this->actors as $singleActor) {
            $textMovie .= " $singleActor";
        }

        $textMovie .= " Publisher: $this->publisher Description: $this->description";

        return $textMovie;
    }
}
