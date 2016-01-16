quietus-wp-master-theme
=======================

## Theme development

### Prequisites

You’ll need node.js, gulp, and bower installed in your local environment. For Mac OS X, the easiest way is with Homebrew:

```
brew install node
npm install -g gulp
npm install -g bower
```

### Setup

```
git clone git@github.com:cantorandball/quietus-wp-master-theme.git quietus-wp-master-theme
cd quietus-wp-master-theme
npm install
bower install
```

### Development

The theme is managed by [gulp](http://gulpjs.com). It looks for assets under `/src`. See `gulpfile.js` for details.

To generate a build, run:

```
gulp compile
```

The generated theme will be in `/dist`, which is not versioned.

To view the theme in WordPress, either zip up the generated theme and install it, or symlink it to somewhere inside your local `WP_INSTALL/wp-content/themes` directory.
