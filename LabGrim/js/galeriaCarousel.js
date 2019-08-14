$('.carousel').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: '<a class="carousel-control-prev control-button"><span class="fa fa-angle-left carousel-icon"></span><span class="sr-only">Prev</span></a>',
  nextArrow: '<a class="carousel-control-next control-button r-3p"><span class="fa fa-angle-right carousel-icon"></span><span class="sr-only">Next</span></a>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 730,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
