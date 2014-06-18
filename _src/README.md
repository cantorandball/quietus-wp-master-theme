#Assets

These are the source files for `quietus-wp-master-theme` front-end assets, and they are managed by [gulp](http://gulpjs.com).

They are built into:

	/css
	/images
	/js

Any assets that should be available to the site **must** be saved to the relevant directory under `/_src`.

## Setup up

Make sure you have [node installed](http://nodejs.org/), then run:

    npm install
    bower install

## Use

There are 2 gulp tasks available:

1. `gulp dev` watches source files and rebuilds assets on the fly. It also runs a LiveReload server (includes `.php`).
2. `gulp build` rebuilds and minifies all assets.
