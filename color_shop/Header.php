<? include './auth.php'; ?>
<? include './DB.php'; ?>

<!DOCTYPE html>
<html>
<head lang="ko">
    <meta charset="utf-8">
    <title>Color Prop</title>
    <link href="color_Logo.png" rel="icon" type="image/x-icon">
     
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    
    <!-- 부트스트랩 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
  <div class="container-fluid">
    <div class="float-start">      
        <a class="navbar-brand" href="Index.php"> <img src="./color_images/color_Logo.png" style="width:40px;1"></a>
        <a href="List.php">고객의 소리</a>
    </div>
    <div class="float-end">
        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="float-end">

<!-- if 세션에 아이디가 있고 관리자가 아니라면  {
      회원모드
      }else if 관리자라면 {
        관리자모드    
    }세션에 아이디가 없다면 {
        회원가입모드
    } -->
   
    <!-- 로그인 성공 -->
    <? if ( ($_SESSION['user_id']) && ($_SESSION['is_admin'] != 'Y') ) {  ?>    <!-- 만약에 세션에 아이디가 있고 관리자가 아니라면 -->

        <?=$_SESSION['user_name']?>님
        <a href="./Logout.php">로그아웃</a>
        
    <? } else if(($_SESSION['user_id']) && ($_SESSION['is_admin'] == 'Y')) { ?>   <!-- 만약에 관리자라면 -->
        <div class="collapse navbar-collapse float-started" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./Product_Write.php">상품등록</a>
                </li>
                <li class="nav-item">
                    <a id="nav_product_in" class="nav-link" href="./Product_In.php">입고관리</a>
                </li>
                <li class="nav-item">
                    <a id="nav_product" class="nav-link" href="./Product.php">재고관리</a>
                </li>
                <li class="nav-item">
                    <a id="nav_product_out" class="nav-link" href="./Product_Out.php">출고관리</a>
                </li>       
            </ul>            
            <a href="./Logout.php">로그아웃</a>
        </div>  
 
    <? } else {  ?>                       
        
        <a href="./Login.php">Login</a>&nbsp;&nbsp;
        <a href="./Join.php">Join</a>&nbsp;&nbsp;
        <a href="./Admin.php">Admin</a>
       
    <? } ?>

    </div>
  </div>
</nav>

