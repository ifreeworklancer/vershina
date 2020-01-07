import jquery from 'jquery';
import Flickity from 'flickity';
import 'flickity-as-nav-for';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    let menu = $('.menu');
    let burgerMenu = $('.burger-menu');
    $(burgerMenu).click(function () {
        $(this).toggleClass('active');
        menu.toggleClass('active');
    });

    /**
     * Menu
     */
    let subMenu = $('.header-nav-list .sub-menu');
    subMenu.parents('li').addClass('has-submenu');

    $('.has-submenu a').on('click', function (e) {
        if ($(this).siblings('.sub-menu').length > 0) {
            e.preventDefault();
        }
        $(this).parents('li').toggleClass('active');
        $(this).siblings('.sub-menu').slideToggle();
    });

    let menuItemsHasSubmenu = $('.header-nav-list li.has-submenu');

    $(document).on('click', function (e) {
        if (!menuItemsHasSubmenu.is(e.target) && menuItemsHasSubmenu.has(e.target).length === 0) {
            menuItemsHasSubmenu.removeClass('active');
            $('.header-nav-list li.has-submenu ul').slideUp();
        }

        if ((!burgerMenu.is(e.target) && burgerMenu.has(e.target).length === 0) && (!menu.is(e.target) && menu.has(e.target).length === 0)) {
            burgerMenu.removeClass('active');
            menu.removeClass('active');
        }
    });

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();
        let id = $(this).attr('href');
        if (id.length > 1) {
            let top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);
        }
        burgerMenu.removeClass('active');
        menu.removeClass('active');
    });

    /**
     * Form-label
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        $(this).val() !== "" ? $(this).parents('.form-group').addClass('in-focus') : $(this).parents('.form-group').removeClass('in-focus');
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Counter
     */
    if ($('.about-advantages-item__value').length) {
        let elementScroll = +$('.about-advantages-item__value').offset().top + +$('.about-advantages-item__value').outerHeight(),
            startCounter = false;
        $(window).scroll(function () {
            if (+$(this).scrollTop() + +$(this).height() > elementScroll) {
                if (startCounter) {
                    return false;
                }
                startCounter = true;
                $('.about-advantages-item__value').each(function () {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).data('counter-value')
                    }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            }
        });
    }

    /**
     * Modal
     */
    let contactModal = $('.custom-modal--contact'),
        sponsorModal = $('.custom-modal--sponsor'),
        closeModal = $('.close-modal'),
        modalMask = $('.modal-mask');

    $('.open-contact').on('click', function (e) {
        e.preventDefault();
        $(contactModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $('.open-sponsor').on('click', function (e) {
        e.preventDefault();
        $(sponsorModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $(closeModal).on('click', function () {
        $(contactModal).removeClass('active');
        $(sponsorModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(contactModal).removeClass('active');
        $(sponsorModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Youtube video
     */
    $('[data-youtube]').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('youtube'),
            padding = $(window).innerWidth() > 768 ? 120 : 30,
            ratio = 9 / 16,
            width = $(window).innerWidth() > 768 ? $(window).innerWidth() - padding - 200 : $(window).innerWidth() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';
        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        let container = $('.outer iframe');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            $(contactModal).removeClass('active');
            $(sponsorModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    let lastScroll = 0;
    $(window).on("scroll", function (e) {
        burgerMenu.removeClass('active');
        menu.removeClass('active');
        menuItemsHasSubmenu.removeClass('active');
        $('.header-nav-list li.has-submenu ul').slideUp();
        $('.outer').remove();
        $(contactModal).removeClass('active');
        $(sponsorModal).removeClass('active');
        $(modalMask).removeClass('active');
        $(this).scrollTop() > lastScroll ? $('#app-header').addClass('is-scroll') : $('#app-header').removeClass('is-scroll');
        lastScroll = $(this).scrollTop();
    });


    /**
     * Sliders
     */
    if ($('.reviews-slider').length) {
        let elem1 = document.querySelector('.reviews-slider');
        let elem1NavFor = document.querySelector('.reviews-slider-navfor');
        if (elem1) {
            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                cellSelector: '.reviews-slider-item'
            });

            new Flickity(elem1NavFor, {
                asNavFor: elem1,
                cellAlign: 'left',
                contain: true,
                pageDots: false,
                prevNextButtons: false,
                draggable: false,
                wrapAround: false,
                cellSelector: '.reviews-slider-navfor-item'
            });

            $('.slider-arrow--reviews .slider-arrow-item--prev').on('click', function () {
                flkty1.previous(false, false);
            });

            $('.slider-arrow--reviews .slider-arrow-item--next').on('click', function () {
                flkty1.next(false, false);
            });
        }
    }

    $(document).ready(function () {
        if ($('.about-slider').length) {
            let elem2 = document.querySelector('.about-slider');
            if (elem2) {
                const flkty2 = new Flickity(elem2, {
                    prevNextButtons: false,
                    pageDots: false,
                    contain: true,
                    draggable: false,
                    wrapAround: false,
                    cellAlign: 'left',
                    cellSelector: '.about-slider-item'
                });

                $('.slider-arrow--about .slider-arrow-item--prev').on('click', function () {
                    flkty2.previous(false, false);
                });

                $('.slider-arrow--about .slider-arrow-item--next').on('click', function () {
                    flkty2.next(false, false);
                });
            }
        }
    });

    if ($('.filmography-slider').length) {
        let elem3 = document.querySelector('.filmography-slider');
        if (elem3) {
            const flkty3 = new Flickity(elem3, {
                prevNextButtons: false,
                pageDots: false,
                contain: true,
                draggable: false,
                wrapAround: false,
                cellAlign: 'left',
                cellSelector: '.filmography-slider-item'
            });

            $('.slider-arrow--filmography .slider-arrow-item--prev').on('click', function () {
                flkty3.previous(false, false);
            });

            $('.slider-arrow--filmography .slider-arrow-item--next').on('click', function () {
                flkty3.next(false, false);
            });
        }
    }


    /**
     * Film frame
     */
    if ($('.frame-slider').length) {
        let slider = document.querySelector('.frame-slider'),
            sliderItems = document.querySelectorAll('.frame-slider-item'),
            sliderLength = sliderItems.length,
            sliderItemWidth = 50,
            items = [];

        if ($(window).width() >= 768) {
            sliderItemWidth = 25;
        }

        slider.style.height = `${document.querySelector('.frame-slider-item').offsetHeight}px`;

        sliderItems.forEach((item, index) => {
            items.push({elem: item, position: index});
        });

        items.forEach(item => {
            $(item.elem).css('left', `${sliderItemWidth * item.position}%`);
            item.elem.style.zIndex = `${sliderLength}`;
        });

        let oldPosition = 0,
            index = -1;
        let moveFrame = setInterval(() => {
            if (oldPosition > sliderLength - 1) {
                oldPosition = 0;
                index = -1;
                items.forEach((item, index) => {
                    if (index !== sliderLength - 1) {
                        item.elem.style.zIndex = `${sliderLength}`;
                    } else {
                        setTimeout(() => {
                            item.elem.style.zIndex = `${sliderLength}`;
                        }, 700);
                    }
                });
            }
            oldPosition++;
            items.forEach(item => {
                item.elem.style.left = `${sliderItemWidth * (item.position - 1)}%`;
                item.position = item.position - 1;
            });
            if (oldPosition > 0) {
                index++;
                items[index]['elem'].style.zIndex = `${sliderLength - index}`;
                items[index]['elem'].style.left = `${sliderItemWidth * items.length - 1}`;
                items[index]['position'] = items.length - 1;
            }

        }, 1200);
    }


    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-prev img', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.intro-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.reviews-slider', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.reviews-slider-navfor', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.about-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.filmography-slider', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.awards-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
        interval: 80
    });
})(jQuery);