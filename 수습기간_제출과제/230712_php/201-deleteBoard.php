<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include '179-checkSignSession.php';

    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "DELETE FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        sql_query($sql);
        echo $boardID;
        // echo "삭제 완료"."<br>";
        // echo "<a href='183-list.php'>목록으로 이동</a>";
        // echo "<script>location.replace('183-list.php')</script>";
        Header("Location:183-list.php");  //삭제하고 list 페이지로 이동
    } else {
        echo "잘못된 접근입니다.";
        exit;
    }
?>