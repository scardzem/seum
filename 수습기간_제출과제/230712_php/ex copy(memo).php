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





//테이블의 데이터 불러오기
//SELECT문 사용 방법 SELECT 필드명 FROM 테이블명;
//데이터를 불러와서 PHP와 연동해서 웹페이지에 출력하려면 fetch_array() 메소드를 사용해야 한다.

//118-1  fetch_array()의 인자로 MYSQLI_NUM사용(인덱스를 숫자로 사용(기입순서))   337
    // $sql = "SELECT name, userId FROM jsh_myMember";  //jsh_myMember 테이블의 레코드(행, row)를 불러오는 쿼리.
    // $result = sql_query($sql);  //쿼리 송신

    // $dataCount = $result->num_rows;              //num_rows를 쓰면 불러온 레코드의 수를 반환한다.

    // for($i = 0; $i<$dataCount; $i++){
    //     $memberInfo = $result -> fetch_array(MYSQLI_NUM);
    //     echo "이름 : ".$memberInfo[0];
    //     echo "<br>";
    //     echo "아이디 : ".$memberInfo[1];
    //     echo "<hr>";
    // }

    //118-2 fetch_array()메소드의 아규먼트로 MYSQLI_ASSOC를 사용해서 인덱스를 문자(필드명)으로 사용
    // $sql = "SELECT name, userId FROM jsh_myMember";
    // $result = sql_query($sql); //쿼리 송신

    // $dataCount = $result->num_rows;  //쿼리 송신한 결과를 담은 변수(mysqli클래스)에 num_rows를 쓰면 불러온 레코드(행)의 수를 반환한다.

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

    //121-1 불러올 레코드(행) 수 지정하기 예제  347~348p
    // $sql = "SELECT name FROM jsh_myMember LIMIT 3;";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;
    // echo "데이터 수 : {$dataCount} <br>";

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "이름 : ".$memberInfo['name'];
    //     echo "<br>";
    // }

    //121-2 LIMIT에 값 2개를 적용하는 방법 예제 
    // $sql = "SELECT * FROM jsh_myMember LIMIT 2, 3"; //앞에 2개 다음의 3개 레코드를 지정.
    // $result = sql_query($sql);  //쿼리 송신

    // $dataCount = $result->num_rows;

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "이름 : ".$memberInfo["name"];
    //     echo "<br>";
    // }

    //122-1 회원번호가 4인 회원의 전화번호를 0으로 변경. update문 예제 
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

    //122-2 4번 회원의 전화번호를 원래의 값으로 변경하고, 아이디를 minhoo에서 minhu로 변경. 
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

    // 예제 123 데이터 삭제.
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
    // $rl = array();
    // $reviewList[0] = array(1, '초보자에게 좋아요');
    // $reviewList[1] = array(2, '정말 초보자에게는 좋은 책이지만 깊이감은 조금 아쉽습니다.');
    // $reviewList[2] = array(3, '좋습니다.');
    // $reviewList[3] = array(4, '웹 개발을 처음하는 사람에게 있어 참 친절한 입문서입니다.');

    // $cnt = 0;

    // foreach($reviewList as $r1){
    //     $sql = " INSERT INTO jsh_prodReview(myMemberID, content, regTime) ";
    //     $sql .= " VALUES( {$r1[0]}, '{$r1[1]}' ,NOW() ) ";

    //     $result = sql_query($sql);
    //     $cnt++;

    //     if( $result ) {
    //         echo $cnt.' 데이터 입력 성공'.'<br>';
    //     } else {
    //         echo $cnt.' 데이터 입력 실패'.'<br>';
    //     }
    // }


    //2개 이상의 테이블 사용하기. 
    //두 테이블의 데이터를 가져오는 예제 126-3 (371)
    // $sql = "SELECT m.name, r.content, r.regTime FROM jsh_myMember m JOIN jsh_prodReview r ";
    // $sql .= "ON (m.myMemberID = r.myMemberID);";

    // $res = sql_query($sql);
    
    // if($res){
    //     $dataCount = $res->num_rows;

    //     for($i = 0; $i < $dataCount; $i++){
    //         $reviewInfo = $res->fetch_array(MYSQLI_ASSOC);
    //         echo "{$reviewInfo['regTime']} - {$reviewInfo['name']}님, {$reviewInfo['content']}";
    //         echo "<br>";
    //     }
    // } else {
    //     echo "실패";
    // }

    //127-1 성적정보 schoolRecord 테이블 생성 (373)
    // $sql = "CREATE TABLE jsh_schoolRecord (";
    // $sql .= "schoolRecordID int(10) unsigned AUTO_INCREMENT ";
    // $sql .= "COMMENT '학생 번호',";
    // $sql .= "myMemberID int unsigned NOT NULL COMMENT '회원번호',";
    // $sql .= "class tinyint unsigned comment '소속 클래스(반)',";
    // $sql .= "english tinyint unsigned NOT NULL COMMENT '영어 점수',";
    // $sql .= "math tinyint unsigned NOT NULL COMMENT '수학 점수',";
    // $sql .= "science tinyint unsigned NOT NULL COMMENT '과학 점수',";
    // $sql .= "japanese tinyint unsigned NOT NULL COMMENT '일본어 점수',";
    // $sql .= "coding tinyint unsigned NOT NULL COMMENT '코딩 점수',";
    // $sql .= "PRIMARY KEY (schoolRecordID)";
    // $sql .= ") CHARSET=utf8 COMMENT='성적 정보';";

    // $result = $dbConnect->query($sql);

    // if ( $result ) {
    //     echo "테이블 생성 완료";
    // } else {
    //     echo "테이블 생성 실패";
    // }

    //127-2 성적 데이터 입력 (374)
    // $score = array();

    // $score[0] = array(1, 1, 90, 80, 90, 90, 100);
    // $score[1] = array(2, 1, 85, 90, 80, 80, 100);
    // $score[2] = array(3, 2, 100, 90, 70, 70, 100);
    // $score[3] = array(4, 2, 90, 86, 90, 70, 100);

    // $cnt = 0;

    // foreach($score as $s){
    //     $sql = "INSERT INTO jsh_schoolRecord";
    //     $sql .= "(myMemberID, class, english, math, science, japanese, coding)";
    //     $sql .= "VALUES({$s[0]},{$s[1]},{$s[2]},{$s[3]},{$s[4]},{$s[5]},{$s[6]})";

    //     $result = sql_query($sql);
    //     $cnt++;

    //     if( $result ) {
    //         echo $cnt.' 데이터 입력 성공'.'<br>';
    //     } else {
    //         echo $cnt.' 데이터 입력 실패'.'<br>';
    //     }
    // }

    



        // //127-3 count()사용 (376)
    // function schoolRecord(){
    //     // global $dbConnect;
    //     $sql = "SELECT count(class) FROM jsh_schoolRecord";  //count(필드명) 으로 해당 필드의 레코드 개수 카운트
    //     $result = sql_query($sql); //쿼리 송신
    //     $reviewInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo 'class필드를 기준으로 한 레코드 수 : ';
    //     echo $reviewInfo['count(class)'];
    //     echo "<br>";
    // }

    // schoolRecord();

    // //schoolRecordID가 1인 레코드의 class필드 값을 NULL로 변경
    // $sql = "UPDATE jsh_schoolRecord SET class = NULL WHERE schoolRecordID = 1";
    // sql_query($sql);
    // if($sql){
    //     echo "성공";
    // } else {
    //     echo "실패";
    // }

    // schoolRecord();

    // //count(필드명) : 레코드의 개수를 표시 - 값이 null인 경우는 포함하지 않음
    // //count(*) : null을 포함

    //127-5 sum() 함수 사용 (378)
    // $sql = "SELECT sum(english) FROM jsh_schoolRecord";
    // $result = sql_query($sql);
    // $score = $result->fetch_array(MYSQLI_ASSOC);
    // echo '영어 점수 합계 : '.$score['sum(english)'];

    //127-6 avg() 함수 사용 (379)
    // $sql = "SELECT avg(math) FROM jsh_schoolRecord";
    // $result = sql_query($sql);
    // $score = $result->fetch_array(MYSQLI_ASSOC);
    // echo "수학점수 평균 : ".round( $score['avg(math)'], 1);

    //127-7 max() 함수 사용(최대값) 379
    // $sql = "SELECT max(japanese) FROM jsh_schoolRecord";
    // $result = sql_query($sql);
    // $score = $result->fetch_array(MYSQLI_ASSOC);
    // echo "가장 높은 일본어 점수 : ".$score['max(japanese)'];

    //127-8 min() 함수 사용(최소값) 380
    // $sql = "SELECT min(math) FROM jsh_schoolRecord";
    // $result = sql_query($sql);
    // $score = $result->fetch_array(MYSQLI_ASSOC);
    // echo "가장 낮은 수학 점수 : ".$score['min(math)'];


    


    //그룹별 집계. 381
    //128-1 GROUP BY 
    // $sql = "UPDATE jsh_schoolRecord SET class = 1 WHERE schoolRecordID = 1";  //앞의 예제에서 NULL을 입력했던 class 필드의 값이 NULL인 레코드의 값을 1로 변경하는 쿼리문.
    // sql_query($sql);

    // $sql = "SELECT class, avg(english) AS avgEng FROM jsh_schoolRecord GROUP BY class";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;

    // for($i = 0; $i<$dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "반 : ".$memberInfo['class'];
    //     echo "<br>";
    //     echo "평균 영어 점수 : ".$memberInfo['avgEng'];
    //     echo "<hr>";
    // }

    //128-2 having (GROUP BY를 사용할 때는 WHERE 대신 HAVING으로 조건을 준다. 383)
    // $sql = "SELECT class, sum(japanese) FROM jsh_schoolRecord GROUP BY class ";
    // $sql .= "HAVING sum(japanese) >= 170";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "반 : ".$memberInfo['class'];
    //     echo "<br>";
    //     echo "합산 점수 : ".$memberInfo['sum(japanese)'];
    //     echo "<hr>";
    // }

    //2개 이상의 테이블 묶어서 사용하기 (384)
    //UNION 명령문

    //129-2 insert. 129-1에서 만든 테이블에 레코드를 입력한다. Old에 6개 New에 3개 입력.
    // $oldList = array();
    // $oldList[0] = array('김태영', 'ever@everdevel.com');
    // $oldList[1] = array('김미우', 'miu@everdevel.com');
    // $oldList[2] = array('김유나', 'yuna@everdevel.com');
    // $oldList[3] = array('김민후', 'minhoo@everdevel.com');
    // $oldList[4] = array('김해윤', 'haeyun@everdevel.com');
    // $oldList[5] = array('조주흥', 'pika@everdevel.com');

    // $newList = array();
    // $newList[0] = array('조주흥', 'pika@everdevel.com');
    // $newList[1] = array('유우코', 'kobayashiyuko@everdevel.com');
    // $newList[3] = array('유리', 'hoshinayuri@everdevel.com');

    // $inputList = array();
    // $inputList['jsh_dropOutOld'] = $oldList;
    // $inputList['jsh_dropOutNew'] = $newList;

    // $cnt = 0;

    // foreach($inputList as $key => $il){
    //     foreach($il as $i){
    //         $sql = "INSERT INTO {$key}(name,email) VALUES('{$i[0]}', '{$i[1]}')";
    //         $result = sql_query($sql);
    //         $cnt++;

    //         if( $result ){
    //             echo $cnt." 데이터 입력 성공";
    //         } else {
    //             echo $cnt." 데이터 입력 실패";
    //         }
    //         echo '<br>';

    //     }
    // }




    //UNION 사용 방법 389
    //(첫번째 테이블의 SELECT문) UNION (두번째 테이블의 SELECT문)
    //주의 : SELECT문에서 불러올 필드명을 기입할 때 앞과 뒤의 select문에서 입력한 필드의 수(내용도)가 같아야 한다. (중복된 정보는 한번만 출력된다.)
    //ex)(SELECT name, email FROM dropOutOld) UNION (SELECT name, email FROM dropOutNew);

    //129-3 UNION 사용 예제 (390)
    // $sql = "(SELECT name, email FROM jsh_dropOutOld)";
    // $sql .= " UNION "; //UNION의 앞뒤에 공백이 있습니다.
    // $sql .= "(SELECT name, email FROM jsh_dropOutNew)";

    // $result = sql_query($sql); //쿼리 송신

    // $dataCount = $result->num_rows;

    // for($i = 0; $i<$dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "이름 : ".$memberInfo['name'];
    //     echo "<br>";
    //     echo "이메일 : ".$memberInfo['email'];
    //     echo "<hr>";
    // }

    //129-4 중복된 정보도 함께 보려면 UNION ALL을 사용해야 한다. (391)
        //UNION ALL을 사용해서 old와 new에 모두 있는 조주흥이 2번 모두 출력된다.
    // $sql = "(SELECT name, email FROM jsh_dropOutOld)";
    // $sql .= " UNION ALL "; //UNION ALL의 앞뒤에 공백이 있습니다.
    // $sql .= "(SELECT name, email FROM jsh_dropOutNew)";

    // $result = sql_query($sql); //쿼리 송신

    // $dataCount = $result->num_rows;

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "이름 : ".$memberInfo['name'];
    //     echo "<br>";
    //     echo "이메일 : ".$memberInfo['email'];
    //     echo "<hr>";
    // }
    



    //130. 서브쿼리 사용하기 (393)
        //ex) SELECT * FROM schoolRecord WHERE english = (SELECT max(english) FROM schoolRecord);
    
        //130-1 조건문에 사용하는 서브쿼리
    // $sql = "SELECT * FROM jsh_schoolRecord WHERE english = ";
    // $sql .= "(SELECT max(english) FROM jsh_schoolRecord)";

    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;

    // for($i=0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "학생번호 : ".$memberInfo['myMemberID'];
    //     echo "<br>";
    //     echo "클래스 : ".$memberInfo['class'];
    //     echo "<br>";
    //     echo "영어 : ".$memberInfo['english'];
    //     echo "<hr>";
    // }


    //130-2 SELECT문에 사용하는 서브쿼리
        //ex) SELECT *, (SELECT avg(English) FROM schoolRecord) as englishAVG FROM schoolRecord;

    // $sql = "SELECT *, (SELECT avg(English) FROM jsh_schoolRecord) as englishAVG, (SELECT max(English) FROM jsh_schoolRecord) as engMax ";
    // $sql .= "FROM jsh_schoolRecord;";

    // $result = sql_query($sql); //쿼리 송신

    // $dataCount = $result->num_rows;

    // for($i = 0; $i < $dataCount; $i++){
    //     $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //     echo "학생번호 : ".$memberInfo['myMemberID'];
    //     echo "<br>";
    //     echo "클래스 : ".$memberInfo['class'];
    //     echo "<br>";
    //     echo "영어 : ".$memberInfo['english'];
    //     echo "<br>";
    //     echo "영어 평균 점수 : ".$memberInfo['englishAVG'];
    //     echo "<br>";
    //     echo "영어 최고 점수 : ".$memberInfo['engMax'];
    //     echo "<hr>";
    // }

    //131. 특정 필드에 중복값 넣지 않기. (397)
    //UNIQUE. (이메일같이 한사람에 하나씩만 있어야 하는 값에 UNIQUE를 지정.)
    // $sql = "ALTER TABLE jsh_myMember modify email varchar(30) ";
    // $sql .= "NOT NULL UNIQUE COMMENT '고객의 이메일 주소'";
    // $result = sql_query($sql); //쿼리 송신

    // if( $result ) {
    //     echo "변경완료";
    // } else {
    //     echo "변경실패";
    // }


    //위에서 unique 추가했으니 email필드에 중복값 넣을수 없게 되었다. 그래서 이미 존재하는 값을 넣는 쿼리 작성.
    // $sql = "INSERT INTO jsh_myMember(userId, name, password, ";
    // $sql .= "phone, email, birthDay, gender, regTime) ";
    // $sql .= "VALUES('pepper', '페퍼', 'vpvjeptm', '010-1234-5678',";
    // $sql .= "'miu@everdevel.com', '2015-11-18', 'm', now());";

    // $result = sql_query($sql); //쿼리 송신

    // if( $result ) {
    //     echo "입력 완료";
    // } else {
    //     echo "입력 실패";  //이미 존재하는 이메일 주소를 unique가 설정된 email 필드에 입력하려 했기 때문에 입력에 실패한다.
    // }

    //132. 서로 다른 필드의 값을 합쳐서 출력하기 (CONCAT)
        // ex) SELECT CONCAT(name,'의 이메일 주소는', email,'입니다.') FROM myMember.
    
    //132-2 concat.php (400)
    //사용법 : SELECT CONCAT(합칠 문자열 또는 필드, 합칠 문자열 또는 필드) FROM 테이블명
    // $sql = "SELECT CONCAT(name, '의 이메일 주소는 ', email, '입니다.') ";
    // $sql .= "AS word FROM jsh_myMember;";

    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;

    // for($i = 0; $i < $dataCount; $i++){
    //     $concat = $result->fetch_array(MYSQLI_ASSOC);
    //     echo $concat['word'];
    //     echo '<br>';
    // }




    //133. (테이블, 필드에) 인덱스 사용하기 402
    //인덱스 적용 방법 : INDEX(필드명)
    //이미 존재하는 테이블에서 인덱스를 추가하려면 ALTER 명령문 사용. 아래 예제는 이미 존재하는 jsh_myMember테이블의 name 필드에 인덱스를 추가하는 쿼리문.
    //ex) ALTER TABLE jsh_myMember ADD INDEX(name);

    //133. index.php
    // $sql = "ALTER TABLE jsh_myMember ADD INDEX(name);";

    // $result = sql_query($sql);

    // if($result){
    //     echo "적용 완료";

    // } else {
    //     echo "적용 실패";
    // }






    //FORM 태그 사용 방법 (407)
