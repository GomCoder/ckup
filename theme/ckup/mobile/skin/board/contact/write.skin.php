<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>


<article class="sub board_sec">

  <section id="bo_w" class="bo_top">
    <div class="main_wrap">

      <div class="sub_ttl">
        <img src="<?php echo G5_THEME_URL ?>/img/star.png" alt="">
        <h3 class="kor">문의하기</h3>
        <h3 class="eng">Contact Us</h3>
      </div>

      <div class="info_box board_box">
        <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="w" value="<?php echo $w ?>">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
          <div class="form_01 write_div cf">

              <ul class="bo_w_left">
                <li class="bo_w_input half">
                  <input class="input" type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required placeholder="회사(업체)명*">
                </li>
                <li class="bo_w_input half">
                  <input class="input" type="text" name="wr_1" value="<?php echo $write['wr_1'] ?>" id="wr_1" required placeholder="담당자 성함*">
                </li>
                <li class="bo_w_input half">
                  <input class="input" type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" required placeholder="이메일 주소*">
                </li>
                <li class="bo_w_input half">
                  <input class="input" type="text" name="wr_2" value="<?php echo $write['wr_2'] ?>" id="wr_2" required placeholder="전화번호*">
                </li>
                <li class="bo_w_input">
                  <textarea name="wr_content" required id="wr_content" placeholder="문의사항"><?php echo $write['wr_content'] ?></textarea>
                </li>
                <li class="contact_file_box bo_w_input">
                    <div class="file_wr">
                      <div>
                        <label class="ttl" for="file_name">파일 첨부</label>
                        <input class="file_name" id="file_name" value="최대 10MB 까지 가능합니다. 대용량 파일은 이메일로 보내주시길 바랍니다." disabled="disabled">
                      </div>
                      <div>
                        <label for="bf_file_1" class="lb_icon">파일 선택</label>
                        <input type="file" name="bf_file[]" id="bf_file_1" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
                      </div>
                    </div>
                </li>


              </ul>
          </div>

          <div class="order_check_box">
              <ul>
                <li>
                  <label class="label-cbx">
                    <label class="check_txt" for="wr_10">개인정보 수집 및 이용에 동의합니다.</label>
                    <input id="wr_10" name="wr_10" type="checkbox" class="invisible" value="동의함" />
                    <div class="checkbox">
                      <svg width="20px" height="20px" viewBox="0 0 20 20">
                        <path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
                        <polyline points="4 11 8 15 16 6"></polyline>
                      </svg>
                    </div>
                  </label>
                  <div class="popup">
                    자세히 보기
                  </div>
                </li>
              </ul>
          </div>

          <div class="order_sub_btn_box">
              <input type="submit" value="문의하기" id="btn_submit" class="write_btn" accesskey="s">
          </div>
          </form>
      </div>
    </div>

    <!-- 팝업 레이어 -->
    <div class="body_bg"></div>
    <div class="list-popup">
        <div class="list_pop_box">
            <div class="box_close">
              <span></span>
              <span></span>
            </div>
            <div class="pop_txt">
              <h4>개인정보처리방침</h4>
              <p class="pop_txt_ttl">1. 개인정보 수집 및 이용 목적</p>
              <p class="pop_txt_info">- 문의사항에 대한 상담을 위한 정보 제공 외에 어떠한 용도로도 사용되지 않습니다.</p>
              <p class="pop_txt_ttl">2. 수집하려는 개인 정보의 항목</p>
              <p class="pop_txt_info">- 성명, 연락처, 문의사항 (서비스 이용 기록, 접속 로그)</p>
              <p class="pop_txt_ttl">3. 개인정보의 보유 및 이용 기간</p>
              <p class="pop_txt_info">- 개인정보의 보유 기간은 5년입니다.</p>
              <p class="pop_txt_info">- 정보 제공자가 삭제를 원할 시 즉시 파기됩니다.</p>
              <p class="pop_txt_ttl">고객님의 정보는 이용 목적 외에 별도로 사용되지 않습니다.</p>
            </div>
        </div>
    </div>
    <!-- 팝업 레이어 -->

  </section>
</article>


<!-- slick -->
<script src="<?php echo G5_THEME_URL ?>/js/plugin/slick.min.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/js/plugin/slick.css">


<!-- 스크립트 -->

    <script type="text/javascript">

    $(document).ready(function(){
      var fileTarget = $('.file_wr .frm_file');

      fileTarget.on('change', function(){  // 값이 변경되면
        if(window.FileReader){  // modern browser
          var filename = $(this)[0].files[0].name;
        }
        else {  // old IE
          var filename = $(this).val().split('/').pop().split('\\').pop();  // 파일명만 추출
        }

        // 추출한 파일명 삽입
        $(this).parent().siblings('div').find('.file_name').val(filename);
      });
    });

    </script>

    <script>

        $(".list-popup_bg").hide();
        $(".list-popup").hide();

        $(".popup").click(function() {

			//$('html, body').css({"overflow-y": 'initial'});

            $(".list-popup").show();
			$(".body_bg").show();
			$('html').css({"overflow-y": 'hidden'});
			$("#top_btn").css({"opacity":"0"});
        })



        $(".box_close").click(function() {
            $(".list-popup").hide();
            $(".list-popup_bg").hide();
			$(".body_bg").hide();
			$('html').css({"overflow-y": 'inherit'});
			$("#top_btn").css({"opacity":"1"});
        });
    </script>
    <!-- //스크립트 -->


<script>

<?php if($write_min || $write_max) { ?>
// 글자수 제한
var char_min = parseInt(<?php echo $write_min; ?>); // 최소
var char_max = parseInt(<?php echo $write_max; ?>); // 최대
check_byte("wr_content", "char_count");

$(function() {
    $("#wr_content").on("keyup", function() {
        check_byte("wr_content", "char_count");
    });
});

<?php } ?>
function html_auto_br(obj)
{
    if (obj.checked) {
        result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
        if (result)
            obj.value = "html2";
        else
            obj.value = "html1";
    }
    else
        obj.value = "";
}

function fwrite_submit(f)
{

  if (!f.wr_10.checked) {
          alert("개인정보 수집 및 이용에 동의해주세요.");
          f.wr_10.focus();
          return false;
      }


    <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

    var subject = "";
    var content = "";
    $.ajax({
        url: g5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": f.wr_subject.value,
            "content": f.wr_content.value
        },
        dataType: "json",
        async: false,
        cache: false,
        success: function(data, textStatus) {
            subject = data.subject;
            content = data.content;
        }
    });



    if (subject) {
        alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
        f.wr_subject.focus();
        return false;
    }

    if (content) {
        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
        if (typeof(ed_wr_content) != "undefined")
            ed_wr_content.returnFalse();
        else
            f.wr_content.focus();
        return false;
    }

    if (document.getElementById("char_count")) {
        if (char_min > 0 || char_max > 0) {
            var cnt = parseInt(check_byte("wr_content", "char_count"));
            if (char_min > 0 && char_min > cnt) {
                alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                return false;
            }
            else if (char_max > 0 && char_max < cnt) {
                alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                return false;
            }
        }
    }

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}
</script>
<?php include_once(G5_THEME_MOBILE_PATH.'/pran_tail.php'); ?>
