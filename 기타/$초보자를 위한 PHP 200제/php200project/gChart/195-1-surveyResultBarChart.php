<?php
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/179-checkSignSession.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';
?>
<!doctype html>
<html>
<head>
<title>설문조사 데이터 차트로 보기</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart','bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart(){

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200){

                result = JSON.parse(this.responseText);

                console.log('result is ' + JSON.stringify(result));

                var data = google.visualization.arrayToDataTable([
                    ['종류', '명'],
                    ['오프라인 서점',result.offlineStore],
                    ['온라인 서점',result.onlineStore],
                    ['웹사이트',result.website],
                    ['지인을 통해서',result.friends],
                    ['교육기관',result.academy],
                    ['기억이 안남',result.noMemory],
                    ['기타',result.etc]
                ]);

                var options = {
                    title: '당신은 어떤 경로로 본서를 알게 되셨나요?',
                    chartArea: {width: '50%'},
                    hAxis: {
                        minValue: 0
                    },
                };

                selectTag = document.getElementById('chart_div');
                var chart = new google.visualization.BarChart(selectTag);
                chart.draw(data, options);
            }
        };

        xhttp.open("POST", "./193-surveyResultJson.php", true);
        xhttp.send();
    }
</script>
</head>
<body>
<div id="chart_div" style="height:500px"></div>
</body>
</html>