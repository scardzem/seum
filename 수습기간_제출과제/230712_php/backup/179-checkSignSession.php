<?php
    header('Content-Type: text/html; charset=utf-8');//추가

    if(!isset($_SESSION['jsh_memberID'])){
        //회원가입 또는 로그인 필요.
        Header("Location:170-index.php");  //index.php 페이지로 이동
        exit;
    } else {
        // echo '179 check 통과 - ';
    }
?>