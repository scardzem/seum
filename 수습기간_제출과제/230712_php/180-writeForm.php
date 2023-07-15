<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include '179-checkSignSession.php';

    //(과제 제출본)문제점 - 이렇게 되어 있을땐 수정하는 페이지에서 url을 복사해서 다시 접속해보면 비밀번호 검증 없이 수정 페이지로 접속할 수 있다.
// if(isset($_GET['boardID']) && (int) $_GET['boardID']>0){
//     $boardID = $_GET['boardID'];
//         $sql = "SELECT boardID, title, content, regTime FROM jsh_board ";
//         $sql .= "WHERE boardID = {$boardID}";
//         $result = sql_query($sql);
//     $updateInfo = $result->fetch_array(MYSQLI_ASSOC);
// }

//비밀번호 받아야만 수정하는 페이지 작동하도록. 서버에서 폴더가 삭제돼서 나중에 기능 되는지 확인해볼것(230711)
//
if((int) $_GET['boardID']>0 && $_POST['boardPw']){
    $boardID = $_GET['boardID'];
        $sql = "SELECT boardID, title, content, regTime FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        $result = sql_query($sql);
    $updateInfo = $result->fetch_array(MYSQLI_ASSOC);
} else{
    echo "잘못된 접근입니다. 관리자에게 문의하세요.";
}

?>
<!doctype html>
<html>
<head>
</head>
<body>
<div style="position:relative;width:700px;left:50%;transform:translate(-50%, 0%);">
    <form name="boardWrite" method="post" action='181-saveBoard.php'>
        <input type="hidden" name="boardID" value = "<?php echo $boardID ?>">
        제목 
        <br>
        <input type="text" name="title" style="width:500px;" value='<?php echo "{$updateInfo['title']}";?>' required/>
        <br>
        <br>
        내용
        <br>
        <textarea name="content" style="width:500px" cols="" rows="12" required ><?php
            if(isset($boardID)){
                echo "{$updateInfo['content']}";
            }
        ?></textarea>
        <br>
    <?php
        //amos 230711 boardID를 받아오지 않았을 때(신규 글쓰기) 닉네임과 비밀번호 입력
        if(!isset($_GET['boardID'])){
        echo "<p>닉네임 : <input type='text' name='nickname' required> </p>";
        echo "<p>비밀번호 : <input type='password' name='boardPw' required> </p>";
        }
    ?>
        
    <?php
        echo "<a href=\"183-list.php\">목록으로 이동</a>"
    ?>
    <br><br>
    <input type="submit" value="저장" /><br><br>

    </form>
</div>
</body>
</html>