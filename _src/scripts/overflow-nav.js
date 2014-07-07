var $ = require('zepto-browserify').$;
var optimisedResize = require('./optimized-resize');

var $primaryNav = $('.site-nav-primary');
var items = $('.site-nav-primary li');
var $overflowNav = $('.site-nav-overflow');
var $overflowNavList = $('.site-nav-overflow-items');
var $overFlowNavItems = items.clone();
var $toggle = $('.site-nav-overflow-toggle');

// TODO: manage as one HTML update
var flowNavItems = function(){
	var visible = false;
	var highlight = false;
	for(var i = items.length-1; i >= 0; i--) {
		if(items[i].offsetTop > 0){
			var item = $overFlowNavItems[i];
			item.style.display = 'block';
			if(item.classList.contains('active')){
				highlight = true;
			}
			visible = true;
		} else {
			$overFlowNavItems[i].style.display = 'none';
		}
	};
	$overflowNav.toggle(visible);
	$toggle.toggleClass('highlight', highlight);
	$primaryNav.css('padding-right', (visible ? '4rem' : '2rem'))
};

module.exports = {
	init: function(){
		$overflowNavList.prepend($overFlowNavItems);
		flowNavItems();
		optimisedResize.init(flowNavItems);

		$(document).on("click", function(){
			$overflowNav.removeClass('active');
		});

		$(document.body).on('click', '.site-nav-overflow-toggle', function(e){
			e.stopPropagation();
			$overflowNav.toggleClass('active');
		});
	}
}
