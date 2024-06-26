<?php
include_once('../common.php');
include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<div class="sub_inner form_inner">
    <div class="form_wrap">
        
        <div class="sub_contain">
            <div class="contain_box">
                <div class="ttl_box">
                    <h3>FCL 컨테이너 선적요청서</h3>
                </div>

                <!-- form -->
                <form class="form_contain">

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








<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
