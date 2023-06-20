<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="${pageContext.request.contextPath }css/login_style.css">
    <title>login</title>
    <link rel="icon" type="image/png" href="${pageContext.request.contextPath }img/logo.png">

</head>
<body>
<div class="logobox">
        <a href="#">
            <img src="img/logo.png" alt="로고">
        </a>
    </div>
    <div class="loginbox">
        <form action="#">
            <div class="input-wrap1">
                <label for="loginid"><img src="img/loginimg.png" alt="loginlogo" id="loginimg"></label>
                <input type="text" id="loginid" placeholder="Username"required>
            </div>
            <div class="input-wrap1">
                <label for="loginpw"><img src="img/pwimg.png" alt="pwlogo" id="pwimg"></label>
                <input type="password" id="loginid" placeholder="****">
            </div>
            <div class="input-wrap">
                <button type="button" id="btn" onclick="location.href='intropage.html';">Login</button>
              
            </div>
            <div class="input-wrap2">
                <a href="/user/join.do" id="btn2">Sign in</a>
            </div>
        </form>
    </div>
</body>
</html>