//사용 방법 : <form name="폼 태그 이름" method="데이터 전송 방식" action="정보를 보낼 주소"></form>
//form태그의 type속성의 값에 따라서 기능이 달라진다.
    //type속성은 text, password, checkbox(value속성을 함께 사용), 

//135. FORM태그에서 사용하는 input태그 (409)
//input태그의 name속성의 값으로 서버사이드 언어(php)에서 데이터를 전달받을 수 있다.

//137. form태그에서 사용하는 input태그-checkbox  (413)
    //value 속성 함께 사용, (text나 password는 입력한 값 자체가 value라서 사용 안함), checked속성 사용 가능

//138. FORM 태그에서 사용하는 input 태그 - radio (415)
    //다수의 선택지에서 1개만 선택하려면 name속성의 값을 동일하게 해줘야 한다.


//139. FORM 태그에서 사용하는 input 태그 - submit  (417)
    //type 속성값이 submit이면 FORM태그의 action 속성에 명시된 파일로 입력한 데이터를 전송하는 버튼이 생성된다.

//140. FORM 태그에서 사용하는 input 태그 - email (419)
    //type속성값이 email이면 email입력폼이 된다. 메일주소 규칙인 @(at)과 도메인이 있어야 한다.


//141. FORM 태그에서 사용하는 input 태그 - url (419)


