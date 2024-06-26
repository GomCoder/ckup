<?php
include_once('../common.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<div class="sub_inner">
    <div id="mb_login">
        <h2>로그인</h2>
        <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post" id="flogin">
        <input type="hidden" name="url" value="<?php echo $login_url ?>">

        <div id="login_frm">
            <label for="login_id" class="sound_only">아이디<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="mb_id" id="login_id" placeholder="아이디(필수)" required class="frm_input required" maxLength="20">
            <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
            <input type="password" name="mb_password" id="login_pw" placeholder="비밀번호(필수)" required class="frm_input required" maxLength="20">
        <input type="submit" value="로그인" class="btn_submit btn">
        </div>

        <div class="login_btn_box">
            <a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">아이디/비밀번호 찾기</a>
            <a href="./register.php">회원가입</a>
        </div>

        </form>

    </div>
</div>


<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    if( $( document.body ).triggerHandler( 'login_sumit', [f, 'flogin'] ) !== false ){
        return true;
    }
    return false;
}
</script>


<?php include_once(G5_THEME_MOBILE_PATH.'/tail.php'); ?>
