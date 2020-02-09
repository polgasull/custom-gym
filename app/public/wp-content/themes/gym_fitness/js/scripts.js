jQuery(document).ready( $ => {
  $('.site-header .main-menu .menu').slicknav({
    label: '',
    appendTo: '.nav-bar'
  }); 

  $('.reviews-list').bxSlider({
    auto: true,
    mode: 'fade',
    controls: false
  });
});