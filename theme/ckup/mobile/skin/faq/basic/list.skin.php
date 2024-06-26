<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<article class="sub_ttl_box sub_ttl_box01">
  <h3>교수협의회</h3>
  <h4>정관</h4>
</article>

<article class="sub_art">
  <div class="main_wrap">
    <div class="board_box">
       <?php if( count($faq_list) ){ ?>
        <div id="faq_con">
            <ul>
                <?php foreach($faq_list as $key=>$v){
                if(empty($v)) continue; ?>
                <li>
                  <div class="faq_q_a">
                    <div class="left_box">
                      <?php echo conv_content($v['fa_subject'], 1); ?>
                    </div>
                    <div class="right_box">
                      <div class="plus">
                        <div></div>
                        <div></div>
                      </div>
                    </div>
                  </div>
                  <div class="con_inner">
                    <div class="left_box">
                      <?php echo conv_content($v['fa_content'], 1); ?>
                    </div>
                  </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <?php

        } else {
            if($stx){
                echo '<p class="empty_list">검색된 게시물이 없습니다.</p>';
            } else {
                echo '<div class="empty_table">등록된 정관이 없습니다.';
                if($is_admin)
                    echo '<br><a href="'.G5_ADMIN_URL.'/faqmasterlist.php">정관을 새로 등록하시려면 정관 관리</a> 메뉴를 이용하십시오.';
                echo '</div>';
            }
        }
        ?>
    </div>
  </div>
</article>

<script type="text/javascript">
$(function() {
    $(".faq_q_a").on("click", function() {
        $(this).siblings(".con_inner").slideToggle();
        $(this).toggleClass('active');
    });
});
</script>
<?php include_once(G5_THEME_MOBILE_PATH.'/tail.php'); ?>
