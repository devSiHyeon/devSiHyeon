<? include "DB.php"; ?>
<? include "./Header.php"; ?>

<?php

// 넘어온 값 정리
$id = $_GET['id'];

// 게시물 호출
$sql = "
        SELECT title
        FROM c_board
        WHERE id = '{$id}'
";
$reslut = mysqli_query($db, $sql);
$row = mysqli_fetch_array($reslut);

?>

<form name="Reply_form" action="./Reply_write_Process.php" method="post">
<input type="hidden" name="id" value="<?=$id?>">

    게시물 : <?=$row['title']?>

    <hr>

    작성자 : <input type="text" name="name" maxlength="50" required></br></br>
    비밀번호 : <input type="password" name="password" maxlength="10" required></br></br>
    내용 : <textarea name="content" required></textarea></br></br>

    <a href="./board_list.php">목록</a>
    <input type="submit" value="작성">
</form>

<? include "./Footer.php"; ?>
