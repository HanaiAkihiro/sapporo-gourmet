"use strict";

class ScrollObserver {
  constructor(els, cb, options) {
    this.els = document.querySelectorAll(els);
    const defaultOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 0,
      once: true,
    };
    this.cb = cb;
    this.options = Object.assign(defaultOptions, options);
    this.once = this.options.once;
    this._scrollObserverInit();
  }
  _scrollObserverInit() {
    const callback = function (entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          this.cb(entry.target, true);
          if (this.once) {
            observer.unobserve(entry.target);
          }
        } else {
          this.cb(entry.target, false);
        }
      });
    };

    this.io = new IntersectionObserver(callback.bind(this), this.options);

    // @see https://github.com/w3c/IntersectionObserver/tree/master/polyfill
    this.io.POLL_INTERVAL = 100;
    this.els.forEach((el) => this.io.observe(el));
  }
}

class Scroll {
  constructor() {
    this._scrollInit();
  }

  // ↓↓↓ Scroll
  _inviewLoad(el, inview) {
    if (inview) {
      el.src = el.dataset.src;
    }
  }

  _inviewAnimation(el, inview) {
    if (inview) {
      el.classList.add("js-inview-active");
    } else {
      el.classList.remove("js-inview-active");
    }
  }
  // ↑↑↑ Scroll

  _scrollInit() {
    // inviewLoad
    this.observers = new ScrollObserver(".js-inview-load", this._inviewLoad, {
      once: true,
    });
    // inviewAnimation
    this.observers = new ScrollObserver(".js-inview", this._inviewAnimation, {
      once: true,
    });
  }
}

export default Scroll;
