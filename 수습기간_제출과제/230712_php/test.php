<?php 
include_once("./_common.php"); 
?>

<?php 
$selectorName = $_POST['selectorName'];

    if($selectorName == ''){
        echo '값을 입력하세요.';
    } else {
        $float = $_POST['float'];
        $width = (int) $_POST['width'];
        $height = (int) $_POST['height'];
        $background = $_POST['background'];

        $marginTop = (int) $_POST['marginTop'];
        $marginRight = (int) $_POST['marginRight'];
        $marginBottom = (int) $_POST['marginBottom'];
        $marginLeft = (int) $_POST['marginLeft'];

        //update 할 것
        $sql = "UPDATE jsh_controlCSS SET floata = '{$float}',";
        $sql .= " width = '{$width}', height = '{$height}',";
        $sql .= "background = '{$background}', marginTop = '{$marginTop}',";
        $sql .= "marginRight = '{$marginRight}', marginBottom = '{$marginBottom}',";
        $sql .= "marginLeft = '{$marginLeft}' WHERE selectorName = '{$selectorName}'";
        $result = sql_query($sql);

        if( $result ){
            echo '변경완료';
        }else{
            echo '실패';
        }
    }

    echo '<br>';
    echo "<a href='./index.php'>CSS 디자인 페이지로 이동</a>";
    echo '<br>';
    echo "<a href='./ex.php'>CSS 컨트롤 페이지로 이동</a>";
?>