//142. FORM 태그에서 사용하는 textarea 태그 (423)
//textarea태그의 사이즈를 조정하려면 cols와 rows 속성에 값을 주면 된다.


//143. FORM 태그에서 사용하는 select태그 사용 방법 (423)

//144. FORM태그에서 사용하는 input 태그 - file (427)
    //파일을 업로드하는 폼을 만들려면 input 태그의 type속성 값으로 file 사용
    //type속성에 file을 적용하는 방법 : <input type ="file" name="attachedFile" />
    //파일 업로드 폼을 만들 때는 form 태그에 enctype 속성을 적용하고 값으로 multipart/form-data을 사용한다.
    //작성하지 않으면 업로드한 파일의 이름(경로 포함)만 업로드되고 실제 파일은 업로드가 되지 않는다.

    //144.  input-file.php
    /*
        <!DOCTYPE html>
        <html>
        <head>
        <title>INPUT태그 type='url'</title>
        </head>
        <body>
        <form name="" method="" action="" enctype="multipart/form-data">
            파일 : <input type="file" name="attachedFile" />
        </form>
        </body>
        </html>
    */

//145. GET방식으로 데이터 받기 (429)      **********
    //form태그의 method속성에 데이터 전송 방식을 대입한다. 이 방식에는 GET과 POST가 있다. GET은 데이터를 URL에 붙여 데이터를 전송하는 방식.
    //나이와 취미를 입력하는 form이 있고 값을 전달하면 URL은 다음과 같이 값이 붙어서 전송된다.
    //ex) http://주소?age=20&hobby=collection
        //위 주소에서 age는 나이를 작성하는 입력폼 name속성의 값이 표시되고(key. 'hobby'가 value), hobby는 취미를 선택하는 입력폼의 name속성 값(key)이 표시된다.
    //위와 같은 주소를 요청받은 PHP 파일에서 데이터를 사용하려면 $_GET을 사용한다. $_GET의 데이터타입은 배열이다. 인덱스는 파라미터(key)가 사용된다. 그러므로 URL의 파라미터
    //age와 hobby의 값을 다음과 같이 전달받아 사용할 수 있다.
        //다음은 ?age=20&hobby=collection의 데이터를 받는 코드.
            //age 변수의 값 받기 : $_GET['age']
            //hobby 변수의 값 받기 : $_GET['hobby']

    //145. get.php 
    // echo "age의 값 : ".$_GET['age'];  //배열 $_GET['age'];에 있는 인덱스 age의 값을 출력
    // echo '<br>';
    // echo "hobby의 값 : ".$_GET['hobby'];  //배열 $_GET['hobby'];에 있는 인덱스 hobby의 값을 출력
    //위의 코드를 그냥 실행하면 url에 전달받은 값이 없기 때문에 표시가 되지 않는다. 아래 주소를 URL에 입력해서 확인하면 값이 나온다.
    //http://cmme2017.godohosting.com/cmme/jsh/ex.php?age=20&hobby=collection


