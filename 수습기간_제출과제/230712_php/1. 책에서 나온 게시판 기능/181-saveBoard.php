<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';
    
    include '179-checkSignSession.php'; //로그인을 해야 181-saveBoard.php에 접근할 수 있도록 함.


    $title = $_POST['title'];
    $content = $_POST['content'];

    if($title != null && $title != ''){
        // $title = sql_real_escape_string($title);  //real_escape_string()함수는 문자열 속 특수문자가 쿼리문에서 오류를 일으키지 않도록 하는 기능.
                                                    //이걸 쓰니까 \가 두 번 적용돼서 제목에 \까지 작성됨, common파일에서 처리가 돼있는듯.
    } else {
        echo "제목을 입력하세요.";
        echo "<a href='./180-writeForm.php'>작성 페이지로 이동</a>";
        exit;
    }

    if($content != null && $content != ''){
        // $content = sql_real_escape_string($content);    //작성된 글에 \가 텍스트로 입력이 돼서 사용 안 함.
    } else {
        echo "내용을 입력하세요.";
        echo "<a href='./180-writeForm.php'>작성 페이지로 이동</a>";
        exit;
    }

    $memberID = $_SESSION['jsh_memberID'];  //board테이블의 memberID필드에 입력할 값을 변수에 대입.

    $regTime = time();

    $sql = "INSERT INTO jsh_board (memberID, title, content, regTime) ";
    $sql .= "VALUES ({$memberID},'{$title}','{$content}',{$regTime})";
    $result = sql_query($sql);

    if($result){
        echo "저장 완료";
        echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
        exit;
    } else {
        echo "저장 실패 - 관리자에게 문의";
        echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
        exit;
    }
?>