<?php require_once('./DB.php');

$id         = $_SESSION['user_id'];
$name       = $_POST['name'];
$tell       = $_POST['tell'];
$address    = $_POST['address'];
$idx        = $_SESSION['idx'];

$sql    = 'UPDATE h_detail SET  tell = \''.$tell.'\', address = \''.$address.'\' WHERE member_idx = \''.$idx.'\'';
$result = mysqli_query($DB, $sql);

// 비밀번호 없데이트
$pw         = $_POST['pw'];
if(strlen($pw) > 0) {
    $user_pw    = password_hash($pw, PASSWORD_DEFAULT);
    
    echo $sql    = 'UPDATE h_member SET  user_pw = \''.$user_pw.'\' WHERE idx = \''.$idx.'\'';
    $result = mysqli_query($DB, $sql);
}

if($result){
    echo '<script>location.href=\'Index.php\';</script>';
} else {
    echo '<script>alert(\'수정 오류입니다.\');history.back();</script>';
}

?>
