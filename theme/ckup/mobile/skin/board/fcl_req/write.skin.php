<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<article class="sub_ttl_box sub_ttl_box02">
  <h3>게시판</h3>
  <h4><?php echo $board['bo_subject'] ?></h4>
</article>


<article id="bo_w">
  <div class="main_wrap">
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



    <div class="sub_inner form_inner form_contain">
    <div class="form_wrap">
        
        <div class="sub_contain">
            <div class="contain_box">
                <div class="ttl_box">
                    <h3>FCL 컨테이너 선적요청서</h3>
                </div>           

                    <!-- 1 -->
                    <div class="form_box">
                        <h4><b>01.</b> 선적 예약자정보를 입력하세요. <span>✅ 회원가입정보</span></h4>                       
                        <ul class="list_box">                
                            <li>
                                <div class="ttl_box">
                                    <p>업체명</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p>연락처</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p>이메일</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ttl_box">
                                    <p>담당자</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>                       
                        </ul>
                    </div>

                    <!-- 2 -->
                    <div class="form_box">
                        <h4><b>02.</b> 선적 내용을 입력하세요. <span>✅ 선적요청정보</span></h4>                       
                        <ul class="list_box">                
                            <li>
                                <div class="ttl_box">
                                    <p>출발항</p>
                                    <p>중국</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p>도착항</p>
                                    <p>한국</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p>거래조건</p>
                                    <p>수출자 인도조건</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ttl_box">
                                    <p>컨테이너사이즈</p>
                                    <p>20FT/40DR/40HC</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ttl_box">
                                    <p>컨테이너수량</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>                        
                        </ul>
                    </div>

                    <!-- 3 -->
                    <div class="form_box">
                        <h4><b>03.</b> 수출자 정보를 입력하세요. <span class="red">📌필수</span></h4>                       
                        <ul class="list_box">                
                            <li>
                                <div class="ttl_box">
                                    <p>수출자 상호</p>
                                    <p>영문 또는 중문</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p>수출자 주소</p>
                                    <p>영문 또는 중문</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p>담당자 이름 </p>
                                    <p>영문 또는 중문</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ttl_box">
                                    <p>연락처</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ttl_box">
                                    <p>공장출고 예정일</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="date">
                                    </div>
                                </div>
                            </li>
                            <li class="split">
                                <div class="ttl_box">
                                    <p class="sm">계약 및 선적서류 첨부<br> <span>PI/CI/PL/CO</span></p>
                                </div>
                                <ul class="info_box file_box">
                                    <li class="input_box">
                                        <p>PI</p>
                                        <input type="file">
                                    </li>
                                    <li class="input_box">
                                        <p>CI</p>
                                        <input type="file">
                                    </li>
                                    <li class="input_box">
                                        <p>PL</p>
                                        <input type="file">
                                    </li>
                                    <li class="input_box">
                                        <p>CO</p>
                                        <input type="file">
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="ttl_box">
                                    <p>기타요청사항</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <textarea name="" id="" placeholder="기타요청사항을 입력해주세요."></textarea>
                                    </div>
                                </div>
                            </li>                          
                        </ul>
                    </div>

                    <!-- 4 -->
                    <div class="form_box">
                        <h4><b>04.</b> 스케쥴 정보를 입력하세요. <span>✅ 관리자</span></h4>                       
                        <ul class="list_box">                
                            <li>
                                <div class="ttl_box">
                                    <p class="sm">CARGO READY<br> 제품 생산일</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p class="sm">VESSEL 항선명</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li> 
                            <li>
                                <div class="ttl_box">
                                    <p>ETD 출항일</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ttl_box">
                                    <p>ETA 입항일</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <input type="text">
                                    </div>
                                </div>
                            </li>                       
                        </ul>
                    </div>


                    
                    <div class="btn_box">
                        <input class="main_btn" type="submit" value="부킹">
                        <a class="sub_btn" href="<?php echo G5_URL ?>">취소</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


    <div class="form_01 write_div">
        <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

        <div class="bo_w_tit write_div">
            <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" placeholder="제목">
        </div>

        <div class="write_div">
            <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>


        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
        <div class="bo_w_flie write_div">
            <div class="file_wr write_div">
                <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only">파일 #<?php echo $i+1 ?></span></label>
                <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
            </div>
            <?php if ($is_file_content) { ?>
            <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
            <?php } ?>

            <?php if($w == 'u' && $file[$i]['file']) { ?>
            <span class="file_del">
                <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
            </span>
            <?php } ?>

        </div>
        <?php } ?>

    </div>

    <div class="write_div">
        <a href="<?php echo get_pretty_url($bo_table); ?>" class="delete_btn">취소</a>
        <input type="submit" value="작성완료" id="btn_submit" class="write_btn" accesskey="s">
    </div>
    </form>
  </div>
</article>

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

    <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}
</script>
