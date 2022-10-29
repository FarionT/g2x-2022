<?php
include_once('../../../../connect.php');
// vote count
if(!isset($_GET['doing'])) return;
if($_GET['doing'] == 'vote'){
    $query = "insert into voting (gameid, user_id) values('{$_GET['vote']}', '{$_GET['user']}')";
    $insert = $key->query($query); 
}
else if($_GET['doing'] == 'unvote'){
    $query = "DELETE FROM voting where gameid = '{$_GET['vote']}' AND user_id = '{$_GET['user']}'";
    $insert = $key->query($query);
}
$sql = "select count(*) vote from voting where gameid = {$_GET['vote']}";
$voteCount = $key->query($sql);
$voteCount = $voteCount->fetch(PDO::FETCH_ASSOC)['vote'];
echo $voteCount;
?>