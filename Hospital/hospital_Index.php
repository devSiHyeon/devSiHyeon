<? include "hospital_Header.php"; ?> 
<? include "hospital_DB.php"; ?> 

<head>
    <style>
        .border{
            min-width:350px;
            margin-left:20px;
        }
    </style>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide mx-auto img_banner mx-auto mt-5 max" data-bs-ride="carousel" style="width:70%">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active text-center">
      <img src="index2.jpg" class="d-block img_banner w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="index1.jpg" class="d-block img_banner w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="index3.jpg" class="d-block img_banner w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  

<!-- 진료시간 -->
<div class="mt-5 mb-5">
    <div class="mx-auto" style="width:70%;">
        <div class="row">
            <div class="col-lg-6">
                <h5 class="mb-3"><span class="material-icons">library_add_check</span> 진료시간</h5>
                <div class="mb-5 text-center w-70 mx-auto" >
                    <div class=" mb-3 border border-1 rounded-3">
                        <spa>평&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</spa>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;오전 09:00 ~ 오후 18:00</span></br>
                    </div>
                    <div class="mb-3 border border-1 rounded-3">
                        <spa>토&nbsp;요&nbsp;일</spa>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;오전 09:00 ~ 오후 13:00</span>
                    </div>    
                    <div class="mb-3 border border-1 rounded-3">
                        <spa>점심시간</spa>
                        <span>&nbsp;&nbsp;&nbsp;오후 13:30 ~ 오후 14:30</span>
                    </div>
                    <div class="mb-3 border border-1 rounded-3">
                        <spa>일요일 · 공휴일 휴진</spa>
                    </div>        
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="mb-3"><span class="material-icons">library_add_check</span> 공지사항</h5>
                <div class="mb-5 w-70 mx-auto">
                    <div class=" mb-3 border border-1 rounded-3" style="height:152px; padding-left:10px; padding-top:10px;">
                        <spa>2021-07-16&nbsp;&nbsp;21년 07 휴무 안내입니다.</spa><br>
                        <span>2021-04-20&nbsp;&nbsp;21년 05월 01일 오픈했습니다.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 오시는길 -->
        <h5 class="mb-3"><span class="material-icons">library_add_check</span> 오시는 길</h5>
        <div class="w-100">
            <div class="mx-auto w-50">
                <!-- * 카카오맵 - 지도퍼가기 -->
                    <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1626397843538" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                    <!--
                        2. 설치 스크립트
                        * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                    -->
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                    <!-- 3. 실행 스크립트 -->
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1626397843538",
                            "key" : "26n8x",
                            "mapWidth" : "400",
                            "mapHeight" : "360"
                        }).render();
                    </script>
            </div>
        </div>
    </div>
</div>

<? include "hospital_Footer.php"; ?> 

