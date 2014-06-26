var $ = require('jquery');
var optimisedResize = require('./optimized-resize');

var items = $('.nav--global__primary li');
var $overflowNav = $('.nav--global__overflow');
var $overflowNavList = $('.nav--global__overflow-items');
var $overFlowNavItems = items.clone();
var $toggle = $('.nav--global__overflow-toggle');

// TODO: manage as one HTML update
var flowNavItems = function(){
	var visible = false;
	var highlight = false;
	for(var i = items.length-1; i >= 0; i--) {
		var href = items[i].getAttribute;
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
	$toggle.toggleClass('highlight', highlight)
};

module.exports = {
	init: function(){
		$overflowNavList.prepend($overFlowNavItems);
		flowNavItems();
		optimisedResize.init(flowNavItems);

		$(document).on("click", function(){
			$overflowNav.removeClass('active');
		});

		$(document.body).on('click', '.nav--global__overflow-toggle', function(e){
			e.stopPropagation();
			$overflowNav.toggleClass('active');
		});
	}
}