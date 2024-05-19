/*
This NodeJS script will recursively read files in a folder
and execute a series of search and replace commands.
Set the name of the folder as the value of the "dir" variable.
Run the script as follows: node recursive-replace.js
*/

const fs = require('fs');
const path = require('path');

const walk = dir => {
  try {
    let results = [];
    const list = fs.readdirSync(dir);
    list.forEach(file => {
      file = path.join(dir, file);
      const stat = fs.statSync(file);
      if (stat && stat.isDirectory()) {
        // Recurse into subdir
        results = [...results, ...walk(file)];
      } else {
        // Is a file
        results.push(file);
      }
    });
    return results;
  } catch (error) {
    console.error(`Error when walking dir ${dir}`, error);
  }
};

const edit = filePath => {
  if (filePath.endsWith('/company/index.njk') || filePath.endsWith('/apps/cybersecurity-asset-management/index.njk') || filePath.endsWith('/emails/lunch-learn/2022-02-03/ransomware-virtual/confirm/index.njk') || filePath.endsWith('/webcasts/untitled-entry-2024-01-22-at-09-38-40/index.njk') && !filePath.includes("_includes")) {
  // if (filePath.endsWith('.njk') && !filePath.includes("_includes")) {
    var oldContent = fs.readFileSync(filePath, {encoding: 'utf8'});

    // REPLACE {{#if class}} with {% if class %}
    var regex = /<header class="q-header"(.|\n)*?\<\/header>/gi;
    var replaceVal = '{% include "header-ueno.njk" %}';
    var newContent = oldContent.replace(regex, replaceVal);

    // REPLACE {{/if}} with {% endif %}
    oldContent = newContent;
    regex = /<footer class="q-footer"(.|\n)*?<\/footer>/gi;
    var replaceVal = '{% include "footer-ueno.njk" %}';
    var newContent = oldContent.replace(regex, replaceVal);

    // REPLACE page.platform with platform
    oldContent = newContent;
    regex = /<header class="sticky(.|\n)*?<\/header>/gi;
    var replaceVal = '{% include "header-chaitrail.njk" %}';
    var newContent = oldContent.replace(regex, replaceVal);

    // REPLACE {{markdown biography}} with {{ biography | markdown | safe }}
    oldContent = newContent;
    regex = /<footer role="footer"(.|\n)*?<\/footer>/gi;
    var replaceVal = '{% include "footer-chaitrail.njk" %}';
    var newContent = oldContent.replace(regex, replaceVal);

	oldContent = newContent;
    regex = /{{(.|\n)*?}}/gi;
    var replaceVal = '{# marketo variable #}';
    var newContent = oldContent.replace(regex, replaceVal);

    fs.writeFileSync(filePath, newContent, {encoding: 'utf-8'});
    console.log(`Edited file: ${filePath}`);
  }
};

const main = () => {
  const dir = 'src'; // folder name containing files
  const filePaths = walk(dir);
  filePaths.forEach(filePath => edit(filePath));
};

main();