<?php
    $conn = mysqli_connect('localhost','root','','mailinglist');
    if($conn)
    echo "Connection Established!<br>";

    $sql = "SELECT email FROM mails";

    $arr = mysqli_query($conn,$sql);

    $var='';
    while($res = mysqli_fetch_row($arr)){
        $var.=$res[0];
        $var.=';';
    }

    echo "<a href='mailto:".$var."'>Click Here</a>";
?>