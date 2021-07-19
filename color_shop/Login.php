<? include "./Header.php"; ?>

<?
// 넘어온 값 처리
$user_id = $_GET['user_id'];
?>
<div align="center" class="mt-5">

    <form id="Login_form" name="Login_form" action="./Login_Process.php" method="post">
    
    아이디 : <input type="text" name="user_id" maxlength="20" value="<?=$user_id?>" required></br>
    <div class="mb-3"></div>
    비밀번호 : <input type="password" name="password" maxlength="20" required></br></br>
    
    <input type="submit" value="로그인">
</form>

</div>
<? include "./Footer.php"; ?>
