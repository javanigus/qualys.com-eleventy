"use strict";(function(){/*
	 * add focus class to all siblings when input is focused
	 */let a=document.querySelector(".q-search__input");a&&(a.addEventListener("focus",function(){a.parentNode.childNodes.forEach(a=>{a.nodeType===Node.ELEMENT_NODE&&a.classList.add("focus")})}),a.addEventListener("blur",function(){a.parentNode.childNodes.forEach(a=>{a.nodeType===Node.ELEMENT_NODE&&a.classList.remove("focus")})}));/*
	 * reset input when reset button is clicked
	 */let b=document.querySelector(".q-search__close");b&&b.addEventListener("click",function(){a.value="",a.focus()})})();
//# sourceMappingURL=index.js.map