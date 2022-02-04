<?php require_once('./Header.php'); 


?>
<b>비밀번호 확인</b><br><br>
<form name="h_check" action="h_check.php" method="POST">
    아이디 : <?=$_SESSION['user_id']?><br>
    비밀번호 : <input type="password" name="pw">
    <input type="submit" value="확인">
</form>

<?php require_once('./Footer.php');?>
