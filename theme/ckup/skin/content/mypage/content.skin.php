<?php
include_once('../../common.php');
include_once(G5_THEME_MOBILE_PATH.'/head.php');

define('_INDEX', true);
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가
include_once(G5_PATH.'/head.php');

//이미 로그인 중이라면
if (!$member['mb_id']) goto_url('../../bbs/login.php');
?>

<style>
.blink {
    color: red;
    background-color: yellow !important;
    font-weight: 600;
    animation: blink 1s linear infinite;
}

@keyframes blink {
    0% {
        color: red;
    }

    50% {
        color: black;
    }

    100% {
        color: red;
    }
}

.outbound {
    color: red;
}

.progress-c {
    width: 100%;
    display: block;
}

.progress-c span {
    float: left;
    width: 14.2%;
}

.progress-c span a {
    cursor: pointer;
}

.progress-c div {
    width: 14.2%;
    height: auto;
    float: left;
    margin-bottom: 5px;
}

.progress-c div img {
    width: 30%;
    margin: 0 auto;
}

.progress-list {
    list-style: none;
    padding: 0;
    width: 100%;
}

.progress-list li {
    display: inline-block;
    width: 13.7%;
    position: relative;
}

.progress-circle {
    width: 20px;
    height: 20px;
    background-color: white;
    border-radius: 50%;
    position: absolute;
    border: 2px solid #ccc;
    z-index: 1;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.progress-node {
    width: 105%;
    height: 3px;
    background-color: #ccc;
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
}

@keyframes ssssss {
    10% {
        opacity: 1;
    }

    30% {
        opacity: 0;
    }

    50% {
        opacity: 1;
    }

    70% {
        opacity: 0;
    }

    90% {
        opacity: 1;
    }
}

.progress-list .active {
    background-color: #45aaff;
}

.progress-list .active1 {
    background: linear-gradient(to right, #afdaff, #97cfff);
}

.progress-list .active2 {
    background: linear-gradient(to right, #97cfff, #74befd);
}

.progress-list .active3 {
    background: linear-gradient(to right, #74befd, #4fadfd);
}

.progress-list .active4 {
    background: linear-gradient(to right, #4fadfd, #2b9dff);
}

.progress-list .active5 {
    background: linear-gradient(to right, #2b9dff, #0089ff);
}

.layui-progress .layui-bg-blue {
    background: linear-gradient(to right, #afdaff, #0089ff);
}

.progress-list .end-node {
    animation: ssssss 2.5s infinite;
    background-color: red;
}
</style>

<link href="../../theme/basic/css/default.css" rel="stylesheet" type="text/css">



<!-- 사이드 메뉴 -->
<div class="sub_inner sub_company">
    <div class="sub_wrap">
        <div class="sub_lnb">
            <div class="sub_lnb_box">
                <h2>마이페이지</h2>

                <ul class="service_menu" style="margin: 0 15%; text-align:left;">
                    <li><i class="xi-angle-right-min"></i> <a href="javascript:alert('서비스 준비중입니다.');">배송대행
                            내역조회
                            <span>( 0 )</span></a></li>
                    <li><i class="xi-angle-right-min"></i> <a href="javascript:alert('서비스 준비중입니다.');">수입대행
                            내역조회
                            <span>( 0 )</span></a></li>

                    <li><i class="xi-angle-right-min"></i> <a href="javascript:alert('서비스 준비중입니다.');">결제대행
                            내역조회
                            <span>( 0 )</span></a>
                    </li>
                    <li><i class="xi-angle-right-min"></i> <a href="javascript:alert('서비스 준비중입니다.');">시장조사
                            내역조회
                            <span>( 0 )</span></a></li>
                    <li><i class="xi-angle-right-min"></i> <a href="javascript:alert('서비스 준비중입니다.');">포워딩
                            견적조회
                            <span>( 0 )</span></a>
                    </li>
                    <li><i class="xi-angle-right-min"></i> <a href="javascript:alert('서비스 준비중입니다.');">노데이타
                            내역조회 <span>( 0 )</span></a>
                    </li>
                    <li><i class="xi-angle-right-min"></i> <a href="javascript:alert('서비스 준비중입니다.');">FCL
                            내역조회 <span>( 0 )</span></a>
                    </li>
                    <li><a href="#">- 1:1 문의내역</a></li>
                    <li><a href="#">- 회원정보수정</a></li>
                    <li><a href="#">- 회원탈퇴하기</a></li>
                </ul>
            </div>

        </div>
        <div class="sub_contain">
            <div class="contain_box">
                <div class="ttl_box">
                    <h3>마이페이지</h3>
                </div>
                <!-- 정보 테이블 -->
                <div class="info_box">
                    <div class="tbl_wrap03_my tbl_head03_my">
                        <table>
                            <thead>
                                <tr>
                                    <th><a href="#">시장조사</a></th>
                                    <th><a href="#">배송대행</a></th>
                                    <th><a href="#">수입대행</a></th>
                                    <th><a href="#">특송화물</a></th>
                                    <th><a href="#">FCL</a></th>
                                    <th><a href="#">결제대행</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            접수완료 (<font class="numcount">0</font>)
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            접수대기 (<font class="numcount">0</font>)
                                        </a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            접수대기 (<font class="numcount">0</font>)
                                        </a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            접수대기 (<font class="numcount">0</font>)
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="done">접수대기 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            접수완료 (<font class="numcount">0</font>)
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="point">
                                        <a href="#">
                                            <span class="done">완료 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            접수완료 (<font class="numcount">0</font>)</a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            접수완료 (<font class="numcount">0</font>)
                                        </a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            접수완료 (<font class="numcount">0</font>)
                                        </a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            접수완료 (<font class="numcount">0</font>)
                                        </a>
                                    </td>
                                    <td class="point">
                                        <a href="#">
                                            <span class="done">완료 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#">
                                            <span class="outbound"><span class="outbound">출고준비 (<font class="numcount">0
                                                    </font>)</span>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            구매완료 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            <span class="deliving">배송중 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="#">
                                            <span class="deliving"> 출항 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>

                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>

                                    <td>
                                        <a href="#">
                                            <span class="order"><span class="deliving">배송중 (<font class="numcount">0
                                                    </font>
                                                    )</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="outbound">출고준비 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="" class="red">
                                            <span class="pay">결제대기 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="">
                                            입항 (<font class="numcount">0</font>)
                                        </a>
                                    </td>

                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#" class="red">
                                            <span class="pay">결제대기 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="">
                                            <span #class="deliving">배송중 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>


                                    <td class="point">
                                        <a href="#">
                                            <span class="done">완료 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <span class="done">완료 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="point">
                                        <a href="#">
                                            <span class="done">완료 (<font class="numcount">0</font>)
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="red">
                                            <span class="pay">결제대기 (<font class="numcount">0</font>)</span>
                                        </a>
                                    </td>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>

                                    <td class="point">
                                        <a href="#">
                                            <span class="done">완료 (<font class="numcount">0</font>)
                                        </a>
                                    </td>

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- 검색 -->
                    <form name="fservice" method="post" onsubmit="return fservice_submit(this);">
                        <div class="tbl_wrap04 tbl_head04">
                            <table>
                                <tr>
                                    <th>서비스구분</th>
                                    <td>
                                        <select name="st_type">
                                            <option value="">전체</option>
                                            <option value="시장조사">시장조사</option>
                                            <option value="배송대행">배송대행</option>
                                            <option value="수입대행">수입대행</option>
                                            <option value="결제대행">결제대행</option>
                                        </select>
                                    </td>
                                    <th>등록일</th>
                                    <td>
                                        <input type="text" id="st_frdate" name="st_frdate" value="" class="frm_input"
                                            size="10" maxlength="10" placeholder="날짜선택" style="width:45%">
                                        ~
                                        <input type="text" id="st_todate" name="st_todate" value="" class="frm_input"
                                            size="10" maxlength="10" placeholder="날짜선택" style="width:45%">
                                    </td>
                                    <th>배대지</th>
                                    <td>
                                        <select name="bj_id">
                                            <option value="">배대지</option>
                                            <option value="8">이우(항공)</option>
                                            <option value="7">위해(항공)</option>
                                            <option value="6">위해(해운)</option>
                                            <option value="3">광동성 광주(廣州)</option>
                                            <option value="2">저장성 이우(义乌)</option>
                                            <option value="1">산동성 위해(威海)</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>진행상태</th>
                                    <td>
                                        <select name="st_state">
                                            <option value="">전체</option>
                                            <option value="접수대기">접수대기</option>
                                            <option value="접수완료">접수완료</option>
                                            <option value="구매완료">구매완료</option>
                                            <option value="출고준비">출고준비</option>
                                            <option value="배송중">배송중</option>
                                            <option value="완료">완료</option>
                                        </select>
                                    </td>
                                    <th>결제상태</th>
                                    <td>
                                        <select name="st_pay">
                                            <option value="">전체</option>
                                            <option value="0">결제대기</option>
                                            <option value="1">1차결제완료</option>
                                            <option value="3">완료</option>

                                        </select>
                                    </td>
                                    <th>경과일수</th>
                                    <td>
                                        <select name="st_dist">
                                            <option value="">전체</option>
                                            <option value="7">7일 이내</option>
                                            <option value="14">14일 이내</option>
                                            <option value="15">14일 초과</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="btn_confirm_sch">
                            <button type="sumbit" class="btn_submit_sch"">검색하기</button>
                        <a href="" class=" btn_cancel_sch">초기화하기</a>
                        </div>
                    </form>
                    <div class="tbl_wrap05_myindex tbl_head05_myindex">
                        <table>
                            <table>
                                <tr>
                                    <th style="width:5%">번호</th>
                                    <th style="width:8%">서비스구분</th>
                                    <th style="width:12%">배대지</th>
                                    <!--<th>작성자</th>
                    <th>업체명</th>-->
                                    <th style="width:8%">등록일</th>
                                    <th style="width:6%">경과일수</th>
                                    <th style="width:55%;padding-left: 0; padding-right: 0;">
                                        <div class="progress-c">
                                            <div>
                                                <img src="../../adm/img/icon/01.png">
                                            </div>
                                            <div>
                                                <img src="../../adm/img/icon/02.png">
                                            </div>
                                            <div>
                                                <img src="../../adm/img/icon/03.png">
                                            </div>
                                            <div>
                                                <img src="../../adm/img/icon/04.png">
                                            </div>
                                            <div>
                                                <img src="../../adm/img/icon/05.png">
                                            </div>
                                            <div>
                                                <img src="../../adm/img/icon/06.png">
                                            </div>
                                            <div>
                                                <img src="../../adm/img/icon/07.png">
                                            </div>

                                        </div>
                                        <div class="progress-c">
                                            <span>접수대기</span>
                                            <span>접수완료</span>
                                            <span>구매완료</span>
                                            <span>출고준비</span>
                                            <span>배송중</span>
                                            <span>KR통관중</span>
                                            <span>완료</span>
                                        </div>
                                    </th>
                                    <th style="width:5%">상세</th>
                                </tr>
                                <tr>
                                    <td colspan="13" align="center" height="50">
                                        상태 정보 표시
                                    </td>
                                </tr>
                            </table>
                    </div>
                    <tr>
                        <td colspan="13" align="center" height="50"></td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 배송대행주소 -->
<div id="address_pop" class="adress_modal">
    <div id="address_inner">
        <div class="address_title">배송대행 주소</div>
        <div class="inner">
            <table>
                <tr>
                    <th class="rdth">
                    </th>

                </tr>
                <tr>
                    <td class="rdtd"></td>
                </tr>
            </table>
            <div class="modal_close" onClick="close_pop();"><i class="xi-close"></i></div>
        </div>
    </div>
</div>


<?php include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>