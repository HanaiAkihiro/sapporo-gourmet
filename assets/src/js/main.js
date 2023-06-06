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
      type: "loop",
      autoplay: true,
      pauseOnHover: false,
      pauseOnFocus: false,
      rewind: true,
      interval: 6000,
      arrows: true,
      speed: 1500,
      pagination: true,
      updateOnMove: true,
    }).mount();

    const splide2 = new Splide("#js-slider2", {
      type: "loop",
      autoplay: true,
      pauseOnHover: false,
      pauseOnFocus: false,
      rewind: true,
      interval: 6000,
      arrows: false,
      speed: 1500,
      pagination: false,
      updateOnMove: true,
    }).mount();

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

    splide2.sync(splide);
  },
  false
);
