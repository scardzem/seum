<?php
    header('Content-Type: text/html; charset=utf-8');//추가
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include_once("./_common.php");


    //로그아웃
    unset($_SESSION['jsh_memberID']);
    unset($_SESSION['jsh_nickName']);
    echo "로그아웃 되었습니다.";
    echo "<a href='170-index.php'>메인으로 이동</a>";
?>