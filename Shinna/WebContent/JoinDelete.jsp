<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import = "vo.MemberBean" %>
<%@ page import = "dao.MemberDAO" %>
<% 
	String id = null, grade=" ", pw =null;
// 	String pw = (String)session.getAttribute("pw");
	if(session.getAttribute("pw") != null) pw = (String)session.getAttribute("pw");
	if(session.getAttribute("id") != null) id = (String)session.getAttribute("id");
	if(session.getAttribute("grade") != null) id = (String)session.getAttribute("grade");   //보류
%>
  
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
<title>SHINNA</title>
<link href = "images/logo1.png" rel = "icon" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/index.css" />
<style>
body{
	min-width:600px;
}
.delete {
	position: relative;
	width:600px;
	margin-top:250px;
	margin-bottom :350px;
}



</style>
</head>
<body oncontextmenu="return false" ondragstart="return false">
<!-- nav -->
	<div class="container pb-5 mb-5 clearfix">
		<nav class="navbar navbar-expand-sm navbar-light bg-white fixed-top">
			<a href="index.do"><img class="hei pl-4 ml-4" src="images/logo1.png" /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse ani" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="menu"><a href="#">신나호텔</a>
						<ul class="sub">
							<li><a href="introduce.do">호텔소개</a></li>
							<li><a href="hotelmap.do">호텔안내</a></li>
						</ul>
					</li>
					<li class="menu"><a href="#">호텔객실</a>
						<ul class="sub pb-2">
							<li><a href="standard.do">스탠다드</a></li>
							<li><a href="suite.do">스위트</a></li>
							<li><a href="grand.do">그랜드</a></li>
							<li><a href="event.do">이벤트</a></li>
							<li><a href="promotion.do">프로모션</a></li>
						</ul>
					</li>
					<li class="menu"><a href="#">고객문의</a>
						<ul class="sub">
							<li><a href="reviewList.do">게시판</a></li>
						</ul>
					</li>
					<li class="menu"><a href="#">부대시설</a>
						<ul class="sub">
							<li><a href="fa_lo.do">라운지</a></li>
							<li><a href="fa_re.do">레스토랑</a></li>
							<li><a href="fa_fi.do">휘트니스</a></li>
							<li><a href="fa_sa.do">샤워장</a></li>
							<li><a href="fa_sw.do">수영장</a></li>
						</ul>
					</li>
				</ul>
			</div>
				
			<div class="collapse navbar-collapse anis" id="navbarSupportedContent">
				<div class="navbar-nav drs">
					<div class="dropdown mb-4 dr">
						<button class="btn btn-white dropdown-toggle" type="button"
							id="dropdownMenuButton" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">신나호텔</button>
						<div class="dropdown-menu drr" aria-labelledby="dropdownMenuButton" style="min-width: 100%;">
							<a class="dropdown-item pt-2 pb-3" href="introduce.do">호텔소개</a>
							<a class="dropdown-item pt-3 pb-2" href="hotelmap.do">호텔안내</a>
						</div>
					</div>
					<div class="dropdown mb-4 dr">
						<button class="btn btn-white dropdown-toggle" type="button"
							id="dropdownMenuButton" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">호텔객실</button>
						<div class="dropdown-menu drr" aria-labelledby="dropdownMenuButton" style="min-width: 100%;">
							<a class="dropdown-item pt-2 pb-3" href="standard.do">스탠다드</a>
							<a class="dropdown-item pt-3 pb-3" href="suite.do">스위트</a>
							<a class="dropdown-item pt-3 pb-3" href="grand.do">그랜드</a>
							<a class="dropdown-item pt-3 pb-3" href="event.do">이벤트</a>
							<a class="dropdown-item pt-3 pb-2" href="promotion.do">프로모션</a>
						</div>
					</div>
					<div class="dropdown mb-4 dr">
						<button class="btn btn-white dropdown-toggle" type="button"
							id="dropdownMenuButton" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">고객문의</button>
						<div class="dropdown-menu drr" aria-labelledby="dropdownMenuButton" style="min-width: 100%;">
							<a class="dropdown-item pt-2 pb-2" href="reviewList.do">게시판</a>
						</div>
					</div>
					<div class="dropdown mb-2 dr">
						<button class="btn btn-white dropdown-toggle" type="button"
							id="dropdownMenuButton" data-toggle="dropdown" 
							aria-haspopup="true" aria-expanded="false">부대시설</button>
						<div class="dropdown-menu drr" aria-labelledby="dropdownMenuButton" style="min-width: 100%;">
							<a class="dropdown-item pt-2 pb-3" href="fa_lo.do">라운지</a>
							<a class="dropdown-item pt-3 pb-3" href="fa_re.do">레스토랑</a>
							<a class="dropdown-item pt-3 pb-3" href="fa_fi.do">휘트니스</a>
							<a class="dropdown-item pt-3 pb-3" href="fa_sa.do">샤워장</a>
							<a class="dropdown-item pt-3 pb-2" href="fa_sw.do">수영장</a>
						</div>
					</div>
				</div>
			</div>
			<!-- 로그인 탭 -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto rig">
				<% 
					if(id == null ) {
				%>
					<li class="nav-item" style="width:100%;">
						<a href="Login.do" class="text-left" style="margin-left: 40px; margin-right: 5px; width:100%; min-width: 100%; margin-top: 13px;">로그인</a>
					</li>
					<li class="nav-item" style="width:100%;">
						<a href="Join.do" class="text-left" style="margin-left: 33px; margin-right: 25px; width:100%; min-width: 100%; margin-top: 13px;">회원가입</a>
					</li>
				<% 
					} else {
				%>
					<li class="nav-item " style="width:100%; ">
						<div class="dropdown lang">
	    					<button class="text-left btn btn-white dropdown-toggle" type="button"
									id="dropdownMenuButton" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false" style="width:100%; "><img src="images/dia.png" style="width:27px; height:27px;"><%= grade %> <%= id %>님 </button>
	    					<div class="dropdown-menu langs" aria-labelledby="dropdownMenuButton" style="width: 100%; min-width: 100%;">
	   	 						<a class="dropdown-item" href="Logout.do">로그아웃</a>
	   	 						<a class="dropdown-item" href="check.do">예약확인</a>
	    						<a class="dropdown-item" href="JoinDelete.do">회원탈퇴</a>
	    					</div>
		    			</div>
	    			</li>
		    	<% 
		    		}
				%>
					<li class="nav-item" style="width: 100%;">
						<div class="dropdown lang mt-2 ml-1">
							<button class="text-left btn btn-white dropdown-toggle" type="button"
								id="dropdownMenuButton" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false" style="width: 100%;"><img src="images/ji.png" class="mr-1" style="width:20px; height:20px;">&nbsp;한국어</button>
							<div class="dropdown-menu langs" aria-labelledby="dropdownMenuButton" style="width: 100%; min-width: 100%;">
								<a class="dropdown-item" href="#">English</a>
								<a class="dropdown-item" href="#">日本語</a> 
								<a class="dropdown-item" href="#">简体中文</a> 
							</div>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	
	
