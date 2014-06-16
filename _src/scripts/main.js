var navGlobal = require('./nav--global');
var $ = require('jquery');

$(function(){
	// Load non-article ads
	$('[data-advert]').each(function(i, advert) {
		$('#' + advert.getAttribute('data-id')).html(advert.innerHTML);
	});
});

// FTLabs fastclick library - removes any native delay on touch interfaces
var attachFastClick = require('fastclick');
attachFastClick(document.body);
