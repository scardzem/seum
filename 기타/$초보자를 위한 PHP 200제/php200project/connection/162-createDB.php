<?php
    $host = "localhost";
    $user = "root";
    $pw = "root";

    $dbConnect = new mysqli($host, $user, $pw);

    $dbConnect->set_charset("utf8");

    if(mysqli_connect_errno()){
        echo '데이터베이스 접속 실패';
    }else {
        $sql = "CREATE DATABASE php200project";
        $res = $dbConnect->query($sql);

        if ( $res ) {
            echo "데이터베이스 생성 완료";
        } else {
            echo "데이터베이스 생성 실패";
        }
    }
?>