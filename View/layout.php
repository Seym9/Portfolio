<!doctype html>
<html lang="fr">
<head>
    <!--- Basics -->
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Viewport -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/portfolio.css">
    <?php if (isset($_GET['p']) && ($_GET['p'] === 'project' || 'admin')): ?>
    <link rel="stylesheet" href="../public/css/admin.css">
    <?php endif; ?>
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poppins&display=swap" rel="stylesheet">
    <!-- favicon-->
    <link rel="stylesheet" href="">
</head>

<nav id="sticker">
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <ul class="nav-links">
        <li><a href="#about" class="smoothscroll">About</a></li>
        <li><a href="#portfolio" class="smoothscroll">Projects</a></li>
        <li><a href="#contact" class="smoothscroll">Contact</a></li>
    </ul>
</nav>

<?= $content; ?>


<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8457fb3c99.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="../public/js/app.js"></script>
</html>
