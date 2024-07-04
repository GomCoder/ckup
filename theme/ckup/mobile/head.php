<!-- 모바일_상단_메뉴 -->
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
$current_page = basename($_SERVER['PHP_SELF']);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

<?php if(defined('_INDEX_'))
{ // index에서만 실행
?>
<header id="header">
<?php } else { ?>
<header id="header" class="sub_header">
<?php } ?>
  <h1 class="sound_only"><?php echo $g5['title'] ?></h1>
  <div class="header_box">
    <div class="main_wrap">
      <div class="top_gnb">
        <div class="logo">
          <a class="top" href="<?php echo G5_URL ?>">
            <img src="<?php echo G5_THEME_URL ?>/img/logo.png" alt="">
          </a>
        </div>

        <nav class="gnb">
          <ul>
            <li>
              <a href="<?php echo G5_URL ?>/bbs/content.php?co_id=company">
                회사소개
              </a>
            </li>
            <li>
            <a href="<?php echo G5_URL ?>/bbs/content.php?co_id=how_to_shipping">
                  이용안내
                  </a>
            <ul class="sub_gnb">
              <li><a href="<?php echo G5_URL ?>/bbs/content.php?co_id=how_to_shipping">
                  이용안내
                  </a>
              </li>
              <li><a href="<?php echo G5_URL ?>/bbs/content.php?co_id=how_to_shipping">
                  공지사항
                  </a>
              </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=free">
                이용후기
              </a>
              <ul class="sub_gnb">
                <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=free">이용후기</a></li>
                <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo G5_URL ?>/bbs/content.php?co_id=mypage">
                마이페이지
              </a>
            </li>
            <?php if ($is_member) {  ?>
              <li class="login_li"><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
              <?php } else {  ?>
              <li class="login_li"><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
              <li class="login_li"><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
              <?php }  ?>
          </ul>
        </nav>        

        <div class="m_btn_box pointer">
          <div class="grid_item__inner">
            <input id="ham_btn" type="checkbox" style="display: none">
            <label for="ham_btn">
              <div class="menu">
                <div class="menu_part"></div>
                <div class="menu_part"></div>
                <div class="menu_part"></div>
              </div>
            </label>
          </div>
        </div>            
      </div>
    </div>

    <div class="bot_gnb">
      <div class="main_wrap">
        <nav class="gnb02">
          <ul>
            <li class="<?php echo ($current_page == 'write.php' && $_GET['bo_table'] == 'shipping_req') ? 'active' : ''; ?>">
              <a href="<?php echo G5_URL ?>/bbs/write.php?bo_table=shipping_req">
                배송대행신청
              </a>
            </li>
            <li class="<?php echo ($current_page == 'write.php' && $_GET['bo_table'] == 'buying_req') ? 'active' : ''; ?>">
              <a href="<?php echo G5_URL ?>/bbs/write.php?bo_table=buying_req">
                구매대행신청
              </a>
            </li>
            <li class="<?php echo ($current_page == 'write.php' && $_GET['bo_table'] == 'fcl_req') ? 'active' : ''; ?>">
              <a href="<?php echo G5_URL ?>/bbs/write.php?bo_table=fcl_req">
                FCL신청
              </a>
            </li>
            <li class="<?php echo ($current_page == 'write.php' && $_GET['bo_table'] == 'payment_req') ? 'active' : ''; ?>">
              <a href="<?php echo G5_URL ?>/bbs/write.php?bo_table=payment_req">
                결제대행신청
              </a>
            </li>
            <li class="<?php echo ($current_page == 'write.php' && $_GET['bo_table'] == 'market_req') ? 'active' : ''; ?>">
              <a href="<?php echo G5_URL ?>/bbs/write.php?bo_table=market_req">
                시장조사신청
              </a>
            </li> 
            <li class="<?php echo ($current_page == 'write.php' && $_GET['bo_table'] == 'express_req') ? 'active' : ''; ?>">
              <a href="<?php echo G5_URL ?>/bbs/write.php?bo_table=express_req">
                특송화물신청
              </a>
            </li>
            <li>
              <a href="http://pf.kakao.com/_YlmSG/chat" target="_blank">
                <img src="<?php echo G5_THEME_URL ?>/img/lnb_ic04.png" alt="">
                <span>1:1 문의</span>       
              </a>
            </li>                                          
          </ul>
        </nav>
      </div>
    </div>

    <aside class="lnb_box">
    <div class="main_wrap">
      <div class="inner">
        <ul>
          <li>
            <a href="">
              <div class="img_box">
                <img src="<?php echo G5_THEME_URL ?>/img/lnb_ic01.png" alt="">
              </div>
              <p>입고지 주소<br> 안내</p>	
            </a>           
          </li>
          <li class="hover-item">
            <a href="">
              <div class="img_box">
                <img src="<?php echo G5_THEME_URL ?>/img/qr_icon.png" alt="">
              </div>
              <p>WeChat<br>QR코드<br> 중국판매자 문의</p>	
            </a>
            <div class="hover-content">
              <h4>WeChat QR코드</h4>
              <img src="<?php echo G5_THEME_URL ?>/img/qr_code.png" alt="">
            </div>           
          </li>
          <li class="hover-item">
            <a href="">
              <div class="img_box">
                <i class="far fa-envelope"></i>
              </div>
              <p>이메일 문의</p>	
            </a>
            <div class="hover-content">
              <h4>이메일 문의 </h4>
              <p>ck_logis@nate.com</p>
            </div>
          </li>
          <li class="hover-item">
            <a>
              <div class="img_box">
                <i class="fas fa-phone"></i>
              </div>
              <p>전화 문의</p>	
            </a> 
            <div class="hover-content">
              <h4>전화 문의 </h4>
              <a href="tel:032-821-5158">032-821-5158</a>
            </div>
          </li>                
        </ul>
        <div id="top_btn">TOP</div>
      </div>
    </div>
  </aside>
  <script>
  $(document).ready(function() {
    $('.hover-item').hover(
      function() {
        clearTimeout($(this).data('timeout'));
        $(this).find('.hover-content').css({
          'opacity': 1,
          'visibility': 'visible'
        });
      },
      function() {
        var $this = $(this);
        var timeout = setTimeout(function() {
          $this.find('.hover-content').css({
            'opacity': 0,
            'visibility': 'hidden'
          });
        }, 1500);
        $this.data('timeout', timeout);
      }
    );

    $('.hover-content').hover(
      function() {
        clearTimeout($(this).closest('.hover-item').data('timeout'));
      },
      function() {
        var $this = $(this).closest('.hover-item');
        var timeout = setTimeout(function() {
          $this.find('.hover-content').css({
            'opacity': 0,
            'visibility': 'hidden'
          });
        }, 1500);
        $this.data('timeout', timeout);
      }
    );
  });
