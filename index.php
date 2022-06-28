<?php
    require_once __DIR__ . '/classes/movie.php';
    
    $movies = [
        new Movie('Spiderman', 'Andrew Garfield', 'Sam Raimi','2020'),
        new Movie('Hustle', 'Adam Sandler', 'Jeremiah Zagar','2022')
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
</head>
<body>
    <h1>Film più visti</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
        <li>
            <h2><?php echo $movie->title; ?></h2>
            <h5><?php echo $movie->actor; ?></h5>
            <span><?php echo $movie->director; ?></span>
            <p>Anno: <?php echo $movie->year; ?></p>
            <?php 
                $anno = $movie->getYear();
                if ($anno) {
            ?>
            <p>Anno +10: <strong><?php echo $anno; ?></strong></p>
            <?php } ?>
        </li>
        <?php } ?>
    </ul>
</body>
</html>