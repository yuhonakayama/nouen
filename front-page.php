<?php
  get_header();
?>

  <main>
  <?php
  // WordPressループの開始
  if (have_posts()) :
    while (have_posts()) :
      the_post();
  ?>

    <!-- メインビュー -->
    <div class="main-view" style="background-image: url('<?php echo get_theme_file_uri('/images/FV.jpg'); ?>');">
      <div class="main-view__inner">
        <div class="main-view__content">
          <div class="main-view__logo">
            <img src="<?php echo get_theme_file_uri('/images/logo-2.svg'); ?>" alt="自然の恵み農園">
          </div>
          <h1 class="main-view__title">自然の恵みを感じ、<br class="md-show">豊かな未来を。</h1>
        </div>
        <a href="<?php echo home_url('/news-content.html'); ?>" class="main-view__news-wrapper">
          <div class="main-view__news-item">
            <div class="main-view__news-header">
              <p class="main-view__news-tag">News</p>
              <time datetime="2025-03-09" class="main-view__news-date">YYYY.MM.DD</time>
            </div>
            <p class="main-view__news-title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
          </div>
        </a>
        <div class="scroll_down lg-none">
          <span>Scroll</span>
        </div>
      </div>
    </div>

    <!-- 私たちについて -->
    <section id="about" class="about">
      <div class="about__inner inner">
        <div class="about__content">
          <h2 class="about__title"><img src="<?php echo get_theme_file_uri('/images/logo.svg'); ?>" alt="自然の恵み農園"></h2>
          <div class="about__content-item">
            <p class="about__content-content">自然の恵み農園は、<br>自然の恵みと動物の尊さが調和する<br class="md-show">特別な場所です。<br>新鮮で美味しい農産物を栽培し、<br class="md-show">心温まる動物たちと触れ合える場所<br class="md-show">でもあります。</p>
            <p class="about__content-content">自然の恵みを受け、<br class="md-show">動物たちとの特別なひとときを<br class="md-show">楽しんでいただける場所として、<br>私たちは誇りを持って活動をしています。<br>一緒に自然と動物の美しさを共有しましょう。</p>
          </div>
        </div>
        <div class="about__images">
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri('/images/about-image01.png'); ?>" alt="子ヤギ">
          </div>
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri('/images/about-image02.png'); ?>" alt="トマト">
          </div>
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri('/images/about-image03.png'); ?>" alt="生産者">
          </div>
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri('/images/about-image04.png'); ?>" alt="乳牛の親子">
          </div>
        </div>
      </div>
    </section>

    <!-- 活動紹介 -->
    <section id="works" class="works">
      <div class="works__inner">
        <h2 class="works__title section-title">活動紹介</h2>
        <div class="works__content">
          <!-- タブ -->
          <div class="works__tab tab">
            <div class="tab__list">
              <button class="tab__button js-tab-button is-active">農園</button>
              <button class="tab__button js-tab-button">牧場</button>
              <button class="tab__button js-tab-button">オンライン販売</button>
            </div>

            <div class="tab__contents">
              <div class="tab__content js-tab-content is-active">
                <p class="tab__text">
                  私たちは、&nbsp;「持続可能な農業」&nbsp;を掲げて、自然の恵みに感謝しながら、農作物を育てています。 <br>
                  無農薬で、体にも環境にも優しく、季節ごとに異なる品種を育て、提供しています。<br>
                  ぜひ一度、農園にお越し頂き、自分の手で収穫した新鮮な野菜、果物をお召し上がりください。
                </p>
                <div class="tab__images">
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-nouen04.png'); ?>" alt="畑に苗が植えられている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-nouen03.png'); ?>" alt="畑仕事をしている男女が野菜を持って話をしている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-nouen02.png'); ?>" alt="真っ赤ないちごがたくさん入った箱を手に持っている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-nouen01.png'); ?>" alt="野菜を持った女性の両サイドで男性がガッツポーズしている様子">
                  </div>
                </div>
              </div>
              <div class="tab__content js-tab-content">
                <p class="tab__text">
                  私たちの牧場は、自然と動物との共存を尊重し、持続可能な農業の原則に基づいて運営されています。<br>
                  広々とした環境で、動物たちとのふれ合いを通じて、自然の恵みと動物の尊さを感じ、<br>
                  心温まるひとときを過ごしていただけます。
                </p>
                <div class="tab__images">
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-bokujo04.png'); ?>" alt="子ヤギがこちらを見ている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-bokujo03.png'); ?>" alt="豚が豊かな土の上で朝日をバックに立っている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-bokujo02.png'); ?>" alt="馬2頭がこちらを見ている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-bokujo01.png'); ?>" alt="青空の下でたくさんの乳牛が牧草を食べている様子">
                  </div>
                </div>
              </div>
              <div class="tab__content js-tab-content">
                <p class="tab__text">
                  自然の恵み農園から直接お届けする、新鮮で美味しい農産物と<br>
                  手作りのジャムやバターなどの加工品を提供しています。<br>
                  自然の恩恵をご自宅でお楽しみいただけます。<br>
                </p>
                <div class="tab__images">
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-ec04.png'); ?>" alt="カラフルで新鮮な野菜が並べられている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-ec03.png'); ?>" alt="瓶詰のいちごジャムとカラフルなベリーが飾られている様子">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-ec02.png'); ?>" alt="おいしそうなバター">
                  </div>
                  <div class="tab__image">
                    <img src="<?php echo get_theme_file_uri('/images/work-ec01.png'); ?>" alt="キャラメルソースのかかったアイスとキャラメル">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- よくあるご質問 -->
    <section id="faq" class="faq">
      <div class="faq__inner inner">
        <h2 class="faq__title section-title">よくあるご質問</h2>
        <!-- アコーディオン -->
          <div class="faq__accordion accordion js-accordion">
            <div class="accordion__container">
              <div class="accordion__item js-accordion__item">
                <div class="accordion__question">
                  <span class="accordion__Q">Q</span>
                  <h3 class="accordion__title js-accordion__title">
                    農園の野菜や果物は有機栽培ですか？
                  </h3>
                </div>
                <div class="accordion__content js-accordion__content">
                  <div class="accordion__answer">
                    <span class="accordion__A">A</span>
                    <p class="accordion__text">
                      はい、私たちの農園では有機栽培の原則に従って野菜と果物を栽培しています。<br>
                      化学肥料や農薬を極力使用せず、土壌と作物の健康を第一に考えております。
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion__item js-accordion__item">
                <div class="accordion__question">
                  <span class="accordion__Q">Q</span>
                  <h3 class="accordion__title js-accordion__title">
                    農園での見学や体験ツアーは行っていますか？
                  </h3>
                </div>
                <div class="accordion__content js-accordion__content">
                  <div class="accordion__answer">
                    <span class="accordion__A">A</span>
                    <p class="accordion__text">
                      はい、農園での見学や体験ツアーを随時開催しています。<br>
                      農場の日常や農作業を親しみやすく説明し、実際に農園での体験を楽しむことができます。
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion__item js-accordion__item">
                <div class="accordion__question">
                  <span class="accordion__Q">Q</span>
                  <h3 class="accordion__title js-accordion__title">
                    オンラインで注文した農産物はどのように配送されますか？
                  </h3>
                </div>
                <div class="accordion__content js-accordion__content">
                  <div class="accordion__answer">
                    <span class="accordion__A">A</span>
                    <p class="accordion__text">
                      オンラインで注文いただいた農産物は、専用の梱包で新鮮さを保ったまま、<br>
                      指定された配送先にお届けします。<br>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion__item js-accordion__item">
                <div class="accordion__question">
                  <span class="accordion__Q">Q</span>
                  <h3 class="accordion__title js-accordion__title">
                    農園で提供される季節ごとの野菜や果物の品種は何ですか？
                  </h3>
                </div>
                <div class="accordion__content js-accordion__content">
                  <div class="accordion__answer">
                    <span class="accordion__A">A</span>
                    <p class="accordion__text">
                    春にはイチゴ、夏にはトマトや茄子、秋にはカボチャやリンゴ、冬にはブロッコリーやみかん<br>
                      など、季節に応じた野菜、果物を提供、収穫体験することができます。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- お知らせ -->
    <section id="news" class="news">
      <div class="news__inner">
        <div class="news__header">
          <h2 class="news__title section-title">お知らせ</h2>
          <p class="news__text">
            季節の農作物のお知らせ、見学ツアーのご案内、<br class="md-none">
            オンライン販売セールのお知らせなど、自然の恵み農園の最新情報をお届けします。
          </p>
        </div>
        <div class="news__button-wrapper">
          <div class="news__button button button--outline">
            <a href="<?php echo home_url('/news.html'); ?>" class="button__link">View&nbsp;More</a>
          </div>
        </div>
        <ul class="news__contents">
          <li class="news__item">
            <div class="news__item__head">
              <time datetime="YYYY-MM-DD" class="news__date">YYYY.MM.DD</time>
              <div class="news__tag">カテゴリ</div>
            </div>
            <p class="news__content">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
          </li>
          <li class="news__item">
            <div class="news__item__head">
              <time datetime="YYYY-MM-DD" class="news__date">YYYY.MM.DD</time>
              <div class="news__tag">カテゴリ</div>
            </div>
            <p class="news__content">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
          </li>
          <li class="news__item">
            <div class="news__item__head">
              <time datetime="YYYY-MM-DD" class="news__date">YYYY.MM.DD</time>
              <div class="news__tag">カテゴリ</div>
            </div>
            <p class="news__content">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- アクセス -->
    <section id="access" class="access">
      <div class="access__inner inner">
        <h2 class="access__title section-title">アクセス</h2>
        <div class="access__contents">
          <dl class="access__info">
            <div class="access__item">
              <dt class="access__item-title">会社名</dt>
              <dd class="access__item-content">株式会社自然の恵み農園</dd>
            </div>
            <div class="access__item">
              <dt class="access__item-title">所在地</dt>
              <dd class="access__item-content">〒123-4567&nbsp;<br class="md-show">千葉県〇〇市××町<br class="md-show">1丁目23-45</dd>
            </div>
            <div class="access__item">
              <dt class="access__item-title">電話番号</dt>
              <dd class="access__item-content">012-3456-7890</dd>
            </div>
            <div class="access__item">
              <dt class="access__item-title">営業時間</dt>
              <dd class="access__item-content">10:00〜18:00<br class="md-show">（土日祝を除く）</dd>
            </div>
          </dl>
          <div class="access__map">
            <div class="access__map__title">
              <p class="access__map__title-text">Googleマップ</p>
              <a href="https://g.co/kgs/bDdqhZ7" class="access__map__link js-modal-open">拡大地図を表示</a>
            </div>
            <div class="access__map__iframe">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.6072102590215!2d140.0589632757913!3d35.760457972561824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60227e5329d23245%3A0xd4cde63c28d3f984!2z44G144Gq44Gw44GX44Ki44Oz44OH44Or44K744Oz5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1741901741298!5m2!1sja!2sjp" width="710" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- お問い合わせ -->
    <section id="contact" class="contact">
      <div class="contact__inner inner">
        <div class="contact__content">
          <h2 class="contact__title">お問い合わせ</h2>
          <p class="contact__text">
          お仕事のご相談、農園体験、牧場の見学、その他ご質問<br>
          お気軽にお問い合わせください。
          </p>
          <div class="contact__button button button--outline">
            <a href="<?php echo home_url('/contact-page.html'); ?>" class="contact__button-link button__link">お問い合わせ</a>
          </div>
          <div class="contact__info">
            <p class="contact__info-text">問い合わせ電話：<br class="md-show"><span class="contact__info-text--tel">123-4567-8910</span></p>
            <p class="contact__info-text">【受付時間】<br class="md-show">10:00 ~ 18:00（土日祝を除く）</p>
          </div>
        </div>
      </div>
    </section>

  <?php
    endwhile;
  endif;
  ?>
  </main>

<?php
  get_footer();
?>