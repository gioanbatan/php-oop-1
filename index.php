<?php

/** Class movie
 * 
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

    function __construct(string $title = "", int $year = 0, array $genre = [], string $description = "", string $director = "", array $actors = [], string $publisher = "")
    // function __construct(string $title)
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>First OOP exercise</title>
</head>

<body>
    <?php
    $testMovie = new Movie();
    $testMovie->title = "I predatori dell'arca perduta";
    $testMovie->year = 1981;
    $testMovie->genre = ["action", "adventure"];
    $testMovie->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error assumenda repellat at accusantium quisquam laborum nobis earum omnis temporibus dolore adipisci quis iste, veniam quos nisi id magnam nostrum ipsam.";
    $testMovie->director = "Steven Spielberg";
    $testMovie->actors = ["Harrison Ford", "Karen Allen", "John Rhys-Davies"];
    $testMovie->publisher = "LucasFilm";

    echo $testMovie->showAll();
    ?>
</body>

</html>