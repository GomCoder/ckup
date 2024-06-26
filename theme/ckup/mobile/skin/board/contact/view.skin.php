<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>


<article id="bo_v" class="bo_top">
  <div class="main_wrap">
    <div class="info_box">
      <section id="bo_v_atc">
        <p class="top_ttl">문의주셔서 감사합니다.<br> 빠른 시일내로 연락드리겠습니다.</p>
          <ul>
            <li>
              <p class="bo_v_ttl">회사(업체)명</p>
              <p class="bo_v_txt"><?php echo $view['wr_name'] ?></p>
            </li>
            <li>
              <p class="bo_v_ttl">담당자 성함</p>
              <p class="bo_v_txt"><?php echo $view['wr_1'] ?></p>
            </li>
            <li>
              <p class="bo_v_ttl">이메일 주소</p>
              <p class="bo_v_txt"><?php echo $view['wr_email'] ?></p>
            </li>
            <li>
              <p class="bo_v_ttl">전화번호</p>
              <p class="bo_v_txt"><?php echo $view['wr_2'] ?></p>
            </li>
            <li>
              <p class="bo_v_ttl">문의사항</p>
              <p class="bo_v_txt"><?php echo get_view_thumbnail($view['content']); ?></p>
            </li>
            <li>
              <p class="bo_v_ttl">개인정보 수집 및 이용</p>
              <p class="bo_v_txt"><?php echo $view['wr_10'] ?></p>
            </li>
          </ul>


          <?php
         // 파일 출력
         $v_img_count = count($view['file']);
         if($v_img_count) {
             echo "<div id=\"bo_v_img\">\n";
             for ($i=0; $i<=count($view['file']); $i++) {
                 if ($view['file'][$i]['view']) {
                     //echo $view['file'][$i]['view'];
                     echo get_view_thumbnail($view['file'][$i]['view']);
                 }
             }

             echo "</div>\n";
         }
          ?>

          <?php
          if ($view['file']['count']) {
              $cnt = 0;
              for ($i=0; $i<count($view['file']); $i++) {
                  if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                      $cnt++;
              }
          }
           ?>

          <?php if($cnt) { ?>
          <section id="bo_v_file">
              <h2>첨부파일</h2>
              <ul>
              <?php
              // 가변 파일
              for ($i=0; $i<count($view['file']); $i++) {
                  if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
               ?>
                  <li>
                      <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                          <i class="fa fa-download" aria-hidden="true"></i>
                          <strong><?php echo $view['file'][$i]['source'] ?></strong>
                          <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                      </a>
                      <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span> |
                      <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
                  </li>
              <?php
                  }
              }
               ?>
              </ul>
          </section>
          <?php } ?>


      </section>


      <div id="bo_v_top">
          <ul class="bo_v_left">
              <?php if ($is_admin) { ?><li><a href="<?php echo $delete_href ?>" class="delete_btn" onclick="del(this.href); return false;"><i class="far fa-trash-alt"></i> 삭제</a></li><?php } ?>
          </ul>
          <div class="bo_v_right">
              <?php if ($is_admin) { ?><a href="<?php echo $list_href ?>" class="list_btn">목록</a><?php } ?>
          </div>
      </div>
    </div>
  </div>
</article>

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<!-- 게시글 보기 끝 -->


<?php include_once(G5_THEME_MOBILE_PATH.'/pran_tail.php'); ?>
