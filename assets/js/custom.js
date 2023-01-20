(function ($) {

    "use strict";


    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");

        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "block";
        } else {
            backToTo.style.display = "none";
        }
    };


    //===== Rainbow navbar
    const navbarToggler = document.querySelector(".navbar-toggler");
    const primaryMenu = document.querySelector(".rainbow-primary-menu");
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
        primaryMenu.classList.toggle("active");

    });

    const cheveronDown = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
  </svg>`; 

    $('.menu-item-has-children').append('<span class="toggle-icon">'+cheveronDown+'</span>');

    $("span.toggle-icon").on('click', function(){
        $(this).siblings('.sub-menu').toggleClass('active');
        $(this).parent('.menu-item-has-children').toggleClass('active');
    });


    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });



    // Lazy loading images
    const RB_lazyLoad = function () {
        const imgTargets = document.querySelectorAll('img[data-src]');

        const loadImg = function (entries, observer) {
            const [entry] = entries;

            if (!entry.isIntersecting) return;

            // Replace src with data-src
            entry.target.src = entry.target.dataset.src;

            entry.target.addEventListener('load', function () {
                entry.target.classList.remove('lazy-img');
            });

            observer.unobserve(entry.target);
        };

        const imgObserver = new IntersectionObserver(loadImg, {
            root: null,
            threshold: 0,
            rootMargin: '200px',
        });

        imgTargets.forEach(img => imgObserver.observe(img));
    }

    RB_lazyLoad();

    $('#grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true
    });

    //Loadmore js
    $(document).on('click', '#loadmore-btn', function () {
        const that = $(this);
        const pageNumber = that.data('page');
        const newPageNumber = pageNumber + 1;
        const ajaxurl = that.data('url');

        const spinner = that.addClass('loading').find('.fa-cog').addClass('fa-spin');
        that.find('.text').text('Loading...');

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                page: pageNumber,
                action: 'rb_loadmore'
            },
            error: function (response) {
                console.log(response);
            },
            success: function (response) {
                if (!response) {
                    that.find('.text').text('No Posts');
                    that.removeClass('loading').find('.fa-cog').removeClass('fa-spin');
                    that.addClass('disabled');
                    return;
                }
                // setTimeout(() => {
                that.data('page', newPageNumber);
                $('.infinite-scroll').append(response);
                that.removeClass('loading').find('.fa-cog').removeClass('fa-spin');
                that.find('.text').text('Load More');
                // }, 3111);

            }
        });
    });



    //AOS Activation
    AOS.init();
    

    let i = 0;
    $('.sub-menu').parent().hover(function () {
        i = i + 1;
        var menu = $(this).find("ul");
        var menupos = $(menu).offset();
        var test = menupos.left + menu.width();
        let s;
        if (test > $(window).width()) {
            var newpos = -$(menu).width();
            menu.css({ left: newpos });
            console.log(test);
        }
    });

    jQuery(document).ready(function ($) {

        $('.lightbox-btn').flashy({
            showClass: 'fx-fadeIn',
            hideClass: 'fx-fadeOut'
        });

        $('.js-share-clipboard').on('click', function (e) {
            e.preventDefault();
            $('.copied-notification').addClass('active');
            setTimeout(function () {
                $('.copied-notification').removeClass('active');
            }, 2000);
            var copyText = document.getElementById("copy-url");
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            document.execCommand("copy");

        });
        $('.notify-close').on('click', function (e) {
            $('.copied-notification').removeClass('active');
        });

    });

    $('.r-user-info').on('click', function (e) {
        e.preventDefault();
        $('.admin-info').toggleClass('active');
    });

    $(window).load(function () {
        $('.r-preloader').fadeOut(1500, function () {
            $(this).remove();
        });
    });



    $("input#keyword").keyup(function () {

        $('#datafetch').html(`<div class="loading-search-icon">
            <i class="fas fa-spinner fa-spin"></i>
        </div>`)

        if ($(this).val().length > 0) {
            $("#datafetch").show();
        } else {
            $("#datafetch").hide();
        }
    });

    let suggestionKeyEL = $('.keyword');

    suggestionKeyEL.on('click', function (e) {
        e.preventDefault();
        let keyText = $(this).text();
        console.log(keyText);
        $('.input_search').val(keyText);
    });

    $('.RB_content figure img').each(function () {
        $(this).wrap("<a data-no-swup data-fslightbox href='" + this.src + "'/>");
    });


})(jQuery);