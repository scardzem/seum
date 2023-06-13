<?php
include_once("./_common.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/ress.css">
<link rel="stylesheet" href="css/style.css">
<title>연습</title>
<!--레이아웃 확인용 스타일-->
<style>
        /*전체 레이아웃*/
        #wrap{text-align: center; color: #fff;}
        #header{height: 92px; background: #888; display:flex; justify-content: center;}
        #contents{background: #777;}
        #footer{height: 450px; background: #666;}

        /*레이아웃*/
        #header-title{height: inherit; background:#ffd7d7;}
        #header-nav{height: inherit; background:#ffc6c6;}
        #cont_ban1{height: 1080px; background:#ffb0b0;}
        #cont_ban2{height: 717px; background:#ff9d9d;}
        #con_1{height: 750px; background:#ff8b8b;}
        #con_2{height: 1000px; background:#ff7979;}
        #con_3{height: 800px; background:#ff7979;}
        #con_4{height: 600px; background:#ff5656;}
        #footer-info{height: 450px; background:#ff3939;}

        /* 컨테이너 */
        .container{width:1920px; margin: 0 auto; height: inherit; background: rgba(0,0,0,0.3);}
        .container_left{width:672px;  margin: 0 auto; height: inherit; background: rgba(0,0,0,0.3);}
        .container_right{width:1248px;  margin: 0 auto; height: inherit; background: rgba(0,0,0,0.3);}

    </style>
</head>
<body>
<div id="wrap">
        <header id="header">
            <div id="header-title">
                <div class="container_left"></div>
            </div>
            <nav id="header-nav">
                <div class="container_right"></div>
            </nav>
        </header>
        <section id="contents">
            <div id="cont_ban1">
                <div class="container"></div>
            </div>
            <div id="cont_ban2">
                <div class="container"></div>
            </div>
            <div id="con_1">
                <div class="container"></div>
            </div>
            <div id="con_2">
                <div class="container"></div>
            </div>
            <div id="con_3">
                <div class="container"></div>
            </div>
            <div id="con_4">
                <div class="container"></div>
            </div>
        </section>
        <footer id="footer">
            <div id="footer-info">
                <div class="container"></div>
            </div>
        </footer>
    </div>
</body>
</html>
<!-- <script>
	function add_number(){
		alert('ㅎㅇ');
	}

</script> -->
