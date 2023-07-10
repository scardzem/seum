<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    

    echo "비밀번호 확인절차 수행하는 페이지"."<br>";

    $boardID = $_GET['boardID'];
    $boardUpdate = $_GET['update'];
    $boardDel = $_GET['delete'];
    $boardPw = $_POST['boardPw'];
    

    // echo "업데이트 get : ".$boardUpdate;
    // echo "<br>";
    // echo "delete get : ".$boardDel;
    // echo "<br>";
    // echo "입력한 비밀번호 : ".$boardPw;
    // echo "<br>";

    $sql = "SELECT boardID, boardPw FROM jsh_board ";
    $sql .= "WHERE boardID = {$boardID} AND boardPw = '{$boardPw}'";
    $result = sql_query($sql);

    $boardPwInfo = $result->fetch_array(MYSQLI_ASSOC);
    // if($result){
        if($result->num_rows == 0 || !$result){
            echo "비밀번호가 틀렸습니다.";
            echo "<br>";
            echo "<a href='183-list.php'>목록으로</a>"."<br>";
            echo "$result->num_rows"."<br>";
            echo "<br>";
            exit;
        } else {
            if(isset($boardDel)){
                Header("Location:201-deleteBoard.php?boardID={$boardID}");
                // echo "{$boardID}번 글 삭제완료."."<br>";
            } else if (isset($boardUpdate)){
                Header("Location:180-writeForm.php?boardID={$boardID}");
                // echo "{$boardID}번 글 수정완료."."<br>";
            } else{
                echo "<br>";
                // echo "비밀번호 맞음. 입력한 비밀번호 : ".$boardPw;
                Header("Location:185-view.php?boardID={$boardID}");
            }
        }
    // } else {
    //     echo "접근 불가. 관리자에게 문의하세요.";
    // }


?>