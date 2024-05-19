'use strict'


const formatSpeakerData = (speakers) => {
    if (speakers === undefined) {
        return ""
    }
    let speakerString = ""

    speakers.map(speaker => {
        speakerString += `
          <div class="row align-items-center mt-2 pl-3" >
            <div class="col-3 col-md-2 col-xl-1">
              <img  src="${speaker.photo_url}" alt="${speaker.name}"/>
            </div>
            <div class="col-9 col-md-10 col-xl-11">
              <strong>${speaker.name}</strong>, ${speaker.title}, ${speaker.organization}
            </div>
        </div>
        `
    })
    return speakerString
}


const handleLiveVideoModule = (data, isLive) => {
    // Handle the "yellow" text box below live videos (LiveVideoModule)
    $(".module-live-video").each(function () {
        let moduleId = $(this).data("module-id").toString();
        let sponsorTag = $("#live-video-sponsor-tag-" + moduleId);
        if (isLive && !$.isEmptyObject(data.underwriter)) {
            sponsorTag.show();
            sponsorTag.html(data.underwriter.name);
        } else {
            sponsorTag.hide();

        }
    })
}


const handleLiveSessionModule = (data, isLive) => {
    // Handle the description "underneath" the video (LiveDescriptionModule)
    $(".module-live-session-description").each(function () {
        let moduleId = $(this).data("module-id").toString();

        // Descriptions.
        $("#current-session-name-" + moduleId).html(data.name);
        $("#current-session-description-" + moduleId).html(data.description);

        // Speakers
        let currentSpeakers = $("#current-speakers-" + moduleId)
        if (isLive && data.speakers.length > 0) {

            currentSpeakers.html(formatSpeakerData(data.speakers));
            currentSpeakers.show();
            $("#current-session-speaker-heading-" + moduleId).show();

        } else {
            currentSpeakers.hide();
            $("#current-session-speaker-heading-" + moduleId).hide();
        }

        // Underwriter
        let sponsorWrapper = $("#session-sponsor-wrapper-" + moduleId)
        if (isLive && !$.isEmptyObject(data.underwriter)) {
            sponsorWrapper.show();
            $("#session-details-wrapper-" + moduleId).removeClass("col-12").addClass("col-8")
            $("#session-sponsor-img-" + moduleId).attr("src", data.underwriter.logo_color);
        } else {
            sponsorWrapper.hide();
            $("#session-details-wrapper-" + moduleId).removeClass("col-8").addClass("col-12")
        }
    })

}

const handleLiveResourcesModule = (data, isLive) => {
    // Live Resources
    $(".module-live-session-resources").each(function () {
        let moduleId = $(this).data("module-id").toString();
        let resourceRow = $("#resource-row-" + moduleId);

        if (isLive && data.rendered_assets.length > 0) {

            $(this).show();
            resourceRow.html("");

            // Add each tracking
            data.rendered_assets.forEach((assetHtml) => {
                resourceRow.append(assetHtml);
            })

            // Rebind segment tracking
            $(".download-link").unbind().click(function (e) {
                let resourceContainer = $(this).children(".download").children(".download-content")
                let trackingData = {};
                trackingData["url"] = $(this).attr("href");
                trackingData["origin"] = window.location.origin
                trackingData["location"] = $(this).attr("data-location");
                trackingData["asset_type"] = resourceContainer.children(".download-type").text();
                trackingData["link_text"] = resourceContainer.children(".download-title").text();
                trackingData["element_id"] = $(this).attr("id")
                analytics.track("Asset Clicked", trackingData)
            })

        } else {
            $(this).hide();
        }

    })

}


const handleUpcomingSessionsModule = (data, isLive) => {
    // Upcoming Sessions
    $(".module-upcoming-sessions").each(function () {
        let moduleId = $(this).data("module-id").toString();


        let sessionsRow = $("#upcoming-sessions-row-" + moduleId);
        if (data.rendered_upcoming_sessions.length > 0) {

            $(this).show();
            sessionsRow.html("");

            // Add each tracking
            data.rendered_upcoming_sessions.forEach((sessionHtml) => {
                sessionsRow.append(sessionHtml);
            })


        } else {
            $(this).hide();
        }

    })
}



const handleAgendaModule = (data, isLive, expandedSessions) => {
    // Upcoming Sessions
    $(".module-agenda").each(function () {

        let moduleId = $(this).data("module-id").toString();
        Object.entries(data.rendered_agenda_sessions).forEach(([categoryId, renderedSessions]) => {

            const categorySessionsId = `#category-sessions-${moduleId}-${categoryId}`;
            $(categorySessionsId).html("")
            renderedSessions.forEach(sessionHtml => $(categorySessionsId).append(sessionHtml))
            }
        );
    })

    expandedSessions.forEach(function(id) {
        $('#' + id).show().addClass('expanded');
        $('#' + id).closest('.agenda-module-session-description').find('.agenda-module-session-description-read-more-btn').text('Read Less');
    });
}




const getLiveSessionDescription = () => {

    // Save the expanded state before updating
    let expandedSessions = [];
    $('.hidden-content.expanded').each(function() {
        expandedSessions.push($(this).attr('id'));
    });

    const idDiv = $("#event-id");
    const eventId = idDiv.data("event");
    const pageId = idDiv.data("page");
    fetch(`/api/session-controller/${eventId}?pageId=${pageId}`, {
        method: 'GET',
        credentials: 'same-origin',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },

    })
        .then(response => response.json())
        .then(data => {

            // If the live_id is undefined, this is indicative of there
            // being no live events. In this case hide everything and
            // return early.
            let isLive = data.live_id != undefined;

            handleLiveVideoModule(data, isLive);

            handleLiveSessionModule(data, isLive);

            handleLiveResourcesModule(data, isLive);

            handleUpcomingSessionsModule(data, isLive);

            handleAgendaModule(data, isLive, expandedSessions);

            // Rebind JS click objects.
            // from tracking.js
            bindJsClick();

        })
        .catch(err => console.error(err))
}


$(document).ready(function () {
    getLiveSessionDescription();
    setInterval(getLiveSessionDescription, 60000);
});

$(document).on('click', '.agenda-module-session-description-read-more-btn', function(e) {
    e.preventDefault();
    var hiddenContent = $(this).siblings('.hidden-content');

    if(hiddenContent.hasClass('expanded')) {
        hiddenContent.slideUp();
        hiddenContent.removeClass('expanded');
        $(this).text('Read More');
    } else {
        hiddenContent.slideDown();
        hiddenContent.addClass('expanded');
        $(this).text('Read Less');
    }
});
