<? include "hospital_Header.php"; ?>
<? include "hospital_DB.php"; ?> 

<head>
    <style>
        .box{
            width:30%;
            text-align:center;
            vertical-align:middle;
        }
        .box2{
            width:70%;
            height:60px;
            vertical-align:middle;
        }
    </style>
</head>
<body>

<!-- 게시판 -->
<div class="container mt-5 ">
    <div class="table-responsive ">
        <div class="mx-auto mt-5" style="width:60%;">
        <table class="table table-bordered mt-5 mb-5">
        <?
            session_start();

            $idx = $_GET['idx'];

                //조회수
                $bno = "
                        Update hospital
                        SET 
                        hit = hit+1
                        WHERE 
                            idx = '$idx'
                        ";
            $result_hit = mysqli_query($db, $bno);

            // 해당 목록 글 
            $sql_read = "
                        SELECT * 
                        FROM hospital
                        WHERE idx = '$idx'
                        ";
            $result_read = mysqli_query ($db, $sql_read);
            $row = mysqli_fetch_array($result_read); // 여기는 한개의 자료만 표시되니까, while 사용할 필요가 없습니다.

            ?>
            <tr>
                <td class="box">작성자</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<?=$row['name']?></td>
            </tr>
            <tr>
                <td class="box">연락처</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<?=$row['tell']?></td>
            </tr>
            <tr>
                <td class="box">제목</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<?=$row['title']?></td>
            </tr>
            <tr>
                <td class="box">내용</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<?=$row['memo']?></td>
            </tr>

        </table>
        <a type="button" href="hospital_modify.php?idx=<?=$idx?>" class="btn btn-outline-success float-end mt-5 ">수정</a>
        <a type="button" href="hospital_list.php" class="btn btn-outline-success float-end mt-5">목록</a>
        </div>
    </div>
</div>
    
<? include "hospital_Footer.php"; ?> 