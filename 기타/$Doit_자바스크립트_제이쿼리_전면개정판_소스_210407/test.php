<?php
include_once("./_common.php");
?>
<!doctype html>
<html>

<head>
<meta charset = "UTF-8">
<title> 함수 </title>
<script src="js/jquery.js"></script>
<script>
$(function(){
	$(".btn_1").on("mouseover", function(){
		alert("Hello");
	});
	$(document).on("mouseover",".btn_2", function(){
		alert("Welcome");
	});
	//var btn_2 = $("<p><button class=\"btn_2\">버튼2</button></p>");  //대변의 $()이거 왜 쓰는거지? 무슨의미?
	var btn_2 = "<p><button class=\"btn_2\">버튼2</button></p>";
	$("#wrap").append(btn_2);
	
	$(".del_1").on("click", function(){
		$(".btn_1").off("mouseover");
	});
	$(".del_2").on("click", function(){
		$(document).off("mouseover", ".btn_2");
	});
});
</script>
</head>
<body>
<div id="wrap">
	<p><button class="btn_1">버튼1</button></p>
</div>
<p>
	<button class="del_1">버튼1 이벤트 해지</button> 
	<button class="del_2">버튼2 이벤트 해지</button>
</p>
</body>

</html>