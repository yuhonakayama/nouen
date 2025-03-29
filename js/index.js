$(function () {
  // ヘッダーの高さ取得
  const headerHeight = $(".js-header").height();
  $('a[href^="#"]').click(function () {
    const speed = 600;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    // ヘッダーの高さ分下げる
    let position = target.offset().top - headerHeight;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});


// ハンバーガーメニュー
$(function () {
  // ハンバーガーメニュー
  $(".js-hamburger,.js-drawer").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
  });
});


// タブのコンテンツを表示
$(function () {
  $(".js-tab-button").click(function () {
    // ボタンのインデックスを取得
    const index = $(this).index();

    // 全てのボタンからis-activeを削除
    $(".js-tab-button").removeClass("is-active");
    // クリックされたボタンにis-activeを追加
    $(this).addClass("is-active");

    // 全てのコンテンツからis-activeを削除
    $(".js-tab-content").removeClass("is-active");
    // 対応するインデックスのコンテンツにis-activeを追加
    $(".js-tab-content").eq(index).addClass("is-active");
  });
});

// 画像の複製を追加
$(function() {
  // 画像の複製を追加
  const $images = $('.tab__images');
  const $firstSet = $('.tab__image').clone();
  $images.append($firstSet);
});

// アコーディオンの表示
$(function () {
  $(".js-accordion__item:first-child .js-accordion__content").css("display", "block");
  $(".js-accordion__item:first-child .js-accordion__title").addClass("is-open");

  $(".js-accordion__title").on("click", function () {
    const item = $(this).closest(".js-accordion__item");
    const content = item.find(".js-accordion__content");

    // 他の開いているアコーディオンを閉じる
    $(".js-accordion__item").not(item).find(".js-accordion__content").slideUp(300);
    $(".js-accordion__item").not(item).find(".js-accordion__title").removeClass("is-open");

    // クリックされたアコーディオンの開閉
    $(this).toggleClass("is-open");
    content.stop().slideToggle(300);
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // クラスを追加してアニメーションを開始
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, options);

  // 画像要素を監視対象に追加
  document.querySelectorAll('.about__image').forEach(image => {
    observer.observe(image);
  });
});