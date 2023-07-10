<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    
    $boardID = $_POST['boardID'];
    // echo "받은 boardID : "."$boardID"."<br>";
    $title = $_POST['title'];
    $content = $_POST['content'];
    $nickname = $_POST['nickname'];
    $boardPw = $_POST['boardPw'];

    if($title != null && $title != ''){
    } else {
        echo "제목을 입력하세요.";
        echo "<a href='./180-writeForm.php'>작성 페이지로 이동</a>";
        exit;
    }

    if($content != null && $content != ''){
    } else {
        echo "내용을 입력하세요.";
        echo "<a href='./180-writeForm.php'>작성 페이지로 이동</a>";
        exit;
    }

    $regTime = time();

    if(isset($_POST['boardID']) && (int)$_POST['boardID']>0){
            $sql = "UPDATE jsh_board SET title='$title', content='$content' ";
            $sql .= "WHERE boardID = {$boardID}";
            $result = sql_query($sql);
        if($result){
            echo "<script>location.replace('185-view.php?boardID={$boardID}')</script>";
        } else {
            echo "저장 실패1";
            echo "<a href='185-view.php?boardID={$boardID}'>게시글로 돌아가기</a>";
        }
    } else {
        $sql = "INSERT INTO jsh_board (title, content, regTime, nickname, boardPw) ";
        $sql .= "VALUES ('{$title}','{$content}', NOW(), '{$nickname}', '{$boardPw}')";
        $result = sql_query($sql);


        if($result){
            echo "저장 완료"."<br>";
            var_dump($boardID)."<br>";
            echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
            exit;
        } else {
            echo "저장 실패2 - 관리자에게 문의"."<br>";
            echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
            exit;
        }
    }

    
?>