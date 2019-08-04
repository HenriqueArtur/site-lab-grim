$( document ).ready(function() {
  $('#recipeCarousel').carousel({
    interval: 100
  })

  $('.carousel .carousel-item').each(function(){
      const minPerSlide = 4;
      let next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next = next.next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
        }
  });
});