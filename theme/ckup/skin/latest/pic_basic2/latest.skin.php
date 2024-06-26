<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

// 큰이미지 영역 및 썸네일 크기 설정
$big_thumb_width = 600;
$big_thumb_height = 600;

if($big_thumb_width && $big_thumb_height) {
	$big_img_height = ($big_thumb_height / $big_thumb_width) * 100;
} else {
	$big_img_height = '56.25';
}

// 큰이미지 제목줄
$big_subject_line = 1;
$big_subject_height = 26 * $big_subject_line + 2;

// 큰이미지 글내용 길이
$big_cut_txt = 100;

// 작은이미지 영역 및 썸네일 크기 설정
$thumb_width = 400;
$thumb_height = 400;

if($thumb_width && $thumb_height) {
	$img_height = ($thumb_height / $thumb_width) * 100;
} else {
	$img_height = '56.25';
}

// 작은이미지 제목줄
$subject_line = 1;
$subject_height = 22 * $subject_line + 2;

// 작은이미지 글내용 길이
$cut_txt = 80;

// 작은이미지 글내용 출력(1:출력|0:숨김)
$is_content = 0;

// 추출개수
$list_count = (is_array($list) && $list) ? count($list) : 0;

// 배경색상 랜덤
$bg_red = array("bg-red", "bg-orangered", "bg-green", "bg-blue", "bg-purple", "bg-yellow", "bg-navy");

?>

<div class="pic_mix_lt pic_mix_lt2">
	<div class="pic_mix_lt_row">
		<div class="pic_mix_lt_col">

			<ul class="">
				<?php
				for ($i=0; $i<$list_count; $i++) {
					$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

					if($thumb['src']) {
						$img = $thumb['src'];
					} else {
						$img = G5_IMG_URL.'/no_img.png';
						$thumb['alt'] = '이미지가 없습니다.';
					}
					$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
					$wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
				?>
				<li class="galley_li post-small-style">
					<div class="img-wrap post-thumb img-hover-scale thumb-overlay">
						<div class="img-item">
							<a href="<?php echo $wr_href; ?>">
								<?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
							</a>
							<?php if($list[$i]['ca_name']){ ?>
							<div class="post-content-overlay entry-meta meta-0 transition-ease-04">
								<a href="<?php echo $wr_href; ?>"><span class="post-cat <?php echo $bg_red[rand(0, 6)];?>"><?php echo $list[$i]['ca_name'];?></span></a>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="title">
						<div class="item">
							<a href="<?php echo $wr_href; ?>" class="post-title" style="height:<?php echo $subject_height;?>px;">
								<?php echo $list[$i]['subject'] ?>
							</a>
						</div>
					</div>
				</li>
				<?php }  ?>
				<?php if ($list_count == 0) { //게시물이 없을 때  ?>
				<li class="empty_li">게시물이 없습니다.</li>
				<?php }  ?>
			</ul>

		</div>
	</div>

</div>
