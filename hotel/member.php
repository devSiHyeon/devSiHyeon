<?php require_once('./Header.php'); 

    $user_id    = $_SESSION['user_id'];
    $idx      = $_GET['idx'];

    // 회원정보
    $sql        = 'SELECT user_id, name, tell, address FROM h_detail AS a LEFT JOIN h_member AS b ON a.member_idx = b.idx WHERE a.idx  = \''.$idx.'\'';
    $result     = mysqli_query($DB, $sql);
    $row        = mysqli_fetch_assoc($result);

    if(strlen($user_id) > 0 && $user_id == 'admin'){
        ?>
    <b>회원 수정</b>  <a href="./Index.php" style="margin-left:200px;">메인화면</a>
    <form name="modify" action="h_modifyP.php" method="POST">
        아이디 : <?=$row['user_id']?> <br>
        이름 : <input type='text' name='name' value='<?=$row['name']?>'> <br>
        연락처 : <input type='text' name='tell' value='<?=$row['tell']?>'> <br>
        주소 : <input type='text' name='address' value='<?=$row['address']?>'> <br><br>
        <a href="./Index.php" style="margin-right:120px;">메인화면</a>
        <input type="submit" value="수정">
       
    </form>
        
<?php
    } else {
    $idx        = $_SESSION['idx'];
    $sql        = 'SELECT name, tell, address FROM h_detail WHERE member_idx = \''.$idx.'\'';
    $result     = mysqli_query($DB, $sql);
    $row        = mysqli_fetch_assoc($result);
?>
    <b>정보 수정</b><br> <br> 
    <form name="modify" action="h_modifyP.php" method="POST">
        아이디 : <?=$_SESSION['user_id']?> <br>
        비밀번호 : <input type='password' name='pw' value=''> <br>
        이름 : <?=$row['name']?> <br>
        연락처 : <input type='text' name='tell' value='<?=$row['tell']?>'> <br>
        주소 : <input type='text' name='address' value='<?=$row['address']?>'> <br><br>
        <a href="./Index.php" style="margin-right:120px;">메인화면</a>
        <input type="submit" value="수정">
        <a href="./h_delete.php" style="margin-right:120px;">탈퇴</a>
       
    </form>

<?php } require_once('./Footer.php');?>
