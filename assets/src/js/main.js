import MobileMenu from "./mobile-menu";
import Scroll from "./scroll";

document.addEventListener(
  "DOMContentLoaded",
  () => {
    new Scroll();
    new MobileMenu("#js-nav-btn", "#js-off-canvas", "#js-page");
  },
  false
);
