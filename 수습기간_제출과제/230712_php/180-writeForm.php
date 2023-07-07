<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/179-checkSignSession.php';
    include '179-checkSignSession.php';


?>
<!doctype html>
<html>
<head>
</head>
<body>
<form name="boardWrite" method="post" action="181-saveBoard.php">
    제목
    <br>
    <br>
    <input type="text" name="title" value='<?php echo '11'?>' required/>
    <br>
    <br>
    내용
    <br>
    <br>
    <textarea name="content" cols="80" rows="10" required >
<?php echo '글을 작성하세요' ?>
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