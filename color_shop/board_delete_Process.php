<? include './auth.php'; ?>
<? include "DB.php"; ?>
<? include './Header_2.php';?>

<?php
if (!$_SESSION['user_id']) { // 로그인이 안된 상태

    // 로그인 페이지로 보내고
    msgAndGo("로그인이 필요한 페이지입니다.", "./Login.php");
}


// 넘어온 값 정리
$id = $_GET['id'];

// 게시물 호출
$sql = "
        SELECT id, user_id
        FROM c_board
        WHERE id = '{$id}'
";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

// 아이디 확인
if ($row['user_id'] != $_SESSION['user_id']) {
    msgAndBack("삭제 권한이 없습니다.");
}

// DB 소프트 삭제
$sql_delete = "
        UPDATE c_board
        SET is_deleted = 'Y'
        WHERE id = '{$id}'
        LIMIT 1
";
$result = mysqli_query($db, $sql_delete);

msgAndGo("삭제되었습니다.", "./board_list.php");


?>

