var $ = require('zepto-browserify').$;
var adverts = require('./adverts');
var overflowNav = require('./overflow-nav');

// FTLabs fastclick library - removes any native delay on touch interfaces
var attachFastClick = require('fastclick');
attachFastClick(document.body);

$(function(){
	// Insert ads
	adverts.insert();

	overflowNav.init();

	$(document).on('click', '.digest-section-title', function(e){
		var $el = $(e.target);
		$el.siblings().removeClass('is-active');
		$el.addClass('is-active');
	})
});
