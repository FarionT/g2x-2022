<?php
include_once('../../connect.php');
// vote count
if(!isset($_POST['doing'])) return;
if($_POST['doing'] == 'vote'){
    $query = "insert into voting (gameid, user_id) values('{$_POST['vote']}', '{$_POST['user']}')";
    $insert = $key->query($query); 
}
else if($_POST['doing'] == 'unvote'){
    $query = "DELETE FROM voting where gameid = '{$_POST['vote']}' AND user_id = '{$_POST['user']}'";
    $insert = $key->query($query);
}
$sql = "select count(*) vote from voting where gameid = {$_POST['vote']}";
$voteCount = $key->query($sql);
$voteCount = $voteCount->fetch(PDO::FETCH_ASSOC)['vote'];
echo $voteCount;
?>
