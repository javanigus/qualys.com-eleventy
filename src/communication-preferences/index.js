"use strict";/* global MktoForms2 $ */ /* Marketo Form section */ /* TODO auto-fill */MktoForms2.whenRendered(function(a){var b=a.getFormElem();/*
	 * if click "unsubscribe" checkbox, uncheck all other checkboxes
	 */b.find("input[name=Unsubscribed]").change(function(){// uncheck other checkboxes
b.find("[type=checkbox]").not("input[name=Unsubscribed]").each(function(a,b){$(b).parent("label").removeClass("checked")})}),b.find("input").not("input[name=Unsubscribed]").change(function(){b.find("input[name=Unsubscribed]").parent("label").removeClass("checked")});// get email address from URL parameters, prefill email field and check unsubscribe checkbox
var c=window.location.search.match(/email=([^&]*)/);null!==c&&-1===c[1].indexOf("lead.Email")&&(b.find("input[name=Email]").val(c[1]),b.find("input[name=Unsubscribed]").prop("checked",!0))});
//# sourceMappingURL=index.js.map