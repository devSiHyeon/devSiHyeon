<?php require_once ('./DB.php');

$user_id    = $_POST['id'];
$pw         = $_POST['pw'];
$name       = $_POST['name'];
$tell       = $_POST['tell'];
$address    = $_POST['address'];
$user_pw    = password_hash($pw, PASSWORD_DEFAULT);

// 회원가입
$sql    = 'INSERT INTO h_member (user_id, user_pw, created_time) VALUES (\''.$user_id.'\',\''.$user_pw.'\',NOW())'; 
$result = mysqli_query($DB, $sql) ;
$last   = mysqli_insert_id($DB);

// 회원정보
$sql    = 'INSERT INTO h_detail (member_idx, name, tell, address, created_time) VALUES (\''.$last.'\',\''.$name.'\',\''.$tell.'\',\''.$address.'\',NOW())';
$result = mysqli_query($DB, $sql);

if($result) {
    echo '<script>alert(\'회원가입 완료하였습니다.\');location.href=\'./Index.php\';</script>';
} else {
    echo '<script>alert(\'시스템 오류입니다.\');history.back();</script>';
}
?>
