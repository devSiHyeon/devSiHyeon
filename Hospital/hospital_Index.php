<? include "hospital_Header.php"; ?> 
<? include "hospital_DB.php"; ?> 

<head>
    <style>
    /* 상단 */
        /* .box1{
            width:150px;
            height:40px;
            background-color:#D3D3D3;
        }
        .box2{
            width:200px;
            background-color:#D3D3D3;
        } */

        .border{
            width:350px;
            margin:auto,0;
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
        <h5 class="mb-3"><span class="material-icons">library_add_check</span> 진료시간</h5>
        <div class="mb-5 text-center text-center" >
            <div class=" mb-3 border border-1 border-secondary rounded-pill">
                <span class="fs-6">평&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</span>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;오전 09:00 ~ 오후 18:00</span></br>
            </div>
            <div class="mb-3 border border-1 border-secondary rounded-pill">
                <span class="fs-6">토&nbsp;요&nbsp;일</span>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;오전 09:00 ~ 오후 13:00</span>
            </div>    
            <div class="mb-3 border border-1 border-secondary rounded-pill">
                <span class="fs-6">점심시간</span>
                <span>&nbsp;&nbsp;&nbsp;오후 13:30 ~ 오후 14:30</span>
            </div>
            <div class="mb-3 border border-1 border-secondary rounded-pill">
                <span class="fs-6">일요일 · 공휴일 휴진</span>
            </div>        
        </div>

        <!-- 오시는길 -->
        <h5 class="mb-3"><span class="material-icons">library_add_check</span> 오시는 길</h5>
        <div style="width:60%; padding-left:80px;">
            <div>
                <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1617352618388" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1617352618388",
                        "key" : "256gw",
                        "mapWidth" : "50%",
                        "mapHeight" : "360"
                    }).render();
                </script>
            </div>
        </div>
    </div>
</div>

<? include "hospital_Footer.php"; ?> 

