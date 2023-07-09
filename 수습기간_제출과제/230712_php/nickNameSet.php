<?php 
include_once("./_common.php");
header('Content-Type: text/html; charset=utf-8');//추가


$sql = "SELECT boardID, nickName, boardPw FROM jsh_board";
$result = sql_query($sql);
if($result){
    // $boardInfo = $result->fetch_array(MYSQLI_ASSOC);
    $dataCount = $result->num_rows;
    echo "성공"."<br>";
    echo "<a href='183-list.php'>목록으로</a>";
    // var_dump($dataCount)."<br>";
    // var_dump($result);
    echo "<br>";
    // if($dataCount){
        $sql2 = "UPDATE jsh_board set nickname='성훈', boardPw='11'";
        sql_query($sql2);
    // } else {
    //     echo "다시1";
    // }
} else {
    echo "다시2";
}

?>