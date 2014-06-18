# Organisation

- all CSS comes from these Sass files or [Bower](http://bower.io) libs, all of which are included from `main.scss`

# Editing

- [bootstrap mixins](https://github.com/twbs/bootstrap-sass/tree/master/vendor/assets/stylesheets/bootstrap/mixins) are included and available throught the scss
- for the sake of consistency, try and run [CSSComb](https://github.com/csscomb/csscomb) before commiting changes

# Helpers etc

- the final output is run through [autoprefixer](https://github.com/ai/autoprefixer) and minified with [CSSO](https://github.com/css/csso), so you do not need to use vendor prefixes etc.

