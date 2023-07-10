<?php header('Content-Type: text/html; charset=utf-8');//추가 ?>

<!-- <form name="search" method="post" action="187-searchResult.php?search=search"> -->
<form name="search">
    <input type="text" name="searchKeyword" placeholder="검색어 입력" value="<?php echo $searchKeyword?>" required />
    <?php
    $optionKey = array('title', 'content', 'tandc', 'torc');
    $optionVal = array('title'=>'제목', 'content'=>'내용', 'tandc'=>'제목과 내용', 'torc'=>'제목 또는 내용');
    // echo var_dump($optionVal);
    ?>
    <select name="option">
        <?php 
        
        for($i=0;$i<sizeof($optionKey);$i++){
            switch($optionKey[$i]){
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
            
            if($optionKey[$i]==$searchOption){
                echo "<option value='{$optionKey[$i]}' selected> {$val} </option>";
            } else if($optionKey[$i]!=$searchOption){
                

                echo "<option value='{$optionKey[$i]}'>";
                echo "{$val}</option>";
            }
        }
        // echo "<option value='title'>제목</option>";
        // echo "<option value='content'>내용</option>";
        // echo "<option value='tandc'>제목과 내용</option>";
        // echo "<option value='torc'>제목 또는 내용</option>";
        ?>
    </select>
    <input type="submit" value="검색" />
    
</form>
