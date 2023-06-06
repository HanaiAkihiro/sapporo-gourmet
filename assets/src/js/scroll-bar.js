"use strict";

import SimpleBar from "simplebar";

class ScrollBar {
  constructor(scrollBarElm) {
    this.scrollBarElm = document.querySelector(scrollBarElm);
    this._scrollbarInit();
  }

  _scrollbarInit() {
    new SimpleBar(this.scrollBarElm);
  }
}

export default ScrollBar;
