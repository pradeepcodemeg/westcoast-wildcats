// $(window).load(function() {
//     $('.preloader').fadeOut();
// });

jQuery(function($) {
    var sections = $('section'),
        nav = $('nav ul li'),
        nav_height = nav.outerHeight();

    $(window).on('scroll', function() {
        var cur_pos = $(this).scrollTop() + 60;

        sections.each(function() {
            var top = $(this).offset().top - nav_height,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('active');
                sections.removeClass('active');

                $(this).addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }
        });
    });

    nav.find('a').on('click', function() {
        var $el = $(this),
            id = $el.attr('href');

        $('html, body').animate({
            scrollTop: $(id).offset().top - nav_height
        }, 500);

        return false;
    });
});

$(document).ready(function() {
    $('.menu-icon').click(function(e) {
        $('body').addClass('menu-open');
    });
    $('.close-menu, .overlay').click(function(e) {
        $('body').removeClass('menu-open');
    });
    $(window).scroll(function() {
        var sticky = $('header'),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
});

$(document).ready(function () {
    $('.select2').select2();
  });


  document.addEventListener("DOMContentLoaded", function() {
    var accordianHeads = document.querySelectorAll('.accordian-head');

    accordianHeads.forEach(function(accordianHead) {
      accordianHead.addEventListener('click', function() {
        var content = this.nextElementSibling;
        var allContents = document.querySelectorAll('.accordian-content');
        var allAccordianMains = document.querySelectorAll('.accordian-main');
        allContents.forEach(function(item) {
          if (item !== content) {
            item.classList.remove('active');
          }
        });
        allAccordianMains.forEach(function(main) {
          if (main !== content.parentElement) {
            main.classList.remove('colapsible-accordian');
          }
        });
        content.classList.toggle('active');
        content.parentElement.classList.toggle('colapsible-accordian');
      });
    });
  });










