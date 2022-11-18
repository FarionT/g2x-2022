<?php
    $alt = "../";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../src/g2x_logo.png">
    <title>G2X 2022 - Competition</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../stylecomp4.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- link font -->
    <!-- varela -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <!-- dosis -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    <style>
        body{background-image: url("../src/bg-website-game-page.png");}
        .font_content{
            font-family: 'Varela', sans-serif;
            color: #0A194F;
        }
        
        .font_title{
            font-family: 'Dosis', sans-serif;
            color: #0A194F;
        }
    </style>
</head>
<body id="competition">
    <header>
        <?php include("../header.php"); ?>
    </header>
    <div class="container col col-lg-10">
        <img src="src/medpar_sponsor/headline.jpg"/>
        <img src="src/medpar_sponsor/headline2.jpg"/>
    </div>
    <footer>
        <?php include("../footer.php"); ?>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>