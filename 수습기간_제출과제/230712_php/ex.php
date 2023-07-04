<?php include_once("./_common.php"); ?>
<?php
// 데이터 생성 예제117-2 
    // $sql = "INSERT INTO jsh_myMember(userId, name, password, ";  //테이블명 jsh_myMember로 
    // $sql .= "phone, email, birthDay, gender, regTime) VALUES ";

    // $member = array();

    // $member[0] = "('miu', '김미우', 'miupw', '010-1234-5678',";
    // $member[0] .= "'miu@everdevel.com','2007-09-02','w', NOW())";

    // $member[1] = "('yuna', '김유나', 'yunapw', '010-1234-5678',";
    // $member[1] .= "'yuna@everdevel.com','2011-12-05', 'w', NOW())";

    // $member[2] = "('minhoo','김민후','minhoopw','010-1234-5678',";
    // $member[2] .= "'minhoo@everdevel.com','2012-12-05', 'm', NOW())";

    // $member[3] = "('haeyun','김해윤','haeyunpw','010-1234-5678',";
    // $member[3] .= "'haeyun@everdevel.com','2013-12-05', 'w', NOW())";

    // foreach($member as $m){

    //     $query = $sql.$m;

    //     $res = sql_query($query);  //책 예제랑 다름. 여기는 http://cmme2017.godohosting.com/cmme/bbs/register_form.php 여기서 회원가입버튼 누르면 action 어디로 가는지 찾은다음
    //                                 //filezila에서 그 파일 열어보면 INSERT INTO를 PHP에서 어떻게 DB로 처리하는지 나오는데, 그게 왼쪽에 저 문장임.
                                   

    //     if($res) {
    //         echo "데이터 입력 성공<br>";
    //     } else{
    //         echo "데이터 입력 실패<br>";
    //     }

    // }


