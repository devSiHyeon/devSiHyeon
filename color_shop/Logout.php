<? include './Header.php'; ?>

<?
// 넘어온 값 처리
session_destroy();

msgAndGo("로그아웃 성공", "./Login.php");
?>
<div align="center" class="mt-5">
    <form id="login_form" name="login_form" action="./2_login_process.php" method="post">
    
    
    아이디 : <input type="text" name="user_id" maxlength="20" value="<?=$user_id?>" required></br></br>
    비밀번호 : <input type="password" name="password" maxlength="20" required></br></br>
    
    <input type="submit" value="로그인">
    </form>
</div>

<? include "./Footer.php"; ?>
