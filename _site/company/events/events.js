"use strict";/* global jQuery:false marked:false Tooltip:false */ /*
 * initialize Fullcalendar
 */(function(a){"use strict";/*
	 * requires marked
	 */ /*
	 * helper function to change height on calendar to min height
	 */function b(){// change height on calendar to min height
var b=a(".fc-scroller");//var height = scroller.css("height");
// open all links in a new tab / window
b.css({height:"auto","min-height":"auto"}),a(".fc-view-container a").attr("target","_blank")}/*
	 * helper function for when the device width changes
	 */ /*function handleMediaQueryChange (mql) {

		if (mql.matches) {

			// greater than or equal to 694 pixels wide
			$("#calendar").fullCalendar("changeView", "month");

		} else {

			// less than 694 pixels wide
			$("#calendar").fullCalendar("changeView", "listMonth");

		}

	}

	// switch to list view on narrow displays
	var mediaQueryList = window.matchMedia("(min-width: 694px)");
	mediaQueryList.addListener(handleMediaQueryChange);/*


	/*
	 * build and attach the Tooltip to each event when it is rendered
	 */function c(a,b){var c,e,f,g,h,i;// build the Tooltip title
// append the link
if(c=[],a.speakerName&&(a.speakerUrl?c.push("By <a href=\""+a.speakerUrl+"\">"+a.speakerName+"</a>"):c.push("By "+a.speakerName)),h=a.start.format("ll"),a.allDay||a.tbd||(h+=" <span class=\"nowrap\">"+a.start.format("LT")),a.end&&86400000<=a.end.diff(a.start)?h+="</span> \u2013 "+a.end.subtract(1,"day").format("ll"):(a.end&&!a.allDay&&!a.tbd&&(h+=" \u2013 "+a.end.format("LT")+"</span>"),h+="</span>"),c.push(h),a.eventName&&(c.push(""),a.eventUrl?c.push("<a href=\""+a.eventUrl+"\">"+a.eventName+"</a>"):c.push(a.eventName)),a.boothNumber&&c.push("Booth #"+a.boothNumber),a.venue&&c.push(a.venue),a.location&&c.push(a.location),a.country&&c.push(a.country),a.timeZone&&!a.location&&c.push(a.timeZone),a.classDescription&&(g=a.classDescription,140<g.length&&(g=g.slice(0,140),g=g.replace(/\s+$/,""),g+="\u2026"),c.push(""),c.push(g)),a.description&&(g=a.description,g=g.replace(/\s+/g," "),140<g.length&&(g=g.slice(0,140),g=g.replace(/\s+$/,""),g+="\u2026"),c.push(""),c.push(g)),a.abstract&&(i=document.createElement("div"),i.innerHTML=marked(a.abstract),g=i.innerText.trim(),140<g.length&&(g=g.slice(0,140),g=g.replace(/\s+$/,""),g+="\u2026"),c.push(""),c.push(g)),c=c.join("<br>"),f="<h4 class=\"tooltip__heading\">\t{{title}}</h4><div class=\"tooltip__body\">\t{{body}}</div>",f=f.replace(/{{title}}/g,a.title),f=f.replace("{{body}}",c),a.url){// change link text based on which calendar the event belongs too
switch(a.source.className[0]){case"qualys-public-events":e="Website";break;case"qualys-webcast-events":e="Watch";break;case"qualys-training-events":e="Sign up";break;default:e="Learn more"}var j="<a class=\"q-link\" href=\"{{link}}\" title=\"{{title}}\" target=\"_blank\">{{linkText}}</a>";j=j.replace(/{{title}}/g,a.title),j=j.replace("{{link}}",a.url),j=j.replace("{{linkText}}",e),f+=j}new Tooltip(b.get(0),{placement:"top",html:!0,title:f})}marked.setOptions({gfm:!0,tables:!0,breaks:!0,smartypants:!0});a(document).ready(function(){a("#listOfEvents").addClass("hidden");var d={className:"qualys-public-events",url:"/company/events/fullcalendar.json",color:"#9bc0e0"},e={className:"qualys-webcast-events",url:"/company/events/webcasts.json",color:"#707f93"},f={className:"qualys-training-events",url:"https://aqueous-sierra.herokuapp.com/api/v1/classes/fullcalendar",color:"#1d2737"},g={className:"qualys-speaking-engagements",url:"/company/events/speaking-engagements.json",color:"#6CA3CF"},h=[],i=window.qualys.parseQueryString(window.location.search),j=i.type;"publicEvents"===j?h.push(d):"webcasts"===j?h.push(e):"training"===j?h.push(f):"speakingEngagements"===j?h.push(g):(h.push(d),h.push(e),h.push(f),h.push(g));// page is now ready, initialize the calendar...
a("#calendar").fullCalendar({// put your options and callbacks here
eventSources:h,header:{left:"prev,next today",center:"title",right:"agendaWeek,month,listMonth"},defaultView:"listMonth",fixedWeekCount:!1,eventAfterAllRender:b,windowResize:b,eventRender:c})})})(jQuery);
//# sourceMappingURL=events.js.map