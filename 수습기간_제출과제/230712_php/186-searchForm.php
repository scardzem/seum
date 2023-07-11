<?php include_once("./_common.php"); header('Content-Type: text/html; charset=utf-8');//추가 ?>

<!-- amos jsh 230711 기본값으로 GET요청, submit->현재페이지로 action  -->
<form name="search" style="display:inline-block;">

    <!-- amos jsh 230711 검색어 키워드를 포함해서 GET 요청 보냄 -->
    <input type="text" name="searchKeyword" placeholder="검색어 입력" value="<?php echo $searchKeyword?>" required />
    <?php
    //amos jsh 230711 출력되는 option 이름을 한글로 표시하기 위한 변수
    $optionKrName = array('title', 'content', 'tandc', 'torc');
    ?>
    <select name="option">
        <?php 
        //amos jsh 230711 옵션값을 한글로 텍스트 변경해서 변수에 저장
        for($i=0;$i<sizeof($optionKrName);$i++){
            switch($optionKrName[$i]){
                case 'title':
                    $val = '제목';
                    break;
                case 'content':
                    $val = '내용';
                    break;
                case 'tandc':
                    $val = '제목과 내용';
                    break;
                case 'torc':
                    $val = '제목 또는 내용';
                    break;
            }
            
            //amos jsh 230711 option 목록을 출력할 때 검색조건과 일치하는 경우 selected 값을 줘서 페이지 이동 시 선택 옵션이 유지되도록 함
            if($optionKrName[$i]==$searchOption){
                echo "<option value='{$optionKrName[$i]}' selected> {$val} </option>";
            } else if($optionKrName[$i]!=$searchOption){
                echo "<option value='{$optionKrName[$i]}'>";
                echo $val."</option>";
            }
        }
        ?>
    </select>
    <input type="submit" value="검색" />
    
</form>
