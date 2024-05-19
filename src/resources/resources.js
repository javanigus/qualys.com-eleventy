"use strict";/* global jQuery:false _:false moment:false Swiper:false */ /* eslint-disable */ /* eslint-enable */ /*
 * filter resources and show resources based on hash value
 */ /*
 * automatically expand previously opened resource type container when user clicks a resource and then clicks back
 * uses the browser's History API
 * https://developer.mozilla.org/en-US/docs/Web/API/History
 */ /*
 * reset the dropdown filters when you click the reset link
 */ /*
 * show "upcoming" label for webcasts in the future
 */ /*
 * Convert time to user's local time
 */webpackJsonp([8],{/***/19:(/***/function _(a,b,c){"use strict";function d(a){return a&&a.__esModule?a:{default:a}}var e=c(1),f=d(e),g=c(0),h=d(g);new Swiper(".swiper-container",{slidesPerView:"auto",navigation:{nextEl:".q-carousel-button--next",prevEl:".q-carousel-button--prev",disabledClass:"q-carousel-button--disabled"},spaceBetween:30});// hero animations
var i=new h.default,j=document.querySelector(".q-alternate-hero"),k=document.querySelector(".q-alternate-hero__content"),l=k.childNodes,m=document.querySelector(".q-alternate-hero__image-wrap"),n=new f.default({element:j,offset:"100%",handler:function(a){"down"===a&&i.addLabel("start").staggerFromTo(l,1,{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},.1).fromTo(m,1,{y:"-30%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},"start+=.8")}}),o=document.querySelectorAll(".q-resources-filter__category-header"),p="q-resources-filter__category-button--active",q="q-resources-filter__category--closed";// filter button expand collapse example
Array.prototype.forEach.call(o,function(a){a.addEventListener("click",function(){var b=a.dataset.category||null,c=document.getElementById(b).classList;c.contains(q)?(c.remove(q),a.classList.add(p)):(c.add(q),a.classList.remove(p))})})}),/***/39:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/73:(/***/function _(a,b,c){c(19),a.exports=c(39)})},[73]),function(a,b){"use strict";function c(){var a=i();"analyst-report"===a?window.location="/resources/#/type/analyst-report/topic/all/language/all":"datasheet"===a?window.location="/resources/#/type/datasheet/topic/all/language/all":"dummies-ebook"===a?window.location="/resources/#/type/dummies-ebook/topic/all/language/all":"product-demo"===a?window.location="/resources/#/type/product-demo/topic/all/language/all":"product-guide"===a?window.location="/resources/#/type/product-guide/topic/all/language/all":"webcast"===a?window.location="/resources/#/type/webcast/topic/all/language/all":"whitepaper"===a?window.location="/resources/#/type/whitepaper/topic/all/language/all":"vmdr"===a?window.location="/resources/#/type/all/topic/Vulnerability Management/language/all":void 0}/*
	 * Hide all sections
	 */function d(){var b=a(".q-resources-filter__category");b.addClass("q-resources-filter__category--closed")}/*
	 * Hide all items
	 */function e(){var b=a(".q-resources-filter__item");b.addClass("asset")}/*
	 * build dropdown menus
	 */function f(){// create array of language codes, resource types and topics
var c=a(".q-resources-filter__category-wrapper .q-resources-filter__item").map(function(b,c){return a(c).attr("lang")}),d=a(".q-resources-filter__category-wrapper .q-resources-filter__item").map(function(b,c){return a(c).attr("data-typeName")}),e=a(".q-resources-filter__category-wrapper .q-resources-filter__item").map(function(b,c){var d=a(c).attr("data-topics");// if there's a comma-delimited list of topics, convert it to an array
return-1!==d.indexOf(",")&&(d=d.split(",")),d});// get unique values of language codes, resource types and topics
c=b.uniq(c),d=b.uniq(d),e=b.uniq(e),c=b.sortBy(c,function(a){return a}),d=b.sortBy(d,function(a){return a}),e=b.sortBy(e,function(a){return a});// for topics, rearrange the order of items
var f=e.indexOf("Security Assessment Questionnaire");-1!==f&&(e.splice(f,1),e.unshift("Security Assessment Questionnaire"));var g=e.indexOf("Security Configuration Assessment");-1!==g&&(e.splice(g,1),e.unshift("Security Configuration Assessment"));var h=e.indexOf("File Integrity Monitoring");-1!==h&&(e.splice(h,1),e.unshift("File Integrity Monitoring"));var i=e.indexOf("PCI Compliance");-1!==i&&(e.splice(i,1),e.unshift("PCI Compliance"));var j=e.indexOf("Policy Compliance");-1!==j&&(e.splice(j,1),e.unshift("Policy Compliance"));var k=e.indexOf("Web Application Firewall");-1!==k&&(e.splice(k,1),e.unshift("Web Application Firewall"));var l=e.indexOf("Web Application Scanning");-1!==l&&(e.splice(l,1),e.unshift("Web Application Scanning"));var m=e.indexOf("CyberSecurity Asset Management");-1!==m&&(e.splice(m,1),e.unshift("CyberSecurity Asset Management"));var n=e.indexOf("Container Security");-1!==n&&(e.splice(n,1),e.unshift("Container Security"));var o=e.indexOf("Indication of Compromise");-1!==o&&(e.splice(o,1),e.unshift("Indication of Compromise"));var p=e.indexOf("Continuous Monitoring");-1!==p&&(e.splice(p,1),e.unshift("Continuous Monitoring"));var q=e.indexOf("Threat Protection");-1!==q&&(e.splice(q,1),e.unshift("Threat Protection"));var r=e.indexOf("Vulnerability Management");-1!==r&&(e.splice(r,1),e.unshift("Vulnerability Management"));var s=e.indexOf("Asset Inventory");-1!==s&&(e.splice(s,1),e.unshift("Asset Inventory"));var t=e.indexOf("Enterprise TruRisk\u2122");-1!==t&&(e.splice(t,1),e.unshift("Enterprise TruRisk\u2122"));// create array of language code, resource type HTML list items
var u=c.map(function(a){return"<li><label><input value=\""+a+"\" type=\"checkbox\" class=\""+a+"\"> "+a.toUpperCase()+"</label></li>"}),v=d.map(function(a){var b=a;return"Webcast"===a&&(b="Webinar"),"<li><label><input value=\""+a.toLowerCase().replace(" ","-")+"\" type=\"checkbox\" class=\""+a+"\"> "+b+"</label></li>"}),w=e.map(function(a){return"<li><label><input value=\""+a+"\" type=\"checkbox\" class=\""+a+"\"> "+a+"</label></li>"});// convert language, resource type HTML arrays to string
// append language, resource type HTML to page
u=u.join(""),v=v.join(""),w=w.join(""),a("ul.language").append(u),a(".language input.en").prop("checked",!0),a("ul.type").append(v),a("ul.topic").append(w)}/*
	 * update dropdown number indicator
	 */function g(){var b=["type","topic","language"];a.each(b,function(b,c){var d=a("ul."+c+" li input:checked").length;0<d?a("ul."+c+" li input.all:checked").length?a("ul."+c).siblings("strong").find("span").html("("+(a("ul."+c+" li input").length-1)+")"):a("ul."+c).siblings("strong").find("span").html("("+d+")"):a("ul."+c).siblings("strong").find("span").html("")})}/*
	 * show or hide assets
	 */function h(){a(".q-resources-filter__category-wrapper a").removeClass("active");// build array of user-selected types
var b=[];a("ul.type input:checked").each(function(c,d){"all"!==a(d).val()&&b.push("[data-typeId='"+a(d).val()+"']")}),0===b.length&&a("ul.type input").each(function(c,d){b.push("[data-typeId='"+a(d).val()+"']")}),b=b.join();// build array of user-selected topics
var c=[];a("ul.topic input:checked").each(function(b,d){"all"!==a(d).val()&&c.push("[data-topics*='"+a(d).val()+"']")}),0===c.length&&(a("ul.topic input").each(function(b,d){c.push("[data-topics*='"+a(d).val()+"']")}),c.push("[data-topics='']")),c=c.join();// build array of user-selected languages
var d=[];/* for debugging 
		console.log(typeFilter);
		console.log(topicFilter);
		console.log(langFilter);
		console.log('$(".q-resources-filter__category-wrapper li").filter("' + langFilter + '").filter("' + typeFilter + '").filter("' + topicFilter + '").addClass("active")'); */ // show resources that match user's selection
// show categories that contain resources
a("ul.language input:checked").each(function(b,c){"all"!==a(c).val()&&d.push("[lang='"+a(c).val()+"']")}),0===d.length&&a("ul.language input").each(function(b,c){d.push("[lang='"+a(c).val()+"']")}),d=d.join(),a(".q-resources-filter__category-wrapper a").filter(d).filter(b).filter(c).addClass("active"),a(".q-resources-filter__category-wrapper > a").each(function(b,c){0<a(c).find("li.active").length&&a(c).addClass("active")}),g(),n(),p()}/*
	 * get hash tag
	 */function i(){var a;return window.location.hash?(a=window.location.hash.substring(1),a=0==a.indexOf("/")?a.substring(1):a):a="",a}/*
	 * build hash based on checked checkboxes
	 */function j(){var b,c=[],d=[],e=[];// get all checked "types" as an array
// get all checked "topics" as an array
// get all checked "languages" as an array
// build hash based on checked checkboxes
a("ul.type input:checked").each(function(d,e){b=a(e).val(),c.push(b)}),a("ul.topic input:checked").each(function(c,e){b=a(e).val(),d.push(b)}),a("ul.language input:checked").each(function(c,d){b=a(d).val(),e.push(b)}),window.location.hash="/type/"+c.join(",")+"/topic/"+d.join(",")+"/language/"+e.join(",")}/*
	 * effect changes based on set of arguments
	 */function k(b){a.each(b,function(b,c){// convert comma-delimited list to array
var d=c.split(",");// reset / uncheck all "type" checkboxes
// if a type is specified, check its checkbox
a("div.filterbox."+b+" input").prop("checked",!1),a.each(d,function(c,d){a("div.filterbox."+b+" input").each(function(b,c){a(c).attr("value").trim()===d.replaceAll("%20"," ").trim()&&a(c).prop("checked",!0)})})})}/*
	 * convert hash into object of argument pairs
	 */function l(a){// URL and hash should be in format
// qualys.com/resources/#/type/datasheet,webcast/topic/vm,pc/language/en,fr
var b=[],c={};if(b=a.split("/"),b.length)for(var d=0;d<b.length;d++)"type"===b[d]?c[b[d]]=b[d+1]:"topic"===b[d]?c[b[d]]=b[d+1]:"language"===b[d]&&(c[b[d]]=b[d+1]);return c}function m(){a("form.resource-filters input[type='checkbox']").on("change",function(b){s=a(b.currentTarget).closest("ul").prop("class"),s=s.replace("active","").trim(),"all"===a(b.currentTarget).attr("class")?b.currentTarget.checked?a(b.currentTarget).closest("ul").find("input").not(".all").prop("checked",!1):a(b.currentTarget).closest("ul").find("input.all").prop("checked",!0):0===a(b.currentTarget).closest("ul").find("input:checked").length?a(b.currentTarget).closest("ul").find("input.all").prop("checked",!0):a(b.currentTarget).closest("ul").find("input.all").prop("checked",!1),j(),h()})}function n(){a(".q-resources-filter__category").removeClass("hidden"),a(".q-resources-filter__category").each(function(b,c){var d=a(c).find(".q-resources-filter__item.active").length;0===d&&a(c).addClass("hidden")});// if only one category is showing, expand it
var b=a(".q-resources-filter__category:not(.hidden)");1===b.length?b.removeClass("q-resources-filter__category--closed"):1<b.length&&b.addClass("q-resources-filter__category--closed"),!1===t&&o()}function o(){setTimeout(function(){if(window.location.hash)var a=window.location.hash.toLowerCase();switch(a){case"#/type/analyst-report/topic/all/language/all":case"#/type/datasheet/topic/all/language/all":case"#/type/dummies-ebook/topic/all/language/all":case"#/type/product-demo/topic/all/language/all":case"#/type/product-guide/topic/all/language/all":case"#/type/webcast/topic/all/language/all":case"#/type/whitepaper/topic/all/language/all":var b=document.getElementById("all-resources");scrollTo(document.body,b.offsetTop-40),t=!0}},0)}function p(){a(".q-resources__no-results").addClass("hidden");var b=a(".q-resources-filter__category").length,c=a(".q-resources-filter__category.hidden").length;c===b&&a(".q-resources__no-results").removeClass("hidden")}/*
	 * Handle expanding and collapsing of filter dropdowns
	 */function q(){// click handler to close any open filter dropdown menus when you click anywhere outside the filter dropdown
a(".filterbox strong").on("click",function(b){a(b.currentTarget).hasClass("open")?(a(b.currentTarget).removeClass("open"),a(".q-resources-filter__dropdowns div.overlay").removeClass("open"),a(b.currentTarget).parent("div").find("ul").removeClass("active"),a(b.currentTarget).closest("div.mobile-filter-toggle").siblings("div.filterbox").removeClass("mobile-active")):(a(b.currentTarget).closest("form").find("ul").removeClass("active"),a(b.currentTarget).closest("form").find("strong").not("div.mobile-filter-toggle strong").removeClass("open"),a(b.currentTarget).addClass("open"),a(b.currentTarget).next("ul").addClass("active"),a(b.currentTarget).closest("div.mobile-filter-toggle").is(":first-child")?a(b.currentTarget).closest("div.filterbox").siblings("div.filterbox").addClass("mobile-active"):a(".q-resources-filter__dropdowns div.overlay").addClass("open"))}),a(".q-resources-filter__dropdowns > div.overlay").on("click",function(){a("form.resource-filters strong.open").not("div.mobile-filter-toggle strong").trigger("click")}),a(document).on("click",function(b){var c=a(".filterbox");c.is(b.target)||0!==c.has(b.target).length||a(".filterbox strong").each(function(b,c){a(c).hasClass("open")&&a(c).trigger("click")})})}var r,s="",t=!1;a(document).ready(function(){c(),d(),e(),f(),m(),q(),r=l(i()),k(r),g(),h()}),a(window).on("hashchange",c)}(jQuery,_),function(a){"use strict";a(document).ready(function(){// when user clicks a resource link
null!==history.state&&a("[data-category='"+history.state.type+"']").click(),a(".q-resources-filter__wrapper .asset").on("click",function(b){// don't follow the clicked link yet
// event.preventDefault();
// get the resource's type
var c=a(b.currentTarget).parent().prev().attr("data-category");// and save it in the browser history state object
history.replaceState({type:c},"Resource","")})})}(jQuery),function(a){"use strict";a(document).ready(function(){// when user clicks the reset link
a(".q-resources-filter__reset a").on("click",function(){// trigger a click on the first checkbox in all filters
// clear the search box
// collapse all categories
a(".filterbox input[class='all']").trigger("click"),a("input.search").attr("value",""),a(".q-resources-filter__category").addClass("q-resources-filter__category--closed")})})}(jQuery),function(a){"use strict";a(document).ready(function(){// get all webcasts times
a("#webcast a").each(function(b,c){var d=a(c).find("time").attr("datetime");// if webcast is in the future ...
0>moment().diff(moment(d))&&a(c).find(".label__upcoming").removeClass("hidden")})})}(jQuery),function(){"use strict";var a,b,c,d;// set the locale based on the user's browser
for(moment.locale(window.navigator.languages||window.navigator.language),c=document.querySelectorAll("time[datetime]"),d=0;d<c.length;d+=1)b=c.item(d),a=moment.tz(b.getAttribute("datetime"),moment.tz.guess()),b.innerText=a.format("LLLL z")}();
//# sourceMappingURL=resources.js.map