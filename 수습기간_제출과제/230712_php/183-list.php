<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
?>
<!doctype html>
<html>
<head>
    <style>
        .wrap{
            width: 1000px;
            height: 800px;
            position: relative;
            left: 50%;
            transform: translate(-50%, 0);
        }
    </style>
<title>게시물 목록</title>
</head>
<body>
<div class="wrap">
    
    <?php 
        if(isset($searchKeyword)){
            echo "<h2>\"{$searchKeyword}\" 검색 결과</h2>";
        } else {
            echo "<h2>BoardList</h2>";
        }
    ?>
    <a href="180-writeForm.php"><br>글작성하기&nbsp;&nbsp;</a>
    <a href="183-list.php"><br>목록으로</a>
    <a href="inputData.php"><br>데이터 20개 추가</a>
    <table>
        <thead>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>게시일</th>
        </thead>
        <tbody>

    <?php

        //페이지 값 받으면 변수에 담고 없으면 기본값 1페이지.
        if(isset($_GET['page'])){
            $page = (int) $_GET['page'];
        }else{
            $page = 1;
        }

        $numView = 20;
        $firstLimitValue = ($numView * $page) - $numView;

        //검색 관련 설정
        $searchOption = sql_real_escape_string($_GET['option']);
        $searchKeyword = sql_real_escape_string($_GET['searchKeyword']);

        $sql = "SELECT boardID, title, regTime, nickname FROM jsh_board ";
        //게시글 숫자를 담기 위해서 전체 게시물 조회
        $listNum = sql_query($sql);
        if(isset($searchKeyword)){
            //검색어 있으면 해당 자료만 조회함
            switch ($searchOption) {    
                case 'title':
                    $sql .= "WHERE title LIKE '%{$searchKeyword}%'";
                    break;
                case 'content':
                    $sql .= "WHERE content LIKE '%{$searchKeyword}%'";
                    break;
                case 'tandc':
                    $sql .= "WHERE title LIKE '%{$searchKeyword}%'";
                    $sql .= " AND ";
                    $sql .= "content LIKE '%{$searchKeyword}%'";
                    break;
                case 'torc':
                    $sql .= "WHERE title LIKE '%{$searchKeyword}%'";
                    $sql .= " OR ";
                    $sql .= "content LIKE '%{$searchKeyword}%'";
                    break;
            }
        }
        //검색결과 리스트
        $listNumSrc = sql_query($sql);
        $sql .= "ORDER BY boardID DESC LIMIT {$firstLimitValue}, {$numView}";            //limit 시작위치(0부터 시작), 반환개수
        $result = sql_query($sql);

        if( $result ) {
            $dataCount = $result->num_rows;
            //전체 게시글 수량 담는 변수 선언
            $dataCountAll = $listNum->num_rows;      
            $dataCountSrc = $listNumSrc->num_rows;
            if($dataCount > 0){
                    //임시 확인용
                    // echo "<br>키워드 : {$searchKeyword}, 옵션 : {$searchOption}<br>";
                    for($i=0; $i<$dataCount;$i++){
                        $boardInfo = $result->fetch_array(MYSQLI_ASSOC);
                        echo "<tr>";
                        //최신글이 위에 보이게 정렬되어 있으므로 게시글 숫자만큼 글 번호 역순으로 나오게 만듦.
                        if(isset($searchKeyword)){
                            echo "<td>".($dataCountSrc-($i+$firstLimitValue))."</td>";    
                        } else {
                            echo "<td>".($dataCountAll-($i+$firstLimitValue))."</td>";    
                        }
                        echo "<td><a href='185-view.php?boardID={$boardInfo['boardID']}'>{$boardInfo['title']}</a></td>";
                        echo "<td>{$boardInfo['nickname']}</td>";  //닉네임
                        echo "<td>".date('Y-m-d H:i', $boardInfo['regTime'])."</td>";
                        echo "</tr>";
                    }

            } else {
                echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
            }

        }
    ?>
        </tbody>
    </table>

    <?php
        include '184.nextPageLink.php';
        include '186-searchForm.php';
    ?>
</div>
</body>
</html>