<? include './auth.php'; ?>
<? include "DB.php"; ?>

<?php

// 넘어온 값 정리
// $password = $_POST['password'];
// $password = Encrypt($password);     // 암호화

$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];

$is_secret = ($_POST['is_secret']) ? $_POST['is_secret'] : "N";
$is_notice = ($_POST['is_notice']) ? $_POST['is_notice'] : "N";

$delete_file = $_POST['delete_file'];

// 회원정보 호출 (!WHERE 확인)
$sql_member = "
                SELECT *
                FROM c_board 
                WHERE
                id = '{$id}'
";
$result_member = mysqli_query($db, $sql_member);
$row_member = mysqli_fetch_array($result_member);

if ($row_member['user_id'] != $_SESSION['user_id']) {
    msgAndGo("수정권한이 없습니다.", "./board_list.php");
}

// 게시물 업데이트
$sql = "
        UPDATE c_board
        SET
            name = '$name',
            title = '$title',
            content = '$content',

            is_secret = '$is_secret',
            is_notice = '$is_notice',

            updated_at = NOW()

        WHERE id = '{$id}'
        LIMIT 1
";
mysqli_query($db, $sql);

// 메시지
msgAndGo("수정이 완료되었습니다.", "./board_view.php?id={$id}");

?>
