<?php
/*
Template Name: お申し込み・ご相談
*/
?>
<?php get_header("2"); ?>
    <main>
        <section class="l-spacer">
            <div class="c-subtitle -contact">
                <h2 class="c-title02 u-centerposition" title="Contact">お申し込み・ご相談</h2>
            </div>
        </section>
        <section class="l-form p-form">
            <div class="l-container -forSub">
                <div class="l-spacer">
                    <h2 class="c-heading" title="contact form">お申し込み・ご相談フォーム</h2>
                </div>
                <div class="l-spacer -notop">
                    <div class="p-form__bg">
                        <div class="p-form__top">
                            <p class="p-form__top-text">⾃宅葬サービス各種商品のお申込みは、下記フォームより受付いたします。<br>
                                また、ペット葬儀の事前ご相談、アフターサポートへのお問い合わせもお気軽にご連絡ください。<br>
                                <span class="u-bold">15:00までの⽀払い完了(クレジット決済・代⾦⼿渡しの場合は申込み完了)で、その⽇のうちに葬儀セットをお届けします。</span></p>
                        </div>
                        <div class="p-form__middle">
                            <p class="p-form__middle-text">お急ぎの⽅はフリーダイヤルからお問い合わせください。</p>
                        </div>
                        <div class="p-form__bottom">
                            <div class="p-form__bottom-bg">
                                <p class="p-form__bottom-time">24時間受付</p>
                                <p class="p-form__bottom-tel">
                                    <?php if(is_mobile()): ?>
                                    <a href="tel:0120-71-1212">0120-71-1212</a>
                                    <?php else: ?>
                                        0120-71-1212
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-form__attention">
                    <p class="p-form__attention-text">お問い合わせフォームをご利⽤の際は、必ず「<a href="#privacy" class="u-gold">プライバシーポリシー</a>」をご⼀読いただき、<br>その内容に同意していただけましたら<br>下記フォームに必要事項をご⼊⼒の上、「⼊⼒内容確認画⾯」ボタンを押してください。</p>
                </div>
                <div class="l-spacer">
                    <?php if(have_posts()): 
                        while(have_posts()): the_post();
                        ?>
                            <?php the_content(); ?>
                        <?php endwhile; 
                        endif;
                        ?>
                </div>
            </div>
        </section>
        <section class="l-privacypolicy p-privacypolicy">
            <div class="l-container -forSub">
                <div class="l-spacer">
                    <h2 id="privacy" class="c-heading" title="privacy policy">プライバシーポリシー</h2>
                </div>
                <div class="p-privacypolicy__wrap">
                    <p class="p-privacypolicy__text">当サイトの運営に際し、お客様のプライバシーを尊重し個⼈情報に対して⼗分な配慮を⾏うとともに、<br>⼤切に保護し、適正な管理を⾏うことに努めております。</p>
                </div>
                <div class="p-privacypolicy__wrap">
                    <h3 class="p-privacypolicy__title">【個人情報の利用目的】</h3>
                    <div class="p-privacypolicy__purpose">
                        <div class="p-privacypolicy__purpose-title">
                            <p>A)</p>
                        </div>
                        <p class="p-privacypolicy__text">お客様のご要望に合わせたサービスをご提供するための各種ご連絡。</p>
                    </div>
                    <div class="p-privacypolicy__purpose">
                        <div class="p-privacypolicy__purpose-title">
                            <p>B)</p>
                        </div>
                        <p class="p-privacypolicy__text">お問い合わせいただいたご質問への回答のご連絡。</p>
                    </div>
                </div>
                <div class="p-privacypolicy__wrap">
                    <ul class="p-privacypolicy__list">
                        <li class="p-privacypolicy__list-item">公正かつ適正な⼿段で、上記⽬的に必要となる個⼈情報を収集します。</li>
                        <li class="p-privacypolicy__list-item">要配慮個⼈情報を取得する際は、ご本⼈の同意を得るものとします。</li>
                        <li class="p-privacypolicy__list-item">取得した個⼈情報・要配慮個⼈情報は、ご本⼈の同意なしに⽬的以外では利⽤しません。</li>
                        <li class="p-privacypolicy__list-item">情報が漏洩しないよう対策を講じ、従業員だけでなく委託業者も監督します。</li>
                        <li class="p-privacypolicy__list-item">国内外を問わず、ご本⼈の同意を得ずに第三者に情報を提供しません。
                        </li>
                        <li class="p-privacypolicy__list-item">ご本⼈からの求めに応じ情報を開⽰します。</li>
                        <li class="p-privacypolicy__list-item">公開された個⼈情報が事実と異なる場合、訂正や削除に応じます。</li>
                        <li class="p-privacypolicy__list-item">個⼈情報の取り扱いに関する苦情に対し、適切・迅速に対処します。</li>
                        <li class="p-privacypolicy__list-item">本個⼈情報保護⽅針の適⽤範囲は本ホームページ内のみとします。</li>
                    </ul>
                </div>
                <div class="p-privacypolicy__wrap">
                    <h3 class="p-privacypolicy__title">【個⼈情報に関するお問い合わせ窓⼝】</h3>
                    <div class="p-privacypolicy__address">
                        <p class="p-privacypolicy__address-text">
                            ペット葬儀の<span class="u-uppercase">opera</span>(オペラ)<br>運営会社：株式会社<span class="u-uppercase">gool luck &d</span><br>03-6721-1122
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>