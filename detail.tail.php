
    <!-- 서브메뉴 클릭시 폰트색 바뀌게-->
    <script>
        $(function () {
            var num = <?= $page_num ?>;
            $('.aside_menu ul>li').eq(num-1).addClass('on')
        })
    </script>




</div>
                    </article>
                    <aside class="aside">
                        <div class="aside_menu">
                            <? include G5_THEME_PATH.'/doc/nav0'.$cate_num.'.php';?>
                        </div>
                        <div class="aside_customer">
                            <strong>contact us <i class="xi-user-plus-o"></i></strong>
                            <a href="tel:<?= $as_tel?>"><?= $as_tel?></a>
                            <ul>
                                <li>Fax : <?= $as_fax?></li>
                                <li>e-mail : <?= $as_mail?></li>
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>



