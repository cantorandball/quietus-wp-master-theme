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
				searchInput.focus();
				searchInput.value = searchInput.value;
			})

			$(document).on('click', '#site-search button[type=button]', function(e) {
				searchForm.classList.remove('is-active');
			})
		}
	}
}
