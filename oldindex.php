<?php 
require_once('connect.php');

$query = "SELECT * FROM game_entries";
$data = $key->query($query);

$query = "SELECT COUNT(*) AS count FROM game_entries";
$count = $key->query($query);
$countRow = $count->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="src/g2x_logo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" rel="stylesheet" />
        <link href="indexstyle18.css" rel="stylesheet" />
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
            #index{
                background-image: url('src/backgrounds/landing-page-pulau.jpg')
            }
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
    <body id="index">
        <div class="container-fluid justify-content-center m-0 p-0">
            <header>
                <?php 
                    if(empty($alt)){
                        $alt = "";
                    }
                    require_once('header.php'); ?>
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
            <div id="trio-judul-atas" class="mb-0" data-aos="fade-down">
                <h1 id="judulsubjudul" class="font_title">G2X</h1>
                <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
                <p class="mt-0 mb-0 font_content">Copywriting Copywriting Copywriting</p>
            </div>
            <div id="trio" class="d-flex flex-column flex-lg-row justify-content-lg-center" data-aos="fade-down">
                <div id="games">
                    <img src="src/index/gameboy.png" class="logo-trio logo1 img-fluid"/>
                    <div class="pulau d-flex justify-content-center">
                        <a href="<?=$alt?>game_entries" class="button-arrow button-arrow-resp align-items-center d-flex justify-content-center">
                            <img class="img-button-arrow mx-auto my-auto" src="src/index/awan_arrow1.png" />
                        </a>
                    </div>
                    <h1 class="sub-judul font_title">GAMES</h1>
                    <p class="mb-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <a href="game_entries" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
                <div id="competitions">
                    <img src="src/index/piala.png" class="logo-trio logo2 img-fluid"/>
                    <div class="pulau d-flex justify-content-center">
                        <a href="<?=$alt?>competition" class="button-arrow button-arrow-resp align-items-center d-flex justify-content-center">
                            <img class="img-button-arrow  mx-auto my-auto" src="src/index/awan_arrow1.png" />
                        </a>
                    </div>                    
                    <h1 class="sub-judul font_title">COMPETITIONS</h1>
                    <p class="mb-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <a href="competition" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
                <div id="webinar">
                    <img src="src/index/laptop.png" class="logo-trio logo3"/>
                    <div class="pulau d-flex justify-content-center">
                        <a href="<?=$alt?>webinar" class="button-arrow button-arrow-resp align-items-center d-flex justify-content-center">
                            <img class="img-button-arrow  mx-auto my-auto" src="src/index/awan_arrow1.png" />
                        </a>
                    </div>
                    <h1 class="sub-judul font_title">WEBINAR</h1>
                    <p class="mb-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <p class="mb-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <p class="mt-0 font_content trio-content">Copywriting Copywriting Copywriting</p>
                    <a href="webinar" class="button-arrow button-arrow-def"><img class="img-button-arrow" src="src/index/awan_arrow1.png" /></a>
                </div>
            </div>
            <h2 class="button-arrow text-center game-entries-def mb-5 font_title" data-aos="fade-down">GAME ENTRIES →</h2>
            <h2 class="button-arrow text-center game-entries-resp mb-5 font_title" data-aos="fade-down">GAME ENTRIES</h2>
            <div id="game-entries-all" class="body-slider" data-aos="fade-down">
                <div class="game-entries-div mx-1">
                    <button id="button-arrow-left" class="button-game-entries"><img src="src/index/arrow_left.png" class="logo-arrow"/></button>
                    <div class="game-entries-1" style="left: 0px;">
                    <?php 
                    for ($i = 0; $i < $countRow['count']; $i++) {
                        $dataRow = $data->fetch(PDO::FETCH_ASSOC);
                    ?>
                        <?php 
                        if ($i == 0 || $i == 4) {
                        ?>
                            <a href="game?game=<?= $dataRow['id'] ?>"><img id="game-entries-box-<?= $n = $i + 1 ?>" class="game-entries-box mb-5 ms-0" src="src/game_placeholder.png"/></a>
                        <?php 
                        } else if ($i == 3 || $i == 7) {
                        ?>
                            <a href="game?game=<?= $dataRow['id'] ?>"><img id="game-entries-box-<?= $n = $i + 1 ?>" class="game-entries-box mb-5 outside" src="src/game_placeholder.png"/></a>
                        <?php 
                        } else {
                        ?>
                            <a href="game?game=<?= $dataRow['id'] ?>"><img id="game-entries-box-<?= $n = $i + 1 ?>" class="game-entries-box mb-5" src="src/game_placeholder.png"/></a>
                        <?php 
                        }
                        ?>
                    <?php 
                    }
                    ?>
                    </div>
                    <button id="button-arrow-right" class="button-game-entries"><img src="src/index/arrow_right.png" class="logo-arrow"/></button>
                </div>
            </div>
            <h2 class="button-arrow text-center mt-5 mb-3 font_title" data-aos="fade-down">MEDIA PARTNERS</h2>
            <div id="media-partners-div" class="d-flex justify-content-center" data-aos="fade-down">
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
            <br /><br /><br />
            <h2 class="button-arrow text-center mb-3 font_title" data-aos="fade-down" id="sponsors">SPONSORS</h2>
            <div class="d-flex justify-content-center" data-aos="fade-down" >
                <div class="mx-5 d-flex justify-content-start">
                    <img src="src/medpar_sponsor/Logo_Mandiri-Utama-Finance.png" class="footer-box" style="width:auto"/>
                </div>
                <div class="mx-5 d-flex justify-content-end">
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="footer-box"/>
                </div>
            </div>
            <?php require_once('footer.php'); ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="javaindex10.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>

<?php 
require_once('close.php');
?>