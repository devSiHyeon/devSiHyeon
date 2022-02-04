<?php require_once('./Header.php');
    if(strlen($_SESSION['user_id']) > 0){
?>
    <?=$_SESSION['user_id']?>님 환영합니다. <a href="Logout.php" style="margin-left:70px;">로그아웃</a></br></br>
    <a href="h_board.php">문의 게시판</a>
    <a href="h_reservation.php">예약 게시판</a>
<?php echo ($_SESSION['user_id'] == 'admin') ? '<a href="h_member.php" style="color:blue;">회원 목록</a>' : '<a href="h_member_check.php">회원 수정</a>';?>
    
<?php
    } else {
?>

<form name = "login" action ="Login.php" method="POST">
    아이디 : <input type="text" name="user_id"><br>
    비밀번호 : <input type="password" name="user_pw">
    <input type="submit" value="로그인">
    <a href='Join.php'>회원가입</a>
</form>

<?php } require_once('./Footer.php');?>
