var $ = jQuery;
// $(window).on('scroll', () => {
//   if ($(document).scrollTop() > $('.hero-bg').height() + 100) {
//     $('.navbar').removeClass('bg-transparent');
//     $('.navbar').addClass('nav-bg');
//   } else {
//     $('.navbar').removeClass('nav-bg');
//     $('.navbar').addClass('bg-transparent');
//   }

//   if ($(document).scrollTop() > 30) {
//     $('.navbar-brand').addClass('d-none');
//   }
//   if ($(document).scrollTop() < 50) {
//     $('.navbar-brand').removeClass('d-none');
//   }
//   // else {
//   //   $('.navbar-brand').removeClass('d-none');
//   // }
// });

// $(() => {
//   $('.image-link').magnificPopup({ type: 'image' });
// });

$('.popup-link').magnificPopup({
  type: 'image'
  // other options
});

$(function() {
  var title = $('.page-title h2');
  title.map((i, node) => {
    var t = $(node).text();
    $(node).text('');
    $(node).addClass('rendered');
    console.log(t)
    t.split('').map((letter) => $(node).append(`<span>${letter}</span>`));
  })
  // title.text('');
  // title.addClass('rendered');

  // t.split('').map((letter) => title.append(`<span>${letter}</span>`));
});

var swiper = new window.Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  // loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});

function setSideTitle (index) {
  $('.slider-title').map( function(i, s){
  if (i === index) {
    // var t = $($(s)[index]).text();
    var t = s.text;
    $('.side-title').html(t);
  }
  return s;
  })
};

swiper.onAny(function(e) {
  if (e === 'slideChangeTransitionEnd') {
    setSideTitle(swiper.activeIndex);
    $('.slider-nav a.selected').removeClass('selected');
    if ($('.slider-nav a')[swiper.activeIndex]) {
      $($('.slider-nav a')[swiper.activeIndex]).addClass('selected')
    }
  }
})

// function setSlide() {
//   var p = $('.slider-nav a.selected').data('slide');
//   swiper.slideTo(p);
//   $('.slider-nav a.selected').removeClass('selected');
//   // $(e.currentTarget).addClass('selected');
// }
var initialSlide = $('.slider-nav a')[0];
$(initialSlide).addClass('selected')
setSideTitle(0)


$('[data-slide]').on('click', function(e) {
  e.preventDefault();
  var p = $(e.currentTarget).data('slide');
  swiper.slideTo(p);
  $('.slider-nav a.selected').removeClass('selected');
  $(e.currentTarget).addClass('selected');
  // setSideTitle(parseFloat(p));
});

$('.info-box').on('click', function(e) {
  e.preventDefault();
  $(e.currentTarget).toggleClass('expanded');
});
