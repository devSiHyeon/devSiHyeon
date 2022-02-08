<?php require_once('./Header.php');
    include "./h_function.php"; 

    $user_id    = $_SESSION['user_id'];
    $idx        = $_SESSION['idx'];

    if (isset($_GET['page'])){
        $page = $_GET['page'] == 0 ? 1 : (int)$_GET['page'];
    } else {
        $page = 1;
    } 

    // 총 페이지 수 
    $sql_t      = 'SELECT count(name) as name FROM h_detail';
    $result_t   = mysqli_query($DB, $sql_t);
    $row_t      = mysqli_fetch_assoc($result_t);
    $total_row  = $row_t['name'];
    $page_list  = 5;

    $page_total = ceil($total_row / $page_list);

    $page       = $page > $page_total ? $page = $page_total : ($page < 0 ? $page = 1 : $page);
    $list_start     = ($page-1) * $page_list;   // 순차적인 글 목록

    $sql        = 'SELECT a.idx, user_id, name, tell, address FROM h_detail AS a LEFT JOIN h_member AS b ON a.member_idx = b.idx 
                    ORDER BY name ASC, user_id ASC LIMIT '.$list_start.','.$page_list.'';
    $result     = mysqli_query($DB, $sql);
    
    if(strlen($user_id) > 0 && $user_id == 'admin'){
        ?>
    
    <b>회원 목록</b>  
    <table border='1'>            
        <thead>
            <th>아이디</th>
            <th>이름</th>
            <th>연락처</th>
            <th>주소</th>
            <th>수정</th>
            <th>탈퇴</th>
        </thead>
        <?php while($row = mysqli_fetch_assoc($result)) {  ?>                
            <tbody>
            <td><?=$row['user_id']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['tell']?></td>
            <td><?=$row['address']?></td>
            <td><a href="h_modify.php?idx=<?=$row['idx']?>" style="text-align:center;">수정</a></td>
            <td><a href="h_delete.php?idx=<?=$row['idx']?>" style="text-align:center;">탈퇴</a></td>
        </tbody>
    <?php } ?>
    </table>
        
<?php
    // 페이징 (함수 적용)
    echo paging($page, $page_list, 5, $total_row);
            // 현재페이지, 페이지수,블록수,  전체 게시글 수
    } else {
        '<script>alert(\'권한이 없습니다. \'); history.back();</script>';
    } 
    require_once('./Footer.php');?>
