
$(document).ready(function(){
    $('.offer_slider').slick({
      arrows:true,
        dots: true,
        infinite: false,
        speed: 300,
        
        slidesToScroll:1,
        draggable: true,
        variableWidth: true,
swipeToSlide: true,
adaptiveHeight: false,
centerMode: false,


        responsive: [
          {
            breakpoint: 1440,
            settings: {
              arrows:         false,
              autoplay:       true,
              autoplaySpeed:  4500,
              infinite:       true,
              pauseOnFocus:   false,
              pauseOnHover:   false,
              slidesToShow:   2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              
            }
          },
          {
            breakpoint: 778,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              
            }
          },
          
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    });

    $('.cards').slick({
      
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll:1,
        nextArrow:$('.next'),
        prevArrow:$('.prev'),

        responsive: [
          {
            breakpoint: 1440,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows:false
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
    });
  });