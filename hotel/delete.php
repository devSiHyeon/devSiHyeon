<?php require_once ('./DB.php');

$idx     = $_GET['idx'];
$S_idx   = $_SESSION['idx'];

if($_SESSION['user_id'] == 'admin'){
    // 회원 정보 삭제
    $sql        = 'DELETE FROM h_detail WHERE member_idx = \''.$idx.'\'';
    $result     = mysqli_query($DB, $sql);

    // 회원 아이디 삭제 
    $sql_d      = 'DELETE FROM h_member WHERE idx = \''.$idx.'\'';
    $result_d   = mysqli_query($DB, $sql_d);

    if($result_d) echo '<script>alert(\'삭제되었습니다.\');location.href=\'h_member.php\';</script>';
} else if (strlen($_SESSION['user_id']) > 0){
    // 회원 정보 삭제
    $sql        = 'DELETE FROM h_detail WHERE member_idx = \''.$S_idx.'\'';
    $result     = mysqli_query($DB, $sql);

    // 회원 아이디 삭제 
    $sql_d      = 'DELETE FROM h_member WHERE idx = \''.$S_idx.'\'';
    $result_d   = mysqli_query($DB, $sql_d);

    if($result_d) {
        $_SESSION['user_id'] = '';
        $_SESSION['idx'] = '';
        echo '<script>alert(\'탈퇴되었습니다.\');location.href=\'Index.php\';</script>';
    }
} else {
    echo '<script>alert(\'권한이 없습니다.\');history.back();</script>';

}

?>
