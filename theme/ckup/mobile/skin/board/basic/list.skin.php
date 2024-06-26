<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 2;

if ($is_checkbox) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<article class="sub_ttl_box sub_ttl_box02">
  <h3>게시판</h3>
  <h4><?php echo $board['bo_subject'] ?></h4>
</article>

<article id="bo_list">
  <div class="main_wrap">
    <fieldset id="bo_sch">
        <legend>게시물 검색</legend>

        <form name="fsearch" method="get">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sop" value="and">
        <label for="sfl" class="sound_only">검색대상</label>
        <select name="sfl" id="sfl">
            <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
            <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
            <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
        </select>
        <input name="stx" value="<?php echo stripslashes($stx) ?>" placeholder="검색어(필수)" required id="stx" class="sch_input" size="15" maxlength="20">
        <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i> <span class="sound_only">검색</span></button>
        </form>
    </fieldset>


    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <div class="board_list">
        <?php if ($is_checkbox) { ?>
          <fieldset class="all_chk">
              <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="simple_chk">
              <label for="chkall">
                <span>전체선택</span>
              </label>
          </fieldset>
        <?php } ?>
        <ul>
            <?php
            for ($i=0; $i<count($list); $i++) {
            ?>
            <li class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>  <?php if ($is_category && $list[$i]['ca_name']) { ?>li_cate<?php } ?>">

                <?php
                if ($is_category && $list[$i]['ca_name']) {
                ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>
                <div class="bo_subject_box">

                    <?php if ($is_checkbox) { // 게시글별 체크박스 ?>
                    <fieldset for="chk_wr_id_<?php echo $i ?>" class="sel bo_chk li_chk">
                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="simple_chk">
                        <label for="chk_wr_id_<?php echo $i ?>">
                          <span class="sound_only"><?php echo $list[$i]['subject'] ?></span>
                        </label>
                    </fieldset>
                    <?php } ?>

                    <a href="<?php echo $list[$i]['href'] ?>" class="bo_subject">
                        <p><?php echo $list[$i]['subject'] ?></p>
                        <div class="bo_info">
                          <span class="sound_only">작성자</span><?php echo $list[$i]['name'] ?>
                          <span class="bo_date"> <i class="fa fa-clock-o"></i> <?php echo $list[$i]['datetime2'] ?></span>
                        </div>
                    </a>

                </div>


            </li><?php } ?>
            <?php if (count($list) == 0) { echo '<li class="empty_table">게시물이 없습니다.</li>'; } ?>
        </ul>
    </div>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
      <div class="bo_fx">
          <ul class="btn_bo_adm">
              <?php if ($list_href) { ?>
              <li><a href="<?php echo $list_href ?>" class="btn_b01 btn"> 목록</a></li>
              <?php } ?>
              <?php if ($is_checkbox) { ?>
              <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="delete_btn"><i class="far fa-trash-alt"></i> 선택삭제</button></li>
              <?php } ?>
          </ul>
          <?php if ($rss_href || $write_href) { ?>
          <ul class="btn_wr">
              <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="write_btn"><i class="fas fa-edit"></i> 글쓰기</a></li><?php } ?>
          </ul>
          <?php } ?>
      </div>
    <?php } ?>
    </form>
  </div>
</article>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages; ?>


<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- 게시판 목록 끝 -->