//146. GET방식으로 FORM 태그의 데이터 전송 (431)
// echo "age의 값 : ".$_GET['age'];  //배열 $_GET['age'];에 있는 인덱스 age의 값을 출력
// echo '<br>';
// echo "hobby의 값 : ".$_GET['hobby'];  //배열 $_GET['hobby'];에 있는 인덱스 hobby의 값을 출력

/*
    <!DOCTYPE html>
    <html>
    <head>
    <title>GET방식 데이터 입력폼</title>
    </head>
    <body>
    <form name="test" method="get" action="ex.php">  <!-- ex.php파일로 input.name의 인덱스(key)와 값들을 보낸다. -->
        나이 : <input type="text" name="age" />
        취미 : <input type="text" name="hobby" />
        <input type="submit" value="전송" />
    </form>
    </body>
    </html>
*/




//147~148. POST 방식 데이터 받기      433~436
    //PHP에서 배열 $_POST 을 사용한다. POST방식으로 받는 것은 GET방식으로 받는 것과 크게 드라지 않다.
    //POST방식은 HTTP의 리퀘스트 내의 head와 body로 구분되는 곳의 body 영역에 데이터를 실어서 보내는 방식.
    //ex) $_POST[name 속성값];

    //147. post.php
    echo "age의 값 :".$_POST['age'];  //client에서 post로 보낸 요청을 받아서 배열로 저장한 변수.(예약어인듯)
    echo "<br>";
    echo "hobby의 값 : ".$_POST['hobby'];
/*
    <!DOCTYPE html>
    <html>
    <head>
    <title>GET방식 데이터 입력폼</title>
    </head>
    <body>
    <form name="test" method="post" action="ex.php">  <!-- ex.php파일로 input.name의 인덱스(key)와 값들을 보낸다. method="post" -->
        나이 : <input type="text" name="age" />
        취미 : <input type="text" name="hobby" />
        <input type="submit" value="전송" />
    </form>
    </body>
    </html>
*/





    //149. 입력한 데이터를 데이터베이스에 저장하기      (437)
    //앞에서 이미 form태그에서 입력한 데이터를 서버로 전송하는 방법을 배웠고, 테이블에 데이터를 입력하는 방법도 배웠으므로 이 두가지를 응용하면 구현할 수 있다.
    //ex) INSERT INTO 테이블명 (field1, field2) VALUES ($_POST['v'], $_POST['v']);

    //149-1 form-post.php      (437)

    //149-2 insert.php
    // $uId = $_POST['userId'];
    // $uName = $_POST['userName'];
    // $uPw = $_POST['userPw'];
    // $uPhone = $_POST['userPhone'];
    // $uEmail = $_POST['userEmail'];
    // $uBirthDay = $_POST['birthYear'].'-'.$_POST['birthMonth'].'-'.$_POST['birthDay'];
    // $uGender = $_POST['userGender'];

    // $sql = "INSERT INTO jsh_myMember (userId, name, password,";
    // $sql .= " phone, email, birthDay, gender, regTime)";
    // $sql .= "VALUES ('{$uId}','{$uName}','{$uPw}','{$uPhone}',";
    // $sql .= "'{$uEmail}','{$uBirthDay}','{$uGender}',NOW())";

    // $result = sql_query($sql);

    // if($result) {
    //     $sql = "SELECT userId, name FROM jsh_myMember";
    //     $result = sql_query($sql);

    //     $dataCount = $result->num_rows;

    //     for($i = 0; $i < $dataCount; $i++){
    //         $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    //         echo "아이디 : ".$memberInfo['userId'];
    //         echo "<br>";
    //         echo "이름 : ".$memberInfo['name'];
    //         echo "<hr>";
    //     }
    // } else {
    //     echo "입력 실패";
    // }
/*
    <!DOCTYPE html>
    <html>
    <head>
    <title>myMember 테이블의 데이터 입력 폼</title>
    </head>
    <body>
    <form name="test" method="post" action="./ex.php">
        <input type="text" name="userId" placeholder="아이디 입력" required />  <!-- required : 해당 입력폼 필수로 입력하게 지정. -->
        <br>
        <input type="text" name="userName" placeholder="이름 입력" required />
        <br>
        <input type="password" name="userPw" placeholder="비밀번호 입력" required />
        <br>
        <input type="text" name="userPhone" placeholder="휴대폰번호 입력" required />
        <br>
        <input type="email" name="userEmail" placeholder="이메일 입력" required />
        <br>
        생일 : <br>
        <select name="birthYear" required>
    <?php
        $thisYear = date('Y', time());
        for($i = 1960; $i <= $thisYear; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
    ?>
        </select>년
        <select name="birthMonth" required>
    <?php
        for($i = 1; $i <= 12; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
    ?>
        </select>월
        <select name="birthDay" required>
    <?php
        for($i = 1; $i <= 31; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
    ?>
        </select>일
        <br>
        성별 : <br>
        남<input type="radio" name="userGender" value="m" required />
        여<input type="radio" name="userGender" value="w" required />
        <br>
        <input type="submit" value="입력" />
    </form>
    </body>
    </html>
*/




