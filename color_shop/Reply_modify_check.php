<? include "DB.php"; ?>
<? include "./Header.php"; ?>

<?php

// 넘어온 값 정리
$id_comment = $_GET['id_comment'];

// 댓글 호출
$sql = "
        SELECT id, content, c_board_id
        FROM c_comment
        WHERE id = '{$id_comment}'
";
$reslut = mysqli_query($db, $sql);
$row = mysqli_fetch_array($reslut);

?>

<form name="reply_modify_form" action="./Reply_modify.php" method="post">
<input type="hidden" name="id_comment" value="<?=$id_comment?>">

    내용 : <?=$row['content']?></br>
    비밀번호 : <input type="password" name="password"  maxlength="10" required></br></br>

    <a href="./view.php?id=<?=$row['c_board_id']?>">목록</a>
    <input type="submit" value="확인">
</form>


<? include "./Footer.php"; ?>
