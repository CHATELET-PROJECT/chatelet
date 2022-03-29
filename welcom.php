<?php 
    $login ="Wejdene";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Chatelet Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <div class="container-first">
        <h1><span>Bienvenue </span><span>sur </span><span>Le </span><span>Chatelet <?php echo $login; ?></span></h1>
        <div class="container-btns">
            <button class="btn-first b1">Discover</button>
            <button class="btn-first b2">Contact</button>
        </div>
    </div>

    <img src="ressources/canadian-maple-leaf-brands.svg" class="logo">


    <ul class="medias">
        <li class="bulle"><img src="ressources/fb.svg" class="logo-medias"></li>
        <li class="bulle"><img src="ressources/insta.svg" class="logo-medias"></li>
        <li class="bulle"><img src="ressources/yt.svg" class="logo-medias"></li>
        <li class="bulle"><img src="ressources/fb.svg" class="logo-medias"></li>
    </ul>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="app.js"></script>
</body>
</html>