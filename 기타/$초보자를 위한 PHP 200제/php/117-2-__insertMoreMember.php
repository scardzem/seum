<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php/108-2-connectDB.php';

    $sql = "INSERT INTO myMember(userId, name, password, ";  //테이블명 jsh_myMember로 
    $sql .= "phone, email, birthDay, gender, regTime) VALUES ";

    $member = array();

    $member[0] = "('miu', '김미우', 'miupw', '010-1234-5678',";
    $member[0] .= "'miu@everdevel.com','2007-09-02','w', NOW())";

    $member[1] = "('yuna', '김유나', 'yunapw', '010-1234-5678',";
    $member[1] .= "'yuna@everdevel.com','2011-12-05', 'w', NOW())";

    $member[2] = "('minhoo','김민후','minhoopw','010-1234-5678',";
    $member[2] .= "'minhoo@everdevel.com','2012-12-05', 'm', NOW())";

    $member[3] = "('haeyun','김해윤','haeyunpw','010-1234-5678',";
    $member[3] .= "'haeyun@everdevel.com','2013-12-05', 'w', NOW())";

    foreach($member as $m){

        $query = $sql.$m;

        $res = $dbConnect->query($query);  //
        //$res = sql_query($query);   //책 예제랑 다름. 여기는 http://cmme2017.godohosting.com/cmme/bbs/register_form.php 여기서 회원가입버튼 누르면 action 어디로 가는지 찾은다음
                                        //filezila에서 그 파일 열어보면 INSERT INTO를 PHP에서 어떻게 DB로 처리하는지 나오는데, 그게 왼쪽에 저 문장임.

        if($res) {
            echo "데이터 입력 성공<br>";
        } else{
            echo "데이터 입력 실패<br>";
        }

    }
?>