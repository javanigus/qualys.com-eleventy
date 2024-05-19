/* global jQuery  */ /* eslint-disable */"use strict";var _createClass=function(){function a(a,b){for(var c,d=0;d<b.length;d++)c=b[d],c.enumerable=c.enumerable||!1,c.configurable=!0,"value"in c&&(c.writable=!0),Object.defineProperty(a,c.key,c)}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}();function _classCallCheck(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}(function(a){var b={position:"left",showBackLink:!1,keycodeOpen:null,keycodeClose:27,//esc
submenuLinkBefore:"",submenuLinkAfter:"",backLinkBefore:"",backLinkAfter:""},c=function(){function b(a){_classCallCheck(this,b),this.options=a,this._menu=a.elem,this._menu.find("ul:first").wrap("<div class=\"q-menu-slider\">"),this._anchors=this._menu.find("a"),this._slider=this._menu.find(".q-menu-slider:first"),this._level=0,this._isOpen=!1,this._isAnimating=!1,this._hasMenu=0<this._anchors.length,this._lastAction=null,this._setupEventHandlers(),this._setupMenu(),this._hasMenu&&this._setupSubmenus()}/**
		 * Toggle the menu
		 * @param {boolean|null} open
		 * @param {boolean} animate
		 */return _createClass(b,[{key:"toggle",value:function(){var b=0<arguments.length&&void 0!==arguments[0]?arguments[0]:null,c=!(1<arguments.length&&void 0!==arguments[1])||arguments[1],d=void 0,e="visible";return null===b?void(this._isOpen?this.close():this.open()):void(b?(d=0,e="visible",this._isOpen=!0,a("body").addClass("mobile-menu-on")):(d="left"===this.options.position?"-100%":"100%",e="hidden",a("body").removeClass("mobile-menu-on"),this._isOpen=!1),this._triggerEvent(),c?this._triggerAnimation(this._menu,d,e):(this._pauseAnimations(this._triggerAnimation.bind(this,this._menu,d,e)),this._isAnimating=!1))}/**
			 * Open the menu
			 * @param {boolean} animate Use CSS transitions
			 */},{key:"open",value:function(){var a=!(0<arguments.length&&void 0!==arguments[0])||arguments[0];this._lastAction="open",this.toggle(!0,a)}/**
			 * Close the menu
			 * @param {boolean} animate Use CSS transitions
			 */},{key:"close",value:function(){var a=!(0<arguments.length&&void 0!==arguments[0])||arguments[0];this._lastAction="close",this.toggle(!1,a)}/**
			 * Navigate one menu hierarchy back if possible
			 */},{key:"back",value:function(){this._lastAction="back",this._navigate(null,-1)}/**
			 * Navigate to a specific link on any level (useful to open the correct hierarchy directly)
			 * @param {string|object} target A string selector a plain DOM object or a jQuery instance
			 */},{key:"navigateTo",value:function(b){var c=this;if(b=this._menu.find(a(b)).first(),!b.length)return!1;var d=b.parents("ul"),e=d.length-1;this._pauseAnimations(function(){c._level=e,a(".submenu").hide().removeClass("active"),c._triggerAnimation(c._slider,100*-c._level)})}/**
			 * Set up all event handlers
			 * @private
			 */},{key:"_setupEventHandlers",value:function(){var b=this;this._hasMenu&&this._anchors.click(function(c){var d=a(c.target).is("a")?a(c.target):a(c.target).parents("a:first");b._navigate(d)}),a(this._menu.add(this._slider)).on("transitionend msTransitionEnd",function(){b._isAnimating=!1,b._triggerEvent(!0)}),a(document).keydown(function(a){switch(a.which){case b.options.keycodeClose:b.close();break;case b.options.keycodeOpen:b.open();break;default:return}a.preventDefault()}),this._menu.on("sm.back-after",function(){var a="ul "+".active ".repeat(b._level+1);b._menu.find(a).removeClass("active").hide()})}/**
			 * Trigger a custom event to support callbacks
			 * @param {boolean} afterAnimation Mark this event as `before` or `after` callback
			 * @private
			 */},{key:"_triggerEvent",value:function(){var a=!!(0<arguments.length&&void 0!==arguments[0])&&arguments[0],b="sm."+this._lastAction;a&&(b+="-after"),this._menu.trigger(b)}/**
			 * Navigate the _menu - that is slide it one step left or right
			 * @param {jQuery} anchor The clicked anchor or button element
			 * @param {int} dir Navigation direction: 1 = forward, 0 = backwards
			 * @private
			 */},{key:"_navigate",value:function(a){var b=1<arguments.length&&void 0!==arguments[1]?arguments[1]:1;// Abort if an animation is still running
if(!this._isAnimating){var c=-100*(this._level+b);if(0<b){if(!a.next("ul").length)return;a.next("ul").addClass("active").show()}else if(0===this._level)return;this._lastAction=0<b?"forward":"back",this._level+=b,this._triggerAnimation(this._slider,c,"visible")}}/**
			 * Start the animation (the CSS transition)
			 * @param elem
			 * @param offset
			 * @private
			 */},{key:"_triggerAnimation",value:function(a,b,c){this._triggerEvent(),-1!==(b+"").indexOf("%")||(b+="%"),a.css({transform:"translateX("+b+")",visibility:c}),this._isAnimating=!0}/**
			 * Initialize the menu
			 * @private
			 */},{key:"_setupMenu",value:function(){var a=this;this._pauseAnimations(function(){switch(a.options.position){case"left":a._menu.css({left:0,right:"auto",transform:"translateX(-100%)",visibility:"hidden"});break;default:a._menu.css({left:"auto",right:0})}// _this3._menu.show();
})}/**
			 * Pause the CSS transitions, to apply CSS changes directly without an animation
			 * @param work
			 * @private
			 */},{key:"_pauseAnimations",value:function(a){this._menu.addClass("no-transition"),a(),this._menu[0].offsetHeight,this._menu.removeClass("no-transition")}/**
			 * Enhance the markup of menu items which contain a submenu
			 * @private
			 */},{key:"_setupSubmenus",value:function(){var b=this;this._anchors.each(function(c,d){if(d=a(d),d.next("ul").length){d.click(function(a){a.preventDefault()});// add `before` and `after` text
var e=d.text();// add a back button
if(d.html(b.options.submenuLinkBefore+e+b.options.submenuLinkAfter),b.options.showBackLink){var f=a("<a href class=\"js-mobile-menu-control\" data-action=\"back\">"+e+"</a>");f.html(b.options.backLinkBefore+f.text()+b.options.backLinkAfter),d.next("ul").prepend(a("<li>").append(f))}}})}}]),b}();// Link control buttons with the API
// Register the jQuery plugin
a("body").on("click",".js-mobile-menu-control",function(){var b=void 0,c=a(this).data("target");if(b=c&&"this"!==c?a("#"+c):a(this).parents(".q-mobile-menu:first"),!!b.length){var d=b.data("slideMenu"),e=a(this).data("action");return d&&"function"==typeof d[e]&&d[e](),!1}}),a.fn.slideMenu=function(d){if(!a(this).length)return void console.warn("Slide Menu: Unable to find menu DOM element. Maybe a typo?");d=a.extend({},b,d),d.elem=a(this);var e=new c(d);return a(this).data("slideMenu",e),e}})(jQuery);
//# sourceMappingURL=mobile-menu.js.map