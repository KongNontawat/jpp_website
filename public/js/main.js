var myNav = document.getElementById('mynav');
var logo = document.querySelector('.navbar-logo');
window.onscroll = function () {
  check_navbar()
};

window.addEventListener('resize',check_navbar());

window.onload = function() {
check_navbar()
};

function check_navbar() {
      if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200 || document.body.clientWidth <= 992 || document.documentElement.clientWidth <= 992) {
    myNav.classList.add("nav-scroll");
    myNav.classList.remove("nav-transparent");
    logo.setAttribute('src', 'image/logo2.png');
  } else {
    myNav.classList.add("nav-transparent");
    myNav.classList.remove("nav-scroll");
    logo.setAttribute('src', 'image/logo2_light.png');
  }
}