</script>

    <!-- 모바일 메뉴 [시작] -->
    <div class="mo_gnb">
      <div class="mo_box">

        <div class="mo_menu">
          <ul class="menu">
            <li>
              <a href="<?php echo G5_URL ?>/bbs/content.php?co_id=company" ><span>회사소개</span></a>
              <div class="plus">
                <div></div>
                <div></div>
              </div>
            </li>
            <li>
              <a href="<?php echo G5_URL ?>/bbs/content.php?co_id=how_to_shipping" ><span>이용안내</span></a>
            </li>
            <li class="depth1">
              <a href="" ><span>고객센터</span></a>
              <div class="depth2">
                <ul class="clear">
                  <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=notice">공지사항</a></li>
                  <li><a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=qa">자주묻는 질문</a></li>
                </ul>
              </div>
              <div class="plus">
                <div></div>
                <div></div>
              </div>
            </li>
            <li>
              <a href="<?php echo G5_URL ?>/bbs/content.php?co_id=mypage" ><span>마이페이지</span></a>
            </li>
          </ul>

          <div class="mo_login_box">
            <ul>
                <?php if ($is_member) {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                <?php }  ?>
            </ul>
          </div>

        </div>
      </div>
    </div>
<!-- 모바일 메뉴 [끝] -->
  </div>

  <!--관리자페이지 접속 버튼-->
  <?php if($is_admin) { ?>
    <button class="admin_btn">
      <a href="<?php echo G5_URL ?>/adm" target="_blank">Admin</a>
    </button>
  <?php } ?>

</header>

<script type="text/javascript">

  $('.sub_gnb').hide(0);

  $('.gnb').find('li').mouseenter(function(){
    $(this).find('.sub_gnb').stop().fadeIn(200);
  }).mouseleave(function(){
      $(this).find('.sub_gnb').stop().fadeOut(200);
  });

  //모바일 메뉴
  $('.m_btn_box label').click(function(){
    $('.mo_gnb').toggleClass('active');
    $('.mo_gnb .depth2').slideUp();
    $('.mo_gnb .depth1 > ul > li').removeClass('active');
  });


  $('.depth1 > a').click(function(e){
      e.preventDefault();

    if($(this).parent('li').hasClass('active')){
      $('.depth1').removeClass('active');
      $(this).siblings('.depth2').slideUp(300);
    }else{
      $('.mo_gnb .depth2').slideUp(300);
      $(this).siblings('.depth2').slideDown(300);


      $('.depth1').removeClass('active');
      $(this).parent('li').addClass('active');
    };

  });

	$(window).scroll(function(){
					if ($(window).scrollTop() > 0) {
						 $('#header').removeClass('scroll_top');
						 $('#header').addClass('scroll_down');
					}
					else {
						 $('#header').addClass('scroll_top');
						 $('#header').removeClass('scroll_down');
					}
			});
</script>

<main id="main">
