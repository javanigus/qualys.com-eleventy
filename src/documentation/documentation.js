"use strict";(function(){/*
	 * add focus class to all siblings when input is focused
	 */let a=document.querySelector(".q-search__input");a&&(a.addEventListener("focus",function(){a.parentNode.childNodes.forEach(a=>{a.nodeType===Node.ELEMENT_NODE&&a.classList.add("focus")})}),a.addEventListener("blur",function(){a.parentNode.childNodes.forEach(a=>{a.nodeType===Node.ELEMENT_NODE&&a.classList.remove("focus")})}));/*
	 * reset input when reset button is clicked
	 */let b=document.querySelector(".q-search__close");b&&b.addEventListener("click",function(){a.value="",a.focus()})})();// expand / collapse document sections
var documentLink=document.querySelectorAll(".q-document-top"),currentUrl=window.location.href;Array.prototype.forEach.call(documentLink,function(a){a.addEventListener("click",function(b){var c=b.target.id;location.hash?location.replace("#"+c):location.replace(currentUrl+"#"+c),a.classList.toggle("minus"),a.nextElementSibling.classList.toggle("show")})});// Get the part of the URL after the "#" symbol
var containsHash=-1!=currentUrl.indexOf("#");if(containsHash){var hashId=currentUrl.substring(currentUrl.indexOf("#")+1),hashEl=document.getElementById(hashId);null!==hashEl&&hashEl.click()}// Listen for changes to the URL hash
window.addEventListener("hashchange",function(){var a=document.querySelectorAll(".minus");a.forEach(a=>a.classList.remove("minus"));var b=document.querySelectorAll(".show");b.forEach(a=>a.classList.remove("show"));// Get the element corresponding to the current hash
var c=document.getElementById(location.hash.substring(1));null!==c&&c.click()});
//# sourceMappingURL=documentation.js.map