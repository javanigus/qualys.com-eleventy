"use strict";// Function to read all search parameters from the URL
function getSearchParams(){var a=new URLSearchParams(window.location.search),b={};return a.forEach(function(a,c){b[c]=a}),b}// Function to create a new URL based on all search parameters
function createNewURL(a){var b="https://qualys-html-to-pdf-0d3555d590c9.herokuapp.com/generate-pdf?"+new URLSearchParams(a).toString();return b}// Function to set the href attribute of the anchor element
function setAnchorHref(a){var b=document.querySelector(".report");b.href=a}document.addEventListener("DOMContentLoaded",function(){// Get all search parameters from the URL
var a=getSearchParams(),b=createNewURL(a);// Create a new URL based on all search parameters
// Set the href attribute of the anchor element
setAnchorHref(b)});
//# sourceMappingURL=index.js.map