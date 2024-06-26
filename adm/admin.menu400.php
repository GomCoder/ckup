<?php
/**
 * 서비스신청관리 부메뉴
 */
$menu['menu400'] = array (
    array('400000', '서비스신청관리', ''.G5_ADMIN_URL.'/service/config_form.php', 'config'),
    array('400100', '서비스환경설정', ''.G5_ADMIN_URL.'/service/config_form.php', 'cf_basic'),
    array('400200', '품목정보관리', ''.G5_ADMIN_URL.'/service/itemInfoManagement.php', 'cf_basic'),
    array('400300', '배대지주소', ''.G5_ADMIN_URL.'/service/shippingAddr.php', 'cf_basic'),
    array('400400', '해운비관리', ''.G5_ADMIN_URL.'/service/shippingCostManagement.php', 'cf_basic'),
    array('400500', '포워딩신청내역New', ''.G5_ADMIN_URL.'/service/newForwardingRequestHistory.php', 'cf_basic'),
    array('400600', '시장조사신청내역', G5_ADMIN_URL.'/service/marketResearchRequestHistory.php', 'cf_basic'),
    array('400701', '배송대행신청내역', G5_ADMIN_URL.'/service/deliveryAgencyRequestHistory.php', 'cf_basic'),
    array('400702', '수입대행신청내역', G5_ADMIN_URL.'/service/importAgencyRequestHistory.php', 'cf_basic'),
    array('400703', '해운특송신청내역', G5_ADMIN_URL.'/service/specialSeaShippingRequestHistory.php', 'cf_basic'),
    array('400704', '포워딩신청내역', G5_ADMIN_URL.'/service/forwardingRequestHistory.php', 'cf_basic'),
    array('400705', '결제대행신청내역', G5_ADMIN_URL.'/service/paymentAgencyRequestHistory.php', 'cf_basic'),
    array('400706', '엑셀신청내역', G5_ADMIN_URL.'/service/exelRequestHistory.php', 'cf_basic'),
    array('400707', '노데이타', G5_ADMIN_URL.'/service/noData.php', 'cf_basic'),
);