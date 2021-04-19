<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;700&family=Great+Vibes&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js" defer></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sass/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/humberger.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bannar.js" defer></script>
    <meta name="keywords" content="ペット,葬儀,⾃宅葬,火葬,OPERA,オペラ,東京,横浜,川崎,⽕葬,ペットロス">
    <title>東京23区・横浜・川崎でのペット自宅葬儀・火葬｜OPERA（オペラ青山）</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="l-header p-header">
        <div class="p-humberger sp">
            <div class="p-humberger__button">
                <button class="p-humberger__menu">
                    <span class="p-humberger__menu-line -top"></span>
                    <span class="p-humberger__menu-line -middle"></span>
                    <span class="p-humberger__menu-line -bottom"></span>
                </button>
            </div>
            <nav class="p-humberger__gnav">
                <h2 class="u-visually-hidden">ヘッダーナビゲーション</h2>
                <div class="p-humberger__gnav-wrap">
                    <ul class="p-humberger__gnav-menu">
                        <li class="p-humberger__gnav-menu-item">
                            <a href="<?php echo esc_url( home_url("/about/")); ?>"><span class="u-uppercase">opera</span>とは<span><span class="p-humberger__en">About</span></span></a>
                        </li>
                        <li class="p-humberger__gnav-menu-item">
                            <a href="<?php echo esc_url( home_url("/home-funeral/")); ?>">自宅葬サービス<span class="p-humberger__en">Home Funeral</span></a>
                        </li>
                        <li class="p-humberger__gnav-menu-item">
                            <a href="<?php echo esc_url( home_url("/service/")); ?>">他サービス<span class="p-humberger__en">Service</span></a>
                        </li>
                        <li class="p-humberger__gnav-menu-item">
                            <a href="<?php echo esc_url( home_url("/omoide/")); ?>">思い出トランク<span class="p-humberger__en">Omoide</span></a>
                        </li>
                        <li class="p-humberger__gnav-menu-item">
                            <a href="<?php echo esc_url( home_url("/staff/")); ?>">スタッフ紹介<span class="p-humberger__en">Staff</span></a>
                        </li>
                        <li class="p-humberger__gnav-menu-item">
                            <a href="<?php echo esc_url( home_url("/all/")); ?>">インフォメーション<span class="p-humberger__en">Information</span></a>
                        </li>
                            <button class="p-humberger__close-button">
                                <span class="u-visually-hidden">閉じる</span>
                                <div class="p-humberger__circle">
                                    <span class="p-humberger__line"></span>
                                </div>
                            </button>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="l-container -narrow">
            <div class="p-header__top">
                <div class="p-header__top-left">
                    <div class="p-header__logo">
                        <h1 class="u-visually-hidden"><span class="u-uppercase">opera</span>（オペラ青山）</h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.png" alt="オペラ青山ロゴ">
                    </div>
                </div>
                <div class="p-header__top-right">
                    <div class="p-header__freedial pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header_freedial.png" alt="電話番号">
                    </div>
                    <div class="p-header__mail pc">
                        <a href="<?php echo esc_url( home_url("/contact/")); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header_mailbtn.png" alt="お申し込み・ご相談メール"></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="p-header__nav pc">
            <h2 class="u-visually-hidden">ヘッダーナビゲーション</h2>
            <div class="l-container -narrow">
                <div class="p-header__flex">
                    <ul class="p-header__list">
                        <li class="p-header__list-item">
                            <a href="<?php echo esc_url( home_url("/about/")); ?>" class="p-header__list-jp" title="About"><span class="u-uppercase">opera</span>とは</a>
                        </li>
                        <li class="p-header__list-item">
                            <a href="<?php echo esc_url( home_url("/home-funeral/")); ?>" class="p-header__list-jp" title="Home Funeral">自宅葬サービス</a>
                        </li>
                        <li class="p-header__list-item">
                            <a href="<?php echo esc_url( home_url("/service/")); ?>" class="p-header__list-jp" title="Service">他サービス</a>
                        </li>
                    </ul>
                    <ul class="p-header__list">
                        <li class="p-header__list-item">
                            <a href="<?php echo esc_url( home_url("/omoide/")); ?>" class="p-header__list-jp" title="Omoide">思い出トランク</a>
                        </li>
                        <li class="p-header__list-item">
                            <a href="<?php echo esc_url( home_url("/staff/")); ?>" class="p-header__list-jp" title="Staff">スタッフ紹介</a>
                        </li>
                        <li class="p-header__list-item">
                            <a href="<?php echo esc_url( home_url("/all/")); ?>" class="p-header__list-jp" title="Information">インフォメーション</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
