<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/179-checkSignSession.php';
?>
<!doctype html>
<html>
<head>
<title>웹코딩 에디터</title>
</head>
<body>
<h1>실행할 코드를 입력하세요.</h1>
<form name="webEditor" method="post" action="197-playCode.php">
    <textarea name="code" cols="100" rows="30"></textarea>
    <br>
    <input type="submit" value="PLAY CODE" />
</form>
</body>
</html>