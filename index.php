<?php 
// header("Content-Type: application, json");
require_once __DIR__ . "/classes/Movie.php";

$movies = 
[
    new Movie("The Reader", "Dramatic", "Stephen Daldry", "Germany", 2008),
    new Movie("The Father", "Dramatic", "Florian Zeller", "France", 2020),
    new Movie("Don't Look Up", "Comedy", "Adam McKay", "USA", 2021),
    new Movie("Beowulf", "Fantasy", "Robert Zemeckis", "UK", 2007),
    new Movie("Sinister", "Horror", "Scott Derrickson", "Canada", 2020),
    new Movie("The Hateful Eight", "Western", "Quentin Tarantino", "USA", 2015),
    new Movie("The Matrix", "Sci-Fi", "Andy e Larry Wachowski", "USA", 2020),
    new Movie("La La Land", "Musical", "Damien Chaselle", "USA", 2020)

];
// var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programmation</title>
</head>
<body>
    <h1>Top 10 Movies You Have To Watch At Least One Time In Your Life</h1>
        
    <?php foreach($movies as $movie) { ?>
    <!-- titolo film -->
    <h3>
        <?php echo $movie->title ?>
    </h3>

    <!-- info film -->
    <p>
        <?php echo $movie->movieInfo(); ?>
    </p>
    <?php } ?>

</body>
</html>