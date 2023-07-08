<?php
    include_once("./_common.php");
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include '179-checkSignSession.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';
    header('Content-Type: text/html; charset=utf-8');//추가

    for($i = 1; $i <= 165; $i++){
        $time = date("Y-m-d", time());
        $sql = "INSERT INTO jsh_board (memberID, title, content, regTime) ";
        $sql .= "VALUES (1, '{$i}번째 제목', '{$i}번째 내용', {$time})";
        $result = sql_query($sql);
        if($result){
            echo "{$i}번째 데이터 입력완료";
        }else{
            echo "{$i}번째 데이터 입력실패";
        }
        echo '<br>';
    }
?>