//118-1
    // $sql = "SELECT name, userId FROM jsh_myMember";  //jsh_myMember 테이블의 레코드(행, row)를 불러오는 쿼리.
    // $result = sql_query($sql);  //쿼리 송신

    // $dataCount = $result->num_rows;  //num_rows를 쓰면 불러온 레코드의 수를 반환한다.

    // for($i = 0; $i<$dataCount; $i++){
    //     $memberInfo = $result -> fetch_array(MYSQLI_NUM);
    //     echo "이름 : ".$memberInfo[0];
    //     echo "<br>";
    //     echo "아이디 : ".$memberInfo[1];
    //     echo "<hr>";
    // }

    //118-2
    // $sql = "SELECT name, userId FROM jsh_myMember";
    // $result = sql_query($sql); //쿼리 송신

    // $dataCount = $result->num_rows;

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);  //fetch_array()메소드의 아규먼트로 MYSQLI_ASSOC를 사용했다. 이걸 사용하면 인덱스는 테이블의 필드명이 사용된다.
    //     echo "이름 : ".$memberInfo['name'];  
    //     echo "<br>";
    //     echo "아이디 : ".$memberInfo['userId'];
    //     echo "<hr>";
    // }

    //118-3
    // $sql = "SELECT name, userId FROM jsh_myMember";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;
    
    // for($i=0;$i<$dataCount;$i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_BOTH);    //fetch_array의 아규먼트로 MYSQLI_BOTH를 사용하면 인덱스로 테이블의 필드명을 제공하고 숫자로도 제공한다.
    //     echo "이름 : ".$memberInfo[0];  //인덱스를 숫자로 사용하여 데이터 선택
    //     echo "<br>";
    //     echo "아이디 : ".$memberInfo['userId']; //인덱스를 테이블의 필드명으로 사용하여 데이터 선택
    //     echo "<hr>";
    // }


    //119-2  LIKE문을 사용해서 userId필드의 값이 m으로 시작하는 데이터를 출력
    // $sql = "SELECT name, userId FROM jsh_myMember WHERE userId LIKE 'm%'";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;

    // for($i = 0; $i<$dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "이름 : ".$memberInfo['name'];
    //     echo "<br>";
    //     echo "아이디 : ".$memberInfo['userId'];
    //     echo "<hr>";
    // }

    //예제 120
    // $sql = "SELECT name FROM jsh_myMember ORDER BY name DESC;";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;  //num_rows는 불러온 레코드의 수를 반환한다.

    // for($i=0;$i<$dataCount;$i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);  //MYSQLI_ASSOC 필드명으로 index 조회할때 사용
    //     echo "이름 : ".$memberInfo['name'];
    //     echo "<br>";
    // }

    //347~348p 불러올 레코드(행) 수 지정하기 예제 121-1
    // $sql = "SELECT name FROM jsh_myMember LIMIT 3;";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;
    // echo "데이터 수 : {$dataCount} <br>";

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "이름 : ".$memberInfo['name'];
    //     echo "<br>";
    // }

    //LIMIT에 값 2개를 적용하는 방법 예제 121-2
    // $sql = "SELECT * FROM jsh_myMember LIMIT 2, 3"; //앞에 2개 다음의 3개 레코드를 지정.
    // $result = sql_query($sql);  //쿼리 송신

    // $dataCount = $result->num_rows;

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "이름 : ".$memberInfo["name"];
    //     echo "<br>";
    // }

    //회원번호가 4인 회원의 전화번호를 0으로 변경. update문 예제 122-1
    // $sql = "UPDATE jsh_myMember SET phone = 0 WHERE myMemberID = 4";
    // $result = sql_query($sql);

    // if($result){
    //     echo "변경 성공";
    //     echo "<br>";
    //     $sql = "SELECT phone FROM jsh_myMember WHERE myMemberID = 4";
    //     $result = sql_query($sql);  //쿼리 송신

    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "회원번호 4의 휴대번호는 ".$memberInfo['phone'];
    // } else {
    //     echo "변경 실패";
    // }

    //4번 회원의 전화번호를 원래의 값으로 변경하고, 아이디를 minhoo에서 minhu로 변경. 예제 122-2
    // $sql = " UPDATE jsh_myMember SET phone = '010-1234-5678', ";
    // $sql .= " userId = 'minhu' WHERE myMemberID = 4; ";

    // $result = sql_query($sql);

    // if($result){
    //     echo "변경 성공";
    //     echo "<br>";
    //     $sql = "SELECT userId, phone FROM jsh_myMember WHERE myMemberID = 4";
    //     $result = sql_query($sql);

    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "회원번호 4의 전화번호는 ".$memberInfo['phone'];
    //     echo "<br>";
    //     echo "회원번호 4의 변경된 ID는 ".$memberInfo['userId'];
    // } else {
    //     echo "변경 실패";
    // }

    //기존 입력된 값을 기준으로 값을 더하는 방법. 이것을 위해 모든 회원의 전화번호를 0으로 변경
    //예제 122-3
    // $sql = "UPDATE jsh_myMember SET phone = 0;";  //jsh_myMember 테이블에 있는 phone 필드를 전부 0으로 변경 (하나만 바꿀때는 where로 조건을 준다.)
    // $result = sql_query($sql);

    // if($result){
    //     echo "변경 성공";
    //     echo "<br>";
    //     $sql = "SELECT myMemberID, phone FROM jsh_myMember";
    //     $result = sql_query($sql);

    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "회원번호 {$memberInfo['myMemberID']}의 ";
    //     echo "전화번호는 ".$memberInfo['phone'];
    //     echo "<br>";
    // }

    //기존 값(전화번호)에 3을 더하는 예제 122-4
    // $sql = "UPDATE jsh_myMember SET phone = phone+3;";  //phone=phone+3 이렇게 더할수 있음.
    // $result = sql_query($sql);

    // if($result){
    //     echo "변경 성공";
    //     echo "<br>";
    //     $sql = "SELECT myMemberID, phone FROM jsh_myMember;";  //jsh_myMember; 로 써도 되는지 테스트
    //     $result = sql_query($sql);  //쿼리 송신

    //     $dataCount = $result->num_rows;

    //     for($i = 0; $i < $dataCount; $i++){
    //         $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    //         echo "회원번호 {$memberInfo['myMemberID']}의 <br>";
    //         echo "휴대번호는 ".$memberInfo['phone'];
    //         echo "<br>";
    //         echo "<br>";
    //     }
    // } else {
    //     echo "변경 실패";
    // }

    //다시 모든 회원의 전화번호를 010-1234-5678로 변경
    // $sql = "UPDATE jsh_myMember SET phone = '010-1234-5678';";  //""안에 있는 쿼리문 끝에 ; 안 써도 기능은 됨.
    // $result = sql_query($sql);

    // if($result){
    //     echo "변경 성공";
    //     echo "<br>";
    //     $sql = "SELECT myMemberID, phone FROM jsh_myMember";
    //     $result = sql_query($sql);

    //     $dataCount = $result->num_rows;

    //     for($i=0; $i<$dataCount; $i++){
    //         $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //         echo "회원번호 {$memberInfo['myMemberID']}의 전화번호는 ".$memberInfo['phone'];
    //         echo "<br>";
    //     }
    // } else {
    //     echo "변경 실패";
    // }

    //데이터 삭제. 예제 123
    // $sql = "DELETE FROM jsh_myMember WHERE myMemberID = 4";
    // $result = sql_query($sql);

    // if($result){
    //     echo "삭제 성공";
    //     echo "<br>";
    //     $sql = "SELECT myMemberID, phone FROM jsh_myMember";
    //     $result = sql_query($sql);  //쿼리 송신
        
    //     $dataCount = $result->num_rows;

    //     echo "현재 회원 정보";
    //     echo "<br>";
    //     for($i=0; $i<$dataCount; $i++){
    //         $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //         echo "회원번호 {$memberInfo['myMemberID']}";
    //         echo "<br>";
    //     }
    // } else {
    //     echo "삭제 실패";
    // }

    //테이블 초기화하기 예제 124
    //TRUNCATE문을 사용하면 DELETE문으로 레코드를 모두 삭제한 것과는 다르게 테이블 생성 초기상태로 돌아간다는 점이다.(자세한설명 361p) (필드(column)는 남아있다.)
    // $sql = "TRUNCATE jsh_myMember";
    // $res = sql_query($sql);

    // if($res){
    //     echo "초기화 성공";
    // } else {
    //     echo "초기화 실패";
    // }

    //IN으로 다수의 조건 사용하기 (where 안 쓸 때) 예제 125
    // $sql = "SELECT myMemberID, name FROM jsh_myMember ";
    // $sql .= " WHERE myMemberID IN (1,2,3)";  //IN을 사용해서 회원번호가 1,2,3인 것들을 선택

    // $result = sql_query($sql);

    // if($result){
    //     $dataCount = $result -> num_rows;

    //     for($i = 0; $i < $dataCount; $i++){
    //         $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //         echo "회원번호 {$memberInfo['myMemberID']}의 이름은 {$memberInfo['name']}";
    //         echo "<br>";
    //     }
    // } else {
    //     echo "실패";
    // }

    //2개 이상의 테이블 사용하기. 
    //데이터 입력 예제 126-2
    $rl = array();
    $reviewList[0] = array(1, '초보자에게 좋아요');
    $reviewList[1] = array(2, '정말 초보자에게는 좋은 책이지만 깊이감은 조금 아쉽습니다.');
    $reviewList[2] = array(3, '좋습니다.');
    $reviewList[3] = array(4, '웹 개발을 처음하는 사람에게 있어 참 친절한 입문서입니다.');

    $cnt = 0;

    foreach($reviewList as $r1){
        $sql = " INSERT INTO jsh_prodReview(myMemberID, content, regTime) ";
        $sql .= " VALUES( {$r1[0]}, '{$r1[1]}' ,NOW() ) ";

        $result = sql_query($sql);
        $cnt++;

        if( $result ) {
            echo $cnt.' 데이터 입력 성공'.'<br>';
        } else {
            echo $cnt.' 데이터 입력 실패'.'<br>';
        }
    }

?>
