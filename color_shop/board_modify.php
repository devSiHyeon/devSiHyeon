<? include "./Header.php"; ?>
<? include "summer.php"; ?>

<?php

// 넘어온 값 정리
$id = $_GET['id'];
// $password = $_POST['password'];

// 게시물 호출
$sql = "
        SELECT *
        FROM c_board
        WHERE
                id = '{$id}'
                AND (is_deleted = 'N' OR is_deleted IS NULL)
";
$reslut = mysqli_query($db, $sql);
$row = mysqli_fetch_array($reslut);

// // 암호화
// $password = Encrypt($password);

// // 비밀번호 확인
// if ($row['password'] != $password) {

//     // 불일치 안내문구
//     msgAndGo("비밀번호 오류", "./modify_check.php?id={$id}");
//     // print_r($password);
// }

if (!$_SESSION['user_id']) { // 로그인이 안된 상태

    // 로그인 페이지로 보내고
    msgAndGo("로그인이 필요한 페이지입니다.", "./Login.php");
}

if ($_SESSION['is_admin'] != "Y") {
    if ($row['user_id'] != $_SESSION['user_id']) {
        msgAndBack("수정권한이 없습니다.");
    }
}

?>

    <form name="modify_form" action="./board_modify_process.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$row['id']?>">

        <table border="1px solid gray">
            <tr>
                <td>작성자 : <?=$row['user_id']?></td>
                <td>조회수 : <?=number_format($row['hit'])?></td>
            </tr>
            <tr>
                <td>작성일시 : <?=$row['created_at']?></td>
                <td>수정일시 : <?=$row['updated_at']?></td>
            </tr>
            <tr>
                <td>제목</td>
                <td><input type="text" name="title" value="<?=$row['title']?>" maxlength="255" required></td>
            </tr>
            <tr>
                <td>내용</td>
                <td><textarea id="content" name="content" required><?=$row['content']?></textarea></td>
            </tr>
        </table>
        </br>
        <!-- 비밀번호 : <input type="password" name="password" maxlength="10" required></br></br> -->

        <input type="checkbox" id="is_secret" name="is_secret" value="Y" <?= ($row['is_secret'] == "Y") ? "checked" : "" ?>> <label for="is_secret">비밀글</label><br><br>

        <? 
            if(($_SESSION['is_admin'] == 'Y')){

        ?>
             <input type="checkbox" id="is_notice" name="is_notice" value="Y" <?= ($row['is_notice'] == "Y") ? "checked" : "" ?>> <label for="is_notice">공지사항</label><br><br>
        <?    } ?>

        <a href="./board_list.php">목록</a>
        <input type="submit" value="수정완료">
        <input type="reset" value="다시쓰기">

    </form>

<script>

    $(function(){

	   $('#content').summernote('code', '<?=$row['content']?>');

    });

</script>

<? include "./Footer.php"; ?>
