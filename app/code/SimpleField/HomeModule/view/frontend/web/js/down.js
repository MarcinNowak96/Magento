require(['jquery'], function ($) {
    $('.menu').hover(function () {
        ($(this).find('ul')).toggle();
    });
});

