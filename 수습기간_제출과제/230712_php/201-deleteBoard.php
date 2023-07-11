<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "DELETE FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        sql_query($sql);
        echo $boardID;
        Header("Location:183-list.php"); 
    } else {
        echo "잘못된 접근입니다.";
        exit;
    }
?>