<?php
include_once("./_common.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/ress.css">
<link rel="stylesheet" href="css/style.css">
<!--fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?
                    family=Montserrat:wght@100;200;300;400;500;600;700;800;900&
                    family=Noto+Sans+KR:wght@100;300;400;500;700;900&
                    family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Archivo+Black&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Geologica:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href='https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css'> <!--footer에 사용된 pretendard 글꼴-->
<title>연습</title>
<style>

</style>
</head>
<body>
    <div id="wrap">
        <!--콘텐츠 영역 확인(1180px)-->
        <!-- <div id="area1180"></div> -->
            <!-- header -->
            <header id="header">
                <div id="header-title">

                    <div class="container_left">
                        <div class="menu_bg" style="height:5500px;position:absolute;left:101px; background-color: green; visibility:hidden;">
                            <div href="" class="menu"><img src="images/menubutton.png" alt=""></div>            <!--메뉴 버튼-->
                            <div href="" class="menu_open"><img src="images/closebutton.png" alt="">            <!--펼친 메뉴-->
                            </div>
                            <div class="open_menu_wrap" style="position:sticky; opacity: 0; transition: 0.5s; top:130px; visibility:hidden;">
                                
                                <!--아코디언 메뉴-->
                                <ul class="aco_list">
                                    <li>
                                        <a>PERFUME</a>
                                        <p class="text_box">MALE</p>
                                        <p class="text_box">FEMALE</p>
                                    </li>
                                    <li class="text_box">
                                        <a>BODY CARE</a>
                                        <p class="text_box">LOTION</p>
                                        <p class="text_box">BODY WASH</p>
                                        <p class="text_box">MIST</p>
                                    </li>
                                    <li class="text_box">
                                        <a>COSMETIC</a>
                                        <p class="text_box">MASCARA</p>
                                        <p class="text_box">EYESHADOW</p>
                                        <p class="text_box">EYELINER</p>
                                        <p class="text_box">COLOUR STICK</p>
                                        <p class="text_box">PENCIL</p>
                                    </li>
                                    <li class="text_box">
                                        <a>LIP STICK</a>
                                        <p class="text_box">LIP STICK</p>
                                        <p class="text_box">LIP BALM</p>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <a href="#"><img src="images/logo.png" id="logo" alt="로고"></a>
                    </div>
                </div>
                <nav id="header-nav">

                    <div class="container_right">
                        <div class="header_right_txt_wrap">
                            <div class="header_right_txt_wrap_inner search">
                                <img src="images/search.png" width="15" height="15" alt="">
                                <a href="#"><span>Search</span></a></div>
                            <div class="header_right_txt_wrap_inner"><a href="#"><span>Login</span></a></div>
                            <div class="header_right_txt_wrap_inner"><a href="#"><span>Sign in</span></a></div>
                            <div class="header_right_txt_wrap_inner"><a href="#"><span>Cart</span></a></div>
                            <div class="header_right_txt_wrap_inner"><a href="#"><span>My Page</span></a></div>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- /header -->
        
            <!-- contents -->
            <section id="contents">
        
                <div id="cont_ban1">
                    <div class="container" style="overflow:hidden;">   <!--overflow: hidden;-->
                        <img class="main_bg2_fade bg_fade" src="images/main-bg-2.jpg" alt="">
                        <img src="images/banner-product1.png" class="main_banner2" width="" height="" alt="">  
                        <img class="main_bg1_fade bg_fade" src="images/main-bg-1.jpg" alt="">
                        <img src="images/banner-product2.png" class="main_banner1" width="220px" height="685px" alt="">  
                        
                        <img class="banner1_main_font mainfont" src="images/findmyperfume.png" alt=""> <!--이미지로 수정-->
                        <img class="banner1_main_font2 mainfont" src="images/findmyperfume2.png" alt=""><!--이미지로 수정-->
                            <!-- <p class="banner_main_title">Find My<br>PERFUME</p> -->
                            <!-- <p class="main_title_fade">Find My<br>PERFUME</p> -->
                            <p class="banner_sub_title">Let's Find<br>Your Favorite<br><span style="font-weight:bold; ">Perfume<span></p>
                            <div style="position:absolute;left:370px;bottom:40px;">
                                <img class="cont_ban1_arrow left" src="images/banner_arrow_left.png" alt="">
                                <img class="cont_ban1_arrow right" src="images/banner_arrow_right.png" style="margin-left:10px;" alt="">
                            </div>
                    </div>
                </div>
                <!--/banner_1-->
    
                <div id="cont_ban2">
                    <div class="container">
                        <img class="prev_arrow" src="images/prev_arrow.png" width="40" height="48" alt="">
                        <img class="next_arrow" src="images/next_arrow.png" width="40" height="48" alt="">

                        <img class="banner2_bg1" src="images/bg1.jpg" alt="banner_2_bg" width="373" height="597">
                        <img class="banner2_product1" src="images/banner-product1.png" alt="banner_2_product1">

                        <img class="banner2_bg2" src="images/bg2.jpg" alt="banner_2_bg2" width="373" height="597">
                        <img class="banner2_product2" src="images/banner-product2.png" alt="banner_2_product2">

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
                            <div><img class="buy_now" src="images/buynow.png" width="50" height="10" alt=""></div>
                        </div>
    
                        <div class="bottom_number">
                            <div class="bottom_number_container">
                                <div class="ban2_bottom_left">01</div>
                                <div class="ban2_bottom_center">
                                    <div class="ban2_bottom_center_border" ></div>
                                </div>
                                <div class="ban2_bottom_right">02</div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <!-- /banner_2 -->
    
                <div class="box_for_distance_2 get_distance"></div> <!-- 간격 맞추기 위해 삽입 -->
                <div id="con_1">
                    <div class="container">
                        <img class="con1_bg" src="images/br-banner.jpg" alt="">
                        <img src="images/br-banner-product1.jpg" class="product1" alt="">
                        <img src="images/br-banner-product2.jpg" class="product2" alt="">
                        <div class="con1_wrap_bgout"></div> <!--이미지 어둡게-->
                        <div class="con1_wrap">
                            <div class="con1_inner_wrap">
                                <div class="con1_inner_left">
                                    <p class="con1_txt"><span>IN THE SHOWER</span><br>86,000KRW</p>
                                </div>
                                <div class="con1_inner_right">
                                    <div class="item">
                                        Add to Cart
                                    </div>
                                </div>
                                    
                            </div>
                        </div>
                        
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
                                <div class="grid_item grid_item_1">
                                    <img src="images/tab1.jpg" alt="">
                                    <p>FOR REST</p>
                                    <p>Portable Perfume</p>
                                    <!-- hover 영역 -->
                                    <div class="con2_hover">
                                        <div class="con2_hover_txt_area">
                                            <div class="con2_hover_txt_area_2">
                                                <div class="con2_hover_item1">
                                                    <div>30ml/1.0oz</div>
    
                                                    <div>59,000 KRW</div>
                                                </div>
                                                <div class="con2_hover_item2">
                                                    Hinoki, Frankincense, Turkish rose, Yuzu, Nutmeg
                                                </div>
                                                <div class="con2_hover_item3">Add to Cart</div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="grid_item">
                                    <img src="images/tab2.jpg" alt="">
                                    <p>IN THE SHOWER</p>
                                    <p>Perfume</p>
    
                                    <!-- hover 영역 -->
                                    <div class="con2_hover">
                                        <div class="con2_hover_txt_area">
                                            <div class="con2_hover_txt_area_2">
                                                <div class="con2_hover_item1">
                                                    <div>100ml/3.4oz</div>
                                                    <div>128,000 KRW</div>
                                                </div>
                                                <div class="con2_hover_item2">
                                                    Patchouli, Tobacco, Bitter orange, Campari, ...
                                                </div>
                                                <div class="con2_hover_item3">Add to Cart</div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="grid_item">
                                    <img src="images/tab3.jpg" alt="">
                                    <p>FORGET ME NOW</p>
                                    <p>Perfume</p>
    
                                    <!-- hover 영역 -->
                                    <div class="con2_hover">
                                        <div class="con2_hover_txt_area">
                                            <div class="con2_hover_txt_area_2">
                                                <div class="con2_hover_item1">
                                                    <div>100ml/4.3oz</div>
                                                    <div>128,000 KRW</div>
                                                </div>
                                                <div class="con2_hover_item2">
                                                    Basil, Pink pepper, Green, Gardenia, Amber
                                                </div>
                                                <div class="con2_hover_item3">Add to Cart</div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="grid_item">
                                    <img src="images/tab4.jpg" alt="">
                                    <p>GAIAC FLOWER</p>
                                    <p>Portable Perfume</p>
                                    
                                    <!-- hover 영역 -->
                                    <div class="con2_hover">
                                        <div class="con2_hover_txt_area">
                                            <div class="con2_hover_txt_area_2">
                                                <div class="con2_hover_item1">
                                                    <div>30ml/1.0oz</div>
                                                    <div>59,000 KRW</div>
                                                </div>
                                                <div class="con2_hover_item2">
                                                    Wild rose, Guaiac, Oriental, Vanilla, Amber
                                                </div>
                                                <div class="con2_hover_item3">Add to Cart</div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="grid_item">
                                    <img src="images/tab5.jpg" alt="">
                                    <p>SANTAL CREAM</p>
                                    <p>Portable Perfume</p>
                                    
                                    <!-- hover 영역 -->
                                    <div class="con2_hover">
                                        <div class="con2_hover_txt_area">
                                            <div class="con2_hover_txt_area_2">
                                                <div class="con2_hover_item1">
                                                    <div>30ml/1.0oz</div>
                                                    <div>59,000 KRW</div>
                                                </div>
                                                <div class="con2_hover_item2">
                                                    Sandalwood, Vetiver, Fig, Cardamom, Giner, ...
                                                </div>
                                                <div class="con2_hover_item3">Add to Cart</div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                                <div class="grid_item">
                                    <img src="images/tab6.jpg" alt="">
                                    <p>GENTLE NIGHT</p>
                                    <p>Perfume</p>
                                    
                                    <!-- hover 영역 -->
                                    <div class="con2_hover">
                                        <div class="con2_hover_txt_area">
                                            <div class="con2_hover_txt_area_2">
                                                <div class="con2_hover_item1">
                                                    <div>100ml/3.4oz</div>
                                                    <div>128,000 KRW</div>
                                                </div>
                                                <div class="con2_hover_item2">
                                                    Suede, White tea, Fig, Moss, Cedarwood, Musk
                                                </div>
                                                <div class="con2_hover_item3">Add to Cart</div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content_2 -->
        
                <div id="con_3">
                            <div class="container">
                                <div style="z-index:21">
                                    <img src="images/leftbg.jpg" alt="">
                                    <div class="con_3_txt">
                                        <p>MAKE-UP FOR YOU<br><span>View More</span></p>
                                    </div>
                                    <div><img class="view_more" src="images/view_more.png" width="10" height="50"></div>
                                </div>

                                <div class="con_3_box_wrap"> <!--제품wrap-->

                                    <div class="con_3_box">
                                        <div class="item_1">001</div>
                                        <div class="item_2"><img src="images/lip01.jpg" width="480" height="657" alt="제품1"></div>
                                        <!--제품 hover 메뉴-->
                                        <div class="item_3_hovoer_bg"></div>
                                        <div class="item_3_hovoer_menu">
                                            <div class="item3_bot_wrap">
                                                <div class="con3_item3_wrap_position">
                                                    <div class="item3_bot_txt1">
                                                        <p class="item3_p1">LIP STICK BALM</p>
                                                        <p class="item3_p2">59,000 KRW</p>
                                                    </div>
                                                    <div class="item3_bot_txt2">
                                                        5 Colors
                                                    </div>
                                                    <div class="item3_bot_txt3">
                                                        <div class="item3_bot_btn">Add to Cart</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/제품 hover 메뉴-->
                                    </div>
                                    <div class="con_3_box">
                                        <div class="item_1">002</div>
                                        <div class="item_2"><img src="images/lip02.jpg" width="480" height="657" alt="제품2"></div>
                                        <!--제품 hover 메뉴-->
                                        <div class="item_3_hovoer_bg"></div>
                                        <div class="item_3_hovoer_menu">
                                            <div class="item3_bot_wrap">
                                                <div class="con3_item3_wrap_position
">
                                                    <div class="item3_bot_txt1">
                                                        <p class="item3_p1">LIP STICK BALM</p>
                                                        <p class="item3_p2">59,000 KRW</p>
                                                    </div>
                                                    <div class="item3_bot_txt2">
                                                        5 Colors
                                                    </div>
                                                    <div class="item3_bot_txt3">
                                                        <div class="item3_bot_btn">Add to Cart</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/제품 hover 메뉴-->
                                    </div>
                                    <div class="con_3_box">
                                        <div class="item_1">003</div>
                                        <div class="item_2"><img src="images/lip03.jpg" width="480" height="657" alt="제품3"></div>
                                        <!--제품 hover 메뉴-->
                                        <div class="item_3_hovoer_bg"></div>
                                        <div class="item_3_hovoer_menu">
                                            <div class="item3_bot_wrap">
                                                <div class="con3_item3_wrap_position
">
                                                    <div class="item3_bot_txt1">
                                                        <p class="item3_p1">LIP STICK BALM</p>
                                                        <p class="item3_p2">59,000 KRW</p>
                                                    </div>
                                                    <div class="item3_bot_txt2">
                                                        5 Colors
                                                    </div>
                                                    <div class="item3_bot_txt3">
                                                        <div class="item3_bot_btn">Add to Cart</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/제품 hover 메뉴-->
                                    </div>
                                    <div class="con_3_box">
                                        <div class="item_1">004</div>
                                        <div class="item_2"><img src="images/lip03.jpg" width="480" height="657" alt="제품4"></div>
                                        <!--제품 hover 메뉴-->
                                        <div class="item_3_hovoer_bg"></div>
                                        <div class="item_3_hovoer_menu">
                                            <div class="item3_bot_wrap">
                                                <div class="con3_item3_wrap_position
">
                                                    <div class="item3_bot_txt1">
                                                        <p class="item3_p1">LIP STICK BALM</p>
                                                        <p class="item3_p2">59,000 KRW</p>
                                                    </div>
                                                    <div class="item3_bot_txt2">
                                                        5 Colors
                                                    </div>
                                                    <div class="item3_bot_txt3">
                                                        <div class="item3_bot_btn">Add to Cart</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/제품 hover 메뉴-->
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
                                    <div class="con_4_left_top con_4_box" style="height:280px;">
                                        <img src="images/bottom-banner1.jpg" width="280" height="280" alt="">
                                        <span>ABOUT BRAND</span>
                                    </div>
                                    <div class="con4_leftBox_hover 4_hoverBox"></div>
                                    <div class="con_4_left_bottom">
                                        <p style="position: absolute; top:20px; left:0;">LOGO</p>
                                        <p style="position: absolute; bottom:10px; right:0;">BRAND<br>NAME</p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="con_4_centerBox con_4_box">
                                    <img src="images/bottom-banner2.jpg" width="580" height="580" alt="">
                                    <span>BRAND WORTHY</span>
                                </div>
                                <div class="con4_centerBox_hover 4_hoverBox"></div>
                            </li>

                            <li>
                                <div class="con_4_rightBox con_4_box">
                                    <img src="images/bottom-banner3.jpg" width="280" height="580" alt="">
                                    <span>BRAND NEWS</span>
                                </div>
                                <div class="con4_rightBox_hover 4_hoverBox"></div>
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
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            
            // 햄버거 메뉴버튼
            $(".menu").click(function(){
                $(this).css({"opacity": "0", "z-index": "0"});
                $(".menu_open").css({"opacity": "1", "z-index": "10"});
                $(".open_menu_wrap").css({"visibility":"visible", "opacity":"1", "z-index": "10", "top":"110px"})
            });
            $(".menu_open").click(function(){
                $(this).css({"opacity": "0", "z-index": "0"});
                $(".menu").css({"opacity": "1", "z-index": "10"});
                $(".open_menu_wrap").css({"visibility":"hidden", "opacity": "0", "z-index": "0", "top":"130px"});
            });
            $(".open_menu_wrap").on("click", function(e){
                e.preventDefault();
            });

            
            //아코디언 메뉴
            // acoAco.css("border","none");
            
            const acoAco = $('.aco_list li a');
            acoAco.on("click", function(){
                const item = $(this);

                // acoAco.parent().find('.text_box').stop().slideUp();
                item.parent().find('.text_box').stop().slideUp();

                if(item.hasClass('active')){
                    item.find('.text_box').stop().slideUp();
                    item.removeClass('active');
                    $(this).css("border-bottom","none");
                }else{
                    item.parent().find('.text_box').stop().slideDown();
                    acoAco.removeClass('active');
                    item.addClass('active');
                    $(this).css("border-bottom","2px solid #111");
                }
            });
    


            //배너1 좌측 하단 텍스트
            setTimeout(() => {
                $(".banner_sub_title").css({"top":"78%", "opacity":"1"});
            }, 1500);
            
            //배너1 배경클릭 -> banner_1 배경 슬라이드
            var bg1 = "in";
            $(".main_bg1_fade, .main_bg2_fade, .mainfont").on("click", function(){
                if(bg1=="in"){
                    bg1="out";
                    $(".main_bg1_fade").css({
                        "transform":"translate(-30%,-50%)",
                        "opacity":"0"
                    });
                    $(".main_banner1").css({
                        "transform":"translate(150%,-50%)",
                        "opacity":"0"
                    });
                    $(".banner1_main_font2").css({
                        "transform":"translate(0, -50%)",
                        "opacity":"0"
                    });
                } else if(bg1=="out"){
                    bg1="in"
                    $(".main_bg1_fade, .main_banner1").css({
                        "transform":"translate(-50%,-50%)",
                        "opacity":"1"
                    });
                    $(".banner1_main_font2").css({
                        "transform":"translate(-50%, -50%)",
                        "opacity":"1",
                    });
                }
                console.log(bg1);
            });


        
        //banner_2 페이지별 애니메이션 속성 세팅
        //기존에 클으로 이미지 움직이게 했었는데 움직이는건 hover효과라고해서 수정.
        //기존에 작동되던 코드는 230626_test_submit copy.html 깃허브에서 볼 것.


        
        //banner2 이미지 애니메이션
            ban2=1
            $(".next_arrow").on("click",function(){
                if(ban2<2) ban2++;
                // console.log(ban2);
                $(".banner2_product1, .banner2_bg1").css({
                    "opacity":"0"
                });
                $(".banner2_product2, .banner2_bg2").css({
                    "opacity":"1"
                });
                $(".ban2_bottom_left").text("02")
            });  
            $(".prev_arrow").on("click",function(){
                if(ban2>1) ban2--;
                // console.log(ban2);
                $(".banner2_product1, .banner2_bg1").css({
                    "opacity":"1"
                });
                $(".banner2_product2, .banner2_bg2").css({
                    "opacity":"0"
                });
                $(".ban2_bottom_left").text("01")
            });
            
        //banner_2 hover하면 이미지 움직임
            $("#cont_ban2 .container").hover(function(){
                $(".banner2_product1").css({
                    "right":"350px"
                });
            }, function(){
                $(".banner2_product1").css({
                    "right":"280px"
                });
            });

            $("#cont_ban2 .container").hover(function(){
                $(".banner2_product2").css({
                    "right":"420px"
                });
            }, function(){
                $(".banner2_product2").css({
                    "right":"370px"
                });
            });

            $("#cont_ban2 .container").hover(function(){
                $(".buy_now").css({
                    "left":"90px",
                    "opacity":"1"
                });
            }, function(){
                $(".buy_now").css({
                    "left":"80px",
                    "opacity":"0"
                });
            });

        //content_1 배경 일정 시간마다 product 바뀜
        var con1 = 0;
        setInterval(function(){
            // console.log(new Date())
            if(con1==0){
                    con1++;
                    $(".product2").css({
                        "opacity":"1",
                        "left":"370px"
                    });
                    $(".product1").css({
                        "opacity":"0"
                    });
                } else if(con1==1){
                    con1--;
                    $(".product2").css({
                        "opacity":"0",
                        "left":"300px"
                    });
                    $(".product1").css({
                        "opacity":"1"
                    });
                }
        }, 3000);

        //content_1 배경 클릭하면 product 바뀜
            // var con1 = 0;
            // $("#con_1 .con1_bg").on("click", function(){
            //     if(con1==0){
            //         con1++;
            //         $(".product2").css({
            //             "opacity":"1",
            //             "left":"370px"
            //         });
            //         $(".product1").css({
            //             "opacity":"0"
            //         });
            //     } else if(con1==1){
            //         con1--;
            //         $(".product2").css({
            //             "opacity":"0",
            //             "left":"300px"
            //         });
            //         $(".product1").css({
            //             "opacity":"1"
            //         });
            //     }
            // });

            //content_1 product 마우스오버 이벤트
            $(".con1_wrap").hover(function(){
                $(".con1_wrap_bgout").css({
                    "opacity":"0.3"
                });
            }, function(){
                $(".con1_wrap_bgout").css({
                    "opacity":"0"
                });
            });

            //content_3 좌측 View More 화살표 무빙
            $(".con_3_txt>p").hover(function(){
                $(".view_more").css({
                    "opacity":"1",
                    "top":"530px"
                });
            }, function(){
                $(".view_more").css({
                    "opacity":"0",
                    "top":"545px"
                });
            });
            
            // content_3 product 마우스오버 이벤트
            $(".item_3_hovoer_menu").hover(function(){
                $(this).prev().css({
                    "opacity":"1"
                });
            }, function(){
                $(this).prev().css({
                    "opacity":"0"
                });
            });

            // content_4 product1 마우스오버 이벤트
            $(".4_hoverBox").hover(function(){
                $(this).prev().children("span").css({
                    "opacity":"1",
                    "top":"45%"
                });
            }, function(){
                $(this).prev().children("span").css({
                    "opacity":"0",
                    "top":"60%"
                });
            });
        }); //자동실행함수 E
    </script>
