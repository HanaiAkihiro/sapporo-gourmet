"use strict";

class MobileMenu {
  constructor(btn, cover, container) {
    this.btn = document.querySelector(btn);
    this.cover = document.querySelector(cover);
    this.container = document.querySelector(container);
    this._mobileMenuInit();
  }

  _toggle() {
    this.container.classList.toggle("menu-active");
  }

  _mobileMenuInit() {
    this.btn.addEventListener("click", this._toggle.bind(this));
    this.cover.addEventListener("click", this._toggle.bind(this));
  }
}

export default MobileMenu;
