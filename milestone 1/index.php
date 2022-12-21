<?php 
include __DIR__ . '/db/data.php';
include __DIR__ . '/partials/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Milestone 1</title>
</head>
<body>
<main>
    <div class="main-div container-fluid">
        <div id="discs-container" class="col-10 discs col-8 m-auto row"><?php
            foreach ($arr_discs as $discs) { ?>
                <div class="disc text-center card cardd rounded-0 p-3 mt-4 ms-4 col-2">
                    <img src="<?= $discs['poster'] ?>" alt="<?= $discs['title'] ?>">
                    <h6 class="text-uppercase font-weight-bold text-light"><strong><?= $discs['title'] ?></strong></h6>
                    <div class="author"><small><?= $discs['author'] ?></small></div>
                    <div class="year"><small><?= $discs['year'] ?></small></div>
                </div><?php

            } ?>
        </div>
    </div>
</main>
    
</body>
</html>