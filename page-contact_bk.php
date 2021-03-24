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
                                <p class="p-form__bottom-tel">0120-71-1212</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-form__attention">
                    <p class="p-form__attention-text">お問い合わせフォームをご利⽤の際は、必ず「<a href="#privacy" class="u-gold">プライバシーポリシー</a>」をご⼀読いただき、<br>その内容に同意していただけましたら<br>下記フォームに必要事項をご⼊⼒の上、「⼊⼒内容確認画⾯」ボタンを押してください。</p>
                </div>
                <div class="l-spacer">
                    <form action="">
                        <div class="p-form__flex">
                            <div class="p-form__left">
                                <p class="p-form__title p-form__must" for="koumoku">お問い合わせ項目</p>
                                <div class="p-form__select">
                                    <input type="radio" name="lists" id="gojitaku" value="gojitakucourse"><label for="gojitaku">ご⾃宅葬(コース)お申し込み</label>
                                </div>
                                <div class="p-form__select">
                                    <input type="radio" name="lists" id="gojitakutanpin" value="gojitakucourse_tanpin"><label for="gojitakutanpin">ご⾃宅葬(単品)お申し込み</label>
                                </div>
                                <div class="p-form__select">
                                    <input type="radio" name="lists" id="trunk"><label for="trunk" value="trunk">思い出トランクお申し込み</label>
                                </div>
                                <div class="p-form__select">
                                    <input type="radio" name="lists" id="otherservice" value="otherservice"><label for="otherservice">他サービスについて</label>
                                </div>
                                <div class="p-form__select">
                                    <input type="radio" name="lists" id="another" value="anotherquestion"><label for="another">その他ご相談やお問い合わせ</label>
                                </div>
                            </div>
                            <div class="p-form__right">
                                <div class="p-form__wrap">
                                    <label for="yourcourse" class="p-form__title p-form__must">コース商品</label>
                                    <select name="yourcourse" id="yourcourse" praceholder="選択してください">
                                        <option disabled selected value="">選択してください</option>
                                        <option value="">自宅葬ロミオコース(お花：ピンク系)</option>
                                        <option value="">自宅葬ロミオコース(お花：ブルー系)</option>
                                        <option value="">自宅葬ジュリエットコース(お花：ピンク系)</option>
                                        <option value="">自宅葬ジュリエットコース(お花：ブルー系)</option>
                                    </select>
                                </div>
                                <div class="p-form__wrap">
                                    <label for="yourcourse" class="p-form__title p-form__must">牧師訪問希望⽇時</label>
                                    <p class="p-form__text">第一希望</p>
                                    <div class="p-form__dateselect">
                                        <select name="yourdate" id="yourdate" praceholder="選択してください">
                                            <option disabled selected value="">日付選択</option>
                                        </select>
                                        <select name="yourtime" id="yourtime" praceholder="選択してください">
                                            <option disabled selected value="">時間選択</option>
                                        </select>
                                    </div>
                                    <p class="p-form__text">第二希望</p>
                                    <div class="p-form__dateselect">
                                        <select name="yourdate2" id="yourdate2" praceholder="選択してください">
                                            <option disabled selected value="">日付選択</option>
                                        </select>
                                        <select name="yourtime2" id="yourtime2" praceholder="選択してください">
                                            <option disabled selected value="">時間選択</option>
                                        </select>
                                    </div>
                                    <p class="p-form__annotation">※お申込みから3⽇後までの⽇程でご選択ください。所要時間は30分程度です。</p>
                                </div>
                                <div class="p-form__wrap">
                                    <label for="yourcourse" class="p-form__title p-form__must">火葬車希望⽇時</label>
                                    <p class="p-form__text">第一希望</p>
                                    <div class="p-form__dateselect">
                                        <select name="yourdate3" id="yourdate3" praceholder="選択してください">
                                            <option disabled selected value="">日付選択</option>
                                        </select>
                                        <select name="yourtime4" id="yourtime4" praceholder="選択してください">
                                            <option disabled selected value="">時間選択</option>
                                        </select>
                                    </div>
                                    <p class="p-form__text">第二希望</p>
                                    <div class="p-form__dateselect">
                                        <select name="yourdate2" id="yourdate2" praceholder="選択してください">
                                            <option disabled selected value="">日付選択</option>
                                        </select>
                                        <select name="yourtime2" id="yourtime2" praceholder="選択してください">
                                            <option disabled selected value="">時間選択</option>
                                        </select>
                                    </div>
                                    <p class="p-form__annotation">※お申込みから3⽇後までの⽇程でご選択ください。所要時間は30分程度です。</p>
                                    <p class="p-form__annotation">※牧師訪問と同じ⽇付も選択可能です。所要時間は2時間程度です。</p>
                                </div>
                                <div class="p-form__wrap">
                                    <label for="yourpayment" class="p-form__title p-form__must">お支払い方法</label>
                                    <select name="yourpayment" id="yourpayment" praceholder="選択してください">
                                        <option disabled selected value="">選択してください</option>
                                        <option value="">クレジット決済</option>
                                        <option value="">代⾦⼿渡し</option>
                                        <option value="">銀⾏振込</option>
                                        <option value="">Squareカード決済入金</option>
                                    </select>
                                    <ul class="p-form__annotation">
                                        <li>※クレジット決済→商品お届け時にお⽀払い</li>
                                        <li>※代⾦⼿渡し→商品お届け時にお⽀払い</li>
                                        <li>※Squareカード決済⼊⾦→「思い出トランク」のみで利用可能です</li>
                                    </ul>
                                </div>
                                <div class="p-form__wrap">
                                    <label for="yourname" class="p-form__title p-form__must">お名前</label>
                                    <input type="text" id="yourname" name="yourname" placeholder="例）鈴木　花子" autocomplete="name" />
                                </div>
                                <div class="p-form__wrap">
                                    <label for="tel" class="p-form__title p-form__must">電話番号</label>
                                    <input type="text" id="tel" name="tel" placeholder="例)09023456789">
                                </div>
                                <div class="p-form__wrap">
                                    <label for="mail" class="p-form__title p-form__must">メールアドレス</label>
                                    <input type="text" id="mail" name="mail" placeholder="例)info@opera-pet.com">
                                </div>
                                <div class="p-form__wrap">
                                    <p>確認のため、もう一度ご入力ください。</p>
                                    <input type="text" name="mail" placeholder="例)info@opera-pet.com">
                                </div>
                                <div class="p-form__wrap">
                                    <label class="p-form__title p-form__must">住所</label>
                                    <p class="p-form__annotation">ご⾃宅葬をお申し込みの⽅は必ずご⼊⼒ください。対応エリアは東京23区・横浜市と川崎区です。＞<a href="#" class="u-gold">詳しくはこちら</a></p>
                                    <label class="p-form__poscalmark">〒</label><input type="text" name="poscal-code" placeholder="1000000">
                                </div>
                                <div class="p-form__wrap">
                                    <p class="p-form__text">都道府県</p>
                                    <select name="address-level1" id="address-level1" praceholder="選択してください">
                                        <option disabled selected value="">都道府県を選択してください</option>
                                        <option value="">東京都</option>
                                        <option value="">神奈川県</option>
                                    </select>
                                </div>
                                <div class="p-form__wrap">
                                    <p class="p-form__text">市区町村・番地</p>
                                    <input type="text" name="address-level1" placeholder="例）都港区南⻘⼭2-2-15">
                                </div>
                                <div class="p-form__wrap">
                                    <p class="p-form__text">マンション・ビル名（任意）</p>
                                    <input type="text" name="address-level1" placeholder="例）ウィン⻘⼭834">
                                </div>
                            </div>
                        </div><!-- p-form__flex-->
                        <div class="p-form__bottom">
                            <div class="p-form__wrap">
                                <label for="comment" class="p-form__title p-form__any">お問い合わせ内容</label>
                                <textarea id="comment" name="comment" placeholder="お問い合わせ詳細をご⼊⼒ください"></textarea>
                            </div>
                            <div class="p-form__bg">
                                <p class="p-form__bg-title">メール受信に関するご注意事項</p>
                                <p class="p-form__bg-text">当社からのメールが受け取れるよう必ずドメイン受信設定をお願いします（info@opera-pet.com）。<br>hotmail、yahooメール等のフリーメールをご利⽤の場合、当社からのメールが誤って迷惑メール扱いになってしまっている場合もございます。<br>メールが届かない場合は迷惑メールフォルダ等も⼀度ご確認下さいませ。</p>
                            </div>
                        </div>
                        <div class="p-form__checkbox">
                            <input type="checkbox" name="checkbox"><label>「<a href="#privacy" class="u-gold">プライバシーポリシー</a>」の内容に同意する<br>※ご同意いただけない場合は送信ができません。</label>
                        </div>
                        <div class="p-form__button">
                            <input type="submit" value="入力内容の確認へ" name="submit">
                        </div>
                    </form>
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