// change the hamburguer menu icon

$(function() {
  $('#ChangeToggle').click(function() {
    $('#navbar-hamburger').toggleClass('hidden');
    $('#navbar-close').toggleClass('hidden');  
  });
});

function addClass(){

  $('.blog-thumb img').addClass('card-img-top img-fluid');
  $('.thumb img').addClass('card-img');
  $('.highlight-thumb img').addClass('card-img img-fluid');
  $('.carousel-thumb img').addClass('d-block w-100');
  // $('body').scrollspy({ target: '#navbar-example' });

  
	
  
}
addClass();