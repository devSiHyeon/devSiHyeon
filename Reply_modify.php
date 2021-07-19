<? include "DB.php"; ?>
<? include "./Header.php"; ?>

<?php

// 넘어온 값 정리
$id_comment = $_POST['id_comment'];
$password = $_POST['password'];

// 댓글 호출
$sql = "
        SELECT *
        FROM c_comment
        WHERE id = '{$id_comment}'
";
$reslut = mysqli_query($db, $sql);
$row = mysqli_fetch_array($reslut);

// 암호화
$password = Encrypt($password);

// 비밀번호 확인
if ($row['password'] != $password) {

    // 불일치 안내문구
    msgAndGo("비밀번호 오류", "./Reply_modify_check.php?id_comment={$id_comment}");
}

?>

<form name="Reply_modify_form" action="./Reply_modify_Process.php" method="post">
<input type="hidden" name="id_comment" value="<?=$id_comment?>">

    작성자 : <input type="text" name="name" maxlength="50" value="<?=$row['name']?>" required></br></br>
    내용 : <textarea name="content" required><?=$row['content']?></textarea></br></br>

    <a href="./view.php?id=<?=$row['c_board_id']?>">목록</a>
    <input type="submit" value="작성">
</form>

<? include "./Footer.php"; ?>
