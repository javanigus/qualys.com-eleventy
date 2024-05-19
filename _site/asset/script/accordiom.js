"use strict";/*!
 * accordiom.js version 0.5
 * http://github.com/simonboak/accordiom
 * Public Domain
 *
 */ /* eslint-disable */(function(a){// Function: show all accordion items
// Function: hide all accordion items
// Function: open item n (zero indexed)
a.accordiom=function(b,c){// To avoid scope issues, use 'base' instead of 'this'
// to reference this class from internal events and functions.
var d=this;// Access to jQuery and DOM versions of element
// Add a reverse reference to the DOM object
// Sample Function, Uncomment to use
// base.functionName = function(paramaters){
//
// };
// Run initializer
d.$el=a(b),d.el=b,d.$el.data("accordiom",d),d.init=function(){d.options=a.extend({},a.accordiom.defaultOptions,c)},d.init()},a.accordiom.defaultOptions={speed:500,showFirstItem:!0,autoClosing:!0,openAll:!1,buttonBelowContent:!1,beforeChange:function beforeChange(){},afterchange:function afterchange(){},onLoad:function onLoad(){}},a.fn.accordiom=function(b){return this.each(function(){// For some reason the default options weren't being extended so I'll do it manually
/*if (!options) {
				options = $.accordiom.defaultOptions;
			}*/ // Handy functions need access to the speed option
// Bind events to the buttons
new a.accordiom(this,b),b=a.extend({},a.accordiom.defaultOptions,b),a(this).data("accordiom-speed",b.speed),b.openAll?a(this).children(".accordionButton").addClass("on"):b.showFirstItem?(a(this).children(".accordionContent").not(":first").hide(),a(this).children(".accordionButton").first().addClass("on")):a(this).children(".accordionContent").hide(),b.onLoad&&b.onLoad.call(this,this),a(this).children(".accordionButton").on("click",function(){// Grab the container element (which would be used in the initial selector)
var c=a(this).parent("div");b.beforeChange&&b.beforeChange.call(this,this),a(this).is(".on")?(a(this).next(".accordionContent").slideUp(b.speed),a(this).removeClass("on")):(b.autoClosing&&(c.children(".accordionContent").slideUp(b.speed),c.children(".accordionButton").removeClass("on")),b.buttonBelowContent?a(this).prev(".accordionContent").slideDown(b.speed):a(this).next(".accordionContent").slideDown(b.speed),a(this).addClass("on")),b.afterChange&&b.afterChange.call(this,this)})})},a.fn.accordiom.openAll=function(b){a(b).children(".accordionContent").slideDown(a(b).data("accordiom-speed"))},a.fn.accordiom.closeAll=function(b){a(b).children(".accordionContent").slideUp(a(b).data("accordiom-speed"))},a.fn.accordiom.openItem=function(b,c){var d=a(b).children(".accordionButton").length-1;if(0>c||c>d)// Quick error check
throw"Accordiom: No accordion item of index "+c+" exists";else a(a(b).children(".accordionButton")[c]).trigger("click")}})(jQuery);
//# sourceMappingURL=accordiom.js.map