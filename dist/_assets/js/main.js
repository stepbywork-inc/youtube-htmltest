//ua判定
document.addEventListener('DOMContentLoaded', function () {
})
window.addEventListener('load', function () {
})
window.addEventListener('scroll', function () {
  const scrollY = window.scrollY;
  const hdr = document.querySelector('.js-hdr');

  if (scrollY > 100) {
    hdr.classList.add('is-scroll');
  } else {
    hdr.classList.remove('is-scroll');
  }
});
