/*
 * add a badge next the Quazam logo
 * the badge lets you know which environment you are viewing
 */
(function () {
	"use strict";

	function insertBadge(env, branch) {
		var badge, logo;

		logo = document.getElementById("logo");
		badge = document.createElement("span");
		if (branch) {
			badge.innerHTML = env + ":" + branch;
		} else {
			badge.innerHTML = env;
		}
		badge.className = "logo_badge logo_badge_" + env;
		logo.parentNode.appendChild(badge);
	}

	var hostname, env, branch, matches;

	if (window.location.hostname) {
		hostname = window.location.hostname;

		if (hostname.match(/\.qa\./)) {
			env = "qa";
		} else if (hostname.match(/\.dev\./)) {
			env = "dev";
		}

		// look for a branch sub-domain
		matches = hostname.match(/^([a-z][a-z0-9\-_]+[a-z0-9]?)\.(\w+?)\.(qa|dev)\./);
		if (matches) {
			branch = matches[1];
		}

		if (env && document.addEventListener) {
			document.addEventListener("DOMContentLoaded", function () {
				insertBadge(env, branch);
			});
		}
	}
}());


/*
 * show the text "All" in empty options
 */
(function($) {
	"use strict"

	function setEmptyOptionsToAll() {
		$("option[value=]").each(function (index, item) {
			var $item = $(item)
			if (! $item.text()) {
				$item.text("All");
			}
		});
	}

	$(document).on("ready", setEmptyOptionsToAll);
	$(document).ajaxSuccess(setEmptyOptionsToAll);
}(jQuery));
