<?php
    function paging($now_p, $page_cnt, $block_cnt, $total_cnt){
                // 현재페이지, 페이지수,  블록수,  전체 게시글 수

        // 페이징
        $page_total     = ceil($total_cnt / $page_cnt);         // 총 페이지 수 
        $block_total    = ceil($page_total / $block_cnt);       // 총 블록 수
        $block          = ceil($now_p / $block_cnt);            // 블록 시작번호
        $block_start    = (($block - 1) * $block_cnt) + 1 ;
        $block_end      = $block_start + $block_cnt -1 ;

        if($block_end > $page_total) $block_end = $page_total;

        $url    = $_SERVER['PHP_SELF'];
?>
        <div style='width:100%; text-align:center; margin-top:20px;'>
<?php            
        // 처음
            if ($now_p >= 1) echo '<a href=\''.$url.'?page=1\'>처음 </a>';

        // 이전
            if ($now_p > 1) {
                $before = $now_p - 1;
                echo '<a href=\''.$url.'?page='.$before.'\'> ◁ </a>';
            }

        // 숫자
            for($i = $block_start; $i <= $block_end; $i++){
                if($now_p == $i){
                    echo '<a href=\''.$url.'?page='.$i.'\'><b>'.$i.'</b></a>';
                } else {
                    echo '<a href=\''.$url.'?page='.$i.'\'>'.$i.'</a>';
                }
            }

        // 다음
            if($now_p < $page_total){
                $after = $now_p + 1;
                echo '<a href=\''.$url.'?page='.$after.'\'> ▷ </a>';
            }

        // 끝
            if($now_p <= $page_total) echo '<a href=\''.$url.'?page='.$page_total.'\'> 끝</a>';
?>
        </div>
<?php            
    }
    
?>
