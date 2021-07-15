<? include "hospital_Header.php"; ?> 
<? include "hospital_DB.php"; ?> 

<head>
    <style>


    /* 본문 */
        table{
            table-layout:fixed;
            border:1px solid #C0C0C0;
            text-align:center;
            border-left: none;  /* 왼쪽 줄 삭제 */
            border-right: none;
            vertical-align:middle;
        }
        td{
            border:1px solid #C0C0C0;
            text-align:center;
            text-overflow:ellipsis; 
            overflow:hidden;  /* 스크롤이 생기지 않도록 */
            white-space:nowrap;   /*  줄바꿈을 강제로 하지 않도록  */
            vertical-align:middle;
        }
        a:link {            /* 아직 방문하지 않은 링크*/
            text-decoration: none;
        }

    </style>
</head>
<body>
<!-- 상단메뉴 -->

<!-- 게시판 -->
    <div class="container mt-5">
        <div class="table-responsive">
        <h5 class="mb-5"><span class="material-icons">library_add_check</span> 고객문의</h5>
            <table class="table">
                <tr>
                    <td class="box1 col-1">NO</td>
                    <td class="box1 col-2">작성자</td>
                    <td class="box2 col">제목</td>
                    <!-- <td class="box2 col-5">내용</td> -->
                    <td class="box1 col-2">작성일</td>
                    <td class="box1 col-2">조회수</td>
                    <td class="box1 col-2">삭제</td>
                </tr>
                <? 
                    // 검색기능
                    if($_GET['search_2']) {
                        
                        $search_1 = trim($_GET['search_1']);
                        $search_2 = trim($_GET['search_2']);
                        
                        $sql = "
                                SELECT *
                                FROM hospital
                                WHERE $search_1 LIKE '%$search_2%'
                                order by idx DESC
                                ";
                    } else  {
                        $sql = "
                                SELECT *
                                FROM hospital
                                ORDER BY idx DESC
                                ";
                    }

                    $result = mysqli_query($db, $sql);
                    
                    $total = mysqli_num_rows($result); // 전체 갯수 반환해줍니다.
                    
                    while($row = mysqli_fetch_array($result)){
                        
                        ?>
                <tr>
                    <td><?=$total--?></td>
                    <td><a href="hospitalRead.php?idx=<?=$row['idx']?>"><?=$row['name']?></td>
                    <td>&nbsp;&nbsp;&nbsp;<?=$row['title']?></td>
                    <!-- <td>&nbsp;&nbsp;&nbsp;<?=$row['memo']?></td> -->
                    <td><?=$row['date']?></td>
                    <td><?=$row['hit']?></td>
                    <td><a href = "hospitalDelete.php?idx=<?=$row['idx']?>" class="btn btn-outline-secondary">삭제</a></td>
                </tr>
                <?  } 
                    mysqli_close($db);  ?>
            </table>
        </div>
    </div>
    <div class="container w-80 mt-5 mb-5">
        <div class="text-center">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <select name = "search_1" class="btn btn-outline-success">
                <option value="name">작성자</option>
                <option value="name">제목</option></option>
                <option value="name">내용</option></option>
            </select>
            <input type="text" name="search_2" class="btn btn-outline-success">
            <button type="submit" class="btn btn-outline-success" >검색</button>
            <a href="hospitalWrite.php" class="btn btn-outline-success">작성</a>
        </div>
    </div>
    
<? include "hospital_Footer.php"; ?> 