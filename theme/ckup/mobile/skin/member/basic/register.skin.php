<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<div class="sub_inner">
    <div class="mb_box">

        <?php
        // 소셜로그인 사용시 소셜로그인 버튼
        @include_once(get_social_skin_path().'/social_register.skin.php');
        ?>

        <form name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

        <section id="fregister_term">
            <h2>회원가입약관</h2>
            <textarea readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>

            <div class="register_chk">
            <input type="checkbox" name="agree" value="1" id="agree11" class="simple_chk">
            <label for="agree11">회원가입약관의 내용에 동의합니다.</label>
            </div>
        </section>

        <section id="fregister_private">
            <h2>개인정보처리방침안내</h2>
            <div class="tbl_head01 tbl_wrap">
                <table>
                    <caption>개인정보처리방침안내</caption>
                    <thead>
                    <tr>
                        <th colspan="2">목적</th>
                    </tr>
                    <tr>
                        <th>항목</th>
                        <th>보유기간</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td  colspan="2">이용자 식별 및 본인여부 확인</td>
                    </tr>
                    <tr>
                        <td>아이디, 이름, 비밀번호</td>
                        <td>회원 탈퇴 시까지</td>
                    </tr>
                    <tr>
                        <td colspan="2">고객서비스 이용에 관한 통지,<br>CS대응을 위한 이용자 식별</td>
                    </tr>
                    <tr>
                        <td>연락처 (이메일, 휴대전화번호)</td>
                        <td>회원 탈퇴 시까지</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="register_chk">
            <input type="checkbox" name="agree2" value="1" id="agree21" class="simple_chk">
            <label for="agree21">개인정보처리방침안내의 내용에 동의합니다.</label>
            </div>
        </section>

        <div class="register_chk all_chk_box">
        <input type="checkbox" name="chk_all" id="chk_all" class="simple_chk">
        <label for="chk_all"><span class="chk_img"></span> 전체동의</label>
        </div>

        <div class="btn_wr">
            <input type="submit" class="btn btn_submit" value="회원가입">
        </div>

        </form>

        <script>
        function fregister_submit(f)
        {
            if (!f.agree.checked) {
                alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
                f.agree.focus();
                return false;
            }

            if (!f.agree2.checked) {
                alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
                f.agree2.focus();
                return false;
            }

            return true;
        }

        jQuery(function($){
            // 모두선택
            $("input[name=chk_all]").click(function() {
                if ($(this).prop('checked')) {
                    $("input[name^=agree]").prop('checked', true);
                } else {
                    $("input[name^=agree]").prop("checked", false);
                }
            });
        });
        </script>

    </div>
</div>

