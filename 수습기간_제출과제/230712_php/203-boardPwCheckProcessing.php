<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    

    echo "<h3>비밀번호 확인하는 페이지</h3>"."<br>";

    $boardID = $_GET['boardID'];
    $boardPw = $_POST['boardPw'];

    $sql = "SELECT boardID, boardPw FROM jsh_board ";
    $sql .= "WHERE boardID = {$boardID} AND boardPw = '{$boardPw}'";
    $result = sql_query($sql);

    $boardPwInfo = $result->fetch_array(MYSQLI_ASSOC);
    if($result){
        if($result->num_rows == 0 || !$result){
            echo "비밀번호가 틀렸습니다.";
            echo "<br>";
            echo "<a href='183-list.php'>목록으로</a>"."<br>";
            echo "<br>";
            exit;
        } else {
            //amos jsh 230711 요청 값에 대응하는 페이지로 이동
            if(isset($_GET['delete'])){
                Header("Location:201-deleteBoard.php?boardID={$boardID}");
            } else if (isset($_GET['update'])){
                Header("Location:180-writeForm.php?boardID={$boardID}");
            } 
            
        }
    } else {
        echo "접근 불가. 관리자에게 문의하세요.";
    }


?>