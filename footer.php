  <footer class="footer">
    <div class="footer__inner inner">
      <a href="<?php echo esc_url(home_url()); ?>" class="footer__logo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/logo.svg')); ?>" alt="自然の恵み農園">
      </a>
      <div class="footer__nav">
        <ul class="footer__nav-list">
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>" class="footer__nav-link">ホーム</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/#about" class="footer__nav-link">私たちについて</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/#works" class="footer__nav-link">活動紹介</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo esc_url(home_url()); ?>/#faq" class="footer__nav-link">よくあるご質問</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo home_url('/#news'); ?>" class="footer__nav-link">お知らせ</a>
          </li>
          <li class="footer__nav-item">
            <a href="<?php echo home_url('/#access'); ?>" class="footer__nav-link">アクセス</a>
          </li>
        </ul>
      </div>
      <div class="footer__location">
        <p class="footer__location-text">
          〒123-4567<br>
          千葉県〇〇市××町1丁目23-45
        </p>
      </div>
      <div class="footer__contact">
        <p class="footer__contact-text">
          TEL:123-4567-8910<br>
          FAX:12-345-6789
        </p>
      </div>
      <div class="footer__sns">
        <div class="sns__icon">
          <a href="#" class="sns__icon-link"><img src="<?php echo esc_url(get_theme_file_uri('/images/x-icon.svg')); ?>" alt="X"></a>
        </div>
        <div class="sns__icon">
          <a href="#" class="sns__icon-link"><img src="<?php echo esc_url(get_theme_file_uri('/images/insta-icon.svg')); ?>" alt="Instagram"></a>
          </div>
        <div class="sns__icon">
          <a href="#" class="sns__icon-link"><img src="<?php echo esc_url(get_theme_file_uri('/images/youtube-icon.svg')); ?>" alt="YouTube"></a>
        </div>
      </div>
      <div class="footer__copyright">
        <p class="footer__copyright-text">
          &copy;&nbsp;shizen-no-megumi-nouen&nbsp;Inc&nbsp;.2023
        </p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>