<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/g2x_logo.png">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylecomp2.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/9a76eb5668f9d31eaf200933de3d6522?family=Typori" rel="stylesheet" type="text/css"/>
    <style>
        body{background-image: url("src/bg-website-game-page.png");}
        .font_content{font-family: 'Varela', sans-serif;}
        @import url(//db.onlinewebfonts.com/c/9a76eb5668f9d31eaf200933de3d6522?family=Typori);
        @font-face {font-family: "Typori"; 
                    src: url("//db.onlinewebfonts.com/t/9a76eb5668f9d31eaf200933de3d6522.eot"); 
                    src: url("//db.onlinewebfonts.com/t/9a76eb5668f9d31eaf200933de3d6522.eot?#iefix") format("embedded-opentype"), 
                         url("//db.onlinewebfonts.com/t/9a76eb5668f9d31eaf200933de3d6522.woff2") format("woff2"), 
                         url("//db.onlinewebfonts.com/t/9a76eb5668f9d31eaf200933de3d6522.woff") format("woff"), 
                         url("//db.onlinewebfonts.com/t/9a76eb5668f9d31eaf200933de3d6522.ttf") format("truetype"), 
                         url("//db.onlinewebfonts.com/t/9a76eb5668f9d31eaf200933de3d6522.svg#Typori") format("svg"); 
        }
        h1{
            font-family: 'Typori';
        }
    </style>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    <div class="container col col-lg-10">
        
        <div class="container text-center mt-5" id="title">
            <h1 id="pageTitle" class="mb-4">COMPETITIONS</h1>
            <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
            <p class="mb-0 font_content">Copywriting Copywriting Copywriting</p>
        </div>
        <div id="competitions" class="my-5">
            <div id="firstCompetition" class="d-flex justify-content-lg-start justify-content-center mx-5">
                <div class="d-flex row row-md-2 justify-content-center" id="upCompetition">
                    <div id="upLeft" class="d-flex mx-4 my-lg-0 my-4 col justify-content-center">
                        <div class="col-auto me-lg-5">
                            <img src="src/game_placeholder.png" class="bg-secondary rounded-circle competition_profile"/>
                        </div>
                    </div>
                    <div id="upRight" class="mx-4 col col-auto">
                        <div class="d-flex justify-content-lg-start justify-content-sm-center justify-content-center">
                            <h3 class="mx-2 competition_title" >Competition Title</h3>
                        </div>
                        <div>
                            <table class="table table-borderless d-flex justify-content-md-start justify-content-center">
                                <tr>
                                    <td class="py-2 font_content font_content font_content">Theme</td>
                                    <td class="py-2 font_content">theme theme</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content">Start</td>
                                    <td class="py-2 font_content">DD MM YYYY</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content">End</td>
                                    <td class="py-2 font_content">DD MM YYYY</td2>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content"></td>
                                    <td class="py-2 font_content">pukul 00:00 WIB</td>
                                </tr>
                            </table>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="#" class="register"><img src="src/buttons/register2.png"/></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="secondCompetition" class="d-flex justify-content-center justify-content-lg-end mx-5">
                <div class="d-flex row row-md-2 justify-content-center" id="upCompetition">
                    <div id="upLeft" class="d-flex mx-4 my-lg-0 my-4 col justify-content-center">
                        <div class="col-auto me-lg-5">
                            <img src="src/game_placeholder.png" class="bg-secondary rounded-circle competition_profile"/>
                        </div>
                    </div>
                    <div id="upRight" class="mx-4 col col-auto">
                        <div class="d-flex justify-content-lg-start justify-content-center">
                            <h3 class="mx-2 competition_title">Competition Title</h3>
                        </div>
                        <div>
                            <table class="table table-borderless d-flex justify-content-md-start justify-content-center">
                                <tr>
                                    <td class="py-2 font_content font_content">Theme</td>
                                    <td class="py-2 font_content font_content">theme theme</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content font_content">Start</td>
                                    <td class="py-2 font_content font_content">DD MM YYYY</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content font_content">End</td>
                                    <td class="py-2 font_content font_content">DD MM YYYY</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content font_content"></td>
                                    <td class="py-2 font_content font_content">pukul 00:00 WIB</td>
                                </tr>
                            </table>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="#" class="register"><img src="src/buttons/register2.png"/></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="thirdCompetition" class="d-flex justify-content-lg-start justify-content-center mx-5">
                <div class="d-flex row row-md-2 justify-content-center" id="upCompetition">
                    <div id="upLeft" class="d-flex mx-4 my-lg-0 my-4 col justify-content-center">
                        <div class="col-auto me-lg-5">
                            <img src="src/game_placeholder.png" class="bg-secondary rounded-circle competition_profile"/>
                        </div>
                    </div>
                    <div id="upRight" class="mx-4 col col-auto">
                        <div class="d-flex justify-content-lg-start justify-content-sm-center justify-content-center">
                            <h3 class="mx-2 competition_title">Competition Title</h3>
                        </div>
                        <div>
                            <table class="table table-borderless d-flex justify-content-md-start justify-content-center">
                                <tr>
                                    <td class="py-2 font_content">Theme</td>
                                    <td class="py-2 font_content">theme theme</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content">Start</td>
                                    <td class="py-2 font_content">DD MM YYYY</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content">End</td>
                                    <td class="py-2 font_content">DD MM YYYY</td>
                                </tr>
                                <tr>
                                    <td class="py-2 font_content"></td>
                                    <td class="py-2 font_content">pukul 00:00 WIB</td>
                                </tr>
                            </table>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="#" class="register"><img src="src/buttons/register2.png"/></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>