<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/proyectos.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="icon" type="image/PNG" href="img/logo_home_ssm.svg">
    
    <script src="https://kit.fontawesome.com/cedfbf939d.js" crossorigin="anonymous"></script>
    <title>PROYECTOS | Sintered Stone</title>
</head>
<body>


<?php
        include "headerG.php";
?>
<?php
        include "header.php";
?>
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img class="imgS" src="img/ARISTON_WHITE_LANDING_RENDER.png" alt="Slide 1"></div>
            <div class="slide"><img class="imgS" src="img/seccion_beneficios_03.png" alt="Slide 2"></div>
            <div class="slide"><img class="imgS" src="img//seccion_beneficios_01.png" alt="Slide 3"></div>
            <div class="slide"><img class="imgS" src="img/seccion_beneficios_03.png" alt="Slide 4"></div>
            <div class="slide"><img class="imgS" src="img/ARISTON_WHITE_LANDING_RENDER.png" alt="Slide 5"></div>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <?php
    include "footer.php";
?>

    <script src="js/script.js"></script>
</body>
</html>