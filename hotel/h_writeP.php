<?php
    require_once ('./DB.php');
    
    $idx        = $_SESSION['idx'];
    $user_id    = $_SESSION['user_id'];
    $title      = $_POST['title'];
    $content    = $_POST['content'];
    $files      = $_FILES['files'];

    $extension  = array('jpg', 'png', 'gif', 'txt', 'hwp', 'pdf');
    $size       = '2097152'; 
    
    // 첨부파일 (확장자, 용량 확인)
    foreach ($files['error'] as $key => $value){
        $type   = pathinfo($files['name'][$key],PATHINFO_EXTENSION);
        if (in_array($type, $extension) && $files['size'][$key] < $size){
            $rand_name  = md5($value['name'][$key].time().uniqid()).'.'.$type;
            $true[]     = array ('file_name' => $files['name'][$key], 'rand_name' => $rand_name, 'type' => $type, 'tmp_name' => $files['tmp_name'][$key]);
        } else {
            if(isset($files['name'][$key]) && strlen($files['name'][$key]) > 0){
                $false[]  = array($files['name'][$key]);
                
            }
        }
    }
    
    // 첨부파일 FTP 파일 여부
        // 첨부파일 확장자, 용량 불일치
        if(isset($false)){      
            foreach($false as $value_f){
                echo $value_f[0].' <br>';
            }
            echo '확장자와 용량 확인해주세요. <button onclick=\'history.back()\'>이전으로</button>';
            return;
        } else {
            // 첨부파일 확장자, 용량 일치
            if(isset($true)){

                $sql        = 'INSERT INTO h_board (member_idx, title, content, created_time) VALUES (\''.$idx.'\',\''.$title.'\',\''.$content.'\',NOW())';
                $result     = mysqli_query($DB, $sql);
                $last       = mysqli_insert_id ($DB);
                $ip         = $_SERVER["REMOTE_ADDR"];
                
                foreach($true as $value_t){
                    // true 안의 배열을 변수 선언
                    $name   =   $value_t['file_name'];         $rand_name = $value_t['rand_name'];         $type = $value_t['type'];         $tmp_name = $value_t['tmp_name'];
                    
                    // FTP에 파일 있는지 확인 & 파일 생성
                    if(!file_exists('./file/'.$type)){
                        mkdir('./file/'.$type,0777,true); 
                    }
                    
                    // 파일 upload
                    if (true === move_uploaded_file($tmp_name,'./file/'.$type.'/'.$rand_name)) {
                        
                        echo $sql_1      = 'INSERT INTO h_file (board_idx, file_name, rand_name, save, type, ip_address, created_time) 
                                        VALUES (\''.$last.'\',\''.$name.'\',\''.$rand_name.'\',\'./file/'.$type.'\',\''.$type.'\',\''.$ip.'\',NOW())';
                        $result_1   = mysqli_query($DB, $sql_1);

                    }
                }
            }
        }

    // 첨부파일 없는 경우 (게시판 글 작성)        
    if (array_sum($files['name']) == 0){
        $sql        = 'INSERT INTO h_board (member_idx, title, content, created_time) VALUES (\''.$idx.'\',\''.$title.'\',\''.$content.'\',NOW())';
        $result     = mysqli_query($DB, $sql);
    }
    
    echo '<script>alert(\'저장 완료\');location.href=\'./h_board.php\';</script>';
?>
