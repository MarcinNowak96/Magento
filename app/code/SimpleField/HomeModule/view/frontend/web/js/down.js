require(['jquery'], function ($) {
    $(document).ready(function () {
        $("#drop1").mouseenter(function () {
            $("#downup1").toggle();
        });
    });
    $(document).ready(function () {
        $("#drop2").mouseenter(function () {
            $("#downup2").toggle();
        });
    });
});
