<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
if(!defined('_INDEX_')) { // index가 아닐 떄...
    include G5_THEME_PATH.'/detail.tail.php'; // 서버페이지 푸터...
}
?>

<footer class="footer">
            <ul>
                <li>한울캠핑카</li>
                <li>대 표 : 백정란</li>
                <li>사업자등록번호 : 155-17-00287</li>
            </ul>
            <ul>
                <li>Address : 경남 진주시 사봉면 산업단지로 44번길 22</li>
                <li>Tel : 055-757-1484</li>
                <li>Fax : 055-757-1485</li>
                <li>e-mail : hanul4751@naver.com</li>
            </ul>
        </footer>
    </div>

    <div class="toTop">
        <i class="xi-arrow-top"></i>
    </div>




<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");