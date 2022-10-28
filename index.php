<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="src/g2x_logo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet" />
        <link href="indexstyle16.css" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>G2X 2022</title> 
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
            body{background-image: url("src/bg-website-landing-page.png"); background-size: 1600px;}
            .font_content{font-family: 'Varela', sans-serif;}
        
            .font_title{
                font-family: 'Dosis', sans-serif;
            }
        </style>
    </head>
    <body id="index">
        <div class="container-fluid justify-content-center m-0 p-0">
            <header>
                <?php require_once('header.php'); ?>
            </header>
            <div id="judul" class="mt-5" data-aos="fade-down">
                <div id="judul-text" class="d-flex mb-xl-0 mb-3">
                    <h1 class="mb-0 font_title" id="judul-welcome">WELCOME TO&nbsp;</h1>
                    <h1 class="mt-0 font_title" id="judul-g2x">G2X</h1> <br />
                </div>
                <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                <p class="mt-0 font_content" style="margin-bottom: 100px;">Copywriting Copywriting Copywriting</p>
                <a href="#judulsubjudul" id="judul-button"><img class="button-logo" src="src/index/awan_start2.png" /></a>
            </div>
            <div class="d-flex flex-column align-items-center mb-5" data-aos="fade-down">
                <h2 id="judulsubjudul" class="font_title">G2X</h2>
                <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                <p class="mt-0 mb-5 font_content">Copywriting Copywriting Copywriting</p>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-lg-around" data-aos="fade-down">
                <div id="games">
                    <img src="src/index/gameboy.png" class="logo"/>
                    <a href="game_entries.php" class="button-arrow button-arrow-resp mb-5"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                    <h2 class="sub-judul font_title">GAMES</h2>
                    <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5 font_content">Copywriting Copywriting Copywriting</p>
                    <a href="game_entries.php" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
                <div id="competitions">
                    <img src="src/index/piala.png" class="logo"/>
                    <a href="competition.php" class="button-arrow button-arrow-resp mb-5"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                    <h2 class="sub-judul font_title">COMPETITIONS</h2>
                    <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5 font-content">Copywriting Copywriting Copywriting</p>
                    <a href="competition.php" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
                <div id="webinar">
                    <img src="src/index/laptop.png" class="logo"/>
                    <a href="webinar.php" class="button-arrow button-arrow-resp mb-5"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                    <h2 class="sub-judul font_title">WEBINAR</h2>
                    <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5 font_content">Copywriting Copywriting Copywriting</p>
                    <a href="webinar.php" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br />
            <h2 class="button-arrow text-center game-entries-def mb-5 font_title" data-aos="fade-down">GAME ENTRIES →</h2>
            <h2 class="button-arrow text-center game-entries-resp mb-5 font_title" data-aos="fade-down">GAME ENTRIES</h2>
            <div class="body-slider" data-aos="fade-down">
                <div class="game-entries-div">
                    <button id="button-arrow-left" class="button-game-entries"><img src="src/index/arrow_left.png" class="logo-arrow"/></button>
                    <div class="game-entries-1"> 
                        <a href="download.php"><img id="game-entries-box-1" class="game-entries-box mb-5" src="src/game_placeholder.png"/></a>
                        <div id="game-entries-box-2" class="game-entries-box mb-5">Slide 2</div>
                        <div id="game-entries-box-3" class="game-entries-box mb-5">Slide 3</div>
                        <div id="game-entries-box-4" class="game-entries-box mb-5 outside">Slide 4</div>
                        <div id="game-entries-box-5" class="game-entries-box mb-5 outside">Slide 5</div>
                        <div id="game-entries-box-6" class="game-entries-box mb-5">Slide 6</div>
                        <div id="game-entries-box-7" class="game-entries-box mb-5">Slide 7</div>
                        <div id="game-entries-box-8" class="game-entries-box mb-5">Slide 8</div>
                        <div id="game-entries-box-9" class="game-entries-box mb-5 outside">Slide 9</div>
                    </div>
                    <button id="button-arrow-right" class="button-game-entries"><img src="src/index/arrow_right.png" class="logo-arrow"/></button>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <h2 class="button-arrow text-center mt-5 mb-3 font_title" data-aos="fade-down">MEDIA PARTNERS</h2>
            <div class="d-flex justify-content-center" data-aos="fade-down">
                <div class="mx-2">
                    <img src="src/medpar_sponsor/Logo_BinusGDC.PNG" class="footer-box"/>
                </div>
                <div class=" mx-2">
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="footer-box"/>
                </div>
                <div class="mx-2">
                    <img src="src/medpar_sponsor/Logo_jcafest.png" class="footer-box"/>
                </div>
                <div class="mx-2">
                    <img src="src/medpar_sponsor/Logo_MXM.png" class="footer-box"/>
                </div>
                <div class="mx-2">
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="footer-box"/>
                </div>
            </div>
            <h2 class="button-arrow text-center mt-5 mb-3 font_title" data-aos="fade-down">SPONSORS</h2>
            <div class="d-flex justify-content-center" data-aos="fade-down">
                <div class="mx-5 d-flex justify-content-start">
                    <img src="src/medpar_sponsor/Logo_Mandiri-Utama-Finance.png" class="footer-box" style="width:auto"/>
                </div>
                <div class="mx-5 d-flex justify-content-end">
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="footer-box"/>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <?php require_once('footer.php'); ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="javaindex6.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>