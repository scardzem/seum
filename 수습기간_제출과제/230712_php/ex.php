<?php include_once("./_common.php"); ?>

<?php 
    //160. 클라에서 JSON 데이터 호출하기  AJAX 사용 (475)
    //Ajax는 클라이언트에서 구현하므로 script 태그 내에서 코드를 작성한다.
    //XMLHttpRequest 클래스 사용.
?>

<!DOCTYPE html>
<html>
<head>
    <script>
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                console.log("연결");
                console.log(this.responseText);
                data = JSON.parse(this.responseText);
                console.log(data.student);
            }
        };
        xhttp.open("POST", "http://cmme2017.godohosting.com/cmme/jsh/157-1.json", true);
        xhttp.send();
    </script>
</head>
<body>
    
</body>
</html>