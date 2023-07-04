<?php include_once("./_common.php"); ?>
<?php
    //127-3 count()사용 (376)
    function schoolRecord(){
        // global $dbConnect;
        $sql = "SELECT count(class) FROM jsh_schoolRecord";
        $result = sql_query($sql); //쿼리 송신
        $reviewInfo = $result->fetch_array(MYSQLI_ASSOC);
        echo 'class필드를 기준으로 한 레코드 수 : ';
        echo $reviewInfo['count(class)'];
        echo "<br>";
    }

    schoolRecord();

    //schoolRecordID가 1인 레코드의 class필드 값을 NULL로 변경
    $sql = "UPDATE jsh_schoolRecord SET class = NULL WHERE schoolRecordID = 1";
    sql_query($sql);

    schoolRecord();
?>
