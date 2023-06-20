<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/ress.min.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/bootstrap.min.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/mainframe_style.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/feed_style.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/chatting_style.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/write_reply_style.css">
    <!--글꼴 link 태그로 불러오기-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" >
    <!--파비콘 설정-->
    <link rel="icon" type="image/png" href="${pageContext.request.contextPath }/img/logo.png">
    <script src="${pageContext.request.contextPath }/js/bootstrap.bundle.min.js"></script>

    <title>SOOULMATE</title>
    <script type="text/javascript" src="${pageContext.request.contextPath }/js/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div id="home">
        <div class="wrapper">
            <div class="left">
                <button class="logo" type="button" onclick="location.href='mainpage.html'">
                    <img src="${pageContext.request.contextPath }/img/logo.png" alt="로고">
                </button>
                <div class="category">
                    <div>
                        <button class="beer"><img src="${pageContext.request.contextPath }/img/beericon.png" alt="맥주아이콘"></button>
                        <button class="yangju"><img src="${pageContext.request.contextPath }/img/yangjuicon.png" alt="양주아이콘"></button>
                        <button class="wine"><img src="${pageContext.request.contextPath }/img/wineicon.png" alt="와인아이콘"></button>
                    </div>
                </div>
                <div class="nav">
                    <button class="plus" data-bs-toggle="modal" data-bs-target="#intro">
                        <img src="${pageContext.request.contextPath }/img/plus.png" alt="+아이콘">
                        <p >게시글 등록</p>
                    </button>
                    <button class="star" onclick="location.href='popularGrid.html'">
                        <img src="${pageContext.request.contextPath }/img/star.png" alt="*아이콘">
                        <p>인기 게시물</p>
                    </button>
                    <button class="profile" onclick="location.href='profile.html'">
                        <img src="${pageContext.request.contextPath }/img/profile1.png" alt="=아이콘">
                        <p>프로필</p>
                    </button>
                </div>
                <div class="chat">
                    <div class="chatwrap">
                        
                        <button class="chatbox" style="margin-top:20px;" id="bg1">
                            <div class="div1"><img src="${pageContext.request.contextPath }/img/sh_img/대화상대사진/김연아.png" alt="김연아"></div>
                            <div class="div2">대화중인 상대 1</div>
                        </button>
                        <button class="chatbox" style="margin-top:20px;" id="bg2">
                            <div class="div1"><img src="${pageContext.request.contextPath }/img/sh_img/대화상대사진/박민영.png" alt="김연아"></div>
                            <div class="div2">대화중인 상대 2</div>
                        </button>
                        <button class="chatbox" style="margin-top:20px;" id="bg3">
                            <div class="div1"><img src="${pageContext.request.contextPath }/img/sh_img/대화상대사진/신세경.png" alt="김연아"></div>
                            <div class="div2">대화중인 상대 3</div>
                        </button>
                        <button class="chatbox" style="margin-top:20px;" id="bg4">
                            <div class="div1"><img src="${pageContext.request.contextPath }/img/sh_img/대화상대사진/손예진.png" alt="김연아"></div>
                            <div class="div2">대화중인 상대 4</div>
                        </button>
                        <button class="chatbox" style="margin-top:20px;" id="bg5">
                            <div class="div1"><img src="${pageContext.request.contextPath }/img/sh_img/대화상대사진/금새록.png" alt="김연아"></div>
                            <div class="div2">대화중인 상대 5</div>
                        </button>
                    </div>
                    
                    <!--대화 선택후 채팅창으로 이동된 화면-->
                    <div class="chatwrap_b" id="b_bg1">
                        <div class="b_head">
                            <button class="closebox">
                                    닫기
                            </button>
                        </div>
                        <!--        채팅창        -->
                        <div class="b_middle">

                            <div class="chat_wrap">
                                <div class="inner">
                                </div>    
                                <input type="text" class="mymsg" placeholder="my내용 입력">
                                <!--<input type="text" class="yourmsg" placeholder="yhour내용 입력">-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="chatwrap_b" id="b_bg2">
                        <div class="b_head">
                            <button class="closebox">
                                    닫기
                            </button>
                        </div>
                        <!--        채팅창        -->
                        <div class="b_middle">

                            <div class="chat_wrap">
                                <div class="inner">
                                </div>    
                                <input type="text" class="mymsg" placeholder="my내용 입력">
                                <!--<input type="text" class="yourmsg" placeholder="yhour내용 입력">-->
                            </div>
                        </div>
                    </div>

                    <div class="chatwrap_b" id="b_bg3">
                        <div class="b_head">
                            <button class="closebox">
                                    닫기
                            </button>
                        </div>
                        <!--        채팅창        -->
                        <div class="b_middle">

                            <div class="chat_wrap">
                                <div class="inner">
                                </div>    
                                <input type="text" class="mymsg" placeholder="my내용 입력">
                                <!--<input type="text" class="yourmsg" placeholder="yhour내용 입력">-->
                            </div>
                        </div>
                    </div>

                    <div class="chatwrap_b" id="b_bg4">
                        <div class="b_head">
                            <button class="closebox">
                                    닫기
                            </button>
                        </div>
                        <!--        채팅창        -->
                        <div class="b_middle">

                            <div class="chat_wrap">
                                <div class="inner">
                                </div>    
                                <input type="text" class="mymsg" placeholder="my내용 입력">
                                <!--<input type="text" class="yourmsg" placeholder="yhour내용 입력">-->
                            </div>
                        </div>
                    </div>

                    <div class="chatwrap_b" id="b_bg5">
                        <div class="b_head">
                            <button class="closebox">
                                    닫기
                            </button>
                        </div>
                        <!--        채팅창        -->
                        <div class="b_middle">

                            <div class="chat_wrap">
                                <div class="inner">
                                </div>    
                                <input type="text" class="mymsg" placeholder="my내용 입력">
                                <!--<input type="text" class="yourmsg" placeholder="yhour내용 입력">-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="log-info-left">
                    <div class="log-img">
                        <a href="profile.html">
                            <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="내사진">
                        </a>
                    </div>
                    <div class="log-text">
                        <div class="log-id">
                            <a href="profile.html">
                                user1
                            </a>
                        </div>
                        <div class="log-msg">
                            유저1
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div id="search">
                    <div class="searchwrap">
                        <button class="icon">
                            <img src="${pageContext.request.contextPath }/img/searchicon.png" alt="검색아이콘">
                        </button>
                        <div class="input">
                            <input type="search" placeholder="Search" aria-label="Search">
                        </div>
                    </div>
                    <div class="log-info-right">
                        <div class="log-img">
                            <a href="profile.html">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="내사진">
                            </a>
                        </div>
                        <div class="log-text">
                            <div class="log-id">
                                <a href="profile.html">
                                    user1
                                </a>
                            </div>
                            <div class="log-msg">
                                유저1
                            </div>
                        </div>
                    </div>

                </div>
                <div id="contentbox">
                    <div class="contentwrap">
                        <div class="feedbox">
                            <div class="uploader" onclick="location.href='otherprofile.html'">
                                <img src="${pageContext.request.contextPath }/img/profileimg2.png" alt="프사"></img>
                                <p class="uploadername">user2</p>
                            </div>
                            <img class="picture" src="${pageContext.request.contextPath }/img/feed1.jpg" alt="피드1"></img>
                            <div class="funcs">
                                <p>짠 342회</p>
                                    <img class="like" src="${pageContext.request.contextPath }/img/binjan.png" alt="짠"></img>
                                    <img class="reply" src="${pageContext.request.contextPath }/img/bubble.PNG" alt="댓글" data-bs-toggle="modal" data-bs-target="#intro2"></img>
                                    <img class="follow" src="${pageContext.request.contextPath }/img/kkbicon.png" alt="깐부신청"></img>
                            </div>
                            <div class="content">
                                <p>같이 한잔 하실??<br>                                                    
                                    처처 맛집!<br><br> 
                                    <a href="">#처음처럼</a> <a href="">#먹고죽자</a> <a href="">#소주맛집</a></p>
                            </div>
                        </div>

                        <div class="feedbox">
                            <div class="uploader">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사"></img>
                                <p class="uploadername">user1</p>
                            </div>
                            <img class="picture" src="${pageContext.request.contextPath }/img/feed2.jpg" alt="피드2"></img>
                            <div class="funcs">
                                <p>짠 342회</p>
                                <img class="like" src="${pageContext.request.contextPath }/img/binjan.png" alt="짠"></img>
                                <img class="reply" src="${pageContext.request.contextPath }/img/bubble.PNG" alt="댓글"></img>
                                <img class="follow" src="${pageContext.request.contextPath }/img/kkbicon.png" alt="깐부신청"></img>
                            </div>
                            <div class="content">
                                <p>형식이 내용의 존재 방식이자 대상의 표면 현상이라면, 내용은 예술작품에 있어서 그 안에 포함된 것, 또는 미적 대상의 정신적인 것이나 내적인 면에 의존하는 미적 가치체계를 가리킨다. </p>
                            </div>
                        </div>

                        <div class="feedbox">
                            <div class="uploader">
                                <img src="${pageContext.request.contextPath }/img/profileimg3.jpg" alt="프사"></img>
                                <p class="uploadername">user3</p>
                            </div>
                            <img class="picture" src="${pageContext.request.contextPath }/img/feed3.jpg" alt="피드3"></img>
                            <div class="funcs">
                                <p>짠 342회</p>
                                <img class="like" src="${pageContext.request.contextPath }/img/binjan.png" alt="짠"></img>
                                <img class="reply" src="${pageContext.request.contextPath }/img/bubble.PNG" alt="댓글"></img>
                                <img class="follow" src="${pageContext.request.contextPath }/img/kkbicon.png" alt="깐부신청"></img>
                            </div>
                            <div class="content">
                                <p>형식이 내용의 존재 방식이자 대상의 표면 현상이라면, 내용은 예술작품에 있어서 그 안에 포함된 것, 또는 미적 대상의 정신적인 것이나 내적인 면에 의존하는 미적 가치체계를 가리킨다. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="intro"><div class="modal-dialog">
                <div class="modal-content">                                    
                        <div class="modal-body">
                            <div class="test">
                                <div id="maindiv">
                                    <div class="flex-container">
                                        <div class="flex-item4 color-blue1-blue">
                                            <div id="carouselExampleFade1" class="carousel slide carousel-fade">
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img src="${pageContext.request.contextPath }/img/feed1.jpg" class="d-block w-100" alt="...">
                                                  </div>
                                                  <!-- <div class="carousel-item">
                                                    <img src="${pageContext.request.contextPath }/img/pro11.jpg" class="d-block w-100" alt="...">
                                                  </div> -->
                                                  <div class="carousel-item">
                                                    <img src="${pageContext.request.contextPath }/img/pro13.jpg" class="d-block w-100" alt="...">
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img src="${pageContext.request.contextPath }/img/pro15.jpg" class="d-block w-100" alt="...">
                                                  </div>
                                                </div>
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleFade1"
                                                    data-bs-slide-to="0" class="active"></button>
                                                    <button type="button" data-bs-target="#carouselExampleFade1"
                                                    data-bs-slide-to="1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleFade1"
                                                    data-bs-slide-to="2"></button>
                                                    <!-- <button type="button" data-bs-target="#carouselExampleFade1"
                                                    data-bs-slide-to="3"></button> -->
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                  <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                  <span class="visually-hidden">Next</span>
                                                </button>
                                              </div>
                                        </div>
                                        <div class="flex-item color-red2">
                                            <textarea class="textarea1" placeholder="내용을 입력해 주세요."></textarea>
                                        </div>
                                    </div>
                                    <div class="flex-containerwnfb">
                        
                                        <div class="flex-container2">
                                            <div class="flex-item color-blue2" id="alcIcon1">
                                                <img src="${pageContext.request.contextPath }/img/sojuicon.png" alt="" class="grim2" id="sojuI">
                                            </div>
                                            <div class="flex-item color-blue3" id="alcIcon2">
                                                <img src="${pageContext.request.contextPath }/img/beericon.png" alt="" class="grim2" id="beerI">
                                            </div>
                                            <div class="flex-item color-blue4" id="alcIcon3">
                                                <img src="${pageContext.request.contextPath }/img/yangjuicon.png" alt="" class="grim2" id="yangI">
                                            </div>
                                            <div class="flex-item color-blue5" id="alcIcon4">
                                                <img src="${pageContext.request.contextPath }/img/wineicon.png" alt="" class="grim2" id="wineI">
                                            </div>                                            
                                        </div>
                                        <script>                                            
                                            $(function() {
                                                $("#alcIcon1").on("click", function() {
                                                    $("#alcIcon1").toggleClass("opacity");
                                                    $("#sojuI").toggleClass("opacity");
                                                });
                                            });
                                            $(function() {
                                                $("#alcIcon2").on("click", function() {
                                                    $("#alcIcon2").toggleClass("opacity")
                                                    $("#beerI").toggleClass("opacity")
                                                });
                                            });
                                            $(function() {
                                                $("#alcIcon3").on("click", function() {
                                                    $("#alcIcon3").toggleClass("opacity")
                                                    $("#yangI").toggleClass("opacity")
                                                });
                                            });
                                            $(function() {
                                                $("#alcIcon4").on("click", function() {
                                                    $("#alcIcon4").toggleClass("opacity")
                                                    $("#wineI").toggleClass("opacity")
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div class="btnwi">
                                        <button type="button">올리기</button>
                                        <button type="button" data-bs-dismiss="modal">취 소</button>
                                    </div>    
                                    <div class="btnwiUp">
                                        <button type="button">사진 추가</button>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="modal fade" id="intro2"><div class="modal-dialog">
                <div class="modal-content">                                    
                        <div class="modal-body">
                            <div class="test2">
                                <div id="maindiv2">
                                    <div class="flex-container-container">
                                        <div class="flex-container2-container">
                                            <div class="flex-item4 color-blue1-blue">
                                                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                                    <div class="carousel-inner">
                                                      <div class="carousel-item active">
                                                        <img src="${pageContext.request.contextPath }/img/feed1.jpg" class="d-block w-100" alt="...">
                                                      </div>
                                                      <!-- <div class="carousel-item">
                                                        <img src="${pageContext.request.contextPath }/img/pro11.jpg" class="d-block w-100" alt="...">
                                                      </div> -->
                                                      <div class="carousel-item">
                                                        <img src="${pageContext.request.contextPath }/img/pro13.jpg" class="d-block w-100" alt="...">
                                                      </div>
                                                      <div class="carousel-item">
                                                        <img src="${pageContext.request.contextPath }/img/pro15.jpg" class="d-block w-100" alt="...">
                                                      </div>
                                                    </div>
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselExampleFade"
                                                        data-bs-slide-to="0" class="active"></button>
                                                        <button type="button" data-bs-target="#carouselExampleFade"
                                                        data-bs-slide-to="1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleFade"
                                                        data-bs-slide-to="2"></button>
                                                        <!-- <button type="button" data-bs-target="#carouselExampleFade"
                                                        data-bs-slide-to="3"></button> -->
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                      <span class="visually-hidden">Next</span>
                                                    </button>
                                                  </div>
                                            </div>
                                        
                                        <div class="flex-item3 color-red2-red2">
                                            <div class="reply1">
                                                <img src="${pageContext.request.contextPath }/img/profileimg2.png" alt="" id="profpt1">
                                                <div class="tkdydwk1-wrapper">
                                                    <div class="tkdydwk1">
                                                        <div style="margin-top: 20px; margin-left: 10px;">
                                                            <a href="">user2</a>
                                                        </div>
                                                        <div>
                                                            같이 한잔 하실??<br>                                                    
                                                            처처 맛집!<br><br> 
                                                            <a href="">#처음처럼</a> <a href="">#먹고죽자</a> <a href="">#소주맛집</a>                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reply2">
                                                <div class="tkdydwk2">
                                                    <img src="${pageContext.request.contextPath }/img/profileimg3.jpg" alt="" id="profpt2">
                                                    <div style="margin-top: 10px; margin-left: 15px;">
                                                        <a href="">tkdydwk2</a>  
                                                    </div> 
                                                    <div style="margin: 10px">
                                                        손 손!!!!!!!!!!
                                                    </div>                                      
                                                </div>
                                            </div>
                                            <div class="reply3">
                                                <div class="tkdydwk3">
                                                    <img src="${pageContext.request.contextPath }/img/poto3.jpg" alt="" id="profpt3">
                                                    <div style="margin-top: 10px; margin-left: 15px;">
                                                        <a href="">tkdydwk3</a>  
                                                    </div>  
                                                    <div style="margin: 10px">
                                                        혼술 하자..........
                                                    </div>                                    
                                                </div>
                                            </div>
                                            <div class="reply4">
                                                <div class="tkdydwk4">
                                                    <img src="${pageContext.request.contextPath }/img/pro5.jpg" alt="" id="profpt4">
                                                    <div style="margin-top: 10px; margin-left: 15px;">
                                                        <a href="">tkdydwk4</a>  
                                                    </div> 
                                                    <div style="margin: 10px">
                                                        일끝나고 소주가 진리...ㅇㅇ
                                                    </div>                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                           
                                </div>
                                <div class="txtqjxms-container">
                                    <div class="txtarea2">
                                        <div class="whdkdyqjxms">
                                            <img id="kkan" src="${pageContext.request.contextPath }/img/kkbicon.png" alt="">
                                            <img id="bin" src="${pageContext.request.contextPath }/img/binjan.png" alt="">
                                            <script>
                                                var $bin = document.getElementById('bin');
                                                console.log($bin);
                                                
                                                $bin.onclick = function() {
                                                    if($bin.getAttribute('src') == "img/binjan.png")
                                                    $bin.src = "img/fulljan.png";
                                                    else
                                                    $bin.src = "img/binjan.png";
                                                }
                                                
                                                $(function() {
                                                    $("#kkan").on("click", function() {
                                                        alert("깐부 신청 완료");
                                                    });
                                                });
                                                </script>
                                        </div>
                                        <textarea class="txtarea3" placeholder="내용을 입력해 주세요."></textarea>
                                    </div>
                                    <div class="btn">
                                        <button type="button">올리기</button>
                                        <button type="button" data-bs-dismiss="modal">취 소</button>
                                    </div>
        
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>

            <div class="modal fade" id="test"><div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">                                    
                    <div class="modal-body">
                        <div id="modalmain2">
                            <div class="frdlisthead">
                                <p>내 깐부 목록</p>
                                <button data-bs-dismiss="modal">Close</button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                            <div class="frdlist">
                                <img src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프사1">수울메이트</img>
                                <button><span>깐부취소</span></button>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>
    <script>
        var like_amt = new Array(542, 321, 87);

        console.log( $(".frdlist>button"));

        for (let i = 0; i < like_amt.length; i++) {
            $(".like").eq(i).parent().find('p').text("짠 " + like_amt[i] + "회" );         
        }       

        $(".like").on("click", function () {
            var idx = $(".like").index(this);
            console.log(idx);
            if($(".like").eq(idx).attr('src') == "img/binjan.png") {
                $(".like").eq(idx).attr('src', "img/fulljan.png");
                like_amt[idx]++;
            } else {
                $(".like").eq(idx).attr('src', "img/binjan.png");
                like_amt[idx]--;
            }
            $(".like").eq(idx).parent().find('p').text("짠 " + like_amt[idx] + "회" );
        });

        var btnclk = $(".frdlist>button");

        btnclk.on("click", function() {
            console.log( btnclk.index(this));
            var idx = btnclk.index(this);
            
            if($btnclk.eq(idx).css("backgroundColor") == "rgb(0, 153, 255)"){
                btnclk.eq(idx).css("backgroundColor", "rgb(255, 255, 255)");
                $(".frdlist>button>span").eq(idx).text("깐부취소");
            } else {
                btnclk.eq(idx).css("backgroundColor", "rgb(0, 153, 255)");
                $(".frdlist>button>span").eq(idx).text("깐부신청");
            }
        });

        // <!----------------------채팅창 소스---------------------->

        var currentTime = function(){
            var date = new Date();
            var hh = date.getHours();
            var mm = date.getMinutes();
            var apm = hh >12 ? "오후":"오전";
            var ct = apm + " "+hh+":"+mm+"";
            return ct;
        }

        $(function(){
            $(".chatwrap_b").hide();
        })

        $(function(){
            
            $(".chatbox").on("click", function(){
                var idx = $(".chatwrap>button").index(this);
                msginput(idx);
                $(".chatwrap").hide();
                $(".chatwrap_b").eq(idx).show();
            });

        });

        $(".closebox").on("click", function(){
            $(".chatwrap_b").hide();
            $(".chatwrap").show();
        });

        function msginput(idx) {
            console.log("idx111111111111: " + idx);
            $("input[type='text']").eq(idx).keypress(function(e){
                if(e.keyCode == 13 && $(this).val().length){
                    
                    console.log("idx22222222222: " + idx);
                    var _val = $(this).val();
                    var _class = $(this).attr("class");
                    $(this).val('');
                    var _tar = $(".chat_wrap .inner").eq(idx).append('<div class="item '+_class+'"><div class="box"><p class="msg">'+_val+'</p><span class="time">'+currentTime()+'</span></div></div>');

                    var lastItem = $(".chat_wrap .inner").eq(idx).find(".item:last");
                    setTimeout(function(){
                        lastItem.addClass("on");
                    },10);

                    var position = lastItem.position().top + $(".chat_wrap .inner").eq(idx).scrollTop();
                    console.log(position);

                    $(".chat_wrap .inner").eq(idx).stop().animate({scrollTop:position},500);
                }
            });
        }

        $(function() {
            $(".follow").on("click", function() {
                alert("깐부 신청 완료");
            });
        });

        $(function(){
            $(".chatbox").hover(
                function(){
                    $(this).css("backgroundColor", "#cec0a1")
                },
                function(){
                    $(this).css("backgroundColor", "#dfd4bd")
                }
            );
        });

    </script>
</body>
</html>