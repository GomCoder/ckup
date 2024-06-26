<?php
$current_page = basename($_SERVER['PHP_SELF']);

$guides = [];
for ($i = 1; $i <= 18; $i++) {
    $guides[] = 'guide' . str_pad($i, 2, '0', STR_PAD_LEFT) . '.php';
}

$current_guide_index = array_search($current_page, $guides);

// 메뉴이름
$guide_texts = [
    "배송대행 이용방법",
    "수입대행 이용방법",
    "FCL 풀컨 이용방법",
    "결제대행 이용방법",
    "시장조사 이용방법",
    "포워딩견적 이용방법",
    "추가서비스 이용방법",
    "마이페이지 이용방법",
    "이용요금표",
    "중국 입고 주소",
    "해상특송과 항공특송",
    "수입 전 확인사항",
    "상표권 침해여부 확인사항",
    "수입통관 절차",
    "수입화물 통관정보 조회",
    "HS코드 조회",
    "FTA 원산지 증명서 발급",
    "포워딩 용어정리"
];

?>

<div class="sub_lnb guide_lnb">
    <div class="sub_lnb_box">
        <h2>이용안내</h2>
        <ul>
            <?php for ($i = 0; $i < count($guides); $i++) { ?>
                <li <?php if ($current_guide_index === $i) echo 'class="active"'; ?>>
                    <a href="<?php echo G5_URL ?>/page/<?php echo $guides[$i]; ?>"><?php echo $guide_texts[$i]; ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>