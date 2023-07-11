<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    $sql = "TRUNCATE TABLE jsh_board";
    squ_query($sql);
?>