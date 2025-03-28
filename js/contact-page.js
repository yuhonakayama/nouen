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

document.addEventListener('DOMContentLoaded', function() {
  const selectElement = document.querySelector('.form__input--select');
  const wrapperElement = document.querySelector('.form__select-wrapper');
  let isOpen = false;

  // セレクトボックスがクリックされたとき
  selectElement.addEventListener('mousedown', function(e) {
    // 現在の状態を反転
    isOpen = !isOpen;
    if (isOpen) {
      wrapperElement.classList.add('is-open');
    } else {
      wrapperElement.classList.remove('is-open');
    }
  });

  // 選択が完了したとき
  selectElement.addEventListener('change', function() {
    isOpen = false;
    wrapperElement.classList.remove('is-open');
  });

  // フォーカスが外れたとき
  selectElement.addEventListener('blur', function() {
    // 少し遅延を入れて、changeイベントの後に実行されるようにする
    setTimeout(() => {
      isOpen = false;
      wrapperElement.classList.remove('is-open');
    }, 100);
  });

  // セレクトボックスの外がクリックされたとき
  document.addEventListener('click', function(e) {
    if (!selectElement.contains(e.target)) {
      isOpen = false;
      wrapperElement.classList.remove('is-open');
    }
  });

  // バリデーション処理の追加
  const requiredInputs = document.querySelectorAll('.form__input[required], .form__textarea[required]');

  // エラーメッセージを追加（セレクトボックス以外）
  requiredInputs.forEach(input => {
    // セレクトボックスの場合はエラーメッセージを追加しない
    if (input.classList.contains('form__input--select')) {
      return;
    }

    // エラーメッセージ要素の作成
    const errorText = document.createElement('p');
    errorText.className = 'form__error-text';

    // メールアドレス用のメッセージ
    if (input.type === 'email') {
      errorText.textContent = '正しいメールアドレスを入力してください';
    } else {
      errorText.textContent = '入力は必須です';
    }

    // エラーメッセージを入力欄の後に挿入
    input.insertAdjacentElement('afterend', errorText);

    // フォーカスが外れたときのバリデーション
    input.addEventListener('blur', function() {
      validateInput(this);
    });

    // 入力時のバリデーション（エラー状態を解除）
    input.addEventListener('input', function() {
      if (this.value.trim() !== '') {
        this.classList.remove('is-error');
        // エラーメッセージを非表示（セレクトボックス以外）
        if (!this.classList.contains('form__input--select')) {
          const errorText = this.nextElementSibling;
          if (errorText && errorText.classList.contains('form__error-text')) {
            errorText.style.display = 'none';
          }
        }
      }
    });
  });

  // セレクトボックス専用のバリデーション
  selectElement.addEventListener('blur', function() {
    if (this.value === '') {
      this.classList.add('is-error');
      wrapperElement.classList.add('is-error');
    } else {
      this.classList.remove('is-error');
      wrapperElement.classList.remove('is-error');
    }
  });

  // バリデーション関数
  function validateInput(input) {
    // セレクトボックスの場合
    if (input.classList.contains('form__input--select')) {
      if (input.value === '') {
        input.classList.add('is-error');
        wrapperElement.classList.add('is-error');
        return false;
      }
      input.classList.remove('is-error');
      wrapperElement.classList.remove('is-error');
      return true;
    }

    const errorText = input.nextElementSibling;

    if (input.type === 'email') {
      // メールアドレスの形式チェック
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(input.value.trim())) {
        input.classList.add('is-error');
        if (errorText) errorText.style.display = 'block';
        return false;
      }
    } else if (input.value.trim() === '') {
      // 空欄チェック
      input.classList.add('is-error');
      if (errorText) errorText.style.display = 'block';
      return false;
    }

    // エラーなし
    input.classList.remove('is-error');
    if (errorText) errorText.style.display = 'none';
    return true;
  }

  // フォーム送信時のバリデーション
  document.querySelector('.form').addEventListener('submit', function(e) {
    let isValid = true;

    requiredInputs.forEach(input => {
      if (!validateInput(input)) {
        isValid = false;
      }
    });

    if (!isValid) {
      e.preventDefault();
    }
  });
});