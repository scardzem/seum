<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    $delete=$_GET['delete'];
    $update=$_GET['update'];

    echo $delete;
    echo $update;

    echo "<br><br><br>";


    if(isset($_GET['boardID']) && (int) $_GET['boardID'] > 0){
        $boardID = $_GET['boardID'];
        $sql = "SELECT boardID, title, nickname, boardPw FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        $result = sql_query($sql);
    }

    if($result){
        $dataInfo = $result->fetch_array(MYSQLI_ASSOC);
        // echo "<form name='boardPwForm' method='post' action='185-view.php?boardID={$boardID}'>";
        
        echo "del 가져옴 : ".isset($delete)."<br>";
        echo "upd 가져옴 : ".isset($update)."<br>";

        //원래 저장해놨던거
        // echo "<form name='boardPwForm' method='post' ";
        // if(isset($_GET['delete'])){
        //     echo "action='201-deleteBoard.php?boardID={$boardID}'>";
        // } else if(isset($_GET['update'])){
        //     echo "action='180-writeForm.php?boardID={$boardID}'>";
        // } else {
        //     echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}'>";
        // }
        echo "<form name='boardPwForm' method='post' ";
        if(isset($_GET['delete'])){
            echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}&delete=delete'>";
        } else if(isset($_GET['update'])){
            echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}&update=update'>";
        } else {
            echo "문제 발생. 관리자에게 문의하세요";
            // echo "action='203-boardPwCheckProcessing.php?boardID={$boardID}'>";
            // echo "22222<br>";
        }


        echo "비밀번호 확인 페이지";
        echo "<br>";
        echo "게시글 번호 : ".$dataInfo['boardID']."<br>";
        echo "제목 : ".$dataInfo['title']."<br>";

        echo "비밀번호 : "."<input type='password' name='boardPw' required>"."<br>";
        // echo "<a href='185-view.php?boardID={$boardID}'><button type='button'>확인</button></a>";
        echo "<input type='submit' value = '확인' />";
        echo "</form>";
        
    } else {
        echo "다시"."<br>";
        var_dump($result);
        echo gettype($boardID)."<br>";
        echo $boardID;
    }
?>