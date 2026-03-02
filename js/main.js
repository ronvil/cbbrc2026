// add class to banner when it leaves viewport

 const banner = document.querySelector('.banner');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 150) {
      banner.classList.add('banner-scrolled');
    } else {
      banner.classList.remove('banner-scrolled');
    }
  });