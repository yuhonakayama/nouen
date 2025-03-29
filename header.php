<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" content="noindex,nofollow" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる</title>
  <meta name="description" content="自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('/images/ogp-image.png')); ?>" />
  <meta property="og:site_name" content="自然の恵み農園" />
  <meta property="og:description" content="自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。" />
  <meta name="twitter:card" content="summary" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/favicon.ico')); ?>" />
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri('/images/apple-touch-icon.png')); ?>" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>" />

  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" defer></script>
  <script src="<?php echo esc_url(get_theme_file_uri('/js/index.js')); ?>" defer></script>
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <!-- ヘッダー -->
  <header id="header" class="header js-header">
    <div class="header__inner">
      <div class="header__content">
        <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
        <<?php echo $html_tag; ?> class="header__name">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/logo.svg')); ?>" alt="自然の恵み農園">
          </a>
        </<?php echo $html_tag; ?>>
        <nav class="header__nav lg-none">
          <ul class="header__items">
            <li class="header__item">
              <a href="#about" class="header__link">私たちについて</a>
            </li>
            <li class="header__item">
              <a href="#works" class="header__link">活動紹介</a>
            </li>
            <li class="header__item">
              <a href="#faq" class="header__link">よくあるご質問</a>
            </li>
            <li class="header__item">
              <a href="<?php echo esc_url(home_url()); ?>/news.php" class="header__link">お知らせ</a>
            </li>
            <li class="header__item">
              <a href="#access" class="header__link">アクセス</a>
            </li>
          </ul>
        </nav>
        <div class="button--header lg-none">
          <a href="<?php echo esc_url(home_url()); ?>/contact-page.php" class="button__link--header">お問い合わせ</a>
        </div>
      </div>
    </div>
  </header>

  <!-- ハンバーガーメニュー -->
  <div class="hamburger js-hamburger lg-show">
    <span class="hamburger__line"></span>
    <span class="hamburger__line"></span>
    <span class="hamburger__text"></span>
  </div>

  <!-- ドロワーメニュー -->
  <div class="drawer-menu js-drawer">
    <div class="drawer-menu__inner">
      <ul class="drawer-menu__items">
        <li class="drawer-menu__item">
          <a href="<?php echo esc_url(home_url()); ?>" class="drawer-menu__link">トップ<span class="drawer-menu__link--en">TOP</span></a>
        </li>
        <li class="drawer-menu__item">
          <a href="#about" class="drawer-menu__link">私たちについて<span class="drawer-menu__link--en">ABOUT</span></a>
        </li>
        <li class="drawer-menu__item">
          <a href="#faq" class="drawer-menu__link">よくあるご質問<span class="drawer-menu__link--en">FAQ</span></a>
        </li>
        <li class="drawer-menu__item">
          <a href="#works" class="drawer-menu__link">活動紹介<span class="drawer-menu__link--en">WORKS</span></a>
        </li>
        <li class="drawer-menu__item">
          <a href="<?php echo esc_url(home_url()); ?>/news.php" class="drawer-menu__link">お知らせ<span class="drawer-menu__link--en">NEWS</span></a>
        </li>
        <li class="drawer-menu__item">
          <a href="#access" class="drawer-menu__link">アクセス<span class="drawer-menu__link--en">ACCESS</span></a>
        </li>
      </ul>
      <div class="drawer__contact">
        <div class="drawer__tel">
          <p class="drawer__tel-text">問い合わせ電話</p>
          <p class="drawer__tel-number">123-4567-8910</p>
        </div>
        <div class="drawer__hours">
          <p class="drawer__hours-text">【受付時間】</p>
          <p class="drawer__hours-number">10:00&nbsp;~&nbsp;18:00（土日祝を除く）</p>
        </div>
        <div class="drawer__button button--header">
          <a href="<?php echo esc_url(home_url()); ?>/contact-page.php" class="button__link--header">お問い合わせ</a>
        </div>
      </div>
    </div>
  </div>