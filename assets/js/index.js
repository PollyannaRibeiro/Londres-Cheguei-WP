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
  $('.highlight-thumb img').addClass('card-img');
  $('.carousel-thumb img').addClass('d-block w-100');
  // $('body').scrollspy({ target: '#navbar-example' });
  $('.gallery-item .gallery-icon img').addClass('img-fluid');
}
addClass();

function transformInParallax(){
  var src = document.querySelector(".main-thum img").getAttribute('src');
  var background= document.querySelector(".main-thum").style.backgroundImage = `url(' ${src}')`;

  console.log(background)
};
transformInParallax();