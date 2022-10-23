<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<script type="text/javascript">
    document.getElementById("btn_voting").addEventListener("click", function() {
        document.getElementById("modal-content").style.display = "block";
        vote();
    });
    function vote() {
        $.ajax({
            url:"../../Login/Google/vote.php",    //the page containing php script
            type: "post",    //request type,
            data: {vote: '<?= $gameID?>', ReURL: 'http://localhost/g2x/g2x-2022/login/google/vote.php', ReReURL: '<?= $url?>'},
            success:function(result){
                console.log(result);
                document.getElementById("modal-content").innerHTML = result;
                if(result.substring(0, 2) == '<a'){
                    return;
                }
                if(result.substring(0, 8) == '<p>You a'){
                    return;
                }
                if(result.substring(0, 9) == '<p>Thanks'){
                    document.getElementById("btn_voting").innerHTML = "<h4>VOTE (<?= $voteCount+1?>)</h4>"
                }
            }
        });
    }
</script>