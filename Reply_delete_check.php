<? include "DB.php"; ?>
<? include "./Header.php"; ?>

<?php

// 넘어온 값 정리
$id_comment = $_GET['id_comment'];

// 댓글 호출
$sql = "
        SELECT id, content, tb_board_id
        FROM c_comment
        WHERE id = '{$id_comment}'
";
$reslut = mysqli_query($db, $sql);
$row = mysqli_fetch_array($reslut);

?>

<form id="reply_delete_form" name="reply_delete_form" action="./Reply_delete_Process.php" method="post">
<input type="hidden" name="id_comment" value="<?=$id_comment?>">

    내용 : <?=$row['content']?></br>
    비밀번호 : <input type="password" name="password"  maxlength="10" required></br></br>

    <a href="./view.php?id=<?=$row['tb_board_id']?>">목록</a>
    <input type="submit" value="삭제">
</form>

<script>
$(function() {

    $("#reply_delete_form").on("submit", function() {

        var check = confirm("정말로 삭제하겠습니까?");
        if (!check) {
           return false; // 여기서 중지(중단) 하세요.
        }

        // 자기 할 일 한다 : 전송
    });

});
</script>

<? include "./Footer.php"; ?>
