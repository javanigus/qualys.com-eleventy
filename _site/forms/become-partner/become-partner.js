"use strict";/* eslint-disable */ /* eslint-enable */ /*
 * append the leadsource to the iframe URL
 */webpackJsonp([14],{/***/10:(/***/function _(a,b,c){"use strict";function d(a){return a&&a.__esModule?a:{default:a}}// hero animations
var e=c(1),f=d(e),g=c(0),h=d(g),i=new h.default,j=document.querySelector(".q-alternate-hero"),k=document.querySelector(".q-alternate-hero__content"),l=k.childNodes,m=document.querySelector(".q-alternate-hero__image-wrap"),n=new f.default({// eslint-disable-line
element:j,offset:"100%",handler:function(a){"down"===a&&i.addLabel("start").staggerFromTo(l,1,{y:"20%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},.1).fromTo(m,1,{y:"-30%",autoAlpha:0},{y:"0%",autoAlpha:1,ease:window.Power4.easeInOut},"start+=.8")}});/***/}),/***/30:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/64:(/***/function _(a,b,c){c(10),a.exports=c(30)})},[64]),function(){"use strict";var a,b;window.location.search&&(b=window.location.search.match(/leadsource=(\d+)([;&#]|$)/),b&&(a=document.querySelector("iframe[name=salesforce]"),a&&!a.src.match(/\?/)&&(a.src+="?leadsource="+b[1])))}();
//# sourceMappingURL=become-partner.js.map