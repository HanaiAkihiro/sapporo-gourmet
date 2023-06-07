import Scroll from "./scroll";
import MobileMenu from "./mobile-menu";
import ScrollBar from "./scroll-bar";
import MainVisualSlider from "./mv-slider";
import HorizontalSlider from "./horizontal-slider";

document.addEventListener(
  "DOMContentLoaded",
  () => {
    new Scroll();
    new MobileMenu("#js-nav-btn", "#js-off-canvas", "#js-page");
    new ScrollBar("#js-scroll-bar");
    new MainVisualSlider("#js-slider1", "#js-slider2");
    new HorizontalSlider("#js-latest-slider", ".splide__slide", "5");
  },
  false
);
