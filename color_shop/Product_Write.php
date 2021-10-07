<? include "./Header.php"; ?>

<head lang="ko">
    <style>
        table {
            padding-top:50px;
        }
        tr td{
            padding-bottom:20px;
        }
        input{
            width:200px;
        }
        textarea{
            width:200px;
        }
    </style>

</head>

<body>
<div class="container">
    <form action="Product_Write_Process.php" method="POST">
        <div class="border border-2 mt-5 mx-auto" style="width:80%;">
            <table class="mt-5 mx-auto text-center" style="width:350px;">
                <tr>
                    <td>상품코드</td>
                    <td> <input name="product_code" maxlength="13" required> </td>
                </tr>
                <tr>
                    <td>상품명</td>
                    <td><input name="product_name" maxlength="30" required></td>
                </tr>
                <tr>
                    <td>입고수량</td>
                    <td><input name="quantity" maxlength="10" required></td>
                </tr>
                <tr>
                    <td>입고가격</td>
                    <td><input name="price" maxlength="10" required></td>
                </tr>
                <tr>
                    <td>판매가격</td>
                    <td><input name="sale_price" maxlength="10" required></td>
                </tr>
                <tr>
                    <td>상품설명</td>
                    <td>
                        <!-- <textarea id="popContent" name="popContent" cols="108" rows="15"></textarea> -->
                        <textarea name="memo" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td>첨부파일</td>
                    <td>
                        업데이트 예정
                    </td>
                </tr>
            </table>

            <div class="mt-5" style="padding-left:65%">
                <button type="submit" value="상품등록" class="btn btn-outline-danger mb-5">상품등록</button>
            </div>
        </div>
    </form>
    
</div>
<!-- 상품코드 중복검사 -->
<!-- <script>
    function check_code(){
                    document.getElementById("check").value=0;    //getElementById : 주어진 문자열과 일치하는 id속성을 가진 요소 찾고 이를 나타내는 Element 객체를 반환
                    var id=document.getElementById("code").value;
                    
                    if(id==""){
                    alert("필수입력입니다.");
                    exit;
                    }else{
                        ifrm1.location.href="Color_Write_C.php"+code; 
                    }
                    
                    
                    }
</script> -->
<? include "./Footer.php"; ?>