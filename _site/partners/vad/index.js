"use strict";/* eslint-disable */webpackJsonp([0],{/***/26:(/***/function _(a,b,c){"use strict";function d(a){return a&&a.__esModule?a:{default:a}}var e=c(8),f=d(e),g=c(2),h=d(g),i=c(44),j=d(i),k=c(46),l=d(k);(0,h.default)(),(0,l.default)(),(0,f.default)("q-tabs__link");var m=document.querySelector(".q-subscriptions-sticky");m&&new j.default}),/***/41:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/44:(/***/function _(a,b){"use strict";function c(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(b,"__esModule",{value:!0});var d=function(){function a(a,b){for(var c,d=0;d<b.length;d++)c=b[d],c.enumerable=c.enumerable||!1,c.configurable=!0,"value"in c&&(c.writable=!0),Object.defineProperty(a,c.key,c)}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),e=function(){function a(b){var d=this;c(this,a),f.call(this),this.el=b||document.querySelector("."+this.blockName),this.stickyLayoutEl=this.el.querySelector("."+this.blockName+"__layout--sticky"),this.listEl=this.el.querySelector("."+this.blockName+"__list"),this.itemEls=this.el.querySelectorAll("."+this.blockName+"__item"),this.build(),setTimeout(function(){d.onResize(),d.onScroll()}),this.lastRender=0,window.addEventListener("scroll",this.onScroll),window.addEventListener("resize",this.onResize)}return d(a,[{key:"build",value:function(){var a=this,b=this.glistEl=document.createElement("div");this.itemEls.forEach(function(c){var d=c.querySelector("."+a.blockName+"__heading"),e=document.createElement("li");e.className=a.blockName+"__gitem",e.appendChild(d.cloneNode(!0)),b.appendChild(e)}),b.className=this.blockName+"__glist",this.gitemEls=b.childNodes,this.el.appendChild(b)}},{key:"handleLayout",value:function(a){var b=this.offsetTop+this.height-window.innerHeight;a>b?(this.stickyLayoutEl.style.position="absolute",this.stickyLayoutEl.style.top="auto",this.stickyLayoutEl.style.bottom="0px"):a>=this.offsetTop?(this.stickyLayoutEl.style.position="fixed",this.stickyLayoutEl.style.top=""):(this.stickyLayoutEl.style.position="",this.stickyLayoutEl.style.top="")}},{key:"handleHeadlines",value:function(a){var b=this;a>=this.itemsOffsetTop+this.offsetTop-window.innerHeight+this.items.length*this.headlineHeight?(this.glistEl.style.position="fixed",this.glistEl.style.top="",this.glistEl.style.bottom="0px"):(this.glistEl.style.position="absolute",this.glistEl.style.top=this.itemsOffsetTop+"px",this.glistEl.style.bottom="");var c=this.blockName+"__gitem--hidden";this.items.forEach(function(d,e){var f=b.items.length-e,g=d.offsetTop+b.offsetTop-window.innerHeight+f*b.headlineHeight;a>=g?!d.ghostEl.classList.contains(c)&&d.ghostEl.classList.toggle(c,!0):d.ghostEl.classList.contains(c)&&d.ghostEl.classList.toggle(c,!1)})}}]),a}(),f=function(){var a=this;this.items=[],this.blockName="q-subscriptions-sticky",this.onScroll=function(){var b=window.scrollY||document.querySelector("html").scrollTop;5e3<Date.now()-a.lastRender&&a.onResize(),a.handleLayout(b),a.handleHeadlines(b)},this.onResize=function(){a.offsetTop=a.el.offsetTop,a.height=a.el.offsetHeight,a.headlineHeight=a.gitemEls[0].offsetHeight,a.itemsOffsetTop=a.listEl.offsetTop,a.glistEl.style.left=a.itemEls[0].offsetLeft+"px",a.glistEl.style.width=a.itemEls[0].offsetWidth+"px",a.itemEls.forEach(function(b,c){a.items[c]={el:b,ghostEl:a.gitemEls[c],offsetTop:b.offsetTop}}),a.lastRender=Date.now()}};b.default=e}),/***/46:(/***/function _(a,b,c){"use strict";function d(a){return a&&a.__esModule?a:{default:a}}/***/Object.defineProperty(b,"__esModule",{value:!0}),b.default=function(){var a=document.querySelector(".q-subscriptions-cloud-platform"),b=window.Power4.easeInOut;if(a)var c=new h.default,d=new f.default({// eslint-disable-line
element:a,offset:"100%",handler:function(a){"down"===a&&c.addLabel("start").staggerFromTo(".q-subscriptions-cloud-platform__dots path",.8,{scale:0,autoAlpha:0},{scale:1,autoAlpha:1,ease:b},.05).fromTo(".q-subscriptions-cloud-platform__arrows",1,{rotation:-180,autoAlpha:0,transformOrigin:"center"},{rotation:0,autoAlpha:1},"start+=1.3")}})};var e=c(1),f=d(e),g=c(0),h=d(g)}),/***/80:(/***/function _(a,b,c){c(26),a.exports=c(41)})},[80]);
//# sourceMappingURL=index.js.map