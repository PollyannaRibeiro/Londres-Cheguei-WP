// change the hamburguer menu icon

$(function() {
  $('#ChangeToggle').click(function() {
    $('#navbar-hamburger').toggleClass('hidden');
    $('#navbar-close').toggleClass('hidden');  
  });
});

// Add Bootstraps Classes to some items
function addClass(){

  $('.blog-thumb img').addClass('card-img-top img-fluid');
  $('.thumb img').addClass('card-img');
  $('.highlight-thumb img').addClass('card-img');
  $('.carousel-thumb img').addClass('d-block w-100');
  $('.gallery-item .gallery-icon img').addClass('img-fluid');
}
addClass();