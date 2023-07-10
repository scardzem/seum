<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    // include '179-checkSignSession.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';
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
    <h2>BoardList</h2>
    <a href="180-writeForm.php"><br>글작성하기&nbsp;&nbsp;</a>
    <a href="183-list.php"><br>목록으로</a>
    <table>
        <thead>
            <th>번호</th>
            <th>제목</th>
            <th>작성자</th>
            <th>게시일</th>
        </thead>
        <tbody>

    <?php
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
        //게시글 숫자를 담기 위해서 게시물 조회
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
        $sql .= "ORDER BY boardID DESC LIMIT {$firstLimitValue}, {$numView}";            //limit 시작위치(0부터 시작), 반환개수
        $result = sql_query($sql);

        if( $result ) {
            $dataCount = $result->num_rows;
            //전체 게시글 수량 담는 변수 선언
            $dataCount2 = $listNum->num_rows;           
            if($dataCount > 0){
                if(isset($searchKeyword)){

                                                // $sql = "SELECT boardID, title, nickname, regTime FROM jsh_board ";
                                                // //검색어가 있을 때 검색한 텍스트가 포함되어 있는 값을 조회
                                                // switch ($searchOption) {    
                                                //     case 'title':
                                                //         $sql .= "WHERE title LIKE '%{$searchKeyword}%'";
                                                //         break;
                                                //     case 'content':
                                                //         $sql .= "WHERE content LIKE '%{$searchKeyword}%'";
                                                //         break;
                                                //     case 'tandc':
                                                //         $sql .= "WHERE title LIKE '%{$searchKeyword}%'";
                                                //         $sql .= " AND ";
                                                //         $sql .= "content LIKE '%{$searchKeyword}%'";
                                                //         break;
                                                //     case 'torc':
                                                //         $sql .= "WHERE title LIKE '%{$searchKeyword}%'";
                                                //         $sql .= " OR ";
                                                //         $sql .= "content LIKE '%{$searchKeyword}%'";
                                                //         break;
                                                // }
                                                // $sql .= "LIMIT {$firstLimitValue}, {$numView}";

                                                // $result = sql_query($sql);
                                                // if($result) {
                                                //     $dataCount = $result->num_rows;
                                                // }else{
                                                //     echo "오류 발생 - 관리자 문의<br>";
                                                //     var_dump($result);
                                                //     exit;
                                                // }
                    // $result = sql_query($sql);

                    for($i = 0; $i < $dataCount; $i++){
                        $boardInfo = $result->fetch_array(MYSQLI_ASSOC);
                        echo "<tr>";
                        //최신글이 위에 보이게 정렬되어 있으므로 게시글 숫자만큼 글 번호 역순으로 나오게 만듦.
                        echo "<td>".($dataCount2-($i+$firstLimitValue))."</td>";    
                        echo "<td><a href='185-view.php?boardID={$boardInfo['boardID']}'>{$boardInfo['title']}</a></td>";
                        echo "<td>{$boardInfo['nickname']}</td>";  //닉네임
                        echo "<td>".date('Y-m-d H:i', $boardInfo['regTime'])."</td>";
                        echo "</tr>";
                    }
                    //검색 조건 없을때(기본 list)
                } else {

                    for($i = 0; $i < $dataCount; $i++){
                        $boardInfo = $result->fetch_array(MYSQLI_ASSOC);
                        echo "<tr>";
                        //최신글이 위에 보이게 정렬되어 있으므로 게시글 숫자만큼 글 번호 역순으로 나오게 만듦.
                        echo "<td>".($dataCount2-($i+$firstLimitValue))."</td>";    
                        echo "<td><a href='185-view.php?boardID={$boardInfo['boardID']}'>{$boardInfo['title']}</a></td>";
                        echo "<td>{$boardInfo['nickname']}</td>";  //닉네임
                        echo "<td>".date('Y-m-d H:i', $boardInfo['regTime'])."</td>";
                        echo "</tr>";
                    }

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