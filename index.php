<?php
include __DIR__ . '/data/Movies.php';
include __DIR__ . '/models/Movie.php';






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid bg-dark">

        <!-- Header -->
        <section>
            <div class="container">
                <header class="d-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="text-danger text-uppercase">BoolFlix</h1>
                    </div>
                    <input type="text" placeholder="Cerca qui..." />
                </header>
            </div>
        </section>
        <!-- Main -->
        <section>
            <div>
                <section class="container-fluid">
                    <div class="row gy-3">

                        <?php foreach ($movies as $movie) :
                            $movie_obj = new Movie($movie['original_title'], $movie['original_language'], $movie['poster_path'], $movie['vote_average']);
                        ?>
                            <div class="col-3">
                                <div class="card bg-dark">
                                    <div class="p-2">
                                        <img src="<?= $movie_obj->poster_path ?>" class="card-img-top" alt="<?= $movie_obj->original_title ?>" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-white"><?= $movie_obj->original_title ?></h5>
                                        <p class="text-white"><strong>Original-language:</strong> <?= $movie_obj->original_language ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </section>
            </div>
        </section>
    </div>
</body>

</html>