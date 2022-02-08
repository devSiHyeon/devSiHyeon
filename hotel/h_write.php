<?php require_once('./Header.php');
    if(!strlen($_SESSION['user_id'])>0) {
        echo '<script>alert(\'회원만 작성할 수 있습니다. \');location.href=\'./Index.php\'</script>';
    }
?>
<div style='width:100%;'>
    <div style='width:350px;'>
        <form name='write' action='./h_writeP.php' method='POST'  enctype="multipart/form-data">
            <div>아이디 : <?=$_SESSION['user_id']?></div>
            <div>제목 : <input type='text' name='title'></div>
            <div>내용 : <textarea name='content'style="height:50px;"></textarea></div>
            <div>첨부파일 : <input type='file' name='files[]'></div>
            <div>첨부파일 : <input type='file' name='files[]'></div>
            <div>첨부파일 : <input type='file' name='files[]'></div>
            <span class='ref'>* 첨부파일은 <b>2M 이하</b>만 가능합니다.</span><br>
            <span class='ref'>* 허용 확장자 : jpg, png, gif, txt, hwp, pdf</span>
            <div style="text-align:right;"><input type='submit' value='저장'></div>
        </form>
    </div>
</div>
<?php require_once('./Footer.php');?>

