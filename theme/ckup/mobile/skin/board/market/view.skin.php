<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<article id="bo_v" class="sub_inner form_inner">
  <div class="form_wrap">
    <div class="sub_contain">
      <div class="contain_box">
        <div class="ttl_box">
            <h3>시장조사 신청</h3>
        </div>

        <div class="guide_box2">
            <div class="box">
                <div class="info_box">
                    <p>
                        결제대행을 원하시는 분께서는 신청서작성하기 버튼을 클릭하셔서 필요한 내용 기재 후 하단에 <b>"제출하기"</b>를 클릭해주세요.<br>
                        <b>결제 완료 후 결제 영수증을 이메일로 전달드립니다.</b> 
                      </p>
                </div>
            </div>
        </div>   

        <div class="form_box">  
            <p class="date_txt">
                <span class="sound_only">작성일</span>
                신청일 : <?php echo date("y.m.d H:i", strtotime($view['wr_datetime'])) ?>   
            </p>    
            <ul class="list_box">                
                <li>
                    <div class="ttl_box">
                        <p>업체명</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_subject'] ?></p>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="ttl_box">
                        <p>담당자 성함</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_1'] ?></p>
                        </div>
                    </div>
                </li> 
                <li>
                    <div class="ttl_box">
                        <p class="sm">상담받으실 연락처</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_2'] ?></p>
                        </div>
                    </div>
                </li>
                <li class="split">
                    <div class="ttl_box">
                        <p class="sm">결제영수증 받으실<br> 이메일</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_3'] ?></p>
                        </div>
                    </div>
                </li>
                <li class="split">
                    <div class="ttl_box">
                        <p class="sm">중국업체명 <br><span>(영문 OR 중문)</span></p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_4'] ?></p>
                        </div>
                    </div>
                </li>
                <li class="split">
                    <div class="ttl_box">
                        <p>중국업체 담당자명</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_5'] ?></p>
                        </div>
                    </div>
                </li>                        
                <li class="split">
                    <div class="ttl_box">
                        <p>중국업체 연락처</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_6'] ?></p>
                        </div>
                    </div>
                </li> 
                <li class="split">
                    <div class="ttl_box">
                        <p>결제대행금액</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo $view['wr_7'] ?></p>
                        </div>
                    </div>
                </li>
                <li class="split">
                    <div class="ttl_box">
                        <p>결제정보 파일등록</p>
                        <p>Ex)계약서 or Invoice</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                        <?php
                        if ($view['file']['count']) {
                            $cnt = 0;
                            for ($i=0; $i<count($view['file']); $i++) {
                                if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'])
                                    $cnt++;
                            }
                        }
                        ?>

                        <?php if($cnt) { ?>
                            <?php
                            // 가변 파일
                            for ($i=0; $i<count($view['file']); $i++) {
                                if (isset($view['file'][$i]['source']) && $view['file'][$i]['source']) {
                            ?>
                                    <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                                        <i class="fas fa-file"></i>
                                        <strong><?php echo $view['file'][$i]['source'] ?></strong>
                                        <?php echo $view['file'][$i]['content'] ?> 
                                        <span>(<?php echo $view['file'][$i]['size'] ?>)</span> 
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        <?php } ?>
                        </div>                       
                    </div>
                </li>                         
                <li>
                    <div class="ttl_box">
                        <p>기타요청사항</p>
                    </div>
                    <div class="info_box">
                        <div class="input_box">
                            <p><?php echo get_view_thumbnail($view['wr_content']); ?></p>    
                        </div>
                    </div>
                </li>                          
            </ul>
        </div>

      </div>
    </div>

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

    <?php if ($prev_href || $next_href) { ?>
    <ul class="bo_v_nb">
        <?php if ($prev_href) { ?><li class="bo_v_prev"><a href="<?php echo $prev_href ?>"><i class="fa fa-chevron-up" aria-hidden="true"></i> <span class="sound_only">이전글</span><?php echo $prev_wr_subject;?></a></li><?php } ?>
        <?php if ($next_href) { ?><li class="bo_v_next"><a href="<?php echo $next_href ?>"><i class="fa fa-chevron-down" aria-hidden="true"></i> <span class="sound_only">다음글</span><?php echo $next_wr_subject;?></a></li><?php } ?>

    </ul>
    <?php } ?>


    <div id="bo_v_top">
        <ul class="bo_v_left">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="delete_btn"><i class="fas fa-eraser"></i> 수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="delete_btn" onclick="del(this.href); return false;"><i class="far fa-trash-alt"></i> 삭제</a></li><?php } ?>
        </ul>
        <div class="bo_v_right">
            <a href="<?php echo $list_href ?>" class="list_btn">목록</a>
            <?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="write_btn"><i class="fas fa-edit"></i> 결제대행 신청하기</a><?php } ?>

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

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
