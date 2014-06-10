'use strict';
module.exports = (function(){
  document.getElementById('site-nav__toggle').addEventListener('click', function(){
      document.getElementById('site-nav').classList.toggle('is-active');
  })
})()