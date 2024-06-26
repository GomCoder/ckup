<?php
/**
 * 관리자페이지 > 서비스신청관리 > 서비스환경설정 페이지
 */
$sub_menu = "400100";
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, 'r');


$g5['title'] = '서비스환경설정';
include_once('../admin.head.php');

?>

<h2>서비스환경설정 내용 작업중...</h2>

<?php
include_once('../admin.tail.php');