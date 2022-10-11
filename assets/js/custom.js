$(function(){
    $("#header").load("header.html"); 
    $("#footer").load("footer.html"); 
  });

  $(".slider").slick({

    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    // the magic
    responsive: [{
  
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          autoplay: true,
          infinite: true
        }
  
      }, {
  
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          autoplay: true,
          infinite: true
        }
  
      }, {
  
        breakpoint: 300,
        settings: {
          slidesToShow: 1,
          autoplay: true,
          infinite: true
        }
  
      }]
  });