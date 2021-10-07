<? include "DB.php"; ?>
<? include "./Header.php"; ?>

<!DOCTYPE html>
<html>
<head lang="ko">
<style>
        table {
            padding-top:50px;
        }
        tr td{
            padding-bottom:20px;
        }
    </style>
</head>
<body>

<div class="container">
<h2 class="text-center mt-5">상품 수정</h2>
    <form action="In_ModifyP.php" method="post">
    <input type="hidden" name="code" value="<?=$_GET['code'];?>">
        <div class="border border-2 mt-5 mx-auto" style="width:80%;">
            <table class="mt-5 mx-auto text-center" style="width:350px;">
            <?
                $code = mysqli_real_escape_string($db, $_GET['code']);
                $sql = "
                        SELECT *
                        FROM Color_in
                        WHERE 
                            code = '$code' 
                        ";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_array ($result);

                ?>
                <tr>
                    <td>상품코드</td>
                    <td><input name="code" value="<?=$row['code']?>"></td>
                </tr>
                <tr>
                    <td class="mt-5">카테고리</td>
                    <td>
                        <select name="category" style="width:185px; height:30px;"  value="<?=$row['category']?>">
                            <option value ="다이어리/플래너">다이어리/플래너</option>
                            <option value ="문구용품">문구용품</option>
                            <option value ="인테리어">인테리어</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>상품명</td>
                    <td><input name="name" value="<?=$row['name']?>"></td>
                </tr>
                <tr>
                    <td>판매가</td>
                    <td><input name="price" value="<?=$row['price']?>"></td>
                </tr>
                <tr>
                    <td>주문수량</td>
                    <td><input name="quantity"  value="<?=$row['quantity']?>"></td>
                </tr>
                <tr>
                    <td>상품설명</td>
                    <td><textarea name="memo"  value="<?=$row['memo']?>"></textarea></td>
                </tr>
            </table>
            <div class="mt-5" style="padding-left:65%">
                <button type="submit" value="상품수정" class="btn btn-outline-danger mb-5">상품수정</button>
            </div>
        </div>
    </form>
</div>
<? include "./Footer.php"; ?>