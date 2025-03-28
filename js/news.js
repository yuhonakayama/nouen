$(function () {
  // 初回読み込み時に実行
  setHeaderHeight();

  // ウィンドウのリサイズ時に実行
  $(window).resize(function() {
    setHeaderHeight();
  });

  // headerの高さを設定する関数
  function setHeaderHeight() {
    const height = $(".js-header").height();
    $("main").css("margin-top", height);
  }

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
