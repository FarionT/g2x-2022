<?php
if(!session_id()){
    session_start();
}
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
require_once("connect.php");

$gameID = 1;
if(isset($_GET['game'])) 
    if(is_numeric($_GET['game'])) $gameID = $_GET['game'];


// game detail
$sql = "select * from game_entries where id = {$gameID}";
$game = $key->query($sql)->fetch(PDO::FETCH_ASSOC);

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
    <title>G2X</title>
    <link rel="stylesheet" href="styledown.css">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
            body{background-image: url("src/bg-website-game-page.png");}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
    <?php require_once('header.php'); ?>
    <div class="container col col-lg-10">
        <div class="container container-md-fluid">
            <div class="d-flex justify-content-around mt-5">
                <button class="btn btn-light border border-2 border-dark rounded-circle align-self-center"><</button>
                <img class="border border-dark border-4 rounded-4 w-75" src="src/game_placeholder.png"></img>
                <button class="btn btn-light border border-2 border-dark rounded-circle align-self-center">></button>
            </div>
            <div class="d-flex flex-column align-items-center mt-5">
                <h1 class="mx-auto mt-5 text-center"><?= $game['title'] ?></h1>
                <h3 class="mb-5 text-center">By <?= $game['team_name'] ?></h3>
                <div class="d-flex justify-content-center container-lg-fluid">
                    <a href="<?= $game['download_link'] ?>"><button class="button-choose rounded-pill py-2 mx-2"><p class="m-auto">DOWNLOAD</p></button></a>
                    <button class="button-choose rounded-pill py-2 mx-2" id="btn_voting"><p class="m-auto"><?php if($isVote) echo "UNVOTE ($voteCount)"; else echo "VOTE ($voteCount)";?></p></button>
                </div>
                <div id="modal-content" style="display:none">
                
                </div>
            </div>
        </div>
        
        <div class=" d-flex mt-5 row row-2 row-lg-2 justify-content-lg-around justify-content-center">
            <div class="col col-lg-6 col-12 mb-5">
                <p class="h3">ABOUT GAME</p>
                <p class=""><?= $game['game_desc'] ?></p>
            </div>
            <div class="col col-lg-6 col-12 ">
                <p class="h3">HOW TO PLAY</p>
                <p class=""><?= $game['HowToPlay'] ?></p>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto mt-5">
            <h3 class="mb-5">CREATORS</h3>
            <div class="d-flex row row-2 ">
                <div class="col col-lg-6 col-12">
                    <?php for($i = 0; $i < 3; $i++) {if($data = $creator->fetch(PDO::FETCH_ASSOC) ){?>
                    <div class="d-flex mb-3">
                        <div class="profile rounded-circle"></div>
                        <div class="ms-3">
                            <h5 class="mb-3"><?= $data['name']?></h5>
                            <p class="mb-0"><?= $data['job']?></p>
                            <p><?= $data['nim']?>(<?= $data['major']?>)</p>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <div class="col col-lg-6 col-12">
                    <?php for($i = 0; $i < 3; $i++) {if($data = $creator->fetch(PDO::FETCH_ASSOC) ){?>
                    <div class="d-flex mb-3">
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

        <?php require_once('footer.php'); require_once("close.php");?>
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
    <script type="text/javascript">
    document.getElementById("btn_voting").addEventListener("click", function() {
        document.getElementById("modal-content").style.display = "block";
        vote();
    });
    function vote() {
        $.ajax({
            url:"Login/Google/vote.php",    //the page containing php script
            type: "post",    //request type,
            data: {vote: '<?= $gameID?>', ReURL: 'http://localhost/g2x/g2x-2022/login/google/vote.php', ReReURL: '<?= $url?>'},
            success:function(result){
                console.log(result);
                document.getElementById("modal-content").innerHTML = result;
                if(result.substring(0, 2) == '<a'){
                    return;
                }
                if(result.substring(0, 8) == '<p>You u'){
                    $.ajax({
                        url:"Login/Google/voteCount.php",
                        type: "post",
                        data: {vote: '<?= $gameID?>'<?php if(!empty($_SESSION['userData']['oauth_uid'])) echo ", user: '{$_SESSION['userData']['oauth_uid']}'"?>, doing: 'unvote'},
                        success:function(re){
                            console.log(re);
                            document.getElementById("btn_voting").innerHTML = "<p class=\"m-auto\">VOTE ("+re+")</p>";
                        }
                    });
                }
                if(result.substring(0, 9) == '<p>Thanks'){
                    $.ajax({
                        url:"Login/Google/voteCount.php",
                        type: "post",
                        data: {vote: '<?= $gameID?>'<?php if(!empty($_SESSION['userData']['oauth_uid'])) echo ", user: '{$_SESSION['userData']['oauth_uid']}'"?>, doing: 'vote'},
                        success:function(re){
                            console.log(re);
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