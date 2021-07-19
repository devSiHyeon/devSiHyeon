<? include "DB.php"; ?>

<?
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
 
    // 암호화
    $password = Encrypt($password);

    $sql_member = "
                INSERT INTO c_member
                SET
                    user_id = '$user_id',
                    user_name = '$user_name',
                    password = '$password',

                    created_at = NOW()
                ";
mysqli_query($db, $sql_member);

// 메시지
msgAndGo("회원가입 완료되었습니다.", "./Index.php?id={$id}");
?>