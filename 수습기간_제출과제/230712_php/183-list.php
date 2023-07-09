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

        $sql = "SELECT boardID, title, regTime, nickname FROM jsh_board "; //board 뒤에 띄어쓰기 안해서 게시글 못불러와서 30분 헤맴.. 아래 ORDER BY와 연결되는 문장이니까 주의할것.
        // $sql .= "JOIN jsh_member m ON (b.memberID = m.memberID) ";
        // $sql .= "JOIN jsh_member m ON (b.memberID = m.memberID) ";
        $listNum = sql_query($sql);         //추가
        $sql .= "ORDER BY boardID DESC LIMIT {$firstLimitValue}, {$numView}";            //limit 시작위치(0부터 시작), 반환개수
        $result = sql_query($sql);
        if( $result ) {
            $dataCount = $result->num_rows;
            $dataCount2 = $listNum->num_rows;           //추가

            if($dataCount > 0){
                for($i = 0; $i < $dataCount; $i++){
                    $boardInfo = $result->fetch_array(MYSQLI_ASSOC);
                    echo "<tr>";
                    echo "<td>".($dataCount2-($i+$firstLimitValue))."</td>";    //게시글 숫자만큼 글 번호 역순으로 나오게 만듦.

                    //비밀번호 확인 페이지로 이동
                    // echo "<td><a href='202-boardPwCheck.php?boardID={$boardInfo['boardID']}'>{$boardInfo['title']}</a></td>";
                    //view는 비밀번호 없이 이동할때
                    echo "<td><a href='185-view.php?boardID={$boardInfo['boardID']}'>{$boardInfo['title']}</a></td>";

                    // echo "<td><a href='185-view.php?boardID=";     //링크 경로
                    // echo "{$boardInfo['boardID']}'>";
                    // echo $boardInfo['title'];
                    // echo "</a></td>";

                    
                    echo "<td>{$boardInfo['nickname']}</td>";  //닉네임
                    // echo "<td>테스트</td>";     //테이블 구조 바꾸기 전에 임시 지정
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