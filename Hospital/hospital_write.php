<? include "hospital_Header.php"; ?>
<? include "hospital_DB.php"; ?> 
    
<head>
    <!-- include libraries(jQuery, bootstrap) -->
    <!-- summernote홈페이지에서 받은 summernote를 사용하기 위한 코드를 추가 -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    
    <!-- include summernote css/js -->
    <!-- 이 css와 js는 로컬에 있는 것들을 링크시킨 것이다. -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <script>
    //id가 memo인 것을 summernote 방식으로 적용하라는 의미이다.
    //높이와 넓이를 설정하지 않으면 화면이 작게 나오기때문에 설정해주어야 한다.
    $(function(){
        $("#memo").summernote({
            height : 300,
            width : 800
        });
    });
    
    
    </script>

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
<form action="hospital_write_process.php" method="POST">
    <div class="container mt-5">
        <table class="mx-auto">
            <tr>
                <td class="box">작성자</td>
                <td class="box2">&nbsp;&nbsp;<input name="name"></td>
            </tr>
            <tr>
                <td class="box">연락처</td>
                <td class="box2">&nbsp;&nbsp;<input name="tell" placeholder="숫자만 작성해주세요"></td>
            </tr>
            <tr>
                <td class="box">제목</td>
                <td class="box2">&nbsp;&nbsp;<input name="title"></td>
            </tr>
            <tr>
                <td class="box">내용</td>
                <td class="box2">&nbsp;&nbsp;<textarea rows="5" cols="60" name="memo" id="memo"></textarea></td>
            </tr>
        </table>
    </div>
    <div>
        <button type="submit" class="btn btn-primary float-end mt-5" >작성</button>
        <a type="button" href="hospital_list.php" class="btn btn-primary float-end mt-5">목록</a>
    </div>
</form>
    
<? include "hospital_Footer.php"; ?> 