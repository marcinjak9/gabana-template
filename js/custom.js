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

$(function() {
  const title = $('.page-title h2');
  const t = title.text();

  title.text('');
  title.addClass('rendered');

  t.split('').map((letter) => title.append(`<span>${letter}</span>`));
});

const swiper = new window.Swiper('.swiper', {
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

// const setSideTitle = (index) => $('.slider-title').map((i, s) => {
//   console.log($($(s)[index]).text(), i);
//   if (i === index) {
//     const t = $($(s)[index]).text();
//     console.log(t);
//     $('.side-title').html(t);
//   }
//   return s;
// });

// setSideTitle(2);

$('[data-slide]').on('click', function(e) {
  e.preventDefault();
  const p = $(e.currentTarget).data('slide');
  swiper.slideTo(p);
  $('.slider-nav a.selected').removeClass('selected');
  $(e.currentTarget).addClass('selected');
  // console.log(p);
  // setSideTitle(parseFloat(p));
});

$('.info-box').on('click', function(e) {
  e.preventDefault();
  $(e.currentTarget).toggleClass('expanded');
});
