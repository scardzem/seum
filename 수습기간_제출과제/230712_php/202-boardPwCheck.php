<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    $delete=$_GET['delete'];
    $update=$_GET['update'];
    echo "비밀번호 확인 페이지";
    echo "<br><br><br>";

    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "SELECT boardID, title, nickname, boardPw FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        $result = sql_query($sql);
    }

    if($result){
        $dataInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo "<form name='boardPwForm' method='post' ";
        if(isset($_GET['delete'])){
            echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}&delete=delete'>";
        } else if(isset($_GET['update'])){
            echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}&update=update'>";
        } else {
            echo "문제 발생. 관리자에게 문의하세요";
        }
        echo "게시글 번호 : ".$dataInfo['boardID']."<br>";
        echo "제목 : ".$dataInfo['title']."<br>";

        echo "비밀번호 : "."<input type='password' name='boardPw' required>"."<br>";
        echo "<input type='submit' value = '확인' /> ";
        echo " <a href='185-view.php?boardID={$boardID}'><button type='button'>취소</button></a>";
        echo "</form>";
        
    } else {
        echo "관리자에게 문의하세요."."<br>";
    }
?>