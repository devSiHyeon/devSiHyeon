<? include "DB.php"; ?>

<?
    // 넘어온 값 정리
    $product_code = $_POST['product_code'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $sale_price = $_POST['sale_price'];
    $memo = $_POST['memo'];
 
    // 상품 등록
    $sql_product = "
                INSERT INTO c_product
                SET
                    product_code = '{$product_code}',
                    product_name = '{$product_name}',
                    memo = '$memo',

                    created_at = NOW()
                ";
    $result_product = mysqli_query($db, $sql_product);

    // 상품 입고 등록
    $sql_in = "
                INSERT INTO c_product_in
                SET
                    product_code_idx = '{$product_code}',
                    price = '{$price}',
                    in_quantity = '{$quantity}',

                    created_at = NOW()
                ";
    // echo $sql_in;
    $result_in = mysqli_query($db, $sql_in);

    // 상품 출고 등록
    $sql_out = "
                INSERT INTO c_product_out
                SET
                    product_code_idx = '{$product_code}',
                    sale_price = '{$sale_price}',

                    created_at = NOW()
                ";
    // echo $sql_out;
    $result_out = mysqli_query($db, $sql_out);

    if($result_product && $result_in && $result_out) {
        msgAndGo("상품등록 되었습니다.", "./Product_In.php");
    } else {
        msgAndBack("오류가 발생하였습니다. 다시 확인해주세요");
    }
?>