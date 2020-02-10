jQuery(document).ready( $ => {
  $('.site-header .main-menu .menu').slicknav({
    label: '',
    appendTo: '.nav-bar'
  }); 
});

window.onscroll = () => {
  const scroll = window.scrollY;

  const headerNav = document.querySelector('.nav-bar');
  const documentBody = document.querySelector('body');

  if (scroll > 300) {
    headerNav.classList.add('fixed-top');
    headerNav.classList.add('ft-active');
  } else {
    headerNav.classList.remove('fixed-top');
    headerNav.classList.remove('ft-active');
  }
}