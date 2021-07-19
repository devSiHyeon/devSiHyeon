<? include "DB.php"; ?>

<?php

// 넘어온 값 정리
$id_comment = $_POST['id_comment'];
$name = $_POST['name'];
$content = $_POST['content'];

// 게시물 입력
$sql = "
                UPDATE c_comment
                SET
                    content = '$content',
                    name = '$name',

                    updated_at = NOW()

                WHERE id = '{$id_comment}'
                LIMIT 1
";
mysqli_query($db, $sql);

// 댓글 호출
$sql = "
        SELECT c_board_id
        FROM c_comment
        WHERE id = '{$id_comment}'
";
$reslut = mysqli_query($db, $sql);
$row = mysqli_fetch_array($reslut);

// 메시지
msgAndGo("댓글 수정이 완료되었습니다.", "./board_view.php?id={$row['c_board_id']}");

?>
