<? include "DB.php"; ?>

<?
    $code = $_POST['code'];
    $code = $_POST['code'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $memo = $_POST['memo'];

    $sql_in_Modify = "
                    Update Color_in
                    SET
                        code = '$code',
                        category = '$category',
                        name = '$name', 
                        price = '$price', 
                        quantity = '$quantity', 
                        memo = '$memo'
                    WHERE code = '$code'
                    ";
    $result_in_Modify = mysqli_query($db, $sql_in_Modify);

    $sql_list_Modify = "
                        Update Color_shop
                        SET
                            code = '$code',
                            category = '$category',
                            name = '$name', 
                            price = '$price', 
                            memo = '$memo'
                        WHERE code = '$code'
                        ";
    $result_list_Modify = mysqli_query($db, $sql_list_Modify);

    print_r($sql_in_Modify);
    // $print_r($sql_list_Modify);

    if ($result_in_Modify){
        echo"
            <script>
            alert('수정 되었습니다.');
            location.href='Color_In.php';
            </script>
            ";
    }else{
        echo"
            <script>
            alert('관리자에게 문의하세요.');
            history.back();
            </script>
            ";
    }
?>