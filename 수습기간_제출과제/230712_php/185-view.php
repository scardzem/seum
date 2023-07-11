<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    //amos jsh 230711 GET요청으로 boardID 값 받았으면 해당 boardID의 데이터 조회
    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "SELECT title, content, regTime, nickname FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        $result = sql_query($sql);
        
        
        if( $result ) {
                $contentInfo = $result->fetch_array(MYSQLI_ASSOC);
                echo "<div style='position:relative;width:700px;left:50%;transform:translate(-50%, 0%)'>";
                echo "<h2>View</h2>";
                echo "<br><br>";
                echo "제목 : ".$contentInfo['title']."<br>";
                echo "작성자 : ".$contentInfo['nickname']."<br>";
                // $regDate = date("Y-m-d h:i");
                $regDate = date("Y-m-d");
                echo "게시일 : {$regDate}<br><br>";
                echo "내용 <br>";
                echo $contentInfo['content'].'<br><br>';
                echo "<a href='183-list.php'>목록으로 이동</a> &nbsp;&nbsp;&nbsp;";
                //amos 230711 수정, 삭제 요청 GET update, delete 담아서 보냄
                echo "<a href='202-boardPwCheck.php?boardID={$boardID}&update=update'>글 수정</a> &nbsp;&nbsp;&nbsp;";
                echo "<a href='202-boardPwCheck.php?boardID={$boardID}&delete=delete'>글 삭제</a>";
                echo "</div>";
        } else {
            echo "잘못된 접근입니다1.";
            exit;
        }
    } else {
        echo "잘못된 접근입니다2.";
        exit;
    }
?>