<!-- Join delete -->
<div>
	<div class="delete mx-auto">
		<span class="text-center" style="font-size:3em;">회원탈퇴</span><br>
				<div class="card  card-form my-4">
					<div class="card-body" style="background-color:#F1E3C4">
						<form name="JoinDelete" action="JoinDeletePro.do" method="post">
							<div class="input-group mt-4 mb-4">
							  <div class="input-group-prepend ">
							    <span class="input-group-text font-weight-bold" id="basic-addon1" style="width:140px; height:42px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;아이디</span>
							  </div>
							  <input type="text" class="form-control font-weight-bold"  value=<%= id %> style="height:42px;" aria-label="Username" aria-describedby="basic-addon1">
							</div>		
							
							
							<div class="input-group mt-4 mb-4">
							  <div class="input-group-prepend">
							    <span class="input-group-text text-center font-weight-bold" id="basic-addon1" style="width:140px; height:42px;">&nbsp;&nbsp;&nbsp;&nbsp;비밀번호</span>
							  </div>
							  <input type="password" name="pw" id="pw" class="form-control form-control-lg" style="height:42px;"/>
							</div>		
									
												
							<div class="text-center mb-4" id="joinbutton"> 
								<button type="button" class="btn btn-outline-success font-weight-bold mr-2" style="width: 30%;" onClick="location.href='index.do'">취소하기</button>
								<button type="submit" class="btn btn-outline-success font-weight-bold" style="width: 30%;" onclick="return confirm('탈퇴 시 예약이 자동취소 됩니다. \n계속 삭제를 진행하시겠습니까?')">회원탈퇴</button>
							</div>
						</form>
					</div>
				</div>
			</div>
