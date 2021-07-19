<?php

// 메시지 + 페이지 이동
function msgAndGo($msg, $url) {

    echo "
            <script>
                alert('{$msg}');
                document.location.href = '{$url}';
            </script>
        ";

    exit;
}

// 메시지 + 뒤로 이동
function msgAndBack($msg) {

    echo "
            <script>
                alert('{$msg}');
                history.go(-1);
            </script>
        ";

    exit;
}


// 암호화
function Encrypt($str, $secret_key='lab.jfix.net', $secret_iv='lab.jfix.net') {
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);  //32가 안정적

    return str_replace("=", "", base64_encode(openssl_encrypt($str, "AES-256-CBC", $key, 0, $iv))
    );
}

// 복호화
function Decrypt($str, $secret_key='lab.jfix.net', $secret_iv='lab.jfix.net') {
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    return openssl_decrypt(base64_decode($str), "AES-256-CBC", $key, 0, $iv
    );
}

?>
