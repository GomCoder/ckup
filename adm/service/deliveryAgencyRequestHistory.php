<?php
/**
 * 관리자페이지 > 서비스신청관리 > 배송대행신청내역 페이지
 */
$sub_menu = "400701";
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, 'r');


$g5['title'] = '배송대행신청내역';
include_once('../admin.head.php');

?>

<h2>배송대행신청내역 내용 작업중...</h2>

<?php
include_once('../admin.tail.php');