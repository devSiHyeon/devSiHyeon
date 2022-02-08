<?php require_once('./Header.php');?>

<container style='width:100%;'>
    <div style='width:100%;'>
        <div style='width:50%;float:left;'>
            게시판
        </div>
        <div style='width:50%;text-align:right;float:left;'>
            <a href='./h_writer.php' style='margin-left'>글작성</a>
        </div>
    </div>
    
    <table border='1'>
        <colgroup>
            <col span='1'>
            <col span='1'>
            <col span='1'>
            <col span='1'>
            <col span='1'>
        </colgroup>
        <thead>
            <th>No</th>
            <th>제목</th>
            <th>작성자</th>
            <th>등록일</th>
            <th>조회수</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td style='text-align:left;'>제목</td>
                <td>작성자</td>
                <td>등록일</td>
                <td>조회수</td>
            </tr>
            <tr>
                <td>2</td>
                <td style='text-align:left;'>제목</td>
                <td>작성자</td>
                <td>등록일</td>
                <td>조회수</td>
            </tr>
        </tbody>
    </table>
    페이징
</container>
<?php require_once('./Footer.php');?>

