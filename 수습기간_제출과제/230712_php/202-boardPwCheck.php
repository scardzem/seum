<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    echo "<div style='position:relative;width:500px;left:50%;transform:translate(-50%, 0%)'>";
    echo "<h3>비밀번호 확인 페이지</h3>";
    echo "<br><br><br>";

    //amos jsh 230711 비밀번호 확인에 필요한 정보 조회
    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "SELECT boardID, title, boardPw FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        $result = sql_query($sql);
    }

    if($result){
        $dataInfo = $result->fetch_array(MYSQLI_ASSOC);
        //amos jsh 230711 암호를 입력하기 때문에 form태그 사용해서 POST로 전송
        echo "<form name='boardPwForm' method='post' ";
        if(isset($_GET['delete'])){
            echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}&delete=delete'>";
        } else if(isset($_GET['update'])){
            echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}&update=update'>";
        } else {
            echo "문제 발생. 관리자에게 문의하세요";
        }
        echo "글 제목 : ".$dataInfo['title']."<br>";
        echo "비밀번호 : "."<input type='password' name='boardPw' required>"."<br><br>";
        echo "<input type='submit' value = '확인' /> ";
        echo " <a href='185-view.php?boardID={$boardID}'><button type='button'>취소</button></a>";
        echo "</form>";
        echo "</div>";
    } else {
        echo "관리자에게 문의하세요."."<br>";
    }
?>