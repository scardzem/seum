<?php
    header('Content-Type: text/html; charset=utf-8');   //추가

    // 서버 /www/cmme2017.godohosting.com 여기까지가 root.
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';
    // include "171-session.php";       //<- 이런 에러 나와서 뺐음 : Warning: session_start() [function.session-start]: Cannot send session cache limiter - headers already sent (output started at /www/cmme2017.godohosting.com/cmme/jsh/171-session.php:6) in /www/cmme2017.godohosting.com/cmme/jsh/171-session.php on line 6
    // include "../connection/163-connection.php";
    include_once("./_common.php");

    $email = $_POST['userEmail'];  //signInForm.php에서 이메일 주소 보낸 값
    $pw = $_POST['userPw'];     //signInForm.php에서 비밀번호 보낸 값 (sha1()함수로 암호화 했음.)

    function goSignInPage($alert){  //로그인 실패 시 띄울 메시지 함수 정의
        echo $alert.'<br>';
        echo "<a href='./175-signInForm.php'>로그인폼으로 이동</a>";
        return;
    }


    //유효성 검사
    //이메일 검사
    if(!filter_Var($email, FILTER_VALIDATE_EMAIL)){     //filter_Var() 함수로 이메일 유효성 검사
        goSignInPage('올바른 이메일이 아닙니다.');
        exit;
    }


    //비밀번호 검사
    if($pw == null || $pw == '') {
        goSignInPage('비밀번호를 입력해 주세요.');
        exit;
    }


    $pw = sha1('php200'.$pw);       //$pw는 로그인 창에서 입력한 비밀번호 값. 회원가입할 때 암호화한 비밀번호와 같은 값이 되도록 같은 방법으로 암호화.

    $sql = "SELECT email, nickName, memberID FROM jsh_member ";
    $sql .= "WHERE email = '{$email}' AND pw = '{$pw}'";
    $result = sql_query($sql);

    if($result){
        if($result->num_rows == 0){
            goSignInPage('로그인 정보가 일치하지 않습니다.');
            exit;
        } else {
            $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
            $_SESSION['jsh_memberID'] = $memberInfo['memberID'];
            $_SESSION['jsh_nickName'] = $memberInfo['nickName'];
            echo '로그인 성공';
            echo "<br>";
            echo "<br>";
            // Header("Location:../index.php");
            Header("Location:170-index.php");

            // var_dump($memberInfo);  //닉네임이 세션에 등록 안된거같음. 로그아웃 되게 해놓고 로그인하면서 테스트해봐야함.
            // var_dump($_SESSION);
            
        }
    }
?>