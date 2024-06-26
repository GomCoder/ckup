<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

</main>

<footer id="footer">
  <div class="main_wrap">
    <ul>
      <li>
        <a href="">개인정보 처리방침</a>
      </li>
      <li>
        <a href="">서비스 이용약관</a>
      </li>
    </ul>
    <div class="info_box">
      <div class="logo_box">
        <a href="<?php echo G5_URL ?>">
          <img src="<?php echo G5_THEME_URL ?>/img/logo02.png" alt="">
        </a>
      </div>
      <div class="txt_box">
        <p>상호명 : (주)씨케이해운항공</p>
        <p>주소 : 주소가 들어갈 자리</p>
        <p>대표자 : 홍길동</p>
        <p>대표번호 : 000 - 000 - 0000</p>
        <p>FAX : 000 - 000 - 0000</p>
        <p>Email : abc@naver.com</p>
        <p>사업자번호 : 000 - 00 - 00000</p>
        <p>통신판매업 신고번호 : 000</p>
        <p>화물운송주선업자등록번호 : ABCDG</p>
        <p>특송업체등록증 : 00000</p>
      </div>
    </div>
    <div class="info_box2">
      <p>
        씨케이해운항공은 B2B 전문 해외배송의 중개자이며 전자상거래의 당사자가 아닙니다. 따라서 씨케이해운항공은 상품, 거래정보 및 거래에 대하여 책임을 지지 않습니다.<br>
        씨케이해운항공 해외 배송대행 서비스는 관세법에 저촉되는 행위에 협조하지 않으며 통관질서 준수를 실천합니다.
      </p>
    </div>
    <div class="ft_copy">
        <div class="ft_copy_info">
          COPYRIGHT © 2024 CKUP, ALL RIGHTS RESERVED.
        </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="<?php echo G5_THEME_URL ?>/js/lenis.min.js"></script>
<script type="text/javascript">

// Lenis smooth scrolling
let lenis;

// Initialize Lenis smooth scrolling
const initSmoothScrolling = () => {
  lenis = new Lenis({
    lerp: 0.07,
    smoothWheel: true,
  });
  const scrollFn = (time) => {
    lenis.raf(time);
    requestAnimationFrame(scrollFn);
  };
  requestAnimationFrame(scrollFn);
};

  initSmoothScrolling();
</script>

<script>
  if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
    window.location = 'microsoft-edge:' + window.location;

    setTimeout(function() {
      window.location = 'https://go.microsoft.com/fwlink/?linkid=2135547';
    }, 1);

  }
</script>

<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));


        if ($('#top_btn').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#top_btn').addClass('show');
                    } else {
                        $('#top_btn').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#top_btn').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
