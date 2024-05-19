"use strict";/* global jQuery */ /*
 * handle QSC mobile submenu
 */(function(a){"use strict";// close mobile nav after click submenu link
// toggle expand / collapse of submenus
a(".q-navigation-mobile-submenu__item .q-navigation-mobile__link").on("click",function(){a(".q-navigation-mobile__button").trigger("click")}),a(".q-location-link.q-navigation-mobile__link").on("click",function(b){var c=a(b.currentTarget).parent().next(".submenu-container"),d=c.attr("style");typeof d!=typeof void 0&&!1!==d&&"display: block;"===d||(a(".q-navigation-mobile__list .submenu-container").slideUp(),c.slideDown())})})(jQuery);
//# sourceMappingURL=qsc-mobile-nav.js.map