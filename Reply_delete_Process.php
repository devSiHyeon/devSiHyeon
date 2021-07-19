<? include "DB.php"; ?>

<?php

// 넘어온 값 정리
$id_comment = $_POST['id_comment'];
$password = $_POST['password'];

// 게시물 호출
$sql = "
        SELECT id, password, c_board_id
        FROM c_comment
        WHERE id = '{$id_comment}'
";
$reslut = mysqli_query($db, $sql);
$row = mysqli_fetch_array($reslut);

// 암호화
$password = Encrypt($password);

// 비밀번호 확인
if ($row['password'] == $password) {

    // 지우려는 댓글에 달린 자식 댓글이 있는지 확인 -> 없으면, 지우기

    // DB삭제
    $sql_delete = "
            DELETE
            FROM c_comment
            WHERE id = '{$id_comment}'
            LIMIT 1
    ";
    $reslut = mysqli_query($db, $sql_delete);

    // 목록 페이지 이동
    msgAndGo("삭제되었습니다.", "./boarder_view.php?id={$row['c_board_id']}");

} else {

    // 불일치 안내문구
    msgAndGo("삭제 실패", "./Reply_delete_check.php?id_comment={$id_comment}");
}

?>

