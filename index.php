<?php

require_once __DIR__ . "/Models/Movie.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

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

    <br>

    <?php
    $batmanMovie = new Movie();
    $batmanMovie->title = "Batman";
    $batmanMovie->year = 1989;
    $batmanMovie->genre = ["action", "adventure"];
    $batmanMovie->description = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit debitis saepe, maxime veniam, commodi dolores ipsam id vero odit iste ut nostrum. Aperiam quasi, quis neque ab accusantium nulla voluptates?";
    $batmanMovie->director = "Tim Burton";
    $batmanMovie->actors = ["Michael Keaton", "Jack Nicholson", "Kim Basinger"];
    $batmanMovie->publisher = "Warner Bros.";

    echo $batmanMovie->showAll();
    ?>
</body>

</html>