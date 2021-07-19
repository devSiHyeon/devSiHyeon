<? include "./Header.php"; ?>

<head>
    <style>
        table{
            table-layout:fixed;
        }
        tr td{
            white-space:nowrap;   /*  줄바꿈을 강제로 하지 않도록  */
            overflow:hidden;
            text-overflow:ellipsis; 
        }
    </style>
</head>
<body>
<div class="container" >
    <h2 class="text-center mt-5">입고관리</h2>
    <table class="table mt-5 text-center">
        <tr style="background:#fbeac5;">
            <td>NO</td>
            <td>상품코드</td>
            <!-- <td>상품명</td> -->
            <td>입고가</td>
            <td>수량</td>
            <td>수정</td>
            <td>삭제</td>
        </tr>
        <?
            $NO_in = 1;
            $sql_in = "
                        SELECT *
                        FROM c_product_in
                        ORDER BY product_code_idx ASC
                     ";
            $result_in = mysqli_query ($db, $sql_in);
            while($row_in = mysqli_fetch_array($result_in)){

        ?>
        <tr>
            <td><?=$No_in++?></td>       
            <td><?=$row_in['product_code_idx']?></td>          
            <!-- <td><?=$row_in['name']?></td>        -->
            <td><?=number_format($row_in['price'])?></td>       
            <td><?=$row_in['in_quantity']?></td>     
            <td><a href="In_Modify.php?code=<?=$row_in['product_code_idx']?>">수정</a></td>       
            <td><a href="Delete.php?code=<?=$row_in['product_code_idx']?>">삭제</td>       
        </tr>
        <?    }    ?>
    </table>
</div>

<? include "./Footer.php"; ?>