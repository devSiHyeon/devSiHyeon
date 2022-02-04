<?php
require_once ('./DB.php');
$user_id    = $_POST['user_id'];
$pw         = $_POST['user_pw'];

$sql        = 'SELECT idx, user_id, user_pw FROM h_member WHERE user_id = \''.$user_id.'\'';
$result     = mysqli_query($DB, $sql);
$row        = mysqli_fetch_assoc($result);

if(password_verify($pw, $row['user_pw'])){
    $_SESSION['user_id']    = $row['user_id'];
    $_SESSION['idx']        = $row['idx'];
    echo '<script>location.href=\'./Index.php\';</script>';
} else {
    echo '<script>alert(\'로그인 오류입니다.\');history.back();</script>';
}


?>
