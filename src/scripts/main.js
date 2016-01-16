require('browsernizr2/test/touchevents');
require('browsernizr2');

var adverts = require('./adverts');
var overflowNav = require('./overflow-nav');
var search = require('./search');
var digest = require('./digest');

// FTLabs fastclick library - removes any native delay on touch interfaces
var attachFastClick = require('fastclick');
attachFastClick(document.body);

window.onload = adverts.insert;
overflowNav.init();
search.init();
digest.init();
