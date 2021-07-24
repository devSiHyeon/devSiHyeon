<? include "./Header.php"; ?>

<head>
  <style>
    .img_banner {
        width:90%;
        height:500px;
    }

    .img_a{
        width:200px;
        height:250px;
    }
  </style>
</head>

<body>
<!-- 배너 이미지 -->
<div id="carouselExampleIndicators" class="carousel slide mx-auto img_banner " data-bs-ride="carousel" style="width:100%; hight:auto;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <img src="./color_images/i_color_1.jpg" class="d-block img_banner w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./color_images/i_color_2.jpg" class="d-block img_banner w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./color_images/i_color_3.jpg" class="d-block img_banner w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./color_images/i_color_4.jpg" class="d-block img_banner w-100" alt="...">
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

<?print_r ($SESSION);?>
<!-- 판매 : 다이어리/플래너 -->
<div class="container w-70 mb-5">
    <div class="row" >
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/a_1.png" class="img_a"></a></div>
            <div class="mb-3">하늘 다이어리</div>
            <div class="mb-1">13,000</div>
        </div>
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/a_2.png" class="img_a"></a></div>
            <div class=" mb-3">마카롱 다이어리</div>
            <div class="mb-1">12,000</div>
        </div>
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/a_3.png" class="img_a"></a></div>
            <div class="mb-1">유니콘 다이어리</div>
            <div class="mb-1">11,000</div>
        </div>
    </div>
    <!-- 판매 : 문구용품 -->
    <div class="row" >
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/b_1.png" class="img_a"></a></div>
            <div class="mb-3">4색 볼펜</div>
            <div class="mb-1">3,000</div>
        </div>
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/b_2.png" class="img_a"></a></div>
            <div class=" mb-3">소프트 젤펜 5색상 세트</div>
            <div class="mb-1">14,500</div>
        </div>
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/b_3.png" class="img_a"></a></div>
            <div class="mb-1">테이블 매트 </div>
            <div class="mb-1">14,000</div>
        </div>
    </div>

    <!-- 판매 : 인테리어 -->
    <div class="row" >
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/c_1.png" class="img_a"></a></div>
            <div class="mb-3">캐릭터 유리컵 2ea</div>
            <div class="mb-1">15,000</div>
        </div>
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/c_2.png" class="img_a"></a></div>
            <div class=" mb-3">2단 원목 수납장</div>
            <div class="mb-1">62,000</div>
        </div>
        <div class="col-lg-4 mt-3 mr-3 text-center"> 
            <div class="mt-3 mb-2"><a href="#"><img src="./color_images/c_3.png" class="img_a"></a></div>
            <div class="mb-1">탁상시계</div>
            <div class="mb-1">32,000</div>
        </div>
    </div>
</div>


<? include "./Footer.php"; ?>