<? include "./DB.php"; ?>

<?
    // 재고 상품 호출
    $sql = "
            SELECT * 
            FROM c_product
    ";
    $reslut = mysqli_query($db, $sql);
    
    // $item=""

    // 전체 데이터를 담을 변수 지정
    $color_product = array();

    while ($row = mysqli_fetch_array($reslut)) {
    
        $color_product[] = $row;
    }
    // var_dump($color_product);
    echo json_encode($color_product);

?>