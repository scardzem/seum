<?php
include_once("./_common.php");

$sql = "SELECT name, userId ,password,phone,email,birthDay, gender, regTime FROM jsh_myMember";
$result =  sql_query($sql);

$dataCount = $result->num_rows;

for($i = 0; $i < $dataCount; $i++){
    $memberInfo = $result->fetch_array(MYSQLI_NUM);
    echo "이름 : ".$memberInfo[0];
    echo "아이디 : ".$memberInfo[1];
    echo "비밀번호 : ".$memberInfo[2];
    echo "전화번호 : ".$memberInfo[3];
    echo "이메일 : ".$memberInfo[4];
    echo "생일 : ".$memberInfo[5];
    echo "성별 : ".$memberInfo[6];
    echo "<br>";
 
}

?>