<?php
    //設定登入資訊。ip, uid, pwd, dbname
    $link=mysqli_connect(
        "localhost",
        "root",
        "kayle11125125",
        "php-final"
    );

    if($link){

    }else{
        die("無法連接到伺服器");
    }

    mysqli_query($link,'SET NAMES utf8');
?>