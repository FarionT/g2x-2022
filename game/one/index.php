<?php
require_once("../../connect.php");
$gameID = 1;

// game detail
$sql = "select * from game_entries where id = {$gameID}";
$game = $key->query($sql)->fetch(PDO::FETCH_ASSOC);

// creator detail
$sql = "select * from creator where gameid = {$gameID}";
$creator = $key->query($sql);

// vote count
$sql = "select count(*) vote from voting where gameid = {$gameID}";
$voteCount = $key->query($sql);
$voteCount = $voteCount->fetch(PDO::FETCH_ASSOC)['vote']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G2X</title>
    <link rel="stylesheet" href="../../styles.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php require_once('header.html'); ?>
        <div class="d-flex justify-content-around mt-5">
            <button class="button-game align-self-center"><</button>
            <div class="box-game"></div>
            <button class="button-game align-self-center">></button>
        </div>
        <div class="d-flex flex-column align-items-center mt-5">
            <h1 class="mx-auto mt-5"><?= $game['title'] ?></h1>
            <h3 class="mb-5">By <?= $game['team_name'] ?></h3>
            <div>
                <a href="<?= $game['download_link'] ?>"><button class="button-choose rounded-pill py-2 me-3" ><h4>DOWNLOAD</h4></button></a>
                <button id="btn_voting" class="button-choose rounded-pill py-2"><h4>VOTE (<?= $voteCount?>)</h4></button>
            </div>
            <div id="modal-content"  style="display:none">
                
            </div>
        </div>
        <div class="w-75 d-flex mx-auto mt-5">
            <div class="d-flex flex-column">
                <h3>ABOUT GAME</h3>
                <p><?= $game['game_desc'] ?></p>
            </div>
            <div class="d-flex flex-column">
                <h3>HOW TO PLAY</h3>
                <p><?= $game['HowToPlay'] ?></p>
            </div>
        </div>
        <div class="w-75 d-flex flex-column mx-auto mt-5">
            <h3 class="mb-5">CREATORS</h3>
            <div class="d-flex">
                <div style="margin-right: 220px">
                    <?php for($i = 0; $i < 3; $i++) {if($data = $creator->fetch(PDO::FETCH_ASSOC) ){?>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3"><?= $data['name']?></h5>
                            <p class="mb-0"><?= $data['job']?></p>
                            <p><?= $data['nim']?>(<?= $data['major']?>)</p>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <div>
                    <?php for($i = 0; $i < 3; $i++) {if($data = $creator->fetch(PDO::FETCH_ASSOC) ){?>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3"><?= $data['name']?></h5>
                            <p class="mb-0"><?= $data['job']?></p>
                            <p><?= $data['nim']?>(<?= $data['major']?>)</p>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>

        <?php require_once('footer.html'); require_once("../../close.php"); include_once("../js/btn_voting.php");?>
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