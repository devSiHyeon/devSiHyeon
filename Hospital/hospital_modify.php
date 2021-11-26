<? include "hospital_Header.php"; ?>
<? include "hospital_DB.php"; ?> 

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- include libraries(jQuery, bootstrap) -->
    <!-- summernote홈페이지에서 받은 summernote를 사용하기 위한 코드를 추가 -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    
    <!-- include summernote css/js -->
    <!-- 이 css와 js는 로컬에 있는 것들을 링크시킨 것이다. -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>


    <style>
        table, tr, td{
            border:1px solid #000000;
        }
        .box{
            width:100px;
            text-align:center;
        }
        .box2{
            width:500px;
            height:60px;
        }
    </style>
</head>
<body>

<!-- 게시판 -->
<form action="hospital_modify_Process.php" method="post">
     <input type="hidden" name="idx" value="<?=$_GET['idx'];?>">
    <div class="container mt-5">
        <table class="mx-auto">
        <?
            $hospital = mysqli_real_escape_string($db, $_GET['idx']);

            $sql = "
                    SELECT * 
                    FROM hospital
                    WHERE idx = $hospital
            ";
            $result = mysqli_query ($db, $sql);    
            $row = mysqli_fetch_array($result);
        ?>
            <tr>
                <td class="box">작성자</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<input name="name" value="<?=$row['name']?>"></td>
            </tr>
            <tr>
                <td class="box">연락처</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<input name="tell" value="<?=$row['tell']?>"></td>
            </tr>
            <tr>
                <td class="box">제목</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<input name="title" value="<?=$row['title']?>"></td>
            </tr>
            <tr>
                <td class="box">내용</td>
                <td class="box2">&nbsp;&nbsp;&nbsp;<textarea rows="5" cols="60" name="memo" id="memo" value=""></textarea></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-outline-success float-end mt-5" value="수정완료">
        <a type="button" href="hospital_list.php" class="btn btn-outline-success float-end mt-5">목록</a>
    </div>
</form>
    
<script>
    //id가 memo인 것을 summernote 방식으로 적용하라는 의미
    //높이와 넓이를 설정하지 않으면 화면이 작게 나오기때문에 설정
    $(function(){

        //썸머노트에 값넣기 (초기화 전에 값을 )
	   $('#memo').summernote('code', '<?=$row['memo']?>');

        $("#memo").summernote({
            height : 300,
            width : 800
        });
    });
    
    
</script>    
    
<? include "hospital_Footer.php"; ?> 
