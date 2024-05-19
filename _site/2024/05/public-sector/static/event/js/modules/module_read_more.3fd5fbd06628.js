jQuery(document).ready(function ($) {
    $('body').on('click', '.read-more-content-btn', function (e) {
        e.preventDefault();

        let targetSelector = $(this).data('target');
        let hiddenContent = $(targetSelector);

        if (hiddenContent.is(':visible')) {
            hiddenContent.slideUp();
            $(this).text('Read More');
        } else {
            hiddenContent.slideDown();
            $(this).text('Read Less');
        }
    });
});
