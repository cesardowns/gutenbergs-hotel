'use strict'

document.querySelector('.hamburger').addEventListener('click', function(){
  this.classList.toggle('is-active');
  let mobileNavMenu = document.querySelector('.mobile-nav-panel');
  mobileNavMenu.classList.toggle('active-menu');
});
