<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G2X</title>
    <link rel="stylesheet" href="styledown.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <?php require_once('header.html'); ?>
    <div class="container col col-lg-10">
        <div class="container container-md-fluid">
            <div class="d-flex justify-content-around mt-5">
                <button class="btn btn-light border border-2 border-dark rounded-circle align-self-center"><</button>
                <img class="border border-dark border-4 rounded-4 w-75" src="src/game_placeholder.png"></img>
                <button class="btn btn-light border border-2 border-dark rounded-circle align-self-center">></button>
            </div>
            <div class="d-flex flex-column align-items-center mt-5">
                <h1 class="mx-auto mt-5 text-center">GAME TITLE GAME TITLE</h1>
                <h3 class="mb-5 text-center">Team Name</h3>
                <div class="d-flex justify-content-center container-lg-fluid">
                    <button class="button-choose rounded-pill py-2 mx-2"><p class="m-auto">DOWNLOAD</p></button>
                    <button class="button-choose rounded-pill py-2 mx-2"><p class="m-auto">VOTE</p></button>
                </div>
            </div>
        </div>
        
        <div class=" d-flex mt-5 row row-2 row-lg-2 justify-content-lg-around justify-content-center">
            <div class="col col-lg-6 col-12 mb-5">
                <p class="h3">ABOUT GAME</p>
                <p class="">Description Description Description Description Description Description Description Description Description Description</p>
            </div>
            <div class="col col-lg-6 col-12 ">
                <p class="h3">HOW TO PLAY</p>
                <p class="">Description Description Description Description Description Description Description Description Description Description</p>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto mt-5">
            <h3 class="mb-5">CREATORS</h3>
            <div class="d-flex row row-2 ">
                <div class="col col-lg-6 col-12">
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3">Name Name Name</h5>
                            <p class="mb-0">Job Description</p>
                            <p>NIM NIM NIM(Jurusan)</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3">Name Name Name</h5>
                            <p class="mb-0">Job Description</p>
                            <p>NIM NIM NIM(Jurusan)</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3">Name Name Name</h5>
                            <p class="mb-0">Job Description</p>
                            <p>NIM NIM NIM(Jurusan)</p>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 col-12">
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3">Name Name Name</h5>
                            <p class="mb-0">Job Description</p>
                            <p>NIM NIM NIM(Jurusan)</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3">Name Name Name</h5>
                            <p class="mb-0">Job Description</p>
                            <p>NIM NIM NIM(Jurusan)</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3">Name Name Name</h5>
                            <p class="mb-0">Job Description</p>
                            <p>NIM NIM NIM(Jurusan)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once('footer.html'); ?>
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