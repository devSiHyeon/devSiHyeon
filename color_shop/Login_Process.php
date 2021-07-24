<? include './auth.php'; ?>

<? include './DB.php';?>

<? include './Header_2.php';?>

<?php

// 넘어온 값 정리
$user_id = $_POST['user_id'];
$user_id = mysqli_real_escape_string($db, $user_id); // 로그인시 주의!! 주의!!

$password = $_POST['password'];
$password = Encrypt($password); // 암호화
$password = mysqli_real_escape_string($db, $password); // 로그인시 주의!! 주의!!

// 회원정보 호출 (!WHERE 확인)
$sql = "
        SELECT *
        FROM c_member
        WHERE
                user_id = '{$user_id}'
                AND password = '{$password}'
";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

if ($row['id']) { // 로그인 성공

        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['is_admin'] = $row['is_admin'];
        $_SESSION['access_time'] = date("Y-m-d H:i:s");

        msgAndGo("로그인 되었습니다.", "./Index.php");

} else { // 불일치 안내문구

        msgAndGo("로그인 실패", "./Login.php");
};

?>
