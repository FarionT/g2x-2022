<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="src/g2x_logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    <title>G2X 2022</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
</head>
<body id="index">
    <div class="container-fluid m-0 p-0">
        <header>
            <?php 
            if(empty($alt)){
                $alt = "";
            }
            include('header.php'); 
            ?>
        </header>

        <div id="index-web">
            <div id="main-title" class="d-flex mt-5 justify-content-end">
                <div class="landing-title" data-aos="fade-down">
                    <h1 class="font_title my-0" style="font-size: 48pt;">WELCOME TO&nbsp;</h1>
                    <h1 class="font_title my-0" style="font-size: 84pt;">G2X</h1>
                    <p class="mb-5 ps-2 font_content" style="font-size: 11pt;">
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting
                    </p>
                    <a href="#content-island" id="title-button">
                        <img class="button-logo" src="src/index/awan_start2.png" width="200px" />
                    </a>
                </div>
            </div>

            <div id="sub-title" class="text-center" data-aos="fade-down">
                <h1 class="font_title mb-3" style="font-size: 32pt;">G2X</h1>
                <p class="mb-5 ps-2 font_content" style="font-size: 10pt;">
                    Copywriting Copywriting Copywriting <br />
                    Copywriting Copywriting Copywriting
                </p>
            </div>

            <div id="content-island" class="text-center" data-aos="fade-down">
                <div class="row">
                    <div class="col-4 pe-3 content-container content-left">
                        <h1 class="font_title">GAMES</h1>
                        <p class="mb-5 font_content">
                            Copywriting Copywriting Copywriting <br />
                            Copywriting Copywriting Copywriting <br />
                            Copywriting Copywriting Copywriting
                        </p>
                        <a href="#game-direct">
                            <img src="src/index/awan_arrow1.png" width="96px" />
                        </a>
                    </div>
                    <div class="col-4 px-3 content-container content-center">
                        <h1 class="font_title">COMPETITIONS</h1>
                        <p class="mb-5 font_content">
                            Copywriting Copywriting Copywriting <br />
                            Copywriting Copywriting Copywriting <br />
                            Copywriting Copywriting Copywriting
                        </p>
                        <a href="competition">
                            <img src="src/index/awan_arrow1.png" width="96px" />
                        </a>
                    </div>
                    <div class="col-4 ps-3 content-container content-right">
                        <h1 class="font_title">WEBINAR</h1>
                        <p class="mb-5 font_content">
                            Copywriting Copywriting Copywriting <br />
                            Copywriting Copywriting Copywriting <br />
                            Copywriting Copywriting Copywriting
                        </p>
                        <a href="webinar">
                            <img src="src/index/awan_arrow1.png" width="96px" />
                        </a>
                    </div>
                </div>
            </div>

            <div id="game-cloud" class="text-center" data-aos="fade-down">
                <h1 id="game-direct" class="font_title" style="font-size: 72pt;">COMING SOON!</h1>
            </div>

            <div id="media-sponsor" class="text-center" data-aos="fade-down">
                <h1 class="font_title mb-4" style="font-size: 32pt;">MEDIA PARTNERS</h1>
                <div class="d-inline">
                    <img src="src/medpar_sponsor/Logo_BinusGDC.PNG" class="mx-2" width="120px"/>
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="mx-2" width="120px"/>
                    <img src="src/medpar_sponsor/Logo_jcafest.png" class="mx-2" width="120px"/>
                    <img src="src/medpar_sponsor/Logo_MXM.png" class="mx-2" width="120px"/>
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="mx-2" width="120px"/>
                </div>

                <h1 class="font_title mt-5 mb-4" style="font-size: 32pt;">SPONSORS</h1>
                <div class="d-inline">
                    <img src="src/medpar_sponsor/Logo_Mandiri-Utama-Finance.png" class="mx-5" width="250px"/>
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="mx-5" width="120px"/>
                </div>
            </div>
        </div>

        <div id="index-mobile">
            <div id="main-title" class="text-center mt-3">
                <div class="landing-title" data-aos="fade-down">
                    <h1 class="font_title my-0" style="font-size: 24pt;">WELCOME TO G2X</h1>
                    <p class="mb-5 ps-2 font_content" style="font-size: 8pt;">
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting
                    </p>
                </div>
            </div>

            <div id="sub-title" class="text-center" data-aos="fade-down">
                <h1 class="font_title mb-3" style="font-size: 32pt;">G2X</h1>
                <p class="mb-5 ps-2 font_content" style="font-size: 10pt;">
                    Copywriting Copywriting Copywriting <br />
                    Copywriting Copywriting Copywriting
                </p>
            </div>

            <div id="content-island">
                <div id="content-up" class="content-container text-center" data-aos="fade-down">
                    <a href="#game-direct">
                        <img src="src/index/awan_arrow1.png" />
                    </a>
                    <h1 class="font_title">GAMES</h1>
                    <p class="mb-5 pb-5 font_content">
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting
                    </p>
                </div>

                <div id="content-center" class="content-container text-center" data-aos="fade-down">
                    <a href="competition">
                        <img src="src/index/awan_arrow1.png" />
                    </a>
                    <h1 class="font_title">COMPETITIONS</h1>
                    <p class="mb-5 pb-5 font_content">
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting
                    </p>
                </div>

                <div id="content-down" class="content-container text-center" data-aos="fade-down">
                    <a href="webinar">
                        <img src="src/index/awan_arrow1.png" />
                    </a>
                    <h1 class="font_title">WEBINAR</h1>
                    <p class="mb-5 pb-5 font_content">
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting <br />
                        Copywriting Copywriting Copywriting
                    </p>
                </div>
            </div>

            <div id="game-cloud" class="text-center" data-aos="fade-down">
                <h1 id="game-direct" class="font_title" style="font-size: 32pt;">COMING SOON!</h1>
            </div>

            <div id="media-sponsor" class="text-center" data-aos="fade-down">
                <h1 class="font_title mb-4" style="font-size: 24pt;">MEDIA PARTNERS</h1>
                <div class="d-inline">
                    <img src="src/medpar_sponsor/Logo_BinusGDC.PNG" class="mx-2" width="42px"/>
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="mx-2" width="42px"/>
                    <img src="src/medpar_sponsor/Logo_jcafest.png" class="mx-2" width="42px"/>
                    <img src="src/medpar_sponsor/Logo_MXM.png" class="mx-2" width="42px"/>
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="mx-2" width="42px"/>
                </div>

                <h1 class="font_title mt-5 mb-4" style="font-size: 24pt;">SPONSORS</h1>
                <div class="d-inline">
                    <img src="src/medpar_sponsor/Logo_Mandiri-Utama-Finance.png" class="mx-5" width="100px"/>
                    <img src="src/medpar_sponsor/Logo_eventapaaja.png" class="mx-5" width="42px"/>
                </div>
            </div>
        </div>

        <footer>
            <?php include("footer.php"); ?>
        </footer>
    </div>

    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
        crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>