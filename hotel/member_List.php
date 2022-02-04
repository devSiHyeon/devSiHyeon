<?php require_once('./Header.php'); 

    $user_id    = $_SESSION['user_id'];
    $idx        = $_SESSION['idx'];

    $sql        = 'SELECT a.idx, user_id, name, tell, address FROM h_detail AS a LEFT JOIN h_member AS b ON a.member_idx = b.idx';
    $result     = mysqli_query($DB, $sql);
    
    if(strlen($user_id) > 0 && $user_id == 'admin'){
        ?>
    <b>회원 목록</b>  <a href="./Index.php" style="margin-left:200px;">메인화면</a>
    <table border='1'>            
        <thead>
            <th>아이디</th>
            <th>이름</th>
            <th>연락처</th>
            <th>주소</th>
            <th>수정</th>
            <th>탈퇴</th>
        </thead>
        <?php while($row = mysqli_fetch_assoc($result)) {  ?>                
            <tbody>
            <td><?=$row['user_id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['tell']?></td>
            <td><?=$row['address']?></td>
            <td><a href="h_modify.php?idx=<?=$row['idx']?>" style="text-align:center;">수정</a></td>
            <td><a href="h_delete.php?idx=<?=$row['idx']?>" style="text-align:center;">탈퇴</a></td>
        </tbody>
    <?php } ?>
    </table>
        
<?php
    } else {
        '<script>alert(\'권한이 없습니다. \'); history.back();</script>';
    } 
    require_once('./Footer.php');?>
