"use strict";/* global jQuery MktoForms2 */ /* eslint-disable */ /* eslint-enable */ /*
 * Enable fancybox overlay popup
 */ /*
 * Redirect to support form
 */webpackJsonp([5,18,19],{/***/23:(/***/function _(a,b,c){"use strict";var d=c(2),e=function(a){return a&&a.__esModule?a:{default:a}}(d);(0,e.default)()}),/***/40:(/***/function _(){// removed by extract-text-webpack-plugin
/***/}),/***/77:(/***/function _(a,b,c){c(23),a.exports=c(40)})},[77]),function(a){"use strict";a("[data-fancybox]").fancybox({toolbar:!1,smallBtn:!0,iframe:{preload:!1}})}(jQuery),function(a){"use strict";MktoForms2.whenReady(function(){a(".Call_Request_Options__c").on("change",function(b){var c=a(b.currentTarget).find(":selected").val();"Technical support"===c&&(window.location.href="/forms/contact-support/",a("select,textarea,input,.mktoButton").prop("disabled",!0).addClass("disabled"),a(".mktoForm button[type=\"submit\"]").text(""))})})}(jQuery,MktoForms2);
//# sourceMappingURL=index.js.map