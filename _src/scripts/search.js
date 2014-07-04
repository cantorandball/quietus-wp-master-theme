'use strict';

var $ = require('zepto-browserify').$;

var $searchInput = $('.site-search input');
var $searchForm = $('.site-search');
var $searchButton = $('.site-search button');

module.exports = {
	init: function(){
			$(document).on('click', 'form.site-search:not(.is-active) button[type=submit]', function(e) {
			e.preventDefault();
			// Move the cursor to the end of the current value
			var value = $searchInput.val();
			console.log(value);
			$searchInput.val('').val(value);
			$searchForm.addClass('is-active').css({'position': 'relative'}).find('input').focus();
		})

		$(document).on('click', 'form.site-search button[type=button]', function(e) {
			$searchForm.removeClass('is-active');
			// El needs position: relative to cover elements below while showing
			// but :static to allow clicks through the <form> whilst hidden
			// but can't be done with css, so we're doing it once the transition completes.
			setTimeout(function(){$searchForm.css({'position': 'static'})}, 100)
		})
	}
}
