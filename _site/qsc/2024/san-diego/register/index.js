"use strict";/* global jQuery MktoForms2 */ /*
 * inject hidden QSC location field
 */(function(a,b){"use strict";b.onFormRender(function(a){a.addHiddenFields({"qsc-location":"Americas"})}),b.onFormRender(function(){a("input[name='MktoPersonNotes']").on("click",function(){a(".MktoPersonNotes .mktoFieldDescriptor .mktoRequiredField .mktoError").addClass("hiderequiredmessage")})})})(jQuery,MktoForms2);
//# sourceMappingURL=index.js.map