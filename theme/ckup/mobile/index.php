<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


	<section class="main_sec01">
		<div class="left_box">
			<div class="swiper main_sl01">
				<div class="swiper-wrapper">

					<!-- Slides -->
					<div class="swiper-slide sl01">
					</div>

					<div class="swiper-slide sl02">
					</div>

				</div>

					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>

					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev sl_btn"></div>
					<div class="swiper-button-next sl_btn"></div>
			</div>			
		</div>
		<div class="right_box">
			<div class="inner">
				<div class="login_box">
					<?php echo outlogin('basic'); ?>
				</div>
				<div class="bot_box">
					<div class="top">
						<h3>적용환율 안내</h3>
						<ul>
							<li></li>
							<li>면세한도 금액</li>
							<li>구매대행환율</li>
							<li>고시환율</li>
						</ul>
						<ul>
							<li>
								<img src="<?php echo G5_THEME_URL ?>/img/main/ch_ic.png" alt="">								
							</li>
							<li>￥ 9,999 </li>
							<li>￦ 9,999</li>
							<li>￦ 9,999</li>
						</ul>
						<ul>
							<li>
								<img src="<?php echo G5_THEME_URL ?>/img/main/usa_ic.png" alt="">								
							</li>
							<li>＄ 9,999</li>
							<li>￦ 9,999</li>
							<li>￦ 9,999</li>
						</ul>
					</div>
					<div class="bot">
						<h3>커뮤니티 & SNS</h3>
						<ul>
							<li>
								<a href="https://cafe.naver.com/cklogis" target="_blank">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sns_ic01.png" alt="">
									<span>네이버카페</span>
								</a>
							</li>
							<li>
								<a href="https://blog.naver.com/cklogs0621" target="_blank">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sns_ic02.png" alt="">
									<span>네이버블로그</span>
								</a>
							</li>
							<li>
								<a href="http://pf.kakao.com/_YlmSG" target="_blank">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sns_ic03.png" alt="">									
									<span>카카오채널</span> 					
								</a>
							</li>
							<li>
								<a href="" target="_blank">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sns_ic04.png" alt="">									
									<span>YouTube</span>									
								</a>
							</li>														
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="main_sec02">
		<div class="main_wrap">
			<div class="top_box">
				<ul class="tab_box">
					<li class="active">
						<a href="#tab01">배송대행 조사절차</a>
					</li>
					<li>
						<a href="#tab02">수입/구매대행 조사절차</a>
					</li>
					<li>
						<a href="#tab03">중국시장 조사절차</a>
					</li>								
				</ul>
				<ul class="link_box">
					<li>
						<a href="https://www.kuaidi100.com/?from=openv" target="_blank">중국내 택배조회</a>
					</li>
					<li>
						<a href="https://www.shiptrack.co.kr/" target="_blank">국내 배송조회</a>
					</li>
				</ul>
			</div>
			<div class="bot_box">
				<div id="tab01" class="tab_info">
					<ul>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img02.png" alt="">
							</div>
							<p><b>01</b> 신청서 작성</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img05.png" alt="">
							</div>
							<p><b>02</b> 구매승인</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab03_img03.png" alt="">
							</div>
							<p><b>03</b> 1차 결제</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab03_img04.png" alt="">
							</div>
							<p><b>04</b> 상품구매</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img03.png" alt="">
							</div>
							<p><b>05</b> 현지배송</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img02.png" alt="">
							</div>
							<p><b>06</b> 중국<br>현지검수</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab03_img03.png" alt="">
							</div>
							<p><b>07</b> 2차 결제</p>	
						</li>
						<li class="right_ic"></li>						
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img06.png" alt="">
							</div>
							<p><b>08</b> 국제배송</p>	
						</li>
						<li class="right_ic"></li>						
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img01.png" alt="">
							</div>
							<p><b>09</b> 통관절차</p>	
						</li>						
						<li class="right_ic"></li>						
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img03.png" alt="">
							</div>
							<p><b>10</b> 국내배송</p>	
						</li>
						<li class="right_ic"></li>						
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img08.png" alt="">
							</div>
							<p><b>11</b> 상품수령</p>	
						</li>						
					</ul>
				</div>
				<div id="tab02" class="tab_info">
					<ul>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img01.png" alt="">
							</div>
							<p><b>01</b> 시장조사<br> 의뢰서 작성</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img02.png" alt="">
							</div>
							<p><b>02</b> 제품 서칭</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img03.png" alt="">
							</div>
							<p><b>03</b> 진행가능여부<br> 회신</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img04.png" alt="">
							</div>
							<p><b>04</b> 수수료 입금</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img05.png" alt="">
							</div>
							<p><b>05</b> 시장조사 실시</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img06.png" alt="">
							</div>
							<p><b>06</b> 조사내용 작성</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img07.png" alt="">
							</div>
							<p><b>07</b> 조사 결과지<br> 고객 발송</p>	
						</li>
						<li class="right_ic"></li>						
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab01_img08.png" alt="">
							</div>
							<p><b>08</b> 고객확인</p>	
						</li>	
					</ul>
				</div>
				<div id="tab03" class="tab_info">
					<ul>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img01.png" alt="">
							</div>
							<p><b>01</b> 해외쇼핑몰<br> 직접구매</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img02.png" alt="">
							</div>
							<p><b>02</b> 배송대행<br> 신청서 작성</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img03.png" alt="">
							</div>
							<p><b>03</b> 중국 현지배송</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img04.png" alt="">
							</div>
							<p><b>04</b> 중국 배대지입고</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img05.png" alt="">
							</div>
							<p><b>05</b> 출고 준비<br> (검수/원산지)</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img06.png" alt="">
							</div>
							<p><b>06</b> 컨테이너<br> 선적/출항</p>	
						</li>
						<li class="right_ic"></li>
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img07.png" alt="">
							</div>
							<p><b>07</b> 인천항<br> 입항/통관</p>	
						</li>
						<li class="right_ic"></li>						
						<li class="ic_box">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/tab02_img08.png" alt="">
							</div>
							<p><b>08</b> 국내배송<br> 물품수령인</p>	
						</li>	
					</ul>
				</div>				
			</div>
		</div>
	</section>

	<section class="main_sec03">
		<div class="main_wrap">
			<div class="top_box">
				<ul class="tab_box2">
					<li class="active">
						<a href="#tab11">CN URL (중국)</a>
					</li>
					<li>
						<a href="#tab12">VN URL (베트남)</a>
					</li>
					<li>
						<a href="#tab13">KR URL (한국)</a>
					</li>								
				</ul>
			</div>
			<div class="bot_box">
				<div id="tab11" class="tab_info2"> 
					<ul>
						<li>
							<a href="https://p4psearch.1688.com/hamlet.html?scene=6&cosite=baidujj_pz&location=re&trackid=885662561117990122602/" target="_blank">
								<div class="img_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sec03_01_logo01.png" alt="">
								</div>
								<p>1668</p>	
							</a>					
						</li>
						<li>
							<a href="https://www.pinduoduo.com/" target="_blank">
								<div class="img_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sec03_01_logo02.png" alt="">
								</div>
								<p>판둬둬</p>	
							</a>					
						</li>
						<li>
							<a href="https://world.taobao.com/" target="_blank">
								<div class="img_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sec03_01_logo03.png" alt="">
								</div>
								<p>타오바오</p>	
							</a>			
						</li>
						<li>
							<a href="https://www.tmall.com/" target="_blank">
								<div class="img_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sec03_01_logo04.png" alt="">
								</div>
								<p>TMALL</p>	
							</a>					
						</li>
						<li>
							<a href="https://www.jd.com/?cu=true&utm_source=baidu-pinzhuan&utm_medium=cpc&utm_campaign=t_288551095_baidupinzhuan&utm_term=0f3d30c8dba7459bb52f2eb5eba8ac7d_0_d73c33b5635a4118af1b0517ecb3e055" target="_blank">
								<div class="img_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sec03_01_logo05.png" alt="">
								</div>
								<p>JD.COM</p>	
							</a>					
						</li>
						<li>
							<a href="https://www.suning.com/" target="_blank">
								<div class="img_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sec03_01_logo06.png" alt="">
								</div>
								<p>SuNing</p>	
							</a>					
						</li>
						<li>
							<a href="https://www.chinagoods.com/mall?utm_campaign%3D%E7%99%BE%E5%BA%A6%E5%85%B3%E9%94%AE%E8%AF%8D%26utm_source%3Dbaidu_search%26utm_medium%3Dcpc%26utm_term%3D%E4%B9%89%E4%B9%8C%E8%B4%AD%26utm_content%3D%E9%A6%96%E9%A1%B5" target="_blank">
								<div class="img_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/sec03_01_logo07.png" alt="">
								</div>
								<p>이우소상품</p>	
							</a>					
						</li>						
					</ul>
				</div>
			</div>

		</div>
	</section>

	<section class="main_sec04">
		<div class="main_wrap">
			<ul>
				<li>
					<h4><i class="fas fa-map-marker-alt"></i> CONTACT US</h4>
					<p>(주)씨케이해운항공</p>
					<p>주소가 들어갈 자리입니다.</p>				
				</li>
				<li>
					<div class="top">
						<h4><i class="fas fa-phone"></i> HELP DESK</h4>
						<p>00 - 000 -0000</p>
						<p>Fax. 00 - 000 - 0000</p>
					</div>
					<div class="bot">
						<p>상담시간 : 10:00 ~ 19:00</p>
						<p>점심시간 : 12:00 ~ 13:00</p>
						<p>토,일요일 및 공휴일은 휴무입니다.</p>
					</div>
				</li>
				<li>
					<h4><i class="fas fa-money-check"></i> BANK INFO</h4>
					<p>000 - 00000 -00000</p>
					<p>00은행 / 예금주 : 홍길동</p>					
				</li>
			</ul>
		</div>
	</section>

	<section class="main_sec05">
		<div class="main_wrap">
			<div class="swiper main_sl02">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<a href="https://www.kcl.re.kr/site/main/index001" target="_blank">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sec05_logo01.png" alt="">
							</div>
							<p>한국건설생활환경연구원</p>							
						</a>					
					</li>
					<li class="swiper-slide">
						<a href="http://www.kipris.or.kr/khome/main.jsp" target="_blank">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sec05_logo02.png" alt="">
							</div>
							<p>특허청 상표조회</p>							
						</a>					
					</li>
					<li class="swiper-slide">
						<a href="https://www.cros.or.kr/psnsys/cmmn/infoPage.do?w2xPath=/ui/main/main.xml" target="_blank">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sec05_logo03.png" alt="">
							</div>
							<p>한국저작권위원회</p>						
						</a>						
					</li>
					<li class="swiper-slide">
						<a href="https://www.safetykorea.kr/" target="_blank">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sec05_logo04.png" alt="">
							</div>
							<p>제품안전정보센터</p>								
						</a>				
					</li>
					<li class="swiper-slide">
						<a href="https://impfood.mfds.go.kr/" target="_blank">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sec05_logo05.png" alt="">
							</div>
							<p>식품정보마루</p>								
						</a>				
					</li>
					<li class="swiper-slide">
						<a href="https://unipass.customs.go.kr/csp/persIndex.do" target="_blank">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sec05_logo06.png" alt="">
							</div>
							<p>개인통관 고유부호 발급</p>								
						</a>				
					</li>
					<li class="swiper-slide">
						<a href="https://unipass.customs.go.kr/csp/index.do" target="_blank">
							<div class="img_box">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sec05_logo07.png" alt="">
							</div>
							<p>관세청 유니패스</p>								
						</a>				
					</li>
				</ul>
			</div>
		</div>
	</section>