//150-1, 150-2. textarea태그의 내용을 DB에 저장하기 - 따옴표 대응 (addslases(문자열); 함수)
    // $text = addslashes($_POST['text']); //오히려 이걸 사용하면 \가 하나 더 써져서 문자열에 \이 문자가 반영이 됨(세팅이 미리 돼있을지도).
    // $text = $_POST['text'];  //예제로 먼저 입력했던 내용. 이렇게 사용하면 입력한 문자열에 '가 있으면 에러가 발생한다고 하는데 기능은 됐음.(자세한건 책 444p)

    // $sql = "INSERT INTO jsh_prodReview(myMemberID, content, regTime) ";
    // $sql .= "VALUES(1,'{$text}',NOW())";
    // echo $sql;
    // echo '<br>';

    // $res = sql_query($sql);

    // if($res){
    //     echo "입력 성공";
    // }else{
    //     echo '입력 실패';
    // }
/*
    <!DOCTYPE html>
    <html>
    <head>
    <title>TEXTAREA태그 입력폼</title>
    </head>
    <body>
    <form name="textsave" method="post" action="ex.php">
        <textarea name="text"></textarea>
        <input type="submit" value="저장" />
    </form>
    </body>
    </html>
*/





//151. textarea 태그의 내용을 데이터베이스에 불러오기 - 줄바꿈 대응
//여러 라인으로 작성된 텍스트를 한 개의 줄에 표시하지 않는 방법. nl2br() 함수 사용.      446

    //151. nl2br.php
    //prodReview 테이블에 마지막으로 입력된 내용을 불러오는 쿼리(150예제에서 입력한 내용)
    
    // $sql = "SELECT * FROM jsh_prodReview ORDER BY prodReviewID DESC LIMIT 1";
    // $res = sql_query($sql);

    // $prodReview = $res->fetch_array(MYSQLI_ASSOC);
    // // echo $prodReview['content'];     //이대로 불러와보면 입력할 때는 줄바꿈을 했지만 불러올때는 한 줄로 나온다.
    // echo nl2br( $prodReview['content'] );   //이렇게 문자열을 nl2br()로 감싸주면 줄바꿈 했던게 적용돼서 출력된다.





//152-1, 152-2. textarea 태그의 내용을 파일에 저장하기 (448)
//fwrite()함수 사용
//textarea태그에서 입력한 텍스트를 파일에 저장하는 방법.  (449)

// $content = $_POST['text'];
//     $fileName = './text.txt';

//     $fp = fopen($fileName,'w');

//     if( $fp ) {
//         $fw = fwrite($fp, $content);

//         if( $fw ) {
//             echo "파일 쓰기 완료";
//         }else{
//             echo "파일 쓰기 실패";
//         }
//     } else {
//         echo "파일 열기 실패";
//     }
/*
    <!DOCTYPE html>
    <html>
    <head>
    <title>TEXTAREA태그 입력폼</title>
    </head>
    <body>
    <form name="textsave" method="post" action="ex.php">
        <textarea name="text"></textarea>
        <input type="submit" value="저장" />
    </form>
    </body>
    </html>
*/





//153. 파일 내용 불러오기      451
// $filePathName = "./text.txt";
// if(file_exists($filePathName)){
//     //파일 열기
//     $fp = fopen($filePathName, 'r');  //읽기만 가능하게 파일 오픈 (fopen(파일, 'r'))
//     if($fp){
//         //파일 읽기
//         $fr = fread($fp, filesize($filePathName));
//         if($fr){
//             echo nl2br($fr);    //내용 출력 (nl2br()함수로 줄바꿈을 포함하여 표시)
//             // echo $fr;   //이렇게 출력하면 줄바꿈 무시되고 한줄로만 출력됨
//             fclose($fp);    //파일 닫기
//         } else {
//             echo "파일 읽기에 실패";
//         }
//     } else {
//         echo "파일 열기에 실패";
//     }
// } else {
//     echo "파일이 존재하지 않음";
// } 









//154. 이미지 파일을 서버에 업로드하기 move_uploaded_file() 함수 사용      453
    //앞에서 FORM태그의 input태그에서 type속성 값이 file일 때 파일을 업로드할 수 있는 폼을 만드는 방법에 대해 알아보았다.
    //서버에 파일을 전송하여 파일을 업로드하는 방법에 대해 알아보자.
    //아래 코드에 대한 설명은 457페이지 (explode()함수 설명, move_uploaded_file() 함수 )

    //154-1, 154-2. fileUploadForm.php
    //파일을 업로드하면 배열 $_FILES이 어떤 값을 갖는지 확인.
