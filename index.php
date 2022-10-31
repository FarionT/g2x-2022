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
            include('header.php'); 
            ?>
        </header>

        <div id="index-web">
            <div id="main-title" class="d-flex mt-5 justify-content-end">
                <div class="landing-title" data-aos="fade-down">
                    <h1 class="font_title my-0" style="font-size: 48pt;">WELCOME TO&nbsp;</h1>
                    <h1 class="font_title my-0" style="font-size: 84pt;">G2X</h1>
                    <p class="mb-5 ps-2 font_content" style="font-size: 11pt;">
                        GDC Game Expo (G2X) merupakan acara tahunan <br/>
                        dari Game Development Club UMN <br/>
                        sebagai bagian dari proyek akhir kerja GDC.
                    </p>
                    <a href="#content-island" id="title-button">
                        <img class="button-logo" src="src/index/awan_start2.png" width="200px" />
                    </a>
                </div>
            </div>

            <div id="sub-title" class="text-center" data-aos="fade-down">
                <h1 class="font_title mb-3" style="font-size: 32pt;">G2X</h1>
                <p class="mb-5 ps-2 font_content" style="font-size: 10pt;">
                    GDC Game Expo (G2X) merupakan acara tahunan <br/>
                    dari Game Development Club UMN <br/>
                    sebagai bagian dari proyek akhir kerja GDC.
                </p>
            </div>

            <div id="content-island" class="text-center" data-aos="fade-down">
                <div class="row">
                    <div class="col-4 pe-3 content-container content-left">
                        <h1 class="font_title">GAMES</h1>
                        <p class="mb-5 font_content" style="text-align: center; font-size: 15px">
                        Lagi gabut? Ayoo telusuri, mainkan, dan vote berbagai
                        game-game menarik hasil peserta lomba G2X. Psst.. kalian
                        juga bisa dapat skkm minat & bakat juga loh kalau merekam
                        (syarat dan ketentuan berlaku).
                        </p>
                        <a href="#game-direct">
                            <img src="src/index/awan_arrow1.png" width="96px" />
                        </a>
                    </div>
                    <div class="col-4 px-3 content-container content-center">
                        <h1 class="font_title">COMPETITIONS</h1>
                        <p class="mb-5 font_content" style="text-align: center; font-size: 15px">
                        Ikut serta dalam berbagai kompetisi seperti character
                        design, environment design, ataupun story writing dan
                        menangkan SKKM minat & bakat, begitu juga dengan hadiah
                        total hingga 900.000 rupiah!
                        </p>
                        <a href="competition">
                            <img src="src/index/awan_arrow1.png" width="96px" />
                        </a>
                    </div>
                    <div class="col-4 ps-3 content-container content-right">
                        <h1 class="font_title">WEBINAR</h1>
                        <p class="mb-5 font_content" style="text-align: center; font-size: 15px">
                        Ingin tahu lebih banyak mengenai dunia pengembangan game
                        dan menambah wawasan? Ikuti webinar yang dibawakan oleh
                        pakar profesional yang akan membahas mengenai game design
                        maupun game marketing.
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
                    <img src="src/medpar_sponsor/logo_jcafe.png" class="mx-2" width="140px"/>
                </div>

                <h1 class="font_title mt-5 mb-4" style="font-size: 32pt;">SPONSORS</h1>
                <div class="d-inline">
                    <img src="src/medpar_sponsor/Logo_Mandiri-Utama-Finance.png" class="mx-5" width="250px"/>
                    <img src="src/medpar_sponsor/Logo_tomstorecars.jpg" class="mx-5" width="120px"/>
                </div>
            </div>
        </div>

        <div id="index-mobile">
            <div id="main-title" class="text-center mt-3">
                <div class="landing-title" data-aos="fade-down">
                    <h1 class="font_title my-0" style="font-size: 24pt;">WELCOME TO G2X</h1>
                    <p class="mb-5 ps-2 font_content" style="font-size: 8pt;">
                    Event terbesar yang diselenggarakan oleh UKM <br />
                    GDC (Game Development Club) UMN setiap tahunnya <br />
                    yang menghadirkan berbagai game karya UKM GDC <br />
                    dan acara lainnya seperti kompetisi berhadiah serta webinar.
                    </p>
                </div>
            </div>

            <div id="sub-title" class="text-center" data-aos="fade-down">
                <h1 class="font_title mb-3" style="font-size: 32pt;">G2X</h1>
                <p class="mb-5 ps-2 font_content" style="font-size: 10pt;">
                Event terbesar yang diselenggarakan oleh UKM <br />
                    GDC (Game Development Club) UMN setiap tahunnya <br />
                    yang menghadirkan berbagai game karya UKM GDC <br />
                    dan acara lainnya seperti kompetisi berhadiah serta webinar.
                </p>
            </div>

            <div id="content-island">
                <div id="content-up" class="content-container text-center" data-aos="fade-down">
                    <a href="#game-direct">
                        <img src="src/index/awan_arrow1.png" />
                    </a>
                    <h1 class="font_title">GAMES</h1>
                    <p class="mb-5 pb-5 font_content" style="text-align: center; margin: auto 30px;">
                        Lagi gabut? Ayoo telusuri, mainkan, dan vote berbagai
                        game-game menarik hasil peserta lomba G2X. Psst.. kalian
                        juga bisa dapat skkm minat & bakat juga loh kalau merekam
                        (syarat dan ketentuan berlaku).
                    </p>
                </div>

                <div id="content-center" class="content-container text-center" data-aos="fade-down">
                    <a href="competition">
                        <img src="src/index/awan_arrow1.png" />
                    </a>
                    <h1 class="font_title">COMPETITIONS</h1>
                    <p class="mb-5 pb-5 font_content" style="text-align: center; margin: auto 30px;">
                        Ikut serta dalam berbagai kompetisi seperti character
                        design, environment design, ataupun story writing dan
                        menangkan SKKM minat & bakat, begitu juga dengan hadiah
                        total hingga 900.000 rupiah!
                    </p>
                </div>

                <div id="content-down" class="content-container text-center" data-aos="fade-down">
                    <a href="webinar">
                        <img src="src/index/awan_arrow1.png" />
                    </a>
                    <h1 class="font_title">WEBINAR</h1>
                    <p class="mb-5 pb-5 font_content" style="text-align: center; margin: auto 30px;">
                        Ingin tahu lebih banyak mengenai dunia pengembangan game
                        dan menambah wawasan? Ikuti webinar yang dibawakan oleh
                        pakar profesional yang akan membahas mengenai game design
                        maupun game marketing.
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
                    <img src="src/medpar_sponsor/logo_jcafe.png" class="mx-2" width="42px"/>
                </div>

                <h1 class="font_title mt-5 mb-4" style="font-size: 24pt;">SPONSORS</h1>
                <div class="d-inline">
                    <img src="src/medpar_sponsor/Logo_Mandiri-Utama-Finance.png" class="mx-5" width="100px"/>
                    <img src="src/medpar_sponsor/Logo_tomstorecars.jpg" class="mx-5" width="42px"/>
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