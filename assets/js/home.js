$('#events').owlCarousel({
  loop: false,
  margin: 10,
  responsiveClass: true,
  autoplay: false,
  nav: true,
  navText: ["<img src='./assets/img/left arrow.png'>","<img src='./assets/img/right arrow.png'>"],
  dots: false,
  responsive: {
      0: {
          items: 1,
          autoplay: false,
          loop: false,
      },
      600: {
          items: 1,
          autoplay: false,
          loop: false,
      },
      1000: {
          items: 1,
      },
      1200: {
          items: 1,
      }
  }
});


$('#logos').owlCarousel({
    loop: false,
    margin: 10,
    responsiveClass: true,
    autoplay: true,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1,
            autoplay: true,
            loop: true,
        },
        600: {
            items: 2,
            autoplay: true,
            loop: true,
        },
        1000: {
            items: 3,
        },
        1200: {
            items: 4,
        }
    }
  });
  

  $('#testi').owlCarousel({
    loop: false,
    margin: 10,
    responsiveClass: true,
    autoplay: false,
    nav: true,
    navText: ["<img src='./assets/img/left arrow.png'>","<img src='./assets/img/right arrow.png'>"],
    dots: false,
    responsive: {
        0: {
            items: 1,
            autoplay: false,
            loop: false,
        },
        600: {
            items: 1,
            autoplay: false,
            loop: false,
        },
        1000: {
            items: 1,
        },
        1200: {
            items: 1,
        }
    }
  });
  