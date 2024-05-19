// Agenda Tabs
jQuery(document).ready(function ($) {
    $('.virtuoso-tab').on('click', function () {
        let tab = $(this).data('tab');
        $('.virtuoso-tab').removeClass('active');
        $(this).addClass('active');

        $('.agenda-content-tab').hide();
        $('#' + tab).show();
    });
})