/*    echo '<pre>';
    var_dump($_FILES);  //이 결과를 보면 $_FILES는 받은 자료(업로드한 파일)의 정보를 배열로 받는다. 이미지 파일 업로드했을때 ['name']=>'happyCat.png', ['type']=>'image/png' 등의 5개의 배열을 값으로 가진다.
    echo '</pre>';
    //이미 html에서 서버의 임시 파일을 저장하는 공간에는 파일이 업로드 된 상태이다.
    //임시로 업로드된 파일을 원하는 장소에 옮기는 작업이 필요하다. 이를 간으하게 해주는 함수는 move_uploaded_file() 
        //move_uploaded_file() 에 두 개의 아규먼트가 들어간다. 첫번째는 업로드한 파일의 임시 위치, 두 번째 아규먼트에는 옮길 위치 및 파일명이다.
        //ex)move_uploaded_file($_FILES['imgFile']['tmp_name'], './happyCat.png');
    //154-2. imgUpload.php      (455)
    //업로드한 파일을 현재 작업중인 [php] 폴더로 저장하는 예제.
    
    //임시 저장된 정보(html에서 업로드한 상태)
    $myTempFile = $_FILES['imgFile']['tmp_name'];  //$_FILES가 가진 ['imgFile']인덱스가 가진 5개의 값이 배열이라서 두번째 인덱스['tmp_name']으로 접근하는 것. 
    
    //파일 타입 및 확장자 구하기
    $fileTypeExtension = explode("/", $_FILES['imgFile']['type']);

    //파일 타입
    $fileType = $fileTypeExtension[0];
    //파일 확장자
    $extension = $fileTypeExtension[1];

    //확장자 검사
    $isExtGood = false;

    switch($extension){
        case 'jpeg':
        case 'bmp':
        case 'gif':
        case 'png':
        $isExtGood = true;  //case 중에 일치하는게 있으면 확장자 검사 결과를 true로.
        break;
        default :
            echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. - switch";
            exit;
            break;
    }

    //이미지 파일이 맞는지 확인
    if($fileType == 'image'){
        //허용할 확장자를 jpg, bmp, gif, png로 정함, 그 외에는 업로드 불가
        if($isExtGood){
            //임시 파일 옮길 저장 및 파일명
            $myFile = "./hppyCat.{$extension}";
            //임시 저장된 파일을 우리가 저장할 장소 및 파일명으로 옮김
            $imageUpload = move_uploaded_file($myTempFile, $myFile);

            //업로드 성공 여부 확인
            if($imageUpload == true){
                echo '파일이 정상적으로 업로드 되었습니다. <br>';
                echo "<img src='{$myFile}' width='100'/>";
            } else {
                echo '파일 업로드에 실패했습니다.';
            }
        }
        //확장자가 jpg, bmp, gif, png가 아닐때
        else{
            echo "허용하는 확장자는 jpg, bmp, gif, png 입니다. -else";
            exit;
        }
    }
    //type이 image가 아닐 때
    else {
        echo "이미지 파일이 아닙니다.";
        exit;
    }
*/
//------154-1. 업로드 UI
/*
<!DOCTYPE html>
<html>
<head>
<title>파일업로드 폼</title>
</head>
<body>
    <form   form name="fileUpload" method="post" action="./ex.php"
            enctype="multipart/form-data">    <!-- 파일 업로드할때는 enctype="multipart/form-data" 를 넣어줘야 한다. -->
    <input type="file" name="imgFile" />
    <input type="submit" value="업로드"/>
</form>
</body>
</html>
*/



----------------------------------------------------------------------------------------------------------------------------------

//155 JSON 언어.  (459)
/*
힌트 : JSON은 서로 다른 언어 간에 데이터를 전달하는 역할.    
PHP를 사용하여 JSON데이터로 반환하여 사용하는 경우가 많다.
우선 JSON에 대해 알아보자. 기본적으로 다음과 같은 구조를 가졌다. PHP로 생각하면 $변수명 = 값과 같다.
    ex) {변수명 : 값}
변수가 userID이고 userID변수의 값이 mickey 이면 다음과 같이 표현한다.
    ex) 1: {userID : 'mickey'}
하나의 변수에 여러 데이터를 담으려면 값을 배열로 사용한다.
    ex) 1: {userID : ['first','second','third']}
*/





//156. 자바스크립트로 JSON 데이터 다루기 (460)
//JSON은 결과적으로 클라-서버간 데이터 이동을 하기 위해서 다루는것이고
//클라이언트 사이드에서 JSON 데이터를 학습 후 서버사이드에서 JSON을 다루는 방법을 알아보자.
//클라에서는 자바스크립트 언어를 사용한다.

//156-1. json-script.php      (462)
//JSON데이터를 변수에 대입하고 값 확인하기
/*
<!DOCTYPE html>
<html>
<head>
    <script>
        data = {userID : 'micky'};  //{키 : 값}, {변수 : 값} 이런 느낌
        console.log(data.userID);  //JSON데이터의 값에 접근하는 방법.
    </script>
</head>
<body></body>
</html>
*/

//156-2 json-script      (463)
//JSON데이터가 배열일 때 값을 가져오기
/*
<!DOCTYPE html>
<html>
<head>
    <script>
        data = {userID:['first','second','third']};
        console.log(data.userID[0]);
        console.log(data.userID[1]);
        console.log(data.userID[2]);
    </script>
</head>
<body></body>
</html>
*/

//156-3 좀더 복잡한 구조의 JSON데이터 다루는 연습. (465)
/*
<!DOCTYPE html>
<html>
<head>
    <script>
    data = {
        student: [{
                name: 'mima',
                score: {
                    math: 4,
                    english: 5,
                    science: 6
                }
            },
            {
                name: 'haro',
                score: {
                    math: 7,
                    english: 8,
                    science: 9
                }
            }
        ]
    };
    //데이터에서 student 변수의 첫 번째 데이터의 score 변수의 math 변수의 값을 가져오는 코드
    console.log(data.student[0].score.math);  //배열은 인덱스[숫자]로 접근, 그 안에 있는 데이터에는 .'key'으로 접근
    </script>
</head>
<body>
</body>
</html>
*/




//157. PHP에서 JSON 데이터 다루기      (466)
    //JSON데이터를 파일로 만들어서 PHP의 file_get_contents() 함수(파일의 내용을 불러오는(반환) 함수)를 사용.

    //157-1. JSON 데이터를 파일로 저장.      (466)
    //아래 코드를 입력한 텍스트 파일을 .json 확장자로 저장한다.
        //{"student":[{"name":"mima","score":{"math":4,"english":5,"science":6}},{"name":"haro","score":{"math":7,"english":8,"science":9}}]}
    
    //157-2. file_get_contents()함수로 157-1.json 파일을 불러온다. (파일의 내용을 반환)      (467)
    /*
    $data = file_get_contents('157-1.json');
    if($data !== false) {
        echo "데이터형 : ".gettype($data)."<br>";  //타입 확인해보면 string 타입임. 즉 JSON의 name 변수, score 변수를 찾아서 활용할 수 없는 상태.
                                                  //무슨말이냐면, 앞에 data.student[0].score.math이렇게 접근하는건 자바스크립트고, php는 접근방식이 다르다. ***
        echo $data;  //그냥 출력하면 json데이터 출력됨.
    } else {
        echo "실패";
    }
    */

    //157-3. jsonDecode.php 
    //sting타입인 json 파일을 배열로 변경하기 위해서는 json_decode() 함수를 사용한다.  *****
    //json_decode() 함수 사용 방법 : json_decode(변수, true);
    
    // $data = file_get_contents('./157-1.json');
    
    // if($data !== false){
    //     $data = json_decode($data, true);
    //     echo "데이터형 : ".gettype($data)."<br>";
    //     echo "원하는 값 : ".$data['student'][0]['score']['math'];
    //     echo "<br><pre>";
    //     var_dump($data);
    // } else {
    //     echo "실패";
    // }

    //158 PHP에서 데이터를 JSON으로 만들기      (470)
//서버사이드에서 클라이언트 사이드로 데이터를 전송하려면 서버에서 데이터를 json으로 변경해야 한다. PHP의 데이터를 json으로 변경하려면 json_encode() 함수를 사용한다.
//json_encode() 사용 방법 : json_encode(변수);

    //158. jsonEncode.php      (470)
    // echo json_encode(
    //     array(
    //         'result' => 'success',
    //         'data' => array(
    //             'english' => 100,
    //             'math' => 95,
    //         )
    //     )
    // );




