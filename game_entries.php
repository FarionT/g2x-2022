<?php 
require_once('connect.php');

$page = 0;
if(isset($_GET['page'])) 
    if(is_numeric($_GET['page'])) $page = $_GET['page'];


function amount($countRow) {
    if ($countRow % 3 == 0) {
        return $countRow / 3;
    } else if ($countRow % 3 == 1) {
        return (round($countRow / 3)) + 1;
    } else {
        return (round($countRow / 3));
    }
}

function page_amount($countRow) {
    if ($countRow % 4 == 0) {
        return $countRow / 4;
    } else if ($countRow % 4 == 1) {
        return (round($countRow / 4)) + 1;
    } else {
        return (round($countRow / 4));
    }
}

$start = 0;
$end = 3;
$mbData = array();

for ($i = 0; $i < $page; $i++) {
    $start += 4;
    $end += 4;
}

$query = "SELECT * FROM game_entries";
$data = $key->query($query);

$query = "SELECT COUNT(*) AS count FROM game_entries";
$count = $key->query($query);
$countRow = $count->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="src/g2x_logo.png">
    <title>Game Entries</title>
    <link rel="stylesheet" href="styles.css">
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
  <body id="game-entries">
    <div class="container-fluid justify-content-center m-0 p-0">
        <header>
            <?php include("header.php"); ?>
        </header>
        
        <div id="title" class="text-center mx-3" data-aos="fade-down">
            <h1 class="font_title">GAME ENTRIES</h1>
            <p class="mt-3 font_content">
                Copywriting Copywriting Copywriting Copywriting <br />
                Copywriting Copywriting Copywriting Copywriting
            </p>
        </div>
        
        <div id="game-desktop" class="text-center">
            <?php 
            for ($i = 0; $i < amount($countRow['count']); $i++) {
            ?>
                <div class="row">
                <?php 
                for ($j = 0; $j < 3; $j++) {
                    $dataRow = $data->fetch(PDO::FETCH_ASSOC);
                    array_push($mbData, $dataRow);
                    if ($dataRow == NULL) break;
                ?>
                    <div class="col-lg-4 mb-5 px-0" data-aos="fade-up">
                        <div class="game-container">
                            <a href="game?game=<?= $dataRow['id'] ?>" class="image-container" style="background-color: transparent;border-width: 0;">
                                <img class="border border-dark border-4 rounded-4" src="src/game_placeholder.png" width="85%"/>
                            </a>
                            <h5 class="mt-3 px-3 font_title"><b><?= $dataRow['title'] ?></b></h5>
                            <p class="px-5 font_content">
                                <?= $dataRow['game_desc'] ?>
                            </p>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            <?php 
            }
            ?>
        </div>

        <div id="game-mobile" class="text-center">
            <div class="mb-5 text-center" data-aos="fade-down">
                <form action="game_entries.php" method="get">
                    <?php 
                    for ($i = 0; $i < page_amount($countRow['count']); $i++) {
                    ?>
                        <button type="submit" class="btn btn-link btn-page p-0 rounded-circle" name="page" value="<?= $i ?>">
                        <?php if ($i != $page) {?>
                            <img src="src/buttons/<?= $n = $i + 1 ?>.png" width="64px">
                        <?php } else {?>
                            <img src="src/buttons/<?= $n = $i + 1 ?>select.png" width="64px">
                        <?php }?>
                        </button>
                    <?php 
                    }
                    ?>
                </form>
            </div>

            <div class="row">
                <?php 
                for ($i = $start; $i <= $end; $i++) {
                    if ($mbData[$i] == NULL) break;
                ?>
                    <div class="col-lg-4 mb-5 px-0" data-aos="fade-up">
                        <div class="game-container">
                            <a href="game?game=<?= ($i +1) ?>" class="image-container" style="background-color: transparent;border-width: 0;">
                                <img class="border border-dark border-4 rounded-4" src="src/game_placeholder.png" width="85%"/>
                            </a>
                            <h5 class="mt-3 px-3 font_title"><b><?= $mbData[$i]['title'] ?></b></h5>
                            <p class="px-5 font_content">
                                <?= $mbData[$i]['game_desc'] ?>
                            </p>
                        </div>
                    </div>
                <?php 
                }
                ?>
            </div>

            <div class="mb-5 text-center" data-aos="fade-down">
                <form action="game_entries.php" method="get">
                    <?php 
                    for ($i = 0; $i < page_amount($countRow['count']); $i++) {
                    ?>
                        <button type="submit" class="btn btn-link btn-page p-0 rounded-circle" name="page" value="<?= $i ?>">
                        <?php if ($i != $page) {?>
                            <img src="src/buttons/<?= $n = $i + 1 ?>.png" width="64px">
                        <?php } else {?>
                            <img src="src/buttons/<?= $n = $i + 1 ?>select.png" width="64px">
                        <?php }?>
                        </button>
                    <?php 
                    }
                    ?>
                </form>
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

<?php 
require_once('close.php');
?>