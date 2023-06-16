<?php
include_once("./_common.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/ress.min.css">
<link rel="stylesheet" href="css/style.css">
<!--fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?
                    family=Montserrat:wght@100;200;300;400;500;600;700;800;900&
                    family=Noto+Sans+KR:wght@100;300;400;500;700;900&
                    family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Archivo+Black&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href='https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css'> <!--footer에 사용된 pretendard 글꼴-->
<title>연습</title>
<style>
/* 간격 맞추기 위해서 박스 삽입
    (padding, margin으로 하려다가 시간 내에 실패) */
    .get_distance{background:yellow; visibility:hidden;}        
    .box_for_distance_1{height:106px;}
    .box_for_distance_2{height:34px;}
    .box_for_distance_3{height:50px;}

/* 콘텐츠 영역 확인 */    
#area1180{
    width:1180px;
    position: absolute;
    height: 12000px;
    background: rgba(0,0,0,0.2);
    z-index:99999;
    left:50%;
    top:0;
    transform: translate(-50%, -50%);}
</style>
</head>
<body>
<div id="wrap">
    <!-- <div id="area1180"></div> -->
        <!-- header -->
        <header id="header">
            <div id="header-title">
                <div class="container_left">
                    <div style="height:5500px;position:absolute;left:101px; background-color: green; visibility:hidden;"><!--visibility 안쓰고 배경색 없애도 되는데 써봤음.-->
                        <a href=""><img src="images/menubutton.png" alt="" style="position:sticky;top:58px; visibility:visible;"></a><!--visibility 안써도 되는데 써봤음.-->
                    </div>
                    <a href="#"><img src="images/logo.png" id="logo" alt="로고"></a>
                </div>
            </div>
            <nav id="header-nav">
                <div class="container_right">
                    <ul>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">My Page</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- /header -->
    
        <!-- contents -->
        <section id="contents">
    
            <div id="cont_ban1">
                <div class="container">
                    <img src="images/banner-product1.png" id="main-banner" width="220px" height="685px" alt="">   <!--*****크기 수정 -10 -13-->
                    <p class="banner_main_title">Find My<br>PERFUME</p>
                    <p class="banner_sub_title">Let's Find<br>Your Favorite<br><span style="font-weight:bold; ">Perfume<span></p><!--좌측하단 텍스트-->
                    <div style="position:absolute;left:370px;bottom:40px;">  <!--*****높이 수정 bottom -20-->
                        <img src="images/banner_arrow_left.png" alt="">
                        <img src="images/banner_arrow_right.png" style="margin-left:10px;" alt="">
                    </div>
                </div>
            </div>
            <!--/banner_1-->

            <div id="cont_ban2">
                <div class="container">
                    <img src="images/bg.jpg" alt="banner_2_bg" width="373" height="597">
                    <img src="images/banner-product2.png" alt="banner_2_pd">
                    <div class="banner_2_text">
                        <div class="box_for_distance_1 get_distance"></div> <!--간격 맞추기 위해 삽입-->
                        <p>PERFUME COSMETIC</p>
                        <p>Best Seller</p>
                        <p>MISTER
                        <br>MARVELOUS</p>
                        <p>이 향은 현대인에게 깔끔하고, 자신만만하며, 정교하고 놀랍습니다.</p>
                        <p>2022년 마블러스라는 것이 무엇을 의미하는지에 대한 규칙을 다시 쓰면서,</p>
                        <p>그 향기는 오늘날의 풍경에서 남성성의 다면적이고 계층화된 복잡성과</p>
                        <p>현대인이 일상 생활에서 자신감과 여유로 탐색하는 많은 역할을 반영합니다.</p>
                        <br>
                        <p>Buy Now</p>
                    </div>

                    <div class="bottom_number">
                        <div class="bottom_number_container">
                            <div class="ban2_bottom_left">01</div>
                            <div class="ban2_bottom_center">
                                <div class="ban2_bottom_center_border" ></div>
                            </div>
                            <div class="ban2_bottom_right">03</div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /banner_2 -->

            <div class="box_for_distance_2 get_distance"></div> <!-- 간격 맞추기 위해 삽입 -->
            <div id="con_1">
                <div class="container">
                    <img src="images/br-banner-product1.jpg" class="product1" alt="">
                </div>
            </div>
            <!-- content_1 -->
    
            <div class="box_for_distance_3 get_distance"></div> <!-- 간격 맞추기 위해 삽입 -->
            <div id="con_2">
                <div class="container">
                    <nav id="cont2_nav">
                        <ul>
                            <li><a href="">PERFUME</a></li>
                            <li><a href="">BODY CARE</a></li>
                            <li><a href="">COSMETIC</a></li>
                            <li><a href="">LIP STICK</a></li>
                        </ul>
                    </nav>
                    <div id="cont_2_body">
                        <hr style="border: solid 1px #000; margin-bottom:20px;">
                        <div class="grid-container">
                            <div class="grid_item">
                                <a href="#" ><img src="images/tab1.jpg" alt=""></a>
                                <p>FOR REST</p>
                                <p>Portable Perfume</p>
                            </div>
                            <div class="grid_item">
                                <a href="#" ><img src="images/tab2.jpg" alt=""></a>
                                <p>IN THE SHOWER</p>
                                <p>Perfume</p>
                            </div>
                            <div class="grid_item">
                                <a href="#" ><img src="images/tab3.jpg" alt=""></a>
                                <p>FORGET ME NOW</p>
                                <p>Perfume</p>
                            </div>
                            <div class="grid_item">
                                <a href="#" ><img src="images/tab4.jpg" alt=""></a>
                                <p>GAIAC FLOWER</p>
                                <p>Portable Perfume</p>
                            </div>
                            <div class="grid_item">
                                <a href="#" ><img src="images/tab5.jpg" alt=""></a>
                                <p>SANTAL CREAM</p>
                                <p>Portable Perfume</p>
                            </div>
                            <div class="grid_item">
                                <a href="#" ><img src="images/tab6.jpg" alt=""></a>
                                <p>GENTLE NIGHT</p>
                                <p>Perfume</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /content_2 -->
    
            <div id="con_3">
                <div class="container">
                    <img src="images/leftbg.jpg" alt="">
                    <div class="con_3_txt">
                        <p>MAKE-UP FOR YOU<br><span>View More</span></p>
                    </div>
                    <div class="con_3_box_wrap">
                        <div class="con_3_box">
                            <div class="item_1">001</div>
                            <div class="item_2"><img src="images/lip01.jpg" width="480" height="657" style="border: 1px solid #000" alt=""></div>
                        </div>
                        <div class="con_3_box">
                            <div class="item_1">002</div>
                            <div class="item_2"><img src="images/lip02.jpg" width="480" height="657" style="border: 1px solid #000" alt=""></div>
                        </div>
                        <div class="con_3_box">
                            <div class="item_1">003</div>
                            <div class="item_2"><img src="images/lip03.jpg" width="480" height="657" style="border: 1px solid #000" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /content_3 -->

            <div id="con_4">
                <div class="container">
                    <ul>
                        <li>
                            <div class="con_4_leftBox">
                                <div class="con_4_left_top" style="height:280px;">
                                    <img src="images/bottom-banner1.jpg" width="280" height="280" style="border:solid 1px #000" alt="">
                                </div>
                                <div class="con_4_left_bottom">
                                    <p style="position: absolute; top:0; left:0;">LOGO</p>
                                    <p style="position: absolute; bottom:0; right:0;">BRAND<br>NAME</p>
    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="con_4_centerBox">
                                <img src="images/bottom-banner2.jpg" width="580" height="580" style="border:solid 1px #000" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="con_4_rightBox">
                                <img src="images/bottom-banner3.jpg" width="280" height="580" style="border:solid 1px #000" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /content_4-->

        </section>
        <!-- /contents -->
    
        <!-- footer -->
        <footer id="footer">
            <div id="footer-info">
                <div class="container">
                    <div class="midbox">
                        <div class="midbox-top">
                                <p><span>LOGO</span><br>COMPANY</p>
                                <ul>
                                    <li style="font-weight:bolder">CS CENTER</li>
                                    <li>월~금 AM 09:00 ~ PM 05:30</li>
                                    <li>점심 PM 12:30 ~ PM 01:30</li>
                                    <li>주말 및 공휴일은 휴무입니다.</li>
                                </ul>
                                <ul>
                                    <li style="font-weight:bolder">BANK INFO</li>
                                    <li>국민은행 00000000</li>
                                    <li>예금주 임시</li>
                                </ul>
                                <ul>
                                    <li style="font-weight:bolder">COMPANY INFO</li>
                                    <li><span style="line-height:1.2;">서울특별시 금천구 가산디지털1로 1
                                        <br>(가산동, 더루벤스밸리) 1409<span></li>
                                    <li>대표 이대홍</li>
                                    <li>TEL 02-6487-6047</li>
                                    <li>MAIL seumweb@seumweb.com</li>
                                    <li>사업자등록번호 486-86-02701</li>
                                </ul>
                                <ul>
                                    <li style="font-weight:bolder">OFFICIAL</li>
                                    <li>브랜드 스토리</li>
                                    <li>이용약관</li>
                                    <li>이용안내</li>
                                    <li>개인정보처리방침</li>
                                </ul>
                                <ul>
                                    <li style="font-weight:bolder">HELP</li>
                                    <li>1:1문의</li>
                                    <li>상품후기</li>
                                    <li>상품문의</li>
                                    <li>공지사항</li>
                                </ul>
                        </div>
                        <div class="midbox-bottom" >
                            <hr style="border:solid 1px #000;">
                            <div class="sns_img">
                                <div class="sns_img_border"><img src="images/instagram.png" width="24" height="24" alt=""></div>
                                <div class="sns_img_border"><img src="images/facebook.png" width="28" height="28" alt=""></div>
                                <div class="sns_img_border"><img src="images/kakao-talk.png" width="24" height="24" alt=""></div>
                                <div class="sns_img_border"><img src="images/naver.png" width="20" height="20" alt=""></div>
                            </div>
                            <p>HOSTING BY 엔에이치고도(주)</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- /footer -->
    </div>
    <!--wrap-->
</body>
</html>
<!-- <script>
	function add_number(){
		alert('ㅎㅇ');
	}
 
</script> -->
