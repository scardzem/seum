<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/signup_style.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/ress.min.css">
    <link rel="stylesheet" href="${pageContext.request.contextPath }/css/bootstrap.min.css">
    <!--글꼴 link 태그로 불러오기-->
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
    <!--파비콘 설정-->
    <link rel="icon" type="image/png" href="${pageContext.request.contextPath }/img/logo.png">
    <title>SOOULMATE</title>
    <script src="${pageContext.request.contextPath }/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="home">
        <div class="wrapper">
            <div class="left">
                <div class="logo">
                    <button class="logo" type="button">
                        <img src="${pageContext.request.contextPath }/img/logo.png" alt="로고">
                    </button>
                </div>
            </div>
            <div class="center">
                <div class="input-form">
                    <div class="input-form col-lg-12">
                        <div class="profileimg1" style="height: fit-content;">
                            <img style="width: 210px;
                            height: 210px;
                            /* background-color: dimgray; */
                            border-radius: 50%;" src="${pageContext.request.contextPath }/img/profileimg1.png" alt="프로필아이콘">
                        </div>
                        <form class="validation-form" novalidate>
                            <div class="col-md-11 ml-2">
                                
                                <label for="name-id"></label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="userNm"
                                  placeholder="이름 입력"
                                  maxlength="12"
                                  required
                                />
                                <div class="invalid-feedback">이름을 입력해주세요.</div>
                            </div>
                            <div class="col-md-11 ml-2">
                                 
                                 <label for="userId "></label>
                                 <input
                                  type="text"
                                  class="form-control"
                                  id="userId"
                                  name="userId"
                                  placeholder="아이디 입력"
                                  maxlength="12"
                                  required
                                />
                                <div class="invalid-feedback">아이디를 입력해주세요.</div>
                                <div class="box2">
                                    <form action="" role="form"></form>
                                        <button id="btnIdCheck" class="btn btn-dark" type="button"
                                        style="background-color: grey; width: 70px; height: 38px; 
                                        font-size: 1rem; margin-top: 7px;">중복체크</button>
                                </div>
                            </div>
                            <div class="col-md-11 ml-2">
                                
                                <label for="userPw"></label>
                                <input
                                  type="password"
                                  class="form-control"
                                  id="userPw"
                                  name="userPw"
                                  placeholder="비밀번호입력"
                                  maxlength="12"
                                  required
                                />
                                <p id="pwValidation" style="color: red; font-size: 0.8rem">비밀번호는 영문자, 숫자, 특수문자 조합의 9자리 이상으로 설정해주세요.</p>
                            </div>
                            
                            <div class="col-md-11 ml-2">
                                
                                <label for="userPwCheck"></label>
                                <input
                                  type="password"
                                  class="form-control"
                                  id="userPwCheck"
                                  name="userPwCheck" 
                                  placeholder="비밀번호확인"
                                  maxlength="12"
                                  required
                                />
                                <p id="pwCheckResult" style="font-size: 0.8rem"></p>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-11 ml-2">
                                
                                <label for="name-id"></label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="userMail"
                                  name="userMail"
                                  placeholder="you@example.com"
                                  maxlength="12"
                                  required
                                />
                                <div class="invalid-feedback">이메일을 입력해주세요.</div>
                            </div> 
                            <div class="form-box">
                                <div class="col-md-3 ml-2">
                                    <div class="classWithPad0">
                                        
                                        <label for="userTel"></label>
                                            <input
                                            type="text"
                                            class="form-control"
                                            placeholder="010"
                                            maxlength="3"
                                            required
                                            />
                                    </div>     
                                </div>
                                <div class="col-md-4 ml-2">
                                    <div class="classWithPad1">
                                        <label for=""><br></label>
                                            <input
                                            type="text"
                                            class="form-control"
                                            id="userTel"
                                            name="userTel"
                                            placeholder="숫자만 입력하세요."
                                            value=""
                                            maxlength="4"
                                            required
                                            />
                                    </div>        
                                </div>  
                                <div class="col-md-4 ml-2">
                                    <div class="classWithPad2"> 
                                        <label for=""><br></label>
                                            <input
                                            type="text"
                                            class="form-control"
                                            id=""
                                            placeholder="0000"
                                            value=""
                                            maxlength="4"
                                            required
                                            />
                                    </div>        
                                </div> 
                                <div class="col-md-5 ml-2">
                                    <div class="classWithPad3"> 
                                        <select class="form-control">
                                            <option>주류취향</option>
                                            <option value="1">양주</option>
                                            <option value="2">소주</option>
                                            <option value="3">맥주</option>
                                            <option value="4">와인</option>
                                        </select>
                                    </div>    
                                </div> 
                            </div>
                            <div class="box1">
                                <form action="" role="form"></form>
                                     <button type="submit" onclick="location.href='login.html'" "btn btn-dark" style="background-color: grey; width: 80px; height: 50px; font-size: 1.5rem; margin-top: 7px;">가입</button>
                             </div>
                        </form>
                     </div>
                </div>
            </div>
            <div class="right">
                
            </div> 
        </div>
    </div>
	<script>
		$(function() {
			//id 중복체크가 됐는지 확인하는 변수
			let checkId = false;
			let pwValidation = false;
			let pwCheck = false;
			
			$("#pwValidation").hide();
			$("#pwCheckResult").hide();
			
			//아이디 중복 체크
			$("#btnIdCheck").on("click", function() {
				if($("#userId").val() == null || $("#userId").val() == '') {
					alert("아이디를 입력하세요.");
					return;
				}
				
				$.ajax({
					url: '/user/idCheck.do',
					type: 'post',
					data: $("#joinForm").serialize(),
					success: function(obj) {
						console.log(obj);
						
						const data = JSON.parse(obj);
						
						console.log(data);
						console.log(data.resultIdCheck);
						
						if(data.resultIdCheck < 1) {
							if(confirm("사용가능한 아이디입니다. " + $("#userId").val() + "를(을) 사용하시겠습니까?")) {
								checkId = true;
								$("#btnIdCheck").attr("disabled", true);
							}
						} else {
							checkId = false;
							alert("이미 존재하는 아이디입니다.");
							$("#userId").focus();
							return;
						}
					},
					error: function(e) {
						console.log(e);
					}
				});
			});
			
			$("#userId").on("change", function() {
				checkId = false;
				$("#btnIdCheck").attr("disabled", false);
			});
			
			//비밀번호 유효성 검사
			function validatePassword(character) {
				return /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{9,}$/.test(character);
			}
			
			$("#userPw").on("change", function() {
				if(!validatePassword($("#userPw").val())) {
					pwValidation = false;
					$("#pwValidation").show();
					$("#userPw").focus();
				} else {
					pwValidation = true;
					$("#pwValidation").hide();
				}
				
				if($("#userPw").val() == $("#userPwCheck").val()) {
					pwCheck = true;
					$("#pwCheckResult").css("color", "green");
					$("#pwCheckResult").text("비밀번호가 일치합니다.");
				} else {
					pwCheck = false;
					$("#pwCheckResult").css("color", "red");
					$("#pwCheckResult").text("비밀번호가 일치하지 않습니다.");
				}
			});
			
			//비밀번호 확인
			$("#userPwCheck").on("change", function() {
				$("#pwCheckResult").show();
				
				if($("#userPw").val() == $("#userPwCheck").val()) {
					pwCheck = true;
					$("#pwCheckResult").css("color", "green");
					$("#pwCheckResult").text("비밀번호가 일치합니다.");
				} else {
					pwCheck = false;
					$("#pwCheckResult").css("color", "red");
					$("#pwCheckResult").text("비밀번호가 일치하지 않습니다.");
				}
			});
			
			//회원가입할(회원가입 폼 서브밋될) 때 마지막 유효성 검사
			$("#joinForm").on("submit", function(e) {
				if(!checkId) {
					alert("아이디 중복체크를 진행해주세요.");
					$("#userId").focus();
					e.preventDefault();
					return;
				}
				
				if(!pwValidation) {
					alert("비밀번호는 영문자, 숫자, 특수문자 조합의 9자리 이상으로 설정해주세요.");
					$("#userPw").focus();
					e.preventDefault();
					return;
				}
				
				if(!pwCheck) {
					alert("비밀번호가 일치하지 않습니다.");
					$("#userPwCheck").focus();
					e.preventDefault();
					return;
				}
			});
		});
	</script>
</body>
</html>