</div>


<!-- footer -->
	<footer class="footer">
		<div class="footer-above" style="background: #F1E3C4;">
			<div class="container pt-4">
				<div class="row">
<!-- 					<div class="col-4 mb-5 text-center"> -->
<!-- 						<img class="hei pl-2 ml-2" src="images/logo1.png" /> -->
<!-- 					</div> -->
					<div class="col-6 mt-4 mb-3 text-center">
						<h3 style="font-family: Lucida Handwriting; font-size: 1.8rem; color: #D45751;">SHINNA</h3>
						<br>
						<h6 style="font-family: Lucida Handwriting; font-size: 1rem; color: #BB5954;">호텔 &amp; 리조트&nbsp;┃&nbsp;백화점&nbsp;┃&nbsp;투어&nbsp; </h6>
					</div>
					
					<div class="col-6 mb-5 text-center">
						<br>
						<a href="https://play.google.com/store/apps/details?id=net.shilla.shlapp&hl=ko&gl=US" target="_blank"><img src="images/shin.png" style="width: 70px;" /></a> &nbsp;&nbsp;
						<a href="https://ko-kr.facebook.com/theshillahotels" target="_blank"><img src="images/face.png" style="width: 70px;" /></a> &nbsp;&nbsp;
						<a href="https://www.instagram.com/accounts/login/?next=/theshillajeju/%3Fhl%3Dko" target="_blank"><img src="images/ins.png" style="width: 70px;" /></a>&nbsp;&nbsp;&nbsp;
						<a href="https://www.youtube.com/channel/UC--hsMkZ_kAUx-1A5YMaXTQ" target="_blank"><img src="images/you.png" style="width: 70px;" /></a>&nbsp;&nbsp;&nbsp;
						<a href="https://twitter.com/theshillain" target="_blank"><img src="images/twi.png" style="width: 70px;" /></a>&nbsp;&nbsp;&nbsp;
						<a href="https://theshilla.tistory.com" target="_blank"><img src="images/blog.png" 	style="width: 70px;" /></a>
					</div>
				</div>
			</div>
		</div>	
		
		
		<div class="footer-below pt-4 pb-5 mx-auto" style="width: 100%; line-height: 18px;">
			<div class="container">
				<div class="foot" style="font-weight:bold; color: #C4AE9C; font-size: 0.8rem;">
					<a href="hotelmap.do">오시는길</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="#">개인정보처리방침</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="#">이용약관</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="#">이메일주소무단수집거부</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="#">사이트맵</a> &nbsp;&nbsp; | &nbsp;&nbsp; <a href="#">채용안내</a>
				</div>
				<hr/>
				<div style="font-weight:bold; color: #B3B3B3; font-size: 0.75rem;">(주) 신나 호텔 | 제주특별자치도 서귀포시 중문관광로 72번길 75 (우) 63535 Tel. 064-123-4567 Fax. 064-987-6543</div>
				<div style="font-weight:bold; color: #B3B3B3; font-size: 0.75rem;">사업자등록번호 203-81-43363 통신판매번호 제 2009-제주-147호 대표이사 박시현</div>
				<div style="font-weight:bold; color: #B3B3B3; font-size: 0.75rem;">Copyright &copy; 2020 Shinna Hotel. All rights reserved</div>
			</div>
		</div>
	</footer>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script	src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
