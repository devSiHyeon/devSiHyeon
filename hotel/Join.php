<?php require_once('./Header.php')?>

<form name= "join" action="JoinP.php" method="POST">
    아이디 : <input type="text" name="id" value=""> <br>
    비밀번호 : <input type="password" name="pw" value=""> <br>
    이 름 : <input type="text" name="name" value=""> <br>
    연락처 : <input type="text" name="tell" value=""> <br>
    주소 : <input type="text" name = "address" value=""> <br>
    <input type="submit" value="회원가입">
</form>
    <a href='./Index.php'>메인화면</a>



<?php require_once('./Footer.php')?>
