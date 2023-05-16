<?php
require_once __DIR__ . "/Models/Generi.php";
require_once __DIR__ . "/Models/Movie.php";
$variGeneri = new Generi(["cult", "action", "war"]);
$allmovies = [

    $movies1 = new Movie("Piter Pan", 1.45, $variGeneri, 66.30),
    $movies2 = new Movie("Matrix", 1.30, $variGeneri, 65.20),
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <div class="my-box container-fluid bg-success text-center">
        <h1>I NOSTRI FILM</h1>
        <div class="container mt-5 ">
            <div class="row pt-5">
                <div class="col bg-danger border border-5">
                    <?php foreach ($allmovies as $singleMovie) { ?>
                        <h2> <?php echo $singleMovie->titolo ?> </h2>
                        <p><?php echo $singleMovie->durata ?></p>
                        <p>
                            <?php foreach ($singleMovie->genere as $singleGenere) {
                                echo $singleGenere[rand(0, 2)];
                            } ?>
                        </p>
                        <p>
                            <?php echo $singleMovie->etaMinima ?>
                        </p>
                    <?php  } ?>
                </div>

            </div>
        </div>
    </div>
</body>

</html>