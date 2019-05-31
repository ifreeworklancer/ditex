import jquery from 'jquery';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        menu.slideToggle('active');
    });

    $('.menu-mask').on('click', function () {
        $('.burger-menu').removeClass('active');
        $('.menu').removeClass('active');
    })

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);

            $('.burger-menu').removeClass('active');
            $('.menu').removeClass('active');
        }
    });

    $(window).on('scroll', function () {
        $('.burger-menu').removeClass('active');
        $('.burger-menu-text').text("Меню");
        $('.menu').removeClass('active');
        $('.menu-mask').removeClass('active');
        if ($(this).scrollTop() > 20) {
            $('#app-header').addClass('is-fixed');
        } else {
            $('#app-header').removeClass('is-fixed');
        }
    });

    /**
     * Lang menu
     */
    $('.lang-list-item-active').on(('click'), function (e) {
        e.preventDefault();
        $(this).siblings().slideToggle();
    });


    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */

    const elements = document.querySelectorAll('[type="tel"]');
    const maskOptions = {
        mask: /[\d ()\-+]+$/
    };
    if (elements.length) {
        Array.from(elements).forEach(el => {
            el.addEventListener('focus', (evt) => {
                if (!evt.target.value.length) {
                    evt.target.value = '+';
                }
            });
            new IMask(el, maskOptions);
        })
    }

    /**
     * Modal
     */
    var parentModal = $('.custom-modal--partner');
    var questModal = $('.custom-modal--quest');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-partner').on('click', function (e) {
        e.preventDefault();
        $(parentModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $('.open-quest').on('click', function (e) {
        e.preventDefault();
        $(questModal).addClass('active');
        $(modalMask).addClass('active');
        $("[name='car_title']").val($(this).data('cartitle'));
    });

    if($(window).width() > 1024) {
        $('[data-indexCar]').on('click', function () {
            $(modalMask).addClass('active');
        });
    }

    $(closeModal).on('click', function () {
        $(parentModal).removeClass('active');
        $(questModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(parentModal).removeClass('active');
        $(questModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    /**
     * Animate scroll
     */
    ScrollReveal().reveal('.intro-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.quote', {
        origin: 'top',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.social-list', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.advantages-item', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.about-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.about-image', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.target-item-main', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.target-item-secondary', {
        origin: 'bottom',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.partner-item', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.partner-image', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.experience-item', {
        origin: 'left',
        delay: 400,
        distance: '200px',
    });
    ScrollReveal().reveal('.experience-image', {
        origin: 'right',
        delay: 400,
        distance: '200px',
    });

})(jQuery)