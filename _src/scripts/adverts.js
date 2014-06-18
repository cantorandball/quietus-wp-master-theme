'use strict';

var $ = require('jquery');

module.exports = {
	insert: function(){
			// Load non-article ads
		$('[data-advert]').each(function(i, advert) {
			$('#' + advert.getAttribute('data-id')).html(advert.innerHTML);
		});

		// distribute article ads evenly between article paras
		var $articleAds = $('[data-advert-article]');
		var $articleParas = $('.post__content p');
		var parasBeforeAd = Math.floor(($articleParas.length - 1) / $articleAds.length);
		$articleAds.each(function(i, ad){
			var adSrc = '<div class="advert">' + ad.innerHTML + '</div>';
			$($articleParas[(i * parasBeforeAd) + parasBeforeAd]).before(adSrc);
		});
	}
}
