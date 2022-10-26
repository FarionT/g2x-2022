<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet" />
        <link href="indexstyle10.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>G2X 2022</title> 
        <style>
            body{background-image: url("src/bg-website-landing-page.png"); background-size: 1600px;}
        </style>
    </head>
    <body>
        <div class="container-fluid justify-content-center m-0 p-0">
            <header>
                <?php require_once('header.php'); ?>
            </header>
            <div id="judul" class="mt-5">
                <div class="d-flex flex-xl-column flex-row mb-xl-0 mb-3">
                    <h1 class="mb-0" id="judul-welcome">WELCOME TO&nbsp;</h1>
                    <h1 class="mt-0" id="judul-g2x">G2X</h1> <br />
                </div>
                <p class="mb-0">Copywriting Copywriting Copywriting</p>
                <p class="mt-0" style="margin-bottom: 100px;">Copywriting Copywriting Copywriting</p>
                <a href="#judulsubjudul" id="judul-button"><img class="button-logo" src="src/index/awan_start2.png" /></a>
            </div>
            <div class="d-flex flex-column align-items-center mb-5">
                <h2 id="judulsubjudul">G2X</h2>
                <p class="mb-0">Copywriting Copywriting Copywriting</p>
                <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-lg-around">
                <div id="games">
                    <img src="src/index/gameboy.png" class="logo"/>
                    <a href="game_entries.php" class="button-arrow button-arrow-resp mb-5"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                    <h2 class="sub-judul">GAMES</h2>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
                    <a href="game_entries.php" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
                <div id="competitions">
                    <img src="src/index/piala.png" class="logo"/>
                    <a href="competition.php" class="button-arrow button-arrow-resp mb-5"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                    <h2 class="sub-judul">COMPETITIONS</h2>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
                    <a href="competition.php" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
                <div id="webinar">
                    <img src="src/index/laptop.png" class="logo"/>
                    <a href="webinar.php" class="button-arrow button-arrow-resp mb-5"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                    <h2 class="sub-judul">WEBINAR</h2>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
                    <a href="webinar.php" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br />
            <h2 class="button-arrow text-center game-entries-def mb-5">GAME ENTRIES →</h2>
            <h2 class="button-arrow text-center game-entries-resp mb-5">GAME ENTRIES</h2>
            <div class="body-slider">
                <div class="d-flex justify-content-xl-center game-entries-div">
                    <button id="button-arrow-left" class="button-game-entries"><img src="src/index/arrow_left.png" class="logo-arrow"/></button>
                    <div class="game-entries-1 d-flex flex-xl-wrap w-75"> 
                        <div id="game-entries-box-1" class="game-entries-box mb-5 me-xl-5">Slide 1</div>
                        <div id="game-entries-box-2" class="game-entries-box ms-xl-0 mb-5">Slide 3</div>
                        <div id="game-entries-box-3" class="game-entries-box ms-xl-5">Slide 5</div>
                        <div id="game-entries-box-4" class="game-entries-box mb-5 me-xl-5">Slide 2</div>
                        <div id="game-entries-box-5" class="game-entries-box ms-xl-0 mb-5">Slide 4</div>
                        <div id="game-entries-box-6" class="game-entries-box ms-xl-5">Slide 6</div>
                    </div>
                    <button id="button-arrow-right" class="button-game-entries"><img src="src/index/arrow_right.png" class="logo-arrow"/></button>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <h2 class="button-arrow text-center mt-5 mb-3">MEDIA PARTNERS</h2>
            <div class="d-flex justify-content-center">
                <div class="footer-box me-3"></div>
                <div class="footer-box me-3"></div>
                <div class="footer-box"></div>
                <div class="footer-box ms-3"></div>
            </div>
            <h2 class="button-arrow text-center mt-5 mb-3">SPONSORS</h2>
            <div class="d-flex justify-content-center">
                <div class="footer-box me-3"></div>
                <div class="footer-box me-3"></div>
                <div class="footer-box"></div>
                <div class="footer-box ms-3"></div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <?php require_once('footer.php'); ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="javaindex3.js"></script>
    </body>
</html>