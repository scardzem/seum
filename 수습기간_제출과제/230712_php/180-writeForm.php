<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include '179-checkSignSession.php';

    
if(isset($_GET['boardID']) && (int) $_GET['boardID']>0){
    $boardID = $_GET['boardID'];
        $sql = "SELECT boardID, title, content, regTime FROM jsh_board ";
        $sql .= "WHERE boardID = {$boardID}";
        $result = sql_query($sql);
    $updateInfo = $result->fetch_array(MYSQLI_ASSOC);
}
?>
<!doctype html>
<html>
<head>
</head>
<body>
<!-- <form name="boardWrite" method="post" <?php echo "action='181-saveBoard.php'"?>> -->
<form name="boardWrite" method="post" action='181-saveBoard.php'>
    <input type="hidden" name="boardID" value = "<?php echo $boardID ?>">
    제목 <?php echo "d{$boardID}"; ?>
    <br>
    <br>
    <input type="text" name="title" value='<?php echo "{$updateInfo['title']}";?>' required/>
    <br>
    <br>
    내용
    <br>
    <br>
    <textarea name="content" cols="80" rows="10" required ><?php
        if(isset($boardID)){
            echo "{$updateInfo['content']}";
        }
    ?></textarea>
    <br>
<?php
    if(!isset($_GET['boardID'])){
    echo "<p>닉네임 : <input type='text' name='nickname' required> </p>";
    echo "<br>";
    echo "<p>비밀번호 : <input type='password' name='boardPw' required> </p>";
    }
?>
    <!-- <p>닉네임 : <input type="text" name="nickname" required> </p>
    <br>
    <p>비밀번호 : <input type="password" name="boardPw" required> </p>
    <br> -->
    
<?php
    echo "<a href=\"183-list.php\">목록으로 이동</a>"
?>
<br><br>
<input type="submit" value="저장" /><br><br>

</form>
</body>
</html>