module.exports = function(eleventyConfig) {
	// eleventyConfig.addPassthroughCopy("src", {
	// 	//debug: true,
	// 	filter: [
	// 		"404.html",
	// 		"**/*.css",
	// 		"**/*.js",
	// 		"**/*.json",
	// 		"!**/*.11ty.js",
	// 		"!**/*.11tydata.js",
	// 	]
	// });
  // 
	// // Copy img folder
	// eleventyConfig.addPassthroughCopy("src/img");
// 
	// eleventyConfig.setServerPassthroughCopyBehavior("copy");

	eleventyConfig.ignores.add("**/*.css");
	eleventyConfig.ignores.add("**/*.js");
	eleventyConfig.ignores.add("**/*.json");

	return {
		dir: {
			input: "src",
			// ⚠️ These values are both relative to your input directory.
			includes: "_includes",
			layouts: "_layouts",
		}
	}
};