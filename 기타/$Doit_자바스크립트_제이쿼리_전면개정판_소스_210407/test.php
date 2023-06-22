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
		var obj = [
			{"area":"서울"},
			{"area":"부산"},
			{"area":"전주"}
		];

		$(obj).each(function(i, o){
				console.log("index=="+i + ":", o);  //,로 구분해서 출력(o는 객체이기 때문에 객체 정보를 출력하도록)
		});
		$(obj).each(function(i, o){
				console.log("index=="+i + ":"+ o);  //이건 콘솔에 출력하면 그냥 object:object 이런식으로만 출력됨
		});
		$(obj).each(function(i, o){
				console.log("index=="+i + ":" + o.area); // +는 문자열을 '연결'하는 기호라서 문자열이 아닌것에 쓰면
		});											// index==0[object Object] 이런식으로 출력된다.
													// 위의 식처럼 ,로 구분해야 객체로 출력이 된다.(콘솔창에서)
													// +로 출력하고 싶으면 o.area로 출력해야 콘솔에 index==0:서울 이런식으로 출력된다.
		//객체에 접근하는 방법 obj[0].area

		console.log("==== The End 1 ====");

		$.each($("#menu1 li"), function(i, o){
				console.log(i + ":", o);
		});
		console.log("==== The End 2 ====");    

		$.each($("#menu2 li"), function(i){
				console.log(i + ":", $(this));
		});    
	});
</script>
</head>
<body>
	<h1>탐색 선택자</h1>
	<ul id="menu1">
		<li>내용1-1</li>
		<li>내용1-2</li>
		<li>내용1-3</li>
	</ul>
	<ul id="menu2">
		<li>내용2-1</li>
		<li>내용2-2</li>
		<li>내용2-3</li>
	</ul>
</body>

</html>