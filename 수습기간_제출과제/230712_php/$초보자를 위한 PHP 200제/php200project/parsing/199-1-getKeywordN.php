<?php
    header('Content-Type: text/html; charset=utf-8');//추가
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/179-checkSignSession.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';

    $curl = curl_init();
    $url = 'https://www.naver.com';
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $htmlCode = curl_exec($curl);
    curl_close($curl);

    $pattern = '/span class=\"ah_k\"\>(.*)\</';
    preg_match($pattern, $htmlCode, $matchKeywords);
    $keyword = $matchKeywords[1];
    echo '현재 N사의 실시간 검색 1위 키워드 : '.$keyword;
?>