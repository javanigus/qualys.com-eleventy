"use strict";/* global jQuery:false */(function(a){"use strict";/*
	 * helper function
	 */var b,c;// check URL query for query
// check URL fragment for query
// scroll to top when the visitor click the next/previous buttons
b=location.search.match("q=(.*?)([&;]|$)"),b&&(c=decodeURIComponent(b[1].replace("+"," ")),location.hash="#stq="+encodeURIComponent(c)+"&stp=1",location.search="",document.getElementById("st-search-input").value=c),b=location.hash.match("stq=(.*?)([&;]|$)"),b&&(document.getElementById("st-search-input").value=decodeURIComponent(b[1])),a("#st-search-input").swiftypeSearch({engineKey:"njE8FwcJkGEs-4yey-zU",renderFunction:function(a,b){var c,d;// setup title HTML
return c="<a class=\"search-result-link\" href=\""+b.url+"\">"+b.title+"</a>",b.url.match(/\.pdf$/)&&(c="<span class=\"sb_doct_txt b_float\">[PDF]</span> "+c),d=b.description?"<p>"+b.description+"</p>":"","<div class=\"b_algo\">\t<div class=\"b_title\">\t\t<h2 class=\"heading--4\">\t\t\t"+c+"\t\t</h2>\t</div>\t<div class=\"b_caption\">\t\t<div class=\"b_attribution\">\t\t\t<cite>"+b.url+"</cite>\t\t</div>\t\t"+d+"\t</div></div>\t\t\t"},resultContainingElement:"#results"}),a("#results").on("click",".st-prev, .st-next",function(){window.scroll(0,0)})})(jQuery,jQuery().hashchange,jQuery().swiftypeSearch);
//# sourceMappingURL=index.js.map