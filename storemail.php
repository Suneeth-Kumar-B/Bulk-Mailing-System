<?php
    $conn = mysqli_connect('localhost','root','');
    if($conn)
    echo "Connection Established!<br>";

    $q = "create database if not exists mailinglist";
    mysqli_query($conn,$q);

    mysqli_select_db($conn,'mailinglist');

    $tab = "create table if not exists mails(name varchar(30) not null, email varchar(50) not null, primary key(email))";
    mysqli_query($conn,$tab);

    $name = $_POST['name'];
    $mail = $_POST['email'];
    $query = "insert into mails(name, email) values('$name','$mail')";
    if(mysqli_query($conn,$query))
        header("Location: subscribed.html");
    else
        header("Location: alreadyexists.html");
    mysqli_close($conn);
?>