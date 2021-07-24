<? include './auth.php'; ?>
<? include "DB.php"; ?>
<? include './Header_2.php';?>

<?php

// print_r($_POST);

// 파일은 $_FILES 로 넘어온다.
// print_r($_FILES);
/*
echo $_FILES['file']['name'] . "<br />";
echo $_FILES['file']['type'] . "<br />";
echo $_FILES['file']['tmp_name'] . "<br />";
echo $_FILES['file']['size'] . "<br />";
*/
 
// 넘어온 값 정리
$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];

$is_secret = ($_POST['is_secret']) ? $_POST['is_secret'] : "N";
$is_notice = ($_POST['is_notice']) ? $_POST['is_notice'] : "N";

$user_id = $_SESSION['user_id'];

// 암호화
// $password = Encrypt($password);

// 게시물 입력
$sql = "
                INSERT INTO c_board
                SET
                    user_id = '$user_id',
                    title = '$title',
                    content = '$content',
                    name = '$name',
                    -- password = '$password',
                    
                    is_secret = '$is_secret',
                    is_notice = '$is_notice',

                    hit = 0,
                    is_deleted = 'N',

                    created_at = NOW()
";
mysqli_query($db, $sql);

$id = mysqli_insert_id($db); // 직전에 insert 로 생성된 행의 id (오토 인크리먼트 지정된 필드)값을 반환한다.

if ($_FILES['file']['name']) { // 첨부파일이 있으면

    // 첨부파일 1. DB 저장
    $temp_name = date("YmdHis") . "_" . $_FILES['file']['name']; // 중복 파일명 제거
    $sql = "
                    INSERT INTO c_attach_file
                    SET
                        tb_board_id = '{$id}',

                        file_name = '{$temp_name}',
                        file_type = '{$_FILES['file']['type']}',
                        file_size = '{$_FILES['file']['size']}',

                        created_at = NOW()
    ";
    mysqli_query($db, $sql);

    // 첨부파일 2. 파일 수동 이동
    move_uploaded_file($_FILES['file']['tmp_name'], "/home/lab/public_html/upload/" . $temp_name);
}

// 메시지
msgAndGo("작성이 완료되었습니다.", "./board_list.php");

?>
