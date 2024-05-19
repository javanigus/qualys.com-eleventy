"use strict";// Get all tabs and add click event listeners
var tabs=document.querySelectorAll(".tab");tabs.forEach(function(a){a.addEventListener("click",function(){changeTab(a.id)})});function changeTab(a){// Hide all content divs
for(var b=document.getElementsByClassName("content"),c=0;c<b.length;c++)b[c].style.display="none";// Remove 'active-tab' class from all tabs
// eslint-disable-next-line no-redeclare
for(var d=document.getElementsByClassName("tab"),c=0;c<d.length;c++)d[c].classList.remove("active-tab");// Show the selected content and mark the selected tab as active
document.getElementById(a+"Content").style.display="block",document.getElementById(a).classList.add("active-tab")}
//# sourceMappingURL=index.js.map