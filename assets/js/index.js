function addClass(){

  $('.blog-thumb img').addClass('card-img-top img-fluid');
  $('.thumb img').addClass('card-img');
  $('.highlight-thumb img').addClass('card-img img-fluid');
  $('.carousel-thumb img').addClass('d-block w-100');
  $('body').scrollspy({ target: '#navbar-example' });

  
	
  
  console.log(elements);
}
addClass();