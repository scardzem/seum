<?php
    include_once("./_common.php");
    header('Content-Type: text/html; charset=utf-8');//추가

    //임시 확인용
    // echo "검색어 : ".$searchKeyword."<br>";
    // echo "옵션 : ".$searchOption."<br>";
    //임시 확인용, list페이지에서 dataCount 정의
    // echo "검색 데이터 개수 : ".$dataCount."<br>";
    
    if($searchKeyword!='' || $searchKeyword!=null){
        $keyWordSet = "&searchKeyword={$searchKeyword}&option={$searchOption}";
    }

    //게시물 레코드 수 구하기
    //검색 키워드가 있으면 키워드에 해당하는 자료만 select
    if(isset($searchKeyword)){
        $sql = "SELECT count(boardID) FROM jsh_board ";
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
        $result = sql_query($sql);
    } else { 
        //검색조건 없으면 전체자료 select
        $sql = "SELECT count(boardID) FROM jsh_board";
        $result = sql_query($sql);
    }

    $boardTotalCount = $result->fetch_array(MYSQLI_ASSOC);
    $boardTotalCount = $boardTotalCount['count(boardID)'];

    //총 페이지 수
    $totalPage = ceil($boardTotalCount / $numView);     //$numView는 183 예제에 선언되어 있다.
    //처음 페이지 이동 링크
    echo "<a href='183-list.php?page=1{$keyWordSet}'>처음</a>&nbsp;";

    //이전 페이지 이동 링크
    if($page != 1){     //$page가 1이면 이전 페이지 버튼을 표시하지 않는다.
        $previousPage = $page - 1;
        echo "<a href='183-list.php?page={$previousPage}{$keyWordSet}'>이전</a>";
    }

    //현재 페이지의 앞 뒤 페이지 수 표시수
    $pageTerm = 5;

    //처음 표시할 페이지를 현재 페이지를 기준으로 5개 이전까지만 표시
    $startPage = $page - $pageTerm;
    //음수일 경우 처리5
    if($startPage < 1){
        $startPage = 1;
    }

    //처음 표시할 페이지를 현재 페이지를 기준으로 5개 이전까지만 표시
    $lastPage = $page + $pageTerm;

    //마지막페이지의 수보다 클 경우 처리
    if($lastPage >= $totalPage){
        $lastPage = $totalPage;
    }

    for($i = $startPage; $i <= $lastPage; $i++){

        $nowPageColor = 'unset';
        if($i == $page){
            $nowPageColor = 'hotpink';
        }
        echo "&nbsp<a href='./183-list.php?page={$i}{$keyWordSet}'";
        echo "style='color:{$nowPageColor}; text-decoration: none'>{$i}</a>&nbsp";
    }
    

    //다음 페이지 이동 링크
    if($page != $totalPage){
        $nextPage = $page + 1;
        echo "<a href='./183-list.php?page={$nextPage}{$keyWordSet}'>다음</a>";
    }

    //마지막 페이지 이동 링크
    echo "&nbsp;<a href='./183-list.php?page={$totalPage}{$keyWordSet}'>끝</a>";

    //데이터 임시 확인용
    // echo "<br>searchKeyword : ".$searchKeyword.", 옵션 : {$searchOption}";
?>