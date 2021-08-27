$('.doc_slider').slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1170,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        dots: false
      }
    },
    {
      breakpoint: 630,
      settings: {
        slidesToShow: 1,
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  autoplay: true,
  autoplaySpeed: 2000,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  // centerMode: true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 590,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


// ---------- Map ------------

// ymaps.ready(init);

//     function init(){
//         // Создание карты.
//         var myMap = new ymaps.Map("map", {
//             center: [47.52034484011875, 45.27910277908994],
//             zoom: 8
//         });

//         myPlacemark1 = new ymaps.Placemark([48.722967348531384, 44.52104613846496], {
//         	hintContent: 'Дзержинский район'
//         });
//         myPlacemark2 = new ymaps.Placemark([46.36663678393303, 48.02074963150239], {
//         	hintContent: 'улица Беринга, 46/1'
//         });
//         myMap.geoObjects.add(myPlacemark1);
//         myMap.geoObjects.add(myPlacemark2)
//     }

// -----------Map ------------