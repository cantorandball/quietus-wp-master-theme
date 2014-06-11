'use strict';
module.exports = (function(){
  document.getElementById('nav--global__toggle').addEventListener('click', function(){
      document.getElementById('nav--global').classList.toggle('is-active');
  })
})()