//159. 데이터베이스 자료를 JSON으로 만들기  //실전에서 많이 사용함. (게시판에서는 안씀)

    // $sql = "SELECT * FROM jsh_myMember";
    // $result = sql_query($sql);

    // $dataCount = $result->num_rows;

    // $memberList = array(); //memberList를 배열로 선언

    // for($i=0; $i<$dataCount; $i++){
    //     $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
    //     array_push($memberList, $memberInfo);
    // }

    // echo json_encode(
    //     array(
    //         'data' => $memberList,
    //     )
    // )


/*
//AJAX 기능을 구현하는 기본 코드. (475)
var http = new XMLHttpRequest();
http.onreadystatechange = function(){   //onreadystatechange를 사용하면 readyState 상태가 변할 때마다 함수를 호출한다.
    //기능 구현
}; xhttp.open(전송 방식, 요청할 파일, true);  //open()메서드는 기존 또는 새로 생성된 요청을 초기화한다. 호출하면 readyState는 5가지의 단계를 거친다. 그 중 마지막 단계는 DONE(작업완료. 값은 '4').
xhttp.send(전송값);     //XMLHttpRequest의 메소드 send()는 서버에 요청을 보낸다. 
*/
/*
mmdn web docs의 설명 참고(페이지 번역해서 볼 수 있음. 책에 나온 부분만 찾아봄.)
https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest
1) XMLHttpRequest : XMLHttpRequest개체는 서버와 상호작용하는 데 사용. XML뿐만 아니라 모든 유형의 데이터를 검색하는 데 사용할 수 있다.
    - XMLHttpRequest.onreadystatechange : onreadystatechange 프로퍼티는 XMLHttpRequest 객체의 readyState 프로퍼티 값이 변할 때마다 자동으로 호출되는 함수를 설정합니다.(TCP스쿨)
        XMLHttpRequest:readystatechange 이벤트 : 이 이벤트는 XMLHttpRequest의 readyState 속성이 변경될 때마다 발생한다.
                                    여기서 확인 : https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/readystatechange_event
- status 200 : 요청이 "성공"했다는 응답임. 
        - 응답 유형은 : https://developer.mozilla.org/en-US/docs/Web/HTTP/Status    
    - readyState : 0~4의 값이 있고 그에 대한 상태를 나타낸다. : https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/readyState 
*/    


//160. 클라에서 JSON 데이터 호출하기  AJAX 사용 (475)
    //Ajax는 클라이언트에서 구현하므로 script 태그 내에서 코드를 작성한다.
    //XMLHttpRequest 클래스 사용.
/*
    <!DOCTYPE html>
    <html>
    <head>
        <script>
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){ //readyState의 값이 4일 때(open()과 send()의 작업이 모두 완료된 상태.) 그리고 status==200(HTTP 응답 상태가 "성공"인 경우)
                    console.log("연결");
                    console.log(this.responseText); //xhttp.responseText : 서버로부터 받은 텍스트를 반환. readyState의 값이 4가 되고 status가 200이 되면 전체 콘텐츠가 수신되었음을 알 수 있다.
                    data = JSON.parse(this.responseText);   //JSON.parse()을 사용하면 string을 object(JSON) 타입으로 바꿔준다. = JSON객체로 만들 때 사용( 이 상태로 송수신 하는듯 ).
                    console.log(data.student);
                }
            };
            xhttp.open("POST", "http://cmme2017.godohosting.com/cmme/jsh/157-1.json", true);
            xhttp.send();
        </script>
    </head>
    <body>
        
    </body>
    </html>
*/

//230706

//161-1. AJAX와 PHP 연동 (478)
/*
<!DOCTYPE html>
<html>
<head>
    <title>이메일 중복 체크 프로그램</title>
    <script>
        function emailCheck(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystateChange = function(){
                if(this.readyState == 4 && this.status == 200){
                    result = JSON.parse(this.responseText).result;
                    if(result == 'none'){
                        document.getElementById('status').innerText = '사용 가능';
                    } else {
                        document.getElementById('status').innerText = '사용 불가';
                    }
                }
            };
            
            emailAddress = document.getElementById('emailAddress').value;

            // xhttp.open("POST", "161-2-server.php", true);
            xhttp.open("POST", "ex.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");    //아랫줄처럼 전송할 데이터를 '변수=값'과 같이 전상할 때 사용하는 인코딩 방식.
            xhttp.send("email="+emailAddress);
        }
    </script>
</head>
<body>
        <input type="email" id="emailAddress" />
        <input type="button" value="중복 확인" onclick="emailCheck()" />
        <p id="status"></p>
</body>
</html>
*/


//161-2 server.php (481)

//이메일 주소를 전달 받아 데이터베이스에 존재하는 이메일인지 아닌지를 알려주는 예제.
        //파일을 2개로 나눠서 해야 실행이 됐음.

/* 
//ex.php (서버)
    <?php include_once("./_common.php"); ?>

    <?php
        $email = $_POST['email'];

        $emailValidateCheck = filter_Var($email, FILTER_VALIDATE_EMAIL);

        if($emailValidateCheck){
            $sql = "SELECT email FROM jsh_myMember WHERE email = '{$email}'";
            $result = sql_query($sql);

            $dataCount = $result->num_rows;

            $emailCheck = 'none';
            if( $dataCount > 0) {
                $emailCheck = 'exists';
            }

            echo json_encode(
                array(
                    'result' => $emailCheck,
                )
            );
        }else{
            echo json_encode(
                array(
                    'result' => 'notEmail',
                )
            );
        }
    ?>
*/

/* 
    //test.php (클라이언트) (161-1에서 만든것.)

    <!doctype html>
    <html>
    <head>
    <title>이메일 중복 체크 프로그램</title>
    <script>
    function emailCheck() {
        var xhttp = new XMLHttpRequest();
        console.log(xhttp.readystate);
        console.log(xhttp.status);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                result = JSON.parse(this.responseText).result;
                if(result == 'none'){
                    document.getElementById('status').innerText = '사용 가능';
                }else {
                    document.getElementById('status').innerText = '사용 불가';
                }
            }
        };

        emailAddress = document.getElementById('emailAddress').value;

        xhttp.open("POST", "http://cmme2017.godohosting.com/cmme/jsh/ex.php", true);   //요청보내는 주소 잘 확인.
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("email="+emailAddress);
    }
    </script>
    </head>
    <body>
        <input type="email" id="emailAddress" />
        <input type="button" value="중복 확인" onclick="emailCheck()"/>
        <p id="status"></p>
    </body>
    </html>
*/


