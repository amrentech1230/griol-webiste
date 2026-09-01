document.addEventListener('DOMContentLoaded', function () {
  var hamburger = document.getElementById('hamburger');
  var mobileNav = document.getElementById('mobile-nav');
  var iconMenu  = document.getElementById('icon-menu');
  var iconClose = document.getElementById('icon-close');

  if (hamburger) {
    hamburger.addEventListener('click', function () {
      var open = mobileNav.classList.toggle('open');
      iconMenu.style.display  = open ? 'none'  : 'block';
      iconClose.style.display = open ? 'block' : 'none';
    });
  }

  var servicesToggle = document.getElementById('mobile-services-toggle');
  var servicesList   = document.getElementById('mobile-services-list');

  if (servicesToggle) {
    servicesToggle.addEventListener('click', function () {
      servicesList.classList.toggle('open');
    });
  }
});
