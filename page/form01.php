<?php
include_once('../common.php');
include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<div class="sub_inner form_inner">
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
                        <input class="main_btn" type="submit" value="저장하기">
                        <a class="sub_btn" href="">미리보기</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>








<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
