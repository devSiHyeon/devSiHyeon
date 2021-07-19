<? include "./Header.php"; ?>

<?php
// 넘어온 값 정리
$id = $_GET['id'];

// 조회수 중복 방지
if (!$_SESSION["view_" . $id]) {

    // 조회수 올리기
    $sql_hit = "
                    UPDATE c_board
                    SET hit = hit + 1
                    WHERE
                        id = '{$id}'
                        AND (is_deleted = 'N' OR is_deleted IS NULL)
                    LIMIT 1
    ";
    mysqli_query($db, $sql_hit);

    $_SESSION["view_" . $id] = date("H:i:s");  // 조회수 세션
    
}


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


// 게시물  is_secret 호출 (!WHERE 확인)

if ($row['is_secret'] == 'Y' ) {     // 비밀글이 맞다면

    //본인 확인, 관리자 확인하여 아니면 경고글
    if ( ($row['user_id'] != $_SESSION['user_id']) && ($_SESSION['is_admin'] != 'Y') ) {
        msgAndBack("비밀게시글입니다.");
    }  
}  

// print_r($_SESSION);
?>
<div class="container">
    <h5 class="mt-5 text-center">상세보기</h5>

    <table class="table border mx-auto w-50" >
        <tr>
            <td class=" text-center"style="width:150px;">작성자 : <?=$row['user_id']?></td>
            <td>조회수 : <?=number_format($row['hit'])?></td>
        </tr>
        <tr>
            <td class=" text-center">작성일시</td>
            <td><?=$row['created_at']?></td>
        </tr>
        <tr>
            <td class=" text-center">수정일시 </td>
            <td><?=$row['updated_at']?></td>
        </tr>
        <tr>
            <td class=" text-center">제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목</td>
            <td><?=$row['title']?></td>
        </tr>
        <tr>
            <td class=" text-center" style="vertical-align : top;">내&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;용</td>
            <td><?=nl2br($row['content'])?></td>
        </tr>
    </table>
    </br>
    <div class="mb-2" style="float:right;">
        <a href="./board_list.php">목록</a>
        <a href="./board_modify.php?id=<?=$row['id']?>">수정</a>
        <button onclick="delete_1()">삭제</button>
    </div>
    <script>
        function delete_1() {
            if (confirm("삭제하시겠습니까?")) {
                document.location.href = './board_delete_Process.php?id=<?=$row['id']?>';
            }
        }
    </script>
    <!-- <a href="./delete_Process_2.php?id=<?=$row['id']?>">삭제</a> -->


    <!--
        <a href="./modify_check.php?id=<?=$row['id']?>">수정</a>
        <a href="./delete_check.php?id=<?=$row['id']?>">삭제</a>
    -->
    <br>
    <hr>

    <h5>댓글</h5>
    <div class="mb-2" style="float:right;">
        <a href="./Reply_write.php?id=<?=$row['id']?>">글쓰기</a></br>
    </div>
    <table class="mt-2 table">
        <tr>
            <td>작성자</td>
            <td>내용</td>
            <td>작성일시</td>
            <td>관리</td>
        </tr>

        <?
        // 댓글 호출
        $sql_comment = "
                SELECT *
                FROM c_comment
                WHERE c_board_id = '{$id}'
        ";
        $reslut_comment = mysqli_query($db, $sql_comment);
        while ($row_comment = mysqli_fetch_array($reslut_comment)) {
            $content = nl2br($row_comment['content']);
        ?>
            <tr>
                <td><?=$row_comment['name']?></td>
                <td><?=$content?></td>
                <td><?=$row_comment['created_at']?></td>
                <td>
                    <a href="./Reply_modify_check.php?id_comment=<?=$row_comment['id']?>">수정</a>
                    <a href="./Reply_delete_check.php?id_comment=<?=$row_comment['id']?>">삭제</a>
                </td>
            </tr>
        <? } ?>

    </table>
</div>
<? include "./Footer.php"; ?>
