<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    // include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';
    // include '179-checkSignSession.php';

    $searchKeyword = sql_real_escape_string($_POST['searchKeyword']);
    $searchOption = sql_real_escape_string($_POST['option']);

    if($searchKeyword == '' || $searchKeyword == null){     //검색어의 공백 여부를 확인
        echo "검색어가 없습니다.";
        exit;
    }

    switch ($searchOption){     //검색 옵션이 선택 되어 있는지 확인
        case 'title':
        case 'content':
        case 'tandc':
        case 'torc':
            break;
        default :
            echo "검색 옵션이 없습니다.";
            exit;
            break;
    }

    // $sql = "SELECT b.boardID, b.title, m.nickname, b.regTime FROM jsh_board b ";
    // $sql .= "JOIN jsh_member m ON (b.memberID = m.memberID) ";

    // switch ($searchOption) {    //검색 옵션이 선택되어 있고, 검색어가 있을 때 검색한 텍스트가 포함되어 있는 값을 조회
    //     case 'title':
    //         $sql .= "WHERE b.title LIKE '%{$searchKeyword}%'";
    //         break;
    //     case 'content':
    //         $sql .= "WHERE b.content LIKE '%{$searchKeyword}%'";
    //         break;
    //     case 'tandc':
    //         $sql .= "WHERE b.title LIKE '%{$searchKeyword}%'";
    //         $sql .= " AND ";
    //         $sql .= "b.content LIKE '%{$searchKeyword}%'";
    //         break;
    //     case 'torc':
    //         $sql .= "WHERE b.title LIKE '%{$searchKeyword}%'";
    //         $sql .= " OR ";
    //         $sql .= "b.content LIKE '%{$searchKeyword}%'";
    //         break;
    // }



    if(isset($_GET['page'])){
        $page = (int) $_GET['page'];
    }else{
        $page = 1;
    }
    $numView = 20;

    $firstLimitValue = ($numView * $page) - $numView;





    $sql = "SELECT boardID, title, nickname, regTime FROM jsh_board ";
    
    // $sql .= "JOIN jsh_member m ON (b.memberID = m.memberID) ";

    switch ($searchOption) {    //검색 옵션이 선택되어 있고, 검색어가 있을 때 검색한 텍스트가 포함되어 있는 값을 조회
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
    $sql .= "LIMIT {$firstLimitValue}, {$numView}";
    $result = sql_query($sql);

    
    if($result) {
        $dataCount = $result->num_rows;
    }else{
        echo "오류 발생 - 관리자 문의<br>";
        var_dump($result);
        exit;
    }
?>
<!doctype html>
<html>
<head>
<title>검색 결과</title>
</head>
<body>
<a href="180-writeForm.php">글작성하기</a>
<a href="183-list.php">목록으로</a>
<!-- <a href="signIn/177-signOut.php">로그아웃</a> -->
<table>
    <thead>
    <th>번호</th>
    <th>제목</th>
    <th>작성자</th>
    <th>게시일</th>
    </thead>
    <tbody>
    <?php
        if($dataCount > 0){
            for($i = 0; $i < $dataCount; $i++){
                $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
                echo "<tr>";
                echo "<td>".$memberInfo['boardID']."</td>";
                echo "<td><a href='./185-view.php?boardID={$memberInfo['boardID']}'>";
                echo "{$memberInfo['title']}</a></td>";
                echo "<td>".$memberInfo['nickname']."</td>";
                echo "<td>".date('Y-m-d H:i', $memberInfo['regTime'])."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>{$searchKeyword}를 포함하는 게시글이 없습니다.</td></tr>";
        }
    ?>
    </tbody>
</table>
<?php

include '184.nextPageLink.php';
?>
</body>
</html>