<script type="text/javascript">
	$(function(){

		const swiper = new Swiper('.main_sl01', {
		  loop: true,
			autoplay: {
			delay: 8000,
			disableOnInteraction: false, // 사용자 상호 작용 후에도 자동 재생을 계속할 것인지 여부
			},

		  pagination: {
		    el: '.swiper-pagination',
				clickable: true,
		  },

		  navigation: {
		    nextEl: '.swiper-button-next',
		    prevEl: '.swiper-button-prev',
		  },

		});

		const swiper2 = new Swiper('.main_sl02', {
			direction: 'horizontal',
			slidesPerView: 4,
			spaceBetween: 10,
			autoplay: {
			delay:3000,
			disableOnInteraction: false, // 사용자 상호 작용 후에도 자동 재생을 계속할 것인지 여부
			},

		});

		$('#tab01').show();

		$('.tab_box li a').on('click', function (e) {
			e.preventDefault();

			$('.tab_box li').removeClass('active');
			$(this).parent('li').addClass('active');

			var tabId = $(this).attr('href');
			$('.tab_info').hide();
			$(tabId).show();

		});

		$('.tab_box2 li a').on('click', function (e) {
			e.preventDefault();

			$('.tab_box2 li').removeClass('active');
			$(this).parent('li').addClass('active');

			var tabId = $(this).attr('href');
			$('.tab_info2').hide();
			$(tabId).show();

		});
	});


</script>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>
