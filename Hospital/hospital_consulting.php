<? include "hospital_Header.php"; ?> 
<? include "hospital_DB.php"; ?> 

<head>
    <style>
    /* 상단 link*/
    td{
        width:30%;
    }
    .ho{
        text-align:left;
    }

    .ho_1 {
        width:190px; 
        height:30px;
    }

    .ho_2 {
        width:300px; 
        height:100px;
    }
    </style>
</head>
<body>
   

<!-- 상단메뉴 Link-->
<form action="hospital_consulting_process.php" method="POST">
    <div class="container mt-5 ">
        <h5><span class="material-icons">library_add_check</span> 입원상담</h5>
        <div class="table-responsive text-center">
            <div class="border border-1 mx-auto mt-5" style="width:70%;">
            <table class="table table-borderless mt-5 mb-5">
                <tr>
                    <td  class=" mt-3 mb-3">작성자</td>
                    <td class="ho "><input class="ho_1" name="name_2"></td>
                </tr>
                <tr>
                    <td>전화번호</td>
                    <td class="ho"><input class="ho_1" type="tel" name="tel_2"></td>
                </tr>    
                <tr>
                    <td>문의내용</td>
                    <td class="ho">
                        <select class="rounded-1 ho_1" name="inquire_2">
                            <option>입원상담</option>
                            <option>물리치료</option>
                            <option>작업치료</option>
                            <option>연하치료</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>제목</td>
                    <td class="ho"><input class="ho_1" name="title_2"></td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td class="ho"><textarea class="ho_2" name="memo_2"style="width:190px;"></textarea></td>
                </tr>
            </table>
            <input class="btn btn-outline-success mb-5" type="submit" value="작성" style="width:50%;" > 
            </div>
        </div>
    </div>
</form>
<div style="padding:30px;"></div>

<? include "hospital_Footer.php"; ?> 
