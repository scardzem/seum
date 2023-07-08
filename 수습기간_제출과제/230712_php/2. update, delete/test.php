<?php 
include_once("./_common.php"); 
?>

<?php
    header('Content-Type: text/html; charset=utf-8');//추가
    //전체 레코드 수 구하기
    // $sql = "SELECT count(boardID) FROM jsh_board";
    // $sql = "SELECT * FROM jsh_member";
    // $result = sql_query($sql);

    // $boardTotalCount = $result->fetch_array(MYSQLI_ASSOC);
    // $boardTotalCount = $boardTotalCount['count(boardID)'];

    // var_dump($boardTotalCount);
    // echo $result."<br>";
    // var_dump($result);

    $sql = "SELECT name FROM jsh_myMember";  //jsh_myMember 테이블의 레코드(행, row)를 불러오는 쿼리.
    $result = sql_query($sql);  //쿼리 송신

    $dataCount = $result->num_rows;              //num_rows를 쓰면 불러온 레코드의 수를 반환한다.

    for($i = 0; $i<$dataCount; $i++){
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "이름 : ".$memberInfo[0];
        echo "<br>";
        echo "아이디 : ".$memberInfo[1];
        echo "<hr>";
        var_dump($dataCount);
        
        echo "<br>";
    }
?>