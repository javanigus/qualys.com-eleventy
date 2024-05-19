"use strict";(function(){document.addEventListener("DOMContentLoaded",function(){var a=document.getElementById("copyLink");a.addEventListener("click",function(c){c.preventDefault();// Prevent the default action of anchor tag
const d=window.location.origin+a.previousElementSibling.getAttribute("href");// Get the URL from href attribute
b(d)});const b=a=>{navigator.clipboard.writeText(a).then(()=>{alert("URL copied to clipboard!")}).catch(a=>console.error("Failed to copy: ",a))}})})();
//# sourceMappingURL=index.js.map