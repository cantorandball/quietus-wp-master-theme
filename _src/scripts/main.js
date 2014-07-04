var $ = require('zepto-browserify').$;
var adverts = require('./adverts');
var overflowNav = require('./overflow-nav');
var search = require('./search');
var digest = require('./digest');

// FTLabs fastclick library - removes any native delay on touch interfaces
var attachFastClick = require('fastclick');
attachFastClick(document.body);

$(function(){
	adverts.insert();
	overflowNav.init();
	search.init();
	digest.init();
});
