<footer class="l-footer p-footer">
        <!-- トップスクロールボタン-->
        <div class="p-topscroll">
            <button id="js-scroll" class="p-topscroll__wrapper">
                <p class="p-topscroll__text u-uppercase">top</p>
            </button>
        </div>
        <div class="l-container -narrow pc">
            <div class="p-footer__top">
                <nav class="p-footer__nav">
                    <ul class="p-footer__list">
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/")); ?>"> &emsp;Home &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/about/")); ?>"> &emsp;OPERAとは &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/home-funeral/")); ?>"> &emsp;自宅葬サービス &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/service/")); ?>"> &emsp;他サービス &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/omoide/")); ?>"> &emsp;思い出トランク &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/staff/")); ?>"> &emsp;スタッフ紹介 &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/information/")); ?>"> &emsp;インフォメーション &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/information#column/")); ?>"> &emsp;コラム &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/contact#privacy")); ?>"> &emsp;プライバシーポリシー &emsp;/</a></li>
                        <li class="p-footer__nav-item"><a href="<?php echo esc_url( home_url("/law/")); ?>"> &emsp;特定商取引法に基づく表記 &emsp;/</a></li>
                    </ul>
                </nav>
            </div>
            <!-- p-footer__top-->
            <div class="p-footer__middle">
                <div class="p-footer__left">
                    <div class="p-footer__company">
                        <p class="p-footer__company-name">株式会社<span class="u-uppercase">good luck &d</span></p>
                        <p class="p-footer__company-address">東京都港区南青山2丁目2番15号<br>ウィン青山834</p>
                    </div>
                    <div class="p-footer__sns">
                        <a href="https://www.instagram.com/operaaoyama1122/" traget="_blank" rel="noreferrer noopener"><img class="p-footer__sns-instagram" src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="インスタグラムロゴ" width="40px"></a>
                        <a href="#" traget="_blank" rel="noreferrer noopener"><img class="p-footer__sns-line" src="<?php echo get_template_directory_uri(); ?>/img/line.svg" alt="ラインロゴ" width="40px"></a>
                    </div>
                </div>
                <div class="p-footer__right">
                    <div class="p-footer__right-top">
                        <a href="<?php echo esc_url( home_url("/contact/")); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/mail_btn.png" alt=""></a>
                    </div>
                    <div class="p-footer__right-bottom">
                        <a href="tel:0120-71-1212"><img src="<?php echo get_template_directory_uri(); ?>/img/freedial.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- p-footer__middle-->
        </div>
        <!-- l-container-->
        <div class="p-footer__logo">
            <?php if(!is_front_page()): ?>
            <a href="<?php echo esc_url( home_url()); ?>">
                <img class="p-footer__logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            </a>
            <?php else: ?>
            <img class="p-footer__logo-img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            <?php endif; ?>
            <span class="u-visually-hidden">オペラ青山</span>
        </div>
        <!-- spレイアウト -->
        <div class="p-footer__sp sp">
            <div class="p-footer__sp">
                <div class="p-footer__sp-tel">
                    <a href="tel:0120-71-1212"><img src="<?php echo get_template_directory_uri(); ?>/img/sp/footer_freedial.png" alt=""></a>
                </div>
                <div class="p-footer__sp-mail">
                    <a href="<?php echo esc_url( home_url("/contact/")); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/sp/footer_mail.png" alt=""></a>
                    <p class="p-footer__sp-text">※生前のご相談も承っております</p>
                </div>
                <div class="p-footer__sns">
                    <a href="https://www.instagram.com/operaaoyama1122/"><img class="p-footer__sns-instagram" src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="インスタグラムロゴ" width="60px" traget="_blank" rel="noreferrer noopener"></a>
                    <a href="#"><img class="p-footer__sns-line" src="<?php echo get_template_directory_uri(); ?>/img/line.svg" alt="ラインロゴ" width="60px"></a>
                </div>
                <div class="p-footer__company-sp">
                    <p class="p-footer__company-name-sp">株式会社<span class="u-uppercase">good luck &d</span></p>
                    <p class="p-footer__company-address-sp">東京都港区南青山2丁目2番15号<br>ウィン青山834</p>
                </div>
            </div>
            <div class="p-footer__sp-list">
                <nav class="p-footer__sp-nav">
                    <ul class="p-footer__sp-list">
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/")); ?>"><span class="uppercase">Home</span></a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/about/")); ?>">OPERAとは</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/home-funeral/")); ?>">自宅葬サービス</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/service/")); ?>">他サービス</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/omoide/")); ?>">思い出トランク</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/staff/")); ?>">スタッフ紹介</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/information/")); ?>">インフォメーション</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/information#column/")); ?>">コラム</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/contact#privacy")); ?>">プライバシーポリシー</a></li>
                        <li class="p-footer__sp-list-item"><a href="<?php echo esc_url( home_url("/law/")); ?>">特定商取引法に基づく表記</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-footer__copyright">
            <p class="p-footer__copyright-text">&copy;<span class="u-uppercase">2021 good luck &d</span></p>
        </div>
    </footer>
    <div class="l-bottom p-bottom sp">
        <div class="p-bottom__wrapper">
            <div class="p-bottom__left">
                <a href="tel:0120711212">
                    <div class="p-bottom__flex">
                        <div class="p-bottom__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/call.png" alt="">
                        </div>
                        <div class="p-bottom__text">
                            <p>24時間<br><span class="p-bottom__text-strong">電話受付</span></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="p-bottom__right">
                <a href="<?php echo esc_url( home_url("/contact/")); ?>">
                    <div class="p-bottom__flex">
                        <div class="p-bottom__icon -mail">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/mail.png" alt="">
                        </div>
                        <div class="p-bottom__text">
                            <p>ご相談・お申し込み<br><span class="p-bottom__text-strong">メール受付</span></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
