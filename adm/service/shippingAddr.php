<?php
/**
 * 관리자페이지 > 서비스신청관리 > 배대지주소 페이지
 */
$sub_menu = "400300";
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, 'r');


$g5['title'] = '배대지주소';
include_once('../admin.head.php');

?>

<h2>배대지주소 내용 작업중...</h2>

<?php
include_once('../admin.tail.php');