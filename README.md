<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
<title>si_hyeon</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet"	href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&family=Roboto&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="images/dev.png" rel="icon" type="image/x-icon">
<style>


.body{
	margin-top:100px;
}

ul{
	list-style-type: none;
}

.top_img {
	width:20px;
}

.navbar{
	border-bottom: #FFE082 5px solid; 
}
</style>
</head>
<body>
<!-- 상단메뉴 -->
<div>
	<nav class="navbar navbar-expand-sm navbar-light  bg-light fixed-top">
	  <div class="container-fluid">
		<a href="home.html">
			<img src="./images/home.png"/ class="mx-auto" style="width:30px; height:30px;">
		</a>
		
		<div class="col-5 text-right">
			<a href="https://github.com/devSiHyeon" target="_blank">
				<img src="./images/git.png"/ style="width:30px; height:30px;">		
			</a>
		</div>
		
			<button class="col-3 navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
	   
		<div class="col-5 collapse navbar-collapse" id="navbarSupportedContent">
					
		  <ul class="navbar-nav ml-auto">
			
			<li class="nav-item active">
				<a class="nav-link" href="#Education">Education </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#skill">Skills</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#Certificationt">Certification</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#Project">Project</a>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
</div>
<br>
<br>
	<div  class="text-center"  style="width:100%; height:200px; background-color:#FFA873;">
		<br>
		<br>
		<br>
		<span class="h1 mr-4" style="color:white;">Blog</span>
		<br>
		<br>
		<div>
			<img src="images/coffee.svg" class="top_img mr-2"> 열정 &nbsp;&nbsp;&nbsp;
			<img src="images/pen-tool.svg" class="top_img mr-2"> 배움&nbsp;&nbsp;&nbsp;
			<img src="images/chevrons-up.svg" class="top_img"> 성장
			
		</div>
	</div>

<div class="container body">
	

	<div class="mt-5">
	<!-- 소개 -->
		<div >
		<h2 class="mt-5 mb-4s font-weight-bold">Park Si Hyeon</h2>
			<ul class="border ">
				<li class="mt-4 mb-4  mr-3"> 안녕하세요. 신입 백엔드 개발자를 준비하고 있는 박시현 입니다.<br>
				평소 관심있던 분야에 도전하기 위해 직업전문학교에서 진행한 6개월 수업 과정을 들었으며 3명의 팀원으로 구성되어진 프로젝트에 참여하여 진행하였습니다.
				</li>
				<li class="mb-4" id="Education">
				s.hyeon.dev@gmail.com <br>
				<a href="https://github.com/devSiHyeon" target="_blank" id="Education">github</a>
				</li>
			</ul>
		</div>
	
	<!-- 교육 -->
	<h2 class="mt-5 font-weight-bold">Education</h2>
			<ul class="mt-3">
				<li class="mt-4">영남기술직업전문학교</li>
				<li class="mt-4 ml-5" id="skill">2020.08.07 ~ 2021.02.04 : JAVA & JSP웹 및 임베디드 프로그래밍 개발자 과정</li>
				
			</ul>
	
	
	<!-- 기술 -->
		<h2 class="mt-5 font-weight-bold" >Skills</h2>	
			<div>
				<ul class="mt-3">
					<li class="mt-4 font-weight-bold">Web skils</li>
					<li class="mt-4 ml-5">
						<span class="badge badge-info">HTML5</span>
						<span class="badge badge-info">CSS3</span>
						<span class="badge badge-info">JS</span>						
						<span class="badge badge-info">JQuery</span>	
					</li>
					<li class="mt-4 font-weight-bold"">Language</li>
					<li class="mt-4 ml-5">
						<span class="badge badge-info">JAVA</span>
						<span class="badge badge-info">JSP</span>
						<span class="badge badge-info">BootStrap</span>						
					</li>
					<li class="mt-4 font-weight-bold"">Data Base</li>
					<li class="mt-4 ml-5">
						<span class="badge badge-info">My SQL</span>											
					</li>
					<li class="mt-4 font-weight-bold">Etc</li>
					<li class="mt-4 ml-5" id="Certificationt">
						<span class="badge badge-info" >GitHub</span>											
					</li>
				</ul>
			</div>
			
	<!-- 자격증 -->
		<h2 class="mt-5 font-weight-bold">Certification</h2>
			<ul class="mt-3">
				<li class="mt-4">컴퓨터활용능력 2급</li>
				<li class="mt-4">운전면허 2종</li>
				<li class="mt-4">한글속기 2급</li>
				<li class="mt-4" id="Project">전산회계 1급</li>
			</ul>		
	</div>
	
	<!-- 프로젝트 -->
	<h2 class="mt-5 font-weight-bold" >Project</h2>	
	<div class="row ml-5" style="width:90%;">
		
	    <div class="col mt-3 mb-5 border" style="max-idth:600px;">
			<ul >				
				<li class="mt-4">기간</li> 
				<li class="ml-4"> : 2020.12.01 ~ 2021.01.15</li>
				<li class="mt-4" >설명 </li> 
				<li class="ml-4"> : 호텔 사이트로서 회원 가입하여 객실을 예약하는 시스템의 홈페이지입니다.</li>
				<li class="mt-4">활용기술</li> 
				<li class="ml-4 mb-3"> : HTML5, CSS3, JS, BootStrap, JSP, JAVA, My SQL</li>
				<li class=" mx-auto text-right">
					<a href="http://embed.swq.co.kr/shinna/" target="_blank">
						<span class="btn btn-outline-success ml-2" style="width:100px;">HomPage</span></a>
					
					<a href="https://github.com/sihyeon01/sihyeon01/tree/main/Shinna"   target="_blank"> 
						<span class="btn btn-outline-dark ml-2"  style="width:100px;">GitHub</span></a>
					
					<a href="project.html"> 
						<span class="btn btn-outline-warning ml-2"  style="width:100px;">Project</span></a>
				</li>
				<li  class=" mx-auto text-right mt-3 mb-3">
					<img src="images/click.png" style="width:80px;" align="right">
				</li>
			</ul>
	    </div>	
		
	</div>
	
	

</div>	

<footer>
	<!-- footer -->
		<div class="footer-above" style="background: #D5D5D5;">
			<div class="container text-center pt-5 pb-5">
				<span style="font-weight:bold; font-size: 0.8rem;">ParkSiHyeon</span><br>
				<span class="ml-3" style="font-size: 0.8rem;"> s.hyeon.dev@gmail.com</span><br>
				
				
			</div>
		</div>	
		
</footer>
<!-- Optional JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script	src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script	src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<script src="JS/custom.js"></script>
</body>
</html>
