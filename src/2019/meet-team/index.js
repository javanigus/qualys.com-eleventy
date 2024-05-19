"use strict";/* global jQuery MktoForms2 */ /*
 * limit checkbox selection to 2
 */(function(a){"use strict";MktoForms2.whenReady(function(){a(document).on("alterFormValuesComplete",function(){a("[name=qSC19EngineerTeamChoice1]").on("change",function(){var b=a("[name=qSC19EngineerTeamChoice1]:checked").length;2===b?a("[name=qSC19EngineerTeamChoice1]:not(:checked)").attr("disabled","disabled"):2>b&&a("[name=qSC19EngineerTeamChoice1]").removeAttr("disabled")})})})})(jQuery);
//# sourceMappingURL=index.js.map