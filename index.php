<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet" />
        <link href="indexstyle3.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <title>G2X 2022</title> 
    </head>
    <body>
        <div class="container">
           <?php require_once('header.html'); ?>
            <div id="judul" class="mt-5">
                <div class="d-flex flex-md-column flex-row mb-md-0 mb-3">
                    <h1 class="mb-0" id="judul-welcome">WELCOME TO&nbsp;</h1>
                    <h1 class="mt-0" id="judul-g2x">G2X</h1> <br />
                </div>
                <p class="mb-0">Copywriting Copywriting Copywriting</p>
                <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
                <button href="" id="judul-button">START</button>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br />
            <div class="d-flex flex-column align-items-center mb-5">
                <h2>G2X</h2>
                <p class="mb-0">Copywriting Copywriting Copywriting</p>
                <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-md-around">
                <div id="games">
                    <button class="button-arrow button-arrow-resp mb-5">→</button>
                    <h2>GAMES</h2>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
                    <button class="button-arrow button-arrow-def">→</button>
                </div>
                <div id="competitions">
                    <button class="button-arrow button-arrow-resp mb-5">→</button>
                    <h2>COMPETITIONS</h2>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
                    <button class="button-arrow button-arrow-def">→</button>
                </div>
                <div id="webinar">
                    <button class="button-arrow button-arrow-resp mb-5">→</button>
                    <h2>WEBINAR</h2>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 mb-5">Copywriting Copywriting Copywriting</p>
                    <button class="button-arrow button-arrow-def">→</button>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br /><br /><br />
            <br /><br /><br />
            <h2 class="button-arrow text-center game-entries-def mb-5">GAME ENTRIES →</h2>
            <h2 class="button-arrow text-center game-entries-resp mb-5">GAME ENTRIES</h2>
            <div class="body-slider">
                <div id="slider" class="slider d-flex justify-content-md-around game-entries-div">
                    <button class="button-game-entries align-self-center">&lt</button>
                    <div class="wrapper">
                        <div id="slides" class="slides game-entries-1 d-flex justify-content-md-around mb-5"> 
                            <div class="slide game-entries-box mb-5 mb-md-0 me-md-5">Slide 1</div>
                            <div class="slide game-entries-box mb-5 mb-md-0">Slide 2</div>
                            <div class="slide game-entries-box ms-md-5">Slide 3</div>
                        </div>
                        <div id="game-entries-2">
                            <div class="game-entries-box me-5"></div>
                            <div class="game-entries-box"></div>
                            <div class="game-entries-box ms-5"></div>
                        </div>
                    </div>
                    <a id="prev" class="control prev"></a>
                    <a id="next" class="control next"></a>
                    <button class="button-game-entries align-self-center">&gt</button>
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
            <div class="d-flex flex-column align-items-center">
                <h2>CONTACT US</h2>
                <div class="d-flex">
                    <button id="button-contact"></button>
                    <p class="ms-3 mb-0">GDCUMN</p>
                </div>
                <br />
                <p>&copy 2022 G2X. All rights reserved.</p>
            </div>
        </div>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="javaindex1.js"></script>
    </body>
</html>