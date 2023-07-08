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
<title>게시물 목록</title>
</head>
<body>
    <div>
<a href="180-writeForm.php"><br>글작성하기&nbsp;&nbsp;</a>
<a href="177-signOut.php"><br>로그아웃</a>
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

    $sql = "SELECT b.boardID, b.title, m.nickname, b.regTime FROM jsh_board b ";
    $sql .= "JOIN jsh_member m ON (b.memberID = m.memberID) ";
    $listNum = sql_query($sql);         //추가
    $sql .= "ORDER BY boardID DESC LIMIT {$firstLimitValue}, {$numView}";            //limit 시작위치(0부터 시작), 반환개수
    $result = sql_query($sql);

    if( $result ) {
        $dataCount = $result->num_rows;
        $dataCount2 = $listNum->num_rows;           //추가

        if($dataCount > 0){
            for($i = 0; $i < $dataCount; $i++){
                $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
                echo "<tr>";
                // echo "<td>".$memberInfo['boardID']."</td>";  //이건 게시글 PK를 보여주는거
                echo "<td>".($dataCount2-($i+$firstLimitValue))."</td>";    //글 번호 역순으로 나오게 만듦.
                // echo "<td><a href='/php200project/board/185-view.php?boardID=";
                echo "<td><a href='185-view.php?boardID=";     //링크 경로
                echo "{$memberInfo['boardID']}'>";
                echo $memberInfo['title'];
                echo "</a></td>";
                echo "<td>{$memberInfo['nickname']}</td>";
                echo "<td>".date('Y-m-d H:i', $memberInfo['regTime'])."</td>";
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