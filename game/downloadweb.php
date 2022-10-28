<?php
$alt = "../../";
if(!session_id()){
    session_start();
}
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require_once("../../connect.php");

// game detail
$sql = "select * from game_entries where id = {$gameID}";
$game = $key->query($sql)->fetch(PDO::FETCH_ASSOC);
if(empty($game['game_cover'])) $game['game_cover'] = "../../src/game_placeholder.png";

// Prev and next game
$min = 1;
$sql = "select * from game_entries where id = (select min(id) from game_entries)";
$min = $key->query($sql)->fetch(PDO::FETCH_ASSOC);
$prev = $gameID - 1;
$sql = "select * from game_entries where id = $prev";
$prev = $key->query($sql)->fetch(PDO::FETCH_ASSOC);
$next = $gameID + 1;
$sql = "select * from game_entries where id = $next";
$next = $key->query($sql)->fetch(PDO::FETCH_ASSOC);
$max = 8;
$sql = "select * from game_entries where id = (select max(id) from game_entries)";
$max = $key->query($sql)->fetch(PDO::FETCH_ASSOC);

// creator detail
$sql = "select * from creator where gameid = {$gameID}";
$creator = $key->query($sql);

// vote count
$sql = "select count(*) vote from voting where gameid = {$gameID}";
$voteCount = $key->query($sql);
$voteCount = $voteCount->fetch(PDO::FETCH_ASSOC)['vote'];

