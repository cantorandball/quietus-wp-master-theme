// https://developer.mozilla.org/en-US/docs/Web/Events/resize
var raf = require('raf');
module.exports = (function() {

	var callbacks = [],
		changed = false,
		running = false;

	// fired on resize event
	function resize() {
		if (!running) {
			changed = true;
			loop();
		}
	}

	// resource conscious callback loop
	function loop() {
		if (!changed) {
			running = false;
		}
		else {
			changed = false;
			running = true;

			callbacks.forEach(function(callback) {
				callback();
			});

			raf(loop);
		}
	}

	// adds callback to loop
	function addCallback(callback) {
		if (callback) {
			callbacks.push(callback);
		}
	}

	return {
		// initalize resize event listener
		init: function(callback) {
			if (raf) {
				window.addEventListener('resize orientationchange', resize);
				addCallback(callback);
			}
		},

		// public method to add additional callback
		add: function(callback) {
			addCallback(callback);
		}
	}
}());
