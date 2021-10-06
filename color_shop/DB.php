<?
    error_reporting(E_ALL & ~E_NOTICE); 
    ini_set('display_errors', '1');
    $db = mysqli_connect ("localhost", "hye0n", "dev13579!", "hye0n");

    // 공통 함수 호출
    include './Function.php';
?>
