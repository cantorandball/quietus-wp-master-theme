var $ = require('jquery');
var adverts = require('./adverts');
var overflowNav = require('./overflow-nav');

// FTLabs fastclick library - removes any native delay on touch interfaces
var attachFastClick = require('fastclick');
attachFastClick(document.body);

$(function(){
	// Insert ads
	adverts.insert();

	overflowNav.init();
});
