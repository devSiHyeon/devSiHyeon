<? include "./Header.php"; ?>

<div class="container">
    <form action="Join_Process.php" method="post">
        <div class="border border-2 mt-5 mx-auto" style="width:80%;">
            <table class="mt-5 mx-auto text-center" style="width:350px;">                
                <tr>
                    <td>아이디</td>
                    <td><input type="text" name="user_id" style="width:200px;" maxlength="15"required > </td>
                </tr>
                <tr>
                    <td>이름</td>
                    <td><input type="text" name="user_name" style="width:200px;" maxlength="15"required ></td>
                </tr>
                <tr class="mt-2">
                    <td>비밀번호</td>
                    <td><input type="password" name="password" style="width:200px;" maxlength="15"required ></td>
                </tr>
            </table>
            <div class="mt-5" style="padding-left:65%">
                <input type="submit" value="회원가입" class="btn btn-outline-danger mb-5">
            </div>
        </div>
    </form>
<? include "./Footer.php"; ?>