var navGlobal = require('./nav--global');
var $ = require('jquery');

$(function(){
	// Load non-article ads
	$('[data-advert]').each(function(i, advert) {
		$('#' + advert.getAttribute('data-id')).html(advert.innerHTML);
	});
	// distribute article ads evenly between article paras
	var $articleAds = $('[data-advert-article]');
	var $articleParas = $('.post__content p');
	var parasBeforeAd = Math.floor($articleParas.length / ($articleAds.length + 1));
	$articleAds.each(function(i, ad){
		$($articleParas[(i * parasBeforeAd) + parasBeforeAd]).before(ad.innerHTML);
	})
});

// FTLabs fastclick library - removes any native delay on touch interfaces
var attachFastClick = require('fastclick');
attachFastClick(document.body);
