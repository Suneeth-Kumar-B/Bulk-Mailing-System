<?php
    $conn = mysqli_connect('localhost','root','','mailinglist');
    if($conn)
    echo "Connection Established<br>";
    
    $mail = $_POST['uname'];
    $q = "delete from mails where email='$mail'";
    if(mysqli_query($conn,$q))
        header("Location: unsubscribed.html");
    else
        header("Location: removeMail.html");

    mysqli_close($conn);
?>