<?php
include_once('../../connect.php');
// vote count
$sql = "select count(*) vote from voting where gameid = {$_POST['vote']}";
$voteCount = $key->query($sql);
$voteCount = $voteCount->fetch(PDO::FETCH_ASSOC)['vote'];
echo $voteCount;