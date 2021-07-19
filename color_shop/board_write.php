<? include "./Header.php"; ?>
<? include 'summer.php'; ?>

    <script>
        $(function(){
            $("#content").summernote({
                height : 300,
                width : 500
            });
        });

    </script>
<?php

// TODO :: 비밀번호 확인 -대,소문자 / 한글, 영어, 숫자 혼합 / 글자수 / 특수기호

?>
<?
if (!$_SESSION['user_id']) { // 로그인이 안된 상태
    // 로그인 페이지로 보내고
    msgAndGo("로그인이 필요한 페이지입니다.", "./Login.php");
}

?>
<div class="container">
    <div class="mx-auto w-100">
        <form id="write_form" name="write_form" action="./board_write_process.php" method="post" enctype="multipart/form-data">

            작성자 : <input type="text" name="name" maxlength="50"  value="<?=$_SESSION['user_id']?>" required><br><br>
            제목 : <input type="text" name="title" maxlength="255"required ><br><br>
            내용 : <textarea id="content" name="content" rows="5" cols="50" required></textarea><br><br>
            

            <input type="checkbox" id="is_secret" name="is_secret" value="Y"> <label for="is_secret">비밀글</label><br><br>
            
            <? 
                if(($_SESSION['is_admin'] == 'Y')){

            ?>
                <input type="checkbox" id="is_notice" name="is_notice" value="Y"> <label for="is_notice">공지사항</label><br><br>
            <?    } ?>

            <div style="background-color:#89cdeb; width:72px;  float:left; border:2px solid gray; text-align:center;">
                <a tyle="button" href="./board_list.php" style="height:auto; width:50px;">목록</a>
            </div>
            <div  style=" float:right;">
                <input type="submit" value="저장하기" style="background-color:#f8a89a;">
                <input type="reset" value="다시쓰기" style="background-color:#f8d19a;">
            </div>
        </form>
    </div>
</div>

<? include "./Footer.php"; ?>
