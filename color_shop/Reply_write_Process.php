<? include "DB.php"; ?>

<?php

// 넘어온 값 정리
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$content = $_POST['content'];

// 암호화
$password = Encrypt($password);

// 게시물 입력
$sql = "
        INSERT INTO c_comment
        SET
            c_board_id = '$id',

            content = '$content',
            name = '$name',
            password = '$password',

            created_at = NOW()
";
mysqli_query($db, $sql);

// 메시지
msgAndGo("댓글 작성이 완료되었습니다.", "./board_view.php?id={$id}");

?>
