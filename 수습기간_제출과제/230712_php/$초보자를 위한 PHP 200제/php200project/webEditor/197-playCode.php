<?php
    header('Content-Type: text/html; charset=utf-8');//추가
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/179-checkSignSession.php';

    $code = $_POST['code'];

    //파일명 만들기
    function makeFileName(){
        $existsFileList = array();
        $opendir = opendir('./codeList');

        while(($readdir = readdir($opendir))){
            array_push($existsFileList, $readdir);
        }

        $isEqualNameCheck = false;

        while(true){
            $fileName = 'php200-'.mt_rand().'.php';

            foreach($existsFileList as $efl){
                if($efl == $fileName){
                    $isEqualNameCheck = true;
                }
            }

            if($isEqualNameCheck == false){
                return $fileName;
            }
        }
    }

    $fileName = makeFileName();
    $filePath = $_SERVER['DOCUMENT_ROOT'].'/php200project/webEditor/codeList/';
    $myfile = fopen($filePath.$fileName, "w") or die("파일 열기 실패");
    fwrite($myfile, $code);
    fclose($myfile);
    header("Location:./codeList/".$fileName);
?>