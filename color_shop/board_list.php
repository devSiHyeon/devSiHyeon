<? include "./Header.php"; ?>
<div class="container mt-5">
    <div align="center">
    <form name="search_form" action="<?=$_SERVER['PHP_SELF']?>" method="get">   <!-- $_SERVER['PHP_SELF'] 페이지 자신  -->
        <select name="key">
            <option value="name">작성자</option>
            <option value="title">제목</option>
        </select>
        <input type="text" name="keyword" placeholder="검색어를 넣어주세요.">
        <input type="submit" value="검색">
    </form>
        <table class="table gray mt-3" style="width:80%;">
            <tr class="text-center">
                <td>NO</td>
                <td>제목</td>
                <td>작성자</td>
                <td>작성일</td>
                <td>조회수</td>
            </tr>

            <?
            // 검색 기능 구현
            if ($_GET['keyword']) {

                // 검색용 쿼리 생성
                $where = " AND ( {$_GET['key']} LIKE '%{$_GET['keyword']}%' ) ";
            } else {
                $where = "";
            }

            // 시작할 방 번호 뽑기
            $current_page = $_GET['page'];
            if (!$current_page) $current_page = 1;
            $start = ($current_page - 1) * 10; // 시작 방 번호

            // 총 게시물 숫자 추출
            $sql_total = "
                            SELECT COUNT(*) AS cnt
                            FROM c_board
                            WHERE
                                    1 = 1
                                    AND (is_deleted = 'N' OR is_deleted IS NULL)
                                    {$where}
            ";
            $reslut_total = mysqli_query($db, $sql_total);
            // $row_total = mysqli_fetch_array($reslut_total);
            $temp_no = $row_total['cnt'] - $start; // 가상 게시물번호

            // 게시물 호출
            $sql = "
                    SELECT *
                    FROM c_board
                    WHERE
                            1 = 1
                            AND (is_deleted = 'N' OR is_deleted IS NULL)
                            {$where}
                    ORDER BY
                                is_notice ASC,
                                id DESC
                    LIMIT 10
                    OFFSET $start
            ";
            // echo "쿼리 : " . $sql;
            $reslut = mysqli_query($db, $sql);

            while ($row = mysqli_fetch_array($reslut)) {
                if (mb_strlen($row['title']) > 5) {
                    $title = mb_substr($row['title'], 0, 5) . "...";
                } else {
                    $title = $row['title'];
                }

                $created_at = substr($row['created_at'], 0, 10);
                $hit = number_format($row['hit']);

                // 공지사항 & 비밀글 아이콘
                if ($row['is_notice'] == "Y") {
                    $icon = "<img src='./color_images/n.png'>";
                } else {
                    if ($row['is_secret'] == "Y") {
                        $icon = "<img src='./color_images/s.png'>";
                    } else{
                    $icon = "";
                        }
                    }
            ?>
                <tr  class="text-center">
                    <td><?=$temp_no--?></td>
                    <td><?=$icon?> <a href="./board_view.php?id=<?=$row['id']?>"><?=$title?></a></td>
                    <td><?=$row['user_id']?></td>
                    <td><?=$created_at?></td>
                    <td><?=$hit?></td>
                </tr>
            <? } ?>
        </table>

    <!-- 페이징 -->

        <?
        // 총갯수
        $total = $row_total['cnt'];

        // 총페이지수(ceil : 올림함수)
        $paging_count = ceil($total / 10);
        ?>

        <? for ($i = 1; $i <= $paging_count; $i++) { ?>

            <? if ($i == $current_page) { ?>

                <span style="font-weight: bold;"><?=$i?></span>

            <? } else { ?>
                <a href="<?=$PHP_SELF?>?page=<?=$i?>&key=<?=$_GET['key']?>&keyword=<?=$_GET['keyword']?>"><?=$i?></a>
            <? } ?>



        <? } ?>

    </div>

    <div align="right">
        <a href="./board_write.php">글쓰기</a>
    </div>
</div>


<? include "./Footer.php"; ?>

