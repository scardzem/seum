<?php
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
?>


<?php

    $email = $_POST['userEmail'];
    $nickName = $_POST['userNickName'];
    $pw = $_POST['userPw'];
    $birthYear = (int) $_POST['birthYear'];
    $birthMonth = (int) $_POST['birthMonth'];
    $birthDay = (int) $_POST['birthDay'];

    function goSignUpPage($alert){  // 경고문구를 매개변수로 선언.
        echo $alert.'<br>';
        echo "<a href='./173-signUpForm.php'>회원가입폼으로 이동</a>";
        return;
    }

    //유효성 검사
    //이메일 검사
    if(!filter_Var($email, FILTER_VALIDATE_EMAIL)){
        goSignUpPage('올바른 이메일이 아닙니다.');
        exit;
    }

    //한글로 구성되어있는지 정규식 검사
    $nickNameRegPattern = '/^[가-힣]{1,}$/';
    if (!preg_match($nickNameRegPattern, $nickName, $matches)) {
        goSignUpPage('닉네임은 한글로만 입력해 주세요.');
        exit;
    }

    //비밀번호 검사
    if($pw == null || $pw == ''){
        goSignUpPage('비밀번호를 입력해 주세요.');
        exit;
    }

    $pw = sha1('php200'.$pw);

    //생년 검사
    if($birthYear == 0) {
        goSignUpPage('생년을 정확히 입력해 주세요.');
        exit;
    }

    //생월 검사
    if($birthMonth == 0) {
        goSignUpPage('생월을 정확히 입력해 주세요.');
        exit;
    }

    //생일 검사
    if($birthDay == 0) {
        goSignUpPage('생일을 정확히 입력해 주세요.');
        exit;
    }

    $birth = $birthYear.'-'.$birthMonth.'-'.$birthDay;

    //이메일 중복 검사
    $isEmailCheck = false;

    $sql = "SELECT email FROM member WHERE email = '{$email}'";
    // $result = $dbConnect->query($sql);
    $result = sql_query($sql);

    if( $result ) {
        $count = $result->num_rows;
        if($count == 0){
            $isEmailCheck = true;
        } else {
            echo "이미 존재하는 이메일 입니다. ";
            goSignUpPage();
            exit;
        }
    } else {
        echo "에러발생 : 관리자 문의 요망";
        exit;
    }


    //닉네임 중복 검사
    $isNickNameCheck = false;

    $sql = "SELECT nickName FROM member WHERE nickname = '{$nickName}'";
    // $result = $dbConnect->query($sql);
    $result = sql_query($sql);

    if( $result ) {
        $count = $result->num_rows;
        if($count == 0){
            $isNickNameCheck = true;
        } else {
            goSignUpPage('이미 존재하는 닉네임 입니다.');
            exit;
        }
    } else {
        echo "에러발생 : 관리자 문의 요망";
        exit;
    }

    if ($isEmailCheck == true && $isNickNameCheck == true) {
        $regTime = time();
        $sql = "INSERT INTO member(email, nickname, pw, birthday, regTime)";
        $sql .= "VALUES('{$email}', '{$nickName}', '{$pw}',";
        $sql .= "'{$birth}', {$regTime})";
        // $result = $dbConnect->query($sql);
        $result = sql_query($sql);
        

        if ($result) {
            $sql2 = "SELECT myMemberID FROM jsh_member WHERE email = '{$email}'";
            $result2 = sql_query($sql2);
            if($result2){
                $row = $result->fetch_array(MYSQL_ASSOC);
                $memberIdVal = $row['myMemberID'];
            }
            // $_SESSION['memberID'] = $dbConnect->insert_id;
            //$_SESSION['memberID'] = $dbConnect->insert_id;  //$dbConnect->insert_id 여기서 insert_id를 쓰면 $result가 true일 때니까 위에 insert문이 true라는 의미.
                                                            //회원가입 창이고, 테이블 구조 보면 memberId가 있는데 위에 insert문에서는 안 썼다. 왜냐면 자동으로 생성되니까(auto_increment)
                                                            //지금 이 문장은 세션에 'memberID'변수에 $dbConnect->insert_id 이 값을 대입한다는 건데, insert_id가 
                                                            //값을 하나씩 추가해준다고 한다. 그걸 memberID에 넣어서 세션으로 사용하는 것인데, 세션의 사용 이유가 본인 확인이니까
                                                            //$dbConnect를 건드릴 수 없는 지금은 우측의 저 부분을 지우고 위에 SELECT문으로 방금 윗줄에서 insert 한 정보의 email, pw를 select 해서
                                                            //이 줄의 우변에 넣어서 값을 대입해주면 원래 하려고 하는 기능이 작동 될 것.
            $_SESSION['memberID'] = $memberIDVal;  //$dbConnect->insert_id; id를 만들어서 세션에 넣는 대신 PK인 memberID의 값(해당 email과 일치하는 사람의 memberId)을 대입
            $_SESSION['nickName'] = $nickName;
            Header("Location:../index.php");
        } else {
            echo '회원가입 실패 - 관리자에게 문의';
            exit;
        }
    } else {
        goSignUpPage('이메일 또는 닉네임이 중복값입니다.');
        exit;
    }
?>