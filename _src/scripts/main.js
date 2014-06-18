var $ = require('jquery');
var adverts = require('./adverts');

// FTLabs fastclick library - removes any native delay on touch interfaces
var attachFastClick = require('fastclick');
attachFastClick(document.body);

$(function(){
	// Insert ads
	adverts.insert();
});
