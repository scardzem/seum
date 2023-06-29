<?php include_once("./_common.php"); ?>

<?php
    $str = "welcome to everdevel";

    //변수 str에 있는 everdevel을 beancent로 치환
    $changeWord = str_replace('everdevel','beancent',$str);
    echo $changeWord;
?>

