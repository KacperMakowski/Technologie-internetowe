const przycisk = document.querySelector('.menu-toggle');
const menu = document.querySelector('.main-nav');

przycisk.addEventListener('click', function () {
  const otwarte = menu.classList.toggle('menu--open');
  przycisk.setAttribute('aria-expanded', otwarte);
});

// Szybki, elegancki ekran powitalny
window.addEventListener('DOMContentLoaded', () => {
  const loader = document.getElementById('page-loader');
  if (loader) {
    setTimeout(() => {
      loader.classList.add('fade-out');
      setTimeout(() => loader.remove(), 400);
    }, 650);
  }
});
