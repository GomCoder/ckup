<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<div class="lat">
    <h2 class="lat_title"><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
    <ul>
      <?php for ($i=0; $i<count($list); $i++) {  ?>
          <li>
            <a href="<?php echo $list[$i]['href'] ?>">
              <span class="ttl"><?php echo $list[$i]['subject']; ?></span>
              <span class="date"><?php echo $list[$i]['datetime']; ?></span>
            </a>
          </li>
      <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 12없습니다.</li>
    <?php }  ?>
    </ul>
    <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only"> 더보기</span></a>

</div>
