#!/usr/bin/env node

/*!
  CLI. Implant `package.version` in index.js, README.md etc.

  © Nick Freear, 04-June-2017 | License: MIT.
  https://github.com/nfreear/sign-machine
*/

const replace = require('replace');
const INDEX_JS = path('/../src/sign-machine.js');
const README = path('/../README.md');
const INDEX_HTML = path('/../test/index.html');
const PKG = require('../package');
const VERSION_TAG = PKG.version;
const JQUERY_VER = PKG.peerDependencies.jquery;

console.warn('VERSION_TAG :', VERSION_TAG);
console.warn('jQuery ver  :', JQUERY_VER);

/* replace({
  paths: [ INDEX_JS ],
  regex: /VERSION_TAG = '.+';(.+Auto.)?/,
  replacement: version('VERSION_TAG = \'%s\'; // <Auto>'),
  count: true,
  recursive: false
}); */

replace({
  paths: [ README ],
  regex: /cdn.rawgit.com\/nfreear\/sign-machine\/(\d\.\d(\.\d)?(-[.\w]+)?)\//g,
  replacement: version('cdn.rawgit.com/nfreear/sign-machine/%s/'),
  count: true,
  recursive: false
});

replace({
  paths: [ README ],
  regex: /unpkg.com\/sign-machine@(\d\.\d\.\d(-[.\w]+)?)/g,
  replacement: version('unpkg.com/sign-machine@%s'),
  count: true,
  recursive: false
});

replace({
  paths: [ README, INDEX_HTML ],
  regex: /unpkg.com\/jquery@(\d\.\d\.\d+)/g,
  replacement: jqueryVersion('unpkg.com/jquery@%s'),
  count: true,
  recursive: false
});

if (argvCheck('--all')) {

  require('fs').writeFileSync(VERSION_FILE, version(VERSION_JS));
}

function argvCheck (flag) {
  return process.argv[ process.argv.length - 1 ] === flag;
  // return process.argv.includes(flag); // https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Array/includes
}

function path (file) {
  return require('path').join(__dirname, file);
}

function version (str) {
  return str.replace('%s', VERSION_TAG);
}

function jqueryVersion (str) {
  return str.replace('%s', JQUERY_VER.replace('^', ''));
}

// End.
