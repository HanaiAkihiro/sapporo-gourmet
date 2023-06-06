import Scroll from "./scroll";
import MobileMenu from "./mobile-menu";
import ScrollBar from "./scroll-bar";
import Splide from "@splidejs/splide";

document.addEventListener(
  "DOMContentLoaded",
  () => {
    new Scroll();
    new MobileMenu("#js-nav-btn", "#js-off-canvas", "#js-page");
    new ScrollBar("#js-scroll-bar");

    const splide = new Splide("#js-slider1", {
      type: "fade", //スライド切り替え時fadeのアニメーション付与
      autoplay: true, //自動再生
      pauseOnHover: false, //スライドにhover時自動再生停止禁止
      pauseOnFocus: false, //スライドfocus時自動再生停止禁止
      rewind: true, //スライドの最後のページに行ったら、最初のページに戻れるようにする
      interval: 6000, //次のスライドに行くまでの速さ
      arrows: true, //デフォルトのページ送りボタンを非表示
      speed: 2000, //ページ送りアニメーションの速さ
      pagination: true, //デフォルトのページネーションを非表示
    }).mount();

    //アクティブスライドが変わった時に発生(次のスライドが表示されるタイミング)
    splide.on("active", function () {
      slideIndex();
    });

    //スライドの枚数と現在のスライドが何枚目かを取得しDOM内に追加
    function slideIndex() {
      //splide.indexでスライドのインデックス番号が0から取得される。+1することで現在のスライド枚数が取得できる
      document.getElementById("js-current-slide").textContent =
        splide.index + 1;
      //splide.lengthでスライドの枚数が取得可能。
      document.getElementById("js-slide-length").textContent = splide.length;
    }

    slideIndex(); //ハンドラのイベント実行前にも関数呼び出ししないと1枚目のスライドで番号が表示されない
  },
  false
);
