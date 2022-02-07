<?php require_once('./DB.php');

$id         = $_SESSION['user_id'];
$tell       = $_POST['tell'];
$address    = $_POST['address'];

if(strlen($id) > 0 && $id == 'admin'){ 
    $idx        = $_POST['member_idx'];
    $name       = $_POST['name'];
    $sql    = 'UPDATE h_detail SET  name = \''.$name.'\', tell = \''.$tell.'\', address = \''.$address.'\' WHERE member_idx = \''.$idx.'\'';
    $result = mysqli_query($DB, $sql);
} else {
    $idx        = $_SESSION['idx'];
    $sql    = 'UPDATE h_detail SET  tell = \''.$tell.'\', address = \''.$address.'\' WHERE member_idx = \''.$idx.'\'';
    $result = mysqli_query($DB, $sql);
}


// 회원 비밀번호 없데이트
if(strlen($id) > 0 && $id != 'admin'){
    $pw         = $_POST['pw'];
    if(strlen($pw) > 0) {
        $user_pw    = password_hash($pw, PASSWORD_DEFAULT);
        
        $sql    = 'UPDATE h_member SET  user_pw = \''.$user_pw.'\' WHERE idx = \''.$idx.'\'';
        $result = mysqli_query($DB, $sql);
    }
}

if($result){
    echo '<script>location.href=\'h_member.php\';</script>';
    if(strlen($id) > 0 && $id != 'admin')  echo '<script>location.href=\'h_modify.php\';</script>';
} else {
    echo '<script>alert(\'수정 오류입니다.\');history.back();</script>';
}

?>
