'use strict';

var $ = require('zepto-browserify').$;
var raf = require('raf');

var searchInput = document.getElementById('search-input');
var searchForm = document.getElementById('site-search');

module.exports = {
	init: function(){
		if(!!searchInput && !!searchForm) {
			$(document).on('click', '#site-search:not(.is-active) button[type=submit]', function(e) {
				e.preventDefault();
					searchInput.focus();
					searchInput.select();
					searchForm.classList.add('is-active');
					searchForm.style.position = 'relative';
			})

			$(document).on('click', '#site-search button[type=button]', function(e) {
				searchForm.classList.remove('is-active');
				// El needs position: relative to cover elements below while showing
				// but :static to allow clicks through the <form> whilst hidden
				// but can't be done with css, so we're doing it once the transition completes.
				setTimeout(raf(function(){searchForm.style.position = 'static'}), 100)
			})
		}
	}
}
