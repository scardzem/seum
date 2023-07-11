<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
?>
<!doctype html>
<html>
<head>
    <style>
        .wrap{width: 800px; height: 800px; position: relative; left: 50%; transform: translate(-50%, 0); }
        td{padding: 1px 10px; text-align:center;}
        td:nth-child(2){text-align:left;}
        th:nth-child(1){width:50px;}
        th:nth-child(2){width:300px;}
        th:nth-child(3){width:70px;}
        th:nth-child(4){width:110px;}
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
    <br><a href="183-list.php">목록으로</a>&nbsp;&nbsp;
    <a href="180-writeForm.php">글작성하기</a>
    <table>
        <thead>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>게시일</th>
        </thead>
        <tbody>
    <?php

        //amos jsh 230711 페이지 값 받으면 변수에 담고 없으면 기본값 1페이지.
        if(isset($_GET['page'])){
            $page = (int) $_GET['page'];
        }else{
            $page = 1;
        }
        $numView = 20;

        //amos jsh 230711 해당 페이지에 보여줄 자료 시작점(index)
        $firstLimitValue = ($numView * $page) - $numView;

        //amos jsh 230711 검색 키워드, 옵션 변수에 저장(입력한 특수문자가 코드에 영향을 미치지 않도록 escape_string 사용)
        $searchOption = $_GET['option'];
        $searchKeyword = $_GET['searchKeyword'];

        $sql = "SELECT boardID, title, regTime, nickname FROM jsh_board ";
        //amos jsh 230711 게시글 숫자를 담기 위해서 전체 게시물 조회
        
        $listNum = sql_query($sql);
        //amos jsh 230711 검색어 있으면 해당 자료만 조회함
        if(isset($searchKeyword)){
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
        //amos jsh 230711 검색결과 리스트. 검색조건에 맞는 데이터 수를 구하기 위해 변수에 저장.
        $listNumSrc = sql_query($sql);
        $sql .= "ORDER BY boardID DESC LIMIT {$firstLimitValue}, {$numView}";
        $result = sql_query($sql);

        if( $result ) {
            $dataCount = $result->num_rows;
            //amos jsh 230711 게시글 수량 담는 변수 선언
            $dataCountAll = $listNum->num_rows;
            $dataCountSrch = $listNumSrc->num_rows;

            if($dataCount > 0){
                    for($i=0; $i<$dataCount;$i++){
                        $boardInfo = $result->fetch_array(MYSQLI_ASSOC);
                        echo "<tr>";
                        //amos jsh 230711 최신글이 위에 보이게 정렬되어 있으므로 게시글 숫자만큼 글 번호 역순으로 나오게 만듦.
                        if(isset($searchKeyword)){
                            echo "<td>".($dataCountSrch-($i+$firstLimitValue))."</td>";    
                        } else {
                            echo "<td>".($dataCountAll-($i+$firstLimitValue))."</td>";    
                        }
                        echo "<td><a href='185-view.php?boardID={$boardInfo['boardID']}'>{$boardInfo['title']}</a></td>";
                        echo "<td>{$boardInfo['nickname']}</td>";
                        // echo "<td>".date('Y-m-d H:i', $boardInfo['regTime'])."</td>"; //saveBoard.php에서 날짜를 time()으로 입력하게 하면 이 함수로 날짜형식으로 출력하게 한다.
                        echo "<td>".$boardInfo['regTime']."</td>";
                        echo "</tr>";
                    }
            } else {
                echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
            }
        }
    ?>
        </tbody>
    </table>
        <div style="position:relative;left:50%;transform:translate(-50%,0);width: 600px;">
            <?php
                include '184.nextPageLink.php';
                echo "<br>";
                include '186-searchForm.php';
            ?>
        </div>
    <!-- <br><a href="1_inputData.php">데이터 추가</a>
</div>
</body>
</html>