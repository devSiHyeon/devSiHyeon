<?php
require_once ('./Header.php');
session_start();
$_SESSION['user_id'] = '';
$_SESSION['idx'] = '';
echo '<script>alert(\'로그아웃 되었습니다.\');location.href=\'./Index.php\';</script>';
?>
