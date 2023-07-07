<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include '179-checkSignSession.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';

    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "SELECT b.title, b.content, m.nickname, b.regTime FROM jsh_board b ";
        $sql .= "JOIN jsh_member m ON (b.memberID = m.memberID) ";
        $sql .= "WHERE b.boardID = {$boardID}";
        $result = sql_query($sql);
        

        if( $result ) {
            $contentInfo = $result->fetch_array(MYSQLI_ASSOC);
            var_dump($contentInfo); //들어온 값 확인
            echo "<br><br>";
            echo "제목 : " . $contentInfo['title'] . "<br>";
            echo "작성자 : " . $contentInfo['nickname'] . "<br>";
            $regDate = date("Y-m-d h:i");
            echo "게시일 : {$regDate}<br><br>";
            echo "내용 <br>";
            echo $contentInfo['content'].'<br><br>';
            echo "<a href='183-list.php'>목록으로 이동</a> &nbsp;&nbsp;&nbsp;";
            echo "<a href='201-update.php'>글 수정</a> &nbsp;&nbsp;&nbsp;";
            echo "<a href='183-list.php'>글 삭제</a>";
        } else {
            echo "잘못된 접근입니다.";
            exit;
        }
    } else {
        echo "잘못된 접근입니다.";
        exit;
    }
?>