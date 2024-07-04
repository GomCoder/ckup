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
                    <h3>구매대행 신청</h3>
                </div>

                <!-- guide -->
                <div class="guide_box">
                    <div class="box">
                        <h4>구매대행 신청 유의사항</h4>
                        <ul class="info_box">
                            <li>
                                <span>01.</span>
                                <span>본 수입대행 신청 내용은 수입신고서로 자동변환 되어 세관신고에 100% 반용 됩니다.</span>
                                <p>※ 허위 또는 오류 작성으로 인한 불이익은 수입대행 신청인에게 귀속되므로 반드시 정확하게 작성바랍니다.</p>
                            </li>
                            <li>
                                <span>02.</span>
                                <span>구매대행 신청서 작성 시 구매상품 외 샘플 및 사은품을 빠짐없이 기재바랍니다.</span>
                                <p>※ 세관검사 시 신고누락으로 인한 불이익에 대해 책임지지 않습니다.</p>
                            </li>
                            <li>
                                <span>03.</span>
                                <span>구매대행 신청서 작성 시 상품명(영어)을 미기재할 경우 접수가 되지 않으므로 반드시 정확하게 작성바랍니다.</span>
                                <p>※ 부정확한 상품명(영어) 기재로 세관으로부터 수입신고 정정조치를 받는 경우 80,000원의 과태료가 부과되며 세관 검사율이 상향조정될 수 있습니다.</p>
                            </li>
                            <li>
                                <span>04.</span>
                                <span>수입요건 품목/수입금지 품목/상표 및 지재권 침해 등의 상품은 통관이 되지 않는 제품이니 반드시 확인 후 주문바랍니다.</span>
                                <p>※ KC인증이 필요한 상품 : 개인자가사용 목적 또는 사업자 KC인증용 샘플(전기, 전파, 완구 등)의 경우에만 통관 가능합니다.</p>
                                <p>※ 식품용기류 : 식약청 검사에 합격한 상품에 한해 통관 가능합니다. (샘플통관은 없으며, 100KG 이상 국내 반입 후 식약처 정밀 검사진행 필요)</p>
                                <p>※ 식물 : 식물검역에 의해 폐기될 수 있으니 수입 전 반드시 문의바랍니다.</p>
                                <p>※ 통관 부적합으로 인해 상품이 폐기되는 경우 세관 지정업체를 통해서만 폐기가 가능하며, 이때 최소 폐기비용 180,000원이 부과되오니 주의바랍니다. </p>
                            </li>
                            <li>
                                <span>05.</span>
                                <span>상품이미지 등록 시 가능한 고화질 파일로 반드시 첨부바랍니다.</span>
                                <p>※ 이미지 미등록으로 인한 불이익은 책임지지 않습니다. 상품 이미지는 파일첨부(250*250, 500KB 이하) 또는 이미지링크 입력 중 선택하여 등록이 가능합니다.</p>
                            </li>
                            <li>
                                <span>06.</span>
                                <span>구매대행 신청서 작성 시 구매옵션(색상, 사이즈, 치수 등)을 반드시 정확하게 기재바랍니다.</span>
                            </li>
                            <li>
                                <span>07.</span>
                                <span>구매대행 신청서 작성방법 선택 시 구매 업체수 10개 이하의 경우 "직접입력" 또는 "자동변환등록"을, 구매 업체수 10개 이상의 경우 "엑셀등록"으로 선택 후 작성바랍니다.</span>
                                <p>※ 단일 운송장 정보에 여러 품목이 들어있는 경우 "엑셀등록"을 권장합니다. </p>
                            </li>
                            <li>
                                <span>08.</span>
                                <span>위탁자가 직접 작성한 수입대행 신청서 내용을 그대로 반영하며 주문한 상품의 배송, 통관진행 중 발생하는 불이익(통관불허 및 폐기 등)은 당사에서 책임지지 않습니다.</span>
                            </li>
                        </ul>
                        <p class="hl">
                            수입/구매대행 위탁자(갑)는 씨케이해운항공 사이트에서 수입대행신청 서비스를 접수함과 동시에 수입대행자(을: 씨케이해운항공)와 중국 인터넷사이트 
                            물품구매 및 국내운송 및 통관까지의 모든 업무를 일임하는 수입/구매대행업 일반 상관례의 수입/구매대행계약을 체결합니다. 
                         </p>
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

              

                    <!-- 1 -->
                    <div class="form_box form01">
                        <h4><b>01.</b> 받는 사람의 정보를 입력하세요.</h4>
                        <ul class="list_box">
                            <li>
                                <div class="ttl_box">
                                    <p>국가정보*</p>
                                </div>
                                <div class="info_box">
                                    <ul class="selec_box no_border">
                                        <li>
                                            <input type="radio" name="radio_06" id="radio_06_01">
                                            <label for="radio_06_01">중국</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio_06" id="radio_06_02">
                                            <label for="radio_06_02">베트남</label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
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
                                        <p>※ 일반해상운송은 <b>자가 사용목적 USD150 이하</b> 수입인 경우에도 <u>면세적용이 안됩니다.</u></p>
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
                    <div class="form_box form03">
                        <h4><b>02.</b> 원산지증명서 발급(한중 FTA) 신청여부를 확인해주세요.</h4>
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
                                                <label for="radio_05_02">한중FTA 원산지 증명발급 <b>(+66,000원)</b></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>※ 한중FTA 원산지 발급으로 발급 수수료 보다 더 많이 관세가 절감되는 경우 임의진행 될수 있습니다.</u></p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- 3 -->
                    <div class="form_box form05">
                        <h4><b>03.</b> 배송대행 신청서 작성방법을 선택해주세요.</h4>
                        <ul class="list_box">
                            <li class="br">
                                <p>직접입력</p>
                                <p>
                                    구매신청 건수가 소량인 경우
                                </p>
                                <div>
                                    <button>직접입력하기</button>
                                </div>
                            </li>
                            <li class="br">
                                <p>자동변환등록</p>
                                <p>
                                    1688.com/타오바오 주문내역을 복사하여 일괄적으로
                                    신청가능(단, 익스플로러가 아닌 경우 또는 1개 주문건에
                                    아이템이 많은 경우 변환오류 발생가능)
                                </p>
                                <div>
                                    <button>자동변환등록</button>
                                </div>
                            </li>
                            <li>
                                <p>엑셀등록</p>
                                <p>
                                    구매신청건수가 많은 경우,
                                    1개 주문에 아이템이 많은 경우
                                </p>
                                <div>
                                    <button>엑셀등록하기</button>
                                </div>
                            </li>                            
                        </ul>
                    </div>
                    
                    <div class="btn_box">
                        <input class="main_btn" type="submit" value="저장하기">
                        <a class="sub_btn" href="">미리보기</a>
                    </div>


            </div>
        </div>
    </div>
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
