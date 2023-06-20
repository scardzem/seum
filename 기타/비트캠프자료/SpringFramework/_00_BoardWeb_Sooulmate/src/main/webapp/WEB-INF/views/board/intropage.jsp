<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro</title>
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/ress.min.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/mainframe_style.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/intropage_style.css">
    <!--파비콘 설정-->
    <link rel="icon" type="image/png" href="${pageContext.request.contextPath }/img/logo.png">
    <script type="text/javascript" src="${pageContext.request.contextPath }/sh_folder/jquery-3.6.0.min.js"></script>
    
    <script src="${pageContext.request.contextPath }/sh_folder/js/bootstrap.bundle.min.js"></script>

</head>
<body>


    <!-- 전체 규격, 로고 위치 -->

    <div class="first" id="home">
        <header class="second">
            <div class="left" style="border: none;">
                <div class="logo" style="padding:2px;">
                    
                        <img src="img/sh_img/로고1.png" alt="SM로고">
                    
                </div>
            </div>
        </header>
        <div class="third">
            <!-- middle  -->
				<div class="top-slide">
                    <!--캐러셀 영역 설정-->
                    <div class="carousel slide" data-bs-ride="carousel" id="인기게시물">
                        <!--캐러셀 하단의 불릿 영역-->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#인기게시물"
                                    data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#인기게시물"
                            data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#인기게시물"
                            data-bs-slide-to="2"></button>
                        </div>
                        <!--캐러셀 슬라이드 영역-->
                        <div class="carousel-inner">
                            <!--캐러셀 슬라이드 콘텐츠 추가 첫번째에는 active-->
                            <div class="carousel-item active">
                                <div>
                                    <img src="img/sh_img/인기게시글/1.jpg" alt="인기1">
                                    <img src="img/sh_img/인기게시글/2.jpg" alt="인기2">
                                    <img src="img/sh_img/인기게시글/3.png" alt="인기3">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div>
                                    <img src="img/sh_img/인기게시글/4.jpg" alt="인기4">
                                    <img src="img/sh_img/인기게시글/5.jpg" alt="인기5">
                                    <img src="img/sh_img/인기게시글/6.jpg" alt="인기6">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div>
                                    <img src="img/sh_img/인기게시글/7.jpg" alt="인기7">
                                    <img src="img/sh_img/인기게시글/8.jpg" alt="인기8">
                                    <img src="img/sh_img/인기게시글/9.jpg" alt="인기9">
                                </div>
                            </div>
                            
                        </div>
                        <!--캐러셀 좌우버튼 영역-->
                        <a href="#인기게시물" class="carousel-control-prev"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#인기게시물" class="carousel-control-next"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>


        <!-- bottom -->
        <div class="bottom">
            <nav class="main-nav">
                <div class="item">
                    <a href="/board/mainpage.do">
                        <img class="soju1" src="img/sh_img/소주아이콘.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="/board/mainpage.do">
                        <img class="beer1" src="img/sh_img/맥주아이콘.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="/board/mainpage.do">
                        <img class="yangju1" src="img/sh_img/양주아이콘.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="/board/mainpage.do">
                        <img class="wine1" src="img/sh_img/와인아이콘.png" alt="">
                    </a>
                </div>
            </nav>
        </div>
    </div>

<script>
    $(function(){
        $("nav img").hover(
            function(){
                $(this).css("opacity","1")
            },
            function(){
                $(this).css("opacity","0.7")
            }

        );
    });
    
</script>

</body>
</html>