<?php
header('Content-Type: text/html; charset=utf-8');//추가
include_once("./_common.php");
?>

<!doctype html>
<html>
<head>
</head>
<body>
<?php
    if(!isset($_SESSION['jsh_memberID'])){
?>
    <a href="173-signUpForm.php">회원가입</a>
    <br>
    <a href="175-signInForm.php">로그인</a>
<?php
    } else {

    if(isset($_SESSION['jsh_nickName'])){
        echo "닉네임 : {$_SESSION['jsh_nickName']}, 로그인 성공";
        echo "<br><br>";
        
    }
?>
    <a href="180-writeForm.php">게시글 작성</a>
    <br>
    <a href="183-list.php">게시판</a>
    <br>
    <a href="survey/189-surveyForm.php">설문조사 프로그램</a>
    <br>
    <a href="gChart/195-1-surveyResultBarChart.php">투표결과 바차트로 보기</a>
    <br>
    <a href="gChart/195-2-surveyResultPieChart.php">투표결과 파이차트로 보기</a>
    <br>
    <a href="webEditor/196-editorForm.php">간단한 코딩 에디터</a>
    <br>
    <a href="parsing/200-1-selectForm.php">실시간 검색어 1위 키워드 보기</a>
    <br>
    <a href="177-signOut.php">로그아웃</a>
<?php
    }
?>


</body>
</html>