<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    
    //amos jsh 230711 작성 페이지에서 받은 값을 변수에 저장
    $boardID = $_POST['boardID'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $nickname = $_POST['nickname'];
    $boardPw = $_POST['boardPw'];

    //amos jsh 230711 수정하기 요청을 받아서 boardID 값이 POST에 세팅이 되었으면(수정) 해당 번호와 일치하는 데이터를 테이블에 업데이트
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
        //amos jsh 230711 boardID를 받아오지 않았으면 일반 글쓰기 기능 수행
        $sql = "INSERT INTO jsh_board (title, content, regTime, nickname, boardPw) ";
        $sql .= "VALUES ('{$title}','{$content}', NOW(), '{$nickname}', '{$boardPw}')";
        $result = sql_query($sql);
        if($result){
            Header("Location:183-list.php");
            exit;
        } else {
            echo "저장 실패2 - 관리자에게 문의"."<br>";
            echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
            exit;
        }
    }

    
?>