// Is vote
$isVote = false;
if(isset($_SESSION['userData'])){
    $sql = "select count(*) isVote from voting where gameid = {$gameID} AND user_id = {$_SESSION['userData']['oauth_uid']}";
    $isVote = $key->query($sql);
    $isVote = $isVote->fetch(PDO::FETCH_ASSOC)['isVote'] ? true : false;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/g2x_logo.png">
    <title>Game Details</title>
    <link rel="stylesheet" href="../../styledown1.css">
    <link rel="stylesheet" href="../../styles.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        body{background-image: url("../../src/bg-website-game-page.png"); background-size: 1600px;}
        .font_content{font-family: 'Varela', sans-serif;}
        
        .font_title{
            font-family: 'Dosis', sans-serif;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <?php require_once('../../header.php'); ?>
    <div class="container col col-lg-10 px-5">
        <div class="container container-md-fluid">
            <div class="d-flex justify-content-around mt-5">
                <form action="../" class="align-self-center">
                    <input type="text" name="game" hidden value="<?php if(empty($prev)){ echo $max['id'];} else { echo $prev['id']; }?>">
                    <button style="background-color: transparent; border: 0px;"><img src="../../src/index/arrow_left.png" style="width: 100px; height: 100px;"/></button>
                </form>
                <img class="border border-dark border-4 rounded-4 w-75" src="../../src/game_placeholder.png"></img>
                <form action="../" class="align-self-center">
                    <input type="text" name="game" hidden value="<?php if(empty($next)){ echo $min['id'];} else { echo $next['id']; }?>">
                    <button style="background-color: transparent; border: 0px;"><img src="../../src/index/arrow_right.png" style="width: 100px; height: 100px;"/></button>
                </form>
            </div>
            <div class="d-flex flex-column align-items-center mt-5">
                <h1 class="mx-auto mt-5 text-center font_title"><?= $game['title'] ?></h1>
                <h3 class="mb-5 text-center font_content">By <?= $game['team_name'] ?></h3>
                <div class="d-flex justify-content-center container-lg-fluid">
                    <a href="<?= $game['download_link'] ?>"><button class="button-choose rounded-pill py-2 mx-2"><p class="m-auto">DOWNLOAD</p></button></a>
                    <button class="button-choose rounded-pill py-2 mx-2" id="btn_voting"><p class="m-auto"><?php if($isVote) echo "UNVOTE ($voteCount)"; else echo "VOTE ($voteCount)";?></p></button>
                </div>
                <div id="myModal" class="modal">
                    <div id="modal-content">
                        <span class="close">&times;</span>
                        <div id="msg"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=" d-flex mt-5 row row-2 row-lg-2 justify-content-lg-around justify-content-center">
            <div class="col col-lg-6 col-12 mb-5">
                <p class="h3 font_title">ABOUT GAME</p>
                <p class="font_content"><?= $game['game_desc'] ?></p>
            </div>
            <div class="col col-lg-6 col-12 ">
                <p class="h3 font_title">HOW TO PLAY</p>
                <p class="font_content"><?= $game['HowToPlay'] ?></p>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto mt-5">
            <h3 class="mb-5 font_title">CREATORS</h3>
            <div class="d-flex row row-2 ">
                <div class="col col-lg-6 col-12">
                    <?php for($i = 0; $i < 3; $i++) {if($data = $creator->fetch(PDO::FETCH_ASSOC) ){?>
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3 font_title"><?= $data['name']?></h5>
                            <p class="mb-0 font_content"><?= $data['job']?></p>
                            <p class="font_content"><?= $data['nim']?>(<?= $data['major']?>)</p>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <div class="col col-lg-6 col-12">
                    <?php for($i = 0; $i < 3; $i++) {if($data = $creator->fetch(PDO::FETCH_ASSOC) ){?>
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3 font_title"><?= $data['name']?></h5>
                            <p class="mb-0 font_content"><?= $data['job']?></p>
                            <p class="font_content"><?= $data['nim']?>(<?= $data['major']?>)</p>
                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>

    </div>
    <?php require_once('../../footer.php'); require_once("../../close.php");?>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
        crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="../../javadown.js" type="text/javascript"></script>
    <script type="text/javascript">
    var counter = 1;
    msg = document.getElementById('msg');
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("btn_voting");

    document.getElementById("btn_voting").addEventListener("click", function() {
        vote();
    });
    function vote() {
        $.ajax({
            url:"../elz00/4s4rW/",
            type: "post",
            data: {vote: '<?= $gameID?>', ReReURL: '<?= $url?>'},
            success:function(result){
                // tadi biar nggak kelooping button sign in googlenya, kalau ini jadinya nge looping tiap bukak tutup vote nya
                // var counternya jangan dihilangin :')

                //codingan ku udah perfect yak :)
                msg.innerHTML = result;
                btn.onclick = function() {
                    modal.style.display = "block";
                }
                // if(counter == 1){ // login button
                    // var googlebutton = document.createElement('div');
                    // googlebutton.innerHTML = result;
                    // var divmodal = document.getElementById("modal-content");
                    // divmodal.appendChild(googlebutton);
                    // counter = 2;
                // }
                if(result.includes('You unvoted')){ // already vote
                    $.ajax({
                        url:"../elz00/4s4rW/j59YI",
                        type: "get",
                        data: {vote: '<?= $gameID?>'<?php if(!empty($_SESSION['userData']['oauth_uid'])) echo ", user: '{$_SESSION['userData']['oauth_uid']}'"?>, doing: 'unvote'},
                        success:function(re){
                            document.getElementById("btn_voting").innerHTML = "<p class=\"m-auto\">VOTE ("+re+")</p>";
                        }
                    });
                }
                if(result.includes('Thanks for voting')){ // vote
                    $.ajax({
                        url:"../elz00/4s4rW/j59YI",
                        type: "get",
                        data: {vote: '<?= $gameID?>'<?php if(!empty($_SESSION['userData']['oauth_uid'])) echo ", user: '{$_SESSION['userData']['oauth_uid']}'"?>, doing: 'vote'},
                        success:function(re){
                            document.getElementById("btn_voting").innerHTML = "<p class=\"m-auto\">UNVOTE ("+re+")</p>";
                        }
                    });
                }
            }
        });
    }
    </script>
</body>
</html>