<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="Wrap">
        <header class="header">
            <div class="top_banner">
                <div class="inner">
                    <div class="left">부산 경남 캠핑카 제작 전문 업체 트럭 개조 캠핑카 주문 제작 한울캠핑카</div>
                    <ul class="top_link">
                        <li><a href="">news &amp; notice</a></li>
                        <li><a href="">q &amp; a board</a></li>
                        <li><a href="/adm" target="_blank"><i class="xi-pause"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="head_container">
                <div class="inner">
                    <h1>
                        <a href="/">
                            <img src="<?= G5_THEME_URL ?>/img/logo.png" alt="">
                        </a>
                    </h1>
                    <nav class="gnb">
                        <ul>
                            <li>
                                <a href=""><?=$as_company?> 소개</a>
                                <? include G5_THEME_PATH.'/doc/nav01.php';?>
                            </li>
                            <li>
                                <a href="">제품소개</a>
                                <? include G5_THEME_PATH.'/doc/nav02.php';?>
                            </li>
                            <li>
                                <a href="">갤러리</a>
                                <ul class="submenu">
                                    <li><a href="../bbs/board.php?bo_table=gal">갤러리</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">고객지원</a>
                                <ul class="submenu">
                                    <li><a href="../bbs/board.php?bo_table=bbs">문의게시판</a></li>
                                    <li><a href="../bbs/board.php?bo_table=pds">자료실</a></li>
                                    <li><a href="../bbs/board.php?bo_table=nos">공지사항</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=""><i class="xi-bars"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

<?php
if(!defined('_INDEX_')) { // index가 아닐 떄...
    include G5_THEME_PATH.'/detail.head.php'; // 서버페이지 해드...
}
?>