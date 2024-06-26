<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<article class="sub_ttl_box sub_ttl_box04">
  <h3>회원 관리</h3>
  <h4>회원가입</h4>
</article>

<div id="reg_result">
    <p>회원가입이 완료되었습니다.</p>
    <div class="reg_result_wr">
        <p class="reg_cong">
            <strong><?php echo get_text($mb['mb_name']); ?></strong> 님의 회원가입을 환영합니다.<br>
        </p>

        <?php if (is_use_email_certify()) { ?>
        <p>
            회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
            발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
        </p>
        <div id="result_email">
            <span>아이디</span>
            <strong><?php echo $mb['mb_id'] ?></strong><br>
            <span>이메일 주소</span>
            <strong><?php echo $mb['mb_email'] ?></strong>
        </div>
        <p>
            이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
        </p>
        <?php } ?>


    </div>

     <a class="reg_result_btn" href="<?php echo G5_URL ?>/">메인으로</a>

</div>
