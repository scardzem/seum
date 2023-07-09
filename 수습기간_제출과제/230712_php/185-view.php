<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include '179-checkSignSession.php';


    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "SELECT title, content, regTime, nickname FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        $result = sql_query($sql);
        
        if( $result ) {
                $contentInfo = $result->fetch_array(MYSQLI_ASSOC);
                // var_dump($contentInfo); //들어온 값 확인
                echo "<h2>View</h2>";
                echo "<br><br>";
                echo "제목 : ".$contentInfo['title']."<br>";
                echo "작성자 : ".$contentInfo['nickname']."<br>";
                // echo "작성자 : "."테스트"."<br>";   //임시 지정
                $regDate = date("Y-m-d h:i");
                echo "게시일 : {$regDate}<br><br>";
                echo "내용 <br>";
                echo $contentInfo['content'].'<br><br>';

                

                echo "<a href='183-list.php'>목록으로 이동</a> &nbsp;&nbsp;&nbsp;";
                // echo "<a href='180-writeForm.php?boardID={$boardID}'>글 수정</a> &nbsp;&nbsp;&nbsp;";
                // echo "<a href='201-deleteBoard.php?boardID={$boardID}'>글 삭제</a>";
                $update="update";
                $delete="delete";
                echo "<a href='202-boardPwCheck.php?boardID={$boardID}&update=$update'>글 수정</a> &nbsp;&nbsp;&nbsp;";
                echo "<a href='202-boardPwCheck.php?boardID={$boardID}&delete=delete'>글 삭제</a>";
        } else {
            echo "잘못된 접근입니다1.";
            exit;
        }
    } else {
        echo "잘못된 접근입니다2.";
        exit;
    }
?>