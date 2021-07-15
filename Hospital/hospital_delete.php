<? include "hospital_DB.php"; ?> 

<?
    $hospital = mysqli_real_escape_string($db, $_GET['idx']);

    $sql = "
            DELETE FROM hospital
            WHERE idx = '$hospital'
            limit 1
        ";
    
    $result = mysqli_query($db, $sql);

    if($result){
        echo "
                <script>
                alert('삭제 되었습니다');
                location.href='hospital_list.php';
                </script>
            ";
        
    }else{
        echo "
                <script>
                alert('삭제하는 과정에서 문제가 생겼습니다.');
                location.href='hospital_list.php';
                </script>
            ";
    }
   
?>