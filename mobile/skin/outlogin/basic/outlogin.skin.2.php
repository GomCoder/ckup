<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 후 외부로그인 시작 -->
<aside id="ol_after" class="ol">
    <h2>나의 회원정보</h2>
    <div id="ol_after_hd">
        <span class="profile_img">
            <!--<?php echo get_member_profile_img($member['mb_id']); ?>  -->

        </span>
        <div class="mb_nick">
            <strong><?php echo $nick ?>님</strong>
            <p>오신 것을 환영합니다.</p>
        </div>

        <div id="ol_after_btn">
            <ul>
                <div class="ol_after_menu_btn">
                    <li><?php if ($is_admin == 'super' || $is_auth) { ?><a href="<?php echo G5_ADMIN_URL ?>"class="btn_admin_page"><span class="sound_inly">관리자페이지</span> </a><?php } ?></li>
                    <li><a href="http://pf.kakao.com/_YlmSG/chat" target="_blank"> <span>1:1 문의</span></a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info"><span>회원정보수정</span></a></li>
                </div>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php" id="ol_after_logout">로그아웃</a></li>
            </ul>
        </div>
    </div>


</aside>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave() {
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>

<style>

.mb_nick {
    font-size: 1.6rem;
    color: blue;
    text-align: center;
}

.mb_nick p {
    color: black;
}

.ol h2 {
    font-size: 1.6rem;
}

.sound_only {
    background-color: blue;
}

#ol_after_btn #ol_after_logout{
    margin-top:10px;
    width: 100%;
    height: 50px;
    border-radius: 10px;
    background-color: var(--main-color);
    color: #fff;
    font-size: 1.8rem;
    font-weight: 600;
    text-align: center;
}

#ol_after_btn li a{
    width: 100%;
    height: 50px;
    border-radius: 10px;
    border: 1px solid black;
    font-size: 1.8rem;
    font-weight: 400;
    text-align: center;    
    margin: 0px auto;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.ol_after_menu_btn {
    display: flex;
    justify-content: space-around;
}
.ol_after_menu_btn li {
    margin-top: 10px;
    width: 100%;
  text-align: center;
}


</style>
<!-- 로그인 후 외부로그인 끝 -->