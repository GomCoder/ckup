<!-- 배송대행신청 페이지(일반) -->
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
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

    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">HTML</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>
    <!-- 시작 -->
    <div class="sub_inner form_inner form_contain">
    <div class="form_wrap">
        
        <div class="sub_contain">
            <div class="contain_box">
                <div class="ttl_box">
                    <h3>배송대행 신청</h3>
                </div>

                <!-- guide -->
                <div class="guide_box">
                    <div class="box">
                        <h4>배송대행 신청 유의사항</h4>
                        <ul class="info_box">
                            <li>
                                <span>01.</span>
                                <span>본 배송대행 신청 내용은 수입신고서로 자동변환 되어 세관신고에 100% 반영 됩니다. </span>
                                <p>※ 허위 또는 오류 작성으로 인한 불이익은 배송대행 신청인에게 귀속되므로 반드시 정확하게 작성바랍니다.</p>
                            </li>
                            <li>
                                <span>02.</span>
                                <span>배송대행 신청서 작성 시 구매상품 외 샘플 및 사은품을 빠짐없이 기재바랍니다.</span>
                                <p>※ 세관검사 시 신고누락으로 인한 불이익에 대해 책임지지 않습니다.</p>
                            </li>
                            <li>
                                <span>03.</span>
                                <span>배송대행 신청서 작성 시 상품명(영어)을 미 기재할 경우 접수가 되지 않으므로 반드시 누락없이 정확하게 작성바랍니다.</span>
                                <p>※ 부정확한 상품명(영어) 기재로 세관으로부터 수입신고 정정조치를 받는 경우 80,000원의 과태료가 부과되며 세관 검사율이 상향조정될 수 있습니다.</p>
                            </li>
                            <li>
                                <span>04.</span>
                                <span>수입 요건품목/수입 금지품목/상표 및 지재권 침해 등의 상품은 통관이 되지 않는 제품이니 반드시 확인 후 주문바랍니다.</span>
                                <p>※ KC인증이 필요한 상품 : 개인자가사용 목적 또는 사업자 KC인증용 샘플(전기, 전파, 완구 등)의 경우에만 통관 가능합니다.</p>
                                <p>※ 식품용기류 : 식약청 검사에 합격한 상품에 한해 통관 가능합니다. (샘플통관은 없으며, 100KG 이상 국내 반입 후 식약처 정밀 검사진행 필요)</p>
                                <p>※ 식물 : 식물검역에 의해 폐기될 수 있으니 수입 전 반드시 문의바랍니다.</p>
                                <p>※ 통관 부적합으로 인해 상품이 폐기되는 경우 세관 지정업체를 통해서만 폐기가 가능하며, 이때 최소 폐기비용 180,000원이 부과되오니 주의바랍니다. </p>
                            </li>
                            <li>
                                <span>05.</span>
                                <span>중국배송대행 상품은 여러 단계(중국내륙/해상/국내택배 운송 등)를 거쳐 수입되기 때문에 파손보상이 불가능함을 양해 부탁드립니다.</span>
                                <p>※ 취급주의 상품(유리, 레진완성품, 도자기류 등)의 경우 중국판매자에게 출고 시 포장강화 및 파손주의 스티커 부착을 반드시 요청하셔야 합니다. </p>
                            </li>
                            <li>
                                <span>06.</span>
                                <span>상품이미지 등록 시 가능한 고화질 파일로 반드시 첨부바랍니다.</span>
                                <p>※ 이미지 미등록으로 인한 불이익은 책임지지 않습니다. 상품 이미지는 파일첨부(250*250, 500KB 이하) 또는 이미지링크 입력 중 선택하여 등록이 가능합니다.</p>
                            </li>
                            <li>
                                <span>07.</span>
                                <span>중국운송장정보는 배송대행 신청서 저장 후 "마이페이지→배송대행 내역조회→신청서보기" 접속 후 수정이 가능하며 반드시 정보를 업데이트해주셔야 합니다.</span>
                                <p>※ 운송장 번호가 부정확한 경우 또는 미작성된 경우, 입고 및 출고가 늦어지며 분실 위험이 있습니다.</p>
                            </li>
                            <li>
                                <span>08.</span>
                                <span>출고박스수량은 판매자로부터 확인 후 반드시 정확하게 작성바랍니다.</span>
                                <p>※ 판매자가 구매자에게 고지 없이 1개 제품을 2번 나누어 발송하는 경우가 발생할 수 있습니다.</p>
                            </li>
                            <li>
                                <span>09.</span>
                                <span>배송대행 신청서 작성방법 선택 시 배송 업체수 10개 이하의 경우 "직접입력" 또는 "자동변환등록"을, 배송 업체수 10개 이상의 경우 "엑셀등록"으로 선택 후 작성바랍니다.</span>
                                <p>※ 단일 운송장 정보에 여러 품목이 들어있는 경우 "엑셀등록"을 권장합니다. </p>
                            </li>
                            <li>
                                <span>10.</span>
                                <span>상품수령 후 오배송 및 불량이있는 경우 판매자가 반품 또는 교환요청 수락 시 "핸드케리어"로 반품 진행을 도와드립니다. </span>
                                <p>※ 이때 발생된 경비(현지운송료+국제운송료)와 발생할 경비(반품의 경우 국제운송료, 교환의 경우 왕복 국제운송료)는 신청인이 부담해야 합니다.</p>
                            </li>
                        </ul>
                        <p class="hl">신청서 접수없이 배대지로 입고되는 NO DATA 화물은 분실책임이 없고 출고가 지연되는 점 양해 부탁드립니다.</p>
                    </div>
                    <div class="input_box">
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
                    </div>
                </div>

                <!-- form -->
                <form class="form_contain">

                    <!-- 1 -->
                    <div class="form_box form01">
                        <h4><b>01.</b> 받는 사람의 정보를 입력하세요.</h4>
                        <ul class="list_box">
                            <li class="split">
                                <div class="ttl_box">
                                    <p>받는사람</p>
                                </div>
                                <ul class="info_box">
                                    <li>
                                        <p>한글이름</p>
                                        <div class="input_box">
                                            <input type="text">
                                        </div>
                                    </li>
                                    <li>
                                        <p>영어이름</p>
                                        <div class="input_box">
                                            <input type="text">
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <div class="ttl_box">
                                    <p>받는사람정보</p>
                                </div>
                                <div class="info_box">
                                    <div>
                                        <ul class="selec_box">
                                            <li>
                                                <input type="radio" name="radio_01" id="radio_01_01">
                                                <label for="radio_01_01">개인통관고유부호</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="radio_01" id="radio_01_02">
                                                <label for="radio_01_02">사업자등록번호</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <div class="input_box">
                                            <input type="text">
                                        </div>
                                        <p>※ 개인특송은 <b>자가 사용목적으로 USD150 이하</b> 로는 <u>면세 적용이 됩니다.</u></p>
                                    </div>
                                </div>
                            </li>                           

                            <li>
                                <div class="ttl_box">
                                    <p>주소</p>
                                </div>
                                <div class="info_box">
                                    <div>
                                        <input type="text" placeholder="우편번호">
                                        <button class="main_btn">주소검색</button>
                                    </div>
                                    <input type="text" placeholder="기본주소">
                                    <input type="text" placeholder="상세주소">
                                    <input type="text" placeholder="참고항목">
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
                                    <p>배송요청사항</p>
                                </div>
                                <div class="info_box">
                                    <div class="input_box">
                                        <textarea name="" id="" placeholder="배송요청사항을 입력해주세요."></textarea>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- 2 -->
                    <div class="form_box form02">
                        <h4><b>02.</b> 중국배대지를 선택해주세요.</h4>
                        <div class="inner">
                            <ul class="tab_box bb">
                                <li class="br">                        
                                    <label for="radio_02_01">
                                        <input type="radio" name="radio_02" id="radio_02_01">
                                        <p>사업자 해상운송</p>  
                                    </label>
                                </li>
                                <li>
                                    <label for="radio_02_02">
                                        <input type="radio" name="radio_02" id="radio_02_02">
                                        <p>개인 특송운송</p> 
                                    </label>
                                </li>
                            </ul>
                            <ul class="info_box">
                                <li class="br">                           
                                    <label for="radio_03_01">
                                        <input type="radio" name="radio_03" id="radio_03_01">
                                        <p>광동성 광주(廣州)</p>
                                        <p>인천도착 +4일</p>
                                    </label>          
                                </li>
                                <li class="br">                           
                                    <label for="radio_03_02">
                                        <input type="radio" name="radio_03" id="radio_03_02">
                                        <p>저장성 이우(义乌)</p>
                                        <p>인천도착 +3일</p>
                                    </label>          
                                </li>
                                <li>                           
                                    <label for="radio_03_03">
                                        <input type="radio" name="radio_03" id="radio_03_03">
                                        <p>산동성 위해(威海)</p>
                                        <p>인천도착 +2일</p>
                                    </label>          
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="form_box form03">
                        <h4><b>03.</b> 원산지증명서 발급(한중 CO) 신청여부를 확인해주세요.</h4>
                        <ul class="list_box">
                            <li>
                                <div class="ttl_box">
                                    <p>CO발급옵션</p>
                                </div>
                                <div class="info_box">
                                    <div>
                                        <ul class="selec_box">
                                            <li>
                                                <input type="radio" name="radio_05" id="radio_05_01">
                                                <label for="radio_05_01">선택안함</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="radio_05" id="radio_05_02">
                                                <label for="radio_05_02">한중 원산지 증명발급 <b>(+66,000원)</b></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>※ 한중 원산지 증명서 발급은 수수료 포함 관세가 절감되는 경우만 발급 받으면 됩니다.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- 4 -->
                    <div class="form_box form04">
                        <h4><b>04.</b> 통화유형을 선택해 주세요.</h4>
                        <ul class="list_box">
                            <li>
                                <div class="ttl_box">
                                    <p>통화유형선택</p>
                                </div>
                                <div class="info_box">
                                    <div>
                                        <ul class="selec_box no_border">
                                            <li>
                                                <input type="radio" name="radio_06" id="radio_06_01">
                                                <label for="radio_06_01">CNY(중국)</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="radio_06" id="radio_06_02">
                                                <label for="radio_06_02">USD(미국)</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="radio_06" id="radio_06_03">
                                                <label for="radio_06_03">VND(베트남)</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="radio_06" id="radio_06_04">
                                                <label for="radio_06_04">KRW(한국)</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="radio_06" id="radio_06_05">
                                                <label for="radio_06_05">ECU(유럽)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- 5 -->
                    <div class="form_box form05 form06">
                        <h4><b>05.</b> 배송대행 신청서 작성방법을 선택해주세요.</h4>
                        <ul class="list_box">
                            <li class="br">
                                <p>직접입력</p>
                                <p>
                                    배송신청 건수가 소량인 경우
                                </p>
                                <div>
                                    <button>직접입력하기</button>
                                </div>
                            </li>
                            <li>
                                <p>엑셀등록</p>
                                <p>
                                    배송신청건수가 많은 경우,
                                    1개 주문에 아이템이 많은 경우
                                </p>
                                <div>
                                    <button>엑셀등록하기</button>
                                </div>
                            </li>                            
                        </ul>
                    </div>
                    
                    <div class="btn_box">
                        <input class="main_btn" type="submit" value="저장하기" >
                        <a class="sub_btn" href="">미리보기</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>









    <?php if ($is_category) { ?>
    <div class="bo_w_select write_div">
        <label for="ca_name"  class="sound_only">분류<strong>필수</strong></label>
        <select name="ca_name" id="ca_name" required>
            <option value="">분류를 선택하세요</option>
            <?php echo $category_option ?>
        </select>
    </div>
    <?php } ?>

    <div class="bo_w_info write_div">
    <?php if ($is_name) { ?>
        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
        <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" placeholder="이름">
    <?php } ?>

    <?php if ($is_password) { ?>
        <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
        <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" placeholder="비밀번호">
    <?php } ?>

    <?php if ($is_email) { ?>
            <label for="wr_email" class="sound_only">이메일</label>
            <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email " placeholder="이메일">
    <?php } ?>
    </div>

    <?php if ($is_homepage) { ?>
    <div class="write_div">
        <label for="wr_homepage" class="sound_only">홈페이지</label>
        <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input full_input" size="50" placeholder="홈페이지">
    </div>
    <?php } ?>

    <?php if ($option) { ?>
    <div class="write_div">
        <span class="sound_only">옵션</span>
        <?php echo $option ?>
    </div>
    <?php } ?>

    <div class="bo_w_tit write_div">
        <label for="wr_subject" class="sound_only">제목<strong>필수</strong></label>
        
        <div id="autosave_wrapper write_div">
            <input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
            <?php if ($is_member) { // 임시 저장된 글 기능 ?>
            <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
            <?php if($editor_content_js) echo $editor_content_js; ?>
            <button type="button" id="btn_autosave" class="btn_frmline">임시 저장된 글 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
            <div id="autosave_pop">
                <strong>임시 저장된 글 목록</strong>
                <ul></ul>
                <div><button type="button" class="autosave_close">닫기</button></div>
            </div>
            <?php } ?>
        </div>
        
    </div>

    <div class="write_div">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
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
        
    </div>

    <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
    <div class="bo_w_link write_div">
        <label for="wr_link<?php echo $i ?>"><i class="fa fa-link" aria-hidden="true"></i><span class="sound_only"> 링크  #<?php echo $i ?></span></label>
        <input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input full_input" size="50">
    </div>
    <?php } ?>

    <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-download" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
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


    <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>


    <div class="btn_confirm write_div">
        <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel btn">취소</a>
        <input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn_submit btn">
    </div>
    </form>

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
</section>
<!-- } 게시물 작성/수정 끝 -->