<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>





<main>
            <section class="mainVisual">
                <div class="main_slide">
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/OHvudOWjS5c" title="한울캠핑카" frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/__TYWxNIx40" title="한울캠핑카" frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/lyCQgZ-Ax6s" title="한울캠핑카" frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/FLEE2Mm3d40" title="한울캠핑카" frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                    <figure>
                        <div class="iframe_case">
                            <iframe src="https://www.youtube.com/embed/DWrH6-WxSH0" title="한울캠핑카" frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                </div>
                <div class="m_link">
                    <ul class="submenu">
                        <li><a href="../htm/m021.php">HWC540DL</a></li>
                        <li><a href="../htm/m022.php">HWC620FL</a></li>
                        <li><a href="../htm/m023.php">HWC680FL</a></li>
                        <li><a href="../htm/m024.php">HWC540FL</a></li>
                        <li><a href="../htm/m025.php">HWC790FL</a></li>
                    </ul>
                </div>
            </section>
            <section class="mainMap">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1673849555583"
                    class="root_daum_roughmap root_daum_roughmap_landing _map_">
                </div>

                <!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
                <script charset="UTF-8" class="daum_roughmap_loader_script"
                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp": "1673849555583",
                        "key": "2dfsz",
                        //"mapWidth": "640",
                        //"mapHeight": "360"
                    }).render();
                </script>
            </section>
            <section class="mainCustomer">
                <div class="inner">
                    <div class="news">
                        <h3>news &amp; notice <a href="..."><i class="xi-plus"></i></a></h3>
                        <div class="con">

                        </div>
                    </div>
                    <div class="sang">
                        <figure>
                            <img src="<?= G5_THEME_URL ?>/img/sang.png" alt="">
                        </figure>
                    </div>
                    <div class="contact">
                        <a href="tel:051-786-2317">051-786-2317</a>
                        <p>부산 경남 캠핑카 제작 전문 업체 트럭 개조 캠핑카 주문 제작 한울캠핑카</p>
                        <a
                            href="https://www.youtube.com/results?search_query=%ED%95%9C%EC%9A%B8%EC%BA%A0%ED%95%91%EC%B9%B4">
                            <i class="xi-youtube-play"></i>
                        </a>
                    </div>
                </div>
            </section>
        </main>















<?php
include_once(G5_THEME_PATH.'/tail.php');