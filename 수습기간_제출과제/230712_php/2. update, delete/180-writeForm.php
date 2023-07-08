<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    include '179-checkSignSession.php';
if(isset($_GET['boardID']) && (int) $_GET['boardID']>0){
    $boardID = $_GET['boardID'];
        $sql = "SELECT b.boardID, b.title, b.content, m.nickname, b.regTime FROM jsh_board b ";
        $sql .= "JOIN jsh_member m ON (b.memberID = m.memberID) ";
        $sql .= "WHERE b.boardID = {$boardID}";
        $result = sql_query($sql);
    $updateInfo = $result->fetch_array(MYSQLI_ASSOC);
}
?>


<!doctype html>
<html>
<head>
</head>
<body>
<form name="boardWrite" method="post" <?php echo "action='181-saveBoard.php'"?>>
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
    <textarea name="content" cols="80" rows="10" required >
<?php echo "{$updateInfo['content']}"; ?>
    </textarea>
    <br>
    <br>
    <input type="submit" value="저장" /><br><br>
    <?php
        echo "<a href=\"183-list.php\">목록으로 이동</a>"
    ?>

</form>
</body>
</html>