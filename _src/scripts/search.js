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
				searchForm.classList.add('is-active');
				searchForm.style.position = 'relative';
				searchInput.focus();
				searchInput.select();
			})

			$(document).on('click', '#site-search button[type=button]', function(e) {
				searchForm.classList.remove('is-active');
				// The form needs 'position: relative' to cover the nav elements below
				// while showing, but 'position: static' to allow clicks to pass through
				// the <form> whilst it's hidden (i.e. after the transition finishes).
				// We can't set 'position: x' in a transition though, so we're doing it
				// programatically once the transition completes.
				setTimeout(raf(function(){
					searchForm.style.position = 'static';
				}), 100)
			})
		}
	}
}
