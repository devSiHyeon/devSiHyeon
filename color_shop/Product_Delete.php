<? include "DB.php"; ?>

<? 
    $code = mysqli_real_escape_string($db, $_GET['code']);

    $sql_in_delete = "
                    DELETE
                    FROM Color_in
                    WHERE code = $code
                    ";

    $result_in = mysqli_query($db, $sql_in_delete);

    $sql_list_delete = "
                    DELETE 
                    FROM Color_shop
                    WHERE code = $code
                    ";

    $result_list = mysqli_query($db, $sql_list_delete);

    if($result_in){
        echo"
            <script>
            alert ('삭제되었습니다.');
            location.href='Color_In.php';
            </script>
            ";
    }else{
        echo"
            <script>
            alert('관리자에게 문의하세요');
            history.back();
            </script>
            ";
    }
?>
    