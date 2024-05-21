window.addEventListener("load", () => {
  // 要素を取得
  const btn = document.querySelector("#contact-btn");
  const target = document.querySelector("#contact");

  // トリガーになる高さを取得
  const showContact = document.querySelector("#show-contact");
  const rect = showContact.getBoundingClientRect();
  const topPosition = rect.top + window.scrollY;

  // ページの高さを取得
  const windowHeight = window.innerHeight;
  const pageHeight = document.documentElement.scrollHeight;

  // コンタクトボタン出現
  window.addEventListener("scroll", () => {
    // スクロール量を取得
    let scroll_y = window.scrollY;

    if (scroll_y > topPosition && scroll_y < pageHeight - (windowHeight + 300)) {
      btn.classList.add("inview");
    } else {
      btn.classList.remove("inview");
    }
  });

  // スムーズスクロール
  btn.addEventListener("click", (e) => {
    e.preventDefault();

    const contactRect = target.getBoundingClientRect().top;
    const targetPosition = contactRect + window.scrollY;

    window.scrollTo({
      top: targetPosition,
      behavior: "smooth",
    });
  });

  // loading画面

  // 要素の取得
  const loading = document.querySelector("#loading");
  const blackCircle = document.querySelector("#black-circle");
  const loadingDesc = document.querySelector("#loading-desc");

  function delayAnimation(target, time) {
    setTimeout(() => {
      target.classList.add("view");
    }, time);
  }

  // アニメーション遅延設定
  delayAnimation(loading, 4200);
  delayAnimation(loadingDesc, 4100);
  delayAnimation(blackCircle, 4000);
});
