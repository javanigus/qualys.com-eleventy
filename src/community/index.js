"use strict";/* global React ReactDOM Homepage fetchHomepageData */ /*
 * fetch and re-render channel components with latest data
 */ /*
 * manage Choose a Topic navigation
 */(function(){// extract channel data from JSON string in custom data attribute
const a=document.getElementById("channel_data");if(a){const b=JSON.parse(a.innerText);fetchHomepageData(b).then(a=>{ReactDOM.render(React.createElement(Homepage,{data:a}),document.getElementById("homepage_container"))}).catch(a=>{throw a})}})(),function(){/*
	 * move arrow to clicked element
	 * and reveal menu for clicked element
	 */function a(a){var b,c,d,e,f;// do nothing if already active
if(d=a.currentTarget,f=d.parentNode,c=f.parentNode,b=f.classList.contains("active"),!b){// remove all selected-index-* class names
for(e=0;6>e;e+=1)c.classList.remove("selected-index-".concat(e));// get index of clicked element
// un mark all menus
for(e=f.getAttribute("data-index"),c.classList.add("selected-index-".concat(e)),e=0;e<c.childNodes.length;e+=1)f=c.childNodes[e],f&&f.classList&&f.classList.toggle("active",b);// mark active menu
f=d.parentNode,f.classList.toggle("active",!b)}}var b,c,d;if(b=document.querySelectorAll(".q-topic-tab_link"),b)for(d=0;d<b.length;d+=1)c=b.item(d),c.addEventListener("click",a);// toggle apps menu in mobile
var e=document.querySelectorAll(".q-nav-by-topic__heading");Array.prototype.forEach.call(e,function(a){a.addEventListener("click",function(){a.classList.toggle("active"),a.nextElementSibling.classList.toggle("show")})})}();
//# sourceMappingURL=index.js.map