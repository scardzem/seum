<?php 
 include_once("./_common.php");
 header('Content-Type: text/html; charset=utf-8');//추가

    //다른 내용 입력
 for($i=0; $i<150; $i++){
    $time = time();
    $sql = "INSERT INTO jsh_board (title, content, nickname, regTime, boardPw) ";
    $sql .="VALUES ('{$i}번 제목', '222', 'shj', NOW(), '11')";
    $result = sql_query($sql);
}
    //111 데이터 입력
for($i=0; $i<100; $i++){
$time = time();
$sql = "INSERT INTO jsh_board (title, content, nickname, regTime, boardPw) ";
$sql .="VALUES ('111', '111', 'jsh', NOW(), '11')";
$result = sql_query($sql);
}


if($result){
    echo "성공";
} else {
    echo "실패";
}
    echo "<br><a href='183-list.php'>목록으로</a>";
?>