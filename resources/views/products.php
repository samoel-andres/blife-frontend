<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blife - products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="public/css/navbar.css" rel="stylesheet">
    <link href="public/css/card.css" rel="stylesheet">
</head>

<body class="overflow-x-hidden">
    <!-- navbar -->
    <?php require 'resources/layouts/navbar.php' ?>

    <!-- carousel -->
    <?php require 'resources/layouts/carousel.php' ?>
    ""
    <!-- content -->
    <div class="row justify-content-center pt-5 mb-5">
        <!-- cards (x4) -->
        <?php
        for ($i = 0; $i < 4; $i++) {
            include 'resources/layouts/cards.php';
        }
        ?>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>