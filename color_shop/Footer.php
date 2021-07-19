<style>
footer {

    position:fixed; 
    left:0px; 
    bottom:0px; 
    height:100px; 
    width:100%; 
    padding: 35px 0;
    text-align: center;
    background: #f8b195;

}
</style>
<div style="padding:50px;"></div>
<footer>
<? if ( ($_SESSION['is_admin'] == 'Y') ) {  ?>    <!-- 만약에 세션에 아이디가 있고 관리자라면 -->

    <h3 style="color:white;">관리자 모드 입니다.</h3>

<? } else { ?>  
    <h3 style="color:white;">Color Shop 입니다.</h3>
    <?  }   ?>
</footer>
</body>
</html>