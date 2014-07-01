'use strict';

var $ = require('zepto-browserify').$;

module.exports = {
	init: function() {
		$(document).on('click', '.digest-section-title', function(e){
			var $el = $(e.target);
			$el.siblings().removeClass('is-active');
			$el.addClass('is-active');
		})
	}
}