//166. DB에 CSS레코드(row, 행) 입력하기 (496)
/*
    $selectorList = array();
    $selectorList = array('wrap', 'header','leftArea','rightArea','footer');

    foreach($selectorList as $sl){
        $sql = "INSERT INTO jsh_controlCSS (selectorName, floata,";
        $sql .= " width, height, background, marginTop, marginRight,";
        $sql .= "marginBottom, marginLeft) VALUES ";
        $sql .= "('{$sl}','unset',0,0,'',0,0,0,0)";
        $result = sql_query($sql);

        if( $result ) {
            echo "셀렉터 {$sl} 입력 성공";
        } else {
            echo "셀렉터 {$sl} 입력 실패";
        }
        echo "<br>";
    }
*/

//167. CSS 파일 만들기  (498)
/*
    header("Content-type: text/css");  //이 코드의 설명은 499페이지

    $sql = "SELECT * FROM jsh_controlCSS";
    $result = sql_query($sql);

    $dataCount = $result->num_rows;

    $cssSource = '';        //생성할 CSS 코드를 담는 변수 선언.

    for($i=0; $i<$dataCount; $i++){
        $cssInfo = $result -> fetch_array(MYSQLI_ASSOC);    //jsh_controlCSS 테이블의 레코드들을 배열형태([문자])로 행마다 불러와서 cssInfo에 대입.
        $cssSource .= "#".$cssInfo['selectorName']."{";
        $cssSource .= "float:".$cssInfo['floata'].";";
        $cssSource .= "width:".$cssInfo['width']."px;";
        $cssSource .= "height:".$cssInfo['height']."px;";
        $cssSource .= "background:".$cssInfo['background'].";";
        $cssSource .= "margin-top:".$cssInfo['marginTop']."px;";
        $cssSource .= "margin-right:".$cssInfo['marginRight']."px;";
        $cssSource .= "margin-bottom:".$cssInfo['marginBottom']."px;";
        $cssSource .= "margin-left:".$cssInfo['marginLeft']."px;";
        $cssSource .= "}";
    }

echo $cssSource;  //생성한 CSS 코드를 출력
*/




//168. CSS 입력 페이지 만들기 (500)
/*
    <?php
    include_once("./_common.php");

    $sql = "SELECT * FROM jsh_controlCSS";
    $result = sql_query($sql);
    $dataCount = $result->num_rows;

    $cssSelectorList = array();

    for($i=0; $i<$dataCount; $i++){
        $cssData = $result->fetch_array(MYSQLI_ASSOC);
        array_push($cssSelectorList, $cssData);
    }

    $floatList = array();
    $floatList = array('left','right','none','unset');

    $borderWidthList = array();
    $borderWidthList = range(1, 10);
    ?>

    <!doctype html>
    <html>
    <head>
    <style>
        span{float:left;margin-left:15px;padding:10px;border:1px solid black}
    </style>
    </head>
    <body>
    <h1>CSS CONTROL PANEL</h1>
    <br>

    <?php                                               //html문서 사이에 php코드를 섞어서 사용..
        foreach($cssSelectorList as $csl){
    ?>

    <span>
        <h2><?=$csl['selectorName']?></h2>
        <!-- <form name="wrap" method="post" action="./169-controlPanelSave.php"> -->
        <form name="wrap" method="post" action="./test.php">  <!--현재 파일은 ex.php-->
            <h3>흐름</h3>
            <select name="float">
    <?php
        foreach ($floatList as $fl) {

            $isChecked = '';
            if( $fl == $csl['floata'] ) {
                $isChecked = 'selected';
            }
            echo "<option value='{$fl}' $isChecked>{$fl}</option>";
        }
    ?>
            </select>
            <h3>가로길이</h3>
            <input type="number" name="width" value="<?=$csl['width']?>" />px       <!--echo 단축태그. 괄호 안에 'php echo ' 부분을 생략한 단축 태그. -->
            <br>
            <h3>세로길이</h3>
            <input type="number" name="height" value="<?=$csl['height']?>" />px
            <br>
            <h3>배경색</h3>
            <input type="color" name="background" value="<?=$csl['background']?>" />
            <br>
            <h3>바깥여백</h3>
            위
            <br>
            <input type="number" name="marginTop" value="<?=$csl['marginTop']?>" />px
            <br><br>
            오른쪽
            <br>
            <input type="number" name="marginRight" value="<?=$csl['marginRight']?>" />px
            <br><br>
            아래
            <br>
            <input type="number" name="marginBottom" value="<?=$csl['marginBottom']?>" />px
            <br><br>
            왼쪽
            <br>
            <input type="number" name="marginLeft" value="<?=$csl['marginLeft']?>" />px
            <br><br>
            <input type="hidden" name="selectorName" value="<?=$csl['selectorName']?>"/>
            <input type="submit" value="<?=$csl['selectorName']?> 적용"/>
        </form>
    </span>

    <?php
        }
    ?>
    </body>
    </html>
*/



//169. CSS정보 저장하기 (168에서 만든 화면을 ex.php, 이걸 test.php에 저장하고 서버로 돌려보면 값이 저장되는걸 확인 가능.)      505
/* 
    <?php 
    include_once("./_common.php"); 
    ?>

    <?php 
    $selectorName = $_POST['selectorName'];     //506페이지 설명에 보면 input태그의 type속성이 hidden인 태그의 값을 받는다고 함 ($_POST[인덱스]가 받는 값의 구조인듯.)

        if($selectorName == ''){
            echo '값을 입력하세요.';
        } else {
            $float = $_POST['float'];
            $width = (int) $_POST['width'];
            $height = (int) $_POST['height'];
            $background = $_POST['background'];

            $marginTop = (int) $_POST['marginTop'];
            $marginRight = (int) $_POST['marginRight'];
            $marginBottom = (int) $_POST['marginBottom'];
            $marginLeft = (int) $_POST['marginLeft'];

            //update 할 것
            $sql = "UPDATE jsh_controlCSS SET floata = '{$float}',";
            $sql .= " width = '{$width}', height = '{$height}',";
            $sql .= "background = '{$background}', marginTop = '{$marginTop}',";
            $sql .= "marginRight = '{$marginRight}', marginBottom = '{$marginBottom}',";
            $sql .= "marginLeft = '{$marginLeft}' WHERE selectorName = '{$selectorName}'";
            $result = sql_query($sql);

            if( $result ){
                echo '변경완료';
            }else{
                echo '실패';
            }
        }

        echo '<br>';
        echo "<a href='./index.php'>CSS 디자인 페이지로 이동</a>";
        echo '<br>';
        echo "<a href='./ex.php'>CSS 컨트롤 페이지로 이동</a>";
    ?>
*/




?>
