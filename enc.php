<?php
    $pass = "member1234";
    echo "<strong>Member Password:</strong> ".sha1($pass);
    echo "<br><br>";
    $pass = "librarian1234";
    echo "<strong>Librarian Password:</strong> ".sha1($pass);
?>
<?= "<br><br><br>"; ?>
<?php
function getUserIpAddress()
{
    if(!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
echo "<br>". getUserIpAddress() ."<br>";
?>