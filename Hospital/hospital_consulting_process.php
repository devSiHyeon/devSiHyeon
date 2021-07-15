<? include "hospital_DB.php"; ?> 

<?
        $name_2 = $_POST['name_2'];
        $tel_2 = $_POST['tel_2'];
        $inquire_2 = $_POST['inquire_2'];
        $title_2 = $_POST['title_2'];
        $memo_2 = $_POST['memo_2'];

        $sql = "
                INSERT INTO
                hospital_2 (name_2, tel_2, inquire_2, title_2, memo_2, date)
                VALUES ('$name_2', '$tel_2', '$inquire_2', '$title_2', '$memo_2', NOW())
                ";
        print_r($sql);
        print_r($db);       
        $result = mysqli_query($db, $sql);
        
        if($result){
            echo"
                <script>
                alert('등록되었습니다.');
                location.href='hospitalIndex.php';
                </script>
                ";
        } else {
                echo "
                <script>
                alert('오류가 생겼습니다. 관리자에게 문의하여 주세요.');
                history.back();
                </script>
                ";
        }
?>