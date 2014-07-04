'use strict';

var $ = require('zepto-browserify').$;
var raf = require('raf');

var $searchInput = $('.site-search input');
var $searchForm = $('.site-search');

module.exports = {
	init: function(){
			$(document).on('click', 'form.site-search:not(.is-active) button[type=submit]', function(e) {
			e.preventDefault();
			var value = $searchInput.val();
			raf(function(){
				$searchForm.addClass('is-active').css({'position': 'relative'});
			})
			raf(function(){
				// Move the cursor to the end of the current value
				$searchInput.val('').val(value).focus();
			});
		})

		$(document).on('click', 'form.site-search button[type=button]', function(e) {
			$searchForm.removeClass('is-active');
			// El needs position: relative to cover elements below while showing
			// but :static to allow clicks through the <form> whilst hidden
			// but can't be done with css, so we're doing it once the transition completes.
			setTimeout(raf(function(){$searchForm.css({'position': 'static'})}), 100)
		})
	}
}
