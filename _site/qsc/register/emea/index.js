"use strict";/* global jQuery MktoForms2 */(function(a,b){"use strict";a(document).on("cleanMarketoHTMLAndCSSComplete",function(){b.whenRendered(function(b){function c(){var b=[];a(".panel.training [type=checkbox]:checked, .panel.sessions [type=checkbox]:checked").each(function(){b.push("\""+a(this).val()+"\"")}),b=b.join(","),console.log(b),a("[name=swapcardSessionsID]").val(b)}// when user checks a training or session checkbox, create a comma-delimited list of values
// create form navigation buttons
var d="<div class=\"button mktoNextButtonRow\"><span class=\"mktoButtonWrap mktoNative\"><button type=\"button\" class=\"mktoButton\">Next</button></span></div>",e=a(".mktoButtonRow").last().addClass("button").detach(),f="<div class=\"buttons-wrapper\"/>";// wrap div around fields in panel 1
// wrap div around fields in panel 2
// wrap div around fields in panel 3
// add back and next buttons to panels
// wrap div around buttons
// add "Check all | none" links
// if user clicks "Next" button in panel 1, ...
// if user clicks "Back" button in panel 2, ...
// if user clicks "Next" button in panel 2, ...
// form.onSubmit(function (form) {
// 	// if user doesn't check any checkboxes, ...
// 	if ($(".panel.training [type=checkbox]:checked").length === 0) {
// 		// show validation error
// 		form.showErrorMessage("Check at least one.", $(".mktoFormRow.Training_Session__c .mktoFieldWrap"));
// 		form.submitable(false);
// 	}
// });
// if user clicks "Back" button in panel 3, ...
// if user clicks "Check all" link in panel 2, ...
// if user clicks "Uncheck all" link in panel 2, ...
// if user clicks "Check all" link in panel 3, ...
// if user clicks "Uncheck all" link in panel 3, ...
a(".mktoFormRow.FirstName, \t\t\t\t.mktoFormRow.LastName, \t\t\t\t.mktoFormRow.Email, \t\t\t\t.mktoFormRow.Title, \t\t\t\t.mktoFormRow.Company, \t\t\t\t.mktoFormRow.Phone, \t\t\t\t.mktoFormRow.ISC_Member__c, \t\t\t\t.mktoFormRow.Registration_Type__c, \t\t\t\t.mktoFormRow.Registration_Type_Other__c, \t\t\t\t.mktoFormRow.communicationConsent \t\t\t").wrapAll("<div class='panel info'/>"),a(".mktoFormRow.Conference_Sessions__c \t\t\t").wrapAll("<div class='panel sessions hidden'/>"),a(".mktoFormRow.Training_Session__c \t\t\t").wrapAll("<div class='panel training hidden'/>"),a(".panel.info").append(d),a(".panel.sessions").append("<a class=\"button mktoBackButtonRow\"><img src=\"https://ik.imagekit.io/qualys/image/icon/left-arrow-gray.svg\" width=\"26\" class=\"arrow\"><span class=\"button-label\">Back</span></a>").append(d),a(".panel.training").append("<a class=\"button mktoBackButtonRow\"><img src=\"https://ik.imagekit.io/qualys/image/icon/left-arrow-gray.svg\" width=\"26\" class=\"arrow\"><span class=\"button-label\">Back</span></a>").append(e),a(".panel.info .button").wrapAll(f),a(".panel.sessions .button").wrapAll(f),a(".panel.training .button").wrapAll(f),a("#LblConference_Sessions__c, #LblTraining_Session__c").append("<p class=\"check-all-none\"><a class=\"all q-link q-inline-link\">Check all</a> <span class=\"pipe\">|</span> <a class=\"none q-link q-inline-link\">Uncheck all</a></p>"),a(document).on("click",".panel.info .mktoNextButtonRow .mktoButton",function(){b.validate()&&window.qualys.marketo.basicValidation(b)&&(a(".panel").addClass("hidden"),a(".panel.sessions").removeClass("hidden"),a(".step").removeClass("active"),a(".step2").addClass("active"))}),a(document).on("click",".panel.sessions .mktoBackButtonRow",function(){// show panel 1
a(".panel").addClass("hidden"),a(".panel.info").removeClass("hidden"),a(".step").removeClass("active"),a(".step1").addClass("active")}),a(document).on("click",".panel.sessions .mktoNextButtonRow .mktoButton",function(){0===a(".panel.sessions [type=checkbox]:checked").length?b.showErrorMessage("Check at least one.",a(".mktoFormRow.Conference_Sessions__c .mktoFieldWrap")):(a(".panel").addClass("hidden"),a(".panel.training").removeClass("hidden"),a(".step").removeClass("active"),a(".step3").addClass("active"))}),a(document).on("click",".panel.training .mktoBackButtonRow",function(){// show panel 2
a(".panel").addClass("hidden"),a(".panel.sessions").removeClass("hidden"),a(".step").removeClass("active"),a(".step2").addClass("active")}),a(document).on("click",".panel.sessions .check-all-none .all",function(){// check all checkboxes
a(".panel.sessions [id^=LblmktoCheckbox_]").addClass("checked"),a(".panel.sessions [id^=mktoCheckbox]").prop("checked",!0),c()}),a(document).on("click",".panel.sessions .check-all-none .none",function(){// uncheck all checkboxes
a(".panel.sessions [id^=LblmktoCheckbox_]").removeClass("checked"),a(".panel.sessions [id^=mktoCheckbox]").prop("checked",!1),c()}),a(document).on("click",".panel.training .check-all-none .all",function(){// check all checkboxes
a(".panel.training [id^=LblmktoCheckbox_]").addClass("checked"),a(".panel.training [id^=mktoCheckbox]").prop("checked",!0),c()}),a(document).on("click",".panel.training .check-all-none .none",function(){// uncheck all checkboxes
a(".panel.training [id^=LblmktoCheckbox_]").removeClass("checked"),a(".panel.training [id^=mktoCheckbox]").prop("checked",!1),c()}),a(".panel.training [type=checkbox], \t\t\t   .panel.sessions [type=checkbox]").on("change",function(){window.setTimeout(c,0)})})})})(jQuery,MktoForms2);
//# sourceMappingURL=index.js.map