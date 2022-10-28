<?php
if(empty($alt)){
    $alt = "";
}
// $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
// $alt = $protocol . $_SERVER['HTTP_HOST']. '/';
?>
<div class="header-navbar pt-lg-5 mt-3">
    <nav class="navbar navbar-expand-md bg-transparent">
        <a class="navbar-brand" href="<?= $alt ?>./">
            <img src="<?=$alt?>src/g2x_logo.png" alt="Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="<?=$alt?>src/option.png" width="48px">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link pe-5" href="<?=$alt?>game_entries.php">
                        <h4 class="ps-1 font_title">Games</h4>
                    </a>
                </li>
                <li class="nav-item pe-5">
                    <a class="nav-link" href="<?=$alt?>competition.php">
                        <h4 class="ps-1 font_title">Competition</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$alt?>webinar.php">
                        <h4 class="ps-1 font_title">Webinar</h4>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>