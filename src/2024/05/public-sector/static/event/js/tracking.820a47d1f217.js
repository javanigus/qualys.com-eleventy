function trackClick(element) {
    /**
     * collect the appropriate data off the element
     */
    let data = {};
    $.each($(this).data(), function (key, value) {
        if (key.substring(0, 5) === 'track') {
            data[key.substring(5).toLowerCase()] = value;
        }
    });
    let {url, ...trackingData} = data;
    // send the data to the tracking url
    $.ajax({
        type: "POST",
        url: url,
        data: trackingData
    });
}


function bindJsClick() {
    // add onclick handlers to .js-track-click elements
    // Add this class in combination with the {% track_onclick %} tag
    $('.js-track-click').unbind("click", trackClick).bind("click", trackClick);
}

jQuery(document).ready(function ($) {
    bindJsClick();
});
